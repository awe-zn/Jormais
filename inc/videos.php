<div class="pt-awe-16">
  <h2 class="text-teal fz-28 mb-awe-24">
    VÍDEOS
  </h2>

  <style>
    .video .play {
      background: url(<?php echo get_template_directory_uri(); ?>/dist/img/icons/play.svg) no-repeat center center;
    }

    .video .play:hover {
      background: url(<?php echo get_template_directory_uri(); ?>/dist/img/icons/play-hover.svg) no-repeat center center;
    }
  </style>

  <?php
  $video_args = array(
    'post_type' => 'post_videos',
    'posts_per_page' => '1'
  );
  $the_query = new WP_Query($video_args);
  ?>

  <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

      <?php
        $video_link = get_field('link');
        $video_id = str_replace('https://youtu.be/', "", $video_link);
        $video_image_link = 'https://img.youtube.com/vi/' . $video_id . '/maxresdefault.jpg';
      ?>

      <a href="<?php the_field('link'); ?>" target="_blank" class="video destaque">
        <img src="<?php echo $video_image_link; ?>" class="img-fluid" alt="">
        <div class="filter"></div>
      </a>
  <?php endwhile;
  else : endif; ?>

  <div class="pt-awe-32">
    <a href="<?php echo home_url('/videos'); ?>" class="button-1">
      Veja mais
    </a>
  </div>

</div>