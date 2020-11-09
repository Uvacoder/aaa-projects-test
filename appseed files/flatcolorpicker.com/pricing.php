<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>AppSeed</title>
    <link rel="stylesheet" href="/assets/css/default.css">
    <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <link href='//fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Raleway:700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href="//fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<script>
    $(window).load(function () {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
</script>
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
    <div class="se-pre-con"></div>

        <?php include 'includes/header.php';?>
        <div class='content'>
            <div class='page'>
                <div class='article'>
                    <h1>
      Simple Pricing
    </h1>
                    <p> With incredibly powerful features and tools along with strong developer support and an open source library, developing and publishing apps with AppSeed is a no brainer. </p>
                    <div class="tabs-wrapper">
                        <input type="radio" name="tab" id="tab1" class="tab-head" checked="checked" />
                        <label for="tab1">Base</label>
                        <input type="radio" name="tab" id="tab2" class="tab-head" />
                        <label for="tab2">Enterprise</label>
                        <div class="tab-body-wrapper">
                            <div id="tab-body-1" class="tab-body">
                                <h3>Base Pricing</h3>
                                <table class="base">
                                    <tr>
                                        <th>
                                            <h4>Open Source</h4></th>
                                        <th>
                                            <h4>Hosted</h4></th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>$0</h5></td>
                                        <td>
                                            <h5>Custom</h5></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <center>
                                                <div class="register1" style="width:200px;font-weight:400;text-align:center;margin-bottom: 30px;">Download</div>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <div class="register1" style="width:200px;font-weight:400;text-align:center;margin-bottom: 30px;">Contact Us</div>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr style="margin-top:50px">
                                        <td>Self-Hosted</td>
                                        <td>Premium features</td>
                                    </tr>
                                    <tr>
                                        <td>You break it, you fix it</td>
                                        <td>Reliable and secure</td>
                                    </tr>
                                    <tr>
                                        <td>Community supported</td>
                                        <td>Hosted on the cloud</td>
                                    </tr>
                                    <tr>
                                        <td>Free 24/7 support from community</td>
                                        <td>Free 24/7 support from AppSeed</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Help with development</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Advanced analytics</td>
                                    </tr>
                                </table>
                            </div>
                            <div id="tab-body-2" class="tab-body">
                                <h3>Enterprise Pricing</h3>
                                <table class="enterprise">
                                    <tr>
                                        <td>
                                            <h5>Custom</h5></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <center>
                                                <div class="register1" style="width:200px;font-weight:400;text-align:center;margin-bottom: 30px;">Contact Us</div>
                                            </center>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <script src="/assets/js/index.js"></script>
</body>

</html>