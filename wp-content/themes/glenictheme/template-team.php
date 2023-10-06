<?php 
//Template Name: Team Page
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
              <h1>Team Page</h1>
              <a href="index.html">Home &nbsp;<i class="fa-solid fa-angle-left"></i></a>
              <a href="#"> &nbsp; Team Page</a>
            </div>
          </div>
          <div class="bg-details">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-image/bk.png" alt="imagesmhyuuy">
              <div class="slider-details text-center">
                <h1>Team Page</h1>
                <a href="index.html">Home &nbsp;<i class="fa-solid fa-angle-left"></i></a>
                <a href="#"> &nbsp; Team Page</a>
              </div>
          </div>
          <div class="bg-details">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-image/slider4.png" alt="imagesyhjfj">
              <div class="slider-details text-center">
                <h1>Team Page</h1>
                <a href="index.html">Home &nbsp;<i class="fa-solid fa-angle-left"></i></a>
                <a href="#"> &nbsp; Team Page</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Slider Area -->
  <!-- Start Team Member Area -->
  <section class="team-member-area pt-5">
    <div class="container pt-4 pb-4">
      <div class="row">
        <div class="col-md-12 mb-4">
          <div class="team-member-area-top text-center mb-5">
            <h4><?php echo $options['team_title']; ?></h4>
            <h2><?php echo $options['team_heading']; ?></h2>
          </div>
        </div>
        <?php 
        $team_post = new WP_Query(array(
            'post_type' => 'team',
            'order' => 'ASC',
            'posts_per_page' => 3,
        ));
        while($team_post->have_posts()) : $team_post->the_post();
        ?>
        <div class="col-lg-4 col-md-6">
          <div class="team-member-person pb-3">
            <a href="<?php the_permalink(); ?>">
                <img src="<?php the_field('team_image'); ?>" alt="doctor">
                <h6 class="mt-4 ps-4"><?php the_field('team_title'); ?></h6>
            </a>
            <p class="mt-2 ps-4"><?php the_field('team_designation'); ?></p>
            <div class="team-member-person-icon mt-4 ps-4">
              <?php 
              if(have_rows('team_media')) : the_row();
              while(have_rows('team_media')) : the_row();
              ?>
              <a class="me-5" href="<?php the_sub_field('media_url'); ?>"><i class="<?php the_sub_field('media_icon'); ?>"></i></a>
              <?php endwhile; endif; ?>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
  <!-- End Team Member Area -->
<?php get_footer(); ?>