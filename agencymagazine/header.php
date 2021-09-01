<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

<head>
  <meta charset="utf-8">

  <?php // force Internet Explorer to use the latest rendering engine available 
  ?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title><?php wp_title(''); ?></title>

  <?php // mobile meta (hooray!) 
  ?>
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) 
  ?>
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
  <link rel="icon" href="/static/favicon.ico">
  <link rel="icon" href="/static/favicon.png">
  <script src="https://kit.fontawesome.com/fa75f85d5c.js" crossorigin="anonymous"></script>
  <!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
  <?php // or, set /favicon.ico for IE10 win 
  ?>
  <meta name="msapplication-TileColor" content="#f01d4f">
  <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
  <meta name="theme-color" content="#121212">

  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

  <?php // wordpress head functions 
  ?>
  <?php wp_head(); ?>
  <?php // end of wordpress head 
  ?>

  <?php // drop Google Analytics Here 
  ?>
  <?php // end analytics 
  ?>

</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
  <header class="header global" role="banner" itemscope itemtype="http://schema.org/WPHeader">
    <div class="container">
      <div class="header__main-menu">
        <ul>
          <li><a onclick="openNav()" class="header__hamburger">☰</a></li>
          <li>
            <a id="search-icon"><i class="fas fa-search"></i></a>
          </li>
        </ul>
        <ul class="logo">
          <li>
            <a href="/" class="logo" itemscope itemtype="http://schema.org/Organization" rel="nofollow"></a>
          </li>
        </ul>
        <?php wp_nav_menu(array(
          'container' => false,                           // remove nav container
          'container_class' => 'menu cf',                 // class of container (should you choose to use it)
          'menu' => __('Main Menu', 'bonestheme'),  // nav name
          'menu_class' => 'right',               // adding custom nav class
          'theme_location' => 'main-nav',                 // where it's located in the theme
          'before' => '',                                 // before the menu
          'after' => '',                                  // after the menu
          'link_before' => '',                            // before each link
          'link_after' => '',                             // after each link
          'depth' => 0,                                   // limit the depth of the nav
          'fallback_cb' => ''                             // fallback function (if there is one)
        )); ?>
      </div>
      <div class="header__secondary-menu">
        <?php wp_nav_menu(array(
          'container' => false,                           // remove nav container
          'container_class' => 'menu cf',                 // class of container (should you choose to use it)
          'menu' => __('The Secondary Menu', 'bonestheme'),  // nav name
          'menu_class' => '',               // adding custom nav class
          'theme_location' => 'secondary-menu',                 // where it's located in the theme
          'before' => '',                                 // before the menu
          'after' => '',                                  // after the menu
          'link_before' => '',                            // before each link
          'link_after' => '',                             // after each link
          'depth' => 0,                                   // limit the depth of the nav
          'fallback_cb' => ''                             // fallback function (if there is one)
        )); ?>
      </div>
    </div>
  </header>
  <div id="search-menu">
    <div class="container">
      <form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
        <div>
          <input type="text" value="" name="s" id="s" placeholder="Search" />
        </div>
      </form>
    </div>
  </div>
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
  </div>
  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }

    /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
  </script>