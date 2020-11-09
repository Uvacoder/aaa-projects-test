<?php
/**
 * Script Class
 *
 * Handles the script and style functionality of plugin
 *
 * @package WP Trending Post Slider and Widget
 * @since 1.0.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

class Wtpsw_Script {
	
	function __construct() {
		// Action to add style on frontend
		add_action( 'wp_enqueue_scripts', array($this, 'wtpsw_front_end_style') );

		// Action to add script on frontend
		add_action( 'wp_enqueue_scripts', array($this, 'wtpsw_front_end_script'), 15 );
	}

	/**
	 * Enqueue front styles
	 * 
	 * @package WP Trending Post Slider and Widget
	 * @since 1.0.0
	 */
	function wtpsw_front_end_style() {
		
		// Registring and enqueing slick slider css
		if( !wp_style_is( 'wpos-slick-style', 'registered' ) ) {
			wp_register_style( 'wpos-slick-style', WTPSW_URL.'assets/css/slick.css', null, WTPSW_VERSION );
			wp_enqueue_style('wpos-slick-style');
		}
		
		// Registring slider style
		wp_register_style( 'wtpsw-public-style', WTPSW_URL.'assets/css/wtpsw-public.css', null, WTPSW_VERSION );
		wp_enqueue_style('wtpsw-public-style');
	}

	/**
	 * Enqueue front script
	 * 
	 * @package WP Trending Post Slider and Widget
	 * @since 1.0.0
	 */
	function wtpsw_front_end_script() {
		
		// Registring slider script
	if( !wp_script_is( 'wpos-slick-jquery', 'registered' ) ) {	
		wp_register_script( 'wpos-slick-jquery', WTPSW_URL.'assets/js/slick.min.js', array('jquery'), WTPSW_VERSION, true );
		}
	}
}

$wtpsw_script = new Wtpsw_Script();