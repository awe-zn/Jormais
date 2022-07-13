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

function custom_excerpt_length($length)
{
	return 15;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);
