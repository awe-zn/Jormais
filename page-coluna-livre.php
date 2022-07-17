<?php
// Template Name: coluna-livre
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
            Colunas
          </li>
        </ol>
      </nav>
    </div>
  </div>
</div>

<main class="container">

  <h1 class="text-dark-1 fz-26 fz-md-32 fw-extra-bold title-1 m-0">
    Você está vendo os posts da coluna livre
  </h1>

  <div class="my-awe-64 d-flex flex-column gap-awe-64">
    <?php
    $args = array(
      'role__not_in' => 'Subscriber',
    );
    $user_query = new WP_User_Query($args);

    if (!empty($user_query->get_results())) {
      foreach ($user_query->get_results() as $user) { ?>
        <div class="row">
          <div class="col-12 col-lg-2">
            <a href="<?php echo home_url('/author'); ?>/<?php echo $user->display_name; ?>" class="d-flex flex-column align-items-center gap-awe-16 text-decoration-none">
              <img class="rounded-circle" src="<?php echo get_avatar_url($user->ID, array('size' => 150)); ?>" alt="">
              <p class="text-teal text-capitalize">
                <?php echo $user->display_name; ?>
              </p>
            </a>
          </div>

          <div class="col-12 col-lg-10 my-awe-32 my-lg-0">
            <div class="row gap-awe-32 gap-md-0">
              <?php
              $author_posts_args = array(
                'post_type' => 'post',
                'posts_per_page' => '3',
                'cat' => 103,
                'author' => $user->ID
              );

              $author_posts_query = new WP_Query($author_posts_args);
              ?>
              <?php if ($author_posts_query->have_posts()) : while ($author_posts_query->have_posts()) : $author_posts_query->the_post(); ?>
                  <div class="col-12 col-md-6 col-lg-4">
                    <a href="<?php the_permalink(); ?>" class="text-decoration-none post-coluna-livre">
                      <h3 class="fz-18">
                        <?php the_title(); ?>
                      </h3>
                      <p class="">
                        <?php echo get_the_excerpt(); ?>
                      </p>
                    </a>
                  </div>
              <?php endwhile;
              else : endif; ?>
            </div>
          </div>

          <div class="col-12 d-flex justify-content-end">
            <a href="<?php echo home_url('/author'); ?>/<?php echo $user->display_name; ?>" class="text-decoration-none">
              Ver todas as colunas
            </a>
          </div>
        </div>
    <?php  }
    } else {
      echo 'No users found.';
    } ?>
  </div>
</main>

<?php get_footer() ?>