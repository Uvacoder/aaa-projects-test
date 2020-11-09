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
                <div class="PostEditor-title">Team Settings<a class="otl-btn" style="margin-left: 10px;" href="#">Add Group</a><a class="btn-cta" style="margin-left: 10px;" href="#">Add Team Member</a></div>
                <table class="full-width-table">
	<thead>
	<tr>
		<th>Full Name</th>
		<th>Email Address</th>
		<th>Phone Number</th>
        <th>Staff Group</th>
        <th>Manage</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>Owen Bick</td>
		<td>owen@appseed.net</td>
		<td>603-312-1647</td>
        <td>Administrator</td>
        <td><btn class="outline-btn" type="button"><a href="#">Edit</a></btn>
        <btn class="outline-btn red" type="button" disabled><a href="#">Delete</a></btn></td>
	</tr>
	<tr>
		<td>Aaron Chapman</td>
		<td>aaron@appseed.net</td>
		<td>603-432-5124</td>
        <td>Co-Founder</td>
        <td><btn class="outline-btn" type="button"><a href="#">Edit</a></btn>
        <btn class="outline-btn red" type="button"><a href="#">Delete</a></btn></td>
	</tr>
        <tr>
		<td>Kerry Blue</td>
		<td>kerry.blue@appseed.net</td>
		<td>603-432-2956</td>
        <td>System Administrators</td>
        <td><btn class="outline-btn" type="button"><a href="#">Edit</a></btn>
        <btn class="outline-btn red" type="button"><a href="#">Delete</a></btn></td>
	</tr>
        <tr>
		<td>Adam Salt</td>
		<td>adam.salt@appseed.net</td>
		<td>603-765-2948</td>
        <td>Developers</td>
        <td><btn class="outline-btn" type="button"><a href="#">Edit</a></btn>
        <btn class="outline-btn red" type="button"><a href="#">Delete</a></btn></td>
	</tr>
        <tr>
		<td>Jerry Crow</td>
		<td>jerry.crow@appseed.net</td>
		<td>603-467-5116</td>
        <td>System Administrators</td>
        <td><btn class="outline-btn" type="button"><a href="#">Edit</a></btn>
        <btn class="outline-btn red" type="button"><a href="#">Delete</a></btn></td>
	</tr>
        <tr>
		<td>Alex French</td>
		<td>alex.french@appseed.net</td>
		<td>603-854-6894</td>
        <td>System Administrators</td>
        <td><btn class="outline-btn" type="button"><a href="#">Edit</a></btn>
        <btn class="outline-btn red" type="button"><a href="#">Delete</a></btn></td>
	</tr>
        <tr>
		<td>Oscar Jet</td>
		<td>oscar.jet@appseed.net</td>
		<td>603-238-4178</td>
        <td>Developers</td>
        <td><btn class="outline-btn" type="button"><a href="#">Edit</a></btn>
        <btn class="outline-btn red" type="button"><a href="#">Delete</a></btn></td>
	</tr>
        <tr>
		<td>Dalton Meagher</td>
		<td>dalton.meagher@appseed.net</td>
		<td>603-544-6235</td>
        <td>Corporate</td>
        <td><btn class="outline-btn" type="button"><a href="#">Edit</a></btn>
        <btn class="outline-btn red" type="button"><a href="#">Delete</a></btn></td>
	</tr>
        
	</tbody>
</table>
            </div>
    </div>
</body>