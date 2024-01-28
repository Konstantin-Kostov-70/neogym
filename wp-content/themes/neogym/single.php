<?php get_header(); ?>

<!-- heathy section -->
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <section class="heathy_section layout_padding">
      <div class="container">

        <div class="single">
          <div class="col-md-12 mx-auto">
            <div class="detail-box">
              <h2>
                <?php the_title(); ?>
              </h2>
              <div class="single-image">
                <?php the_post_thumbnail('post-thumbnail'); ?>
              </div>
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

<!-- end heathy section -->



<!-- contact section -->


<!-- end contact section -->



<?php get_footer(); ?>