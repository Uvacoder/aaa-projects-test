<?php get_header(); ?>
    <section id="singlePage" role="main">
        <div class="row">
            <div class="col-sm-8">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="card">
                        <div class="card-header">
                            <h1 class="entry-title">
	                            <?php the_title(); ?>
                            </h1>
                        </div>
                        <div class="card-body">
                            <?php the_content(); ?>
                        </div>
                    </div>
				<?php endwhile; endif; ?>
            </div>
            <div class="col-sm-4">
				<?php get_sidebar(); ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>