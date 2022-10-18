<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gka_theme
 */

?>

</div><!-- #content -->

<footer id="footer" class="site-footer">
	<div class="container">
		<div class="text-center">
			<img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/images/CabinBranc_logo_color.png"
				alt="">
		</div>
		<div class="text-center">
			<!-- <ul class="footer-social list-unstyled list-inline p-0">
				<li class="list-inline-item">
					<a class="text-d-green" href=""><i class="fab fa-facebook"></i></a>
				</li>
				<li class="list-inline-item">
					<a class="text-d-green" href=""><i class="fab fa-instagram"></i></a>
				</li>
				<li class="list-inline-item">
					<a class="text-d-green" href=""><i class="fab fa-twitter"></i></a>
				</li>
			</ul> -->
		</div>
		<div class="menu-contact">
			<div class="row">
				<div class="col-6 col-lg-5 contact-info">
					<div class="row">
						<div class="col-md-6 mb-3">
							<h6 class="font-weight-bold">ADDRESS</h6>
							<div>
								<a target="_blank" href="https://goo.gl/maps/Z2PrGeobkTPX7C53A">22305 Cabin Branch Avenue, <br> Clarksburg, MD 20871</a>
							</div>
						</div>
						<!-- <div class="col-md-6 mb-3">
							<h6 class="font-weight-bold">CONTACT</h6>
							<div>
								<a href="tel:">123.123.1234</a>
							</div>
						</div> -->
					</div>
				</div>
				<div class="col-6 col-lg-7">
					<ul id="footer-menu" class="list-unstyled d-flex flex-wrap justify-content-end">
						<?php 
						$footer_nav = wp_get_nav_menu_items(2);
						foreach ($footer_nav as $key => $item) {    				        
						?>
						<li class="mx-2 <?php echo ($post->ID == $item->object_id) ? "active" : ""; ?>">
							<a href="<?php echo $item->url; ?>"><span><?php echo $item->title; ?></span></a>
						</li>
						<?php } ?>
					</ul>
				</div>
			</div>

		</div>
	</div>

	<div class="disclaimer">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-6">
					<p class="copyright m-0">© <?php echo getdate()['year']; ?> Classic Group All Right Reserved.</p>
				</div>
				<div class="col-6 text-right">
					<a href="/privacy-policy" id="privacy-policy" class="btn custom-btn">PRIVACY POLICY</a>
				</div>
			</div>
		</div>
	</div>
</footer>

<!-- <div id="gdpr-cookies" class="z-depth-2 bg-white">
	<div>
		<h6 class="font-weight-medium">This website uses cookies</h6>
		<p>
			This site uses cookies to provide more personalized content, social media features, and ads, and to analyze
			our
			traffic. We might share information about your use of our site with our social media, advertising, and
			analytics
			partners who may combine it with other information that you’ve provided to them or that they’ve collected
			from
			your use of their services. We will never sell your information or share it with unaffiliated entities.
		</p>
	</div>
	<div>
		<button id="gdpr-button" class="btn custom-btn btn-blue">Accept</button>
	</div>
</div> -->

</div><!-- #page -->
<?php wp_footer(); ?>
</body>

</html>