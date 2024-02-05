<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) :  the_post(); ?>
     <section class="heathy_section layout_padding">
    <div class="container">

      <div class="row healthy-row">
        <div class="col-md-12 mx-auto">
          <div class="detail-box">
            <h2>
              <?php the_title(); ?>
            </h2>
            <p>
              <?php the_content(); ?>
            </p>
          </div>
        </div>
      </div>

    </div>
  </section>
      
        <?php endwhile; ?>

    <?php endif; ?>

        <?php get_footer(); ?>