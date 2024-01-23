<?php
// Here is all functions for Neogym theme

function neogym_assets() {
   wp_enqueue_style('style-css', get_theme_file_uri('/assets/css/style.css'), false, '1.0.0');
   wp_enqueue_style('responsive-css', get_theme_file_uri('/assets/css/responsive.css'), false, '1.0.0');
   wp_enqueue_style('bootstrap-css', get_theme_file_uri('/assets/css/bootstrap.css'), false, '1.0.0');
   wp_enqueue_style('owl-carousel', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', false, '1.0.0');
   wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap', false, '1.0.0');

   wp_enqueue_script('bootstrap-js', get_theme_file_uri('/assets/js/bootstrap.js'), array(), '1.0.0', true );
   wp_enqueue_script('bootstrap-js', get_theme_file_uri('/assets/js/jquery-3.4.1.min.js'), array('jquery'), '1.0.0', true );
}

add_action('wp_enqueue_scripts', 'neogym_assets');