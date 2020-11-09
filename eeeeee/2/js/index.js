var rafId = null,
    delay = 200,
    lTime = 0;

function scroll() {
    var e = $(window).scrollTop(),
        t = $(window).height(),
        n = e + t;
    $(".reveal").each(function () {
        var t = $(this);
        if (!t.hasClass("reveal_visible")) {
            var l = t.offset().top;
            l <= n && (l + t.height() < e ? t.removeClass("reveal_pending").addClass("reveal_visible") : (t.addClass("reveal_pending"), rafId || requestAnimationFrame(reveal)))
        }
    })
}

function reveal() {
    rafId = null;
    var e = performance.now();
    if (e - lTime > delay) {
        lTime = e;
        var t = $(".reveal_pending");
        $(t.get(0)).removeClass("reveal_pending").addClass("reveal_visible")
    }
    $(".reveal_pending").length >= 1 && (rafId = requestAnimationFrame(reveal))
}
$(window).load(function () {
        $(".se-pre-con").delay(0).fadeOut("fast", function () {
            scroll(), $(window).scroll(scroll)
        })
    }), document.getElementsByTagName("body")[0].addEventListener("mousemove", function (n) {
        t.style.left = n.clientX + "px", t.style.top = n.clientY + "px", e.style.left = n.clientX + "px", e.style.top = n.clientY + "px", i.style.left = n.clientX + "px", i.style.top = n.clientY + "px"
    }), $(".tab-content").hide(), $("#tab-1").show(), $("#select-box").change(function () {
        dropdown = $("#select-box").val(), $(".tab-content").hide(), $("#tab-" + dropdown).show()
    }),
    $(document).ready(function () {
        $(".menu-burger").click(function () {
            $("nav").toggleClass("mobile-white"), $(".logo").toggleClass("white-svg"), $(".bar").toggleClass("animate"), $(".overlay").fadeToggle(100, "linear"), $(".menu-options-list").delay(100).addClass("slideDownIn")
        }), $("#js-btn--menu").click(function () {
            $(this).toggleClass("is-active")
        })
    }), $(document).on("click", "a", function () {
        var e = $(this).attr("href");
        if (e && "#" !== e[0]) return $("html").fadeOut(function () {
            location = e
        }), !1;
        location.hash = e
    });
