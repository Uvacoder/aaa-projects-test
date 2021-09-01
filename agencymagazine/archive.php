<?php get_header(); ?>

<div id="inner-content" class="wrap cf">

	<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
		<div class="hero" style="background: url('<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?>'), #111;background-repeat:no-repeat;background-position:center;background-size:cover;">
			<div class="container">
				<?php
				the_archive_title('<h1 class="page-title">', '</h1>');
				the_archive_description('<div class="taxonomy-description">', '</div>');
				?>
			</div>
		</div>
		<div class="container">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('article__list'); ?> role="article">
						<div class="article__list__content">
							<div class="article__img">
								<img src="<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false); echo $src[0]; ?>">
							</div>
							<div class="article__list__content__meta">
								<h3 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
								<?php the_excerpt(); ?>
								<p class="article__list__content__meta__time">
									<?php printf(
										__('', 'bonestheme') . ' %1$s %2$s',
										/* the time the post was published */
										'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
										/* the author of the post */
										'<span class="by">' . __('by', 'bonestheme') . '</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link(get_the_author_meta('ID')) . '</span>'
									); ?>
								</p>
							</div>
							<div class="article__list__content__space"></div>
						</div>
					</article>

				<?php endwhile; ?>

				<?php bones_page_navi(); ?>

			<?php else : ?>

				<article id="post-not-found" class="hentry cf">
					<header class="article-header">
						<h1><?php _e('Oops, Post Not Found!', 'bonestheme'); ?></h1>
					</header>
					<section class="entry-content">
						<p><?php _e('Uh Oh. Something is missing. Try double checking things.', 'bonestheme'); ?></p>
					</section>
					<footer class="article-footer">
						<p><?php _e('This is the error message in the archive.php template.', 'bonestheme'); ?></p>
					</footer>
				</article>

			<?php endif; ?>

	</main>

	<?php get_sidebar(); ?>

</div>

</div>

<?php get_footer(); ?>