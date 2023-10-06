<?php get_header(); ?>
  <!-- Start Slider Area -->
  <section class="bennar-slider-area">
    <div class="owl-area" >
      <div class="container-flued">
        <div class="owl-carousel owl-theme" id="main-images-file5">
          <div class="bg-details">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-image/BG.png" alt="images">
            <div class="slider-details text-center">
              <h1>Team Details</h1>
              <a href="index.html">Home &nbsp;<i class="fa-solid fa-angle-left"></i></a>
              <a href="#"> &nbsp; Team Details</a>
            </div>
          </div>
          <div class="bg-details">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-image/bk.png" alt="imagesmhyuuy">
              <div class="slider-details text-center">
                <h1>Team Details</h1>
                <a href="index.html">Home &nbsp;<i class="fa-solid fa-angle-left"></i></a>
                <a href="#"> &nbsp; Team Details</a>
              </div>
          </div>
          <div class="bg-details">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-image/slider4.png" alt="imagesyhjfj">
              <div class="slider-details text-center">
                <h1>Team Details</h1>
                <a href="index.html">Home &nbsp;<i class="fa-solid fa-angle-left"></i></a>
                <a href="#"> &nbsp; Team Details</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Slider Area -->
  
  <!-- Start Team Details About Area  -->

  <section class="team-details-area">
  <div class="container">
    <?php while(have_posts()) : the_post(); ?>
    <div class="row">
      <div class="col-lg-4 col-md-12 mb-5">
        <aside class="left-details-area">
          <img src="<?php the_field('team_image'); ?>" alt="">
          <h3><?php the_field('team_title'); ?></h3>
          <small><?php the_field('team_designation'); ?></small>
          <ul class="details-social-icon">
              <?php 
              if(have_rows('team_media')) : the_row();
              while(have_rows('team_media')) : the_row();
              ?>
            <li><a href="<?php the_sub_field('media_url'); ?>"><i class="<?php the_sub_field('media_icon'); ?>"></i></a></li>
            <?php endwhile; endif; ?>
          </ul>
          <h5 class="h5-margin-bottom"><?php the_field('specialist'); ?></h5>
          <p class="para-half"><?php the_field('specialist_content'); ?></p>
          <h5>Time</h5>
          <p>Time: <?php the_field('at_start'); ?> To <?php the_field('at_end'); ?> (<?php the_field('off_day'); ?>)</p>
          <div class="phne-email pb-2">
            <span class="details-phne"><i class="<?php the_field('cont_icon'); ?>"></i></span>
            <?php 
            if(have_rows('member_contact')) : the_row();
              while(have_rows('member_contact')) : the_row();
            ?>
            <span>
              <p class="phne-bottom"><?php the_sub_field('cont_name'); ?></p>
              <h6 class="hello"><a href="tal:"><?php the_sub_field('cont_contact'); ?></a></h6>
            </span>
              <?php endwhile; endif; ?>
          </div>
          <div class="phne-email">
            <span class="details-phne"><i class="fa-solid fa-envelope"></i></span>
            <span>
              <p class="phne-bottom">Quick Your Email!</p>
              <h6 class="hello"><a href="mailto:">hello@gmail.com</a></h6>
            </span>
          </div>
        </aside>
      </div>

      <div class="col-lg-8 col-md-12">
        <aside class="right-details-area">
          <div class="main-details">
            <?php the_field('team_full_details'); ?>
            <h4><?php the_field('areas_of_skill'); ?></h4>
            <p><?php the_field('skills_details'); ?></p>
            
            <h6 class="bar-heading h5-margin-bottom"><?php //the_sub_field('case_name'); ?></h6>
            <?php 
            $i = 1;
            if(have_rows('barcode')) : the_row();
            while(have_rows('barcode')) : the_row();
            ?>
            <div id="bar<?php echo $i; ?>" class="barfiller mb-4">
              <div class="tipWrap">
                <span class="tip"></span>
              </div>
              <span class="fill" data-percentage="<?php the_sub_field('percent'); ?>"></span>
            </div>
            <?php $i++; endwhile; endif; ?>
            <h6 class="bar-heading h5-margin-bottom mb-2">Success Cases</h6>
            <div id="bar2" class="barfiller mb-4">
              <div class="tipWrap">
                <span class="tip"></span>
              </div>
              <span class="fill" data-percentage="50"></span>
            </div>
            <h6 class="bar-heading h5-margin-bottom">Satisfaction Clients</h6>
            <div id="bar3" class="barfiller mb-4">
              <div class="tipWrap">
                <span class="tip"></span>
              </div>
              <span class="fill" data-percentage="90"></span>
            </div>
          </div>
        </aside>
      </div>
    </div>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>
  </section>

  <!-- End Team Details About Area  -->

  <!-- Start Best Provide Area -->
  <section class="best-provide-area pt-5">
    <div class="container pt-4">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="best-provide-area-left">
            <h4>Need a Doctor for Check-up?</h4>
            <h2>We Provide The Best Services For You.</h2>
            <div class="best-provide-area-left-img mt-4">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-image/tetmant.png" alt="Doctor-img">
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="row">
            <form action="" method="POST">
              <div class="mb-3 row">
                <div class="col-lg-6 col-md-6 mb-2">
                  <label for="inputName" class=" col-form-label">Department Name</label>
                  <select class="form-control">
                    <option selected>Select one</option>
                    <option value="">New Delhi</option>
                    <option value="">Istanbul</option>
                    <option value="">Jakarta</option>
                  </select>
                </div>
                <div class="col-lg-6 col-md-6 mb-2">
                  <label for="inputName" class=" col-form-label">Doctor Name</label>
                  <select class="form-control">
                    <option selected>Select one</option>
                    <option value="">New Delhi</option>
                    <option value="">Istanbul</option>
                    <option value="">Jakarta</option>
                  </select>
                </div>
                <div class="col-lg-6 col-md-6 mb-2">
                  <label for="inputName" class=" col-form-label">Your Name</label>
                  <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Write your name">
                </div>
                <div class="col-lg-6 col-md-6 mb-2">
                  <label for="inputName" class=" col-form-label">Phone Number</label>
                  <input type="text" class="form-control" name="inputName" id="inputName" placeholder="+66 555 666 888 22">
                </div>
                <div class="col-12">
                  <div class="mb-3">
                    <label for="inputName" class=" col-form-label">Message</label><br>
                    <textarea class="form-control" name="" id="" rows="3" placeholder="Write Your Message"></textarea>
                  </div>
                </div>
                <div class="col-lg-8 col-md-8 extra-inpute">
                  <button type="submit" class="btn1 bestaperstment">GET APPOINTMENT &nbsp; &nbsp; <i class="fa-solid fa-arrow-right"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Best Provide Area -->

<?php get_footer(); ?>