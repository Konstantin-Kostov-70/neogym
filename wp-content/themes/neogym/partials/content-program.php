 <div class="row">
     <div class="col-md-12 mx-auto">
         <div class="detail-box">
             <h2>
                 <?php the_title(); ?>
             </h2>
             <p>
                 <?php echo wp_trim_words(get_the_content(), 30); ?>
             </p>
             <div class="btn-box">
                 <a href="<?php echo get_permalink(); ?>">
                     READ MORE
                 </a>
             </div>
         </div>
     </div>
 </div>
 <hr id="program">