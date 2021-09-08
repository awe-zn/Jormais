<?php get_header()?>
<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
    <!--Navegação breadcrumb-->
    <div class="
        container 
        ff-inter 
        fz-14 
        fz-sm-16
        lh-140
        py-awe-32">
        <div class="row">
            <div class="col-12">
            <nav style="--bs-breadcrumb-divider: '>>';" aria-label="breadcrumb">
          <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="<?php echo home_url('/');?>" class="text-prata-2">Home</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="<?php echo home_url('/');?>videos/" class="text-prata-2">Video
          </a></li>
            <li class="breadcrumb-item text-truncate active" aria-current="page"><?php the_title();?></li>
          </ol>
        </nav>
            </div>
        </div>
    </div>
    <!--/Navegação breadcrumb-->

    <!--Tìtulo da galeria de videos-->
    <div class="
        box-title
        container
        position-relative
        pb-awe-24
        px-xl-0
        mb-awe-48
      ">
        <!--Titulo da notícia-->
        <h1 class="
          fz-32 
          fz-md-44
          lh-140
          fw-extra-bold
          text-break
        ">
            <?php the_title();?>
        </h1>
    </div>

    <!--Container dos vídeos-->
    <?php
            $link = get_field('url');
            $partes = explode('v=',$link);
            ?>
    <main class="container p-xl-0">
        <div class="row row-cols-1 row-cols-md-2 justify-content-center">
        <div class="col">
        <iframe style="width:100%;min-height:300px;" src="https://www.youtube.com/embed/<?php echo $partes[1];?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        </div>
    </main>
    <?php endwhile; else: endif;?>
<?php get_footer()?>