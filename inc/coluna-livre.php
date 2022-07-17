<div class="pt-awe-16">
  <h2 class="text-teal fz-28 mb-awe-24 text-uppercase">
    COLUNA LIVRE
  </h2>

  <div class="d-flex flex-column gap-awe-24">

    <?php
    $args = array(
      'role__not_in' => 'Subscriber',
    );
    $user_query = new WP_User_Query($args);

    if (!empty($user_query->get_results())) {
      foreach ($user = $user_query->get_results() as $user) { ?>
        <div class="d-flex gap-awe-32">
          <div>
            <img src="<?php echo get_avatar_url(get_the_author_ID(), array('size' => 100)); ?>" class="rounded-circle" alt="">
          </div>
          <div>
            <?php
            $author_posts_args = array(
              'post_type' => 'post',
              'posts_per_page' => '1',
              'cat' => 103,
              'author' => $user->ID
            );

            $author_posts_query = new WP_Query($author_posts_args);
            ?>
            <?php if ($author_posts_query->have_posts()) : while ($author_posts_query->have_posts()) : $author_posts_query->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="text-decoration-none d-flex flex-column gap-awe-8 justify-content-center">
                  <p class="text-dark-2 fz-16 text-capitalize m-0">
                    <?php the_author(); ?>
                  </p>
                  <h3 class="fz-18 fw-bold text-teal m-0">
                    <?php the_title(); ?>
                  </h3>
                  <div class="text-gray-3 fz-12">
                    publicado em <?php echo get_the_date(); ?>
                  </div>
                </a>
            <?php endwhile;
            else : endif; ?>
          </div>
        </div>

    <?php  }
    } else {
      echo 'No users found.';
    } ?>

  </div>

  <div class="pt-awe-32">
    <a href="<?php echo home_url('/coluna-livre'); ?>" class="button-1">
      Veja mais
    </a>
  </div>

</div>