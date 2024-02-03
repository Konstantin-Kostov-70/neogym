<div class="col-lg-3 col-md-6">
    <div class="box">
        <div class="img-box">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('post-thumbnail'); ?>
            </a>
        </div>
        <div class="detail-box">
            <h5>
                <?php the_title(); ?>
            </h5>
            <p>
            <?php echo wp_trim_words(get_the_content(), 10); ?>
            <span><a href="<?php echo get_permalink(); ?>">Read More</a></span>
            </p>
        </div>
    </div>
</div>