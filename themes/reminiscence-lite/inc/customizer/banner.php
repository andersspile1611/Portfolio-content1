<?php
/**
* Header Banner Options.
*
* @package Reminiscence Lite
*/

$reminiscence_lite_default = reminiscence_lite_get_default_theme_options();
$reminiscence_lite_post_category_list = reminiscence_lite_post_category_list();

$wp_customize->add_section( 'header_banner_setting',
    array(
    'title'      => esc_html__( 'Slider Banner Settings', 'reminiscence-lite' ),
    'priority'   => 10,
    'capability' => 'edit_theme_options',
    'panel'      => 'reminiscence_lite_home',
    )
);

$wp_customize->add_setting('enable_header_banner',
    array(
        'default' => $reminiscence_lite_default['enable_header_banner'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'reminiscence_lite_sanitize_checkbox',
    )
);
$wp_customize->add_control('enable_header_banner',
    array(
        'label' => esc_html__('Enable Slider Banner', 'reminiscence-lite'),
        'section' => 'header_banner_setting',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting( 'reminiscence_lite_header_banner_cat',
    array(
    'default'           => '',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'reminiscence_lite_sanitize_select',
    )
);
$wp_customize->add_control( 'reminiscence_lite_header_banner_cat',
    array(
    'label'       => esc_html__( 'Slider Post Category', 'reminiscence-lite' ),
    'section'     => 'header_banner_setting',
    'type'        => 'select',
    'choices'     => $reminiscence_lite_post_category_list,
    )
);