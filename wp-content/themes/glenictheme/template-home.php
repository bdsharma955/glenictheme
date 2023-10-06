<?php 
//Template Name: Home Page
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
  <!-- Start Services Area -->
  <section class="services-area section-padding">
    <div class="container">
      <div class="row">
        <div class="owl-area" >
          <div class="owl-carousel owl-theme" id="main-images-file2">
            <?php 
            if(have_rows('s_item_repeater')) : the_row();
            while(have_rows('s_item_repeater')) : the_row();
            ?>
            <div class="service-item">
                <img src="<?php the_sub_field('s_item_image'); ?>" alt="images">
                <h5><?php the_sub_field('s_item_title'); ?></h5>
                <p><?php the_sub_field('s_item_description'); ?></p>
            </div>
              <?php endwhile; endif; ?>
        </div>
      </div>
      </div>
    </div>
  </section>
  <!-- End Services Area -->
  <!-- Start About Area -->
  <section class="about-area section-padding">
    <div class="about-area-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <div class="about-area-top-left">
              <img src="<?php echo $options['experience_image']['url']; ?>" alt="left-image">
            </div>
          </div>
          <div class="col-lg-6 col-md-12 ps-4">
            <div class="about-area-top-right">
              <h4><?php echo $options['experience_sub_title']; ?></h4>
              <h2><?php echo $options['experience_title']; ?></h2>
              <p><?php echo $options['experience_content']; ?></p>
            </div>
            <div class="about-services d-flex justify-content-between align-items-center">
              <?php 
              $experience = $options['experience_mission'];
              foreach($experience as $experiences) :
              ?>
              <div class="about-mision">
                <div class="about-mision-top d-flex align-items-center">
                  <img src="<?php echo $experiences['ex_mission_image']['url']; ?>" alt="right-image">
                  <h6 class="ms-2"><?php echo $experiences['ex_mission_title']; ?></h6>
                </div>
                <div class="about-mision-bottom">
                  <p><?php echo $experiences['ex_mission_decription']; ?></p>
                </div>
              </div>
                <?php endforeach; ?>
            </div>
            <div class="about-button d-flex">
              <div class="about-fast-btn mb-5">
                <a class="btn1 about-btn-xtra" href="<?php echo $options['about_more_url']; ?> "><?php echo $options['about_more']; ?> &nbsp;<i class="fa-solid fa-arrow-right"></i></a>
              </div>
              <div class="about-second-btn">
                <a class="btn1 about-btn-xtra" href="<?php echo $options['about_video_url']; ?> "><?php echo $options['about_video']; ?>  &nbsp;<i class="fa-solid fa-play"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="about-area-buttom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="about-bottom-item">
              <h1><?php echo $options['about_glenic']; ?> </h1>
              <p></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About Area -->
  <!-- Start Appiontment Area -->
  <section class="appiontment-area" style="background: url(<?php the_field('a_bg_image'); ?>) no-repeat;";>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="appiontment-items">
            <h6><?php the_field('a_sub_title'); ?></h6>
            <h2><?php the_field('a_title'); ?></h2>
            <a class="btn1 about-btn-xtra" href="">Get Appointment &nbsp;<i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Appiontment Area -->
  <!-- Start Case Stady Area -->
  <section class="case-stady-area section-padding">
    <div class="container pt-4 pb-3">
      <div class="row">
        <div class="col-lg-5 col-md-12">
          <div class="case-stady-area-heda">
            <h4>Recent Projects</h4>
            <h2>Our Case Stady</h2>
          </div>
        </div>
        <div class="col-lg-5 col-md-12">
          <div class="case-area-top mt-5">
            <ul>
                <li class="active" data-filter="all">All</li>
                <?php 
                $i = 1;
                $project_filter = get_terms(array(
                    'taxonomy' => 'project_filter',
                    'hide-empty' => false,

                ));
                foreach($project_filter as $project_filters) :
                ?>
                <li data-filter=".case-item-box<?php echo $i;  ?>"><?php echo $project_filters->name; ?></li>
                <?php $i++; endforeach; ?>
            </ul>
          </div>
        </div>
        <div class="case-items">
            <?php 
            $i = 1;
            $project_post = new WP_Query(array(
                'post_type' => 'project',
                'order' => 'ASC',
                'posts_per_page' => 3,
            ));
            while($project_post->have_posts()) : $project_post->the_post();
            ?>
            <div class="mix case-item case-item-box<?php echo $i;  ?>">
              <div class="case-thumbnail">
                <a href="<?php the_permalink(); ?>">
                  <img src="<?php the_field('project_image'); ?>" alt="mix-image">
                  <i class="fa-solid fa-arrow-right"></i>
                </a>
              </div>
              <div class="case-box-details ps-3 pe-3">
                <span><?php the_field('project_sub_title'); ?></span>
                <h4><?php the_field('project_title'); ?></h4>
                <p><?php the_field('project_short_description'); ?></p>
              </div>
            </div>
            <?php $i++; endwhile; ?>
        </div>
      </div>
    </div>
  </section>
  <!-- End Case Stady Area -->
  <!-- Start Help Line Area -->
  <section class="help-line-area section-padding">
    <div class="container mb-4 mt-4">
      <div class="row">
        <div class="col-lg-6 col-md-12 extra-gap-best">
          <div class="help-line-left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/appiontment/Img.png" alt="help-image">
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="help-line-right">
            <h4>Emergency Helpline</h4>
            <h2>Need Emergency Contact.</h2>
            <p>Fusce eu eros nec felis venenatis fermentum sit amet eget turpis. Integer tempus massa ac arcu sollicitudin sollicitudin Vivamus neque urna, iaculis et orci id, euismod tempor arcu semper congue nulla amet finibus.</p>
            <div class="help-line-list">
              <ul>
                <li>24/7 Contact Our Hospital.</li>
                <li class="fake-list1"></li>
                <li>24/7 Emergency Contact Our Phone Number.</li>
                <li class="fake-list2"></li>
              </ul>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-lg-6 col-md-6 mb-4">
              <div class="help-social-icon d-flex align-items-center">
                <div class="help-icon me-4">
                  <i class="fa-solid fa-phone-volume"></i>
                </div>
                <div class="help-text">
                  <h6>Phone Number</h6>
                  <a href="tel:52481224411">(1245-45678-) Call</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="help-social-icon d-flex align-items-center">
                <div class="help-icon me-4">
                  <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="help-text">
                  <h6>Quick Your Email!</h6>
                  <a href="mailto:help.info@gmail.com">help.info@gmail.com</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Help Line Area -->
  <!-- Start Testimonial Area -->
  <section class="testimonial-area section-padding">
    <div class="container pb-3">
     <div class="testimonial-owl-area">
        <h4>Our Testimonials</h4>
        <h2>What Clients Say?</h2>
        <div class="owl-carousel owl-theme pt-5" id="main-images-file3">
          <div class="images testimonial-image1">
            <div class="clients-details d-flex align-items-center mb-4">
                <div class="client-image-area me-3">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimoial/client4.png" alt="images">
                </div>
                <div class="client-descrp">
                  <h5>Jems Bonrnli Era</h5>
                  <h6>Glenic CEO</h6>
                </div>
            </div>
            <p>Nullam cursus lacus insr veneni atis estas. Fusceri libero lorem, vehicul ege sapien id, faucibus vulp. Donec ut urna.</p>
          </div>
          <div class="images testimonial-image1">
            <div class="clients-details d-flex align-items-center mb-4">
                <div class="client-image-area me-3">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimoial/client5.png" alt="images">
                </div>
                <div class="client-descrp">
                  <h5>Jems Bonrnli Era</h5>
                  <h6>Glenic CEO</h6>
                </div>
            </div>
            <p>Nullam cursus lacus insr veneni atis estas. Fusceri libero lorem, vehicul ege sapien id, faucibus vulp. Donec ut urna.</p>
          </div>
          <div class="images testimonial-image1">
            <div class="clients-details d-flex align-items-center mb-4">
                <div class="client-image-area me-3">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimoial/client6.png" alt="images">
                </div>
                <div class="client-descrp">
                  <h5>Jems Bonrnli Era</h5>
                  <h6>Glenic CEO</h6>
                </div>
            </div>
            <p>Nullam cursus lacus insr veneni atis estas. Fusceri libero lorem, vehicul ege sapien id, faucibus vulp. Donec ut urna.</p>
          </div>
        </div>
     </div>
    </div>
  </section>
  <!-- End Testimonial Area -->
  <!-- Start Trastuted Area -->
  <section class="trasted-area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 mb-5">
          <div class="trasted-area-item">
            <h4>Why Choose Us</h4>
            <h2>Tursted By 10 Lakh Customers Across 36k+ Visitors Hospotal.</h2>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="trasted-area-icon-text text-center p-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/truasted-image/truasted1.png" alt="image">
            <h6>Friendly Environment</h6>
            <p>Fusce convallis sem lorem ment Phasellus.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="trasted-area-icon-text text-center p-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/truasted-image/truasted2.png" alt="image">
            <h6>Exclusive Supports</h6>
            <p>Fusce convallis sem lorem ment Phasellus.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="trasted-area-icon-text text-center p-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/truasted-image/truasted3.png" alt="image">
            <h6>Modern Equipment</h6>
            <p>Fusce convallis sem lorem ment Phasellus.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="trasted-area-icon-text text-center p-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/truasted-image/truasted4.png" alt="image">
            <h6>Quality Treatment</h6>
            <p>Fusce convallis sem lorem ment Phasellus.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="trasted-area-icon-text text-center p-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/truasted-image/truasted5.png" alt="image">
            <h6>24/7 Emergency</h6>
            <p>Fusce convallis sem lorem ment Phasellus.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="trasted-area-icon-text text-center p-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/truasted-image/truasted6.png" alt="image">
            <h6>Medical & Health</h6>
            <p>Fusce convallis sem lorem ment Phasellus.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Trastuted Area -->
  <!-- Start Blog Area -->
  <section class="blog-area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="blog-top text-center mb-5">
            <h4>Our Blog</h4>
            <h2>Latest News & Blogs</h2>
          </div>
        </div>
        <?php 
        $blog_post = new WP_Query(array(
            'post_type' => 'post',
            'order' => 'ASC',
        ));
        while($blog_post->have_posts()) : $blog_post->the_post();
        ?>
        <div class="col-lg-4 col-md-12">
          <div class="blog-bottom">
            <div class="blog-items">
              <?php the_post_thumbnail(); ?>
              <div class="author-details d-flex align-items-center mb-2 mt-3">
                <small>by <a href=""><?php the_author(); ?></a> । </small> &nbsp
                <span><?php the_time('F j, Y'); ?></span>
              </div>
              <div class="blog-button">
                <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                <a class="btn1" href="<?php the_permalink(); ?>">READ MORE &nbsp; &nbsp;<i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
      <div class="row pt-5 text-center">
        <?php 
        $isponser = $options['isponser'];
        foreach($isponser as $isponsers) :
        ?>
        <div class="col-lg-2 col-md-3 col-sm-4">
          <div class="envanta-item">
            <img src="<?php echo $isponsers['isponser_image']['url']; ?>" alt="envanta-item">
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <!-- End Blog Area -->
<?php get_footer(); ?>