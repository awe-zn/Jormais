<section class="container mt-awe-80">
  <hr style="background: #0B8D85;">

  <h3 class="text-teal fz-26 fz-md-40 fw-bold m-0">
    Últimas notícias
  </h3>

  <div class="mt-awe-80 top-posts">
    <?php
    $args3 = array(
      'post_type' => 'post',
      'posts_per_page' => '8'
    );
    $the_query = new WP_Query($args3);
    ?>

    <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <?php
        $postcat = get_the_category($post->ID);
        if (!empty($postcat) && $postcat[0]->slug != 'destaque' && $postcat[0]->slug != 'especial-multimidia') {
        ?>
          <a href="<?php the_permalink(); ?>" class="top-posts__post">
            <img class="top-posts__post__image" src="<?php the_post_thumbnail_url(); ?>" alt="">
            <?php
            if (!empty($postcat)) { ?>
              <div class="top-posts__post__category cat__<?php echo $postcat[0]->slug ?>">
                <?php echo esc_html($postcat[0]->name); ?>
              </div>
            <?php } ?>
            <div class="mt-awe-12">
              <h4 class="text-pine-tree fz-16 fw-bold mb-awe-8 lh-150">
                <?php the_title() ?>
              </h4>
              <span class="text-gray-1 fz-16 fw-bold text-uppercase">
                <?php the_author(); ?>
              </span>
              <span class="text-light-2 fz-16">
                <?php echo get_the_date('d.M.y'); ?>
              </span>
            </div>
          </a>
    <?php }
      endwhile;
    else : endif; ?>
  </div>

  <div class="d-flex justify-content-end pt-awe-32">
    <a href="<?php echo home_url('/posts'); ?>" class="button-1">
      Veja mais
    </a>
  </div>

  <hr style="background: #0B8D85;">
</section>