<?php

function scriptAndStyle()
{
	// Enqueue styles
	wp_enqueue_style('swiperStylecdn', 'https://unpkg.com/swiper@7/swiper-bundle.min.css');
	// Enqueue scripts
	wp_enqueue_script('swiperScriptcdn', '//unpkg.com/swiper@7/swiper-bundle.min.js');
	wp_enqueue_script('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js');
}

add_action('wp_enqueue_scripts', 'scriptAndStyle');

add_theme_support('menus');
add_theme_support('post-thumbnails');


function register_my_menu()
{
	register_nav_menu('header-menu', __('Header Menu'));
	register_nav_menu('footer-menu', __('Footer Menu'));
}
add_action('init', 'register_my_menu');
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

function create_taxonomy_group()
{

	register_taxonomy(
		'categoria_podcast',
		array('podcast'),
		array(
			'label' => 'Categorias',
			'rewrite' => array('slug' => 'categoria_podcast'),
			'hierarchical' => true,
		)
	);
}

add_action('init', 'create_taxonomy_group');


add_action('init', 'register_post_type_podcast');
function register_post_type_podcast()
{
	$labels = array(
		'name' => 'Podcasts',
		'singular_name' => 'Podcast',
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'taxonomies' => array('categoria_podcast')
	);
	// Register the movie post type with all the information contained in the $arguments array
	register_post_type('podcast', $args);
}
