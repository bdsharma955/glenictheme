<?php 

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = 'glenic_theme';
  
    //
    // Create options
    CSF::createOptions( $prefix, array(
      'menu_title' => 'Theme Options',
      'menu_slug'  => 'theme_options',
      'menu_icon' => 'dashicons-screenoptions',
    ) );
  
    //
    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => 'Header Section',
      'icon'   => 'fas fa-head-side-virus',
      'fields' => array(
  
        //
        // A text field
        array(
          'id'    => 'fav_icon',
          'type'  => 'media',
          'title' => 'Favicon Upload',
          'default' => array(
            'url' => get_template_directory_uri().'/assets/images/footer-logo.png',
          )
        ),
        array(
          'id'    => 'logo_upload',
          'type'  => 'media',
          'title' => 'Logo Upload',
          'default' => array(
            'url' => get_template_directory_uri().'/assets/images/logo.png',
          )
        ),
        array(
          'id'    => 'contact_number',
          'type'  => 'text',
          'title' => 'Contact Number',
          'default' => '(+55) -66 99 88',
        ),
        array(
          'id'    => 'contact_email',
          'type'  => 'text',
          'title' => 'Contact Number',
          'default' => 'info.Glenic@gmail.com',
        ),
        
        array(
            'id'    => 'talk_button',
            'type'  => 'text',
            'title' => 'Talk Button',
            'default' => "Let's Talk",
          ),
          array(
            'id'    => 'talk_button_url',
            'type'  => 'text',
            'title' => 'Talk Button',
            'default' => "#",
          ),
        //repeater media icon
        array(
            'id'     => 'social_media',
            'type'   => 'repeater',
            'title'  => 'Repeater',
            'fields' => array(
          
              array(
                'id'    => 'social_icon',
                'type'  => 'icon',
                'title' => 'Social Icon',
              ),
              array(
                'id'    => 'social_icon_url',
                'type'  => 'text',
                'title' => 'Social Icon Url',
                'default' => '#',
              ),
          
            ),
          ),
  
        ),
    ) );
  
    //
    // Footer section
    CSF::createSection( $prefix, array(
      'title'  => 'Footer Section',
      'icon'  => 'fas fa-drumstick-bite',
      'fields' => array(
  
        // A textarea field
        array(
          'id'    => 'sub_title',
          'type'  => 'text',
          'title' => 'Sub Title',
          'default' => 'Get Newsletter Glenic',
        ),
        array(
          'id'    => 'footer_title',
          'type'  => 'text',
          'title' => 'footer Title',
          'default' => "I'll Help You Get Back To Newsletter",
        ),
        array(
          'id'    => 'footer_logo',
          'type'  => 'media',
          'title' => 'footer Logo',
          'default' => array(
            'url' => get_template_directory_uri().'/assets/images/footer-logo.png',
          )
        ),
        array(
          'id'    => 'footer_description',
          'type'  => 'textarea',
          'title' => 'footer Description',
          'default' => "In velit arcu posuere integer. Dolor sit am, consectetur nun adipiscing elit.",
        ),
        //Footer Repeater
        array(
          'id'     => 'footer_media',
          'type'   => 'repeater',
          'title'  => 'Repeater',
          'fields' => array(
        
            array(
              'id'    => 'footer_social_icon',
              'type'  => 'icon',
              'title' => 'Footer Social Icon',
            ),
            array(
              'id'    => 'footer_social_icon_url',
              'type'  => 'text',
              'title' => 'Footer Social Icon Url',
              'default' => '#'
            ),
        
          ),
        ),
        //end repeater

        // Contact Info
        array(
          'id'    => 'contact_info',
          'type'  => 'text',
          'title' => 'Contact Info Title',
          'default' => "Contact Info",
        ),
        //Info Repeater
        array(
          'id'     => 'contact_info_repeater',
          'type'   => 'repeater',
          'title'  => 'Repeater',
          'fields' => array(
          array(
            'id'    => 'info_icon',
            'type'  => 'icon',
            'title' => 'Info Icon',
          ),
          
          array(
            'id'     => 'info_repeater_text',
            'type'   => 'repeater',
            'title'  => 'Repeater',
            'fields' => array(
            array(
              'id'    => 'info_title',
              'type'  => 'text',
              'title' => 'Info Title',
            ),
          
          ),
        ),
        ),
        ),
        //end repeater
        
        //Footer Text
        array(
          'id'    => 'footer_foot',
          'type'  => 'wp_editor',
          'title' => 'Footer Text',
        ),
      ),
    ) );

    // Hero Slider Area
    CSF::createSection( $prefix, array(
      'title'  => 'Hero Slider',
      'icon' => 'fas fa-photo-video',
      'fields' => array(
  
        array(
          'id'     => 'hero_slider',
          'type'   => 'repeater',
          'title'  => 'Hero Slider',
          'fields' => array(
            array(
              'id' => 'hero_slider_image',
              'type' => 'media',
              'title' => 'Slider Image',
              'default' => array(
                'url' => get_template_directory_uri().'/assets/images/slider-image/Slider3.png',
              )
            ),
            array(
              'id' => 'hero_sub_title',
              'type' => 'text',
              'title' => 'Slider Sub Title',
              'default' => 'Hi, It’s our Glenic',
            ),
            array(
              'id' => 'hero_slider_title',
              'type' => 'text',
              'title' => 'Slider Title',
              'default' => 'Good Health Moves Us Forward.',
            ),
            array(
              'id' => 'hero_slider_content',
              'type' => 'textarea',
              'title' => 'Slider Content',
              'default' => 'Pellentesque a arcu tincidunt, sollicitudin eros sed, venenatis justo. Proin sed tellus massa. Nullam bibendum sodales est in faucibus.',
            ),
        )
      ),
  
      )
    ) );

   //Blog Slider section
  CSF::createSection( $prefix, array(
    'title'  => 'Blog Slider Area',
    'icon' => 'fas fa-th-large',
    'fields' => array(

      //Blog Slider Repeater
      array(
        'id'     => 'blog_slider_image',
        'type'   => 'repeater',
        'title'  => 'Repeater',
        'fields' => array(
      
          array(
            'id'    => 'slider_image',
            'type'  => 'media',
            'title' => 'Slider Image',
            'default' => array(
              'url' => get_template_directory_uri().'/assets/images/slider-image/BG.png',
            )
            ),
            array(
              'id'    => 'blog_slider_heading',
              'type'  => 'text',
              'title' => 'Slider Heading',
              'default' => 'Blog Page',
            ),
            array(
              'id'    => 'blog_slider_home',
              'type'  => 'text',
              'title' => 'Slider Bar',
              'default' => 'Home',
            ),
            array(
              'id'    => 'blog_slider_blog_page',
              'type'  => 'text',
              'title' => 'Slider Barpage',
              'default' => 'Blog Page',
            ),
      
        ),
      ),

    )
  ) );

  // All Theme Option
  CSF::createSection( $prefix, array(
    'title'  => 'Service List',
    'icon' => 'fas fa-list-alt',
    'fields' => array(

      // A textarea field
      array(
        'id'    => 'service_title',
        'type'  => 'text',
        'title' => 'Service List',
        'default' => 'Service List'
      ),
      //list repeater
      array(
        'id'     => 'list_repeater',
        'type'   => 'repeater',
        'title'  => 'Repeater',
        'fields' => array(
      
          array(
            'id'    => 'list_name',
            'type'  => 'text',
            'title' => 'List Name',
            'default' => 'UX strategy',
          ),
      
        ),
      ),

    )
  ) );
  //list social icon
  CSF::createSection( $prefix, array(
    'title'  => 'Service Social Icon',
    'icon' => 'fas fa-icons',
    'fields' => array(

      // A textarea field
      array(
        'id'    => 'social_title',
        'type'  => 'text',
        'title' => 'Service Social Icon',
        'default' => 'Social Icon'
      ),
      //list repeater
      array(
        'id'     => 'icon_repeater',
        'type'   => 'repeater',
        'title'  => 'Repeater',
        'fields' => array(
      
          array(
            'id'    => 'icon_name',
            'type'  => 'icon',
            'title' => 'Icon Name',
          ),
          array(
            'id'    => 'icon_name_url',
            'type'  => 'text',
            'title' => 'Icon Url',
            'default' => '#'
          ),
      
        ),
      ),

    )
  ) );

// Experience Section
  CSF::createSection( $prefix, array(
    'title'  => 'Experience Section',
    'icon' => 'fas fa-list-alt',
    'fields' => array(

      // A textarea field
      array(
        'id'    => 'experience_image',
        'type'  => 'media',
        'title' => 'Experience Image',
        'default' => array(
          'url' => get_template_directory_uri().'/assets/images/about-images/about-left.png',
        ),
      ),
      array(
        'id'    => 'experience_sub_title',
        'type'  => 'text',
        'title' => 'Experience Sub Title',
        'default' => '10 Years Experience'
      ),
      array(
        'id'    => 'experience_title',
        'type'  => 'text',
        'title' => 'Experience Title',
        'default' => 'We Are Best Treatment For Our Hospital.',
      ),
      array(
        'id'    => 'experience_content',
        'type'  => 'wp_editor',
        'title' => 'Experience Content',
        'default' => '<p>Fusce eu eros nec felis venenatis fermentum sit amet eget turpis. Integer tempus massa ac arcu sollicitudin sollicitudin Vivamus neque urna, iaculis et orci id, euismod tempor arcu semper congue nulla amet finibus. </p>
        <p>Tempus massa ac arcu sollicitudin sollicitudin Vivamus neque urna, iaculis et orci id, euismod tempor arcu semper congue nulla amet finibus.</p>',
      ),
      //Experience Repeater
      array(
        'id'     => 'experience_mission',
        'type'   => 'repeater',
        'title'  => 'Experience Mission',
        'fields' => array(
      
          array(
            'id'    => 'ex_mission_image',
            'type'  => 'media',
            'title' => 'Mission Image',
            'default' => array(
              'url' => get_template_directory_uri().'/assets/images/about-images/about-left.png',
            ),
          ),
          array(
            'id'    => 'ex_mission_title',
            'type'  => 'text',
            'title' => 'Mission Title',
            'default' => 'Our Mission'
          ),
          array(
            'id'    => 'ex_mission_decription',
            'type'  => 'textarea',
            'title' => 'Mission Decription',
            'default' => 'Donec faucibus erat neque, in consectetu nisl sagittis Cras porttitor molestie.'
          ),
        ),
      ),
      array(
        'id'    => 'about_more',
        'type'  => 'text',
        'title' => 'About More',
        'default' => 'About More',
      ),
      array(
        'id'    => 'about_more_url',
        'type'  => 'text',
        'title' => 'About More Url',
        'default' => '#',
      ),
      array(
        'id'    => 'about_video',
        'type'  => 'text',
        'title' => 'About Video',
        'default' => 'About Video',
      ),
      array(
        'id'    => 'about_video_url',
        'type'  => 'text',
        'title' => 'About Video Url',
        'default' => '#',
      ),
      array(
        'id'    => 'about_glenic',
        'type'  => 'text',
        'title' => 'ABOUT GLENIC',
        'default' => 'ABOUT GLENIC',
      ),
    )
  ) );

   //Blog Post Title
    CSF::createSection( $prefix, array(
      'title'  => 'Blog Post Title',
      'icon' => 'far fa-newspaper',
      'fields' => array(
  
        array(
          'id'    => 'blog_sub_title',
          'type'  => 'text',
          'title' => 'Blog Sub Title',
          'default' => 'Our Blog',
        ),
        array(
          'id'    => 'blog_title',
          'type'  => 'text',
          'title' => 'Blog Title Heading',
          'default' => 'Latest News & Blogs',
        ),
        array(
          'id'    => 'related_post_title',
          'type'  => 'text',
          'title' => 'Post Sub Title',
          'default' => 'Related Blogs',
        ),
        array(
          'id'    => 'related_post_heading',
          'type'  => 'text',
          'title' => 'Post Heading',
          'default' => 'Related Blogs',
        ),
  
      )
    ) );
      // Isponser Area
      CSF::createSection( $prefix, array(
        'title'  => 'Isponser',
        'icon' => 'fas fa-photo-video',
        'fields' => array(
    
          array(
            'id'     => 'isponser',
            'type'   => 'repeater',
            'title'  => 'Isponser',
            'fields' => array(
          
              array(
                'id'    => 'isponser_image',
                'type'  => 'media',
                'title' => 'Isponser Image',
                'default' => array(
                'url' => get_template_directory_uri().'/assets/images/truasted-image/envata.png',
              ),
            ),
          )
        ),
    
        )
      ) );

     // Our Team Section
     CSF::createSection( $prefix, array(
      'title'  => 'Team Section',
      'icon' => 'fas fa-users',
      'fields' => array(

        array(
          'id'    => 'team_title',
          'type'  => 'text',
          'title' => 'Team Title',
          'default' => 'Our Team Member',
        ),
        array(
          'id'    => 'team_heading',
          'type'  => 'text',
          'title' => 'Team Heading',
          'default' => 'Meet Our Expert Doctors',
        ),
        
      )
    ) );
    //Project PAge Title
    CSF::createSection( $prefix, array(
      'title'  => 'Project Page Title',
      'icon' => 'far fa-newspaper',
      'fields' => array(
  
        array(
          'id'    => 'project_sub_title',
          'type'  => 'text',
          'title' => 'Project Sub Title',
          'default' => 'Recent Projects ',
        ),
        array(
          'id'    => 'project_title',
          'type'  => 'text',
          'title' => 'Project Title',
          'default' => 'Our Case Stady',
        ),
  
      )
    ) );
    //Service PAge Title
    CSF::createSection( $prefix, array(
      'title'  => 'Service Page Title',
      'icon' => 'far fa-newspaper',
      'fields' => array(
  
        array(
          'id'    => 'service_sub_title',
          'type'  => 'text',
          'title' => 'Service Sub Title',
          'default' => 'Our Best Services',
        ),
        array(
          'id'    => 'services_title',
          'type'  => 'text',
          'title' => 'Services Title',
          'default' => 'We Are The Best Treatment For Our Hostpital & Healthcare Center.',
        ),
  
      )
    ) );
    //Eye Testing PAge Title
    CSF::createSection( $prefix, array(
      'title'  => 'Eye Testing',
      'icon' => 'far fa-newspaper',
      'fields' => array(
  
        array(
          'id'    => 'eye_testing_title',
          'type'  => 'text',
          'title' => 'Service Sub Title',
          'default' => 'Eye Testing History.',
        ),
        array(
          'id'    => 'eye_content',
          'type'  => 'textarea',
          'title' => 'Services Title',
          'default' => 'We Are The Best Treatment For Our Hostpital & Healthcare Center.',
        ),
        array(
          'id' => 'eye_testi_image',
          'type' => 'media',
          'title' => 'Eye Image',
          'default' => array(
            'url' => get_template_directory_uri().'/assets/images/expert-image/best2.png',
          ),
        ),
        //Eye List
        array(
          'id'     => 'eye_repeater',
          'type'   => 'repeater',
          'title'  => 'Eye Repeater',
          'fields' => array(
        
            array(
              'id'    => 'eye_list',
              'type'  => 'text',
              'title' => 'Eye List',
              'default' => 'Online Booking',
            ),
          ),
        ),
      )
    ) );
  
  }

?>