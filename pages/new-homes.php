<?php
/**
 * Template Name: New Homes Template
 *
 * Description: New Homes Template
 *
 * @package WordPress
 * @subpackage REDI
 * @since REDI 1.0
 */
get_header(); 
?>
<div id="primary" class="content-area nav-space">
	<main id="main" class="site-main">

		<!-- Main Slider -->
		<section>
			<h1 class="outline">Slider</h1>
			<?php 
			$slider_id = get_field("gka_theme_slider", $post->ID);
			if($slider_id) {
				$slider = gka_theme_get_gallery($slider_id);
				if($slider) { 
					include get_template_directory() . '/template-parts/main-slider.php'; 
				} 
			}
			else {
				include get_template_directory() . '/template-parts/no-slider.php'; 
			}
        ?>
		</section>
		<!-- #Main Slider -->

		<!-- Widget Area Before -->
		<?php
		if ( is_active_sidebar( 'gka_theme_widget_before' ) ) {
			dynamic_sidebar( 'gka_theme_widget_before' ); 
		}
		?>
		<!-- #Widget Area Before -->

		<!-- Main Content -->
		<?php while ( have_posts() ) : the_post(); ?>
		<section class="main-section">
			<div class="container">
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
			</div>
		</section>
		<?php endwhile; // End of the loop. ?>
		<!-- #Main Content -->

		<!-- Additional Content -->
		<section class="bg-green">
			<div class="container builder-list-container">
				<div class="header">
					<h1 class="font-weight-bold text-d-green">builders</h1>
				</div>
				<div class="row justify-content-around">

					<div class="col-md-5">
						<div class="builder-list z-depth-1">
							<div class="images">
								<a target="_blank" href="https://www.beazer.com/gatherings">
									<img src="<?php echo get_template_directory_uri(); ?>/images/comingsoon.jpg"
										alt="New Homes" class="img-fit img-fluid">
								</a>
							</div>
							<div class="content">
								<div>
									<a target="_blank" href="https://www.beazer.com/gatherings">
										<img src="<?php echo get_template_directory_uri(); ?>/images/beazer.jpg"
											alt="Beazer Homes" style="height: 45px">
									</a>
								</div>
								<div class="text-right">
									<div>
										<a href="240-668-3054" class="text-d-green">240.668.3054</a>
									</div>
									<div>
										<a target="_blank" class="btn custom-btn red-btn"
											href="https://www.beazer.com/gatherings">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-5">
						<div class="builder-list z-depth-1">
							<div class="images">
								<a target="_blank" href="https://www.craftmarkhomes.com/communities/cabin-branch/">
									<img src="<?php echo get_template_directory_uri(); ?>/images/builder/CraftmarkRendering.jpg"
										alt="New Homes" class="img-fit img-fluid">
								</a>
							</div>
							<div class="content">
								<div>
									<a target="_blank" href="https://www.craftmarkhomes.com/communities/cabin-branch/">
										<img src="<?php echo get_template_directory_uri(); ?>/images/craftmark-logo-black.svg"
											alt="Craftmark Homes" style="height: 35px">
									</a>
								</div>
								<div class="text-right">
									<div>
										<a href="301-910-5770" class="text-d-green">301.910.5770</a>
									</div>
									<div>
										<a target="_blank" class="btn custom-btn red-btn"
											href="https://www.craftmarkhomes.com/communities/cabin-branch/">Learn
											More</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-5">
						<div class="builder-list z-depth-1">
							<div class="images">
								<a target="_blank" href="https://www.drbhomes.com/drbhomes/find-your-home/communities/maryland/capital-region/the-village-at-cabin-branch/overview">
									<img src="<?php echo get_template_directory_uri(); ?>/images/builder/DRB.jpg"
										alt="New Homes" class="img-fit img-fluid">
								</a>
							</div>
							<div class="content">
								<div>
									<a target="_blank" href="https://www.drbhomes.com/drbhomes">
										<img src="<?php echo get_template_directory_uri(); ?>/images/drb-logo.png"
											alt="Dan Ryan" style="height: 60px">
									</a>
								</div>
								<div class="text-right">
									<div>
										<a href="tel:301-696-5632" class="text-d-green">301.696.5632</a>
									</div>
									<div>
										<a target="_blank" class="btn custom-btn red-btn"
											href="https://www.drbhomes.com/drbhomes/find-your-home/communities/maryland/capital-region/the-village-at-cabin-branch/overview">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-5">
						<div class="builder-list z-depth-1">
							<div class="images">
								<a target="_blank"
									href="https://www.stanleymartin.com/maryland/maryland/clarksburg/the-village-at-cabin-branch/?utm_source=developerwebsite&utm_medium=website&utm_campaign=mar-cbr&utm_content=thevillageatcabinbranch">
									<img src="<?php echo get_template_directory_uri(); ?>/images/builder/stanley-martin.jpg"
										alt="New Homes" class="img-fit img-fluid">
								</a>
							</div>
							<div class="content">
								<div>
									<a target="_blank"
										href="https://www.stanleymartin.com/maryland/maryland/clarksburg/the-village-at-cabin-branch/?utm_source=developerwebsite&utm_medium=website&utm_campaign=mar-cbr&utm_content=thevillageatcabinbranch">
										<img src="<?php echo get_template_directory_uri(); ?>/images/smh_logo.jpg"
											alt="Stanley Martin" style="height: 35px">
									</a>
								</div>
								<div class="text-right">
									<div>
										<a href="tel:301-368-8744" class="text-d-green">301.368.8744</a>
									</div>
									<div>
										<a target="_blank" class="btn custom-btn red-btn"
											href="https://www.stanleymartin.com/maryland/maryland/clarksburg/the-village-at-cabin-branch/?utm_source=developerwebsite&utm_medium=website&utm_campaign=mar-cbr&utm_content=thevillageatcabinbranch">Learn
											More</a>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>

		<section class="pb-3">
			<div class="container builder-list-container">
				<div class="header">
					<h1 class="font-weight-bold text-d-green">site plan</h1>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-11">
						<div class="z-depth-1">
							<a data-fancybox href="<?php echo get_template_directory_uri(); ?>/images/CabinBranchCommunitySitePlan.jpg">
								<img src="<?php echo get_template_directory_uri(); ?>/images/CabinBranchCommunitySitePlan.jpg"
									alt="Site Plan" class="img-fluid">
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- #Additional Content -->

		<!-- Widget Area After -->
		<?php
		if ( is_active_sidebar( 'gka_theme_widget_after' ) ) {
			dynamic_sidebar( 'gka_theme_widget_after' ); 
		}
		?>
		<!-- #Widget Area After -->

		<!-- Additional Content -->
		<section class="contact-form">
			<div class="container">
				<div>
					<h2 class="text-center font-weight-bold">Contact Us</h2>
				</div>
				<?php echo do_shortcode('[wpforms id="42"]'); ?>
			</div>
		</section>
		<!-- #Additional Content -->

	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();