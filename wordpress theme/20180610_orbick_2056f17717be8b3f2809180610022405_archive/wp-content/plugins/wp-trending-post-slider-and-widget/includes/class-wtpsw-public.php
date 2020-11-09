<?php
/**
 * Public Class
 *
 * Handles the public side functionality of plugin
 *
 * @package WP Trending Post Slider and Widget
 * @since 1.0.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

class Wtpsw_Public {
	
	function __construct(){
		
		// Action to update views
		add_action( 'wp', array($this, 'wtpsw_update_post_views') );
	}

	/**
	 * Function to update views of post
	 * 
	 * @package WP Trending Post Slider and Widget
	 * @since 1.0.0
	 */
	function wtpsw_update_post_views(){

		global $post;

		$post_id 	= isset($post->ID) ? $post->ID : '';
		$prefix		= WTPSW_META_PREFIX;

		$registered_posts = wtpsw_get_post_types(); // registered post type
		$registered_posts = !empty($registered_posts) ? array_keys($registered_posts) : array();

		if( !empty($post_id) && is_singular($registered_posts) && !is_preview() && !is_front_page() && !is_home() && !is_feed() && !is_robots() ) {

			// Getting existing views
			$views = get_post_meta( $post_id, $prefix.'views', true );
			$views = !empty($views) ? $views : 1;

			// Update new views
			update_post_meta( $post_id, $prefix.'views', ($views+1) );
		}
	}
}

$wtpsw_public = new Wtpsw_Public();