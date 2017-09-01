<?php 

/**
 * Enqueue scripts and styles.
 */
function daniil_theme_scripts() {
  wp_enqueue_style( 'daniil-theme-style', get_stylesheet_uri() );

  wp_enqueue_style( 'daniil-theme-theme', get_template_directory_uri() . '/css/theme.css' );
  wp_enqueue_style( 'daniil-theme-media', get_template_directory_uri() . '/css/media.css' );

  wp_enqueue_script( 'daniil-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

  wp_enqueue_script( 'daniil-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'daniil_theme_scripts' );