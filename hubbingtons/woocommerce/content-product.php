<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<?php
//Get subcategories
$category = get_queried_object();
$categoryID = $category->term_id;
$args = array(
	'hierarchical' => 1,
	'show_option_none' => '',
	'hide_empty' => 0,
	'parent' => $categoryID,
	'taxonomy' => 'product_cat'
);
$subcats = get_categories($args);
?>

<?php if(!empty($subcats)) { ?>
    <div class="row">
		<?php foreach ($subcats as $sc) {
			$image = wp_get_attachment_image_url($sc->term_id);
			$link = get_term_link( $sc->slug, $sc->taxonomy );
			?>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="<?php echo $link; ?>">
                            <img class="img-fluid" src="<?php echo $image; ?>"/>
                            <div class="productSubCategoryHeader"><?php echo $sc->name; ?></div>
                        </a>
                    </div>
                </div>
            </div>
		<?php } ?>
    </div>
<?php } else { ?>

    <li <?php wc_product_class(); ?>>
        <div class="card">
            <div class="card-body">
				<?php
				/**
				 * Hook: woocommerce_before_shop_loop_item.
				 *
				 * @hooked woocommerce_template_loop_product_link_open - 10
				 */
				do_action( 'woocommerce_before_shop_loop_item' );

				/**
				 * Hook: woocommerce_before_shop_loop_item_title.
				 *
				 * @hooked woocommerce_show_product_loop_sale_flash - 10
				 * @hooked woocommerce_template_loop_product_thumbnail - 10
				 */
				do_action( 'woocommerce_before_shop_loop_item_title' );

				/**
				 * Hook: woocommerce_shop_loop_item_title.
				 *
				 * @hooked woocommerce_template_loop_product_title - 10
				 */
				do_action( 'woocommerce_shop_loop_item_title' );

				/**
				 * Hook: woocommerce_after_shop_loop_item_title.
				 *
				 * @hooked woocommerce_template_loop_rating - 5
				 * @hooked woocommerce_template_loop_price - 10
				 */
				do_action( 'woocommerce_after_shop_loop_item_title' );

				/**
				 * Hook: woocommerce_after_shop_loop_item.
				 *
				 * @hooked woocommerce_template_loop_product_link_close - 5
				 * @hooked woocommerce_template_loop_add_to_cart - 10
				 */
				do_action( 'woocommerce_after_shop_loop_item' );
				?>
            </div>
        </div>
    </li>
<?php } ?>