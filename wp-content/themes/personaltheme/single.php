<?php get_header();
if (have_posts()) {
  while (have_posts()) {
    the_post();

?>
    <!-- ***** Testimonials Start ***** -->
    <section class="section" id="testimonials">
      <div class="container">
        <!-- ***** Section Title Start ***** -->
        <div class="row">
          <div class="col-lg-12">
            <div class="center-heading">
              <h2 class="section-title"><?php the_title() ?></h2>
            </div>
          </div>
        </div>
        <!-- ***** Section Title End ***** -->

        <div class="row">
          <!-- ***** Testimonials Item Start ***** -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="team-item">
              <div class="team-content p-3">
                <?php the_content() ?>
                <div class="user-image">
                  <img src="<?php get_theme_file_uri("http://placehold.it/60x60") ?>" alt="">
                </div>
                <div class="team-info">
                  <h3 class="user-name">Catherine Soft</h3>
                  <span>Managing Director</span>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Testimonials Item End ***** -->
    </section>
    <!-- ***** Testimonials End ***** -->
<?php      } // end while
} else {
  echo ("No post avaible");
} // end if 
get_footer();
?>