<?php 

$template_dir = get_template_directory_uri();

function register_all_styles(){
	wp_register_style( 'foundation', get_template_directory_uri() . '/foundation.css', array(), '20140201', 'all' );
	wp_register_style( 'main-style', get_template_directory_uri() . '/style.css', array(), '20140201', 'all' );

	wp_enqueue_style( 'foundation' );
	wp_enqueue_style( 'main-style' );
};

function register_all_scripts(){
	wp_register_script( 'jQuery', get_template_directory_uri() . '/js/lib/jquery.js', array(),true );
	wp_register_script( 'nested', get_template_directory_uri() . '/js/lib/jquery.nested.js', array(),true );
	wp_register_script( 'hover', get_template_directory_uri() . '/js/lib/jquery.hoverIntent.minified.js', array(),true );
	wp_register_script( 'packery', get_template_directory_uri() . '/js/lib/packery.pkgd.min.js', array(),true );
	wp_register_script( 'isotope', get_template_directory_uri() . '/js/lib/jquery.isotope.min.js', array(),true );
	wp_register_script( 'isotopePerfectMasonry', get_template_directory_uri() . '/js/lib/jquery.isotope.perfectmasonry.js', array(),true );
	wp_register_script( 'selectBox', get_template_directory_uri() . '/js/lib/jquery.selectbox-0.2.min.js', array(),true );
	wp_register_script( 'froogaloop', get_template_directory_uri() . '/js/lib/froogaloop.min.js', array(),true );
	wp_register_script( 'main-scripts', get_template_directory_uri() . '/js/scripts.js', array(), true );

	wp_enqueue_script('jQuery');
	wp_enqueue_script('nested');
	wp_enqueue_script('hover');
	wp_enqueue_script('packery');
	wp_enqueue_script('isotope');
	wp_enqueue_script('isotopePerfectMasonry');
	wp_enqueue_script('selectBox');
	wp_enqueue_script('froogaloop');
	wp_enqueue_script('main-scripts');
}

add_action( 'wp_enqueue_scripts', 'register_all_styles' );
add_action( 'wp_enqueue_scripts', 'register_all_scripts' );


?>