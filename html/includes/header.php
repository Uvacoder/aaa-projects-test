<script>
    $(function () {
        $('.options1 ul li a[href^="/' + location.pathname.split("/")[1] + '"]').addClass('active');
    });
</script>
<script>
    //Toggle mobile menu & search
    $('.toggle-nav').click(function () {
        console.log('toggle nav');
        $('.options1').slideToggle(200);
        $('.mobile-search').slideUp(200);
    });
    //Close navigation on anchor tap
    $('a').click(function () {
        console.log('close nav');
        $('.options1').slideUp(200);
        $('.mobile-search').slideUp(200);
    });
    $('.toggle-search').click(function () {
        console.log('toggle search');
        $('.mobile-search').slideToggle(200);
        $('.options1').slideUp(200);
    });
    //Mobile menu accordion toggle for sub pages
    $('.options1 > ul > li.menu-item-has-children').append('<div class="accordion-toggle"><div class="fa fa-angle-down"></div></div>');
    $('.options1 .accordion-toggle').click(function () {
        $(this).parent().find('> ul').slideToggle(200);
        $(this).toggleClass('toggle-background');
        $(this).find('.fa').toggleClass('toggle-rotate');
    });
</script>
<div class='nav1 content'>
            <div class='logo'>
                <div class='text'>
                    <a href="/"><img src="//i.imgur.com/Po5ofr7.png" style="width: 120px;"></a>
                </div>
                <div class='divider'></div>
                <div class='options1'>
                <ul>
                    <li><a href="#">
        Explore
        </a></li>
                    <li><a href="#">
        Distribute
        </a></li>
                    <li><a href="/plus">
                Plus
                </a></li>
                </ul>
            </div>
                <div class="search1"> <span class="ion-ios-search-strong"></span>
                    <input type="text" name="search" placeholder="Search for producers, beats, genres, or packs"> </div>
            </div>
            <div class='options1'>
                <ul>
                    <li><a href="#">
        Sign In / Sign Up
        </a></li>
                </ul>
            </div>
        </div>