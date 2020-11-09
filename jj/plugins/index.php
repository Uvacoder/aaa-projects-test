<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>AppSeed</title>
    <link rel="stylesheet" href="/assets/css/default.css" />
    <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <script src="//use.fontawesome.com/a1527a703d.js"></script>
</head>
<script>
    $(window).load(function () {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
</script>

<body>
    <div class="se-pre-con"></div>
    <div class="page-wrapper">
        <?php include '../includes/header.php';?>
            <div class="PostEditor">
                <div class="PostEditor-title">Plugins<a class="otl-btn" style="margin-left: 10px;" href="#">Upload Plugin</a> <a class="btn-cta" href="//store.appseed.net" target="_blank">Download Plugins</a></div>
                
                    <table class="plugin-table" style="float:left; width:100%">
            <tbody>
                <tr>
                    <td class="sm"><img class="appicon" src="/assets/img/slackicon.png"></td>
                    <td>Slack<br /><p class="text-muted-sm">A messaging app for teams. &#8212; Slack, Inc.</p></td>
                    <td class="align-right">
                        <btn class="outline-btn" type="button"><a href="#">Configure</a></btn>
                    </td>
                </tr>
                <tr>
                    <td><img class="appicon" src="/assets/img/stripeicon.png"></td>
                    <td>Stripe Payments<br /><p class="text-muted-sm">Accept credit and debit cards. &#8212; Stripe, Inc.</p></td>
                    <td class="align-right">
                        <btn class="outline-btn" type="button"><a href="#">Configure</a></btn>
                    </td>
                </tr>
                <tr>
                    <td><img class="appicon" src="/assets/img/qbicon.png"></td>
                    <td>Quickbooks<br /><p class="text-muted-sm">Accounting for your small business. &#8212; Intuit, Inc.</p></td>
                    <td class="align-right">
                        <btn class="outline-btn" type="button"><a href="#">Configure</a></btn>
                    </td>
                </tr>
                <tr>
                    <td><img class="appicon" src="/assets/img/shieldicon.png"></td>
                    <td>AppShield<br /><p class="text-muted-sm">Protect your app against hackers and more. &#8212; AppShield, LLC.</p></td>
                    <td class="align-right">
                        <btn class="outline-btn" type="button"><a href="#">Configure</a></btn>
                    </td>
                </tr>
            </tbody>
        </table>
                </div>
            </div>
</body>