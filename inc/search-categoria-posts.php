<?php
      $args2 = array (
        'post_type' => 'post'

    );
      
    $the_query2 = new WP_Query ( $args2 );
      $catArray = array();
      if ( $the_query2->have_posts() ) : while ( $the_query2->have_posts() ) : $the_query2->the_post();
      ?>
        <?php 
          $postcatf = get_the_category( $post->ID );
          
          if ( ! empty( $postcatf ) ) {
            for ($i=0; $i < count($postcatf) ; $i++) { 
              $stringCat = strval($postcatf[$i]->name);
              if(! array_key_exists($stringCat, $catArray)){
                $catArray[$stringCat] = $wpdb->get_var("SELECT count FROM wp_term_taxonomy WHERE term_taxonomy_id = '".get_cat_ID($postcatf[$i]->name)."' ");
              }
            }
            
          }
              
        ?>
      <?php endwhile; else: endif;?>

      <?php
      arsort($catArray);
      $foundSearch = 0;
      foreach ($catArray as $key => $value) {
        if($key == $_GET['c']){
        ?>
        <a href="<?php echo home_url('/');?>posts/?cat=<?php echo $key ?>" class="btn rounded-0 filter-2 me-awe-16 mb-awe-16 text-uppercase">
        <?php echo $key?>
        <span class="bg-neve text-aco fz-12 fw-bold lh-160">
          <?php echo $value ?>
        </span>
      </a>
        <?php
       $foundSearch++; }?>
       
      <?php } if($foundSearch == 0) { ?>
        <div class="alert alert-danger-light w-100" role="alert">
            Nada encontrado, tente novamente
        </div>
        <?php }?>