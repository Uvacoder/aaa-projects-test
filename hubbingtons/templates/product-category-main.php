<?php /* Template Name: Product Category Main */ ?>
<?php
$slug = get_post_field( 'post_name', get_post() );
?>
<?php get_header(); ?>
<div id="productCategoryMain">

    <section id="content" role="main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php if(!is_front_page()) { ?>
            <header class="header">
                <h1 class="entry-title">
                    <?php the_title(); ?>
                </h1>
            </header>
            <?php } ?>
            <section class="entry-content">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                <?php the_content(); ?>
                <div class="entry-links">
                    <?php wp_link_pages(); ?>
                </div>
            </section>
        </article>
        <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
        <?php endwhile; endif; ?>


        <div class="row">
            <div class="col-sm-4 offset-2">
                <a href="<?php echo home_url(); ?>/product-category/<?php echo $slug; ?>">
                    <div class="card categoryBox">
                        <div class="card-body">

                            <img class="img-fluid shop-by" src="<?php echo get_template_directory_uri(); ?>/assets/img/woocommerce/shop-by-item.svg" />
                            <div class="categoryBoxTitle">Shop by item</div>

                        </div>

                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="<?php echo home_url(); ?>/<?php echo $slug; ?>/<?php echo $slug; ?>-builders">
                    <div class="card categoryBox">
                        <div class="card-body">

                            <img class="img-fluid shop-by" src="<?php echo get_template_directory_uri(); ?>/assets/img/woocommerce/shop-by-builder.svg" />
                            <div class="categoryBoxTitle">Shop by builder</div>

                        </div>
                    </div>
                </a>
            </div>
        </div>

    </section>
</div>
<?php get_footer(); ?>
