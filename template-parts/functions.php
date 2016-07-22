<?php
/**
 * micky functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package micky
 */
//define('MICKY_AJAX_URL', admin_url('admin-ajax.php') );
if ( ! function_exists( 'micky_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function micky_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on micky, use a find and replace
	 * to change 'micky' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'micky', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	if ( function_exists( 'add_theme_support' )){	
		add_theme_support('post-thumbnails',array('post')); 
	}

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'micky' => esc_html__( 'Micky Header Menu', 'micky' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'micky_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	
	add_editor_style( array(  get_template_directory_uri() . 'assets/css/fonts.css') );
}
endif;
add_action( 'after_setup_theme', 'micky_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function micky_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'micky_content_width', 640 );
}
add_action( 'after_setup_theme', 'micky_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function micky_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'micky' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'micky' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'micky_widgets_init' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/************************ start Micky Require File ************************/


require_once get_template_directory().'/vendor/functions.php';

/************************ closeMicky Require File ************************/
?>