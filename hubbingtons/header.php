<?php
// Allow from any origin
if (isset($_SERVER['HTTP_ORIGIN'])) {
	header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
	header('Access-Control-Allow-Credentials: true');
	header('Access-Control-Max-Age: 86400');    // cache for 1 day
}

// Access-Control headers are received during OPTIONS requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

	if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

	if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
		header("Access-Control-Allow-Headers:        {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

	exit(0);
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/fontawesome/css/all.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <link href="//cloud.typenetwork.com/projects/3004/fontface.css/" rel="stylesheet" type="text/css">
</head>

<body <?php body_class(); ?>>

    <?php
if(is_front_page()) {
	$homeHeaderClass = ' class="homeHeader"';
	$siteLogo = "logoWhite.svg";
	$siteSearch = "searchWhite.svg";
	$siteMyAccount = "accountWhite.svg";
	$siteBasket = "bagWhite.svg";
    $siteLocation = "placeholderWhite.svg";
} else {
	$homeHeaderClass = ' class="pageHeader"';
	$siteLogo = "logoBlack.svg";
	$siteSearch = "searchBlack.svg";
	$siteMyAccount = "accountBlack.svg";
	$siteBasket = "bagBlack.svg";
    $siteLocation = "placeholder.svg";
}
?>
    <div id="header" <?php if(!empty($homeHeaderClass)) { echo $homeHeaderClass; } ?>>
        <div class="container">
            <div class="row" id="topBar">
                <div class="col-sm-4">
                    <ul class="list-inline">
                        <li class="list-inline-item left-top">
                            <a href="<?php echo home_url(); ?>/search">
                                <img class="img-fluid header-ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/header/<?php echo $siteSearch; ?>" />Search
                            </a>
                        </li>
                        <li class="list-inline-item right-top">
                            <a href="<?php echo home_url(); ?>/store-locator">
                                <img class="img-fluid header-ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/header/<?php echo $siteLocation; ?>" />Store Locator
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <div class="text-center">
                        <a href="<?php echo home_url(); ?>">
                            <img class="img-fluid" id="siteLogo" src="<?php echo get_template_directory_uri(); ?>/assets/img/header/<?php echo $siteLogo; ?>" />
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="text-right">
                        <ul class="list-inline">
                            <li class="list-inline-item right-top">
                                <a href="<?php echo home_url(); ?>/my-account">
                                    <img class="img-fluid header-ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/header/<?php echo $siteMyAccount; ?>" />My Account
                                </a>
                            </li>
                            <li class="list-inline-item right-top">
                                <a href="<?php echo home_url(); ?>/cart">
                                    <img class="img-fluid header-ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/header/<?php echo $siteBasket; ?>" />Basket
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <nav class="navbar navbar-expand-lg" id="mainNav">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse w-100 order-1 dual-collapse2" id="navbarSupportedContent">
                    <?php
				wp_nav_menu( array(
						'theme_location'    => 'main-menu',
						'depth'             => 3,
						'container'         => false,
						'container_id'      => 'navbarSupportedContent',
						'menu_class'        => 'nav navbar-nav mx-auto',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker())
				);
				?>
                </div>
            </nav>

            <?php
		if(is_front_page()) {
			?>
            <div class="homeMessage">
                <h1>The Best Amish Furniture</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lobortis tempus dui nec pellentesque. Mauris ullamcorper mi elementum varius blandit. Sed bibendum vehicula ante ut egestas.</p>
                <a class="btn btn-hubbingtons" href="#">View Products</a>
            </div>
            <?php } ?>

        </div>
    </div>

    <div id="bodyContent">
        <div class="container">
