<?php
  get_header();
?>
<main id="primary" class="site-home">
<?php
  if ( have_posts() ) :
?>
<section id="aboutme"></section>
<section id="slideshow">
  <div class="slideshow-container">
    <h2 class="home-section-title">ÚLTIMAS ENTRADAS</h2>
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

      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
      <div class="slideshow-dots">
        <?php
          for($i = 0; $i < $postscount; $i++) {
            echo('<span class="dot" onclick="currentSlide(' . $i .')"></span>');
          }

        ?>
      </div>
  </div>
  <script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("slide");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</section>
      <?php

    endif;
    ?>
</main>
<?php
  get_footer();


?>
