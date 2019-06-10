
<?php
// Careers Post Type

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

// Contracts Post Type

if ( ! function_exists('contracts_post_type') ) {

  // Register Custom Post Type
  function contracts_post_type() {
  
    $labels = array(
      'name'                  => _x( 'Contracts', 'Post Type General Name', 'contracts_domain' ),
      'singular_name'         => _x( 'Contract', 'Post Type Singular Name', 'contracts_domain' ),
      'menu_name'             => __( 'Contracts', 'contracts_domain' ),
      'name_admin_bar'        => __( 'Contracts', 'contracts_domain' ),
      'archives'              => __( 'Contract Archives', 'contracts_domain' ),
      'attributes'            => __( 'Item Attributes', 'contracts_domain' ),
      'parent_item_colon'     => __( 'Parent Item:', 'contracts_domain' ),
      'all_items'             => __( 'All Items', 'contracts_domain' ),
      'add_new_item'          => __( 'Add New Contract', 'contracts_domain' ),
      'add_new'               => __( 'Add New', 'contracts_domain' ),
      'new_item'              => __( 'New Contract', 'contracts_domain' ),
      'edit_item'             => __( 'Edit Contract', 'contracts_domain' ),
      'update_item'           => __( 'Update Contract', 'contracts_domain' ),
      'view_item'             => __( 'View Contract', 'contracts_domain' ),
      'view_items'            => __( 'View Contracts', 'contracts_domain' ),
      'search_items'          => __( 'Search Contract', 'contracts_domain' ),
      'not_found'             => __( 'Not found', 'contracts_domain' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'contracts_domain' ),
      'featured_image'        => __( 'Featured Image', 'contracts_domain' ),
      'set_featured_image'    => __( 'Set featured image', 'contracts_domain' ),
      'remove_featured_image' => __( 'Remove featured image', 'contracts_domain' ),
      'use_featured_image'    => __( 'Use as featured image', 'contracts_domain' ),
      'insert_into_item'      => __( 'Insert into item', 'contracts_domain' ),
      'uploaded_to_this_item' => __( 'Uploaded to this item', 'contracts_domain' ),
      'items_list'            => __( 'Items list', 'contracts_domain' ),
      'items_list_navigation' => __( 'Items list navigation', 'contracts_domain' ),
      'filter_items_list'     => __( 'Filter items list', 'contracts_domain' ),
    );
    $args = array(
      'label'                 => __( 'Contract', 'contracts_domain' ),
      'description'           => __( 'Contracts post type', 'contracts_domain' ),
      'labels'                => $labels,
      'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'menu_icon'             => 'dashicons-welcome-add-page',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'page',
      'show_in_rest'          => false,
    );
    register_post_type( 'contracts', $args );
  
  }
  add_action( 'init', 'contracts_post_type', 0 );
  
  }
