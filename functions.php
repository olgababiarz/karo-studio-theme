<?php
function karo_enqueue_styles(){ 
    wp_enqueue_style('karo-style', get_stylesheet_directory_uri() . '/style.css'); 
    wp_enqueue_style('karo-main-style', get_stylesheet_directory_uri() . '/assets/css/main.css'); 
}

add_action('wp_enqueue_scripts', 'karo_enqueue_styles');

function karo_enqueue_scripts(){
    wp_enqueue_script('karo-main-script', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}

add_action ('wp_enqueue_scripts', 'karo_enqueue_scripts');
