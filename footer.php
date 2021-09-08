<footer class="container-fluid pt-5 mt-awe-112">
    <div class="container">
      <div class="">
        <div class="col-12 row justify-content-md-between justify-content-center">
          <div class="col-md-4">
            <div class="box-logo-danger">
              <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/dist/image/icons/logo-danger.svg"
                alt="Logo do blog 'a história em detalhes' ">

            </div>
            <div class="pt-4 pb-3">
              <span class="text-danger-dark fst-italic">por <strong class="text-danger-dark">Sérgio
                  Trindade</strong></span>
            </div>
          </div>


          <div class="col-md-2">
            <div class="box-options justify-content-end flex-column text-md-end">
            <style>
                  .menu-footer li{
                      list-style: none;
                      
                    }
                    .menu-footer li a{
                      color: #707C8C;
                      text-transform: uppercase;
                    }
                    .menu-footer li a span{
                      text-align:end;
                    }
                    
                </style>
                <?php 
                        
                            $args_footer = array(
                                'menu' => 'footer-menu',
                                'container' => false,
                                'menu_class' => 'list-group menu-footer'
                                             );
                            wp_nav_menu( $args_footer );
                         ?>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row justify-content-center bg-neve-dark p-2">
      <div class="col-1">
        <div class="box-logo-awe ">
          <a href="https://agenciaweb.ifrn.edu.br/"><img class="img-fluid" src="<?php echo get_template_directory_uri();?>/dist/image/icons/logo-awe.svg"
              alt="logo da agencia web escolar"></a>
        </div>

      </div>
    </div>
  </footer>
  
  
<?php wp_footer();?>

  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/dist/js/index.js"></script>
</body>
</html>