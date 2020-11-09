<?php
/**
 * Template Name: Default Template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="page-wrapper">
<?php if( get_field('hero_bg') ): ?>
<div class="jumbotron j-page" style="background-image: url(<?php echo the_field('hero_bg'); ?>);">
<?php endif; ?>
  <h1 class="display-4"><?php the_field('hero_h1'); ?></h1>
  <p><?php the_field('hero_p'); ?></p>
</div>
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			
			<main class="site-main" id="main">



				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'page' ); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer();
