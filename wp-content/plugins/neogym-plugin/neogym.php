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

 if ( ! defined( 'TRAINERS_INCLUDE' ) ) {
    define( 'TRAINERS_INCLUDE', plugin_dir_path( __FILE__ ) . 'includes'  );
}

require TRAINERS_INCLUDE . '/cpt-trainers.php';
require TRAINERS_INCLUDE . '/function.php';