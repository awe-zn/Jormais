<main class="container mt-awe-40">
  <div class="featured__posts">
    <?php
    $args2 = array(
      'post_type' => 'post',
      'posts_per_page' => '3',
      'category_name' => 'destaque'
    );

    $the_query = new WP_Query($args2);
    $count = 0;
    ?>
    <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="featured__post">
          <img class="featured__post__image" src="<?php the_post_thumbnail_url(); ?>" alt="">
          <h2 class="featured__post__title">
            <?php the_title(); ?>
          </h2>
        </a>
    <?php endwhile;
    else : endif;
    $count = 0; ?>
  </div>
</main>