<?php 
//allow featured image on post
add_theme_support( 'post-thumbnails' );

//add new thumbnail size for gallery
add_image_size( 'image-gallery-size', 138, 125, true );    

/*
 * Add Testimonial Custom Post Type
 */
function mixify_testi_post_type() {
// Set UI labels for Custom Post Type
  $labels = array(
    'name'                => _x( 'Testimonials', 'Post Type General Name' ),
    'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name' ),
    'menu_name'           => __( 'Testimonials' ),
    'parent_item_colon'   => __( 'Parent Testimonial:' ),
    'all_items'           => __( 'All Testimonials' ),
    'view_item'           => __( 'View Testimonial' ),
    'add_new_item'        => __( 'Add New Testimonial' ),
    'add_new'             => __( 'Add Testimonial' ),
    'edit_item'           => __( 'Edit Testimonial' ),
    'update_item'         => __( 'Update Testimonial' ),
    'search_items'        => __( 'Search Testimonial' ),
    'not_found'           => __( 'Not Found' ),
    'not_found_in_trash'  => __( 'Not found in Trash' ),
  );
  
// Set other options for Custom Post Type
  
 $args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'menu_icon' => MIXIFY_IMAGES_URL.'/icon-testimonial.png',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'testimonial' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author' ),
		'taxonomies'          => array( 'testimonial-category' )
	);

	register_post_type( 'testimonial', $args );
	
}
add_action( 'init', 'mixify_testi_post_type' );

//create taxonomies for the post type "testimonial"
function mixify_testi_taxonomy() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Testimonial Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Testimonial Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Testimonial Category' ),
		'all_items'         => __( 'All Testimonial Categories' ),
		'parent_item'       => __( 'Parent Testimonial Category' ),
		'parent_item_colon' => __( 'Parent Testimonial Category:' ),
		'edit_item'         => __( 'Edit Testimonial Category' ),
		'update_item'       => __( 'Update Testimonial Category' ),
		'add_new_item'      => __( 'Add New Testimonial Category' ),
		'new_item_name'     => __( 'New Testimonial Category Name' ),
		'menu_name'         => __( 'Testimonial Category' ),
	);
	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'testimonial-category' )
	);
	register_taxonomy( 'testimonial-category', array( 'testimonial' ), $args );
}
add_action( 'init', 'mixify_testi_taxonomy');    

//---------------------------------------------------------------------

/*
 * Add Gallery Custom Post Type
 */
function mixify_gallery_post_type() {
// Set UI labels for Custom Post Type
  $labels = array(
    'name'                => _x( 'Gallery', 'Post Type General Name' ),
    'singular_name'       => _x( 'Gallery', 'Post Type Singular Name' ),
    'menu_name'           => __( 'Gallery' ),
    'parent_item_colon'   => __( 'Parent Gallery:' ),
    'all_items'           => __( 'All Images' ),
    'view_item'           => __( 'View Image' ),
    'add_new_item'        => __( 'Add New Image' ),
    'add_new'             => __( 'Add Image' ),
    'edit_item'           => __( 'Edit Image' ),
    'update_item'         => __( 'Update Image' ),
    'search_items'        => __( 'Search Image' ),
    'not_found'           => __( 'Not Found' ),
    'not_found_in_trash'  => __( 'Not found in Trash' ),
  );
  
// Set other options for Custom Post Type
  
 $args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'menu_icon' => MIXIFY_IMAGES_URL.'/icon-gallery.png',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'gallery' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail'),
		'taxonomies'          => array( 'gallery-category' )
	);

	register_post_type( 'gallery', $args );     
	
}
add_action( 'init', 'mixify_gallery_post_type' );

//create taxonomies for the post type "testimonial"
function mixify_gallery_taxonomy() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Gallery Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Gallery Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Gallery Category' ),
		'all_items'         => __( 'All Gallery Categories' ),
		'parent_item'       => __( 'Parent Gallery Category' ),
		'parent_item_colon' => __( 'Parent Gallery Category:' ),
		'edit_item'         => __( 'Edit Gallery Category' ),
		'update_item'       => __( 'Update Gallery Category' ),
		'add_new_item'      => __( 'Add New Gallery Category' ),
		'new_item_name'     => __( 'New Gallery Category Name' ),
		'menu_name'         => __( 'Gallery Category' ),
	);
	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'gallery' )
	);
	register_taxonomy( 'gallery-category', array( 'gallery' ), $args );
}
add_action( 'init', 'mixify_gallery_taxonomy');    
