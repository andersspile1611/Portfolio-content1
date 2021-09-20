<?php
/**
 * Archive Settings.
 *
 * @package Reminiscence Lite
**/

$reminiscence_lite_default = reminiscence_lite_get_default_theme_options();

// Layout Section.
$wp_customize->add_section( 'archive_setting',
	array(
	'title'      => esc_html__( 'Archive Settings', 'reminiscence-lite' ),
	'capability' => 'edit_theme_options',
	'panel'      => 'reminiscence_lite_options',
	)
);

$wp_customize->add_setting('enable_recommended_posts',
    array(
        'default' => $reminiscence_lite_default['enable_recommended_posts'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'reminiscence_lite_sanitize_checkbox',
    )
);
$wp_customize->add_control('enable_recommended_posts',
    array(
        'label' => esc_html__('Enable Related Posts', 'reminiscence-lite'),
        'section' => 'archive_setting',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('archive_recommended_posts_title',
    array(
        'default' => $reminiscence_lite_default['archive_recommended_posts_title'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control('archive_recommended_posts_title',
    array(
        'label' => esc_html__('Recommended Posts Title', 'reminiscence-lite'),
        'section' => 'archive_setting',
        'type' => 'text',
    )
);