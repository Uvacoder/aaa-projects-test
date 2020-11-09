<footer class="footer">
    <div class="container">
      <ul class="footer-links">
        <li><a href="//beatwire.net">Home</a></li>
        <li><a href="https://twitter.com/getbootstrap">Explore</a></li>
        <li><a href="#">Distribute</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Help</a></li>
      </ul>
        <p>Beatwire, a producer's heaven. Copyright &copy; 2017 Beatwire LLC. All Rights Reserved. All trademarks and copyrights belong to their respective owners.</p>
    </div>
  </footer>
<script>
$(document).ready(function(){       
   var scroll_start = 0;
   var startchange = $('#startchange');
   var offset = startchange.offset();
    if (startchange.length){
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $(".mainNav").css({'background-color': '#fff', 'border-bottom': '1px solid #eee'});
          $(".mainNav .navbar-nav > li > a").css({'color': '#333', 'font-weight': '100'});
          $(".mainNav svg path").css({'fill': '#333'});
          $(".mainNav .navbar-nav > .active > a").css({'border-bottom': '3px solid #1ABC9C'})
       } else {
          $(".mainNav").css({'background-color': 'transparent', 'border-bottom': '0'});
          $(".mainNav .navbar-nav > li > a").css({'color': '#fff', 'font-weight': 'bold'});
           $(".mainNav svg path").css({'fill': '#fff'});
           $(".mainNav svg path:hover").css({'fill': '#333'});
           $(".mainNav .navbar-nav > .active > a").css({'border-bottom': '3px solid #fff'})
       }
   });
    }
});</script>
<script>
var url = window.location;
// Will only work if string in href matches with location
$('ul.nav a[href="'+ url +'"]').parent().addClass('active');

// Will also work for relative and absolute hrefs
$('ul.nav a').filter(function() {
    return this.href == url;
}).parent().addClass('active');</script>