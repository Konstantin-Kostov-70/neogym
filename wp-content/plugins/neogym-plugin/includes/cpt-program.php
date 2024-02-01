<?php

/**
 * This function register our Programs Custom Post Type
 *
 * @return void
 */

function program_cpt() {
    $labels = array(
		'name'                  => _x( 'Programs', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'Program', 'Post type singular name', 'textdomain' ),
		'menu_name'             => _x( 'Programs', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => _x( 'Program', 'Add New on Toolbar', 'textdomain' ),
		'add_new'               => __( 'Add New', 'textdomain' ),
		'add_new_item'          => __( 'Add New Program', 'textdomain' ),
		'new_item'              => __( 'New Program', 'textdomain' ),
		'edit_item'             => __( 'Edit Program', 'textdomain' ),
		'view_item'             => __( 'View Program', 'textdomain' ),
		'all_items'             => __( 'All Programs', 'textdomain' ),
		'search_items'          => __( 'Search Programs', 'textdomain' ),
		'parent_item_colon'     => __( 'Parent Programs:', 'textdomain' ),
		'not_found'             => __( 'No Programs found.', 'textdomain' ),
		'not_found_in_trash'    => __( 'No Programs found in Trash.', 'textdomain' ),
		'featured_image'        => _x( 'Program Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'archives'              => _x( 'Program archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
		'insert_into_item'      => _x( 'Insert into Program', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Program', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
		'filter_items_list'     => _x( 'Filter Programs list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
		'items_list_navigation' => _x( 'Programs list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
		'items_list'            => _x( 'Programs list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
	);

    $args = array(
		'labels'             => $labels,
		'menu_icon'          => 'dashicons-nametag',
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

    register_post_type( 'program', $args );
}
add_action( 'init', 'program_cpt' );