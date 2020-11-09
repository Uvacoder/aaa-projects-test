'use strict';

var $menu = $(".menu a"),
    $overlay = $(".menu-overlay"),
    $closeBtn = $(".close-form"),
    $closeMenu = $(".close-form a"),
    settings = {
        class: "is-active"
    };

function openMenu(e) {
    $overlay.toggleClass(settings.class);
    $closeBtn.toggleClass(settings.class);
    e.preventDefault();
}

function closeMenu(e) {
    $overlay.toggleClass(settings.class);
    $closeBtn.toggleClass(settings.class);
    e.preventDefault();
}

$menu.on('click', openMenu);

$closeMenu.on('click', closeMenu);

$(window).on('load', function () {
    $(".se-pre-con").delay(3000).fadeOut(1000);;
});
