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
                <a href="<?php echo home_url('/posts'); ?>" class="link-gray-2">
                  Posts
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

    <section class="container mt-awe-24">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
          <p class="text-gray-3 fz-16 mb-awe-24">
            tags
          </p>
          <ul class="filters d-flex flex-wrap gap-awe-12 py-awe-24 px-awe-16 px-md-awe-32 list-unstyled fz-16">
            <?php include(TEMPLATEPATH . "/inc/filtro-tag.php"); ?>
          </ul>

          <div class="mt-awe-64">
            <p class="text-gray-3 fz-14 fz-md-16 mb-awe-12">
              posts relacionados
            </p>
            <div class="related__posts">
              <?php
              $posttags = get_the_tags();
              $totaltags = '';
              if ($posttags) {
                foreach ($posttags as $tag) {
                  $totaltags = "{$totaltags},{$tag->name},";
                }
              }
              $args3 = array(
                'post_type' => 'post',
                'tag' => $totaltags,
                'posts_per_page' => '6'
              );

              $the_query3 = new WP_Query($args3);
              ?>
              <?php if ($the_query3->have_posts()) : while ($the_query3->have_posts()) : $the_query3->the_post(); ?>
                  <div class="related__post">
                    <div class="text-gray-2 fz-14">
                      por
                      <span class="text-gray-2 fw-bold">
                        <?php the_author(); ?>
                      </span>,
                      publicado em
                      <span class="text-gray-3 fw-medium fst-italic">
                        <?php echo get_the_date('d.M.y'); ?>
                      </span>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="related__post__title fz-16 fz-md-21">
                      <?php the_title(); ?>
                    </a>
                  </div>
              <?php endwhile;
              else : endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php endwhile;
else : endif; ?>

<?php get_footer() ?>