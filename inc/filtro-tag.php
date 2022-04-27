<?php
      $args2 = array (
        'post_type' => 'post'
    );
      
    $the_query2 = new WP_Query ( $args2 );
      $tagArray = array();
      if ( $the_query2->have_posts() ) : while ( $the_query2->have_posts() ) : $the_query2->the_post();
      ?>
        <?php 
          $postTag = get_the_tags( $post->ID );
          
          if ( ! empty( $postTag ) ) {
            for ($i=0; $i < count($postTag) ; $i++) { 
              if(! in_array($postTag[$i]->name, $tagArray)){
                $tagArray[] = $postTag[$i]->name;
              }
            }
            
          }
              
        ?>
      <?php endwhile; else: endif;?>

      <?php
      $contador = 0;
      foreach ($tagArray as $key => $value) {
        
        ?>
        <span disabled href="" class="filter me-awe-11 mb-awe-11" data-cad="simao-bacamarte"><?php echo $value ?><span>
          
        <?php
        if($contador >= 8) {
          break;
        }
        $contador++;
      } ?>