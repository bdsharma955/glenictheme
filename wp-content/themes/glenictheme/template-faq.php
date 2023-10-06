<?php 
//Template Name: FAQ Page
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
              <h1>FAQ Page</h1>
              <a href="index.html">Home &nbsp;<i class="fa-solid fa-angle-left"></i></a>
              <a href="#"> &nbsp; FAQ Page</a>
            </div>
          </div>
          <div class="bg-details">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-image/bk.png" alt="imagesmhyuuy">
              <div class="slider-details text-center">
                <h1>FAQ Page</h1>
                <a href="index.html">Home &nbsp;<i class="fa-solid fa-angle-left"></i></a>
                <a href="#"> &nbsp; FAQ Page</a>
              </div>
          </div>
          <div class="bg-details">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-image/slider4.png" alt="imagesyhjfj">
              <div class="slider-details text-center">
                <h1>FAQ Page</h1>
                <a href="index.html">Home &nbsp;<i class="fa-solid fa-angle-left"></i></a>
                <a href="#"> &nbsp; FAQ Page</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Slider Area -->
  <!-- Start Faq And Ans Area -->
  <section class="faq-ans-area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="faq-area-left p-2">
            <h4><?php the_field('faq_sub_title'); ?></h4>
            <h2 class="mb-4"><?php the_field('faq_title'); ?></h2>
            <img src="<?php the_field('faq_image'); ?>" alt="ans">
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="faq-area-right">
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <?php 
                $i = 1;
                if(have_rows('faq_repeater')) : the_row();
                while(have_rows('faq_repeater')) : the_row();
                ?>
              <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-heading<?php echo $i; ?>">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                    <?php the_sub_field('faq_question'); ?>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapse<?php echo $i; ?>" class="accordion-collapse collapse " aria-labelledby="panelsStayOpen-headingOne">
                  <div class="accordion-body">
                    <p><?php the_sub_field('faq_answer'); ?></p>
                  </div>
                </div>
              </div>
                <?php $i++; endwhile; endif; ?>   
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Faq And Ans Area -->
  <!-- Start Contact Area -->
  <section class="contact-area">
    <div class="contact-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d43279892.60250466!2d22.09350834043472!3d48.54099261332041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a838ff432792c9%3A0x15eefe1dc3e6c8e9!2sAristotle%20University%20of%20Thessaloniki!5e0!3m2!1sen!2sbd!4v1689953222776!5m2!1sen!2sbd" width="100%" height="760px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="contact-form-main-area">
            <div class="contact-area-text">
              <h4>contact Us</h4>
              <h2>Have Questions? Get In Touch</h2>
            </div>
            <div class="contact-area-form">
              <form action="" method="POST">
                <div class="mb-3 row">
                  <div class="col-lg-6 col-md-12 mb-2">
                    <label for="inputName" class=" col-form-label">Your Name</label>
                    <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Write your name">
                  </div>
                  <div class="col-lg-6 col-md-12 mb-2">
                    <label for="inputName" class=" col-form-label">Phone Number</label>
                    <input type="text" class="form-control" name="inputName" id="inputName" placeholder="+66 555 666 888 22">
                  </div>
                  <div class="col-12">
                    <div class="mb-3">
                      <label for="inputName" class=" col-form-label">Message</label><br>
                      <textarea class="form-control" name="" id="" rows="2" placeholder="Write Your Message"></textarea>
                    </div>
                  </div>
                  <div class="col-12">
                    <p>* Call Us 24/7 At 869-5414 Or Fill Out The Form Below To Receive A Free And Confidential Initial Consultation</p>
                  </div>
                  <div class="col-12 extra-inpute">
                    <button type="submit" class="btn1 bestaperstment">GET APPOINTMENT &nbsp; &nbsp; <i class="fa-solid fa-arrow-right"></i></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Area -->
<?php get_footer(); ?>