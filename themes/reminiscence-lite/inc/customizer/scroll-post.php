<?php
/**
 * Trending Article section
 *
 * @package Reminiscence Lite
 */

$default = reminiscence_lite_get_default_theme_options();
$reminiscence_lite_post_category_list = reminiscence_lite_post_category_list();

// Trending Article Main Section.
$wp_customize->add_section( 'trending_article_section_settings',
	array(
		'title'      => __( 'Trending Article Section', 'reminiscence-lite' ),
		'priority'   => 5,
		'capability' => 'edit_theme_options',
		'panel'      => 'reminiscence_lite_home',
	)
);

// Setting - enable_trending_article_section.
$wp_customize->add_setting( 'enable_trending_article_section',
	array(
		'default'           => $default['enable_trending_article_section'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'reminiscence_lite_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'enable_trending_article_section',
	array(
		'label'    => __( 'Enable Trending Article Section', 'reminiscence-lite' ),
		'section'  => 'trending_article_section_settings',
		'type'     => 'checkbox',
	)
);


$wp_customize->add_setting( 'trending_section_title',
	array(
		'default'           => $default['trending_section_title'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'trending_section_title',
	array(
		'label'    => __( 'Trending Section Text', 'reminiscence-lite' ),
		'section'  => 'trending_article_section_settings',
		'type'     => 'text',
	)
);

$wp_customize->add_setting( 'select_trending_category', array(
    'default'           => '',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'reminiscence_lite_sanitize_select',
) );
$wp_customize->add_control( 'select_trending_category', array(
    'input_attrs'       => array(
        'style'           => 'width: 50px;'
        ),
    'label'             => __( 'Select Trending Category', 'reminiscence-lite' ),
    'type'        => 'select',
    'section'           => 'trending_article_section_settings',
    'choices'     => $reminiscence_lite_post_category_list,
    )
);


