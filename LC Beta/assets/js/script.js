(function ($) {
    "use strict";

    // Remove preload class once page is fully loaded

    $(window).on('load', function () {
        $('body').removeClass('preload');
    });

    // Add class to navigation when scrolling down

    $(window).on('scroll', function () {
        var scroll = $(window).scrollTop();
        if (scroll >= 20) {
            $('.header-main').addClass('fade-in');
        } else {
            $('.header-main').removeClass('fade-in');
        }
    });

    // Add class when mobile navigation icon is clicked

    $('.nav-toggle').on('click', function () {
        $('body').toggleClass('no-scroll');
        $('.header-main').toggleClass('active');
    });

    // Prevent background from scrolling on mobile when navigation is toggled

    $('html, body').on('touchmove', function () {
        e.preventDefault();
    });

})(jQuery);
$(document).on("click", "a", function () {

    // get the href attribute
    var newUrl = $(this).attr("href");

    // veryfy if the new url exists or is a hash
    if (!newUrl || newUrl[0] === "#") {
        // set that hash
        location.hash = newUrl;
        return;
    }

    // now, fadeout the html (whole page)
    $("html").fadeOut(function () {
        // when the animation is complete, set the new location
        location = newUrl;
    });

    // prevent the default browser behavior.
    return false;
});
$(function () {
    $('body').removeClass('fade-out');
});
var rafId = null;
var delay = 400;
var lTime = 0;

function scroll() {
    var scrollTop = $(window).scrollTop();
    var height = $(window).height()
    var visibleTop = scrollTop + height;
    $('.reveal').each(function () {
        var $t = $(this);
        if ($t.hasClass('reveal_visible')) {
            return;
        }
        var top = $t.offset().top;
        if (top <= visibleTop) {
            if (top + $t.height() < scrollTop) {
                $t.removeClass('reveal_pending').addClass('reveal_visible');
            } else {
                $t.addClass('reveal_pending');
                if (!rafId) requestAnimationFrame(reveal);
            }
        }
    });
}

function reveal() {
    rafId = null;
    var now = performance.now();

    if (now - lTime > delay) {
        lTime = now;
        var $ts = $('.reveal_pending');
        $($ts.get(0)).removeClass('reveal_pending').addClass('reveal_visible');
    }


    if ($('.reveal_pending').length >= 1) rafId = requestAnimationFrame(reveal);
}

$(scroll);
$(window).scroll(scroll);
jQuery(window).scroll(function () {
    var fromTopPx = 10; // distance to trigger
    var scrolledFromtop = jQuery(window).scrollTop();
    if (scrolledFromtop > fromTopPx) {
        jQuery('.logo').addClass('scrolled');
    } else {
        jQuery('.logo').removeClass('scrolled');
    }
});
