<?php 
$options = get_option('glenic_theme');
get_header(); 
?>
   <!-- Start Slider Area -->
   <section class="bennar-slider-area">
    <div class="owl-area" >
      <div class="container-flued">
        <div class="owl-carousel owl-theme" id="main-images-file5">
          <div class="bg-details">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-image/BG.png" alt="images">
            <div class="slider-details text-center">
              <h1>Project Details</h1>
              <a href="index.html">Home &nbsp;<i class="fa-solid fa-angle-left"></i></a>
              <a href="#"> &nbsp; Project Details</a>
            </div>
          </div>
          <div class="bg-details">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-image/bk.png" alt="imagesmhyuuy">
              <div class="slider-details text-center">
                <h1>Project Details</h1>
                <a href="index.html">Home &nbsp;<i class="fa-solid fa-angle-left"></i></a>
                <a href="#"> &nbsp; Project Details</a>
              </div>
          </div>
          <div class="bg-details">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-image/slider4.png" alt="imagesyhjfj">
              <div class="slider-details text-center">
                <h1>Project Details</h1>
                <a href="index.html">Home &nbsp;<i class="fa-solid fa-angle-left"></i></a>
                <a href="#"> &nbsp; Project Details</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Slider Area -->

  <!-- Start-Product-Details-area  -->
  <section class="service-details-area">
    <div class="container">
        <?php while(have_posts()) : the_post(); ?>
      <div class="row">
        <div class="col-lg-8">
          <article class="left-service-details mb-4">
            <img class="mb-5" src="<?php the_field('project_image'); ?>" alt="">
            <h4 class="mb-4 text-dark"><?php the_field('project_title'); ?></h4>
            <?php the_field('p_full_description'); ?>

            <div class="row mb-3">
              <?php 
              if(have_rows('p_list_repeater')) : the_row();
              while(have_rows('p_list_repeater')) : the_row();
              ?>
                <div class="col-md-6 our-pro mb-3">
                    <span><img src="<?php the_sub_field('p_list_iamge'); ?>" alt=""></span><?php the_sub_field('p_list_name'); ?>
                    <p><?php the_sub_field('p_list_descriptiob'); ?></p>
                </div>
                <?php endwhile; endif; ?>
            </div>

            <h5><?php echo $options['eye_testing_title']; ?></h5>
            <p class="mb-4"><?php echo $options['eye_content']; ?>.</p>

            <div id="slider-service">
              <div class="slider-duebble">
                 <div class="eye-boxs">
                    <div class="eye-img">
                      <img src="<?php echo $options['eye_testi_image']['url']; ?>" alt="">
                    </div>
                    <div class="list-eye">
                      <h5>Eye Testing History.</h5>
                      <ul>
                        <?php 
                       $eye_list = $options['eye_repeater'];
                       foreach($eye_list as $eye_lists) :
                        ?>
                        <li><i class="fa-solid fa-check"></i> &nbsp;<?php echo  $eye_lists['eye_list']; ?></li>
                        <?php endforeach; ?>
                      </ul>
                    </div>
                  </div>
    
                  <div class="main-slider-services mb-5">
                    <div class="left-prev-arrow">
                      <span><i class="fa-solid fa-arrow-left"></i></span>
                      <div class="prev-text">
                        <p class="mb-1">Prev Services</p>
                        <h6>Child Emergency</h6>
                      </div>
                    </div>
                    <div class="right-next-arrow">
                      <div class="next-text">
                        <p class="mb-1">Next Portfolio</p>
                        <h6>Surgery Center</h6>
                      </div>
                      <span><i class="fa-solid fa-arrow-right"></i></span>
                    </div>
                  </div>
                </div>
            </div>
            <div class="related-post-heading text-center">
                <h6><?php echo $options['related_post_title']; ?></h6>
                <h2><?php echo $options['related_post_heading']; ?></h2>
            </div>
            <div class="row">
              <?php 
              $blog_post = new WP_Query(array(
                'post_type' => 'project',
                'order' => 'ASC',
                'posts_per_page' => 2,
              ));
              while($blog_post->have_posts()) : $blog_post->the_post();
              ?>
                <div class="col-md-6">
                    <div class="post-img-project mt-4">
                        <a href="<?php the_permalink(); ?>">
                        <img src="<?php the_field('project_image'); ?>" alt="">
                        </a>
                        <div class="post-text-project">
                            <span><?php the_field('project_sub_title'); ?>
                            </span>
                            <a href="<?php the_permalink(); ?>"><h5><?php the_field('project_title'); ?></h5></a>
                            <p><?php the_field('project_short_description'); ?></p>
                        </div>
                    </div>
                </div>
                <?php endwhile ?>
            </div>
          </article>
        </div>
        <div class="col-lg-4">
          <div class="search-box-service mb-4">
            <h6 class="mb-3">Search Here</h6>
            <div class="search-input">
              <input type="text" placeholder="Enter Your Keyword...">
              <span><i class="fa-solid fa-search"></i></span>
            </div>
          </div>

          <div class="search-box-service mb-4">
            <h6 class="mb-3"><?php echo $options['service_title'] ?></h6>
            <div class="search-serive-list">
              <ul class="d-block">
                <?php 
                $service_list = $options['list_repeater'];
                foreach($service_list as $service_lists) :
                ?>
                <li><i class="fa-solid fa-caret-right"></i>&nbsp; <?php echo $service_lists['list_name']; ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
          <div class="search-box-service mb-4">
            <h6 class="mb-4"><?php echo $options['social_title'] ?></h6>
            <div class="help-social-icons">
              <ul>
              <?php 
                $service_media = $options['icon_repeater'];
                foreach($service_media as $service_medias) :
                ?>
                <li><a href="<?php echo $service_medias['icon_name_url']; ?>"><i class="<?php echo $service_medias['icon_name']; ?>"></i></a></li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
          <div class="make-appoinment search-box-service">
            <h6 class="mb-4 text-light">Make an appointment</h6>
            <select name="deparment" id="deparment">
              <option value="Select Department">Select Department</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
            <br>
            <select name="deparment" id="deparment">
              <option value="Select Department">Select Doctor</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
            <input type="phone" name="phne-number" id="" placeholder="+66 555 666 888 22">
            <textarea name="message" id="" placeholder="Write Your Message"></textarea>
            <div class="appoitment-btn">
              <button class="btn-appointment">Get Appointment &nbsp; <i class="fa-solid fa-arrow-right"></i></button> 
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </section>
  <!-- End-Product-Details-area  -->
<?php get_footer(); ?>