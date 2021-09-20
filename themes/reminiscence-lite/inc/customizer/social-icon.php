<?php
/**
 * Social Icon Settings.
 *
 * @package Reminiscence Lite
**/

$reminiscence_lite_default = reminiscence_lite_get_default_theme_options();

// Layout Section.
$wp_customize->add_section( 'social_icon',
    array(
    'title'      => esc_html__( 'Social Icon Settings', 'reminiscence-lite' ),
    'capability' => 'edit_theme_options',
    'panel'      => 'reminiscence_lite_options',
    )
);

$wp_customize->add_setting('enable_social_link',
    array(
        'default' => $reminiscence_lite_default['enable_social_link'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'reminiscence_lite_sanitize_checkbox',
    )
);
$wp_customize->add_control('enable_social_link',
    array(
        'label' => esc_html__('Enable Social Link', 'reminiscence-lite'),
        'section' => 'social_icon',
        'type' => 'checkbox',
    )
);

// Social Icons
$wp_customize->add_setting( 'reminiscence_lite_social_icon_4', array(
    'sanitize_callback' => 'reminiscence_lite_sanitize_social_icons',
    'default' => $reminiscence_lite_default['reminiscence_lite_social_icon_4'],
    'sanitize_callback' => 'reminiscence_lite_sanitize_social_icons',
));

$wp_customize->add_control(  new Reminiscence_Lite_Social_Icon_Controler( $wp_customize, 'reminiscence_lite_social_icon_4',
    array(
        'section' => 'social_icon',
        'settings' => 'reminiscence_lite_social_icon_4',
        'reminiscence_lite_box_label' => esc_html__('Social Profile','reminiscence-lite'),
        'reminiscence_lite_box_add_control' => esc_html__('Add New Social Link','reminiscence-lite'),
    ),
    array(
        'social_svg_icon' => array(
            'type'        => 'icons',
            'label'       => esc_html__( 'SVG Icons', 'reminiscence-lite' ),
            'class'     => 'ta-fa-icons-rep'
        ),
        'social_link' => array(
            'type'        => 'link',
            'label'       => esc_html__( 'Social Links', 'reminiscence-lite' ),
        ),
        'label' => array(
            'type'        => 'text',
            'label'       => esc_html__( 'Social Icon Label', 'reminiscence-lite' ),
        ),
    )
));