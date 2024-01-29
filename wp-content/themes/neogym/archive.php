 
<?php get_header(); ?>


<!-- Us section -->

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
            <?php get_template_part('partials/content', 'post') ?>
            <?php endwhile; ?>
          <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="paginator">
          <?php echo paginate_links(); ?>
      </div>
</section>

<!-- end us section -->

<!-- heathy section -->

<section class="heathy_section layout_padding">
  <div class="container">

    <div class="row">
      <div class="col-md-12 mx-auto">
        <div class="detail-box">
          <h2>
            HEALTHY MIND, HEALTHY BODY
          </h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillumLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
          </p>
          <div class="btn-box">
            <a href="">
              READ MORE
            </a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>