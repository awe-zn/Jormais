<?php
// Template Name: podcasts
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
            Podcasts
          </li>
        </ol>
      </nav>
    </div>
  </div>
</div>

<main class="container">
  <div class="mt-awe-32 mb-awe-32 mb-md-2 mt-md-awe-12 row align-items-end gap-3 gap-md-0">
    <div class="col-12 col-md-6">filtre ou pesquise</div>
    <div class="col-12 col-md-6 d-flex justify-content-md-end">
      <?php dynamic_sidebar('busca'); ?>
    </div>
  </div>

  <div class="categories pt-awe-24">
    <?php
    $categories = get_categories('orderby=count&order=DSC&taxonomy=categoria_podcast');

    foreach ($categories as $value) { ?>
      <?php
      if (single_cat_title(false, false) == $value->name) {
        $active = 'active';
      } else {
        $active = '';
      }
      ?>
      <a href="<?php echo home_url('/');?>categoria_podcast/<?php echo $value->slug; ?>" class="categories__item <?php echo $active; ?>">
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

  <div class="mt-awe-64 row justify-content-center">
    <div class="col-12 col-md-10 col-lg-8">
      <h2 class="text-gray-1 fz-21 fz-md-26 fw-light mb-awe-24">
        Últimos podcasts
      </h2>
      <?php
      $args = array(
        'post_type' => 'podcast',
        'posts_per_page' => '6',
        'paged'    => get_query_var('paged') ? get_query_var('paged') : 1
      );
      $the_query = new WP_Query($args);
      ?>
      <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <div class="podcast">
            <?php the_content(); ?>
          </div>
      <?php endwhile;
      else : endif; ?>
    </div>
  </div>

  <div class="row justify-content-center mt-awe-32">
    <div class="col-12 col-md-10 col-lg-8">
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