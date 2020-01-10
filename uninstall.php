<?php
// If uninstall is not called from WordPress, exit
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit();
}
 
		delete_option( 'wpbm_howdy_text' );
		delete_option( 'wpbm_eliminate_logo' );
		delete_option( 'wpbm_eliminate_new_menu' );
		delete_option( 'wpbm_eliminate_help' );
		delete_option( 'wpbm_lower_left_text' );
		delete_option( 'wpbm_login_logo' );
		delete_option( 'wpbm_login_logo_height' );
		delete_option( 'wpbm_remove_comp_dashboards' );
		delete_option( 'wpbm_left_widget_title' );
		delete_option( 'wpbm_left_widget_content' );
		delete_option( 'wpbm_right_widget_title' );
		delete_option( 'wpbm_right_widget_content' );
		delete_option( 'wpbm_remove_from_admin_menu' );