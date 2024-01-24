<?php get_header(); ?>

<?php if( have_posts()) : ?>
    <?php while (have_posts()) :  the_post(); ?>

    <section class="us_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    <?php the_title(); ?>
                </h2>
            </div>

            <div class="us_container ">
                <div class="row">

                    <div class="box">
                        <!-- <div class="img-box">
                            <img src="images/u-3.png" alt="">
                        </div> -->
                        <div class="detail-box">
                            <div class="content-wrapper">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <?php endwhile; ?>
   
<?php endif;?>

<?php get_footer();?>