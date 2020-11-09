<?php /* Template Name: Search */ ?>
<?php get_header(); ?>
    <section id="content" role="main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if(!is_front_page()) { ?>
                    <header class="header">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                    </header>
				<?php } ?>
                <section class="entry-content">
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
					<?php the_content(); ?>
                    <div class="entry-links"><?php wp_link_pages(); ?></div>
                </section>
            </article>
			<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
		<?php endwhile; endif; ?>

        <div>
            <form role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
                <div class="form-group">
                    <input type="text" id="s" name="s" class="form-control" placeholder="Search Products">
                </div>
                <input type="hidden" name="post_type" value="product" />
                <input class="btn btn-hubbingtons d-block w-100" type="submit" alt="Search" value="Search" />
            </form>
        </div>

    </section>
<?php get_footer(); ?>