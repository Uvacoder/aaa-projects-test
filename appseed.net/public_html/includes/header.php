<script>
    $(function () {
        $('.options1 ul li a[href^="/' + location.pathname.split("/")[1] + '"]').addClass('active');
    });
</script>
<script>
		//Toggle mobile menu & search
		$('.toggle-nav').click(function() {
		  console.log('toggle nav');
		  $('.options1').slideToggle(200);
		  $('.mobile-search').slideUp(200);
		});
		//Close navigation on anchor tap
			$('a').click(function() {
		  console.log('close nav');
		  $('.options1').slideUp(200);
		  $('.mobile-search').slideUp(200);
		});	

		$('.toggle-search').click(function() {
		  console.log('toggle search');
		  $('.mobile-search').slideToggle(200);
		  $('.options1').slideUp(200);
		});

		//Mobile menu accordion toggle for sub pages
		$('.options1 > ul > li.menu-item-has-children').append('<div class="accordion-toggle"><div class="fa fa-angle-down"></div></div>');
		$('.options1 .accordion-toggle').click(function() {
		  $(this).parent().find('> ul').slideToggle(200);
		  $(this).toggleClass('toggle-background');
		  $(this).find('.fa').toggleClass('toggle-rotate');
		});</script>
<div class='nav1 content'>
    <div class='logo'>
        <div class='text'>
            <a href="/"><img src="/assets/img/logo.png" style="width: 120px;margin-top:10px;"></a>
        </div>
        <div class='divider'></div>
        <a href="/about/careers">
            <div class='hiring arrow_box'> We're Hiring! </div>
        </a>
    </div>
    <div class='options1'>
        <ul>
            <li><a href="#">
          Features
        </a></li>
            <li><a href="/pricing">
          Pricing
        </a></li>
            <li><a href="//developers.appseed.net">
          Developers
        </a></li>
            <li><a href="#">
          Community
        </a></li>
            <li><a href="//help.appseed.net">
          Help
        </a></li>
            <li><a href="#">More <span class="chevron"></span></a>
                <ul>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="//enterprise.appseed.net">Enterprise</a></li>
                </ul>
                <li class="nohover">
                    <div class='register1'><a href="/download"> Download AppSeed </a></div>
                </li>
        </ul>
    </div>
    
</div>