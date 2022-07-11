<div class="pt-awe-16">
  <h2 class="text-teal fz-28 mb-awe-24">
    PODCASTS
  </h2>

  <?php
  $podcasts_args = array(
    'post_type' => 'podcast',
    'posts_per_page' => '1'
  );
  $the_query = new WP_Query($podcasts_args);
  ?>

  <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
      <div class="podcast">
        <?php the_content(); ?>
      </div>
  <?php
    endwhile;
  else : endif; ?>

  <div class="">
    <a href="<?php echo home_url('/podcasts'); ?>" class="button-1">
      Veja mais
    </a>
  </div>

</div>