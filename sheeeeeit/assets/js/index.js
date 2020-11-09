   //countdown
   var countDownDate = new Date("Aug 22, 2019 09:00").getTime(),
       x = setInterval(function () {
           var e = (new Date).getTime(),
               t = countDownDate - e,
               n = Math.floor(t / 864e5),
               a = Math.floor(t % 864e5 / 36e5),
               o = Math.floor(t % 36e5 / 6e4);
           document.getElementById("time").innerHTML = "- " + n + "d : " + a + "h : " + o + "m ", t < 0 && (clearInterval(x), document.getElementById("time").innerHTML = "EXPIRED")
       }, 1e3);

   //dropdowns
   $(document).ready(function () {
       // executes when HTML-Document is loaded and DOM is ready

       // breakpoint and up
       $(window).resize(function () {
           if ($(window).width() >= 980) {

               // when you hover a toggle show its dropdown menu
               $(".navbar .dropdown-toggle").mouseenter(function () {
                   $(this).parent().toggleClass("show");
                   $(this).parent().find(".dropdown-menu").toggleClass("show");
               });

               // hide the menu when the mouse leaves the dropdown
               $(".navbar, .navbar .dropdown").mouseleave(function () {
                   $(this).removeClass("show");
               });

               // do something here
           }
       });



       // document ready
   });
