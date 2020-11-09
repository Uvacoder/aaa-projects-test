<?php
add_action( 'widgets_init', 'hubbingtons_widgets_init' );
function hubbingtons_widgets_init()
{
	register_sidebar( array (
		'name' => __( 'Sidebar Widget Area', 'hubbingtons' ),
		'id' => 'primary-widget-area',
		'before_widget' => '<div class="card">',
		'after_widget' => "</div>",
		'before_title' => '<div class="card-header">',
		'after_title' => '</div>',
	) );
}