<?php 
$options = get_option('glenic_theme');
?>
<!-- Start Footer Area -->
<footer>
    <div class="footer-area">
      <div class="container">
          <div class="footer-top section-padding">
            <div class="row">
              <div class="col-md-7">
                <div class="footer-top-left">
                  <h4><?php echo $options['sub_title']; ?></h4>
                  <h1><?php echo $options['footer_title']; ?></h1>
                </div>
              </div>
              <div class="col-md-5">
                <div class="foooter-top-right">
                  <input type="text" placeholder="Enter Your Newsletter...">
                  <div class="footer-area-input-icon">
                    <a href=""><i class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer-bottom section-padding">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 col-md-4">
                  <div class="footer-bottom-item1">
                    <a href="http://localhost/glenictheme"><img src="<?php echo $options['footer_logo']['url']; ?>" alt="footer-logo"></a>
                    <p><?php echo $options['footer_description']; ?></p>
                    <div class="footer-botom-social-icon d-flex align-items-center">
                      <?php 
                      $footer_media = $options['footer_media'];
                      foreach($footer_media as $footer_medias) :
                      ?>
                        <a href="<?php echo $footer_medias['footer_social_icon_url']; ?>"><i class="<?php echo $footer_medias['footer_social_icon']; ?>"></i></a>
                      <?php endforeach; ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8 col-md-6">
                  <div class="row">
                    <div class="col-lg-4 col-md-6">
                      <div class="footer-bottom-item1">
                        <?php dynamic_sidebar('footer-sidebar-1'); ?>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                      <div class="footer-bottom-item1 mb-5">
                      <?php dynamic_sidebar('footer-sidebar-2'); ?>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                      <div class="footer-bottom-item1">
                        <h5><?php echo $options['contact_info']; ?></h5>
                        <?php 
                        $footer_location = $options['contact_info_repeater'];
                        foreach($footer_location as $footer_locations) :
                        ?>
                        <div class="location-details padding-top d-flex mt-3 mb-3">
                          <i class="<?php echo $footer_locations['info_icon']; ?>"></i> &nbsp; &nbsp;
                          <div class="location-details-text padding-top">
                            <?php 
                            foreach($footer_locations['info_repeater_text'] as $footer_contact) :
                            ?>
                            <span><?php echo $footer_contact['info_title']; ?></span><br>
                            <?php endforeach; ?>
                          </div>
                        </div>
                        <?php endforeach; ?>
                      </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
    <div class="copyright-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright-item">
              <p><a href="">Akash</a> © Copyright-2023 All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
<!-- End Footer Area -->
  
  <?php wp_footer(); ?>
</body>
</html>