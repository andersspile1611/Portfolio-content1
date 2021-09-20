<?php
/**
 * Pagination Settings
 *
 * @package Reminiscence Lite
 */

$reminiscence_lite_default = reminiscence_lite_get_default_theme_options();

// Pagination Section.
$wp_customize->add_section( 'reminiscence_lite_pagination_section',
	array(
	'title'      => esc_html__( 'Pagination Settings', 'reminiscence-lite' ),
	'priority'   => 20,
	'capability' => 'edit_theme_options',
	'panel'		 => 'reminiscence_lite_options',
	)
);

// Pagination Layout Settings
$wp_customize->add_setting( 'reminiscence_lite_pagination_layout',
	array(
	'default'           => $reminiscence_lite_default['reminiscence_lite_pagination_layout'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'reminiscence_lite_pagination_layout',
	array(
	'label'       => esc_html__( 'Pagination Method', 'reminiscence-lite' ),
	'section'     => 'reminiscence_lite_pagination_section',
	'type'        => 'select',
	'choices'     => array(
		'next-prev' => esc_html__('Next/Previous Method','reminiscence-lite'),
		'numeric' => esc_html__('Numeric Method','reminiscence-lite'),
		'load-more' => esc_html__('Ajax Load More Button','reminiscence-lite'),
		'auto-load' => esc_html__('Ajax Auto Load','reminiscence-lite'),
	),
	)
);