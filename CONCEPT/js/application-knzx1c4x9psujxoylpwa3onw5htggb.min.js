$(document).ready(function() {
    $(".menu-burger").click(function() {
        $("nav").toggleClass("mobile-white"), $(".logo").toggleClass("white-svg"), $(".bar").toggleClass("animate"), $(".overlay").fadeToggle(100, "linear"), $(".menu-options-list").delay(100).addClass("slideDownIn")
    })
}), $(document).on("click", "a", function() {
    var e = $(this).attr("href");
    if (e && "#" !== e[0]) return $("html").fadeOut(function() {
        location = e
    }), !1;
    location.hash = e
}), $(function() {
    function e(e) {
        "success" == e.result ? ($("form#reused_form").hide(), $("#success_message").show(), $("#error_message").hide()) : ($("#error_message").append("<ul></ul>"), jQuery.each(e.errors, function(e, a) {
            $("#error_message ul").append("<li>" + e + ":" + a + "</li>")
        }), $("#success_message").hide(), $("#error_message").show(), $('button[type="button"]', $form).each(function() {
            $btn = $(this), label = $btn.prop("orig_label"), label && ($btn.prop("type", "submit"), $btn.text(label), $btn.prop("orig_label", ""))
        }))
    }
    $("#reused_form").submit(function(a) {
        a.preventDefault(), $form = $(this), $('button[type="submit"]', $form).each(function() {
            $btn = $(this), $btn.prop("type", "button"), $btn.prop("orig_label", $btn.text()), $btn.text("Sending ...")
        }), $.ajax({
            type: "POST",
            url: "handler.php",
            data: $form.serialize(),
            success: e,
            dataType: "json"
        })
    })
});
var rafId = null,
    delay = 200,
    lTime = 0;

function scroll() {
    var e = $(window).scrollTop(),
        a = $(window).height(),
        n = e + a;
    $(".iw18jg").each(function() {
        var a = $(this);
        if (!a.hasClass("u0a4m9")) {
            var l = a.offset().top;
            l <= n && (l + a.height() < e ? a.removeClass("tc4vmv").addClass("u0a4m9") : (a.addClass("tc4vmv"), rafId || requestAnimationFrame(reveal)))
        }
    })
}

function reveal() {
    rafId = null;
    var e = performance.now();
    if (e - lTime > delay) {
        lTime = e;
        var a = $(".tc4vmv");
        $(a.get(0)).removeClass("tc4vmv").addClass("u0a4m9")
    }
    $(".tc4vmv").length >= 1 && (rafId = requestAnimationFrame(reveal))
}