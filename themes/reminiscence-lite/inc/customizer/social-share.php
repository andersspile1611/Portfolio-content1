<?php
/**
 * Social Share Settings.
 *
 * @package Reminiscence Lite
**/

$reminiscence_lite_default = reminiscence_lite_get_default_theme_options();

// Layout Section.
$wp_customize->add_section( 'social_share',
	array(
	'title'      => esc_html__( 'Social Share Settings', 'reminiscence-lite' ),
	'capability' => 'edit_theme_options',
	'panel'      => 'reminiscence_lite_options',
	)
);

$wp_customize->add_setting('enable_facebook',
    array(
        'default' => $reminiscence_lite_default['enable_facebook'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'reminiscence_lite_sanitize_checkbox',
    )
);
$wp_customize->add_control('enable_facebook',
    array(
        'label' => esc_html__('Enable Facebook', 'reminiscence-lite'),
        'section' => 'social_share',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('enable_twitter',
    array(
        'default' => $reminiscence_lite_default['enable_twitter'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'reminiscence_lite_sanitize_checkbox',
    )
);
$wp_customize->add_control('enable_twitter',
    array(
        'label' => esc_html__('Enable Twitter', 'reminiscence-lite'),
        'section' => 'social_share',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('enable_pinterest',
    array(
        'default' => $reminiscence_lite_default['enable_pinterest'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'reminiscence_lite_sanitize_checkbox',
    )
);
$wp_customize->add_control('enable_pinterest',
    array(
        'label' => esc_html__('Enable Pinterest', 'reminiscence-lite'),
        'section' => 'social_share',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('enable_linkedin',
    array(
        'default' => $reminiscence_lite_default['enable_linkedin'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'reminiscence_lite_sanitize_checkbox',
    )
);
$wp_customize->add_control('enable_linkedin',
    array(
        'label' => esc_html__('Enable LinkedIn', 'reminiscence-lite'),
        'section' => 'social_share',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('enable_email',
    array(
        'default' => $reminiscence_lite_default['enable_email'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'reminiscence_lite_sanitize_checkbox',
    )
);
$wp_customize->add_control('enable_email',
    array(
        'label' => esc_html__('Enable Email', 'reminiscence-lite'),
        'section' => 'social_share',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting(
    'reminiscence_lite_more_options_social_share',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
$wp_customize->add_control(
    new Reminiscence_Lite_Premium_Notiece( 
        $wp_customize,
        'reminiscence_lite_more_options_social_share',
        array(
            'label'      => esc_html__( 'More Options Available On Premium Version.', 'reminiscence-lite' ),
            'settings' => 'reminiscence_lite_more_options_social_share',
            'section'       => 'social_share',
        )
    )
);
