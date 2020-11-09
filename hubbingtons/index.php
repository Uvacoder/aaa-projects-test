<?php get_header(); ?>
    <div class="row">
        <div class="col-sm-8">
            <section id="blog" role="main">
		        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			        <div class="card">
                            <a class="card-header" href="<?php the_permalink(); ?>">
                                <h2 class="entry-title"><?php the_title(); ?></h2>
                            </a>
                        <div class="card-body">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
		        <?php endwhile; endif; ?>
		        <?php get_template_part( 'nav', 'below' ); ?>
            </section>
        </div>
        <div class="col-sm-4">
	        <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>