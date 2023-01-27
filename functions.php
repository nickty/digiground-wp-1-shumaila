<?php 


function load_css()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');

    wp_enqueue_style( 'bootstrap' );

    wp_enqueue_style('my-main-style', get_stylesheet_uri(), false, '20150320');
}

add_action( 'wp_enqueue_scripts', 'load_css' );

function load_js()
{

    wp_enqueue_script( 'jquery' );

    wp_register_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true );

    wp_enqueue_script( 'bootstrapjs' );
}

add_action( 'wp_enqueue_scripts', 'load_js' );


if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {

	function mytheme_register_nav_menu(){
		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'text_domain' ),
	    	'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
		) );
	}
	add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// loading fontawesome
function wpb_load_fa() {
 
    wp_enqueue_style( 'wpb-fa', get_stylesheet_directory_uri() . 'https://cdn.wpbeginner.com/fonts/css/font-awesome.min.css' );
     
    }
     
add_action( 'wp_enqueue_scripts', 'wpb_load_fa' );