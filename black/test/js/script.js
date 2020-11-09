$(".menu-toggle").click(function() {
  $(".menu-toggle > i").toggleClass("hide");
  $(".menu .left, .menu .right").toggleClass("show");
});