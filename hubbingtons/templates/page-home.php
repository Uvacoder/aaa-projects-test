<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>
    <section id="content" role="main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if(!is_front_page()) { ?>
                    <header class="header">
                        <h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
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

        <div id="homeCategories">
            <div class="row">
                <div class="col-md-7">
                    <div class="container d-flex h-100">
                        <div class="row align-self-center">
                            <h2>Exceptional American-Made Craft</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lobortis tempus dui nec pellentesque. Mauris ullamcorper mi elementum varius blandit. Sed bibendum vehicula ante ut egestas.</p>
                            <a class="btn btn-hubbingtons" href="<?php echo home_url(); ?>/about">About Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 h-100">
                    <img class="img-fluid mx-auto d-block" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/amish.jpg" alt="" />
                </div>
            </div>

            <div class="row">
                <div class="col-md-5">
                    <img class="img-fluid mx-auto d-block" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/dining.jpg" alt="" />
                </div>
                <div class="col-md-7">
                    <div class="container d-flex h-100">
                        <div class="row align-self-center justify-content-end">
                            <h2>Dining & Kitchen</h2>
                            <p class="text-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lobortis tempus dui nec pellentesque. Mauris ullamcorper mi elementum varius blandit. Sed bibendum vehicula ante ut egestas.</p>
                            <a class="btn btn-hubbingtons" href="<?php echo home_url(); ?>">View Gallery</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="container d-flex h-100">
                        <div class="row align-self-center">
                            <h2>Bedroom</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lobortis tempus dui nec pellentesque. Mauris ullamcorper mi elementum varius blandit. Sed bibendum vehicula ante ut egestas.</p>
                            <a class="btn btn-hubbingtons" href="<?php echo home_url(); ?>">View Gallery</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <img class="img-fluid mx-auto d-block" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/bedroom.jpg" alt="" />
                </div>
            </div>

            <div class="row">
                <div class="col-md-5">
                    <img class="img-fluid mx-auto d-block" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/living-room.jpg" alt="" />
                </div>
                <div class="col-md-7">
                    <div class="container d-flex h-100">
                        <div class="row align-self-center justify-content-end">
                            <h2>Living Room</h2>
                            <p class="text-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lobortis tempus dui nec pellentesque. Mauris ullamcorper mi elementum varius blandit. Sed bibendum vehicula ante ut egestas.</p>
                            <a class="btn btn-hubbingtons" href="<?php echo home_url(); ?>">View Gallery</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="container d-flex h-100">
                        <div class="row align-self-center">
                            <h2>Office</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lobortis tempus dui nec pellentesque. Mauris ullamcorper mi elementum varius blandit. Sed bibendum vehicula ante ut egestas.</p>
                            <a class="btn btn-hubbingtons" href="<?php echo home_url(); ?>">View Gallery</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <img class="img-fluid mx-auto d-block" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/office.jpg" alt="" />
                </div>
            </div>

            <div class="row">
                <div class="col-md-5">
                    <img class="img-fluid mx-auto d-block" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/entertainment.jpg" alt="" />
                </div>
                <div class="col-md-7">
                    <div class="container d-flex h-100">
                        <div class="row align-self-center justify-content-end">
                            <h2>Entertainment & Accents</h2>
                            <p class="text-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lobortis tempus dui nec pellentesque. Mauris ullamcorper mi elementum varius blandit. Sed bibendum vehicula ante ut egestas.</p>
                            <a class="btn btn-hubbingtons" href="<?php echo home_url(); ?>">View Gallery</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
<?php get_footer(); ?>