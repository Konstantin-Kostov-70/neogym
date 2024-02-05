<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>
<!-- slider section -->
<section class=" slider_section position-relative">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">

      <section class="slider_section position-relative">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <?php
            $args = array(
              'post_type'      => 'gym',
              'post_status'    => 'publish',
              'posts_per_page' => 5,
            );

            $query = new WP_Query( $args );
            $counter = 0;

            while ( $query->have_posts() ) : $query->the_post();
              $active_class = ( $counter === 0 ) ? 'active' : '';
            ?>
              <div class="carousel-item <?php echo esc_attr( $active_class ); ?>">
                <div class="container">
                  <div class="col-lg-10 col-md-11 mx-auto">
                    <div class="detail-box">
                      <div>
                        <h1><?php the_title(); ?></h1>
                        <p><?php the_content(); ?></p>
                        <div>
                          <div class="carousel-img img-box">
                            <!-- <a href="<?php the_permalink(); ?>"> -->
                            <?php the_post_thumbnail( 'post-thumbnail' ); ?>
                            <!-- </a> -->
                          </div>
                          <a href="<?php the_permalink(); ?>">Contact Us</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php
              $counter++;
            endwhile;

            // Restore global post data
            wp_reset_postdata();
            ?>
          </div>
          <ol class="carousel-indicators">
            <?php for ( $i = 0; $i < $counter; $i++ ) : ?>
              <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo esc_attr( $i ); ?>" class="<?php echo ( $i === 0 ) ? 'active' : ''; ?>"></li>
            <?php endfor; ?>
          </ol>
        </div>
      </section>

      <!-- <div class="carousel-item active">
        <div class="container">
          <div class="col-lg-10 col-md-11 mx-auto">
            <div class="detail-box">
              <div>
                <h3>
                  Fitness
                </h3>
                <h2>
                  Training
                </h2>
                <h1>
                  Neogym
                </h1>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                </p>
                <div class="">
                  <a href="">
                    Contact Us
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="col-lg-10 col-md-11 mx-auto">
            <div class="detail-box">
              <div>
                <h3>
                  Fitness
                </h3>
                <h2>
                  Training
                </h2>
                <h1>
                  Neogym
                </h1>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                </p>
                <div class="">
                  <a href="">
                    Contact Us
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="col-lg-10 col-md-11 mx-auto">
            <div class="detail-box">
              <div>
                <h3>
                  Fitness
                </h3>
                <h2>
                  Training
                </h2>
                <h1>
                  Neogym
                </h1>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                </p>
                <div class="">
                  <a href="">
                    Contact Us
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="col-lg-10 col-md-11 mx-auto">
            <div class="detail-box">
              <div>
                <h3>
                  Fitness
                </h3>
                <h2>
                  Training
                </h2>
                <h1>
                  Neogym
                </h1>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                </p>
                <div class="">
                  <a href="">
                    Contact Us
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="col-lg-10 col-md-11 mx-auto">
            <div class="detail-box">
              <div>
                <h3>
                  Fitness
                </h3>
                <h2>
                  Training
                </h2>
                <h1>
                  Neogym
                </h1>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                </p>
                <div class="">
                  <a href="">
                    Contact Us
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>
    </div>
</section> -->
      <!-- end slider section -->
    </div>

    <!-- Us section -->

    <section class="us_section layout_padding">
      <div class="container">
        <div class="heading_container">
          <h2>
            Why Choose Us
          </h2>
        </div>

        <div class="us_container ">
          <div class="row">
            <?php if ( class_exists( 'CustomPostTypeLister' ) ) : ?>
              <?php
              $products_homepage_post_per_page = get_option( 'products_homepage_post_per_page' );
              if ( empty( $products_homepage_post_per_page ) ) {
                $products_homepage_post_per_page = 2;
              }
              $product_lister = new CustomPostTypeLister( 'product' );
              $product_lister->list_posts( $products_homepage_post_per_page );
              ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>

    <!-- end us section -->


    <!-- heathy section -->
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

    <!-- end heathy section -->

    <!-- trainer section -->

    <section class="trainer_section layout_padding">
      <div class="container">
        <div class="heading_container">
          <h2>
            <a id="trainer-heading" href="<?php echo site_url( '/our-trainers' ) ?>">
              Our Gym Trainers
            </a>
          </h2>
        </div>
        <div class="row">
          <?php if ( class_exists( 'CustomPostTypeLister' ) ) : ?>
            <?php
            $trainer_lister = new CustomPostTypeLister( 'trainer' );
            $trainer_lister->list_posts(3);
            ?>
          <?php endif; ?>
        </div>
      </div>
    </section>

    <!-- end trainer section -->

    <?php wp_reset_postdata(); ?>
    <?php get_footer(); ?>