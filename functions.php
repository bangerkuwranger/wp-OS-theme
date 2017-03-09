<?php

/**
 * Main function file
 *
 * Bootstraps theme functions and includes.
 *
 * @link http://www.github.com/bangerkuwranger/wp-OS-theme
 *
 * @package WP OS Theme
 *
 * @since 1.0.0
 */


/**
 * Main functions for theme.
 */
require_once( 'lib/cac-wp-os.php' );


/**
 * Main Theme Function.
 *
 * Loads theme functions and performs post setup cleanup.
 *
 * @since 1.0.0
 *
 */
function cAc_wpos_bootstrap() {

  load_theme_textdomain( 'cac-wp-os', get_template_directory() . '/lib/translation' );
  add_action( 'init', 'cAc_wpos_qtip' );

}

add_action( 'after_setup_theme', 'cAc_wpos_bootstrap' );
