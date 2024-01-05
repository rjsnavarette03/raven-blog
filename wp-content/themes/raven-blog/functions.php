<?php

/**
 * Raven Blog functions and definitions
 *
 * @package Raven Blog
 * @since Raven Blog 1.0
 */

if ( ! function_exists( 'raven_blog_setup' ) ) :

	/**
	 * Sets up theme defaults and registers support for various
	 * WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme
	 * hook, which runs before the init hook. The init hook is too late
	 * for some features, such as indicating support post thumbnails.
	 */
	function raven_blog_setup() {

		/**
		 * Make theme available for translation.
		 * Translations can be placed in the /languages/ directory.
		 */
		load_theme_textdomain( 'myfirsttheme', get_template_directory() . '/languages' );

		/**
		 * Add default posts and comments RSS feed links to <head>.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Enable support for post thumbnails and featured images.
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Add support for two custom navigation menus.
		 */
		register_nav_menus( array(
			'primary'   => __( 'Primary Menu', 'myfirsttheme' ),
			'secondary' => __( 'Secondary Menu', 'myfirsttheme' ),
		) );

		/**
		 * Enable support for the following post formats:
		 * aside, gallery, quote, image, and video
		 */
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
	}
endif; // raven_blog_setup
add_action( 'after_setup_theme', 'raven_blog_setup' );

/*----------------------------------------------
Enqueue Styles
----------------------------------------------*/
if ( ! function_exists( 'raven_blog_styles' ) ) :
    function raven_blog_styles() {
        // Register Stylesheet
        wp_enqueue_style( 'raven-blog-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
        wp_enqueue_style( 'raven-blog-style-blocks', get_template_directory_uri() . '/assets/css/blocks.css');
    }
endif; // raven_blog_styles
add_action( 'wp_enqueue_scripts', 'raven_blog_styles' );