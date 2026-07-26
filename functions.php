<?php
function karo_enqueue_styles(){ 
    wp_enqueue_style('karo-style', get_stylesheet_directory_uri() . '/style.css'); 
    wp_enqueue_style('karo-main-style', get_stylesheet_directory_uri() . '/assets/css/main.css'); 
    wp_enqueue_style('karo-google-fonts', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
}

add_action('wp_enqueue_scripts', 'karo_enqueue_styles');

function karo_enqueue_scripts(){
    wp_enqueue_script('karo-main-script', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}

add_action ('wp_enqueue_scripts', 'karo_enqueue_scripts');

function karo_register_menus(){
    register_nav_menus([
        'primary' => 'Menu główne'
    ]);
}
add_action('init', 'karo_register_menus');

function karo_theme_setup(){
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'karo_theme_setup');

function karo_register_project(){
    register_post_type('project', [
        'labels' => [
        'name' => 'Projekty',
        'add_new_item' => 'Dodaj nowy projekt',
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => ['title', 'editor', 'thumbnail'],
    ]);
}
add_action('init', 'karo_register_project');
