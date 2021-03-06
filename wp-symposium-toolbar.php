<?php
/*
Plugin Name: WP Symposium Toolbar
Description: The Ultimate Toolbar Plugin - And the WordPress Toolbar can finally be part of your site
Author: AlphaGolf_fr
Author URI: http://profiles.wordpress.org/AlphaGolf_fr/
Contributors: AlphaGolf_fr, Central Geek
Donate Link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=3DELJEHZEFGHQ
Tags: toolbar, admin, bar, navigation, nav-menu, menu, menus, theme, brand, branding, members, membership
Requires at least: 4.3
Tested up to: 4.3.1
Stable tag: 0.33.0
Version: 0.33.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

// Reference:
// http://developer.wordpress.org/resource/dashicons/
	
// Increase Build nr at each version
define( "WPST_BUILD_NR", 3223 );


// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// Stop this plugin below a minimum WordPress version
global $wp_version;
if( version_compare( $wp_version, '4.3', '<' ) )
	return false;

// Sounds good... Now a few more checks

if ( ! function_exists( 'is_plugin_active_for_network' ) || ! function_exists( 'is_plugin_active' ) ) include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( is_admin() ) include_once( 'wp-symposium-toolbar_admin.php' );
if ( is_admin() ) include_once( 'wp-symposium-toolbar_admin_functions.php' );
include_once( 'wp-symposium-toolbar_functions.php' );
if ( is_admin() ) include_once( 'wp-symposium-toolbar_help.php' );

// Is WP Symposium running on this site ?
if ( is_multisite() )
	(bool)$is_wps_active = ( is_plugin_active_for_network( 'wp-symposium/wp-symposium.php' ) || is_plugin_active( 'wp-symposium/wp-symposium.php' ) );
else
	(bool)$is_wps_active = is_plugin_active( 'wp-symposium/wp-symposium.php' );

define( "WPST_IS_WPS_ACTIVE", $is_wps_active );
// true when WPS active on the current site, either network activated or site activated, false otherwise

if ( WPST_IS_WPS_ACTIVE ) {
	if ( !function_exists( '__wps__get_url' ) ) include_once( plugin_dir_path( __FILE__ ).'../wp-symposium/functions.php' );
	if ( !defined( 'WPS_TEXT_DOMAIN' ) ) define( 'WPS_TEXT_DOMAIN', 'wp-symposium' );
	if ( !defined( 'WPS_DIR' ) ) define( 'WPS_DIR', 'wp-symposium' );
}


/* ==================================================================== MAIN / ADMIN ======================================================================= */

function symposium_toolbar_main() {
	// Ties in with add_toolbar_installation_row() function below.
}

function symposium_toolbar_init() {
	
	// Is WP Symposium available somewhere on the network ?
	global $wpdb;
	(bool)$is_wps_available = WPST_IS_WPS_ACTIVE;
	if ( is_multisite() ) if ( !$is_wps_available ) {
		$blogs = wp_get_sites();
		foreach ($blogs as $blog) {
			$wpdb_prefix = ( $blog['blog_id'] == "1" ) ? $wpdb->base_prefix : $wpdb->base_prefix.$blog['blog_id']."_";
			// Is WPS active on this site
			$search_wps = $wpdb->get_row( $wpdb->prepare( "SELECT option_value FROM ".$wpdb_prefix."options WHERE option_name = '%s'", 'active_plugins' ), ARRAY_A );
			$is_wps_available = ( !is_null( $search_wps ) ) ? is_string( strstr ( $search_wps["option_value"], "wp-symposium/wp-symposium.php" ) ) : false;
			// Break if found at least one site where WPS is activated
			if ( $is_wps_available ) break;
		}
	}
	define( "WPST_IS_WPS_AVAILABLE", $is_wps_available );
	// true when WPS is available from any site of the network, false otherwise
	
	// Is there a WP Symposium Profile page defined somewhere on the network ?
	// Needed in WPMS for WPS icons and paths
	(bool)$is_wps_profile_active = false;
	if ( $is_wps_available ) {
		if ( !defined( 'WPS_OPTIONS_PREFIX' ) ) define( 'WPS_OPTIONS_PREFIX', 'symposium' );
		(bool)$is_wps_profile_active = ( symposium_toolbar_wps_url_for( 'profile' ) != array() );
	}
	define( "WPST_IS_WPS_PROFILE_ACTIVE", $is_wps_profile_active );
	// true when WPS Profile feature was activated and a profile page is defined on the site or network of sites
	
	// CSS
	// Admin settings pages CSS is merged with Toolbar CSS that applies at all pages, both frontend and backend
	
	$adminStyleUrl = plugins_url( 'css/wp-symposium-toolbar_admin.css', __FILE__ );
	$adminStyleFile = plugin_dir_path( __FILE__ ).'css/wp-symposium-toolbar_admin.css';
	if ( file_exists($adminStyleFile) ) {
		wp_enqueue_style( 'wp-symposium-toolbar_admin', $adminStyleUrl, array( 'dashicons' ), WPST_BUILD_NR );
	}
	
	// Get screen tab ID
	$wpst_active_tab = 'welcome';
	if ( isset( $_GET["tab"] ) ) $wpst_active_tab = $_GET["tab"];
	if ( isset( $_POST["symposium_toolbar_view"] ) ) $wpst_active_tab = $_POST["symposium_toolbar_view"];
	
	// CSS / JS files
	$doing_ajax = ( defined( 'DOING_AJAX' ) && DOING_AJAX );
	if ( is_admin() && ! $doing_ajax ) {
		
		// Default CSS - load at 'Styles'/'CSS' tabs solely, unless Admin chooses to style the whole admin dashboard...
		// Dependant on 'colors' to ensure this CSS is loaded before, and override its values with 'default'
		if ( ( $wpst_active_tab == 'style' ) || ( $wpst_active_tab == 'css' ) || ( get_option( 'wpst_style_tb_in_admin', '' ) == "on" ) ) {
			$adminStyleUrl = plugins_url( 'css/wp-symposium-toolbar_default.css', __FILE__ );
			$adminStyleFile = plugin_dir_path( __FILE__ ).'css/wp-symposium-toolbar_default.css';
			if ( file_exists( $adminStyleFile ) ) {
				wp_enqueue_style( 'wp-symposium-toolbar_default', $adminStyleUrl, array( 'colors' ), WPST_BUILD_NR );
			}
		}
		
		// JS preview - load preview at 'Styles' tab solely
		if ( $wpst_active_tab == 'style' ) {
			wp_enqueue_script( 'wp-symposium-toolbar_preview', plugins_url( 'js/wp-symposium-toolbar_preview.js', __FILE__ ), array( 'jquery', 'wp-color-picker' ), WPST_BUILD_NR );
		}
	}
	
	// Language files
	// Get mo file name from locale
	$locale = get_locale();									// Default locale
	$mofile = 'wp-symposium-toolbar-' . $locale . '.mo';	// Language file
	
	// Setup paths to current locale file
	$plugin_dir	= dirname(plugin_basename(__FILE__)) . '/lang/';
	
	// Look in plugin folder wp-symposium-toolbar/lang/
	if ( file_exists( plugin_dir_path( __FILE__ ) . 'lang/' . $mofile ) )
		if ( function_exists( 'load_plugin_textdomain' ) ) { load_plugin_textdomain( 'wp-symposium-toolbar', false, $plugin_dir ); }
	
	// Must be performed after translation was loaded
	symposium_toolbar_init_globals();
}
add_action( 'init', 'symposium_toolbar_init' );

function symposium_toolbar_trigger_activate() {
	
	global $wpst_roles_all;
	
	if ( is_multisite() && is_main_site() ) {
		$blogs = wp_get_sites();
		
		foreach ( $blogs as $blog ) {
			switch_to_blog( $blog['blog_id'] );
			symposium_toolbar_init_globals();
			symposium_toolbar_activate();
			restore_current_blog();
		}
	
	} else {
		if ( !$wpst_roles_all ) symposium_toolbar_init_globals();
		symposium_toolbar_activate();
	}
}
register_activation_hook(__FILE__,'symposium_toolbar_trigger_activate' );

function symposium_toolbar_trigger_update() {

	// Upgrade db with new options etc.
	if ( get_option( 'wpst_tech_buildnr', 0 ) < WPST_BUILD_NR ) {
		symposium_toolbar_update_walker();
	}
}
add_action( 'admin_head-plugins.php', 'symposium_toolbar_trigger_update' );
add_action( 'admin_head-update-core.php', 'symposium_toolbar_trigger_update' );

function symposium_toolbar_uninstall() {
	
	global $wpdb;
	
	// Delete all options
	if ( is_multisite() && is_main_site() ) {
		$blogs = wp_get_sites();
		
		foreach ($blogs as $blog) {
			$wpdb_prefix = ( $blog['blog_id'] == "1" ) ? $wpdb->base_prefix : $wpdb->base_prefix.$blog['blog_id']."_";
			$wpdb->query( "DELETE FROM ".$wpdb_prefix."options WHERE option_name LIKE 'wpst_%'" );
		}
	} else
		$wpdb->query( "DELETE FROM ".$wpdb->prefix."options WHERE option_name LIKE 'wpst_%'" );
	
	// Do not delete NavMenus as they might be used somewhere else than in WP Toolbar...
}
register_uninstall_hook(__FILE__, 'symposium_toolbar_uninstall' );


/* =========================================================== HOOKS & FILTERS INTO WP SYMPOSIUM =========================================================== */

if ( WPST_IS_WPS_ACTIVE ) {
	
	// Add row to WPS installation page showing status of the plugin through hook provided
	function add_toolbar_installation_row() {
		
		__wps__install_row(
			'wpcustomtoolbar',															// unique identifier
			__( 'Toolbar', 'wp-symposium-toolbar' ), 									// plugin title
			'', 																		// shortcode
			'symposium_toolbar_main',													// main function
			'-', 																		// internal URL path or -
			'wp-symposium-toolbar/wp-symposium-toolbar.php', 							// main plugin file
			'admin.php?page=wp-symposium-toolbar/wp-symposium-toolbar_admin.php', 		// admin page
			'__wps__activated'															// set as activated on installation page
		);
	}
	add_action( '__wps__installation_hook', 'add_toolbar_installation_row' );

	// Add "Toolbar" to WP Symposium admin menu via hook
	function symposium_toolbar_add_to_admin_menu() {
		
		// Nr of tabs that can be hidden incl. WPS
		$wpst_wpms_hidden_tabs = get_option( 'wpst_wpms_hidden_tabs', array() );
		if ( !in_array( 'wps', $wpst_wpms_hidden_tabs ) ) $wpst_wpms_hidden_tabs[] = 'wps';
		if ( count( $wpst_wpms_hidden_tabs ) == 9 )
			return;
		
		add_submenu_page(
			'symposium_debug',
			__( 'Toolbar', 'wp-symposium-toolbar' ),
			__( 'Toolbar', 'wp-symposium-toolbar' ),
			'manage_options',
			'wp-symposium-toolbar/wp-symposium-toolbar_admin.php',
			'symposium_toolbar_admin_page'
		);
	}
	add_action( '__wps__admin_menu_hook', 'symposium_toolbar_add_to_admin_menu' );


/* =========================================================== HOOKS & FILTERS INTO WORDPRESS ============================================================== */

} else {

	// Add "Toolbar" to WP Admin menu
	function add_symposium_toolbar_to_admin_menu() {
		
		// Nr of tabs that can be hidden
		$wpst_wpms_hidden_tabs = get_option( 'wpst_wpms_hidden_tabs', array() );
		if ( !in_array( 'wps', $wpst_wpms_hidden_tabs ) ) $wpst_wpms_hidden_tabs[] = 'wps';
		if ( count( $wpst_wpms_hidden_tabs ) == 9 )
			return;
		
		add_theme_page(
			__( 'WPS Toolbar Options', 'wp-symposium-toolbar' ),
			__( 'Toolbar', 'wp-symposium-toolbar' ),
			'manage_options',
			'wp-symposium-toolbar/wp-symposium-toolbar_admin.php',
			'symposium_toolbar_admin_page'
		);
	}
	add_action( 'admin_menu', 'add_symposium_toolbar_to_admin_menu' );
}

if ( is_multisite() && is_plugin_active_for_network( 'wp-symposium-toolbar/wp-symposium-toolbar.php' ) ) {
	
	// Add default tabs to new subsites
	function symposium_toolbar_new_site_default( $blog_id, $user_id, $domain, $path, $site_id, $meta ) {
		
		// Hidden tabs
		$wpst_wpms_hidden_tabs_all = get_option( 'wpst_wpms_hidden_tabs_all', array() );
		$hidden_tabs = get_option( 'wpst_wpms_hidden_tabs_default', array() );
		$wpst_wpms_hidden_tabs_all[ $blog_id ] = $hidden_tabs;
		update_option( 'wpst_wpms_hidden_tabs_all', $wpst_wpms_hidden_tabs_all );
		
		// Get other data from Main Site settings
		$wpst_style_tb_current = get_option( 'wpst_style_tb_current', array() );
		$wpst_wpms_network_superadmin_menu = get_option( 'wpst_wpms_network_superadmin_menu', "" );
		
		switch_to_blog( $blog_id );
		
		// Set globals locally
		symposium_toolbar_init_globals();
		
		// Create menus
		if ( WPST_IS_WPS_ACTIVE ) symposium_toolbar_activate();
		
		// Update new site settings with Main Site settings
		symposium_toolbar_update();
		if ( $hidden_tabs ) foreach( $hidden_tabs as $tab ) {
			symposium_toolbar_update_tab( $blog_id, $tab );
		}
		update_option( 'wpst_wpms_hidden_tabs', $hidden_tabs );
		update_option( 'wpst_wpms_network_superadmin_menu', $wpst_wpms_network_superadmin_menu );
		
		// Update CSS based on stored styles and settings, as well as other plugins
		update_option( 'wpst_tech_style_to_header', symposium_toolbar_update_styles( $wpst_style_tb_current ) );
		
		restore_current_blog();
	}
	add_action( 'wpmu_new_blog', 'symposium_toolbar_new_site_default', 10, 6 );
}

// Load at Admin settings page only...
function symposium_toolbar_load_settings_page() {
	
	// Ensure update was performed earlier
	if ( get_option( 'wpst_tech_buildnr', 0 ) < WPST_BUILD_NR ) {
		symposium_toolbar_update_walker();
	}
	
	// CSS for WP color picker
	wp_enqueue_style( 'wp-color-picker' );
	
	// Add the JS var for confirm leaving the page
	echo '<script type="text/javascript">var needToConfirm = false;</script>';
	
	// Load Javascript file
	wp_enqueue_script( 'wp-symposium-toolbar', plugins_url( 'js/wp-symposium-toolbar.js', __FILE__ ), array( 'jquery' ), WPST_BUILD_NR );
	wp_localize_script( 'wp-symposium-toolbar', 'wpstL10n', array(
		'needToConfirm' => __('You have attempted to leave this page.  If you have made any changes to the fields without clicking the Save button, your changes will be lost.  Are you sure you want to exit this page?', 'wp-symposium-toolbar')
	) );
}
add_action( 'admin_head-wp-symposium_page_wp-symposium-toolbar/wp-symposium-toolbar_admin', 'symposium_toolbar_load_settings_page');
add_action( 'admin_head-appearance_page_wp-symposium-toolbar/wp-symposium-toolbar_admin', 'symposium_toolbar_load_settings_page' );

// Save settings before _wp_admin_bar_init initializes the Admin Bar class
add_action( 'admin_init', 'symposium_toolbar_init_admin_globals', 0 );
add_action( 'admin_init', 'symposium_toolbar_save_before_render', 1 );


// Toolbar rendition

// Triggers the display ot WP Toolbar in the frontend - always shown in the backend
add_filter( 'show_admin_bar', 'symposium_toolbar_show_admin_bar', 10, 1 );

// Add styles to pages header
add_action( 'admin_head', 'symposium_toolbar_add_styles', 20 );
add_action( 'wp_head', 'symposium_toolbar_add_styles', 20 );

// Toolbar Extended
function symposium_toolbar_extends_class( $class ) {

	include_once( 'wp-symposium-toolbar_class.php' );
	return "WPST_Admin_Bar";
}
add_filter( 'wp_admin_bar_class', 'symposium_toolbar_extends_class', 10, 1 );

// Edit the Profile link to point to a custom page
add_filter( 'edit_profile_url', 'symposium_toolbar_edit_profile_url', 10, 3 );

// End of Toolbar rendition


// Help tabs
add_action( 'contextual_help', 'symposium_toolbar_add_help_text', 10, 3 );

// WP Profile options: to show the admin bar when viewing the site, to make a site the Home Site (in WPMS)
if ( is_multisite() ) {
	add_action( 'personal_options_update', 'symposium_toolbar_custom_profile_update', 10, 1 );
	add_action( 'edit_user_profile_update', 'symposium_toolbar_custom_profile_update', 10, 1 );
}
add_action( 'show_user_profile', 'symposium_toolbar_custom_profile_option', 10, 1 );
add_action( 'edit_user_profile', 'symposium_toolbar_custom_profile_option', 10, 1 );

?>
