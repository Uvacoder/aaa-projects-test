<?php get_header(); ?>
<div class="container">
    <main role="main">
        <!-- section -->
        <section>

            <?php get_template_part('loop'); ?>

            <?php get_template_part('pagination'); ?>

        </section>
        <!-- /section -->
    </main>

    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
