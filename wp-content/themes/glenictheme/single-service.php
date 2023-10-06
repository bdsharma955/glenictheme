<?php get_header(); ?>
  <!-- Start Slider Area -->
  <section class="bennar-slider-area">
    <div class="owl-area" >
      <div class="container-flued">
          <div class="owl-carousel owl-theme" id="main-images-file">
              <div class="images image1">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-image/Slider3.png" alt="images">
                  <div class="slider-descrp">
                    <h4>Hi, It’s our Glenic</h4>
                    <h1>Good Health Moves Us Forward.</h1>
                    <p>Pellentesque a arcu tincidunt, sollicitudin eros sed, venenatis justo. Proin sed tellus massa. Nullam bibendum sodales est in faucibus.</p>
                    <a class="btn1" href="#">GET APPOINTMENT &nbsp;<i class="fa-solid fa-arrow-right"></i></a>
                  </div>
              </div>
              <div class="images image2">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-image/Img.png" alt="imagesmhyuuy">
                  <div class="slider-descrp">
                    <h4>Hi, It’s our Glenic</h4>
                    <h1>Make Your Appointment With our Consultants.</h1>
                    <p>Pellentesque a arcu tincidunt, sollicitudin eros sed, venenatis justo. Proin sed tellus massa. Nullam bibendum sodales est in faucibus.</p>
                    <a class="btn1" href="#">GET APPOINTMENT &nbsp;<i class="fa-solid fa-arrow-right"></i></a>
                  </div>
              </div>
              <div class="images image3">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-image/slider4.png" alt="imagesyhjfj">
                  <div class="slider-descrp slider-extra">
                    <h4>Hi, It’s our Glenic</h4>
                    <h1>Best Doctor Service Health To Our Patients.</h1>
                    <p>Pellentesque a arcu tincidunt, sollicitudin eros sed, venenatis justo. Proin sed tellus massa. Nullam bibendum sodales est in faucibus.</p>
                    <a class="btn1" href="#">GET APPOINTMENT &nbsp; &nbsp;<i class="fa-solid fa-arrow-right"></i></a>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </section>
  <!-- End Slider Area -->

  <!-- Start-Service-Details-area  -->
  <section class="service-details-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <article class="left-service-details mb-5">
            <img class="mb-5" src="<?php echo get_template_directory_uri(); ?>/assets/images/mix-image/mix2.png" alt="">
            <div class="icom-icons mb-4">
              <img src="<?php the_field('service_image'); ?>" alt="">
              <span>
                <p class="mb-0">Tuberculosis, HIV</p>
                <h4 class="mb-0"><?php echo the_field('service_title') ?></h4>
              </span>
            </div>
            <p>Phasellus dignissim arcu sit amet augue mattis, eget rutrum ex finibus. Morbi blandit luctus nisi, id ornare sem blandit sed. In sed luctus dolor. Integer vitae pretium nunc. Aliquam rutrum lectus vel est pulvinar in scelerisque purus.Duis sed nisi massa. Duis nisi neque, interdum quis ullamcorper sit amet, dapibus eu lorem. Duis convallis orci dolor, nec auctor justo molestie sit amet.</p>
            <p class="mb-4">Morbi blandit luctus nisi, id ornare sem blandit sed. In sed luctus dolor. Integer vitae pretium nunc. Aliquam rutrum lectus vel est pulvinar in scelerisque purus.Duis sed nisi massa. Duis nisi neque, interdum quis ullamcorper sit amet, dapibus eu lorem. Duis convallis orci dolor.</p>
            <h5>Our Success JOURNEY We can Provide.</h5>
            <p class="mb-4">Phasellus dignissim arcu sit amet augue mattis, eget rutrum ex finibus. Morbi blandit luctus nisi, id ornare sem blandit sed. In sed luctus dolor. Integer vitae pretium nunc. Aliquam rutrum lectus vel est pulvinar in scelerisque purus.</p>
            <h5>Eye Testing History.</h5>
            <p class="mb-4">Phasellus ac consequat turpis, sit amet fermentum nulla. Donec dignissim augue nunc. Praesent bibendu erat ac lectus molestie lobortis. Curabitur ultrices justo ac leo facilisis tincidunt. Maecenas et dui eget nisl ornare scelerisque. Praesent finibus augue est, quis vehicula lectus vulputate cursus. Nam et scelerisque ex, vitae suscipit ipsum. Proin lacinia, dolor in dapibus dictum.</p>

            <div id="slider-service">
              <div class="eye-boxs">
                <div class="eye-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/expert-image/best2.png" alt="">
                </div>
                <div class="list-eye">
                  <h5>Eye Testing History.</h5>
                  <ul>
                    <li><i class="fa-solid fa-check"></i> &nbsp;Online Booking</li>
                    <li><i class="fa-solid fa-check"></i> &nbsp;Сovid 19 Protection</span>
                    <li><i class="fa-solid fa-check"></i> &nbsp;Own Laboratory</span>
                    <li><i class="fa-solid fa-check"></i> &nbsp;24/7 Service</span>
                  </ul>
                </div>
              </div>

              <div class="main-slider-services">
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
            <h6 class="mb-3">Service list</h6>
            <div class="search-serive-list">
              <ul class="d-block">
                <li><i class="fa-solid fa-caret-right"></i>&nbsp; UX strategy</li>
                <li><i class="fa-solid fa-caret-right"></i>&nbsp; Information architecture</li>
                <li><i class="fa-solid fa-caret-right"></i>&nbsp; Wireframing</li>
                <li><i class="fa-solid fa-caret-right"></i>&nbsp; UI Design</li>
                <li><i class="fa-solid fa-caret-right"></i>&nbsp; Figma Design</li>
                <li><i class="fa-solid fa-caret-right"></i>&nbsp; UX strategy</li>
              </ul>
            </div>
          </div>
          <div class="search-box-service mb-4">
            <h6 class="mb-4">Social Icon</h6>
            <div class="help-social-icons">
              <ul>
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
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
    </div>
  </section>
  <!-- End-Service-Details-area  -->

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