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

<body class="rest">
    <?php include '../includes/header.php';?>
        <aside class="profile-card">
            <header> <img src="//cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/1a/1aa5cfc482b4fcba2396651f9fee539011bad637_full.jpg">
                <h1><mark>Owen<sup><i class="ion-checkmark-round"></i></sup></mark></h1>
                <h2><mark>@owen</mark></h2>
                <p><mark>Co-Founder of Beatwire, blogger, meme lord, finance student, and computer nerd. I can also make decent rap beats.</mark></p>
            </header>
        </aside>
    <div id='profilemenu'>
            <ul>
                <li><a href='/about'><strong>1</strong> Follower</a></li>
                <li><a href='#'><strong>10</strong> Following</a></li>
                <li><a href="#"><button class="profiletinybtn">Follow</button></a></li>
                <li style="float:right"><a href='#'>owenbick.com</a></li>
                <li style="float:right"><a href='#'>twitter.com</a></li>
                <li style="float:right"><a href='#'>instagram.com</a></li>
            </ul>
        </div>
        <div class='content'>
            <div class='page'> 
                <div id='profilemenu2'>
            <ul>
                <li class='active'><a href='/about'>Beats</a></li>
                <li><a href='#'>Collections</a></li>
                <li><a href='#'>Samples</a></li>
                <li><a href='#'>Packs</a></li>
                <li><a href='#'>Rewires</a></li>
            </ul>
        </div>
            <audio src="/assets/audio/medicine.mp3" id="hidden-player"></audio>
            <div id="player"> <img src="" class="coverr" alt="" height="200" width="200" />
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
            </div></div>        <?php include '../includes/footer.php';?>
            <script src="/assets/js/index.js"></script>
</body>

</html>