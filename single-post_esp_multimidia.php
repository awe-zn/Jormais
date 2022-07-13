<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="container fz-16 py-awe-40">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
          <nav style="--bs-breadcrumb-divider: '>>';" aria-label="breadcrumb">
            <ol class="breadcrumb m-0 ">
              <li class="breadcrumb-item">
                <a href="<?php echo home_url('/'); ?>" class="link-gray-2">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="<?php echo home_url('/especiais'); ?>" class="link-gray-2">
                  Especiais
                </a>
              </li>
              <li class="breadcrumb-item text-truncate active" aria-current="page">
                <?php the_title(); ?>
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>

    <main class="container">
      <article class="row justify-content-center post">
        <div class="col-12 col-lg-10">
          <h1 class="text-dark-1 fz-26 fz-md-32 fw-bold title-1 m-0">
            <?php the_title(); ?>
          </h1>
        </div>
        <div class="col-12 col-md-10 col-lg-8 mt-awe-40 mt-md-awe-80">
          <div class="text-gray-1 fz-16">
            por
            <?php
            add_filter('the_author_posts_link', function ($link) {
              return str_replace('rel="author"', 'rel="author" class="text-gray-3 fw-bold"', $link);
            });
            the_author_posts_link();
            ?>,
            publicado em
            <span class="text-gray-3 fw-medium fst-italic">
              <?php echo get_the_date('d.M.y'); ?>
            </span>
          </div>
          <div class="post__content mt-awe-40 mt-md-awe-80 fz-16 fz-md-21">
            <?php the_content(); ?>
          </div>
        </div>
      </article>
    </main>

<?php endwhile;
else : endif; ?>

<?php get_footer() ?>