<?php get_header(); ?>

<main role="main" class="margin-top">
    <!-- section -->
    <div class="container">
        <section id="profile-top">
            <div class="avatar">
                <?php echo get_avatar(get_the_author_meta('user_email')); ?>
            </div>
            <div class="profile-name">
                <?php the_author_posts_link(); ?>
            </div>
            <div id="profile-desc">
                <?php echo nl2br(get_the_author_meta('description')); ?>
            </div>
            <center>
                <?php 
$twitter = get_the_author_meta( 'twitter', $post->post_author );
$facebook = get_the_author_meta( 'facebook', $post->post_author );
echo '<a href="https://twitter.com/' . $twitter .'" rel="nofollow" target="_blank">Twitter</a> | <a href="'. $facebook .'" rel="nofollow" target="_blank">Facebook</a>';
?></center>
        </section>
        <h1>Recent posts</h1>
        <div class="col-sm-12">

            <?php if (have_posts()): the_post(); ?>

            <?php if ( get_the_author_meta('description')) : ?>
            <?php endif; ?>

            <?php rewind_posts(); while (have_posts()) : the_post(); ?>

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
    </div>
    <!-- /section -->
</main>



<?php get_footer(); ?>
