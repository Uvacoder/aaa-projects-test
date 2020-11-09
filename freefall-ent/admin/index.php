<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>AppSeed</title>
    <link rel="stylesheet" href="/admin/assets/css/default.css" />
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
        <?php include 'includes/header.php';?>
            <div class="PostEditor">
                <div class="header-home-bg">
                    <h1 class="admin-title">Hello, Random Citizen!</h1>
                    <h2 class="admin-subtitle">Here's what's happening with your app.</h2></div>
                <div class="posteditor-container">
                    <table>
                        <tbody>
                            <tr>
                                <td><i class="ion-record blue"></i></td>
                                <td>Please update your billing information.</td>
                                <td class="align-right">
                                    <btn class="outline-btn" type="button"><a href="#">Update Billing Information</a></btn>
                                </td>
                            </tr>
                            <tr>
                                <td><i class="ion-record blue"></i></td>
                                <td>Add some content to your app.</td>
                                <td class="align-right">
                                    <btn class="outline-btn" type="button"><a href="#">Add Content</a></btn>
                                </td>
                            </tr>
                            <tr>
                                <td><i class="ion-record blue"></i></td>
                                <td>Add some plugins to make your app more powerful.</td>
                                <td class="align-right">
                                    <btn class="outline-btn" type="button"><a href="#">Add Plugins</a></btn>
                                </td>
                            </tr>
                            <tr>
                                <td><i class="ion-record blue"></i></td>
                                <td>Add or edit a theme to make your app beautiful.</td>
                                <td class="align-right">
                                    <btn class="outline-btn" type="button"><a href="#">Add Themes</a></btn>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php include 'includes/rightbar.php';?>
    </div>
</body>