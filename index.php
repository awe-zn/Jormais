<?php get_header()?>
<main
      class="container d-flex justify-content-md-center mt-awe-44 mb-awe-84"
    >
      <div class="row">
      <?php
                       
                       $args2 = array (
                         'post_type' => 'post',
                         'posts_per_page' => '3',
                         'category_name' => 'destaque'
                     );
                     
                       $the_query = new WP_Query ( $args2 );
                       $count=0;
                   ?>
        <div class="col-12 col-lg-6 text-center">
        <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        
          <?php if($count==0) {?>
          <div class="position-relative card-destaque-big">
          <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']) ?>
            <a href="<?php the_permalink(); ?>" class="text-start box text-white fz-21 fz-md-36 fz-lg-36 fw-semi-bold position-absolute text-decoration-none"><?php the_title()?></a>
          </div>
          <?php } $count++; ?>
          <?php endwhile; else: endif; $count=0; ?>
        </div>
        <div class="col-12 col-lg-6 text-center">
          
          <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <?php  if($count==1) {?>
          <div class="mb-awe-36 text-center mt-awe-36 mt-lg-0 position-relative card-destaque-small">
          <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']) ?>
            <a href="<?php the_permalink(); ?>" class="text-start box text-white fz-14 fz-lg-21 fz-md-21 fw-semi-bold position-absolute text-decoration-none"><?php the_title()?></a>
          </div>
          <?php } $count++; ?>
          <?php endwhile; else: endif; $count=0; ?>
          <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?> 
          <?php  if($count==2) {?>
          <div class="position-relative card-destaque-small">
          <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']) ?>
            <a href="<?php the_permalink(); ?>" class="text-start box text-white fz-14 fz-lg-21 fz-md-21 fw-semi-bold position-absolute text-decoration-none"><?php the_title()?></a>
          </div>
          <?php } $count++; ?>
          <?php endwhile; else: endif; $count=0; ?>
          
        
        </div>
      </div>
    </main>

    <section class="container principais-publi">
      <div class="col-12 mb-awe-48">
        <!--Titulo da notícia-->
        <h1 class="fz-40 fw-bold">Principais Publicações</h1>
      </div>

      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-0">
      <?php
                       
                       $args3 = array (
                         'post_type' => 'post',
                         'posts_per_page' => '12'
                     );
                     
                       $the_query = new WP_Query ( $args3 );
                   ?>
        <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>   
        <div class="col d-flex justify-content-center pb-awe-48">
          <a href="<?php the_permalink(); ?>" class="text-decoration-none">
            <div class="row justify-content-center">
              <div class="col-12 mb-awe-24">
                <div
                  class="position-relative card-post-img"
                >
                <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']) ?>
                
                  <span class="text-center box-2 text-white fz-10 position-absolute text-decoration-none"> <?php 
                   $postcat = get_the_category( $post->ID );
             
                 if ( ! empty( $postcat ) ) {
                  echo esc_html($postcat[0]->name);   
                }?></span>
                </div>
                <div class="card-text pt-awe-16">
                  <p class="text-aco fw-bold fz-16">
                  <?php the_title()?>
                  </p>
                  <p class="fw-bold text-gray">
                  <?php the_author();?>
                    <span class="fw-regular text-fumaca-extra-dark"
                      ><?php echo get_the_date('d.M.y'); ?></span
                    >
                  </p>
                </div>
              </div>
            </div>
              </a>
        </div>
        <?php endwhile; else: endif; ?>



      </div>
    </section>

<?php get_footer()?>