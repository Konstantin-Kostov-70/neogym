<?php
// Here is all function for Neogym theme

function neogym_assets($hook) {
   wp_enqueue_style('style.css', get_template_directory_uri() . '/assets/css/style.css', false, '1.0.0');
}

add_action('wp_enqueue_scripts', 'neogym_assets');