<?php 
/**
 * Functions and definitions
 *
 *
 */

function aysun_theme_support(){
    add_theme_support("title-tag");
    add_theme_support("custom-logo");
    add_theme_support("post-thumbnails");
    add_theme_support( "align-wide" );

    // Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
}

add_action('after_setup_theme', 'aysun_theme_support');

function aysun_recent_post_image() {
    add_image_size( 'aysun-post-size', 52 );
}

add_action( 'after_setup_theme', 'aysun_recent_post_image' );

function aysun_register_styles(){
    $version = wp_get_theme()->get("Version");
    wp_enqueue_style("aysun_stylesheet", get_template_directory_uri()."/assets/css/style.css", array("aysun_font"), $version, 'all');
    wp_enqueue_style("aysun_font", "https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&display=swap", array());
}

add_action('wp_enqueue_scripts', 'aysun_register_styles');

function aysun_register_scripts(){
    wp_enqueue_script('aysun_main_script', get_template_directory_uri()."/assets/js/main.js", array(), "1.0.0", true);
}

add_action('wp_enqueue_scripts', 'aysun_register_scripts');

function aysun_menu(){
    register_nav_menus(array(
        'primary' => "Main Menu"
    ));
}

add_action('init', 'aysun_menu');


function aysun_widget_areas(){

    register_sidebar(
        array(
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
            'before_widget' => '',
            'after_widget'  => '',
            'name'        => 'Footer Widget 1',
            'id'          => 'footer-widget-1',
            'description' => 'Footer widget 1 area'
        )
    );

    register_sidebar(
        array(
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
            'before_widget' => '',
            'after_widget'  => '',
            'name'        => 'Footer Widget 2',
            'id'          => 'footer-widget-2',
            'description' => 'Footer widget 2 area'
        )
    );

    register_sidebar(
        array(
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
            'before_widget' => '',
            'after_widget'  => '',
            'name'        => 'Footer Widget 3',
            'id'          => 'footer-widget-3',
            'description' => 'Footer widget 3 area'
        )
    );

    register_sidebar(
        array(
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
            'before_widget' => '',
            'after_widget'  => '',
            'name'        => 'Footer Widget 4',
            'id'          => 'footer-widget-4',
            'description' => 'Footer widget 4 area'
        )
    );

}

add_action('widgets_init', 'aysun_widget_areas');
