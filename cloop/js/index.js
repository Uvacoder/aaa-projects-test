$(document).ready(function () {



    /* Toggle Subnav - More
    -------------------------------------------------------------------------------*/
    function toggle_subnav_more() {

        $('.global-nav-more, .main-overlay').click(function () {

            event.preventDefault();
            $('html').toggleClass('subnav-open');

        });

    }
    toggle_subnav_more();




    /* Homepage FullPage Scroll Jack Layout
      -------------------------------------------------------------------------------*/
    function homepage_fullpage() {

        $('#homepage-fullpage').fullpage({

            //Navigation
            menu: '#menu',
            lockAnchors: false,
            navigation: true,
            navigationPosition: 'right',
            showActiveTooltip: true,
            slidesNavigation: true,
            slidesNavPosition: 'bottom',

            //Scrolling
            css3: true,
            scrollingSpeed: 800,
            autoScrolling: true,
            fitToSection: true,
            fitToSectionDelay: 1000,
            scrollBar: false,
            easing: 'easeInOutCubic',
            easingcss3: 'ease',
            loopBottom: false,
            loopTop: false,
            loopHorizontal: true,
            continuousVertical: false,
            continuousHorizontal: false,
            scrollHorizontally: false,
            interlockedSlides: false,
            resetSliders: false,
            fadingEffect: false,
            normalScrollElements: '#element1, .element2',
            scrollOverflow: true,
            scrollOverflowOptions: null,
            touchSensitivity: 15,
            normalScrollElementTouchThreshold: 5,
            bigSectionsDestination: null,

            //Accessibility
            keyboardScrolling: true,
            animateAnchor: true,
            recordHistory: true,

            //Design
            controlArrows: true,
            verticalCentered: true,
            sectionsColor: ['#fff', '#F7F9FA', '#F7F9FA', '#F7F9FA', '#F7F9FA', '#F7F9FA'],
            paddingTop: '0em',
            paddingBottom: '0em',
            fixedElements: '#header, .footer',
            responsiveWidth: 0,
            responsiveHeight: 0,
            responsiveSlides: false,

            //Custom selectors
            sectionSelector: '.section',
            slideSelector: '.slide',

            //events
            // onLeave: function(index, nextIndex, direction){},
            // afterLoad: function(anchorLink, index){},
            //afterRender: function(){},
            // afterResize: function(){},
            //afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
            // onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){}
            afterLoad: function (anchorLink, index) {

                if ($(this).find(".video-background").length) {
                    // If the length is greater than 0, bg video element exists
                    $('.active .video-background').get(0).play();
                    //console.log("section has bg video");
                } else {
                    // else, false, bg video element doesn't exist
                    // do nothing
                }

            }

        });

    }
    homepage_fullpage();



});
$(".icon__menu__open").click(function () {
    $(this).css("display", "none");
    $(".logo").css("opacity", "0.5");
    $(".icon__menu__close").css("display", "block");
    $(".nav__appear").css("transform", "translateX(-1px)");
});
$(".icon__menu__close").click(function () {
    $(this).css("display", "none");
    $(".logo").css("opacity", "1");
    $(".icon__menu__open").css("display", "block");
    $(".nav__appear").css("transform", "translateX(-251px)");
});
