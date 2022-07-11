<?php
// Template Name: videos
?>
<?php get_header() ?>

<div class="container fz-16 py-awe-40">
  <div class="row justify-content-center">
    <div class="col-12">
      <nav style="--bs-breadcrumb-divider: '>>';" aria-label="breadcrumb">
        <ol class="breadcrumb m-0 d-flex gap-1">
          <li class="breadcrumb-item">
            <a href="<?php echo home_url('/'); ?>" class="link-gray-2">Home</a>
          </li>
          <li class="breadcrumb-item text-truncate active" aria-current="page">
            Vídeos
          </li>
        </ol>
      </nav>
    </div>
  </div>
</div>

<main class="container">
  <h1 class="text-dark-1 fz-26 fz-md-32 fw-extra-bold title-1 m-0">
    Vídeos
  </h1>

  <style>
    .video .play {
      background: url(<?php echo get_template_directory_uri(); ?>/dist/img/icons/play.svg) no-repeat center center;
    }

    .video .play:hover {
      background: url(<?php echo get_template_directory_uri(); ?>/dist/img/icons/play-hover.svg) no-repeat center center;
    }
  </style>

  <div class="videos mt-awe-16">
    <?php
    $args = array(
      'post_type' => 'post_videos',
      'posts_per_page' => '10',
      'paged'    => get_query_var('paged') ? get_query_var('paged') : 1,
    );
    $the_query = new WP_Query($args);
    ?>
    <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <a href="<?php the_field('link'); ?>" target="_blank" class="video destaque">
          <img src="<?php the_field('imagem_da_capa'); ?>" class="img-fluid" alt="">
          <div class="filter"></div>
          <div class="play"></div>
          <div class="title text-truncate" title="<?php echo get_the_title(); ?>">
            <?php the_title(); ?>
          </div>
        </a>
    <?php endwhile;
    else : endif; ?>
  </div>

  <div class="row justify-content-center mt-awe-32">
    <div class="col-12 ">
      <div class="border-top border-light-4 pt-awe-56">
        <nav>
          <ul class="pagination fz-21 lh-160 py-awe-24">
            <?php
            echo paginate_links(array(
              'base' => str_replace(999999999, '%#%', get_pagenum_link(999999999)),
              'format' => '?paged=%#%',
              'current' => max(1, get_query_var('paged')),
              'total' => $the_query->max_num_pages,
              'prev_next' => false,
              'show_all' => false,
              'mid_size' => 2,
              'end_size' => 1
            )); ?>
          </ul>
        </nav>
      </div>
    </div>
  </div>

</main>

<?php get_footer() ?>