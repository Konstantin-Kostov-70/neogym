<?php
// Here is generic functions for Neogym theme

add_theme_support('post-thumbnails');
/**
 * This function load all styles and scripts
 */
function neogym_assets()
{
  wp_enqueue_style( 'style-css', get_theme_file_uri( '/assets/css/style.css' ), false, '1.0.0' );
  wp_enqueue_style( 'responsive-css', get_theme_file_uri( '/assets/css/responsive.css' ), false, '1.0.0' );
  wp_enqueue_style( 'bootstrap-css', get_theme_file_uri( '/assets/css/bootstrap.css' ), false, '1.0.0' );
  wp_enqueue_style( 'owl-carousel', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', false, '1.0.0' );
  wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap', false, '1.0.0' );

  // This scripts is loaded in footer.php with function wp_footer() , the last argument is set to true because we wont this functionality
  wp_enqueue_script( 'bootstrap-js', get_theme_file_uri( '/assets/js/bootstrap.js' ), array(), '1.0.0', true );
  wp_enqueue_script( 'bootstrap-js', get_theme_file_uri( '/assets/js/jquery-3.4.1.min.js' ), array('jquery'), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'neogym_assets' );

/**
 * This function register menus for us
 */
function neogym_register_menu()
{
  register_nav_menus(array(
    'primary_menu' => __( 'Primary Menu', 'softuni' ),
    'location'     => __( 'Location', 'softuni' ),
    'phone'        => __( 'Phone', 'softuni' ),
    'email'        => __( 'Email', 'softuni' ),
  ));
}

add_action( 'after_setup_theme', 'neogym_register_menu' );


/**
 * This function register sidebars
 */
function neogym_register_sidebar()
{
	register_sidebar(array(
		'id'            => 'footer-1',
		'name'          => __('Footer 01'),
		'description'   => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
		'before_widget' => '<li id="%1$s" class="widget %2$s" style="list-style: none">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	));

	register_sidebar(array(
		'id'            => 'footer-2',
		'name'          => __('Footer 02'),
		'description'   => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	));

	register_sidebar(array(
		'id'            => 'footer-3',
		'name'          => __('Footer 03'),
		'description'   => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	));
}

add_action( 'widgets_init', 'neogym_register_sidebar' );



// function add_menu_list_item_class($classes, $item, $args) {
//    if (property_exists($args, 'list_item_class')) {
//        $classes[] = $args->list_item_class;
//    }
//    return $classes;
//  }
//  add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);

/**
 * This function list all posts in blog page
 */

function list_all_posts($post_per_page)
{
  $post_query_args = array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => $post_per_page,
    'paged'          => get_query_var('paged'),

  );

  $post_query = new WP_Query($post_query_args);

?>
  <?php if ($post_query->have_posts()) : ?>
    <?php while ($post_query->have_posts()) : $post_query->the_post(); ?>
       <?php get_template_part('partials/content', 'post') ?>
    <?php endwhile; ?>
  <?php endif; ?>
  <?php $GLOBALS['wp_query'] = $post_query; ?>
<?php

}
