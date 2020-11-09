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
                <div class="PostEditor-title">Themes<a class="otl-btn" style="margin-left: 10px;" href="#">Upload Theme</a> <a class="btn-cta" href="//store.appseed.net" target="_blank">Download Themes</a></div>
                
                    <table class="plugin-table" style="float:left; width:100%">
            <tbody>
                <tr>
                    <td class="sm"><p class="text-muted-sm">Current theme:</p></td>
                    <td><center>Matchmaking (v1.0.0)</center></td>
                    <td class="align-right">
                        <btn class="outline-btn" style="float:right; text-align:center;" type="button"><a href="#">Configure</a></btn>
                    </td>
                </tr>
            </tbody>
        </table>
                <div style="" id="device">
<iframe id="hw" class="web" src="https://admin.appseed.net/themes/matchmaking/" name="livePreviewFrame" width="100%" height="900px" style="margin-top:-50px;" frameborder="0" noresize="noresize" style=" min-height: 100%;"> </iframe>
                    
</div>
                <table class="theme">
<caption>Inactive Themes</caption>
  <tr>
    <td class="theme-sc"><img class="theme-sc" src="https://w3layouts.com/wp-content/uploads/2016/04/flat_profile_app.jpg"></td>
    <td style="text-align:center;">Blue Horizon</td> 
    <td style="text-align:right;"><div class="Button Button-primary">Activate</div> <div class="Button Button-blank">Delete</div></td>
  </tr>
</table>
                </div>
            </div>
</body>