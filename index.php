<?php get_header() ?>

<!-- Destaques -->
<?php include(TEMPLATEPATH . "/inc/featured-posts.php"); ?>


<!-- Últimas notícias -->
<?php include(TEMPLATEPATH . "/inc/latest-posts.php"); ?>

<section class="container mt-awe-56 mb-awe-16">

  <div class="row gap-awe-32 gap-md-0">
    <div class="col-12 col-md-6">
      <!-- Podcasts -->
      <?php include(TEMPLATEPATH . "/inc/podcasts.php"); ?>
    </div>
    <div class="col-6 col-md-6">
      <!-- Coluna livre -->
      <?php include(TEMPLATEPATH . "/inc/coluna-livre.php"); ?>
    </div>
  </div>

  <hr class="mt-awe-56" style="background: #0B8D85;">
</section>

<!-- Especial Multimídia -->
<?php include(TEMPLATEPATH . "/inc/multimedia-special.php"); ?>

<section class="container mt-awe-56 mb-awe-16">
  <hr style="background: #0B8D85;">

  <div class="row gap-awe-32 gap-md-0">
    <div class="col-12 col-md-6">
      <!-- Web stories -->
      <?php include(TEMPLATEPATH . "/inc/web-stories.php"); ?>
    </div>
    <div class="col-12 col-md-6">
      <!-- Vídeos -->
      <?php include(TEMPLATEPATH . "/inc/videos.php"); ?>
    </div>
  </div>

  <hr class="mt-awe-56" style="background: #0B8D85;">
</section>

<section class="container mb-awe-80">
  <div class="row justify-content-center justify-content-md-start gap-awe-32 gap-xxl-0">
    <div class="col-12 col-lg-12 col-xxl-8">
      <!-- As + do JorMais -->
      <?php include(TEMPLATEPATH . "/inc/the_best_posts.php"); ?>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
      <!-- Revista tabu -->
      <?php include(TEMPLATEPATH . "/inc/magazine.php"); ?>
    </div>
  </div>
</section>

<?php get_footer() ?>