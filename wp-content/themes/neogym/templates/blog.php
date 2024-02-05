<?php /* Template Name: Blog */ ?> 
<?php get_header(); ?>


  <!-- Us section -->

  <section class="us_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Posts
        </h2>
      </div>

      <div class="us_container ">
        <div class="row">
          <?php if ( class_exists('CustomPostTypeLister') ) : ?>
            <?php 
              $post_lister = new CustomPostTypeLister( 'post' );
              $post_lister->list_posts(8); 
            ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="paginator">
            <?php echo paginate_links(); ?>
        </div>
  </section>

  <section class="heathy_section layout_padding">
      <div class="container">
        <div class="heading_container program-heading">
          <h2>BUILDING PROGRAMS</h2>
        </div>
        <?php if ( class_exists( 'CustomPostTypeLister' ) ) : ?>
          <?php
          $program_lister = new CustomPostTypeLister( 'program' );
          $program_lister->list_posts(2);
          ?>
        <?php endif; ?>
      </div>
    </section>

<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>