<?php
/**
 * Plugin Name: Trending/Popular Post Slider and Widget
 * Plugin URI: http://www.wponlinesupport.com/
 * Description: Show Trending/Popular post in page and sidebar with slider/Grid block with different designs. 
 * Author: WP Online Support 
 * Version: 1.2.2
 * Author URI: http://www.wponlinesupport.com/
 *
 * @package WordPress
 * @author SP Technolab
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/**
 * Basic plugin definitions
 * 
 * @package WP Trending Post Slider and Widget
 * @since 1.0.0
 */
if( !defined( 'WTPSW_VERSION' ) ) {
	define( 'WTPSW_VERSION', '1.2.2' ); // Version of plugin
}
if( !defined( 'WTPSW_DIR' ) ) {
	define( 'WTPSW_DIR', dirname( __FILE__ ) ); // Plugin dir
}
if( !defined( 'WTPSW_URL' ) ) {
	define( 'WTPSW_URL', plugin_dir_url( __FILE__ ) ); // Plugin url
}
if( !defined( 'WTPSW_META_PREFIX' ) ) {
	define( 'WTPSW_META_PREFIX', '_wtpsw_' ); // Plugin meta prefix
}

/**
 * Load Text Domain
 * This gets the plugin ready for translation
 * 
 * @package WP Trending Post Slider and Widget
 * @since 1.0.0
 */
function wtpsw_load_textdomain() {
	load_plugin_textdomain( 'wtpsw', false, dirname( plugin_basename(__FILE__) ) . '/languages/' );
}

// Action to load plugin text domain
add_action('plugins_loaded', 'wtpsw_load_textdomain');

/**
 * Activation Hook
 * 
 * Register plugin activation hook.
 * 
 * @package WP Trending Post Slider and Widget
 * @since 1.0.0
 */
register_activation_hook( __FILE__, 'wtpsw_install' );

/**
 * Deactivation Hook
 * 
 * Register plugin deactivation hook.
 * 
 * @package WP Trending Post Slider and Widget
 * @since 1.0.0
 */
register_deactivation_hook( __FILE__, 'wtpsw_uninstall');

/**
 * Plugin Activation Function
 * Does the initial setup, sets the default values for the plugin options
 * 
 * @package WP Trending Post Slider and Widget
 * @since 1.0.0
 */
function wtpsw_install(){

	// get settings for the plugin
	$wtpsw_options = get_option( 'wtpsw_options' );
	
	if( empty( $wtpsw_options ) ) { // Check plugin version option

		// set default settings
		wtpsw_default_settings();
	}
}

/**
 * Plugin Deactivation Function
 * Delete  plugin options
 * 
 * @package WP Trending Post Slider and Widget
 * @since 1.0.0
 */
function wtpsw_uninstall(){

}

// Taking some globals
global $wtpsw_options, $wtpsw_model, $wtpsw_view_by;

// Functions File
require_once(  WTPSW_DIR . '/includes/wtpsw-functions.php' );
$wtpsw_options = wtpsw_get_settings();

// Model Class File
require_once(  WTPSW_DIR . '/includes/class-wtpsw-model.php' );

// Script Class File
require_once(  WTPSW_DIR . '/includes/class-wtpsw-script.php' );

// Admin Class File
require_once(  WTPSW_DIR . '/includes/admin/class-wtpsw-admin.php' );

// Shortcode Class File
require_once(  WTPSW_DIR . '/includes/class-wtpsw-shortcode.php' );

// Public Class File
require_once(  WTPSW_DIR . '/includes/class-wtpsw-public.php' );

// Wigets File
require_once( WTPSW_DIR . '/includes/widgets/class-wtpsw-post-list-widget.php' );