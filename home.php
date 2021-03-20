<?php
  get_header();
?>
<main id="primary" class="site-home">
<?php
  if ( have_posts() ) :
    wp_enqueue_script( "slideshow", get_template_directory_uri() .  "/js/slideshow.js");

?>
<section id="aboutme"></section>
<section id="slideshow">
  <div class="slideshow-container">
    <h2 class="home-section-title to-the-right">ÚLTIMAS ENTRADAS</h2>
  <?php
      $postscount = 0;

      for ($i = 0; $i < 5; $i++ ){ //TODO: ideally the number of posts would be configurable
        if(!have_posts())
          break;

        $postscount++;
        the_post();

        get_template_part( 'template-parts/content', 'home' );
      }
      ?>

      <input name="slideshow-prev" type="button" class="prev button" onclick="plusSlides(-1)" value="&#10094;">
      <input name="slideshow-next" type="button" class="next button" onclick="plusSlides(1)" value="&#10095;">
      <div class="slideshow-dots">
        <?php
          for($i = 0; $i < $postscount; $i++) {
            echo('<span class="dot" onclick="currentSlide(' . $i .')"></span>');
          }

        ?>
      </div>
  </div>
</section>
      <?php

    endif;
    ?>
</main>
<?php
  get_footer();


?>
