<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Beatwire</title>
    <link rel="stylesheet" href="/assets/css/default.css">
    <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <link href='//fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Raleway:700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href="//fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1"> </head>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o), m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-98688431-1', 'auto');
    ga('send', 'pageview');
</script>

<body class="home">
    <div class='content'>
        <script>
            $(function () {
                $('.options1 ul li a[href^="/' + location.pathname.split("/")[1] + '"]').addClass('active');
            });
        </script>
        <script>
            //Toggle mobile menu & search
            $('.toggle-nav').click(function () {
                console.log('toggle nav');
                $('.options1').slideToggle(200);
                $('.mobile-search').slideUp(200);
            });
            //Close navigation on anchor tap
            $('a').click(function () {
                console.log('close nav');
                $('.options1').slideUp(200);
                $('.mobile-search').slideUp(200);
            });
            $('.toggle-search').click(function () {
                console.log('toggle search');
                $('.mobile-search').slideToggle(200);
                $('.options1').slideUp(200);
            });
            //Mobile menu accordion toggle for sub pages
            $('.options1 > ul > li.menu-item-has-children').append('<div class="accordion-toggle"><div class="fa fa-angle-down"></div></div>');
            $('.options1 .accordion-toggle').click(function () {
                $(this).parent().find('> ul').slideToggle(200);
                $(this).toggleClass('toggle-background');
                $(this).find('.fa').toggleClass('toggle-rotate');
            });
        </script>
        <div class='nav'>
            <div class='logo'>
                <div class='text'>
                    <a href="/"><img src="//i.imgur.com/6X8PG4Z.png" style="width: 120px;"></a>
                </div>
                <div class='divider'></div>
                <div class="search"> <span class="ion-ios-search-strong"></span>
                    <input type="text" name="search" placeholder="Search for producers, beats, genres, or packs"> </div>
            </div>
            <div class='options'>
                <ul>
                    <li><a href="#">Discover <span class="ion-chevron-down"></span></a>
                        <ul>
                            <li><a href="/about">Discover Beats</a></li>
                            <li><a href="#">Popular Beats</a></li>
                            <li><a href="#">Popular Producers</a></li>
                            <li><a href="#">Genres</a></li>
                            <li><a href="//enterprise.Beatwire.net">Sample Packs</a></li>
                        </ul>
                    </li>
                    <li><a href="#">
        Upload
        </a></li>
                    <li><a href="/plus">
                Plus
                </a></li>
                    <li><a href="/u/owen">
          Sign In
        </a></li>
                    <li class="nohover">
                        <div class='register1'><a href="/download"> Create Account </a></div>
                    </li>
                </ul>
            </div>
        </div>
        <div class='hero'>
            <h1>
      A Real Home For Producers.
    </h1>
            <audio src="/assets/audio/firstbeat.mp3" id="hidden-player"></audio>
            <div id="playerhome"> <img src="" class="coverr" alt="" height="200" width="200" />
                <div class="player-song">
                    <div class="title"></div>
                    <div class="artist"></div>
                    <progress value="0" max="1"></progress>
                    <div class="timestamps">
                        <div class="time-now">0:00:00</div>
                        <div class="time-finish">0:00:00</div>
                    </div>
                    <div class="actions">
                        <div class="prev"> <i class="material-icons"></i> </div>
                        <div class="play">
                            <a class="play-button paused" href="#">
                                <div class="left"></div>
                                <div class="right"></div>
                                <div class="triangle-1"></div>
                                <div class="triangle-2"></div>
                            </a>
                        </div>
                        <div class="next"> <i class="material-icons"></i> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='rest content'>
        <div class='articlehome'>
            <h2>
      Beatwire makes developing apps easy.
    </h2>
            <p> With incredibly powerful features and tools along with strong developer support and an open source library, developing and publishing apps with Beatwire is a no brainer. </p>
        </div>
        <h1>Featured</h1>
                </div>
    <?php include 'includes/footer.php';?>
    <script src="/assets/js/index.js"></script>
</body>

</html>