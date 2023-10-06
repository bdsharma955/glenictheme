<?php 

add_shortcode('faq_section','contact_faq_shortcode');
function contact_faq_shortcode($atts){
$faq_shortcode = shortcode_atts(array(
    'sub_title' => 'Faq & Answer 1',
    'title' => 'Frequency And Questions We Can Provide. 1',
    'faq' => '',
),$atts);
extract($faq_shortcode);
ob_start();
?>
  <section class="faq-ans-area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="faq-area-left p-2">
            <h4><?php echo $sub_title; ?></h4>
            <h2 class="mb-4"><?php echo $title; ?></h2>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/appiontment/ans-faq.png" alt="ans">
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="faq-area-right">
            <div class="accordion" id="accordionPanelsStayOpenExample">
              <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                    What can we do for you with Adobe Photoshop, & Figma?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse " aria-labelledby="panelsStayOpen-headingOne">
                  <div class="accordion-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dictum nisl mattis enim pharetra ullamcorper sit amet at metus. Morbi et turpis posuere, mollis nisi id, eleifend arcu.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="ture" aria-controls="panelsStayOpen-collapseTwo">
                    What is the standard size of business cards?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
                  <div class="accordion-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dictum nisl mattis enim pharetra ullamcorper sit amet at metus. Morbi et turpis posuere, mollis nisi id, eleifend arcu.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    What can we do for you with Adobe Photoshop, XD & Figma?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                  <div class="accordion-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dictum nisl mattis enim pharetra ullamcorper sit amet at metus. Morbi et turpis posuere, mollis nisi id, eleifend arcu.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-headingfore">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefore" aria-expanded="false" aria-controls="panelsStayOpen-collapseFore">
                    Do you create one single full home page?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapsefore" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingfore">
                  <div class="accordion-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dictum nisl mattis enim pharetra ullamcorper sit amet at metus. Morbi et turpis posuere, mollis nisi id, eleifend arcu.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingfith">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefith" aria-expanded="false" aria-controls="panelsStayOpen-collapseFith">
                    What can we do for you with Adobe Zomla max?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapsefith" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingfith">
                  <div class="accordion-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dictum nisl mattis enim pharetra ullamcorper sit amet at metus. Morbi et turpis posuere, mollis nisi id, eleifend arcu.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
$output = ob_get_clean();
return $output;

}

if(function_exists('vc_map')){
  vc_map(array(
    'name' => 'MediTheme FAQ',
    'base' => 'faq_section',
    'category' => 'MediTheme Eliments',
    'icon' => get_template_directory_uri().'/assets/images/logo.png',
  ));
}

?>