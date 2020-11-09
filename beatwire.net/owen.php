<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beatwire</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <meta name="google-site-verification" content="6esWWA_l9r9EQt6NdOnDob4cN-4gmlWU8FaIbKJkvuU" />
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/global.css">
    <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='//fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'> </head>
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

<body>
    <?php include('includes/header.php') ?>
        <div class="container">
            <div class="row profile">
                <div class="col-md-3">
                    <div class="profile-sidebar">
                        <!-- SIDEBAR USERPIC -->
                        <div class="profile-userpic"> <img src="/assets/img/owen.jpg" class="img-responsive" alt=""> </div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name"> Owen Bick </div>
                            <div class="profile-usertitle-job"> @owen </div>
                        </div>
                        <!-- END SIDEBAR USER TITLE -->
                        <!-- SIDEBAR BUTTONS -->
                        <div class="profile-userbuttons">
                            <button type="button" class="btn btn-success btn-sm">Follow</button>
                            <button type="button" class="btn btn-danger btn-sm">Message</button>
                        </div>
                        <!-- END SIDEBAR BUTTONS -->
                        <!-- SIDEBAR MENU -->
                        <div class="profile-usermenu">
                            <ul class="nav">
                                <li class="active">
                                    <a href="#"> <i class="ion-home"></i> Overview </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="ion-music-note"></i> Beats </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="ion-cube"></i> Collections </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="ion-erlenmeyer-flask"></i> Samples </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="ion-filing"></i> Packs </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="ion-refresh"></i> Rewires </a>
                                </li>
                            </ul>
                        </div>
                        <!-- END MENU -->
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="profile-content"> Some user related content goes here... </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <?php include('includes/footer.php') ?>
</body>