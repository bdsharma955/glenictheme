<?php 
function medi_theme_setup(){
    //supports
    add_theme_support('tag-title');
    add_theme_support('post-thumbnails');

    //Regiater Project Post Type
    register_post_type('project',array(
        'labels' => array(
            'name' => 'Project Post Type',
            'add_new' => 'Add New Project',
            'not_found' => 'Project Not Found!',
        ),
        'public' => true,
        'menu_icon' => 'dashicons-calculator',
        'hierarchical' => true,
    ));
    //Register Project Filter
    register_taxonomy('project_filter','project',array(
        'labels' => array(
            'name' => 'Project Filter',
            'add_new' => 'Add New Filter',
            'not-found' => 'Filter Not found!',
        ),
        'public' => true,
        'hierarchical' => true,
    ));
    //Regiater Service Post Type
    register_post_type('service',array(
        'labels' => array(
            'name' => 'Service Post Type',
            'add_new' => 'Add New Service',
            'not_found' => 'Service Not Found!',
        ),
        'public' => true,
        'menu_icon' => 'dashicons-hourglass',
        'hierarchical' => true,
    ));
    //Regiater Team Post Type
    register_post_type('team',array(
        'labels' => array(
            'name' => 'Team Post Type',
            'add_new' => 'Add New Team',
            'not_found' => 'Team Not Found!',
        ),
        'public' => true,
        'menu_icon' => 'dashicons-groups',
        'hierarchical' => true,
    ));
    
}
add_action('after_setup_theme','medi_theme_setup');

//register widgets
function meditheme_widget1(){
    register_sidebar(array(
        'id' => 'footer-sidebar-1',
        'name' => 'Footer Widgets 1',
        'default' => 'Set Footer Widgets',
        'before_widget' => '<div class="footer-menu">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>'
    ));
}
add_action('widgets_init','meditheme_widget1');
function meditheme_widget2(){
    register_sidebar(array(
        'id' => 'footer-sidebar-2',
        'name' => 'Footer Widgets 2',
        'default' => 'Set Footer Widgets',
        'before_widget' => '<div class="footer-menu">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>'
    ));
}
add_action('widgets_init','meditheme_widget2');

function meditheme_css_js(){
    //CSS
    wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/assets/css/fontawesome.min.css');
    wp_enqueue_style('owl-theme', get_template_directory_uri().'/assets/css/owl.theme.default.min.css');
    wp_enqueue_style('owl-carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style('main-style', get_template_directory_uri().'/assets/css/style.css');
    wp_enqueue_style('responsive', get_template_directory_uri().'/assets/css/responsive.css');
    wp_enqueue_style('style', get_stylesheet_uri().'style.css');

    //JS
    wp_enqueue_script('local-jquery', get_template_directory_uri().'/assets/js/jquery.min.js');
    wp_enqueue_script('popper', get_template_directory_uri().'/assets/js/popper.min.js');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js');
    wp_enqueue_script('owl-carousel', get_template_directory_uri().'/assets/js/owl.carousel.min.js');
    wp_enqueue_script('jquery-mixitup', get_template_directory_uri().'/assets/js/jquery.mixitup.js');
    wp_enqueue_script('mixitup', get_template_directory_uri().'/assets/js/mixitup.min.js');
    wp_enqueue_script('scripts', get_template_directory_uri().'/assets/js/scripts.js');
}
add_action('wp_enqueue_scripts','meditheme_css_js');



require_once('inc/theme-options/codestar-framework.php');
require_once('inc/theme-options/options.php');





?>