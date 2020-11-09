</div>
</div>

<div id="latestNews">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-8">
                    </div>
                    <div class="col-sm-4">
                        <div class="container d-flex h-100">
                            <div class="row align-self-center justify-content-start">
                                <div class="latestNewsSubHeader">In-Store Clearance</div>
                                <a class="btn btn-hubbingtons" href="<?php echo home_url(); ?>/in-store-clearance">View Clearance</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="container d-flex h-100">
                            <div class="row align-self-center justify-content-end">
                                <div class="latestNewsSubHeader">Current Promotions</div>
                                <a class="btn btn-hubbingtons" href="<?php echo home_url(); ?>/promotions">View Promotions</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <img src="http://hub.lcmdev.net/wp-content/themes/hubbingtons/assets/img/footer/hub.png" class="footer-logo">
            </div>
            <div class="col-sm-3">
                <div class="footerBoxHeader">Catalog</div>
                <ul>
                    <li><a href="<?php echo home_url();?>/dining-kitchen">Dining & Kitchen</a></li>
                    <li><a href="<?php echo home_url();?>/bedroom">Bedroom</a></li>
                    <li><a href="<?php echo home_url();?>/living-room">Living Room</a></li>
                    <li><a href="<?php echo home_url();?>/office">Office</a></li>
                    <li><a href="<?php echo home_url();?>/porch-patio">Porch & Patio</a></li>
                    <li><a href="<?php echo home_url();?>/kids">Kids</a></li>
                    <li><a href="<?php echo home_url();?>/entertainment-accents">Entertainment & Accents</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <div class="footerBoxHeader">Customers</div>
                <ul>
                    <li><a href="<?php echo home_url();?>/my-account">My Account</a></li>
                    <li><a href="<?php echo home_url();?>/my-account/orders">Order Information</a></li>
                    <li><a href="<?php echo home_url();?>/return-policy">Return Policy</a></li>
                    <li><a href="<?php echo home_url();?>/how-to-buy">How To Buy</a></li>
                    <li><a href="<?php echo home_url();?>/directions">Store Directions</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <div class="footerBoxHeader">Company</div>
                <ul>
                    <li><a href="<?php echo home_url();?>/about">About Us</a></li>
                    <li><a href="<?php echo home_url();?>/terms-conditions">Terms & Conditions</a></li>
                    <li><a href="<?php echo home_url();?>/privacy-policy">Privacy Policy</a></li>
                    <li><a href="<?php echo home_url();?>/return-policy">Return Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="copyright">
        Copyright &copy;
        <?php echo date("Y"); ?>
        <?php echo esc_html( get_bloginfo( 'name' ) ); ?> - All rights reserved.<br />
        Site Designed by <a href="http://loudcanvas.com" target="_blank">Loud Canvas</a>
    </div>
</footer>

<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/jquery/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/popper/popper.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/tether/tether.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/default.js"></script>

</body>

</html>
