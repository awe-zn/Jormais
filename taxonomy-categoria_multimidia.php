<?php get_header() ?>

<main class="container pt-awe-40">
  <h1 class="text-dark-1 fz-26 fz-md-32 fw-extra-bold title-1 m-0">
    Filtragem de especiais pela categoria "<?php single_cat_title(); ?>"
  </h1>

  <div class="mt-awe-32 mb-awe-32 mb-md-2 mt-md-awe-12 row align-items-end gap-3 gap-md-0">
    <div class="col-12 col-md-6">filtre ou pesquise</div>
    <div class="col-12 col-md-6 d-flex justify-content-md-end">
      <?php dynamic_sidebar('busca'); ?>
    </div>
  </div>

  <div class="categories pt-awe-24">
    <?php
    $categories = get_categories('orderby=count&order=DSC&taxonomy=categoria_multimidia');

    foreach ($categories as $value) { ?>
      <?php
      if (single_cat_title(false, false) == $value->name) {
        $active = 'active';
      } else {
        $active = '';
      }
      ?>
      <a href="<?php echo home_url('/'); ?>categoria_multimidia/<?php echo $value->slug; ?>" class="categories__item <?php echo $active; ?>">
        <?php
        echo $value->name;
        ?>
        <span>
          <?php echo $value->count ?>
        </span>
      </a>

    <?php
    }
    ?>
  </div>

  <div class="my-awe-64 row justify-content-center">
    <div class="col-12 col-md-10 col-lg-8">
      <h2 class="text-gray-1 fz-21 fz-md-26 fw-light mb-awe-24">
        Últimos especiais de
        <span class="fw-bold">"<?php single_cat_title(); ?>"</span>
      </h2>
      <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="especial-multimidia__item d-flex flex-column gap-3 text-decoration-none">
            <img class="" src="<?php the_post_thumbnail_url(); ?>" alt="">
            <h3 class="fz-18 m-0">
              <?php the_title(); ?>
            </h3>
            <p class="text-decoration-none text-dark-1 m-0">
              <?php echo get_the_excerpt(); ?>
            </p>
          </a>
      <?php
        endwhile;
      else : endif;
      ?>
    </div>
  </div>
</main>

<?php get_footer() ?>