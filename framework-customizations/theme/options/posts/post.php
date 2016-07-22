<?php
if (!defined( 'FW' ))  die('Forbidden') ;
$options = array(
	'post_setting' => array(
		'title' => __('Post Setting', '{domain}'),
		'type' => 'box',
		'options' => array(
			'post_sidebar' => array(
				'label'   => __( 'Post Sidebar Position', 'unyson' ),
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
);
?>