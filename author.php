<?php get_header() ?>

<div class="container fz-16 py-awe-40">
  <div class="row justify-content-center">
    <div class="col-12">
      <nav style="--bs-breadcrumb-divider: '>>';" aria-label="breadcrumb">
        <ol class="breadcrumb m-0 d-flex gap-1">
          <li class="breadcrumb-item">
            <a href="<?php echo home_url('/'); ?>" class="link-gray-2">Home</a>
          </li>
          <li class="breadcrumb-item">
            <a href="<?php echo home_url('/coluna-livre'); ?>" class="link-gray-2">Colunas</a>
          </li>
          <li class="breadcrumb-item text-truncate active" aria-current="page">
            <?php the_author(); ?>
          </li>
        </ol>
      </nav>
    </div>
  </div>
</div>

<main class="container pt-awe-40">
  <div class="d-flex justify-content-center">
    <div class="d-flex flex-column align-items-center gap-awe-16">
      <img class="rounded-circle mb-awe-16" src="<?php echo get_avatar_url(get_the_author_ID(), array('size' => 250)); ?>" alt="">
      <div>
        <p class="fz-18 fw-bold text-dark-2 text-capitalize mb-awe-16 px-awe-16">
          <?php the_author(); ?>
        </p>
        <div class="bg-teal rounded w-100 pt-1"></div>
      </div>
    </div>
  </div>

  <div class="my-awe-64 row justify-content-center">
    <div class="col-12 col-md-10 col-lg-8">
      <h2 class="text-gray-1 fz-21 fz-md-26 fw-light mb-awe-24">
        Últimos posts
      </h2>

      <?php
      $author_posts_args = array(
        'post_type' => 'post',
        'cat' => 103,
        'author' => get_the_author_ID(),
      );

      $author_posts_query = new WP_Query($author_posts_args);
      ?>
      <?php if ($author_posts_query->have_posts()) :
        while ($author_posts_query->have_posts()) : $author_posts_query->the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="d-block text-decoration-none border-top border-light-4 pt-awe-24">
            <div class="text-gray-2 fz-14 mb-awe-12">
              por
              <span class="text-gray-2 fw-bold">
                <?php the_author(); ?>
              </span>,
              publicado em
              <span class="text-gray-3 fw-medium fst-italic">
                <?php echo get_the_date('d.M.y'); ?>
              </span>
            </div>
            <h3 class="text-dark-1 fw-bold lh-160 fz-16 fz-md-21 text-decoration-underline-hover">
              <?php the_title(); ?>
            </h3>
          </a>
      <?php
        endwhile;
      else : endif;
      ?>
    </div>
  </div>
</main>

<?php get_footer() ?>