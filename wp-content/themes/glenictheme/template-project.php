<?php 
//Template Name: Project Page
$options = get_option('glenic_theme');
get_header();
?>
  <!-- Start Slider Area -->
  <section class="bennar-slider-area all-back-img">
    <div class="owl-area" >
      <div class="container-flued">
        <div class="owl-carousel owl-theme" id="main-images-file5">
          <div class="bg-details">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-image/BG.png" alt="images">
            <div class="slider-details text-center">
              <h1>Project Page</h1>
              <a href="index.html">Home &nbsp;<i class="fa-solid fa-angle-left"></i></a>
              <a href="#"> &nbsp; Project Page</a>
            </div>
          </div>
          <div class="bg-details">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-image/bk.png" alt="imagesmhyuuy">
              <div class="slider-details text-center">
                <h1>Project Page</h1>
                <a href="index.html">Home &nbsp;<i class="fa-solid fa-angle-left"></i></a>
                <a href="#"> &nbsp; Project Page</a>
              </div>
          </div>
          <div class="bg-details">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-image/slider4.png" alt="imagesyhjfj">
              <div class="slider-details text-center">
                <h1>Project Page</h1>
                <a href="index.html">Home &nbsp;<i class="fa-solid fa-angle-left"></i></a>
                <a href="#"> &nbsp; Project Page</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Slider Area -->
  <!-- Start Case Stady Area -->
  <section class="case-stady-area section-padding">
    <div class="container pt-4 pb-3">
      <div class="row">
        <div class="col-lg-5 col-md-12">
          <div class="case-stady-area-heda">
            <h4><?php echo $options['project_sub_title']; ?></h4>
            <h2><?php echo $options['project_title']; ?></h2>
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
<?php get_footer(); ?>