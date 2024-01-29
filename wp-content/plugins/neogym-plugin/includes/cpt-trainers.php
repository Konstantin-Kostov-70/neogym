<?php

/**
 * This function register our Trainers Custom Post Type
 *
 * @return void
 */

function trainers_cpt() {
    $labels = array(
		'name'                  => _x( 'Trainers', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'Trainer', 'Post type singular name', 'textdomain' ),
		'menu_name'             => _x( 'Trainers', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => _x( 'Trainer', 'Add New on Toolbar', 'textdomain' ),
		'add_new'               => __( 'Add New', 'textdomain' ),
		'add_new_item'          => __( 'Add New Trainer', 'textdomain' ),
		'new_item'              => __( 'New Trainer', 'textdomain' ),
		'edit_item'             => __( 'Edit Trainer', 'textdomain' ),
		'view_item'             => __( 'View Trainer', 'textdomain' ),
		'all_items'             => __( 'All Trainers', 'textdomain' ),
		'search_items'          => __( 'Search Trainers', 'textdomain' ),
		'parent_item_colon'     => __( 'Parent Trainers:', 'textdomain' ),
		'not_found'             => __( 'No Trainers found.', 'textdomain' ),
		'not_found_in_trash'    => __( 'No Trainers found in Trash.', 'textdomain' ),
		'featured_image'        => _x( 'Trainer Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'archives'              => _x( 'Trainer archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
		'insert_into_item'      => _x( 'Insert into Trainer', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Trainer', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
		'filter_items_list'     => _x( 'Filter Trainers list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
		'items_list_navigation' => _x( 'Trainers list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
		'items_list'            => _x( 'Trainers list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
	);

    $args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array(
            'title',
            'editor',
            'author',
            'thumbnail',
            'revisions',
        ),
        'show_in_rest'       => true
	);

    register_post_type( 'trainer', $args );
}
add_action( 'init', 'trainers_cpt' );