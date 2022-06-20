<?php get_header() ?>

<!-- Destaques -->
<?php include(TEMPLATEPATH . "/inc/featured-posts.php"); ?>


<!-- Últimas notícias -->
<?php include(TEMPLATEPATH . "/inc/latest-posts.php"); ?>

<!-- Especial Multimídia -->
<?php include(TEMPLATEPATH . "/inc/multimedia-special.php"); ?>

<section class="container my-awe-56">
  <hr style="background: #0B8D85;">
  
  <div class="row justify-content-center justify-content-md-start">
    <div class="col-12 col-sm-10 col-md-6">
      <!-- Especial Multimídia -->
      <?php include(TEMPLATEPATH . "/inc/web-stories.php"); ?>
    </div>
    <div class="col-6 col-sm-10 col-md-6">
      <!-- Especial Multimídia -->
      <?php include(TEMPLATEPATH . "/inc/videos.php"); ?>
    </div>
  </div>
  
  <hr style="background: #0B8D85;">
</section>

<?php get_footer() ?>