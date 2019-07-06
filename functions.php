<?php

function register_assets()
{
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style('main-style', get_stylesheet_uri());

    wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'));
    wp_enqueue_script('app-js', get_template_directory_uri() . '/js/app.js', array('bootstrap'));
}

add_action('wp_enqueue_scripts', 'register_assets');

function register_menus()
{
    register_nav_menus(array(
        'header-menu'   => 'Header Menu',
        'footer-menu'   => 'Footer Menu',
       
    ));
}

add_action('init', 'register_menus');

add_theme_support('post-thumbnails');
set_post_thumbnail_size( 250, 250, true);





