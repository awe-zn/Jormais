<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JOR MAIS</title>

    <!--Fontes-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <!--Css-->
    <?php if(is_front_page()){?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/dist/css/style-index.css">
    <?php } else {?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
    <?php }?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/dist/css/style-update.css">
    <!--icones-->
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>

  <body>
    <!--Header contendo o menu principal-->
    <header
      class="container-fluid p-0 sticky-top bg-white ff-inter border-bottom border-gray-2"
    >
      <div class="container px-lg-0">
        <nav class="navbar navbar-expand-lg text-white pt-awe-11 pb-awe-16">
          <div class="container-fluid">
            <div
              class="d-flex justify-content-between align-items-center"
            >
              <a class="navbar-brand p-0 pt-awe-18" href="<?php echo home_url('/');?>">
                <img src="<?php echo get_template_directory_uri();?>/dist/img/icons/logo.svg" alt="logo JOR MAIS" />
              </a>
            </div>
            <button
              class="navbar-toggler box-shadow-none"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span><img src="<?php echo get_template_directory_uri();?>/dist/img/icons/menu-toggler.svg" alt="" /></span>
            </button>
            <div
              class="collapse navbar-collapse justify-content-end"
              id="navbarSupportedContent"
            >
              <div
                class="d-flex justify-content-lg-end align-items-center mt-awe-32 mt-lg-0 flex-wrap"
              >
                
                  <!-- <a
                    href="recentes.html"
                    class="text-decoration-none text-prata fz-16 me-awe-28 fw-bold"
                    >Publicações</a
                  >
                  <a
                    href=""
                    class="text-decoration-none text-prata fz-16 fw-bold"
                    >Contato</a
                  > -->
                  <?php
                        $args_projetos = array(
                            'menu' => 'header-menu',
                            'container' => 'div',
                            'menu_class' => ' menu fz-16 fw-medium'
                                         );
                        wp_nav_menu( $args_projetos );
                     ?>
                
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>