<?php
/**
 * micky Theme Customizer.
 *
 * @package micky
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function micky_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	$wp_customize->remove_section('colors');
	$wp_customize->remove_section('background_image');
	//___logo setting___//
    $wp_customize->add_section(
        'micky_logo',
        array(
            'title'         => __('Header Logo', 'micky'),
            'priority'      => 8,
        )
    );
	 $wp_customize->add_setting(
        'site_logo',
        array(
            'default-image' => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'site_logo',
            array(
               'label'          => __( 'Upload your logo', 'micky' ),
               'type'           => 'image',
               'section'        => 'micky_logo',
            )
        )
    );
	//logo width
    $wp_customize->add_setting(
        'logo_width',
        array(
            'default' => __('98','micky'),
            'sanitize_callback' => 'absint',
        )
    );
    $wp_customize->add_control(
        'logo_width',
        array(
            'label'         => __( 'Logo Width', 'micky' ),
            'section'       => 'micky_logo',
            'type'          => 'number',
            'description'   => __('', 'micky'),       
            'priority'      => 10,
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 300,
                'step'  => 1,
            ),            
        )
    );
	//logo height
    $wp_customize->add_setting(
        'logo_height',
        array(
            'default' => __('56','micky'),
            'sanitize_callback' => 'absint',
        )
    );
    $wp_customize->add_control(
        'logo_height',
        array(
            'label'         => __( 'Logo Height', 'micky' ),
            'section'       => 'micky_logo',
            'type'          => 'number',
            'description'   => __('', 'micky'),       
            'priority'      => 10,
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 200,
                'step'  => 1,
            ),            
        )
    );
	
	//___footer logo setting___//
    $wp_customize->add_section(
        'micky_footer_logo',
        array(
            'title'         => __('Footer Setting', 'micky'),
            'priority'      => 8,
        )
    );
	 $wp_customize->add_setting(
        'site_footer_logo',
        array(
            'default-image' => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'site_footer_logo',
            array(
               'label'          => __( 'Upload your footer logo', 'micky' ),
               'type'           => 'image',
               'section'        => 'micky_footer_logo',
            )
        )
    );
	//logo width
    $wp_customize->add_setting(
        'footer_logo_width',
        array(
            'default' => __('98','micky'),
            'sanitize_callback' => 'absint',
        )
    );
    $wp_customize->add_control(
        'footer_logo_width',
        array(
            'label'         => __( 'Footer Logo Width', 'micky' ),
            'section'       => 'micky_footer_logo',
            'type'          => 'number',
            'description'   => __('', 'micky'),       
            'priority'      => 10,
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 300,
                'step'  => 1,
            ),            
        )
    );
	//logo height
    $wp_customize->add_setting(
        'footer_logo_height',
        array(
            'default' => __('56','micky'),
            'sanitize_callback' => 'absint',
        )
    );
    $wp_customize->add_control(
        'footer_logo_height',
        array(
            'label'         => __( 'Footer Logo Height', 'micky' ),
            'section'       => 'micky_footer_logo',
            'type'          => 'number',
            'description'   => __('', 'micky'),       
            'priority'      => 10,
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 200,
                'step'  => 1,
            ),            
        )
    );
	//logo copyright
    $wp_customize->add_setting(
        'footer_copyright',
        array(
            'default' => 'Copyright 2016 by Micky',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
        'footer_copyright',
        array(
            'label'         => __( 'Footer Copyright', 'micky' ),
            'section'       => 'micky_footer_logo',
            'type'          => 'text',
            'description'   => __('', 'micky'),      
        )
    );
	//Sidebar Position
	$wp_customize->add_section(
        'sidebar_position',
        array(
            'title'         => __('Sidebar Position', 'micky'),
            'priority'      => 8,
        )
    );
	$wp_customize->add_setting(
        'sidebar_layout',
        array(
            'default'           => 'right',
            'sanitize_callback' => 'micky_sanitize_choices_field',
        )
    );
    $wp_customize->add_control(
        'sidebar_layout',
        array(
            'type'      => 'radio',
            'label'     => __('Theme Sidebar Position', 'micky'),
            'section'   => 'sidebar_position',
            'priority'  => 11,
			'description'   => __('This option work for blog page, blog single page, archive page and search page.', 'micky'),      
            'choices'   => array(
                'full'           => __( 'Full', 'micky' ),
                'left'         => __( 'Left', 'micky' ),
                'right'    => __( 'Right', 'micky' )
            ),
        )
    ); 
	$wp_customize->add_setting(
        'page_sidebar_layout',
        array(
            'default'           => 'right',
            'sanitize_callback' => 'micky_sanitize_choices_field',
        )
    );
    $wp_customize->add_control(
        'page_sidebar_layout',
        array(
            'type'      => 'radio',
            'label'     => __('Page Sidebar Position', 'micky'),
            'section'   => 'sidebar_position',
            'priority'  => 11,
			'description'   => __('This option work for pages.', 'micky'), 
            'choices'   => array(
                'full'           => __( 'Full', 'micky' ),
                'left'         => __( 'Left', 'micky' ),
                'right'    => __( 'Right', 'micky' )
            ),
        )
    ); 
}
add_action( 'customize_register', 'micky_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function micky_customize_preview_js() {
	wp_enqueue_script( 'micky_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'micky_customize_preview_js' );

function micky_sanitize_choices_field( $input ) {
	return $input;
}
