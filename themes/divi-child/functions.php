<?php
function my_theme_enqueue_styles() { 
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child_theme_styles', get_stylesheet_directory_uri() . '/dist/css/main.css');
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

if ( ! function_exists('careers_post_type') ) {

  // Register Custom Post Type
  function careers_post_type() {
  
    $labels = array(
      'name'                  => _x( 'Careers Post Types', 'Post Type General Name', 'career_domain' ),
      'singular_name'         => _x( 'Career Post Type', 'Post Type Singular Name', 'career_domain' ),
      'menu_name'             => __( 'Careers', 'career_domain' ),
      'name_admin_bar'        => __( 'Career', 'career_domain' ),
      'archives'              => __( 'Career Archives', 'career_domain' ),
      'attributes'            => __( 'Career Attributes', 'career_domain' ),
      'parent_item_colon'     => __( 'Parent Career:', 'career_domain' ),
      'all_items'             => __( 'All Careers', 'career_domain' ),
      'add_new_item'          => __( 'Add New Career', 'career_domain' ),
      'add_new'               => __( 'Add New Career', 'career_domain' ),
      'new_item'              => __( 'New Career', 'career_domain' ),
      'edit_item'             => __( 'Edit Career', 'career_domain' ),
      'update_item'           => __( 'Update Career', 'career_domain' ),
      'view_item'             => __( 'View Career', 'career_domain' ),
      'view_items'            => __( 'View Careers', 'career_domain' ),
      'search_items'          => __( 'Search Career', 'career_domain' ),
      'not_found'             => __( 'Not found', 'career_domain' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'career_domain' ),
      'featured_image'        => __( 'Featured Image', 'career_domain' ),
      'set_featured_image'    => __( 'Set featured image', 'career_domain' ),
      'remove_featured_image' => __( 'Remove featured image', 'career_domain' ),
      'use_featured_image'    => __( 'Use as featured image', 'career_domain' ),
      'insert_into_item'      => __( 'Insert into item', 'career_domain' ),
      'uploaded_to_this_item' => __( 'Uploaded to this item', 'career_domain' ),
      'items_list'            => __( 'Items list', 'career_domain' ),
      'items_list_navigation' => __( 'Items list navigation', 'career_domain' ),
      'filter_items_list'     => __( 'Filter items list', 'career_domain' ),
    );
    $args = array(
      'label'                 => __( 'Career Post Type', 'career_domain' ),
      'description'           => __( 'Post type for careers in Palisade Technologies', 'career_domain' ),
      'labels'                => $labels,
      'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
      'taxonomies'            => array( ),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'menu_icon'             => 'dashicons-businessman',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'post',
      'show_in_rest'          => false,
    );
    register_post_type( 'careers', $args );
  
  }
  add_action( 'init', 'careers_post_type', 0 );
  
  }