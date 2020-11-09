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
