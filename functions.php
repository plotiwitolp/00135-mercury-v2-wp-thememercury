<?php
add_action('wp_enqueue_scripts', 'add_scripts');

function add_scripts()
{
    $version = '1.0';

    // styles
    wp_enqueue_style('slick',  'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css', [], $version, 'all');
    wp_enqueue_style('font-awesome',  'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', [], $version, 'all');
    wp_enqueue_style('style', get_template_directory_uri() .  '/assets/css/style.css', [], $version, 'all');

    // scripts
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', [], $version, 'in_footer');
    wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', [], $version, 'in_footer');
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', [], $version, 'in_footer');
}


// custom logo
function theme_prefix_setup()
{
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'theme_prefix_setup');

// top menu
function theme_register_nav_menu()
{
    register_nav_menu('primary', 'Primary menu');
}
add_action('after_setup_theme', 'theme_register_nav_menu');


// remove excess from admin panel
function remove_from_admin_menu()
{
    // remove_menu_page('index.php'); // dashboard
    remove_menu_page('edit.php'); // posts
    remove_menu_page('edit-comments.php'); // comments
}
add_action('admin_menu', 'remove_from_admin_menu');


// create custom posts type
function create_main_slider_post_type()
{
    register_post_type(
        'mainslider',
        array(
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-slides',
            'labels' => array(
                'name' => __('Main Slider'),
                'singular_name' => __('Main Slider'),
                'add_new' => __('Add new slide in Main Slider'),
            ),
            'supports' => array('title'),
            'rewrite' => array('slug' => 'mainslider'),
            'menu_position'      => 4,
        )
    );
}
add_action('init', 'create_main_slider_post_type');

function create_product_post_type()
{
    register_post_type(
        'product',
        array(
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-products',
            'labels' => array(
                'name' => __('Products'),
                'singular_name' => __('Product'),
                'add_new' => __('Add new product'),
            ),
            'supports' => array('title'),
            'rewrite' => array('slug' => 'product'),
            'menu_position'      => 5,
        )
    );
}
add_action('init', 'create_product_post_type');

function create_review_post_type()
{
    register_post_type(
        'review',
        array(
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-format-quote',
            'labels' => array(
                'name' => __('Reviews'),
                'singular_name' => __('Review'),
                'add_new' => __('Add new review'),
            ),
            'supports' => array('title'),
            'rewrite' => array('slug' => 'review'),
            'menu_position'      => 6,
        )
    );
}
add_action('init', 'create_review_post_type');
