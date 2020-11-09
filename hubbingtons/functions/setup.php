<?php
require_once("class-wp-bootstrap-navwalker.php");
add_action( 'after_setup_theme', 'hubbingtons_setup' );
function hubbingtons_setup()
{
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus(
		array( 'main-menu' => __( 'Main Menu', 'hubbingtons' ) )
	);
}

function hubbingtons_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'hubbingtons_add_woocommerce_support' );
