<?php get_header(); ?>

<main role="main">

    <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

    <div class="header-wrap" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;background-size:cover;">
        <div class="overlay-pattern">
            <div class="container">
                <header class="entry-header">

                    <h1 class="entry-title">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <mark class="hometitle"><?php the_title(); ?></mark>
                    </a>
                    </h1>
                </header>
            </div>
        </div>
    </div>
    <div class="container ">
        <section>

            <?php get_template_part('loop'); ?>
            <?php get_template_part('pagination'); ?>

        </section>
        <!-- /section -->
    </div>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
