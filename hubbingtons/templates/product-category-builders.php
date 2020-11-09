<?php /* Template Name: Product Category Builders */ ?>
<?php
$slug = get_post_field( 'post_name', get_post() );
?>
<?php get_header(); ?>
    <div id="productCategoryBuilders">

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

			<?php
			$int = 1;
			if( have_rows('builders') ): ?>
                <div class="row">
					<?php while( have_rows('builders') ): the_row();
						$builder_name = get_sub_field('builder_name');
						$builder_description = get_sub_field('builder_description');
						$builder_image = get_sub_field('builder_image');
						$link_select = get_sub_field('link_select');
						$link_url = get_sub_field('link_url');
						?>
						<?php
						if($link_select == "On Site") { ?>
                            <div class="col-sm-3">
                                <div class="card text-center">
                                    <a href="<?php echo home_url(); ?><?php echo $link_url; ?>">
										<?php if(!empty($builder_image)) { ?>
                                            <img class="img-fluid" src="<?php echo $builder_image; ?>" alt="<?php echo $builder_name; ?>" />
										<?php } else { ?>
                                            <p>No image</p>
										<?php } ?>
                                    </a>
                                    <a href="<?php echo $link_url; ?>">
                                        <div class="builderTitle">
											<?php echo $builder_name; ?>
                                        </div>
                                    </a>
                                </div>
                            </div>
							<?php
						} else {
							?>
                            <div class="col-sm-3 text-center">
                                <div class="card" data-toggle="modal" data-target="#builderModal<?php echo $int; ?>">
									<?php if(!empty($builder_image)) { ?>
                                        <img class="img-fluid" src="<?php echo $builder_image; ?>" alt="<?php echo $builder_name; ?>" />
									<?php } else { ?>
                                        <p>No image</p>
									<?php } ?>
                                    <div class="builderTitle">
										<?php echo $builder_name; ?>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="builderModal<?php echo $int; ?>" tabindex="-1" role="dialog" aria-labelledby="builderModal<?php echo $int; ?>Label" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><?php echo $builder_name; ?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe id="builderModalIFrame" src="<?php //echo $link_url; ?>http://georgewhitcher.com" width="100%" height="500px"></iframe>
                                            <div class="text-center">
                                                <button class="btn btn-hubbingtons" type="button" data-toggle="collapse" data-target="#builderModalForm" aria-expanded="false" aria-controls="builderModalForm">
                                                    Get a Quote
                                                </button>
                                                <div class="collapse" id="builderModalForm">
                                                    <div class="card card-body">
                                                        <div class="builderModalFormTitle">Get a Quote</div>
                                                        <button onclick="frameTest();">Test</button>
														<?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="false"]'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

						<?php }
						$int++;
						?>
					<?php endwhile; ?>
                </div>
			<?php endif; ?>

        </section>
    </div>
<?php get_footer(); ?>