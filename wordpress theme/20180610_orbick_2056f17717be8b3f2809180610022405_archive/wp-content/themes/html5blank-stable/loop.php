<div class="everything">
    <?php if( is_front_page() && is_home() ) { ?>
    <h1>Recently posted</h1>
    <?php } else { ?>
    <h1>
        <?php wp_title(''); ?>
    </h1>
    <?php } ?>
    <div class="col-sm-8">
        <?php
$the_query = new WP_Query( array( 'post__not_in' => get_option( 'sticky_posts' ) ) );
if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
?>
            <div id="content post-<?php the_ID(); ?> post-list-home" <?php post_class(); ?>>
                <div class="row">
                    <div class="col-xs-12" style="padding-left:0;">

                        <div class="card">

                            <div class="card-image">
                                <?php if ( has_post_thumbnail()) : ?>

                                <?php the_post_thumbnail(array(200,350)); ?>
                                <?php endif; ?>

                            </div>

                            <div class="card-modal">Take a look at my Profile!</div>

                            <div class="card-info">

                                <div class="name">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </div>

                                <div class="content">
                                    <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
                                    <?php _e( 'Published by', 'html5blank' ); ?>
                                    <?php the_author_posts_link(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endwhile; ?>

                <?php else: ?>

                <!-- article -->
                <article>
                    <h2>
                        <?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?>
                    </h2>
                </article>
                <!-- /article -->

                <?php endif; ?>
            </div>
    </div>
    <div class="col-sm-4">
        <?php get_sidebar(); ?>
    </div>

</div>
