<?php
  get_header();
?>
<main id="primary" class="site-home">
<?php
  if ( have_posts() ) :
?>
<section id="aboutme"></section>
<section id="slideshow">
  <h2 class="home-section-title">ÚLTIMAS ENTRADAS</h2>
  <?php
      for ($i = 1; $i <= 5; $i++ ){
        the_post();

        get_template_part( 'template-parts/content', 'home' );
      }
      ?>
</section>
      <?php

    endif;
    ?>
</main>
<?php
  get_footer();
?>
