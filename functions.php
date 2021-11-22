<?php
/*==========================
Add stylesheets & javascript files
==========================*/

function custom_theme_scripts(){
    //Bootstrap CSS
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');

    // Main CSS
    wp_enqueue_style('main-styles', get_stylesheet_uri());

    wp_enqueue_script('jquery');

    // Colorbox
    wp_enqueue_style('colorbox-css', get_stylesheet_directory_uri() . '/assets/colorbox/colorbox.css');
    wp_enqueue_style('colorbox-js', get_stylesheet_directory_uri() . '/assets/colorbox/jquery.colorbox.js');
    wp_enqueue_style('colorbox-js-custom', get_stylesheet_directory_uri() . '/assets/colorbox/custom.js');


    //Javascript files
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/scripts.js');

}

add_action('wp_enqueue_scripts', 'custom_theme_scripts');



/* ==============================
Add Featured Images
==============================*/
add_theme_support('post-thumbnails');


/* ==============================
Custom Header Image
==============================*/

$custom_image_header = array(
    'width'   => 225,
    'height'  => 120,
    'uploads' => true,
);

add_theme_support('custom-header', $custom_image_header);


/* ==============================
Add menus to theme
==============================*/

function register_my_menus(){
    register_nav_menus(array(
        'main-menu'     => __('Main Menu'),
        'footer-left'   => __('Left Footer Menu'),
        'footer-middle' => __('Middle Footer Menu'),
    ));
}

add_action('init', 'register_my_menus');



/*==================================

Create widget #1

===================================*/


function blank_widgets_init(){
    register_sidebar(array(
        'name'              =>  ('Right Footer Socials'),
        'id'                =>  'right-footer-widget',
        'description'        =>  'Socials on bottom right of footer',
        'before_widget'     =>  '<div class="right-footer-widget">',
        'after_widget'      =>  '</div>',
        'before_title'      =>  '<h4>',
        'after_title'       =>  '</h4>'

        ));
        
     register_sidebar(array(
        'name'              =>  ('Left Footer Logo'),
        'id'                =>  'left-footer-widget',
        'description'        =>  'Different Logo on left of footer',
        'before_widget'     =>  '<div class="left-footer-widget">',
        'after_widget'      =>  '</div>',
        'before_title'      =>  '<h4>',
        'after_title'       =>  '</h4>'

        ));

    register_sidebar(array(
        'name'              =>  ('Service Boxes'),
        'id'                =>  'service-boxes',
        'description'        => 'How can we help you',
        'before_widget'     =>  '<div class="services">',
        'after_widget'      =>  '</div>',
        'before_title'      =>  '<h2>',
        'after_title'       =>  '</h2>'

        ));
    
    register_sidebar(array(
        'name'              =>  ('Portfolio'),
        'id'                =>  'portfolio-section',
        'description'        => 'Previous Work Portfolio',
        'before_widget'     =>  '<div class="portfolio">',
        'after_widget'      =>  '</div>',
        'before_title'      =>  '<h2>',
        'after_title'       =>  '</h2>'

        ));


}

add_action('widgets_init', 'blank_widgets_init');