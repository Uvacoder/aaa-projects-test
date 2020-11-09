<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>
        <?php wp_title(''); ?>
    </title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
    <link href="//unpkg.com/ionicons@4.1.2/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <?php wp_head(); ?>
    <script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });

    </script>

</head>

<body <?php body_class(); ?>>

    <div class="main-content">
        <div class="nav">
            <div class="container">
                <div class="logo-div">
                    <a href="/" title="" class="nav-link snlogo">
<img class="logo" src="https://cdn.worldvectorlogo.com/logos/buzzfeed.svg" alt="" width="110" height="55"></a>
                </div>
                <div class="mobile-toggle" ontouchstart="">
                    <div class="mobile-toggle-container">
                        <div class="mobile-open">
                        </div>
                        <div class="mobile-close"></div>
                    </div>
                </div>
                <div id="mob-menu" class="nav-mobile-container nav-mobile-container-default">
                    <div class="row center">
                        <div class="col col-sm">
                            <ul class="nav-list">
                                <li class="nav-list-left">
                                    <a class="nav-link nav-list-link" href="/news">News</a>
                                </li>
                                <li class="nav-list-left">
                                    <a class="nav-link nav-list-link" href="/pc">Pop Culture</a>
                                </li>
                                <li class="nav-list-left">
                                    <a class="nav-link nav-list-link" href="/sports">Sports</a>
                                </li>
                                <li class="nav-list-left">
                                    <a class="nav-link nav-list-link" href="/quizzes">Quizzes</a>
                                </li>
                                <li class="nav-list-left">
                                    <a class="nav-link nav-list-link" href="/opinions">Opinions</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col col-sm">
                            <ul class="nav-list nav-list-rightaligned">
                                <?php get_search_form(); ?>
                                <li class="nav-list-right"><a class="nav-link nav-list-link" href="/about">About Us</a></li>
                                <li class="nav-list-right"><a class="nav-link nav-list-link" href="/write-for-us">Write For Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
