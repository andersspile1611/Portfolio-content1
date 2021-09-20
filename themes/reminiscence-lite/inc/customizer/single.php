<?php
/**
 * Single Post Settings.
 *
 * @package Reminiscence Lite
**/

$reminiscence_lite_default = reminiscence_lite_get_default_theme_options();

// Layout Section.
$wp_customize->add_section( 'single_post_setting',
	array(
	'title'      => esc_html__( 'Single Post Settings', 'reminiscence-lite' ),
	'capability' => 'edit_theme_options',
	'panel'      => 'reminiscence_lite_options',
	)
);

$wp_customize->add_setting('enable_author_box',
    array(
        'default' => $reminiscence_lite_default['enable_author_box'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'reminiscence_lite_sanitize_checkbox',
    )
);
$wp_customize->add_control('enable_author_box',
    array(
        'label' => esc_html__('Enable Author Box', 'reminiscence-lite'),
        'section' => 'single_post_setting',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('enable_single_related_post',
    array(
        'default' => $reminiscence_lite_default['enable_single_related_post'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'reminiscence_lite_sanitize_checkbox',
    )
);
$wp_customize->add_control('enable_single_related_post',
    array(
        'label' => esc_html__('Enable Related Posts', 'reminiscence-lite'),
        'section' => 'single_post_setting',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('related_post_title',
    array(
        'default' => $reminiscence_lite_default['related_post_title'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control('related_post_title',
    array(
        'label' => esc_html__('Related Posts Title', 'reminiscence-lite'),
        'section' => 'single_post_setting',
        'type' => 'text',
    )
);