<?php

 if (!defined( 'FW' ))  die('Forbidden') ;

$options = array(
    'general' => array(
		'title' => __('General', '{domain}'),
        'type' => 'tab',
        'options' => array(
		
			'general-box1' => array(
				'title' => __('General Setting', '{domain}'),
				'type' => 'box',
				'options' => array(
					
					'logo_setting' => array(
							'type'         => 'multi-picker',
							'label'        => false,
							'desc'         => false,
							'value'        => array(
								'gadget' => 'text',
							),
							'picker'       => array(
								'gadget' => array(
									'label'   => __( 'Logo Type', 'unyson' ),
									'type'    => 'radio',
									'choices' => array(
										'image'  => __( 'Image', 'unyson' ),
										'text' => __( 'Text', 'unyson' )
									),
									'desc'    => __( '','unyson' ),
								)
							),
							'choices'      => array(
								'image'  => array(
									'logo' => array(
									'type' => 'group',
									'options' => array(
										'logo_image'  => array( 
											'label' => __('Logo', '{domain}'),
											'desc' => __('Upload logo image', '{domain}'),
											'type' => 'upload', 
										),
										'logo_width'  => array( 
											'type' => 'text',
											'value' => '98',
											'desc' => __('Enter logo width size in pixels. Ex: 98', '{domain}'),
										),
										'logo_height'  => array( 
											'type' => 'text',
											'value' => '56',
											'desc' => __('Enter logo height size in pixels. Ex: 56', '{domain}'),
										),
									),
								),
								),
								'text' => array(
									'logo_title'  => array(
										'type'  => 'text',
										'label' => __( 'Title', 'unyson' ),
										'desc' => __('Enter the title', '{domain}'),
										'value' => 'micky',
									),
									'logo_title_style' => array(
									'type' => 'typography-v2',
									'value' => array(
										'size' => 45,
										'line-height' => 50,
										'letter-spacing' => -2,
										'color' => '#363636'
									),
									'components' => array(
										'family'         => false,
										'size'           => true,
										'line-height'    => true,
										'letter-spacing' => true,
										'color'          => true
									),
									'label' => __('', '{domain}'),
									'desc'  => __('Choose the title font', '{domain}'),
									),
									'logo_subtitle'  => array(
										'type'  => 'text',
										'label' => __( 'subtitle', 'unyson' ),
										'desc' => __('Enter the subtitle', '{domain}'),
										'value' => 'wp theme',
									),
									'logo_subtitle_style' => array(
									'type' => 'typography-v2',
									'value' => array(
										'size' => 14,
										'line-height' => 3,
										'letter-spacing' => 2,
										'color' => '#363636'
									),
									'components' => array(
										'family'         => false,
										'size'           => true,
										'line-height'    => true,
										'letter-spacing' => true,
										'color'          => true
									),
									'label' => __('', '{domain}'),
									'desc'  => __('Choose the subtitle font', '{domain}'),
									)
								),
							),
							'show_borders' => false,
					),
					'theme_sidebar' => array(
								'label'   => __( 'Theme Sidebar Position', 'unyson' ),
								'type'    => 'image-picker',
								'value'   => 'right',
								'desc'    => __( 'Select main content and sidebar alignment. Choose between 1, 2 or 3 column layout.',
									'unyson' ),
								'choices' => array(
									'full' => array(
										'small' => array(
											'height' => 40,
											'src'    => get_template_directory_uri() . '/assets/images/1c.png'
										),
									),
									'left' => array(
										'small' => array(
											'height' => 40,
											'src'    => get_template_directory_uri() . '/assets/images/2cl.png'
										),
									),
									'right' => array(
										'small' => array(
											'height' => 40,
											'src'    => get_template_directory_uri() . '/assets/images/2cr.png'
										),
									),
								),
							),
					
					

				
				
				)
		
		
			),
		
		
		)
    ),
	'footer' => array(
		'title' => __('Footer', '{domain}'),
        'type' => 'tab',
        'options' => array(
			'footer-box1' => array(
				'title' => __('Footer Setting', '{domain}'),
				'type' => 'box',
				'options' => array(
					'footer_logo' => array(
								'type' => 'group',
								'options' => array(
									'footer_logo_image'  => array( 
										'label' => __('Footer Logo', '{domain}'),
										'desc' => __('Upload logo image', '{domain}'),
										'type' => 'upload', 
									),
									'footer_logo_width'  => array( 
										'type' => 'text',
										'value' => '98',
										'desc' => __('Enter logo width size in pixels. Ex: 98', '{domain}'),
									),
									'footer_logo_height'  => array( 
										'type' => 'text',
										'value' => '56',
										'desc' => __('Enter logo height size in pixels. Ex: 56', '{domain}'),
									),
								),
								'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
						),
						'footer_copyrigth' => array(
								'label' => __('Copyright', '{domain}'),
								'desc' => __('Please enter the copyright text.', '{domain}'),
								'type' => 'text', 
								'value' => 'Copyright &copy; 2016 by Micky'
						),
						'footer_social' =>array(
								'type' => 'addable-popup',
								'value' => array(
									array(
										'footer_social_name' => '',
										'footer_social_font' => '',
										'footer_social_link' => '',
									),
									// ...
								),
								'label' => __('Social Links', '{domain}'),
								'desc'  => __('Add your social profiles.', '{domain}'),
								'template' => '{{- footer_social_name }}',
								'popup-title' => null,
								'size' => 'small', // small, medium, large
								'limit' => 0, // limit the number of popup`s that can be added
								'add-button-text' => __('Add', '{domain}'),
								'sortable' => true,
								'popup-options' => array(
									'footer_social_name' => array(
										'label' => __('Name', '{domain}'),
										'type' => 'text',
										'desc' => __('Enter a name (it is for internal use and will not appear on the front end).', '{domain}'),
									),
									'footer_social_font' => array(
										'type'  => 'icon',
										'value' => 'fa-smile-o',
										'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
										'label' => __('Icon', '{domain}'),
										'desc'  => __('Select social icon type.', '{domain}'),
									),
									'footer_social_link' => array(
										'label' => __('Link', '{domain}'),
										'type' => 'text',
										'desc' => __('Enter your social URL link.', '{domain}'),
									),
								),
							),
							
					)
					
				)
		
		)
    ),
	
	
	
	
	
	
	'404_error' => array(
		'title' => __('404 Error', '{domain}'),
        'type' => 'tab',
        'options' => array(
			'error-page' => array(
				'title' => __('404 Error Page Setting', '{domain}'),
				'type' => 'box',
				'options' => array(
					'error_page_name'  => array( 
						'label' => __('Page Name', '{domain}'),
						'type' => 'text',
						'value' => '404 ERROR',
						'desc' => __('', '{domain}'),
					),
					'error_page_title'  => array( 
						'label' => __('Page Title', '{domain}'),
						'type' => 'text',
						'value' => 'Sorry, This Page Is Not Available',
						'desc' => __('', '{domain}'),
					),
					'error_page_subtitle'  => array( 
						'label' => __('Page Subtitle', '{domain}'),
						'type' => 'text',
						'value' => 'Something is not quite right here',
						'desc' => __('', '{domain}'),
					),
					'error_title'  => array( 
						'label' => __('Title', '{domain}'),
						'type' => 'text',
						'value' => '404',
						'desc' => __('', '{domain}'),
					),
					'error_subtitle'  => array( 
						'label' => __('Subtitle', '{domain}'),
						'type' => 'text',
						'value' => 'Page Not Found',
						'desc' => __('', '{domain}'),
					),
					
							
					)
					
				)
		
		)
    ),
);


?>