<footer class="bg-teal">
  <div class="container py-awe-32">
    <div class="row">
      <div class="col-12 col-md-4 col-lg-3">
        <a href="<?php echo home_url('/'); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo.png" class="img-fluid w-100" alt="Logo jormais">
        </a>
        <div class="d-flex gap-awe-32 justify-content-center pt-awe-32">
          <a href="https://twitter.com/Jormais_portal" target="_blank" title="twitter">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/icons/twitter-light.svg" alt="link do twitter">
          </a>
          <a href="https://www.instagram.com/jor.mais/" target="_blank" title="instagram">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/icons/instagram-light.svg" alt="link do instagram">
          </a>
        </div>
      </div>
      <div class="col-12 col-md-4 col-lg-4 offset-lg-1 d-flex flex-column align-items-center my-awe-32 my-md-0">
        <span class="text-white fw-bold fz-18 text-uppercase">APOIO INSTITUCIONAL</span>
        <a href="https://www.ufrn.br/" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/ufrn-logo-light.png" alt="Logo ufrn">
        </a>
        <a href="">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/icons/logo-decom-light.svg" alt="Logo decom">
        </a>
      </div>
      <div class="col-12 col-md-4 col-lg-3 offset-lg-1 text-center text-md-start">
        <span class="text-white fw-bold fz-18 text-uppercase">SOBRE JORMAIS</span>
        <div id="menu" class="mt-awe-16">
          <?php
            $args = array(
              'menu' => 'Menu Footer',
              'menu_class' => 'p-0',
            );

            wp_nav_menu($args)
          ?>
        </div>
      </div>
    </div>
  </div>
  <div class="d-flex justify-content-center py-4" style="background: #1E7780;">
    <a href="https://agenciaweb.ifrn.edu.br/" target="_blank">
      <img src="<?php echo get_template_directory_uri(); ?>/dist/img/icons/awe-logo.svg" alt="">
    </a>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>