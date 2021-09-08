<?php get_header()?>
<style>
    .next1,.next2,.next3{
        bottom: 0;
        right: 0;
        background: url(<?php echo get_template_directory_uri();?>/dist/image/icons/arrow-danger.svg) no-repeat;
        background-position: 100% center;
    }
</style>

<main class="container pt-awe-80">

<!--Notícia em destaque-->
<div class="row justify-content-center">
  <!--Título da notícia principal-->
  <?php 
    $args4 = array (
      'post_type' => 'post',
      'posts_per_page' => '1'
    );
    $the_query4 = new WP_Query ( $args4 );
  ?>
  <?php if ( $the_query4->have_posts() ) : while ( $the_query4->have_posts() ) : $the_query4->the_post(); ?>

  <div class="col-12 col-md-10 col-lg-8 px-lg-0 quotation-marks">
    <h1 class="fz-32 fz-md-40 text-aco fw-extra-bold">
      <?php the_title();?>
    </h1>
  </div>
  <!--Autor e data de publicação-->
  <div class="col-12 col-md-10 col-lg-8 px-lg-0 pt-awe-32">
    <div class="px-awe-16 px-md-awe-32 py-2 bg-neve-dark fw-light fz-16 text-prata d-flex flex-wrap">
      por
      <span class="mx-1 fw-bold fz-16 border-bottom border-1 border-danger-light">
        <a href="" class="text-decoration-none text-danger-light"><?php the_author();?></a>
      </span>
      <span class="">
        foi publicado em
        <span class="mx-1"><?php echo get_the_date('d.M.y'); ?></span>
      </span>
    </div>
  </div>
  <!--Prévia da notícia-->
  <div class="col-12 col-md-10 col-lg-8 px-lg-0 pt-awe-16">
    <div>
      <p class="m-0 text-prata-2 fz-21">
        <?php the_excerpt();?>
      </p>

      <div class="pt-awe-48">
        <a href="<?php the_permalink();?>" class="btn awe-button text-aco fz-16 fst-italic text-decoration-none">
          Continue lendo...
        </a>
      </div>
    </div>
  </div>
  <?php endwhile; else: endif;?>


</div>

<!--Categorias de notícias-->
<div class="row justify-content-center">
  <div class="col-12 col-md-10 col-lg-8 px-lg-0 pt-awe-64">
    <div class="border-gradient mb-2"></div>
    <h3 class="text-gray fz-26 fw-light">
      Principais categorias
    </h3>
  </div>
  <!--Filtro por categoria-->
  <div class="col-12 col-md-10 col-lg-8 px-lg-0 pt-awe-16">
    <div class="d-flex flex-wrap">
    <?php include(TEMPLATEPATH . "/inc/filtro-categorias.php");?>
    </div>
  </div>
  <!--ver todas as categorias-->
  <div class="col-12 col-md-10 col-lg-8 px-lg-0 pt-awe-16">
    <div class="text-end">
      <a href="<?php echo home_url('/');?>categoria/" class=" text-gray fz-16 fw-light">
        Ver todas as categorias
      </a>
    </div>
  </div>
</div>

<!--Carrosel duplo de imagens e videos-->
<div class="row justify-content-center pt-awe-80">
  <div class="col-12 col-md-6">
    <div class="pb-3">
      <h3 class="fz-26 fw-bold text-danger-light">
        Galeria de fotos
      </h3>
    </div>
    <div class="swiper swiper1 position-relative pb-5">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <?php
                            $args_fotos = array (
                                'post_type' => 'fotos'
                            );
                            $the_query_fotos = new WP_Query ( $args_fotos );
                        ?>
    <?php if ( $the_query_fotos->have_posts() ) : while ( $the_query_fotos->have_posts() ) : $the_query_fotos->the_post(); ?>
<div class="card-foto swiper-slide">
          <img src="<?php the_field('imagem') ?>" class="img-fluid" alt="">
          <div class="pt-awe-16">
            <span class="fw-medium fz-16 text-aco">
            <?php the_field('desc_fotos')?>
            </span>
          </div>
        </div>
        <?php endwhile; else: endif; ?> 
      </div>
      <div class="infinity-degrad position-absolute"></div>
      <div class="next1 position-absolute pe-5">
        <span class="me-3 text-danger-normal">mais fotos</span>
    </div>
    </div>
    
  </div>
  <div class="col-12 col-md-6 pt-awe-32 pt-md-0">
    <div class="pb-3">
      <h3 class="fz-26 fw-bold text-danger-light">
        <span class="fw-regular fst-italic fz-21">
          &
        </span>
        Videos
      </h3>
    </div>
    <div class="swiper2 swiper pb-5 position-relative">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <?php
                            $args_videos = array (
                                'post_type' => 'video'
                            );
                            $the_query_videos = new WP_Query ( $args_videos );
                        ?>
    <?php if ( $the_query_videos->have_posts() ) : while ( $the_query_videos->have_posts() ) : $the_query_videos->the_post(); ?>
            <!--card-video-->
            <?php
            $link = get_field('url');
            $partes = explode('v=',$link);
            ?>
    
    <div class="cursor-pointer text-aco text-danger-light-hover card-video swiper-slide" style="width: 383px!important;">
    <a class="text-decoration-none" href="<?php the_permalink();?>">
      <div class="row justify-content-center">
        <div class="col-12 mb-3">
          <div class="position-relative d-flex justify-content-center align-items-center">
            <img src="https://img.youtube.com/vi/<?php echo $partes[1]?>/mqdefault.jpg" class="img-fluid" style="min-height:220px;" alt="">

            <div class="player-hover-2 w-100 h-100 position-absolute"></div>

            <div class="player-hover-1 w-100 h-100 position-absolute"></div>

            <div class="position-absolute">
              <img src="<?php echo get_template_directory_uri();?>/dist/image/icons/play.svg" alt="">
            </div>
          </div>
        </div>
        <div class="col-12">
          <span class="fw-medium lh-140 fz-16 text-aco">
            <?php the_field('desc_video') ?>
          </span>
        </div>
      </div>
      </a>
    </div>
    
    <?php endwhile; else: endif; ?>
  </div>
  <div class="infinity-degrad position-absolute"></div>
  <div class="next2 position-absolute pe-5">
    <span class="me-3 text-danger-normal">mais videos</span>
  </div>
  </div>

  </div>
</div>

<!--Últimos posts-->
<div class="row justify-content-center">
  <!--Título-->
  <div class="col-12 col-md-10 col-lg-8 px-lg-0 pt-awe-80">
    <div class="border-bottom border-1 border-neve-extra-dark pb-awe-11">
      <h3 class="text-gray fw-light fz-26 ">
        Últimos posts
      </h3>
    </div>
  </div>
  <!--Posts-->
                       <?php
                       
                            $args3 = array (
                              'post_type' => 'post',
                              'posts_per_page' => '6'
                          );
                          
                            $the_query = new WP_Query ( $args3 );
                        ?>   
  <div class="col-12 col-md-10 col-lg-8 px-lg-0 pt-awe-32">
  <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <!--Post-->
    <div class="pb-awe-32 mb-awe-32 border-bottom border-1 border-neve-extra-dark">
      <!--titulo-->
      <a href="<?php the_permalink(); ?>" class="text-decoration-none">
        <h4 class="text-aco fz-21 fw-bold">
        <?php the_title()?>
        </h4>
      </a>

      <!--data e categoria do post-->
      <div class="fw-light text-gray fz-14 pt-awe-11">
        <span>
          Publicado em
          <span><?php echo get_the_date('d.M.y'); ?></span>
          - em
          <span class="d-inline-block">
            <a href="" class="text-prata">
            <?php 
            $postcat = get_the_category( $post->ID );
             
             if ( ! empty( $postcat ) ) {
              echo esc_html($postcat[0]->name);   
          }?>
            </a>
          </span>
        </span>

      </div>
    </div>
    <?php endwhile; else: endif; ?>
    </div>

    <!--Mais posts-->
    <div class="text-end">
      <a href="<?php echo home_url('/');?>posts/" class="text-blue-link-dark">
        Ver todas as notícias
      </a>
    </div>
  </div>
</div>

<!--Série de posts-->
<div class="row justify-content-center">
  <div class="col-12 px-lg-0 pt-awe-64">
    <h3 class="text-aco fz-26 fw-extra-bold">
      Séries de posts
    </h3>
    <span class="text-gray fz-14 fw-light">
      Você pode acompanhar as histórias que são publicadas em formato de coletâneas.
    </span>
  </div>

  <div class="col-12 d-flex px-lg-0 flex-wrap pt-awe-32">
    <!--post em série-->
    <div class="swiper swiper3 pb-5 position-relative">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <?php
                       
                            $args3_coletanea = array (
                              'post_type' => 'post',
                              'category_name' => "coletanea"
                          );
                          
                            $the_query_coletanea = new WP_Query ( $args3_coletanea );
                        ?>   
  
  <?php if ( $the_query_coletanea->have_posts() ) : while ( $the_query_coletanea->have_posts() ) : $the_query_coletanea->the_post(); ?>
        <?php 
        
          $categories = get_the_category();
            $coletanea = '';
            foreach($categories as $category){
              if($category->name != 'coletanea') { 
              $coletanea = $category->name; 
              }
            }
            ?>
            
  <a href="<?php the_permalink();?>"
        class="d-block text-decoration-none swiper-slide  rounded" style="width:280px;">
        <div class="p-awe-16 border border-1 border-danger-light rounded ">
          <!--data da ultima atualização-->
          <div class="fz-14 text-danger-light fw-light">
            Ultima publicação - <span class="fw-bold"><?php echo get_the_date('d.M.y'); ?></span>
          </div>

          <!--titulo do ultimo post-->
          <div class="mb-awe-11 pb-awe-24 pt-awe-16 border-bottom border-1 border-danger-light">
            <h5 class="text-danger-dark fw-bold fz-18">
              <?php the_title();?>
            </h5>
          </div>

          <span class="text-danger-light fz-14">
            <?php 
            $num = '';
            foreach($catArray as $key => $value){
              if($key == $coletanea){
                $num = $value;
              }
            }
            ?>
            <?php echo $coletanea;?> <span class="text-gray fz-12 fw-light fst-italic">
              (<?php echo $num;?> publicações)
            </span>
          </span>
        </div>
      </a>
      <?php endwhile; else: endif; ?>
          
      </div>
      <div class="next3 position-absolute pe-5">
        <span class="me-3"></span>
    </div>
    </div>
    
  </div>
</div>
</div>
</main>

<?php get_footer()?>