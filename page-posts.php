<?php
// Template Name: posts
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
            Posts
          </li>
        </ol>
      </nav>
    </div>
  </div>
</div>

<main class="container">
  <h1 class="text-dark-1 fz-26 fz-md-32 fw-extra-bold title-1 m-0">
    Você está vendo os posts mais recentes
  </h1>

  <div class="mt-awe-32 mb-awe-32 mb-md-2 mt-md-awe-12 row align-items-end gap-3 gap-md-0">
    <div class="col-12 col-md-6">filtre ou pesquise</div>
    <div class="col-12 col-md-6 d-flex justify-content-md-end">
      <?php dynamic_sidebar('busca');?>
    </div>
  </div>

  <h2 class="text-gray-1 fz-21 fz-md-26 fw-light m-0">
    Categorias com mais visualizações
  </h2>

  <div class="categories pt-awe-24">
    <?php if (array_key_exists('c', $_GET)) { ?>
      <?php include(TEMPLATEPATH . "/inc/search-categoria.php"); ?>
    <?php } else { ?>
      <?php include(TEMPLATEPATH . "/inc/filtro-categorias.php"); ?>
    <?php } ?>
  </div>

  <div class="mt-awe-64 row justify-content-center">
    <div class="col-12 col-md-10 col-lg-8">
      <h2 class="text-gray-1 fz-21 fz-md-26 fw-light mb-awe-24">
        Últimos posts
      </h2>
      <?php
        $args3 = array(
          'post_type' => 'post',
          'posts_per_page' => '15',
          'paged'    => get_query_var('paged') ? get_query_var('paged') : 1
        );
        $the_query = new WP_Query($args3);  
      ?>
      <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
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