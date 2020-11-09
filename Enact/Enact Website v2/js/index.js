(function ($) {
    "use strict";
    $(window).on('load', function () {
        $('body').removeClass('preload');
    });
    $(window).on('scroll', function () {
        var scroll = $(window).scrollTop();
        if (scroll >= 20) {
            $('.header-main').addClass('fade-in');
        } else {
            $('.header-main').removeClass('fade-in');
        }
    });
    $('.nav-toggle').on('click', function () {
        $('body').toggleClass('no-scroll');
        $('.header-main').toggleClass('active');
    });
    $('html, body').on('touchmove', function () {
        e.preventDefault();
    });
})(jQuery);
$(function() {
    var header = $(".navbar");
  
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 50) {
            header.addClass("scrolled");
        } else {
            header.removeClass("scrolled");
        }
    });
  
});
var left = document.querySelector("#menu-left"),
      right = document.querySelector("#menu-right"),
      center = document.querySelector("#menu-center"),
      nav = document.querySelector(".navigation");

left.addEventListener("click", function() {
  nav.classList.remove("navigation--cen=", "navigation--rtl");
});

right.addEventListener("click", function() {
  nav.classList.remove("navigation--cen");
  nav.classList.add("navigation--rtl");
});

center.addEventListener("click", function() {
  nav.classList.add("navigation--cen");
  nav.classList.remove("navigation--rtl");
});