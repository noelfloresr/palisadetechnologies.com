<?php
function child_theme_assets() { 
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child_theme_styles', get_stylesheet_directory_uri() . '/dist/css/main.css');
    
    wp_enqueue_script( 'child_theme_scripts', get_stylesheet_directory_uri() . '/dist/js/index.js', array('jquery'), '1', true);
}
add_action( 'wp_enqueue_scripts', 'child_theme_assets' );

include get_stylesheet_directory() . '/includes/post_types.php'; // Post types
include get_stylesheet_directory() . '/includes/shortcodes.php'; // Post types

function custom_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );