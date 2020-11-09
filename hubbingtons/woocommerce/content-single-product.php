<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}

//Get Variations
global $product;
$parentData = get_the_ID();
$variableProduct = new WC_Product_Variable($parentData);
$available_variations = $variableProduct->get_available_variations();

//echo '<pre>';
//print_r($available_variations);
//echo '</pre>';
?>
<div id="product" <?php wc_product_class(); ?>>

    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
					<?php
					/**
					 * Hook: woocommerce_before_single_product_summary.
					 *
					 * @hooked woocommerce_show_product_sale_flash - 10
					 * @hooked woocommerce_show_product_images - 20
					 */
					do_action( 'woocommerce_before_single_product_summary' );
					?>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="summary entry-summary">

                        <?php /*
                        <div class="productTitle">
                            <h1><?php the_title(); ?></h1>
                        </div>

                        <div class="row">
                        <?php foreach($available_variations as $variation) { ?>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body" onclick="test('<?php echo $variation['attributes']['attribute_size']; ?>');" style="cursor: pointer;">
	                                    <?php echo $variation['attributes']['attribute_size']; ?>
	                                    <?php echo $variation['price_html']; ?>
	                                    <?php echo $variation['variation_description']; ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                        <?php
                        woocommerce_template_single_add_to_cart();
                        */
                        ?>
		                <?php
		                /**
		                 * Hook: woocommerce_single_product_summary.
		                 *
		                 * @hooked woocommerce_template_single_title - 5
		                 * @hooked woocommerce_template_single_rating - 10
		                 * @hooked woocommerce_template_single_price - 10
		                 * @hooked woocommerce_template_single_excerpt - 20
		                 * @hooked woocommerce_template_single_add_to_cart - 30
		                 * @hooked woocommerce_template_single_meta - 40
		                 * @hooked woocommerce_template_single_sharing - 50
		                 * @hooked WC_Structured_Data::generate_product_data() - 60
		                 */
		                do_action( 'woocommerce_single_product_summary' );
		                ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="productDescription">
        <div class="card">
            <div class="card-body">
                <div class="productDescriptionTitle">Description</div>
	            <?php the_content(); ?>
            </div>
        </div>
    </div>

    <div id="relatedProducts">
	    <?php do_action( 'woocommerce_after_single_product' ); ?>
    </div>

</div>
