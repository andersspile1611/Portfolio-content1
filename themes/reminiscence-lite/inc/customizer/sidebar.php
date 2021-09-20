<?php
/**
* Layouts Settings.
*
* @package Reminiscence Lite
*/

$reminiscence_lite_default = reminiscence_lite_get_default_theme_options();
$sidebar_option = reminiscence_lite_sidebar_options();
$sidebar_option_1 = reminiscence_lite_sidebar_options( $global = false );

$wp_customize->add_section( 'sidebar_setting',
	array(
	'title'      => esc_html__( 'Sidebar Settings', 'reminiscence-lite' ),
	'priority'   => 60,
	'capability' => 'edit_theme_options',
	'panel'      => 'reminiscence_lite_options',
	)
);

$wp_customize->add_setting( 'global_sidebar_layout',
	array(
	'default'           => $reminiscence_lite_default['global_sidebar_layout'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'reminiscence_lite_sanitize_sidebar_option',
	)
);
$wp_customize->add_control( 'global_sidebar_layout',
	array(
	'label'       => esc_html__( 'Homepage Sidebar Layout', 'reminiscence-lite' ),
	'section'     => 'sidebar_setting',
	'type'        => 'select',
	'choices'     => $sidebar_option_1,
	)
);

$wp_customize->add_setting( 'archive_sidebar_layout',
	array(
	'default'           => $reminiscence_lite_default['archive_sidebar_layout'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'reminiscence_lite_sanitize_sidebar_option',
	)
);
$wp_customize->add_control( 'archive_sidebar_layout',
	array(
	'label'       => esc_html__( 'Archive Sidebar Layout', 'reminiscence-lite' ),
	'section'     => 'sidebar_setting',
	'type'        => 'select',
	'choices'     => $sidebar_option,
	)
);


$wp_customize->add_setting( 'single_sidebar_layout',
	array(
	'default'           => $reminiscence_lite_default['single_sidebar_layout'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'reminiscence_lite_sanitize_sidebar_option',
	)
);
$wp_customize->add_control( 'single_sidebar_layout',
	array(
	'label'       => esc_html__( 'Single Sidebar Layout', 'reminiscence-lite' ),
	'section'     => 'sidebar_setting',
	'type'        => 'select',
	'choices'     => $sidebar_option,
	)
);
