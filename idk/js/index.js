var rafId = null;
var delay = 200;
var lTime = 0;

function scroll() {
    var e = $(window).scrollTop(),
        a = $(window).height(),
        n = e + a;
    $(".reveal").each(function() {
        var a = $(this);
        if (!a.hasClass("reveal_visible")) {
            var l = a.offset().top;
            l <= n && (l + a.height() < e ? a.removeClass("reveal_pending").addClass("reveal_visible") : (a.addClass("reveal_pending"), rafId || requestAnimationFrame(reveal)))
        }
    })
}
function reveal() {
  rafId = null;
  var now = performance.now();
  
  if (now - lTime > delay) {
    lTime = now;
    var $ts = $('.reveal_pending');
    $($ts.get(0)).removeClass('reveal_pending').addClass('reveal_visible');  
  }
  
  
  if ($('.reveal_pending').length >= 1) rafId = requestAnimationFrame(reveal);
}

$(scroll);
$(window).scroll(scroll);
$(window).click(function() {
  $('.reveal').removeClass('reveal_visible').removeClass('reveal_pending');
  lTime = performance.now() + 500;
  var top = $(window).scrollTop();
  $(window).scrollTop(top === 0 ? 1 : top-1);
});