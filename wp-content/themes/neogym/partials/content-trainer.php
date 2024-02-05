
<div class="col-lg-4 col-md-6 mx-auto">
          <div class="box">
            <div class="name">
              <h5>
                <?php the_title(); ?>
              </h5>
            </div>
            <div class="img-box">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('post-thumbnail'); ?>
                </a>
            </div>
            <div id="home-page-social" class="social_box">
              <a href="">
                <img src="<?php echo get_theme_file_uri('/assets/images/facebook-logo.png') ?>" alt="">
              </a>
              <a href="">
                <img src="<?php echo get_theme_file_uri('/assets/images/twitter.png') ?>" alt="">
              </a>
              <a href="">
                <img src="<?php echo get_theme_file_uri('/assets/images/instagram-logo.png') ?>" alt="">
              </a>
            </div>
          </div>
        </div>