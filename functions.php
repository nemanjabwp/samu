<?php
/**
 * Theme setup.
 */
if ( ! function_exists( 'samu_support' ) ) :
	/**
    * Sets up theme defaults and registers support for various WordPress features.
    */
	function samu_support()  {

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Add support for featured images.
		add_theme_support( 'post-thumbnails' );

		// Add support for alignwide and alignfull classes in the block editor.
		add_theme_support( 'align-wide' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Add support for custom units.
		add_theme_support( 'custom-units' );
	}
endif;

	add_action( 'after_setup_theme', 'samu_support' );

/**
 * Enqueue scripts and styles.
 */

function samu_scripts() {
	// Enqueue theme stylesheet.
	wp_enqueue_style( 'samu-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	
	// Enqueue your script (example)
	wp_enqueue_script( 'samu-script', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
	
}

add_action( 'wp_enqueue_scripts', 'samu_scripts' );
