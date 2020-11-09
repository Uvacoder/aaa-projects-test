(function ($) {
    "use strict";
    $(".mobile-toggle-container").click(function () {
        if ($(".nav").attr("class") === "nav") {
            $(".nav").attr("class", "nav nav-mobile-open");
            $(".mobile-toggle-container").attr("class", "mobile-toggle-container mobile-toggle-container-closeIconVisible");
            $("#mob-menu").attr("class", "nav-mobile-container nav-mobile-container-default nav-mobile-container-visible");
        } else {
            $(".nav").attr("class", "nav");
            $(".mobile-toggle-container").attr("class", "mobile-toggle-container");
            $("#mob-menu").attr("class", "nav-mobile-container nav-mobile-container-default");
        }
    });


})(jQuery);
