<?php get_header() ?>

<main class="container pt-awe-40">
  <h1 class="text-dark-1 fz-26 fz-md-32 fw-extra-bold title-1 m-0">
    Filtragem de posts pela tag "<?php single_tag_title(); ?>"
  </h1>

  <div class="mt-awe-32 mb-awe-32 mb-md-2 mt-md-awe-12 row justify-content-end align-items-end gap-3 gap-md-0">
    <div class="col-12 col-md-6 d-flex justify-content-md-end">
      <?php dynamic_sidebar('busca'); ?>
    </div>
  </div>

  <div class="mt-awe-64 row justify-content-center">
    <div class="col-12 col-md-10 col-lg-8">
      <h2 class="text-gray-1 fz-21 fz-md-26 fw-light mb-awe-24">
        Últimos posts de
        <span class="fw-bold">"<?php single_cat_title(); ?>"</span>
      </h2>
      <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>
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
              'total' => $wp_query->max_num_pages,
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