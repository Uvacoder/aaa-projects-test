$(document).ready(function(){

	$('.menu-burger').click( function() {
		$('.bar').toggleClass('animate');
		$('.overlay').fadeToggle(100, 'linear');
		$('.menu-options-list').delay(100).addClass('slideDownIn');
	});
});
$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
$(document).ready(function() {

$('body').css('display', 'none');

$('body').fadeIn(1000);



$('.link').click(function() {

event.preventDefault();

newLocation = this.href;

$('body').fadeOut(1000, newpage);

});

function newpage() {

window.location = newLocation;

}

});