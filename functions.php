<?php
function calling_resources()
{
    wp_enqueue_style('google_font', '//fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    wp_enqueue_style('font_awesome', '//pro.fontawesome.com/releases/v5.10.0/css/all.css');
    wp_enqueue_style('bootstrap_css', '//cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('main_stylesheet', get_stylesheet_uri());
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.5.1.slim.min.js');
    wp_enqueue_script('popper_js', '//cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js');
    wp_enqueue_script('bootstrap_js', '//cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js');
}

add_action('wp_enqueue_scripts', 'calling_resources');

function event_post_type()
{
    register_post_type('event', [
        'has_archive' => true,
        'public' => true,
        'labels' => [
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => "All Events",
            'singular_name' => 'Event',
        ],
        'menu_icon' => 'dashicons-calendar',
    ]);
}
add_action('init', 'event_post_type');

function redirect_url_login(){
    wp_redirect(site_url('/profile'));
    exit();
}

add_action('wp_login','redirect_url_login');


function ps_redirect_after_logout(){
    wp_redirect( site_url('/') );
    exit();
}

add_action('wp_logout','ps_redirect_after_logout');

// customize login screen

function ourHeaderUrl(){
    return esc_url(site_url('/'));
}

add_filter('login_headerurl','ourHeaderUrl'); 

function loginCss(){
    wp_enqueue_style('main_stylesheet', get_stylesheet_uri());
}

add_action('login_enqueue_scripts','loginCss');

function ourLoginTitle(){
    return get_bloginfo('name');
}

add_filter('login_headertitle','ourLoginTitle');

