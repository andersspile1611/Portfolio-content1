<?php
/**
* Header Banner Options.
*
* @package Reminiscence Lite
*/

$reminiscence_lite_default = reminiscence_lite_get_default_theme_options();
$reminiscence_lite_post_category_list = reminiscence_lite_post_category_list();

$wp_customize->add_section( 'header_featured_category_setting',
    array(
    'title'      => esc_html__( 'Featured Category Settings', 'reminiscence-lite' ),
    'priority'   => 10,
    'capability' => 'edit_theme_options',
    'panel'      => 'reminiscence_lite_home',
    )
);

$wp_customize->add_setting('enable_header_featured_category',
    array(
        'default' => $reminiscence_lite_default['enable_header_featured_category'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'reminiscence_lite_sanitize_checkbox',
    )
);
$wp_customize->add_control('enable_header_featured_category',
    array(
        'label' => esc_html__('Enable Featured Category', 'reminiscence-lite'),
        'section' => 'header_featured_category_setting',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('enable_header_featured_category_column',
    array(
        'default' => $reminiscence_lite_default['enable_header_featured_category_column'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control('enable_header_featured_category_column',
    array(
        'label' => esc_html__('Grid Column Layout', 'reminiscence-lite'),
        'section' => 'header_featured_category_setting',
        'type' => 'select',
        'choices' => array(
            '2' => esc_html__('Two Column', 'reminiscence-lite'),
            '3' => esc_html__('Three Column', 'reminiscence-lite'),
            '4' => esc_html__('Four Column', 'reminiscence-lite'),
        ),
    )
);

$wp_customize->add_setting( 'reminiscence_lite_header_featured_category_cat_1',
    array(
    'default'           => '',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'reminiscence_lite_sanitize_select',
    )
);
$wp_customize->add_control( 'reminiscence_lite_header_featured_category_cat_1',
    array(
    'label'       => esc_html__( 'Featured Category 1', 'reminiscence-lite' ),
    'section'     => 'header_featured_category_setting',
    'type'        => 'select',
    'choices'     => $reminiscence_lite_post_category_list,
    )
);

$wp_customize->add_setting( 'reminiscence_lite_header_featured_category_cat_2',
    array(
    'default'           => '',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'reminiscence_lite_sanitize_select',
    )
);
$wp_customize->add_control( 'reminiscence_lite_header_featured_category_cat_2',
    array(
    'label'       => esc_html__( 'Featured Category 2', 'reminiscence-lite' ),
    'section'     => 'header_featured_category_setting',
    'type'        => 'select',
    'choices'     => $reminiscence_lite_post_category_list,
    )
);

$wp_customize->add_setting( 'reminiscence_lite_header_featured_category_cat_3',
    array(
    'default'           => '',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'reminiscence_lite_sanitize_select',
    )
);
$wp_customize->add_control( 'reminiscence_lite_header_featured_category_cat_3',
    array(
    'label'       => esc_html__( 'Featured Category 3', 'reminiscence-lite' ),
    'section'     => 'header_featured_category_setting',
    'type'        => 'select',
    'choices'     => $reminiscence_lite_post_category_list,
    'active_callback' => 'reminiscence_lite_featured_cat_ac_3',
    )
);

$wp_customize->add_setting( 'reminiscence_lite_header_featured_category_cat_4',
    array(
    'default'           => '',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'reminiscence_lite_sanitize_select',
    )
);
$wp_customize->add_control( 'reminiscence_lite_header_featured_category_cat_4',
    array(
    'label'       => esc_html__( 'Featured Category 4', 'reminiscence-lite' ),
    'section'     => 'header_featured_category_setting',
    'type'        => 'select',
    'choices'     => $reminiscence_lite_post_category_list,
    'active_callback' => 'reminiscence_lite_featured_cat_ac_4',
    )
);