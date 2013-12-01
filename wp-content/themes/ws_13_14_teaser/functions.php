<?php 
$template_dir = get_template_directory_uri();

function register_all_styles(){
	wp_register_style( 'normalize-style', get_template_directory_uri() . '/normalize.css', array(), '20130914', 'all' );
	wp_register_style( 'main-style', get_template_directory_uri() . '/style.css', array(), '20130914', 'all' );

	wp_enqueue_style( 'normalize-style' );;
	wp_enqueue_style( 'main-style' );
};

function register_all_scripts(){
	wp_register_script( 'jQuery', get_template_directory_uri() . '/js/lib/jquery.js', array(),true );
	wp_register_script( 'nested', get_template_directory_uri() . '/js/lib/jquery.nested.js', array(),true );
	wp_register_script( 'hover', get_template_directory_uri() . '/js/lib/jquery.hoverIntent.minified.js', array(),true );
	wp_register_script( 'packery', get_template_directory_uri() . '/js/lib/packery.pkgd.min.js', array(),true );
	wp_register_script( 'isotope', get_template_directory_uri() . '/js/lib/jquery.isotope.min.js', array(),true );
	wp_register_script( 'isotopePerfectMasonry', get_template_directory_uri() . '/js/lib/jquery.isotope.perfectmasonry.js', array(),true );
	wp_register_script( 'main-scripts', get_template_directory_uri() . '/js/scripts.js', array(), true );

	wp_enqueue_script('jQuery');
	wp_enqueue_script('nested');
	wp_enqueue_script('hover');
	wp_enqueue_script('packery');
	wp_enqueue_script('isotope');
	wp_enqueue_script('isotopePerfectMasonry');
	wp_enqueue_script('main-scripts');
}

add_action( 'wp_enqueue_scripts', 'register_all_styles' );
add_action( 'wp_enqueue_scripts', 'register_all_scripts');


function getByCat($cat){
	$args=array(
	  'category_name' => $cat,
	  'post_status' => 'publish',
	  'posts_per_page' => -1,
	  'orderby' => 'meta_value',
	  'order' => 'ASC'
	);

	$my_query = null;
	$my_query = new WP_Query($args);
	if( $my_query->have_posts() ) {
  		return $my_query;
	}
	wp_reset_query();  // Restore global post data stomped by the_post().
}

function getByType($type, $reset = true, $tag = ''){
	$args=array(
	  'post_type' => $type,
	  'post_status' => 'publish',
	  'posts_per_page' => -1,
	  'orderby' => 'meta_value',
	  'order' => 'ASC',
	  'tag' => $tag
	);

	$my_query = null;
	$my_query = new WP_Query($args);
	if( $my_query->have_posts() ) {
  		return $my_query;
	}

	if( $reset ){
		wp_reset_query();  // Restore global post data stomped by the_post().
	}
}

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 200, 200 );
}

if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'square-thumb', 200, 200, true ); //(cropped)
}

function custom_taxonomies_terms_links() {
    global $post, $post_id;
    // get post by post id
    $post = &get_post($post->ID);
    // get post type by post
    $post_type = $post->post_type;
    // get post type taxonomies
    $taxonomies = get_object_taxonomies($post_type);
    $out = "";
    foreach ($taxonomies as $taxonomy) {        
        // get the terms related to post
        $terms = get_the_terms( $post->ID, $taxonomy );
        if ( !empty( $terms ) ) {
            foreach ( $terms as $term )
                $out .= $term->name;
        }
    }
    return $out;
}
?>