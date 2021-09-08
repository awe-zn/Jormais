
<?php get_header()?>
    <main class="container">
        <div class="row justify-content-center">

            <!--Titulo da página-->
            <div class="col-12">
                <div class="box-title position-relative py-awe-24">
                    <h1 class="fz-44 lh-140 fw-extra-bold" id="title-posts">
                        <?php 
                        if(is_search()){
                            $total_results = $wp_query->found_posts;
                            echo sprintf(__('%s resultado(s) para "%s"','HD-WP'), $total_results, get_search_query());
                        }
                        ?>
                    </h1>
                </div>
            </div>

            

            <!--Ultimos posts-->
            <div class="col-12 px-xl-0">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                <!--Post recente-->
                <a href="<?php the_permalink();?>" class="text-decoration-none d-block border-top border-1 border-neve-extra-dark">
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
                <?php endwhile; else: endif;?>
                
            </div>
        </div>
    </main>

    <?php get_footer()?>