<?php /* Template Name: Trainers */ ?> 
<?php get_header(); ?>


<section class="trainer_section layout_padding">
      <div class="container">
        <div class="heading_container">
          <h2>
            <a id="trainer-heading" href="<?php echo site_url('/our-trainers') ?>">
              Our Gym Trainers
            </a>
          </h2>
        </div>
        <div class="row">
          <?php if (class_exists('CustomPostTypeLister')) : ?>
            <?php
            $trainer_lister = new CustomPostTypeLister('trainer');
            $trainer_lister->list_posts(3);
            ?>
          <?php endif; ?>
        </div>
      </div>
    </section>

<?php get_footer(); ?>