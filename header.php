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
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/categories.css">
</head>

<body class="bg-light-1">

  <header class="container-fluid border-bottom border-1 border-light-silver position-sticky top-0" style="background: #CED4D9;">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid container-lg">
        <div>
          <button class="btn p-0 me-awe-32">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/icons/menu.svg" alt="">
          </button>
          <a class="navbar-brand p-0" href="<?php echo home_url('/'); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo.png" width="156" alt="logo do site">
          </a>
        </div>
        <div class="pt-4 pt-lg-0 d-none d-sm-flex justify-content-end" id="navbarSupportedContent">
          <div class="d-flex gap-awe-16 me-awe-32">
            <a href="https://twitter.com/Jormais_portal" target="_blank" title="twitter">
              <img src="<?php echo get_template_directory_uri(); ?>/dist/img/icons/twitter.svg" alt="link do twitter">
            </a>
            <a href="https://www.instagram.com/jor.mais/" target="_blank" title="instagram">
              <img src="<?php echo get_template_directory_uri(); ?>/dist/img/icons/instagram.svg" alt="link do instagram">
            </a>
          </div>
          <a href="http://decom.ufrn.br/" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/icons/logo-decom.svg" alt="">
          </a>
        </div>
      </div>
    </nav>
  </header>