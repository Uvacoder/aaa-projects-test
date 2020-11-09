// Uncomment to use to start page with nav open on load
//$('.overlay').toggle();


// uncomment to have individual nav options slide down staggered
// $(document).ready(function(){
// 	$('li.option-1, li.option-2, li.option-3, li.option-4, li.option-5').fadeToggle().addClass('animated slideInDown');	// Makes sure to fade all options before fadeToggle func can be triggered by user

// 	$('.menu-burger').click( function() {
// 		$('.bar').toggleClass('animate'); 															// Creates the Hamburger -> X Animation on first click
// 		$('.overlay').fadeToggle(100, 'linear'); 													// toggles open the nav overlay // Optionally could change fadeIn & fadeut to both toggleClass
// 		$('.menu-burger').toggleClass('hide-border', 100 , "easeInQuad"); 				// Hides the border when hamburger is clicked
// 																												// Need to spit to make it seem staggered
// 		$('li.option-1').delay(100).fadeToggle(150).addClass('animated slideInDown');	// Rapidly fades option in upward into place
// 		$('li.option-2').delay(150).fadeToggle(150).addClass('animated slideInDown');	// Rapidly fades option in upward into place
// 		$('li.option-3').delay(200).fadeToggle(150).addClass('animated slideInDown');	// Rapidly fades option in upward into place
// 		$('li.option-4').delay(250).fadeToggle(150).addClass('animated slideInDown');	// Rapidly fades option in upward into place
// 		$('li.option-5').delay(300).fadeToggle(150).addClass('animated slideInDown');	// Rapidly fades option in upward into place
// 	});
// });

$(document).ready(function () {

    $('.menu-burger').click(function () {
        $('.logo').toggleClass('white-svg');
        $('.bar').toggleClass('animate'); // Creates the Hamburger -> X Animation on first click
        $('.overlay').fadeToggle(100, 'linear'); // toggles open the nav overlay // Optionally could change fadeIn & fadeut to both toggleClass
        $('.menu-options-list').delay(100).addClass('slideDownIn'); // Rapidly fades option in upward into place
    });
});

$(document).on("click", "a", function () {

    // get the href attribute
    var newUrl = $(this).attr("href");

    // veryfy if the new url exists or is a hash
    if (!newUrl || newUrl[0] === "#") {
        // set that hash
        location.hash = newUrl;
        return;
    }

    // now, fadeout the html (whole page)
    $("html").fadeOut(function () {
        // when the animation is complete, set the new location
        location = newUrl;
    });

    // prevent the default browser behavior.
    return false;
});

$(function () {
    function after_form_submitted(data) {
        if (data.result == 'success') {
            $('form#reused_form').hide();
            $('#success_message').show();
            $('#error_message').hide();
        } else {
            $('#error_message').append('<ul></ul>');

            jQuery.each(data.errors, function (key, val) {
                $('#error_message ul').append('<li>' + key + ':' + val + '</li>');
            });
            $('#success_message').hide();
            $('#error_message').show();

            //reverse the response on the button
            $('button[type="button"]', $form).each(function () {
                $btn = $(this);
                label = $btn.prop('orig_label');
                if (label) {
                    $btn.prop('type', 'submit');
                    $btn.text(label);
                    $btn.prop('orig_label', '');
                }
            });

        } //else
    }

    $('#reused_form').submit(function (e) {
        e.preventDefault();

        $form = $(this);
        //show some response on the button
        $('button[type="submit"]', $form).each(function () {
            $btn = $(this);
            $btn.prop('type', 'button');
            $btn.prop('orig_label', $btn.text());
            $btn.text('Sending ...');
        });


        $.ajax({
            type: "POST",
            url: 'handler.php',
            data: $form.serialize(),
            success: after_form_submitted,
            dataType: 'json'
        });

    });
});
