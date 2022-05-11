<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>JOR MAIS</title>

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;800&family=Open+Sans:wght@700&display=swap" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/dist/css/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/dist/css/categories.css">
</head>

<body class="bg-light-1">

  <header class="container-fluid bg-white border-bottom border-1 border-light-silver position-sticky top-0">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid container-lg">
        <a class="navbar-brand p-0" href="<?php echo home_url('/'); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo.png" width="156" alt="logo do site">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/icons/menu.svg" alt="">
        </button>
        <div class="collapse navbar-collapse pt-4 pt-lg-0 justify-content-end" id="navbarSupportedContent">
          <?php
            $args_projetos = array(
              'menu' => 'header-menu',
              'container' => 'div',
              'menu_class' => ' menu fz-16 fw-medium list-unstyled m-0',
            );
            wp_nav_menu($args_projetos);
          ?>
        </div>
      </div>
    </nav>
  </header>