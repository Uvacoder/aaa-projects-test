! function ($) {
    function n() {
        $("a").each(function () {
            -1 === this.href.indexOf("/wp-admin/") && -1 === this.href.indexOf("/wp-login.php") || $(this).addClass("wp-link")
        })
    }
    $(function () {
        n();
        var t = {
            anchors: "a",
            blacklist: ".wp-link",
            onStart: {
                duration: 280,
                render: function (n) {
                    n.addClass("slide-out")
                }
            },
            onAfter: function (t) {
                n();
                var o = $(window.location.hash);
                if (0 !== o.length) {
                    var i = o.offset().top;
                    $("body, html").animate({
                        scrollTop: i - 60
                    }, {
                        duration: 280
                    })
                }
                t.removeClass("slide-out")
            }
        };
        $("#page").smoothState(t)
    })
}(jQuery);
//# sourceMappingURL=./script.min.js.map