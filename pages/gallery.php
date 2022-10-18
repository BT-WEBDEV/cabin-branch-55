<?php
/**
 * Template Name: Gallery Page Template
 *
 * Description: Gallery Page Template
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

        <section class="bg-l-blue">
            <div class="container py-default">
                <div class="text-center text-white">
                    <h1 class="mb-header">The Best of The Best</h1>
                    <p class="font-weight-bold text-neon">See The NVP Difference</p>
                    <p>From luxury homes in stunning Prince William & Fairfax County communities to prime customized, classic NVP designs built on perfectly situated homesites, these photos are just a mere taste of what we can build for you.</p>
            </div>
        </section>

        <section class="gallery-section">
            <!-- Nav tabs -->
            <div class="py-4 text-center">
                <ul class="nav nav-pills justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Video Tours</a>
                    </li>
                </ul>
            </div>
            <!-- Nav tabs -->
            <!-- Tab panels -->
            <div class="tab-content p-0">
                <!--Panel 1-->
                <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
                    <div class="container-fluid px-4">
                        <div class="row">
                            <div class="col-sm-6 p-1 wow fadeIn">
                                <div class="view zoom overlay">
                                    <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-1.jpg">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-1.jpg" class="img-fluid" alt="NVP Home with two large pillars and a lasting impression">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6 p-1 wow fadeIn">
                                <div class="view zoom">
                                    <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-2.jpg">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-2.jpg" class="img-fluid " alt="Bedroom with plenty of windows and open design">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 p-1 wow fadeInRight">
                                <div class="view zoom">
                                    <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-3.jpg">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-3.jpg" class="img-fluid " alt="Home with open design">
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-sm-4 p-1 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="view zoom">
                                    <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-4.jpg">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-4.jpg" class="img-fluid " alt="NVP home with a large front yard">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 p-1 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="view zoom">
                                    <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-5.jpg">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-5.jpg" class="img-fluid" alt="Custom made a bathroom with standing shower and luxury tub">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row d-none d-md-flex">
                            <div class="col-sm-3 p-1 wow fadeInRight">
                                <div class="view zoom">
                                    <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-6.jpg">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-6.jpg" class="img-fluid " alt="NVP, Inc.">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-3 p-1 wow fadeInRight">
                                <div class="view zoom">
                                    <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-7.jpg">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-7.jpg" class="img-fluid " alt="NVP, Inc.">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-3 p-1 wow fadeInRight">
                                <div class="view zoom">
                                    <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-8.jpg">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-8.jpg" class="img-fluid " alt="NVP, Inc.">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-3 p-1 wow fadeInRight">
                                <div class="view zoom">
                                    <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-9.jpg">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-9.jpg" class="img-fluid " alt="NVP, Inc.">
                                    </a>
                                </div>
                            </div>
                            <?php for ($i=10; $i < 77; $i++) { ?>
                                <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-<?php echo $i; ?>.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-<?php echo $i; ?>.jpg" class="img-fluid d-none" alt="NVP, Inc."></a>    
                            <?php } ?>                         
                        </div>
                        <div class="d-flex justify-content-center galleryBtnWrap">
                            <div>
                                <a data-fancybox-trigger="gallery" class="btn custom-btn">SEE ALL</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.Panel 1-->
                <!--Panel 2-->
                <div class="tab-pane fade" id="panel2" role="tabpanel">
                    <div class="container-fluid px-4">
                        <div class="row">
                            <?php
                            $tours = getJsonData(get_template_directory_uri().'/database-json/videoTour.json');
                            foreach ($tours['videos'] as $tour) {
                            ?>
                            <div class="col-sm-6 col-md-4 col-lg-3 p-1 wow fadeIn">
                                <a href="<?php echo $tour['url']; ?>" <?php echo ($tour['url_type'] == "external") ? " target='_blank'" : "data-fancybox='videoTour".$tour['id']."'"; ?>>
                                    <div class="view zoom">
                                        <img src="<?php echo get_template_directory_uri().'/images/video/'.$tour['image']; ?>" class="img-fluid w-100" alt="NVP Inc. Model Home Video">
                                        <div class="video-play-btn">
                                            <img src="<?php echo get_template_directory_uri().'/images/play-button.svg'; ?>" alt="Play Button">
                                            <p class="text-white font-weight-bold mt-3 mb-0"><?php echo $tour['name']; ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php } ?>
                            
                        </div>
                    </div>
                </div>
                <!--/.Panel 2-->
            </div>
            <!-- Tab panels -->
        </section>

        <section>
            <?php include get_template_directory() . '/template-parts/page-contact-form.php';  ?>
        </section>
        <!-- #Additional Content -->

        <!-- Widget Area After -->
        <?php
		if ( is_active_sidebar( 'gka_theme_widget_after' ) ) {
			dynamic_sidebar( 'gka_theme_widget_after' ); 
		}
		?>
        <!-- #Widget Area After -->

    </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();