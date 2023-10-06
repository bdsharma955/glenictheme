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
              <h1>Blog Page</h1>
              <a href="index.html">Home &nbsp;<i class="fa-solid fa-angle-left"></i></a>
              <a href="#"> &nbsp; Blog Page</a>
            </div>
          </div>
          <div class="bg-details">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-image/bk.png" alt="imagesmhyuuy">
              <div class="slider-details text-center">
                <h1>Blog Page</h1>
                <a href="index.html">Home &nbsp;<i class="fa-solid fa-angle-left"></i></a>
                <a href="#"> &nbsp; blog Page</a>
              </div>
          </div>
          <div class="bg-details">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-image/slider4.png" alt="imagesyhjfj">
              <div class="slider-details text-center">
                <h1>Blog Page</h1>
                <a href="index.html">Home &nbsp;<i class="fa-solid fa-angle-left"></i></a>
                <a href="#"> &nbsp; Blog Page</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Slider Area -->
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
    </div>
  </section>
  <!-- End Blog Area -->
<?php get_footer(); ?>