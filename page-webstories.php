<?php
// Template Name: webstories
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
            Webstories
          </li>
        </ol>
      </nav>
    </div>
  </div>
</div>

<main class="container">
  <h1 class="text-dark-1 fz-26 fz-md-32 fw-extra-bold title-1 m-0">
    Webstories
  </h1>

  <div style="background: #F0F9FA;" class="py-awe-32 d-none d-sm-flex justify-content-center gap-awe-16 mt-awe-16">
    <?php
    $web_stories_args = array(
      'post_type' => 'web-story',
      'posts_per_page' => '5'
    );
    $the_query = new WP_Query($web_stories_args);
    ?>

    <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="web-stories-recentes__item">
          <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="">
        </a>
    <?php endwhile;
    else : endif; ?>
  </div>

  <div class="mt-awe-64 web-stories">
    <?php
    $web_stories_args_2 = array(
      'post_type' => 'web-story',
      'posts_per_page' => '9',
      'paged'    => get_query_var('paged') ? get_query_var('paged') : 1
    );
    $the_query_2 = new WP_Query($web_stories_args_2);
    ?>
    <?php if ($the_query_2->have_posts()) : while ($the_query_2->have_posts()) : $the_query_2->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="web-stories__item overflow-hidden position-relative" style="height: 446px;">
          <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="">
          <div class="position-absolute bottom-0 bg-teal p-3 w-100">
            <h3 class="text-white fz-22 fw-bold m-0 text-truncate" title="<?php the_title(); ?>">
              <?php the_title(); ?>
            </h3>
          </div>
        </a>
    <?php endwhile;
    else : endif; ?>
  </div>

  <div class="row justify-content-center mt-awe-32">
    <div class="col-12">
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