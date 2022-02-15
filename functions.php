<?php

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}



add_theme_support( 'post-thumbnails' );



function theme_files() {

  wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css', _S_VERSION );
  wp_enqueue_style( 'bootstrap ', '//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css', _S_VERSION );
  wp_enqueue_style( 'slick-theme.min. ', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css', _S_VERSION );
  wp_enqueue_style( 'slick.min ', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', _S_VERSION );
  wp_enqueue_style( 'script-name', get_template_directory_uri() . '/assets/css/style.css', _S_VERSION );

  wp_enqueue_script( "jquery", "//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js", array(), _S_VERSION, true );
  wp_enqueue_script( "bootstrap-name", "//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js", array(), _S_VERSION, true );
  wp_enqueue_script( "slick-name", "//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js", array(), _S_VERSION, true );
  wp_enqueue_script( "waypoints-name", "//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js", array(), _S_VERSION, true );
  wp_enqueue_script( "counterup", get_template_directory_uri() . "/assets/js/jquery.counterup.min.js", array(), _S_VERSION, true );
  wp_enqueue_script( "script", get_template_directory_uri() . "/assets/js/script.js", array(), _S_VERSION, true );
}

add_action( 'wp_enqueue_scripts', 'theme_files' );


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Site General Settings',
		'menu_title'	=> 'Site Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}



remove_filter ('the_content', 'wpautop');	