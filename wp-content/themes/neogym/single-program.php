<?php get_header(); ?>

<!-- heathy section -->
<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
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

              <div class="btn-box">
                <a class="program_joined" href="" data-post-id="<?php echo get_the_ID(); ?>">
                  JOIN TO PROGRAM
                </a>
                <div class="joined-wrapper">
                  <span>JOINED PEOPLE</span>
                  <span class="joined-span"><?php echo get_post_meta( get_the_ID(), 'joined', true) ?></span>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>