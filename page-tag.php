<?php
// Template Name: tag
?>
<?php get_header()?>

    <!--Navegação breadcrumb-->
    <div class="container ff-inter fz-14 fz-sm-16 lh-140 py-awe-32">
        <div class="row justify-content-center">
            <div class="col-12">
                <nav style="--bs-breadcrumb-divider: '>>';" aria-label="breadcrumb">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="<?php echo home_url('/');?>" class="text-prata-2">Home</a></li>
                        <li class="breadcrumb-item text-truncate active" aria-current="page">Tags</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!--/Navegação breadcrumb-->
    <main class="container">
        <div class="row justify-content-center">

            <!--Titulo da página-->
            <div class="col-12">
                <div class="box-title position-relative pb-awe-24">
                    <h1 class="fw-regular fz-44 lh-140" id="title-posts">
                        <?php if(array_key_exists('tag', $_GET)){?>
                            Filtragem de posts por <span class ="fw-extra-bold"> “<?php echo $_GET['tag']?>” </span>
                            <?php } else {?>
                                Listagem por <span class="fw-extra-bold">tags</span>
                            <?php }?>
                        
                    </h1>
                </div>
            </div>

            <!--Área de pesquisa-->
            <div class="col-12 mt-awe-24 mt-sm-0">
                <div class="d-flex justify-content-between flex-wrap mt-awe-11 align-items-end">
                    <span class="fz-16 fw-light text-prata lh-160">filtre ou pesquise</span>
                    <div class="
                        input-posts 
                        border
                        border-2
                        border-gray
                        rounded-1 
                        ps-awe-48 pe-awe-24">
                        <form class="d-flex align-items-center" action="<?php echo home_url('/');?>tag/" method="GET">
                        <input class="form-control bg-transparent rounded-0 border-0 p-0 text-prata fz-18" type="text"
                            placeholder="sua pesquisa" name="t">
                        <button class="btn" type="submit">
                            <img src="<?php echo get_template_directory_uri();?>/dist/image/icons/search-posts.svg" alt="">
                        </button>
                        </form>
                        
                    </div>
                </div>
            </div>

            <!--Subtitulo da pagina-->
            <div class="col-12 ">
                <div class="pt-awe-11 px-lg-0 pb-awe-48">
                    <div class="">
                        <h3 class="fz-26 fw-light text-gray">
                            Tags
                        </h3>
                    </div>
                </div>
            </div>

            <!--Filtro por categoria-->
            <div class="col-12">
                <div class="d-flex flex-wrap pb-awe-64">
                    <?php if(array_key_exists('t', $_GET)) {?>
                        <?php include(TEMPLATEPATH . "/inc/search-tag.php");?>
                    <?php } else {?>
                <?php include(TEMPLATEPATH . "/inc/filtro-tag.php");?>
                <?php }?>
                </div>
            </div>

            <!--Ultimos posts-->
            <div class="col-12 col-md-10 col-lg-8 px-xl-0">
                <div class="mb-awe-24">
                <?php if(array_key_exists('tag', $_GET)){?>
                                <h3 class="fz-26 fw-light text-gray mb-awe-32">
                                Últimos posts da tag <span class ="fw-bold">“<?php echo $_GET['tag']?>”</span>
                                </h3>
                            <?php } else {?>
                                <h3 class="fw-light fz-26 text-gray lh-160">Ultimos posts</h3>
                            <?php }?>
                   
                </div>
                <?php
                      if(array_key_exists('tag', $_GET)){
                        $args3 = array (
                            'post_type' => 'post',
                            'posts_per_page'=>'10',
                            'paged'    => get_query_var('paged') ? get_query_var('paged') : 1,
                            'tag' => "{$_GET['tag']}"
                        );
                       } else {
                       $args3 = array (
                         'post_type' => 'post',
                         'posts_per_page'=>'10',
                        'paged'    => get_query_var('paged') ? get_query_var('paged') : 1
                     );
                    }
                       $the_query = new WP_Query ( $args3 );
                   ?>   
<div class="col-12 col-md-10 col-lg-8 px-lg-0 pt-awe-32">
<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<!--Post-->
<a href="<?php the_permalink(); ?>" class="text-decoration-none d-block border-top border-1 border-neve-extra-dark">
                    <div class="post-recente mb-awe-24">
                        <!--Autor do post e data de publicação-->
                        <div class="pt-awe-16">
                            <span class="fst-italic text-prata-2 fw-medium lh-160 fz-14 d-flex flex-wrap">
                                por
                                <span class="fw-bold text-decoration-underline fst-normal mx-2"><?php the_author();?></span>
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
    <?php endwhile; else: endif; ?>
            </div>
        </div>
    </main>

    <!--Paginação-->
    <div class="container mt-awe-24 px-xl-0">

        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 border-top border-1 border-neve-extra-dark pt-awe-32">
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
            'total' => $the_query->max_num_pages,
            'prev_next' => false,
            'show_all' => false,
            'mid_size' => 2,
            'end_size' => 1
        ) );?>
            </ul>
        </nav>
            </div>
        </div>

    </div>

    <?php get_footer()?>