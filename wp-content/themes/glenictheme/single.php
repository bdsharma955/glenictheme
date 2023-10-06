<!doctype html>
<?php 
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
              <h1>Blog Details</h1>
              <a href="index.html">Home &nbsp;<i class="fa-solid fa-angle-left"></i></a>
              <a href="#"> &nbsp; Blog Details</a>
            </div>
          </div>
          <div class="bg-details">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-image/bk.png" alt="imagesmhyuuy">
              <div class="slider-details text-center">
                <h1>Blog Details</h1>
                <a href="index.html">Home &nbsp;<i class="fa-solid fa-angle-left"></i></a>
                <a href="#"> &nbsp; Blog Details</a>
              </div>
          </div>
          <div class="bg-details">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-image/slider4.png" alt="imagesyhjfj">
              <div class="slider-details text-center">
                <h1>Blog Details</h1>
                <a href="index.html">Home &nbsp;<i class="fa-solid fa-angle-left"></i></a>
                <a href="#"> &nbsp; Blog Details</a>
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
      <div class="row">
        <div class="col-lg-8">
          <article class="left-service-details mb-4">
            <?php the_post_thumbnail() ?>
            <div class="blog-team-details mb-3">
                <div class="blog-team-area mt-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimoial/client5.png" alt="">by &nbsp; <a href="#" class="d-inline mb-0"><?php the_author(); ?> </a>
                    <div class="date"><?php the_time('F j, Y'); ?></div>
                </div>
                <div class="team-social-icon">
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-link"></i></a></li>
                    </ul>
                </div>
            </div>
            <h3 class="mb-3 text-dark">Migration Pellentesque consequat in augue sedus sodales Top Standard size of business.</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut venenatis sagittis tortor, in convallis justo sagittis et. Nunc placerat risus sem, vitae dictum libero laoreet sit amet. Suspendisse semper leo nec justo aliquam venenatis. Aliquam vitae lorem sed orci vulputate porta. Vestibulum ut elit eget arcu tincidunt sollicitudin quis sed augue. Aenean nibh nunc, elementum a dolor vel, vestibulum commodo dui. Donec id felis a ipsum molestie tincidunt. Nunc ullamcorper quam nunc, eget laoreet dui pharetra eget. Aenean viverra interdum condimentum. Cras mollis, arcu vel fermentum auctor.</p>
            <p class="mb-4">Phasellus ac consequat turpis, sit amet fermentum nulla. Donec dignissim augue nunc. Praesent bibendum erat ac lectus molestie lobortis. Curabitur ultrices justo ac leo facilisis tincidunt.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut venenatis sagittis tortor, in convallis justo sagittis et. Nunc placerat risus sem, vitae dictum libero laoreet sit amet. Suspendisse semper.</p>
            <blockquote class="blockquote1 mb-4"><strong>“</strong> Tempus massa ac arcu sollicitudin sollicitudin Vivamus neque urna, iaculis et orci id to your hospital Phasellus ac consequat turpis, sit amet fermentum nulla. Donec dignissim augue nunc.</blockquote>
            <p class="mb-5">Sed nec sapien eu nibh porta fringilla. Aenean in lectus id tellus tempus rutrum vitae a elit. Nulla sit amet interdum ligula. Duis bibendum porttitor tempus. Morbi nisi nisl, sagittis in enim at, tempus convallis magna. Nam malesuada risus non congue viverra. Nullam ultrices massa orci, in eleifend diam fringilla.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut venenatis sagittis tortor, in convallis justo sagittis et. Nunc placerat risus sem, vitae dictum libero laoreet sit amet. Suspendisse semper leo nec justo aliquam venenatis. </p>
            <div id="slider-service">
              <div class="slider-duebble">

                <ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">
                    <div class="tab-button">
                      <label class="me-4">Tag Here</label>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Creative</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Agency</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Business</button>
                      </li>
                    </div>
                    <div class="tab-social-icon">
                      <ul>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-behance"></i></a></li>
                      </ul>
                    </div>
                  </ul>
                  <div class="tab-content mb-5" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                      <div class="tab-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/appiontment/ans-faq.png" alt="">
                        <div class="tab-box-text">
                          <div class="tab-team-info">
                            <div class="tab-head">
                              <h6>Towkibu Rahman</h6>
                            </div>
                            <div class="self-details-icon">
                              <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-behance"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <p>Fusce condimentum enim vestibulum libero gravida, ut accumsan quam bibendum. Curabitur gravida faucibus est sit amet cursus. Duis accumsan vel arcu pretium viverra.</p>
                        </div>
                        
                      </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                      <div class="tab-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/appiontment/ans-faq.png" alt="">
                        <div class="tab-box-text">
                          <div class="tab-team-info">
                            <div class="tab-head">
                              <h6>Towkibu Rahman</h6>
                            </div>
                            <div class="self-details-icon">
                              <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-behance"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <p>Fusce condimentum enim vestibulum libero gravida, ut accumsan quam bibendum. Curabitur gravida faucibus est sit amet cursus. Duis accumsan vel arcu pretium viverra.</p>
                        </div>
                        
                      </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                      <div class="tab-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/appiontment/ans-faq.png" alt="">
                        <div class="tab-box-text">
                          <div class="tab-team-info">
                            <div class="tab-head">
                              <h6>Towkibu Rahman</h6>
                            </div>
                            <div class="self-details-icon">
                              <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-behance"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <p>Fusce condimentum enim vestibulum libero gravida, ut accumsan quam bibendum. Curabitur gravida faucibus est sit amet cursus. Duis accumsan vel arcu pretium viverra.</p>
                        </div>
                      </div>
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
                <h6>Related Blogs</h6>
                <h2>Related Blogs</h2>
            </div>

            <div class="row">
               <?php 
                $blog_post = new WP_Query(array(
                    'post_type' => 'post',
                    'order' => 'ASC',
                    'posts_per_page' => 2,
                ));
                while($blog_post->have_posts()) : $blog_post->the_post();
                ?>
                <div class="col-md-6">
                    <div class="post-img-project mt-4">
                        <?php the_post_thumbnail(); ?>
                        <div class="post-text-project text-post-padding">
                          <div class="post-author d-flex">
                            <span>by  <a href="#"><?php the_author(); ?></a></span>
                            <div class="date"><?php the_time('F d, Y'); ?></div>
                          </div>
                          <h5><?php the_title(); ?></h5>
                          <div class="read-btn">
                            <a href="<?php the_permalink(); ?>"><button>Read More &nbsp; <i class="fa-solid fa-arrow-right"></i></button></a>
                          </div>
                      </div>
                    </div>
                </div>
                <?php endwhile; ?>
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

          <div class="search-box-service screen-margin">
            <div class="latest-post mb-4">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/expert-image/expert3.png" alt="">
              <div class="latest-text">
                <span>by</span>&nbsp;<small>Creativemela</small>
                <p class="mb-0">Fusce tincidunt commodo sapien, quis portitor.</p>
              </div>
            </div>
            <div class="latest-post mb-4">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/expert-image/expert3.png" alt="">
              <div class="latest-text">
                <span>by</span>&nbsp;<small>Creativemela</small>
                <p class="mb-0">Fusce tincidunt commodo sapien, quis portitor.</p>
              </div>
            </div>
            <div class="latest-post mb-4">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/expert-image/expert3.png" alt="">
              <div class="latest-text">
                <span>by</span>&nbsp;<small>Creativemela</small>
                <p class="mb-0">Fusce tincidunt commodo sapien, quis portitor.</p>
              </div>
            </div>
            <div class="latest-post">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/expert-image/expert3.png" alt="">
              <div class="latest-text">
                <span>by</span>&nbsp;<small>Creativemela</small>
                <p class="mb-0">Fusce tincidunt commodo sapien, quis portitor.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- End-Product-Details-area  -->

<?php get_footer(); ?>