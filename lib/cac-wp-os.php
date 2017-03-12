<?php
/**
 * Theme functions
 *
 * The majority of the theme functions live here.
 *
 * @link http://www.github.com/bangerkuwranger/wp-OS-theme
 *
 * @package WP OS Theme
 *
 * @since 1.0.0
 */


// require_once( get_template_directory() . '/vendor/roborourke/wp-sass/wp-sass.php' );

/**
* Remove Header Crud.
*
* Declutter the WordPress header.
*
* @since 1.0.0
*
*/
function cAc_wpos_qtip() {

  remove_action( 'wp_head', 'rsd_link' );
  remove_action( 'wp_head', 'wlwmanifest_link' );
  remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
  remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
  remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
  remove_action( 'wp_head', 'wp_generator' );

}

/**
* Register & Enqueue.
*
* Enqueues all scripts and stylesheets.
*
* @since 1.0.0
*
*/
function cAc_wpos_enqueue() {

  if( WP_DEBUG ) {

    $js_ext = '.js';

  }
  else {

    $js_ext = '.min.js';

  }
  if( !is_admin() ) {

    global $wp_styles;
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery',
    'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', false, '3.1.1');
    wp_register_script( 'cacwpos-modernizr', get_stylesheet_directory_uri() . '/lib/js/modernizr-custom.js', array(), '1.0.0', 'false' );
    wp_register_script( 'cacwpos-main', get_stylesheet_directory_uri() . '/lib/js/cacwpos' . $js_ext, array( 'jquery' ), '1.0.0', 'true' );
    wp_register_style( 'cacwpos-stylesheet', get_stylesheet_directory_uri() . '/lib/css/style.css', array(), '', 'all' );
		wp_register_style( 'cacwpos-ie-only', get_stylesheet_directory_uri() . '/lib/css/ie.css', array(), '' );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'cacwpos-modernizr' );
    wp_enqueue_script( 'cacwpos-main' );
    wp_enqueue_style( 'cacwpos-stylesheet' );
		wp_enqueue_style( 'cacwpos-ie-only' );
		$wp_styles->add_data( 'cacwpos-ie-only', 'conditional', 'lt IE 9' );

  }

}
