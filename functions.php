<?php
function karo_enqueue_styles(){ 
wp_enqueue_style('karo-style', get_stylesheet_directory_uri() . '/style.css'); 
}

add_action('wp_enqueue_scripts', 'karo_enqueue_styles');