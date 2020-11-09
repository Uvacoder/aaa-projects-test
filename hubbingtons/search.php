<?php get_header(); ?>
    <section id="blog" role="main">
		<?php if ( have_posts() ) : ?>
            <header class="header">
                <h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'hubbingtons' ), get_search_query() ); ?></h1>
            </header>
			<?php while ( have_posts() ) : the_post(); ?>
                <div class="card">
                    <h2 class="entry-title">
                        <a class="card-header" href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
                        </a>
                    </h2>
                    <div class="card-body">
						<?php the_excerpt(); ?>
                    </div>
                </div>
			<?php endwhile; ?>
			<?php get_template_part( 'nav', 'below' ); ?>
		<?php else : ?>
            <article id="post-0" class="post no-results not-found">
                <header class="header">
                    <h2 class="entry-title"><?php _e( 'Nothing Found', 'hubbingtons' ); ?></h2>
                </header>
                <section class="entry-content">
                    <p><?php _e( 'Sorry, nothing matched your search. Please try again.', 'hubbingtons' ); ?></p>
					<?php get_search_form(); ?>
                </section>
            </article>
		<?php endif; ?>
    </section>
<?php get_footer(); ?>