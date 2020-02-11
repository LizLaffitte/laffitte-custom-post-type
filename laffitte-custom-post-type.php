<?php
/*
Plugin Name: Laffitte Custom Post Type
Plugin URI: https://github.com/LizLaffitte/laffitte-custom-post-type
Description: Plugin to register the Activity post type for Tally Connection
Version: 1.0
Author: Liz Laffitte
Author URI: https://github.com/LizLaffitte
Textdomain: laffitte-custom-post-type
License: GPLv2
*/

add_action( 'init', 'laffitte_register_post_type' );

function laffitte_register_post_type() {

	$labels = array(
	 'name' => __( 'Activities', 'laffitte-custom-post-type' ),
	 'singular_name' => __( 'Activity', 'laffitte-custom-post-type' ),
	 'add_new' => __( 'New Activity', 'laffitte-custom-post-type' ),
	 'add_new_item' => __( 'Add New Activity', 'laffitte-custom-post-type' ),
	 'edit_item' => __( 'Edit Activity', 'laffitte-custom-post-type' ),
	 'new_item' => __( 'New Activity', 'laffitte-custom-post-type' ),
	 'view_item' => __( 'View Activities', 'laffitte-custom-post-type' ),
	 'search_items' => __( 'Search Activities', 'laffitte-custom-post-type' ),
	 'not_found' =>  __( 'No Activities Found', 'laffitte-custom-post-type' ),
	 'not_found_in_trash' => __( 'No Activities found in Trash', 'laffitte-custom-post-type' ),
);

	$args = array(
	 'labels' => $labels,
	 'has_archive' => true,
	 'public' => true,
	 'show_in_menu' => true,
	 'show_ui' => true,
	 'hierarchical' => false,
	 'supports' => array(
	  'title',
	  'editor',
	  'excerpt',
	  'custom-fields',
	  'thumbnail',
	  'page-attributes'
	 ),
	 'taxonomies' => 'category',
	 'rewrite'   => array( 'slug' => 'activity' ),
	 'show_in_rest' => true
	);

	register_post_type( 'activity', $args );

}

