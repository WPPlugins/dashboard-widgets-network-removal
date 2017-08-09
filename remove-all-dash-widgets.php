<?php
/*
Plugin name: Dashboard Widgets Network Removal
Plugin URI: http://erikshosting.com/scripts-code/remove-dashboard-widgets-wp-network/
Description: Remove ALL Default WP Dashboard Widgets, Network Wide
Author: Erikshosting
Version: 1.2
Author URI: http://erikshosting.com
*/
function erocks_kill_all_dash_widgets() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}
add_action( 'wp_dashboard_setup', 'erocks_kill_all_dash_widgets' );
?>