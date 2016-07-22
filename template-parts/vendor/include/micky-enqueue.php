<?php
/**
 * Enqueue scripts.
 */
function micky_scripts() {

	wp_register_script('micky_bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'),null,true);
	wp_register_script('micky_tools', get_template_directory_uri() . '/assets/js/plugins/revolution/js/jquery.themepunch.tools.min.js', array('jquery'),null,true);
	wp_register_script('micky_revolution', get_template_directory_uri() . '/assets/js/plugins/revolution/js/jquery.themepunch.revolution.min.js', array('jquery'),null,true);
	wp_register_script('micky_revolution_layeranimation', get_template_directory_uri() . '/assets/js/plugins/revolution/js/revolution.extension.layeranimation.min.js', array('jquery'),null,true);
	wp_register_script('micky_revolution_navigation', get_template_directory_uri() . '/assets/js/plugins/revolution/js/revolution.extension.navigation.min.js', array('jquery'),null,true);
	wp_register_script('micky_revolution_slideanims', get_template_directory_uri() . '/assets/js/plugins/revolution/js/revolution.extension.slideanims.min.js', array('jquery'),null,true);
	wp_register_script('micky_revolution_actions', get_template_directory_uri() . '/assets/js/plugins/revolution/js/revolution.extension.actions.min.js', array('jquery'),null,true);
	wp_register_script('micky_revolution_parallax', get_template_directory_uri() . '/assets/js/plugins/revolution/js/revolution.extension.parallax.min.js', array('jquery'),null,true);
	wp_register_script('micky_wow', get_template_directory_uri() . '/assets/js/plugins/wow/wow.min.js', array('jquery'),null,true);
	wp_register_script('micky_carousel', get_template_directory_uri() . '/assets/js/plugins/crousel/js/owl.carousel.js', array('jquery'),null,true);
	wp_register_script('micky_magnific_popup', get_template_directory_uri() . '/assets/js/plugins/video/jquery.magnific-popup.js', array('jquery'),null,true);
	wp_register_script('micky_bootstrap_select', get_template_directory_uri() . '/assets/js/bootstrap-select.js', array('jquery'),null,true);
	wp_register_script('micky_custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'),null,true);
	
	wp_enqueue_script('micky_bootstrap');
	wp_enqueue_script('micky_tools');
	wp_enqueue_script('micky_revolution');
	wp_enqueue_script('micky_revolution_layeranimation');
	wp_enqueue_script('micky_revolution_navigation');
	wp_enqueue_script('micky_revolution_slideanims');
	wp_enqueue_script('micky_revolution_actions');
	wp_enqueue_script('micky_revolution_parallax');
	wp_enqueue_script('micky_wow');
	wp_enqueue_script('micky_carousel');
	wp_enqueue_script('micky_magnific_popup');
	wp_enqueue_script('micky_bootstrap_select');
	wp_enqueue_script('micky_custom');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'micky_scripts' );

/**
 * Enqueue styles.
 */
function micky_styles() {
	wp_register_style('micky_defaultbasic', get_stylesheet_uri(), array(), '1', 'all');
	wp_register_style('micky_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1', 'all');
	wp_register_style('micky_responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1', 'all');
	wp_register_style('micky_fonts', get_template_directory_uri() . '/assets/css/fonts.css', array(), '1', 'all');
	wp_register_style('micky_font_awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), '1', 'all');
	wp_register_style('micky_line_icons', get_template_directory_uri() . '/assets/css/simple-line-icons.css', array(), '1', 'all');
	wp_register_style('micky_bootstrap_select', get_template_directory_uri() . '/assets/css/bootstrape-select.css', array(), '1', 'all');
	wp_register_style('micky_animation', get_template_directory_uri() . '/assets/css/animation.css', array(), '1', 'all');
	wp_register_style('micky_revolution_layers', get_template_directory_uri() . '/assets/js/plugins/revolution/css/layers.css', array(), '1', 'all');
	wp_register_style('micky_revolution_settings', get_template_directory_uri() . '/assets/js/plugins/revolution/css/settings.css', array(), '1', 'all');
	wp_register_style('micky_carousel', get_template_directory_uri() . '/assets/js/plugins/crousel/css/owl.carousel.css', array(), '1', 'all');
	wp_register_style('micky_style', get_template_directory_uri() . '/assets/css/custom-style.css', array(), '1', 'all');
	
	wp_enqueue_style('micky_defaultbasic');
	wp_enqueue_style('micky_bootstrap');
	wp_enqueue_style('micky_responsive');
	wp_enqueue_style('micky_fonts');
	wp_enqueue_style('micky_font_awesome');
	wp_enqueue_style('micky_line_icons');
	wp_enqueue_style('micky_bootstrap_select');
	wp_enqueue_style('micky_animation');
	wp_enqueue_style('micky_revolution_layers');
	wp_enqueue_style('micky_revolution_settings');
	wp_enqueue_style('micky_carousel');
	wp_enqueue_style('micky_style');
}
add_action( 'wp_enqueue_scripts', 'micky_styles' );
?>