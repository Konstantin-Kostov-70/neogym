<?php /* Template Name: Contact */ ?> 
<?php get_header(); ?>
 
 <!-- contact section -->

 <section class="contact_section ">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="<?php echo get_theme_file_uri('/assets/images/contact-img.jpg') ?>" alt="">
          </div>
        </div>
        <div class="col-lg-5 col-md-6">
          <div class="form_container pr-0 pr-lg-5 mr-0 mr-lg-2">
            <div class="heading_container contact">
              <h2>
                Contact Us
              </h2>
            </div>
            <?php echo do_shortcode('[wpforms id="280"]');?>
            <!-- <form action="">
              <div>
                <input type="text" placeholder="Name" />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" placeholder="Phone Number" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="d-flex ">
                <button>
                  Send
                </button>
              </div>
            </form> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  

<?php get_footer(); ?>