<?php

// =============================================================================
// CONSTANTS
// =============================================================================

// Version of the child theme
define( 'CHILD_VERSION', '1.0.1' );

// Name of the child theme
define( 'CHILD_NAME', 'Fictioneer Liminal' );

// =============================================================================
// CHILD THEME SETUP
// =============================================================================

/**
 * Enqueue child theme style and scripts
 *
 * @since Fictioneer Liminal 1.0
 */

function liminal_style_and_script_queue() {
  $parenthandle = 'fictioneer-application';

  // Enqueue styles
  wp_enqueue_style(
    'fictioneer-liminal-style',
    get_stylesheet_directory_uri() . '/css/fictioneer-liminal-style.css',
    array( $parenthandle )
  );

  // Register script
  // wp_register_script(
  //   'fictioneer-liminal-script',
  //   get_stylesheet_directory_uri() . '/js/fictioneer-liminal-script.js',
  //   ['fictioneer-application-scripts'],
  //   false,
  //   true
  // );

  // Enqueue script
  // wp_enqueue_script( 'fictioneer-liminal-script' );
}
add_action( 'wp_enqueue_scripts', 'liminal_style_and_script_queue', 99 ); // Make sure this is added late!

?>
