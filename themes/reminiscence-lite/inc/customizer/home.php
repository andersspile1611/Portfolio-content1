<?php
/**
 * Section Reorder
 *
 * @package Reminiscence Lite
**/

$reminiscence_lite_default = reminiscence_lite_get_default_theme_options();

// Section Reorder
$wp_customize->add_section( 'wedev_home_section_reorder',
	array(
	'title'      => esc_html__( 'Section Reorder', 'reminiscence-lite' ),
	'capability' => 'edit_theme_options',
	'panel'		 => 'reminiscence_lite_home',
	)
);


$wp_customize->add_setting(
	'home_section_order_6', 
	array(
		'default' => $reminiscence_lite_default['home_section_order_6'],
		'sanitize_callback' => 'reminiscence_lite_sanitize_reorder',
	)
);

$wp_customize->add_control(
	new Reminiscence_Lite_Sortable_Control(
		$wp_customize,
		'home_section_order_6',
		array(
			'section'     => 'wedev_home_section_reorder',
			'label'       => __( 'Home Section Re-Order', 'reminiscence-lite' ),
			'choices'     => array(
                'cta-section'   => __( 'Call To Action Section', 'reminiscence-lite' ),
                'banner'   => __( 'Slide Banner Section', 'reminiscence-lite' ),
        		'featured-category'  => __( 'Featured Category', 'reminiscence-lite' ),
        		'latest-posts'   => __( 'Latest Posts', 'reminiscence-lite' ),
        	),
		)
	)
);