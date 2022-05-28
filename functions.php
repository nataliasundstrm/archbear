<?php 

/**
 * Add theme support
 */

add_theme_support('post-thumbnails');

/** 
 * Add images sizes 
 * */

add_image_size( 'project_thumb', 640, 9999, false ); // projects, false = ej hårdbeskärd
add_image_size( 'project_portrait', 860, 1300, ['right', 'center']); // project, 'right', 'center' - styr beskärning av bilder
add_image_size( 'project_hero', 2880, 1920, false); // false = ej hårdbeskärd





/**
 * Scripts & styles
 */

function archbear_scripts_and_styles() {

    // Styles 
    wp_enqueue_style( 'swiper-style', 'https://unpkg.com/swiper@8/swiper-bundle.min.css'); // Hämtar inställningarna för vår slider
    wp_enqueue_style('archbear-style', get_stylesheet_uri() ); // Hämtar style.css

    //Scripts 
    wp_enqueue_script( 'swiper-script', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array(), false, false ); // false - ligger i headern (syftar på den sist nämnda)
    wp_enqueue_script( 'archbear-slider', get_template_directory_uri() . '/js/slider.js', array(), false, true); // ture - ligger i footern (istället för defer) 
    wp_enqueue_script( 'archbear-scroll', get_template_directory_uri() . '/js/scroll.js', array(), false, true); 
    wp_enqueue_script( 'archbear-menu', get_template_directory_uri() . '/js/menu.js', array(), false, true); 
}

add_action('wp_enqueue_scripts', 'archbear_scripts_and_styles'); // Gör att våra js- och css filer körs igång samtidigt som WordPress egna filer

/**
 * Register menus
 */

 function archbear_register_menus() {
     $locations = [
         'main_menu'        => 'Huvudmeny',
         'social_menu'      => 'Sociala medier'
     ];

     register_nav_menus( $locations);
 }

 add_action('after_setup_theme', 'archbear_register_menus', 0); // 0 = prioritering - först 


 /**
  * Custom post type
  */

  function archbear_register_post_type() {
    $labels = array(
        'name'                  => _x( 'Projects', 'Post type general name', 'archbear' ),
        'singular_name'         => _x( 'Project', 'Post type singular name', 'archbear' ),
        'menu_name'             => _x( 'Projects', 'Admin Menu text', 'archbear' ),
        'name_admin_bar'        => _x( 'Project', 'Add New on Toolbar', 'archbear' ),
        'add_new'               => __( 'Add New', 'archbear' ),
        'add_new_item'          => __( 'Add New project', 'archbear' ),
        'new_item'              => __( 'New project', 'archbear' ),
        'edit_item'             => __( 'Edit project', 'archbear' ),
        'view_item'             => __( 'View project', 'archbear' ),
        'all_items'             => __( 'All projects', 'archbear' ),
        'search_items'          => __( 'Search projects', 'archbear' ),
        'parent_item_colon'     => __( 'Parent projects:', 'archbear' ),
        'not_found'             => __( 'No projects found.', 'archbear' ),
        'not_found_in_trash'    => __( 'No projects found in Trash.', 'archbear' ),
        'featured_image'        => _x( 'Project Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'archbear' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'archbear' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'archbear' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'archbear' ),
        'archives'              => _x( 'Project archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'archbear' ),
        'insert_into_item'      => _x( 'Insert into project', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'archbear' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this project', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'archbear' ),
        'filter_items_list'     => _x( 'Filter projects list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'archbear' ),
        'items_list_navigation' => _x( 'Projects list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'archbear' ),
        'items_list'            => _x( 'Projects list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'archbear' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Project custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'projects' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
        'taxonomies'         => array(),
        'show_in_rest'       => true
    );
      
    register_post_type( 'project', $args );
}
add_action( 'init', 'archbear_register_post_type' );



?>