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
