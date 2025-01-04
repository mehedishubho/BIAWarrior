<?php
function biawarrior_setup()
{
    add_theme_support('title-tag');
    load_theme_textdomain('biawarrior', get_template_directory() . '/languages');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'biawarrior'),
    ));
}
add_action('after_setup_theme', 'biawarrior_setup');

function biawarrior_assets()
{
    // Get the theme version dynamically from style.css
    $theme_version = wp_get_theme()->get('Version');

    // Enqueue styles
    wp_enqueue_style('biawarrior-fonts', get_template_directory_uri() . '/assets/css/font.css', array(), $theme_version);
    wp_enqueue_style('biawarrior-main-style', get_stylesheet_uri(), array('biawarrior-fonts'), $theme_version);
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), $theme_version, 'all');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), $theme_version, 'all');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), $theme_version, 'all');

    // Enqueue scripts
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), $theme_version, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('gsap', get_template_directory_uri() . '/assets/js/gsap.min.js', array(), $theme_version, true);
    wp_enqueue_script('scrolltrigger', get_template_directory_uri() . '/assets/js/ScrollTrigger.min.js', array('gsap'), $theme_version, true);
    wp_enqueue_script('animations', get_template_directory_uri() . '/assets/js/animations.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), $theme_version, true);
}
add_action('wp_enqueue_scripts', 'biawarrior_assets');


