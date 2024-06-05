<?php
/*
 * This is the child theme for Twenty Twenty-One theme, generated with Generate Child Theme plugin by catchthemes.
 *
 * (Please see https://developer.wordpress.org/themes/advanced-topics/child-themes/#how-to-create-a-child-theme)
 */
add_action( 'wp_enqueue_scripts', 'twenty_twenty_one_child_enqueue_styles' );
function twenty_twenty_one_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
/*
 * Your code goes below
 */


 function copy_right_widget() {

    register_sidebar( array(
        'name'          => 'Copy Right Widget',
        'id'            => 'copy_right_1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'copy_right_widget' );


function footer_contact_widget() {

    register_sidebar( array(
        'name'          => 'Footer Contact Widget',
        'id'            => 'footer_contact_1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'footer_contact_widget' );



add_action('init', 'service');
function service() {
	$labels = array(
		'name'               => _x( 'Service', 'post type general name' ),
		'singular_name'      => _x( 'service ', 'post type singular name' ),
		'add_new'            => _x( 'Add New service', 'post' ),
		'add_new_item'       => __( 'Add New service post' ),
		'edit_item'          => __( 'Edit service post' ),
		'new_item'           => __( 'New service post' ),
		'all_items'          => __( 'All services' ),
		'view_item'          => __( 'View service post' ),
		'search_items'       => __( 'Search service post' ),
		'not_found'          => __( 'No service post found' ),
		'not_found_in_trash' => __( 'No service post found' ),
		'parent_item_colon'  => '',
		'menu_name'          => 'Services'
	);
	$args = array(
		'labels'       				=> $labels,
		'description'  				=> 'service  post',
		'public'        			=> true,
		'show_ui' 					=> true,
		'show_in_menu'  			=> true,
		'publicly_queryable' 		=> true,
		
		'menu_position'				=> 5,
		'query_var' 				=> true,
		'rewrite'					=> true,
		'capability_type' 			=> 'post',
    	'has_archive'				=> true,
		'supports'      			=> array( 'title', 'editor', 'thumbnail', '', 'comments' ),
		'has_archive'   			=> true,
	);
	register_post_type( 'service', $args );	
	register_taxonomy("service", 'service', array("hierarchical" => true, "label" => "Service Category",'show_admin_column' => true, "singular_label" => "service Category","rewrite" => true) );
	
}


add_action('init', 'Banner');
	function Banner() {
	$labels = array(
		'name'               => _x( 'Banner', 'post type general name' ),
		'singular_name'      => _x( 'Banner ', 'post type singular name' ),
		'add_new'            => _x( 'Add New Banner', 'post' ),
		'add_new_item'       => __( 'Add New Banner post' ),
		'edit_item'          => __( 'Edit Banner post' ),
		'new_item'           => __( 'New Banner post' ),
		'all_items'          => __( 'All Banners' ),
		'view_item'          => __( 'View Banner post' ),
		'search_items'       => __( 'Search Banner post' ),
		'not_found'          => __( 'No Banner post found' ),
		'not_found_in_trash' => __( 'No Banner post found' ),
		'parent_item_colon'  => '',
		'menu_name'          => 'Banner '
	);
	$args = array(
		'labels'       				=> $labels,
		'description'  				=> 'Banner  post',
		'public'        			=> true,
		'show_ui' 					=> true,
		'show_in_menu'  			=> true,
		'publicly_queryable' 		=> true,
		'menu_icon' => 'dashicons-format-gallery',
		'menu_position'				=> 5,
		'query_var' 				=> true,
		'rewrite'					=> true,
		'capability_type' 			=> 'post',
    	'has_archive'				=> true,
		'supports'      			=> array( 'title', 'editor', 'thumbnail', '', 'comments' ),
		'has_archive'   			=> true,
	);
	register_post_type( 'Banner', $args );	
	
	
}


add_action('init', 'faq');
	function faq() {
	$labels = array(
		'name'               => _x( 'Faq', 'post type general name' ),
		'singular_name'      => _x( 'faq ', 'post type singular name' ),
		'add_new'            => _x( 'Add New faq', 'post' ),
		'add_new_item'       => __( 'Add New faq post' ),
		'edit_item'          => __( 'Edit faq post' ),
		'new_item'           => __( 'New faq post' ),
		'all_items'          => __( 'All faqs' ),
		'view_item'          => __( 'View faq post' ),
		'search_items'       => __( 'Search faq post' ),
		'not_found'          => __( 'No faq post found' ),
		'not_found_in_trash' => __( 'No faq post found' ),
		'parent_item_colon'  => '',
		'menu_name'          => 'Faq'
	);
	$args = array(
		'labels'       				=> $labels,
		'description'  				=> 'faq  post',
		'public'        			=> true,
		'show_ui' 					=> true,
		'show_in_menu'  			=> true,
		'publicly_queryable' 		=> true,
		
		'menu_position'				=> 5,
		'query_var' 				=> true,
		'rewrite'					=> true,
		'capability_type' 			=> 'post',
    	'has_archive'				=> true,
		'supports'      			=> array( 'title', 'editor', 'thumbnail', '', 'comments' ),
		'has_archive'   			=> true,
	);
	register_post_type( 'faq', $args );	
	//register_taxonomy("faq", 'faq', array("hierarchical" => true, "label" => "faq Category",'show_admin_column' => true, "singular_label" => "faq Category","rewrite" => true) );
	
}

add_action('init', 'testimonials');
	function testimonials() {
	$labels = array(
		'name'               => _x( 'Testimonials', 'post type general name' ),
		'singular_name'      => _x( 'testimonials ', 'post type singular name' ),
		'add_new'            => _x( 'Add New testimonials', 'post' ),
		'add_new_item'       => __( 'Add New testimonials post' ),
		'edit_item'          => __( 'Edit testimonials post' ),
		'new_item'           => __( 'New testimonials post' ),
		'all_items'          => __( 'All Testimonials' ),
		'view_item'          => __( 'View testimonials post' ),
		'search_items'       => __( 'Search testimonials post' ),
		'not_found'          => __( 'No testimonials post found' ),
		'not_found_in_trash' => __( 'No testimonials post found' ),
		'parent_item_colon'  => '',
		'menu_name'          => 'Testimonials'
	);
	$args = array(
		'labels'       				=> $labels,
		'description'  				=> 'testimonials  post',
		'public'        			=> true,
		'show_ui' 					=> true,
		'show_in_menu'  			=> true,
		'publicly_queryable' 		=> true,
		'menu_icon' => 'dashicons-testimonial',
		'menu_position'				=> 5,
		'query_var' 				=> true,
		'rewrite'					=> true,
		'capability_type' 			=> 'post',
    	'has_archive'				=> true,
		'supports'      			=> array( 'title', 'editor', 'thumbnail', '', 'comments' ),
		'has_archive'   			=> true,
	);
	register_post_type( 'testimonials', $args );	
	//register_taxonomy("testimonials", 'testimonials', array("hierarchical" => true, "label" => "testimonials Category",'show_admin_column' => true, "singular_label" => "testimonials Category","rewrite" => true) );
	
}

function dequeue_parent_theme_styles() {
    // Replace 'parent-style' with the handle of the style you want to dequeue
    wp_dequeue_style('parent-style');
}
add_action('wp_enqueue_scripts', 'dequeue_parent_theme_styles', 999);
