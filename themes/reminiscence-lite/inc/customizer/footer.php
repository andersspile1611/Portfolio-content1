<?php
/**
* Footer Settings.
*
* @package Reminiscence Lite
*/


$wp_customize->add_section( 'footer_settings',
	array(
	'title'      => esc_html__( 'Footer Settings', 'reminiscence-lite' ),
	'priority'   => 200,
	'capability' => 'edit_theme_options',
	'panel'      => 'reminiscence_lite_options',
	)
);

$wp_customize->add_setting( 'footer_copyright_text',
	array(
	'default'           => '',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'footer_copyright_text',
	array(
	'label'    => esc_html__( 'Footer Copyright Text', 'reminiscence-lite' ),
	'section'  => 'footer_settings',
	'type'     => 'text',
	)
);


$wp_customize->add_setting(
    'upload_footer_logo',
    array(
        'default'           => $reminiscence_lite_default['upload_footer_logo'],
        'sanitize_callback' => 'esc_url_raw',
    )
);

$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'upload_footer_logo',
        array(
            'label'           => esc_html__( 'Upload Footer logo', 'reminiscence-lite' ),
            'section'         => 'footer_settings',
        )
    )
);

$wp_customize->add_setting(
    'reminiscence_lite_premium_notiece_footer',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
$wp_customize->add_control(
    new Reminiscence_Lite_Premium_Notiece_Control( 
        $wp_customize,
        'reminiscence_lite_premium_notiece_footer',
        array(
            'label'      => esc_html__( 'Notice', 'reminiscence-lite' ),
            'settings' => 'reminiscence_lite_premium_notiece_footer',
            'section'       => 'footer_settings',
        )
    )
);