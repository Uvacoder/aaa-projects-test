<script>
var modal = document.getElementById('myModal');
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
    modal.style.display = "block";
}
span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<div id="blackBar"><center>AppSeed is currently in its prototype stage. We're sorry if anything is broken, incomplete, or inactive. <a href="//appseed.net/blog" target="_blank" class="underline">Click here to learn more.</a></center></div>

<ul class="nav">
     <center><a href="/apps/test/dashboard.php"><img src="/assets/img/logo.png" class="title profile-picture-small"></a></center>
        <div class="search title">
            <span class="ion-ios-search"></span>

            <input placeholder="Search" name="search">
        </div>
        <a class="title">Overview</a>
        <li><a href="/apps/test/dashboard.php"><span class="ion-ios-home-outline fa-fw"></span> Dashboard</a></li>
        <li><a href="#news"><span class="ion-social-usd-outline fa-fw"></span> Sales</a></li>
        <li><a href="/apps/test/team.php"><span class="ion-ios-people-outline fa-fw"></span> Team</a></li>
    <a class="title">Your App</a>
     <li><a href="#about"><span class="ion-ios-book-outline fa-fw"></span> Content</a></li>
    <li><a href="#about"><span class="ion-ios-keypad-outline fa-fw"></span> Navigation</a></li> 
    <li><a href="#about"><span class="ion-ios-eye-outline fa-fw"></span> Templates</a></li>
    <li><a href="/apps/test/plugins/plugins.php"><span class="fa-fw ion-ios-infinite-outline"></span> Plugins</a></li>
    <li><a href="#about"><span class="ion-ios-star-outline fa-fw"></span> Reviews</a></li>
            <a class="title">App Settings</a>
        <li><a href="/apps/test/backups.php"><span class="ion-ios-cloud-outline fa-fw"></span> Backups</a></li>
        <li><a href="/apps/test/settings.php"><span class="ion-ios-gear-outline fa-fw"></span> Settings</a></li>
    </ul>
<script>
function demo() {
    alert("We're sorry but this feature currently isn't supported in the prototype. We will include this feature once the alpha is released!");
}
</script>