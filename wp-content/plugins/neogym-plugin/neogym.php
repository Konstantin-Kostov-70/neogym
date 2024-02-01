<?php
 /*
 * Plugin Name:       Neogym Plugin
 * Plugin URI:        https://softuni.bg
 * Description:       Plugin that adds more custom functionality
 * Version:           1.0.0
 * Requires at least: 5.0
 * Requires PHP:      8.0
 * Author:            Konstantin Kostov
 * Author URI:        https://softuni.bg/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       softuni
 * Domain Path:       /languages
 */

 if ( ! defined( 'NEOGYM_INCLUDE' ) ) {
    define( 'NEOGYM_INCLUDE', plugin_dir_path( __FILE__ ) . 'includes'  );
}

require NEOGYM_INCLUDE . '/cpt-trainers.php';
require NEOGYM_INCLUDE . '/cpt-program.php';
require NEOGYM_INCLUDE . '/function.php';

function program_joined_enqueue() {

    wp_enqueue_script( 'program_joined_script', plugins_url( '/assets/js/script.js',__FILE__ ), array( 'jquery' ), 1.0 );

    wp_localize_script( 'program_joined_script', 'my_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
 }
 add_action( 'wp_enqueue_scripts', 'program_joined_enqueue' );