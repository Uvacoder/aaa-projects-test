var rafId = null,
    delay = 200,
    lTime = 0;

function scroll() {
    var e = $(window).scrollTop(),
        a = $(window).height(),
        n = e + a;
    $(".reveal").each(function () {
        var a = $(this);
        if (!a.hasClass("reveal_visible")) {
            var l = a.offset().top;
            l <= n && (l + a.height() < e ? a.removeClass("reveal_pending").addClass("reveal_visible") : (a.addClass("reveal_pending"), rafId || requestAnimationFrame(reveal)))
        }
    })
}

function reveal() {
    rafId = null;
    var e = performance.now();
    if (e - lTime > delay) {
        lTime = e;
        var a = $(".reveal_pending");
        $(a.get(0)).removeClass("reveal_pending").addClass("reveal_visible")
    }
    $(".reveal_pending").length >= 1 && (rafId = requestAnimationFrame(reveal))
}
$(window).load(function () {
    $(".se-pre-con").delay(0).fadeOut("slow", function () {
        scroll(), $(window).scroll(scroll)
    })
});
$(window).load(function () {
    $(".se-pre-con").delay(0).fadeOut("slow", function () {
        scroll(), $(window).scroll(scroll)
    })
}), $(document).on("click", "a", function () {
    var e = $(this).attr("href");
    if (e && "#" !== e[0]) return $("html").fadeOut(function () {
        location = e
    }), !1;
    location.hash = e
});

function planFunction(monthDiv, annualDiv) {
    d1 = document.getElementById("monthDiv");
    d2 = document.getElementById("annualDiv");
    if (d2.style.display == "none") {
        d1.style.display = "none";
        d2.style.display = "block";
    } else {
        d1.style.display = "block";
        d2.style.display = "none";
    }
}
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
