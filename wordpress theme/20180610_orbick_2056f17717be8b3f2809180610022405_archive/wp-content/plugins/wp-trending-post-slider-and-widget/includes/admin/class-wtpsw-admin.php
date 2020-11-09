<?php
/**
 * Admin Class
 *
 * Handles admin side functionality of plugin
 *
 * @package WP Trending Post Slider and Widget
 * @since 1.0.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

class Wtpsw_Admin {

	function __construct() {

		// Action to register admin menu
		add_action( 'admin_menu', array($this, 'wtpsw_register_menu') );

		// Action to register plugin settings
		add_action ( 'admin_init', array($this,'wtpsw_register_settings') );
	}

	/**
	 * Function to register admin menus
	 * 
	 * @package WP Trending Post Slider and Widget
	 * @since 1.0.0
	 */
	function wtpsw_register_menu() {
		add_menu_page ( __('Trending Post', 'wtpsw'), __('Trending Post', 'wtpsw'), 'manage_options', 'wtpsw-settings', array($this, 'wtpsw_settings_page'), 'dashicons-star-filled' );
	}

	/**
	 * Function to handle the setting page html
	 * 
	 * @package WP Trending Post Slider and Widget
	 * @since 1.0.0
	 */
	function wtpsw_settings_page() {
		include_once( WTPSW_DIR . '/includes/admin/form/wtpsw-settings.php' );
	}

	/**
	 * Function register setings
	 * 
	 * @package WP Trending Post Slider and Widget
	 * @since 1.0.0
	 */
	function wtpsw_register_settings() {
		register_setting( 'wtpsw_plugin_options', 'wtpsw_options', array($this, 'wtpsw_validate_options') );
	}

	/**
	 * Validate Settings Options
	 * 
	 * @package WP Trending Post Slider and Widget
	 * @since 1.0.0
	 */
	function wtpsw_validate_options( $input ){

		return $input;
	}
}

$wtpsw_Admin = new Wtpsw_Admin();