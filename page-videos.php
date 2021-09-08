<?php
// Template Name: videos
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
                        <li class="breadcrumb-item text-truncate active" aria-current="page">Vídeos</li>
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
            Todos os vídeos compartilhados
        </h1>
    </div>

    <!--Container dos vídeos-->
    <main class="container p-xl-0">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
        <?php
                            $args_videos = array (
                                'post_type' => 'video',
                                'posts_per_page'=>'15',
                                'paged'    => get_query_var('paged') ? get_query_var('paged') : 1
                                
                            );
                            $the_query_videos = new WP_Query ( $args_videos );
                        ?>
    <?php if ( $the_query_videos->have_posts() ) : while ( $the_query_videos->have_posts() ) : $the_query_videos->the_post(); ?>
            <!--card-video-->
            <?php
            $link = get_field('url');
            $partes = explode('v=',$link);
            ?>
            <a class="text-decoration-none" href="<?php the_permalink();?>">
            <div class="col d-flex justify-content-center pb-awe-48">
                <div class="cursor-pointer text-aco text-danger-light-hover card-video">
                    <div class="row justify-content-center">
                        <div class="col-12 mb-awe-24">
                            <div class="position-relative d-flex justify-content-center align-items-center">
                                <img src="https://img.youtube.com/vi/<?php echo $partes[1]?>/mqdefault.jpg" style="width: 100%;height: auto;" alt="">

                                <div class="player-hover-2 w-100 h-100 position-absolute"></div>

                                <div class="player-hover-1 w-100 h-100 position-absolute"></div>

                                <div class="position-absolute">
                                    <img src="<?php echo get_template_directory_uri();?>/dist/image/icons/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <span class="fw-medium lh-140 fz-16 text-aco">
                                <?php the_field('desc_video')?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            </a>
            <!--/card-video-->
            <?php endwhile; else: endif; ?>
        </div>
    </main>

    <div class="container p-xl-0">
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
            'total' => $the_query_videos->max_num_pages,
            'prev_next' => false,
            'show_all' => false,
            'mid_size' => 2,
            'end_size' => 1
        ) );?>
            </ul>
        </nav>
    </div>

<?php get_footer()?>