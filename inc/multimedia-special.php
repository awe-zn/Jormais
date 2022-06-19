<?php
$args5 = array(
  'post_type' => 'post',
  'posts_per_page' => '1',
  'category_name' => 'especial-multimidia'
);

$the_query = new WP_Query($args5);
$count = 0;
?>
<?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
    <section class="container">
      <a href="<?php the_permalink(); ?>" class="especial-multimidia text-decoration-none">
        <div class="position-relative">
          <img class="" src="<?php the_post_thumbnail_url(); ?>" alt="">
          <div class="especial-multimidia__filter position-absolute w-100 h-100 top-0"></div>
          <span class="especial-multimidia__badge">
            ESPECIAL MULTIMÍDIA
          </span>
        </div>
        <div class="pt-3 p-lg-3 especial-multimidia__title">
          <h2 class="">
            <?php the_title(); ?>
          </h2>
        </div>
      </a>
    </section>
<?php endwhile;
else : endif;
$count = 0; ?>