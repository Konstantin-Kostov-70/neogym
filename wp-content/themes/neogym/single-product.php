<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <section class="heathy_section layout_padding">
      <div class="container">

        <div class="single">
          <div class="col-md-12 mx-auto">
            <div class="detail-box">
              <h1>
                <?php the_title(); ?>
              </h1>
              <div class="single-image">
                <?php the_post_thumbnail( 'post-thumbnail' ); ?>
              </div>
              <p>
              <?php echo wp_trim_words(get_the_content(), 10); ?>
              </p>
            </div>
          </div>
        </div>

      </div>
    </section>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>