<?php
// Template Name: fotos
?>
<?php get_header()?>

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
                        <li class="breadcrumb-item text-truncate active" aria-current="page">Fotos</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!--/Navegação breadcrumb-->

    <!--Tìtulo da galeria de fotos-->
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
          fw-bold
          fz-32 
          fz-md-44
          lh-140
          fw-extra-bold
          text-break
        ">
           Nossa galeria de fotos
        </h1>
    </div>

    <!--Container das fotos-->
    <main class="container p-xl-0">
        <div class="row row-cols-2 row-cols-lg-4">
        <?php
                            $args_fotos = array (
                                'post_type' => 'fotos',
                                'posts_per_page'=>'15',
                                'paged'    => get_query_var('paged') ? get_query_var('paged') : 1
                            );
                            $the_query_fotos = new WP_Query ( $args_fotos );
                        ?>
    <?php if ( $the_query_fotos->have_posts() ) : while ( $the_query_fotos->have_posts() ) : $the_query_fotos->the_post(); ?>
            <!--card-foto-->
            
            <div class="col d-flex justify-content-center pb-awe-48">
                <div class="text-aco text-danger-light-hover">
                    <div class="row justify-content-center">
                        <div class="col-12 mb-awe-24">
                            <div class="position-relative d-flex justify-content-center align-items-center">
                                <img src="<?php the_field('imagem'); ?>" style="max-width: 100%;max-height: 220px;" alt="">
                            </div>
                        </div>
                        <div class="col-12">
                            <span class="fw-medium lh-140 fz-16">
                            <?php the_field('desc_fotos')?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!--/card-foto-->
            <?php endwhile; else: endif; ?>   
        </div>
    </main>

    <section class="container p-xl-0">

    <style>
            .pagination .page-numbers{
                border-radius: 50%;
                width: 39px;
                height: 39px;
                color: #273444;
                text-decoration: none;
                text-align:center;
            }
            .pagination span{
                border: 1px solid #E62121;
                cursor: pointer;
                color:#E62121!important;
            }

        </style>
        <nav>
            <ul class="pagination fz-21 lh-160 py-awe-24">
            <?php 
        echo paginate_links( array(
            'base' => str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $the_query_fotos->max_num_pages,
            'prev_next' => false,
            'show_all' => false,
            'mid_size' => 2,
            'end_size' => 1
        ) );?>
            </ul>
        </nav>

    </section>

<?php get_footer()?>