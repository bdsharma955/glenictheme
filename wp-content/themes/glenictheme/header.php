<?php 
$options = get_option('glenic_theme');
?>
<!doctype html>
<html lang="<?php language_attributes(); ?>">
<head>
  <!-- Meta tags -->
  <meta charset="<?php echo bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="<?php echo $options['fav_icon']['url']; ?>" type="image/x-icon">
  <?php wp_head(); ?>
</head>
<body>
  <!-- Start Header Area -->
  <header>
    <div class="header-area">
      <div class="container-fluid">
        <div class="row">
          <div class="header-area-top-rawp">
            <div class="container">
              <div class="header-area-top d-flex align-items-center justify-content-between">
                <div class="col-lg-8 col-md-8 col-ms-12">
                  <div class="header-top-left-contact">
                    <a href="tel:2552447741">Call Me <?php echo $options['contact_number']; ?></a> &nbsp; / &nbsp;
                    <a href="mailto:info.Glenic@gmail.com"><?php echo $options['contact_email']; ?></a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-ms-12">
                  <div class="row">
                    <div class="header-top-right-social-icons d-flex justify-content-between"></div>
                      <div class="col-lg-7 col-md-12">
                        <div class="header-top-right-social-icon">
                          <div class="header-social-icon me-3">
                            <?php 
                            $header_media = $options['social_media'];
                            foreach($header_media as $header_medias) :
                            ?>
                            <a href="<?php echo $header_medias['social_icon_url']; ?>"><i class="<?php echo $header_medias['social_icon']; ?>"></i></a>
                            <?php endforeach; ?>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-5 col-md-6 other-talk">
                        <div class="header-top-right-social-text">
                          <a href="<?php echo $options['talk_button_url']; ?>"><?php echo $options['talk_button']; ?> &nbsp;<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="header-area-bottom">
            <div class="container">
              <div class="row">
                <div class="header-area-bottom-items d-flex justify-content-between align-items-center">
                  <div class="col-lg-4 col-md-6">
                    <div class="header-logo d-flex align-items-center justify-content-between">
                      <div class="logo">
                        <a href="http://localhost/glenictheme"><img src="<?php echo $options['logo_upload']['url']; ?>" alt="logo"></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-5 col-md-5">
                    <nav>
                      <div class="menu">
                        <ul>
                          <li class="active"><a href="index.html">Home</a></li>
                          <li><a href="page.html">pages</a></li>
                          <li><a href="project.html">Projects</a></li>
                          <li><a href="blog.html">Blog</a></li>
                          <li><a href="contact.html">Contact</a></li>
                        </ul>
                      </div>
                    </nav>
                  </div>
                  <div class="col-md-3 ohter-display">
                    <div class="header-bottom-icon d-flex align-items-center justify-content-end">
                      <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                      <div class="select-language ms-4 me-4">
                        <span>FR</span>
                        <select name="" id="">
                          <option value="EN">EN</option>
                          <option value="BN">BN</option>
                          <option value="HD">HD</option>
                        </select>
                      </div>
                      <a href="#"><i class="fa-solid fa-qrcode"></i></a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="shows">
                      <i class="fa-solid fa-bars-staggered"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End Header Area -->