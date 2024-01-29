<div class="col-lg-3 col-md-6">
    <div class="box">
        <h5>
            <?php the_title(); ?>
        </h5>
        <div id="img-box">
            <div id="blog-img">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('post-thumbnail'); ?>
                </a>
            </div>
            <!-- <img src="images/u-1.png" alt=""> -->
        </div>
        <div class="detail-box">

            <p id="read-more">
                <?php echo wp_trim_words(get_the_content(), 6) ?>
                <span class="author"> Posted by <?php the_author_posts_link(); ?></span>
                <span class="author"> on <?php the_time('n/M/Y') ?></span>
                <a href="<?php the_permalink(); ?>" class="read-more-a">Read more &raquo;</a>
            </p>
        </div>
    </div>
</div>