<div class="animated loader"></div>
<nav class="navbar navbar-main">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar9">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        </div>

        <div class="brand-centered">
            <a class="navbar-brand" href="/"><img class="logo" src="/assets/img/logo-2.svg" alt="Dispute Bills"></a>
        </div>

        <div id="navbar9" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <div class="navbar-btn"><a href="#" class="btn btn-default">Book A Campaign</a></div>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Publishers</a></li>
                <li><a href="#">Developers</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="#">Sign In</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
</nav>

<script>
var url = window.location;
// Will only work if string in href matches with location
$('ul.nav a[href="'+ url +'"]').parent().addClass('active');

// Will also work for relative and absolute hrefs
$('ul.nav a').filter(function() {
    return this.href == url;
}).parent().addClass('active');</script>