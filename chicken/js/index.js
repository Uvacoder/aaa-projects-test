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
$(document).ready(function () {

    // Variables
    var clickedTab = $(".tabs > .active");
    var tabWrapper = $(".tab__content");
    var activeTab = tabWrapper.find(".active");
    var activeTabHeight = activeTab.outerHeight();

    // Show tab on page load
    activeTab.show();

    // Set height of wrapper on page load
    tabWrapper.height(activeTabHeight);

    $(".tabs > li").on("click", function () {

        // Remove class from active tab
        $(".tabs > li").removeClass("active");

        // Add class active to clicked tab
        $(this).addClass("active");

        // Update clickedTab variable
        clickedTab = $(".tabs .active");

        // fade out active tab
        activeTab.fadeOut(250, function () {

            // Remove active class all tabs
            $(".tab__content > li").removeClass("active");

            // Get index of clicked tab
            var clickedTabIndex = clickedTab.index();

            // Add class active to corresponding tab
            $(".tab__content > li").eq(clickedTabIndex).addClass("active");

            // update new active tab
            activeTab = $(".tab__content > .active");

            // Update variable
            activeTabHeight = activeTab.outerHeight();

            // Animate height of wrapper to new tab height
            tabWrapper.stop().delay(50).animate({
                height: activeTabHeight
            }, 500, function () {

                // Fade in active tab
                activeTab.delay(50).fadeIn(250);

            });
        });
    });
});
$(".toggle-price").on('click', function () {
    $(".yearly").toggleClass("green");
    if ($(".toggle-price").is(":checked")) {
        $(".price").html("$40");
        $(".period").html("per month, billed annually");
    } else {
        $(".price").html("$50");
        $(".period").html("per month");
    }
});
