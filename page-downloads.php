<?php
// Template Name: downloads
?>
<?php get_header()?>

    <!--Navegação breadcrumb-->
    <div class="
        container 
        ff-inter 
        fz-14 
        fz-sm-16
        lh-140
        py-awe-32
        ">
        <div class="row justify-content-center">
            <div class="col-12">
                <nav style="--bs-breadcrumb-divider: '>>';" aria-label="breadcrumb">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="index.html" class="text-prata-2">Home</a></li>
                        <li class="breadcrumb-item text-truncate active" aria-current="page">Donwloads</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!--/Navegação breadcrumb-->

    <main class="container">
        <div class="row justify-content-center">

            <!--Caixa do título da noticia (nela fica a pequena borda inferior laranja)-->
            <div class="
                    col-12 
                    box-title
                    position-relative
                    pb-awe-24
                    px-lg-0
                    ">
                <!--Titulo da notícia-->
                <h1 class="
                    fz-44
                    lh-140
                    fw-extra-bold
                    ">
                    Veja os arquivos disponíveis para baixar
                </h1>
            </div>

            <!--Subtitulo da pagina-->
            <div class="col-12 px-lg-0 pt-awe-64 pb-awe-48">
                <div
                    class="border-bottom border-1 border-neve-extra-dark pb-awe-24 d-inline-block pe-lg-awe-64 pb-awe-24">
                    <h3 class="fz-26 fw-light text-gray">
                        Alguns arquivos disponíveis para download gratuitamente
                    </h3>
                </div>
            </div>
            <!--Cards dos donwloads-->
            <div class="col-12">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
            <?php
                            $args_download = array (
                                'post_type' => 'download',
                                'posts_per_page'=>'15',
                                'paged'    => get_query_var('paged') ? get_query_var('paged') : 1
                                
                            );
                            $the_query_download = new WP_Query ( $args_download );
                        ?>
    <?php if ( $the_query_download->have_posts() ) : while ( $the_query_download->have_posts() ) : $the_query_download->the_post(); ?>
            

                    <!--Card download-->
                    <div class="col mb-awe-24">
                        <div class="border border-1 border-aco rounded-2 py-awe-16 px-awe-16 cursor-pointer">
                            <span class="text-prata-2 fw-light fz-14">publicado em - <span
                                    class="fw-bold"><?php echo get_the_date('d.M.y'); ?></span></span>

                            <div class="border-bottom border-1 border-prata-2 pt-awe-16 pb-awe-24 mb-awe-11">
                                <h5 class="lh-140 text-aco fw-bold fz-18">
                                    <?php the_title()?>
                                </h5>
                            </div>

                            <span class="fz-12 lh-160 text-prata-2">
                                formato
                                <span class="fw-bold"><?php the_field('formato');?></span>
                                <a href="<?php the_field('file');?>" class="text-gray fst-italic fw-light text-decoration-none">
                                    (clique para baixar o arquivo)
                                </a>
                            </span>
                        </div>
                    </div>
                    <!--/Card download-->
                    <?php endwhile; else: endif; ?>
                    
                </div>
            </div>
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
            'total' => $the_query_download->max_num_pages,
            'prev_next' => false,
            'show_all' => false,
            'mid_size' => 2,
            'end_size' => 1
        ) );?>
            </ul>
        </nav>
        </div>
    </main>
<?php get_footer()?>