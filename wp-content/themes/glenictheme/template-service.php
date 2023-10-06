<?php 
//Template Name: Service Page
$options = get_option('glenic_theme');
get_header();
?>
  <!-- Start Slider Area -->
  <section class="bennar-slider-area">
    <div class="owl-area" >
      <div class="container-flued">
          <div class="owl-carousel owl-theme" id="main-images-file">
            <?php
            $i = 1; 
            $hero_slider = $options['hero_slider'];
            foreach($hero_slider as $hero_sliders) :
            ?>
              <div class="images image<?php echo $i; ?>">
                  <img src="<?php echo $hero_sliders['hero_slider_image']['url']; ?>" alt="images">
                  <div class="slider-descrp">
                    <h4><?php echo $hero_sliders['hero_sub_title']; ?></h4>
                    <h1><?php echo $hero_sliders['hero_slider_title']; ?></h1>
                    <p><?php echo $hero_sliders['hero_slider_content']; ?></p>
                    <a class="btn1" href="#">GET APPOINTMENT &nbsp;<i class="fa-solid fa-arrow-right"></i></a>
                  </div>
              </div>
              <?php $i++; endforeach; ?>
          </div>
      </div>
    </div>
  </section>
  <!-- End Slider Area -->
  <!--Start Best Teatment Area -->
  <section class="best-teatment-area section-padding">
      <div class="container pt-4">
        <div class="row">
          <div class="col-md-12">
            <div class="best-teatment-area-top text-center mb-4">
              <h4><?php echo $options['service_sub_title']; ?></h4>
              <h2><?php echo $options['services_title']; ?></h2>
            </div>
          </div>
          <div class="row">
            <div class="owl-area" >
              <div class="owl-carousel owl-theme" id="main-images-file4">
                <?php 
                $service_post = new WP_Query(array(
                    'post_type' => 'service',
                    'order' => 'ASc',
                    'posts_per_page' => 3,
                ));
                while($service_post->have_posts()) : $service_post->the_post();
                ?>
                <div class="service-item best-teatment-item">
                  <a href="<?php the_permalink(); ?>">
                    <img src="<?php the_field('service_image'); ?>" alt="images">
                    <h5><?php the_field('service_title'); ?></h5>
                  </a>
                  <p><?php the_field('service_short_description'); ?></p>
                </div>
                <?php endwhile; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!--End Best Teatment Area -->
  <!-- Start Best Povied Area2 -->
  <section class="best-provide-area2 section-padding">
    <div class="container pt-4">
      <div class="row">
        <div class="col-md-12 ">
          <div class="best-provide-area2-item text-center">
            <h5>Need a Doctor for Check-up?</h5>
            <h2>We Provide The Best Medical Services For You And Your Family</h2>
            <div class="best-provide-area2-icon">
              <a href=""><i class="fa-solid fa-circle-play"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Best Povied Area -->
  <!-- Start About Area -->
  <section class="about-area pt-5">
    <div class="about-area-top pt-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 ps-4">
            <div class="about-area-top-right">
              <h4>10 Years Experience</h4>
              <h1>We Are Best Treatment For Our Hospital.</h1>
              <p>Fusce eu eros nec felis venenatis fermentum sit amet eget turpis. Integer tempus massa ac arcu sollicitudin sollicitudin Vivamus neque urna, iaculis et orci id, euismod tempor arcu semper congue nulla amet finibus. </p>
            </div>
            <div class="about-services d-flex justify-content-between align-items-center">
              <div class="about-mision about-modern">
                <div class="about-mision-top d-flex align-items-center">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-images/about-right3.png" alt="right-image">
                  <div class="second-about-mision-top-text">
                    <h6 class="ms-2">Modern Approach</h6>
                    <p class="ms-2">Vivamus neque urna, aculs.</p>
                  </div>
                </div>
              </div>
              <div class="about-mision about-modern">
                <div class="about-mision-top d-flex align-items-center">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-images/about-right4.png" alt="right-image">
                  <div class="second-about-mision-top-text">
                    <h6 class="ms-2">Progressive Clinic</h6>
                    <p class="ms-2">Vivamus neque urna, aculs.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="about-button">
                <p>Sit amet eget turpis. Integer tempus massa ac arcu sollicitudin sollicitudin Vivamus neque urna, iaculis et orci id, euismod tempor arcu.</p>
                <p class="about-extra-p">"Tempus massa ac arcu sollicitudin sollicitudin Vivamus neque urna, iaculis et orci id to your hospital".</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="about-area-top-left">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-images/about-left3.png" alt="left-image">
            </div>
          </div>
        </div>
        <div class="row mb-3 text-center">
          <div class="col-lg-2 col-md-3 col-sm-4">
            <div class="envanta-item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/truasted-image/envata.png" alt="envanta-item">
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4">
            <div class="envanta-item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/truasted-image/envata.png" alt="envanta-item">
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4">
            <div class="envanta-item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/truasted-image/envata.png" alt="envanta-item">
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4">
            <div class="envanta-item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/truasted-image/envata.png" alt="envanta-item">
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4">
            <div class="envanta-item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/truasted-image/envata.png" alt="envanta-item">
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4">
            <div class="envanta-item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/truasted-image/envata.png" alt="envanta-item">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About Area -->
  <!-- Start Team Member Area -->
  <section class="team-member-area pt-5">
    <div class="container pt-4 pb-4">
      <div class="row">
        <div class="col-md-12 mb-4">
          <div class="team-member-area-top text-center mb-5">
            <h4>Our Team Member</h4>
            <h2>Meet Our Expert Doctors</h2>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="team-member-person pb-3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/expert-image/expert3.png" alt="doctor">
            <h6 class="mt-4 ps-4">Donald L. Juarez</h6>
            <p class="mt-2 ps-4">Medicine</p>
            <div class="team-member-person-icon mt-4 ps-4">
              <a class="me-5" href=""><i class="fa-brands fa-facebook-f"></i></a>
              <a class="me-5" href=""><i class="fa-brands fa-instagram"></i></a>
              <a class="me-5" href=""><i class="fa-brands fa-dribbble"></i></a>
              <a href=""><i class="fa-brands fa-behance"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="team-member-person pb-3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/expert-image/expert2.png" alt="doctor">
            <h6 class="mt-4 ps-4">Donald L. Juarez</h6>
            <p class="mt-2 ps-4">Medicine</p>
            <div class="team-member-person-icon mt-4 ps-4">
              <a class="me-5" href=""><i class="fa-brands fa-facebook-f"></i></a>
              <a class="me-5" href=""><i class="fa-brands fa-instagram"></i></a>
              <a class="me-5" href=""><i class="fa-brands fa-dribbble"></i></a>
              <a href=""><i class="fa-brands fa-behance"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="team-member-person pb-3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/expert-image/expert1.png" alt="doctor">
            <h6 class="mt-4 ps-4">Donald L. Juarez</h6>
            <p class="mt-2 ps-4">Medicine</p>
            <div class="team-member-person-icon mt-4 ps-4">
              <a class="me-5" href=""><i class="fa-brands fa-facebook-f"></i></a>
              <a class="me-5" href=""><i class="fa-brands fa-instagram"></i></a>
              <a class="me-5" href=""><i class="fa-brands fa-dribbble"></i></a>
              <a href=""><i class="fa-brands fa-behance"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Team Member Area -->
<?php get_footer(); ?>