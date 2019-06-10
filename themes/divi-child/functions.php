<?php
function my_theme_enqueue_styles() { 
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child_theme_styles', get_stylesheet_directory_uri() . '/dist/css/main.css');
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

include get_stylesheet_directory() . '/includes/post_types.php'; // Post types
include get_stylesheet_directory() . '/includes/shortcodes.php'; // Post types