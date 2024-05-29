<?php

// Theme functions here

add_action('after_setup_theme', function () {
    
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'header_menu' => 'Header Menu',
        'footer_menu' => 'Footer Menu',
        'menu_mobile' => 'Menu Mobile'
    ));
});

wp_enqueue_style('css',get_template_directory_uri().'/css/css.css');
wp_enqueue_style('responsive',get_template_directory_uri().'/css/responsive.css');
wp_enqueue_style('style',get_stylesheet_uri(  ), false , false);
wp_enqueue_script('script', get_template_directory_uri().'/js/script.js', true, null);