<?php 

function scriptAndStyle(){
	// Enqueue styles
	wp_enqueue_style('swiperStylecdn', 'https://unpkg.com/swiper@7/swiper-bundle.min.css');
	// Enqueue scripts
	wp_enqueue_script('swiperScriptcdn', '//unpkg.com/swiper@7/swiper-bundle.min.js');
	wp_enqueue_script('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js');
  }
  
  add_action('wp_enqueue_scripts', 'scriptAndStyle');

add_theme_support('menus');
add_theme_support('post-thumbnails');
set_post_thumbnail_size(200, 220, true);

require get_template_directory() . '/shortcode/destaque-post.php';

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
  }
  add_action( 'init', 'register_my_menu' );
  register_sidebar(
	  array(
		'name' => 'busca',
		'id' => 'busca',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h5>',
		'after_title' => '',
	  )
	);

	// custom post type
function custom_post_type_download() {
	register_post_type('download', array(
		'label' => 'Download',
		'description' => 'Download',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'download', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),

		'labels' => array (
			'name' => 'Download',
			'singular_name' => 'Download',
			'menu_name' => 'Download',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo Arquivo',
			'edit' => 'Editar',
			'edit_item' => 'Editar arquivo',
			'new_item' => 'Novo arquivo',
			'view' => 'Ver arquivos',
			'view_item' => 'Ver arquivo',
			'search_items' => 'Procurar Arquivos',
			'not_found' => 'Nenhum Arquivo Encontrado',
			'not_found_in_trash' => 'Nenhum Arquivo Encontrado no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_download');

function custom_post_type_fotos() {
	register_post_type('fotos', array(
		'label' => 'Fotos',
		'description' => 'Fotos',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'fotos', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),

		'labels' => array (
			'name' => 'Fotos',
			'singular_name' => 'Fotos',
			'menu_name' => 'Fotos',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Nova Foto',
			'edit' => 'Editar',
			'edit_item' => 'Editar foto',
			'new_item' => 'Nova foto',
			'view' => 'Ver fotos',
			'view_item' => 'Ver fotos',
			'search_items' => 'Procurar Fotos',
			'not_found' => 'Nenhuma Foto Encontrada',
			'not_found_in_trash' => 'Nenhuma Foto Encontrada no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_fotos');

function custom_post_type_video() {
	register_post_type('video', array(
		'label' => 'Video',
		'description' => 'Video',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'video', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),

		'labels' => array (
			'name' => 'Video',
			'singular_name' => 'Video',
			'menu_name' => 'Video',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo Video',
			'edit' => 'Editar',
			'edit_item' => 'Editar video',
			'new_item' => 'Novo video',
			'view' => 'Ver arquivos',
			'view_item' => 'Ver video',
			'search_items' => 'Procurar Video',
			'not_found' => 'Nenhum Video Encontrado',
			'not_found_in_trash' => 'Nenhum Video Encontrado no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_video');
function postColetanea() {
	$categories = get_the_category();
	$coletanea = '';
	foreach($categories as $category){
	  if($category != 'coletanea') { 
	  $coletanea = $category->name; 
	  }
	}


	$args2 = array (
        'post_type' => 'post',
		'category_name' => $coletanea
    );
      
    $the_query2 = new WP_Query ( $args2 );
      $PostArray = array();
      if ( $the_query2->have_posts() ) : while ( $the_query2->have_posts() ) : $the_query2->the_post();
          $linkPost[] = the_permalink();
		  $namePost[] = the_title();
		endwhile; else: endif;

		foreach ($linkPost as $key => $value) {
			  if(the_permalink() == $value){
				$position = $key;
				if(! cont($linkPost)-1 == $key){
					$next = $position+1;
				}
				$prev = $position-1;
			  }
		}
}

?>
