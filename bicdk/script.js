$(document).ready(function () {
    $("body").css("display", "none");

    $("body").fadeIn(300);

    $("a.link").click(function (event) {
        event.preventDefault();
        linkLocation = this.href;
        $("body").fadeOut(300, redirectPage);
    });

    function redirectPage() {
        window.location = linkLocation;
    }
});
$(window).load(function () {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow").delay(2000);;
});
// ===== Scroll to Top ==== 
$(window).scroll(function () {
    if ($(this).scrollTop() >= 50) { // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200); // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200); // Else fade out the arrow
    }
});
$('#return-to-top').click(function () { // When arrow is clicked
    $('body,html').animate({
        scrollTop: 0 // Scroll to top of body
    }, 500);
});
$('input:checkbox').change(function(){
    if($(this).is(":checked")) {
        $('img.logo').addClass("white-logo");
    } else {
        $('img.logo').removeClass("white-logo");
    }
});
