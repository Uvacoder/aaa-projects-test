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
        <?php include '../../includes/header.php';?>
            <div class="PostEditor">
                <div class="PostEditor-title">General Settings<a class="otl-btn" style="margin-left: 10px;" href="#">Restore Backup</a><a class="btn-cta" style="margin-left: 10px;" href="#">Create Backup</a></div>
                <table class="full-width-table">
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th>Date Created</th>
                            <th>Size</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>All Files</td>
                            <td>August 13, 2016</td>
                            <td>304.2 MB</td>
                            <td>
                                <btn class="outline-btn" type="button"><a href="#">Download</a></btn>
                                <btn class="outline-btn red" type="button"><a href="#">Delete</a></btn>
                            </td>
                        </tr>
                        <tr>
                            <td>Database</td>
                            <td>August 10, 2016</td>
                            <td>299.4 MB</td>
                            <td>
                                <btn class="outline-btn" type="button"><a href="#">Download</a></btn>
                                <btn class="outline-btn red" type="button"><a href="#">Delete</a></btn>
                            </td>
                        </tr>
                        <tr>
                            <td>All Files</td>
                            <td>August 9, 2016</td>
                            <td>301.5 MB</td>
                            <td>
                                <btn class="outline-btn" type="button"><a href="#">Download</a></btn>
                                <btn class="outline-btn red" type="button"><a href="#">Delete</a></btn>
                            </td>
                        </tr>
                        <tr>
                            <td>All Files</td>
                            <td>August 5, 2016</td>
                            <td>301.9 MB</td>
                            <td>
                                <btn class="outline-btn" type="button"><a href="#">Download</a></btn>
                                <btn class="outline-btn red" type="button"><a href="#">Delete</a></btn>
                            </td>
                        </tr>
                        <tr>
                            <td>All Files</td>
                            <td>August 1, 2016</td>
                            <td>301.6 MB</td>
                            <td>
                                <btn class="outline-btn" type="button"><a href="#">Download</a></btn>
                                <btn class="outline-btn red" type="button"><a href="#">Delete</a></btn>
                            </td>
                        </tr>
                        <tr>
                            <td>All Files</td>
                            <td>July 29, 2016</td>
                            <td>299.9 MB</td>
                            <td>
                                <btn class="outline-btn" type="button"><a href="#">Download</a></btn>
                                <btn class="outline-btn red" type="button"><a href="#">Delete</a></btn>
                            </td>
                        </tr>
                        <tr>
                            <td>All Files</td>
                            <td>July 14, 2016</td>
                            <td>300.9 MB</td>
                            <td>
                                <btn class="outline-btn" type="button"><a href="#">Download</a></btn>
                                <btn class="outline-btn red" type="button"><a href="#">Delete</a></btn>
                            </td>
                        </tr>
                        <tr>
                            <td>Database</td>
                            <td>July 11, 2016</td>
                            <td>298.49 MB</td>
                            <td>
                                <btn class="outline-btn" type="button"><a href="#">Download</a></btn>
                                <btn class="outline-btn red" type="button"><a href="#">Delete</a></btn>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>
</body>