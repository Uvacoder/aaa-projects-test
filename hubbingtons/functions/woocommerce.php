<?php
function stockFix() {
	$args = array(
		'post_type'      => 'product',
		'posts_per_page' => -1,
	);

	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
		global $product;
		update_post_meta(get_the_ID(), '_manage_stock', 'no');
		update_post_meta(get_the_ID(), '_stock_status', 'outofstock');
	endwhile;

	wp_reset_query();
}