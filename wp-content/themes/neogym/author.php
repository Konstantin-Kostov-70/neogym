 
<?php get_header(); ?>

  <section class="us_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
         <?php the_archive_title(); ?>
        </h2>
      </div>

      <div class="us_container ">
        <div class="row">
          <?php if( have_posts() ) : ?>
            <?php while( have_posts() ) : the_post(); ?>
              <?php get_template_part( 'partials/content', 'post' ) ?>
              <?php endwhile; ?>
            <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="paginator">
            <?php echo paginate_links(); ?>
        </div>
  </section>
 
<?php get_footer(); ?>