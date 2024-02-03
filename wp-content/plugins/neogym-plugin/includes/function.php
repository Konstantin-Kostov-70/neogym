<?php
//Here is all generic functions of custom plugin

add_theme_support( 'post-thumbnails' );


 /**
 * This function is custom short code
 * 
 * @return string  HTML representation of the emoji enclosed in a span
 */

function custom_emoji( $atts, $emoji = null )
{
    $emoji_atts = shortcode_atts(
        array(
            'id' => '',
        ),
        $atts,
    );

    $emoji_values = array(
        'robot' => '&#129302;',
        'smile' => '&#128512',
        'cup'   => '&#127942',
        'medal' => '&#127941'
    );

    if ( !empty( $emoji_atts['id'] && array_key_exists( $emoji_atts['id'], $emoji_values ) ) ) {
        $emoji = $emoji_values[ $emoji_atts['id'] ];
    }

    return '<span class="caption">' . $emoji . '</span>';
}
add_shortcode( 'emoji', 'custom_emoji' );

/**
 * This function add AJAX functionality to "program" CPT,show joined people to building program
 * 
 * @return void
 */
function program_joined()
{

    if ( empty( $_POST[ 'action' ] ) ) {
        return;
    }

    $post_id = esc_attr( $_POST [ 'post_id' ] );
    $user_id = get_current_user_id();
   
    $joined_number = get_post_meta( $post_id, 'joined', true );
    $joined_users = get_post_meta( $post_id, 'joined_users', true );
    
    if ( empty ( $joined_number ) ) {
        $joined_number = 0;
    }

    if ( empty ( $joined_users ) ) {
        $joined_users = array();
    }
    
    if ( is_user_logged_in() && !in_array( $user_id, $joined_users) ) {
        $joined_users[] = $user_id;

        update_post_meta( $post_id, 'joined', $joined_number + 1 );
        update_post_meta( $post_id, 'joined_users', $joined_users );
        wp_send_json( $joined_number + 1 );
    } else {
        wp_send_json($joined_number);
    }
}

add_action( 'wp_ajax_nopriv_program_joined', 'program_joined' );
add_action( 'wp_ajax_program_joined', 'program_joined' );


/**
 * Adds a top-level menu page.
 * This function takes a capability 
 * which will be used to determine whether or not a page is included in the menu.
 * 
 * @return void
 */
function products_options_page() {
	add_menu_page(
		'Products Options',
		'Products Options',
		'manage_options',
		'products-options',
		'products_options_page_html'
	);
}
/**
 * Register our products_options_page to the admin_menu action hook.
 * 
 * @return void
 */
add_action( 'admin_menu', 'products_options_page' );

/**
 * Include the content and functionality from options-page.php 
 * 
 * @return void
 */
function products_options_page_html() {
    include NEOGYM_INCLUDE . '/options-page.php';
}

