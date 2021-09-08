
<?php get_header()?>
<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
<!--Navegação breadcrumb-->
<?php 
$categories = get_the_category();
$coletanea = '';
foreach($categories as $category){
  if($category->name != 'coletanea') { 
  $coletanea = $category->name; 
  }
}
?>
<div class="
    container 
    ff-inter 
    fz-14 
    fz-sm-16
    lh-140
    py-awe-32
    ">
    <div class="row justify-content-center">
      <?php $postcat = get_the_category( $post->ID ); ?>
      <div class="col-12 col-lg-10">
        <nav style="--bs-breadcrumb-divider: '>>';" aria-label="breadcrumb">
          <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="<?php echo home_url('/');?>" class="text-prata-2">Home</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="<?php echo home_url('/');?>categoria/?cat=<?php echo $coletanea;?>" class="text-prata-2"><?php 
            echo $coletanea;
          ?>
          </a></li>
            <li class="breadcrumb-item text-truncate active" aria-current="page"><?php the_title();?></li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!--/Navegação breadcrumb-->

<main class="container text-black-2">
    <article>
      <div class="row">
        <!--Caixa do título da noticia (nela fica a pequena borda inferior laranja)-->
        <?php
        $col=false;
        foreach($categories as $category){
          if($category->name == 'coletanea'){
            $col = true;
          }}
          ?>
          <?php if($col){?>
        <div class="
          col-12 
          col-lg-10 
          offset-lg-1 
          box-title
          position-relative
          px-lg-0
        ">
          <!--Titulo da notícia-->
          <h1 class=" 
            fz-44
            lh-140
            fw-extra-bold
            pb-awe-24
          ">
            <?php the_title();?>
          </h1>
          <h2 class="fz-16 text-danger-normal pb-2"><span class="fw-bold">COLETÂNEA: </span><span class="text-uppercase"><?php echo $coletanea;?></span></h2>
        </div>
        <style>
          .coletanea a{
            text-decoration:none;
          }
        </style>
        <div class="col-12 col-sm-6 col-lg-5 offset-lg-1 py-3 border-bottom coletanea">
        <?php previous_post_link ('%link', '<h3 class="text-danger-normal fz-16 text-center text-sm-start"><< POST ANTERIOR</h3><h4 class="fz-16 text-black-2">%title </h4>', TRUE, $coletanea ); ?>
        </div>
        <div class="col-12 col-sm-6 col-lg-5 offset-lg-1 py-3 border-bottom coletanea">
        <?php next_post_link( '%link', '<h3 class="text-danger-normal fz-16 text-center text-sm-end">PRÓXIMO POST >></h3><h4 class="fz-16 text-black-2">%title</h4>', TRUE, $coletanea  ); ?>
        </div>
        <?php }else{ ?>
          <div class="
          col-12 
          col-lg-10 
          offset-lg-1 
          box-title
          position-relative
          px-lg-0
        ">
          <!--Titulo da notícia-->
          <h1 class=" 
            fz-44
            lh-140
            fw-extra-bold
            pb-awe-24
          ">
            <?php the_title();?>
          </h1>
        </div>

        <?php }?>
       

        <!--Espaço para os dados da notícia, como autor, data de puplicação e notícias semelhantes-->
        <div class="
          dados-noticia 
          col-12 
          col-md-8
          col-lg-10
          offset-md-1
          offset-lg-2
          pt-awe-80
          pb-awe-48
          px-lg-0
          ">

          <span class="fst-italic text-gray fw-medium lh-140 fz-16 d-flex flex-wrap">
            por
            <a href="" class="text-prata fw-bold text-decoration-underline fst-normal mx-2"><?php the_author();?></a>
            foi publicado em
            <span class="text-prata fw-medium mx-2"><?php echo get_the_date('d.M.y'); ?></span>

            <span class="d-flex flex-wrap">
              <div>
                <a href=""><img src="../dist/image/icons/share.svg" alt=""></a>
              </div>
            </span>
          </span>
        </div>
              <style>
                .conteudo a {
                  color:#E62121;
                }
                .size-auto,.size-full,.size-large,.size-medium,.size-thumbnail{
                  max-width: 100%;
                  height: auto;
                }
                
              </style>
        <!--Container de texto-->
        <div class="
          col-12
          col-md-10
          col-lg-8 
          offset-md-1
          offset-lg-2
          lh-180
          fz-21
          px-lg-0
          conteudo
        ">
          <?php the_content();?>
        </div>
      </div>
    </article>
    
  </main>


  <!--Posts relacionados-->
  <div class="container px-xl-0 mt-awe-48">
    <div class="row">

      <!--Filtro por tags-->
      <div class="
        col-12
        col-md-10
        col-lg-8 
        offset-md-1
        offset-lg-2">

        <div class="px-2 px-sm-0">
          <span class="text-prata fz-16 lh-160">filtre por tags</span>
        </div>

        <div class="
          filters 
          d-flex 
          flex-wrap 
          px-awe-32 
          pt-awe-24 
          pb-awe-14
          mt-awe-24 
          fw-light 
          fz-16 
          lh-160">
          <?php include(TEMPLATEPATH . "/inc/filtro-tag.php");?>
        </div>

      </div>

      <!--container geral dos posts relacionados-->
      <section class="
        col-12
        col-md-10
        col-lg-8 
        offset-md-1
        offset-lg-2
        px-lg-0
        mt-awe-64">
        <span class="text-prata fz-16 lh-160">posts relacionados</span>

        <!--box dos posts relacionados-->
        <div class="container p-0 pt-awe-11">
        <?php
                       $posttags = get_the_tags();
                       $totaltags = '';
                       if ($posttags) {
                         foreach($posttags as $tag) {
                           $totaltags = "{$totaltags},{$tag->name},"; 
                         }
                       }
                       $args3 = array(
                         'post_type' => 'post',
                         'tag' => $totaltags,
                         'posts_per_page' => '6'
                     );
                     
                       $the_query3 = new WP_Query ( $args3 );
                   ?> 
          <?php if ( $the_query3->have_posts() ) : while ( $the_query3->have_posts() ) : $the_query3->the_post(); ?> 
          <!--Post relacionado com a notícia-->
          <a href="" class="text-decoration-none">
            <div class="post-relacionado mb-awe-24">
              <!--Autor do post e data de publicação-->
              <div class="pt-awe-16">
                <span class="fst-italic text-prata-2 fw-medium lh-160 fz-14 d-flex flex-wrap">
                  por
                  <span class="fw-bold text-decoration-underline fst-normal mx-2"><?php the_author(); ?></span>
                  foi publicado em
                  <span class="fw-medium mx-2"><?php echo get_the_date('d.M.y'); ?></span>
                </span>
              </div>

              <!--Título da publicação-->
              <div class="pt-awe-11">
                <h4 class="text-aco fz-21 fw-bold"><?php the_title(); ?></h4>
              </div>
            </div>
          </a>
          <!--// fim do Post relacionado com a notícia-->
          <?php endwhile; else: endif; ?>
          

        </div>
      </section>
      <?php endwhile; else: endif;?>
      <script>
        const img = document.querySelectorAll('.conteudo .wp-caption');
        if(img){
          img.forEach(element => {
            element.style = '';
          });
        }
      </script>

 <?php get_footer()?>