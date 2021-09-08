<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
    <?php wp_head();?>
    <title><?php bloginfo('name');?><?php if(!is_front_page()){echo" | ";}?><?php wp_title('');?></title>
    <meta name="author" content="AWE">
    <meta name="description" content="HISTORIA EM DETALHES">
    <meta name="keywords" content="HISTORIA EM DETALHES">
</head>
<body class="ff-inter">
<header class="container-fluid p-0 sticky-top bg-danger-dark ff-inter">
    <div class="container px-lg-0">

      <nav class="navbar navbar-expand-lg text-white pt-awe-11 pb-awe-16">
        <div class="container-fluid">
          <div class="box-logo d-flex justify-content-between align-items-center">
            <a class="navbar-brand p-0" href="<?php echo home_url('/');?>">
              <img src="<?php echo get_template_directory_uri();?>/dist/image/icons/logo.svg" alt="logo do site 'a história em detalhes'">
            </a>
            <span class="fw-medium fst-italic fz-21 d-none d-sm-block ms-awe-64">por Sérgio Trindade</span>
          </div>
          <button class="navbar-toggler box-shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span><img src="<?php echo get_template_directory_uri();?>/dist/image/icons/menu-toggler.svg" alt=""></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

            <div class="d-flex justify-content-lg-end align-items-center mt-awe-32 mt-lg-0 flex-wrap">
              <!--Search-->
              <?php dynamic_sidebar('busca');?>

              <div class="text-uppercase fz-16 fw-medium">
                <style>
                  .menu-header li{
                      list-style: none;
                      padding: 2px 8px;
                    }
                    .menu-header li:nth-child(n+2){
                      border-left:2px solid white;
                    }
                    .menu-header li a{
                      color: white;
                    }
                    
                </style>
                <?php 
                        
                            $args_projetos = array(
                                'menu' => 'header-menu',
                                'container' => false,
                                'menu_class' => 'list-group list-group-horizontal menu-header'
                                             );
                            wp_nav_menu( $args_projetos );
                         ?>
                  
              </div>
            </div>

          </div>
        </div>
      </nav>

    </div>
  </header>
    