<?php
//Here is generic functions of custom plugin

add_theme_support( 'post-thumbnails' );

/**
 * This function list all post from custom post type 'trainer'
 */
function list_all_trainers( $post_per_page ) {
 
     $trainer_query_args = array(
        'post_type'      => 'trainer',
        'post_status'    => 'publish',
        'post_per_page'  => $post_per_page,
        'paged'          => get_query_var('paged'),
       
     );
 
    $trainer_query = new WP_Query( $trainer_query_args );
 
    ?>
    <?php if( $trainer_query->have_posts() ) : ?>
       <?php while( $trainer_query->have_posts() ) : $trainer_query->the_post(); ?>
         <?php get_template_part( 'partials/content', 'trainer' ) ?>
       <?php endwhile; ?>
    <?php endif; ?>
    <?php
 
 }