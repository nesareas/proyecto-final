<?php 

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', array( 'image', 'quote' ) );
add_theme_support( 'html5' );

function wpt_theme_styles() {

	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.css' );
  wp_enqueue_style( 'etalage_css', get_template_directory_uri() . '/css/etalage.css' );
	//wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'googlefont_css', 'http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic' );
  wp_enqueue_style( 'http://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700,800,900' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );


// Add theme support to bootstrap navigation
function my_theme_setup()
{
    register_nav_menus(array(
        'primary-menu' => __( 'Primary Menu' )
        )
    );
}
add_action('init', 'my_theme_setup');

function wpt_theme_js() {

     wp_enqueue_script( '/slider.js', get_template_directory_uri() . '/js/js/nav.js', '', '', true );  
    wp_enqueue_script( '/slider.js', get_template_directory_uri() . '/js/slider.js', '', '', true );	
    wp_enqueue_script( '/hover_pack.js', get_template_directory_uri() . '/js/hover_pack.js', '', '', true );	
    wp_enqueue_script( '/acordeon_a.js', get_template_directory_uri() . '/js/acordeon.js', '', '', true );  
    wp_enqueue_script( '/js/responsiveslides_min.js', get_template_directory_uri() . '/js/responsiveslides.min.js', '', '', false );	
	 wp_enqueue_script( 'foundation_js', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'), '', true );
	 wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js', array('jquery', 'foundation_js'), '', true );	
}
add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );


function create_post_type() {
  register_post_type( 'product',
    array(
      'labels' => array(
        'name' => __( 'Products' ),
        'singular_name' => __( 'Product' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}
add_action( 'init', 'create_post_type' );
?>