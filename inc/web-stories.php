<div class="pt-awe-16">
  <h2 class="text-teal fz-28 mb-awe-24">
    WEBSTORIES
  </h2>

  <div class="web-stories d-flex gap-awe-16">
    <?php
    $web_story_args = array(
      'post_type' => 'web-story',
      'posts_per_page' => '2'
    );
    $the_query = new WP_Query($web_story_args);
    ?>

    <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
      <a href="<?php the_permalink(); ?>" class="web-story">
        <img class="web-story__image" src="<?php the_post_thumbnail_url(); ?>" alt="">
        <h4 class="web-story__title text-truncate">
          <?php the_title(); ?>
        </h4>
      </a>
    <?php
      endwhile;
    else : endif; ?>

  </div>
  <div class="pt-awe-32">
    <a href="<?php echo home_url('/webstories'); ?>" class="button-1">
      Veja mais
    </a>
  </div>

</div>