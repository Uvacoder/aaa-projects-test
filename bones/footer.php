<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#323445" fill-opacity="1" d="M0,192L48,197.3C96,203,192,213,288,213.3C384,213,480,203,576,218.7C672,235,768,277,864,256C960,235,1056,149,1152,128C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
<footer class="uhs-footer">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-3">
				<div class="row">
					<div class="col-xs-6 col-sm-12">
						<h5><span class="hidden-xs">Popular Reviews</span></h5>
						<a class="ftr-link" href="/best-website-builders">Best Website Builders</a>
						<a class="ftr-link" href="/best-ecommerce-website-builders">Best Ecommerce Website
							Builders</a>
						<a class="ftr-link" href="/best-web-hosting-companies">Best Web Hosting Companies</a>
						<a class="ftr-link" href="/best-cloud-hosting">Best Cloud Hosting</a>
						<a class="ftr-link" href="/best-domain-registrars">Best Domain Registrars</a>
						<a class="ftr-link" href="/best-web-design-software">Best Web Design Software</a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<div class="row">
							<div class="col-xs-6 col-sm-12">
								<h5>Resources</h5>
								<a class="ftr-link" href="/tutorials">Tutorials</a>
								<a class="ftr-link" href="/community">Community</a>
								<a class="ftr-link" href="/community">Join Our Discord</a>
								<a class="ftr-link" href="/tools">Tools</a>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6">
						<div class="row">
							<div class="col-xs-6 col-sm-12">
								<h5>Company</h5>
								<a class="ftr-link" href="/about">About Us</a>
								<a class="ftr-link" href="/about/team">Meet The Team</a>
								<a class="ftr-link" href="/contact">Contact Us</a>
							</div>
							<div class="col-xs-6 col-sm-12">
								<span class="hidden-xs">
									<div class="section-break-new size-sm hidden-xs"></div>
									<h5>Legal</h5>
								</span>
								<a class="ftr-link" href="/legal/privacy-policy">Privacy Policy</a>
								<a class="ftr-link" href="/legal/terms">Terms &amp; Conditions</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3">
				<h5>Ad</h5>
			</div>
		</div>
		<div class="section-break-new size-sm"></div>
		<div class="row">
			<div class="col-xs-12 text-left">
				<p class="copyright">Copyright &copy; <?php echo date('Y'); ?> Website Insights. All Rights Reserved.</p>
			</div>
		</div>
	</div>
</footer>
<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

	<div id="inner-footer" class="wrap cf">

		<nav role="navigation">
			<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
		</nav>

		

	</div>

</footer>

</div>

<?php // all js scripts are loaded in library/bones.php ?>
<script src="https://unpkg.com/scrollreveal"></script>
<?php wp_footer(); ?>
<script type="text/javascript">
//<![CDATA[
jQuery(document).ready(function($) {
$('a').each(function() {
var a = new RegExp('/' + window.location.host + '/');
if(!a.test(this.href)) {
$(this).click(function(event) {
event.preventDefault();
event.stopPropagation();
window.open(this.href, '_blank');
});
}
});
});
//]]>
</script>
</body>

</html> <!-- end of site. what a ride! -->