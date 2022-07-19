<div class="pt-awe-16">
  <h2 class="text-teal fz-28 mb-awe-24">
    AS + MAIS DO JORMAIS
  </h2>

  <?php
  $the_best_posts_args = array(
    'post_type' => 'post',
    'posts_per_page' => '4',
    'orderby' => 'relevance'
  );
  $the_query = new WP_Query($the_best_posts_args);
  ?>
  <div class="best-posts">
    <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="best-posts__post">
          <h4 class="best-posts__title fz-16 fw-bold mb-awe-8 lh-150">
            <?php the_title(); ?>
          </h4>
          <span class="best-posts__author fz-16 fw-bold text-uppercase">
            <?php the_author(); ?>
          </span>
          <span class="best-posts__date fz-16">
            <?php echo get_the_date('d.M.y'); ?>
          </span>
        </a>
    <?php
      endwhile;
    else : endif; ?>
  </div>

  <div class="pt-awe-32">
    <a href="<?php echo home_url('/posts'); ?>" class="button-1">
      Veja mais
    </a>
  </div>

</div>