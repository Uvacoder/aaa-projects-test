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
                <div class="PostEditor-title">Events (concept)<a class="otl-btn" style="margin-left: 10px;" href="#">Delete Event</a><a class="btn-cta" style="margin-left: 10px;" href="#">Save Event</a></div>
                <div class="event-head">Event
                    <select>
                        <option>+posteditor</option>
                        <option>+page-wrapper</option>
                        <option>+header</option>
                        <option>+tree</option>
                        <option>+option</option>
                        <option>+otl-btn</option>
                        <option>+se-pre-con</option>
                        <option>+event-head</option>
                        <option>+font-awesome-func</option>
                        <option>+google-apis</option>
                    </select><a class="otl-btn" style="margin-left: 10px;" href="/events/how.php">Click here to see full description of how this works</a></div>
                <!--
We will create a family tree using just CSS(3)
The markup will be simple nested lists
-->
                <div class="tree">
                    <ul>
                        <li> <a href="#">Parent</a>
                            <ul>
                                <li> <a href="#">Child</a>
                                    <ul>
                                        <li> <a href="#">Grand Child</a> </li>
                                    </ul>
                                </li>
                                <li> <a href="#">Child</a>
                                    <ul>
                                        <li><a href="#">Grand Child</a></li>
                                        <li> <a href="#">Grand Child</a>
                                            <ul>
                                                <li> <a href="#">Great Grand Child</a> </li>
                                                <li> <a href="#">Great Grand Child</a> </li>
                                                <li> <a href="#">Great Grand Child</a> </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Grand Child</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
    </div>
</body>