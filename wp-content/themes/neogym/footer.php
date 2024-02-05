 <!-- info section -->
 <section class="info_section layout_padding2">
   <div class="container">
     <div class="info_items">

       <div class="item ">
         <div class="img-box box-1">
           <img src="" alt="">
         </div>
         <div class="detail-box">
           <p>
             Location
           </p>
           <?php
           dynamic_sidebar( 'footer-1' )
            ?>
         </div>
       </div>

       <div class="item ">
         <div class="img-box box-2">
           <img src="" alt="">
         </div>
         <div class="detail-box">
           <p>
             +02 1234567890
           </p>
           <?php
           dynamic_sidebar( 'footer-2' )
            ?>
         </div>
       </div>

       <div class="item ">
         <div class="img-box box-3">
           <img src="" alt="">
         </div>
         <div class="detail-box">
           <p>
             demo@gmail.com
           </p>
           <?php
           dynamic_sidebar( 'footer-3' )
            ?>
         </div>
       </div>
     </div>
   </div>
 </section>

 <!-- end info_section -->


 <!-- footer section -->
 <footer class="container-fluid footer_section">
   <p>
     &copy; 2020 All Rights Reserved. Design by
     <span>Free Html Templates</span>
   </p>
 </footer>
 <!-- footer section -->

 <?php
  /**
   * Prints scripts or data before the closing body tag on the front end.
   *
   * @since 1.5.1
   */
  wp_footer();
  ?>
 </body>

 </html>