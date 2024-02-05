<?php get_header(); ?>

<!-- heathy section -->


<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post() ?>

    <section class="heathy_section layout_padding">
      <div class="container">

        <div class="single">
          <div class="col-md-12 mx-auto">
            <div class="detail-box gym-heading">
              <h1>
                <?php the_title(); ?>
              </h1>
              <div class="carousel-img single-image gym-item">
                <?php the_post_thumbnail( 'post-thumbnail' ); ?>
              </div>
              <h2>
                <?php
                 the_content();
                 ?>
              </h2>
            </div>
          </div>
        </div>

      </div>
    </section>

  <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>