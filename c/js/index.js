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

Init();

$(window).resize(function () {
    Init();
});

function Init() {
    if ($('#preview').length == 0) {
        $SlideHeight = $('#MsMmSlider').height();
        $DivNum = $('#MsMmSlider>div').length;
    } else {
        $SlideHeight = $('#items').height();
        $DivNum = $('#items>div>div').length;
    }
    $SliderHeight = $DivNum * $SlideHeight;
    $NewScrollTop = $CurrSl = 0;
    $SlNum = $DivNum - 1;
    $AnimInProgress = false;

    if ($('#preview').length == 0) {

        $("#MsMmSlider").wrapInner('<div id="items" class="col"><div></div></div>');
        $('<div id="preview" class="col"><div></div></div>').appendTo("#MsMmSlider");

        for (ct = 1; ct <= $DivNum; ct++) {
            Origine = $('#items').find('div>div:nth-child(' + ct + ')');
            ThisColor = Origine.attr('data-color');
            ThisImg = Origine.attr('data-img');
            Origine.find('strong').css('color', ThisColor);
            $('<div style="border-left:10px solid ' + ThisColor + '; background-image:url(' + ThisImg + ');"></div>').prependTo("#preview>div");
        }
    }

    $("#items>div").scrollTop(0);
    $("#preview>div").scrollTop($SliderHeight);

    var indicator = new WheelIndicator({
        elem: document.querySelector('#MsMmSlider'),
        callback: function (e) {
            ScrollMe(e.direction);
        }
    });
    indicator.getOption('preventMouse');
}

function ScrollMe(Direction) {
    if ($AnimInProgress == false) {
        if (Direction == 'down' && $CurrSl < $SlNum) {
            $AnimInProgress = true;
            $CurrSl += 1;
            $TranslateOrigin = '100%';
        } else if (Direction == 'up' && $CurrSl > 0) {
            $AnimInProgress = true;
            $CurrSl -= 1;
            $TranslateOrigin = '-100%';
        } else {
            $AnimInProgress = false;
            exit;
        }
        $NewScrollTop = $CurrSl * $SlideHeight;
        $NewAltScrollTop = $SliderHeight - (($CurrSl + 1) * $SlideHeight);

        TweenMax.to($(".col:nth-child(1)>div"), 0.6, {
            scrollTo: {
                x: 0,
                y: $NewScrollTop
            },
            ease: Expo.easeOut
        });
        TweenMax.to($(".col:nth-child(2)>div"), 0.6, {
            scrollTo: {
                x: 0,
                y: $NewAltScrollTop
            },
            ease: Expo.easeOut,
            onComplete: function () {
                $AnimInProgress = false;
            }
        });
    }
}
