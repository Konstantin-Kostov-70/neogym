<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <section class="heathy_section layout_padding">
      <div class="container">

        <div class="single">
          <div class="col-md-12 mx-auto">
            <div class="detail-box">
              <h1>
                <?php the_title(); ?>
              </h1>
              <div class="single-image">
                <?php the_post_thumbnail('post-thumbnail'); ?>
              </div>
              <p>
                <?php the_content(); ?>
              </p>
              <p> Category:
                <span class="trainer-cat">
                  <?php
                  $terms = get_the_terms(get_the_ID(), 'trainer-category');
                  foreach ($terms as $term) {
                    echo $term->name;
                  }
                  ?>
                </span>
              </p>
            </div>
          </div>
        </div>

      </div>
    </section>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>