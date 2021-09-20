<?php
/**
 * CTA section
 *
 * @package Reminiscence Lite
 */

$default = reminiscence_lite_get_default_theme_options();
$google_fonts = reminiscence_lite_google_fonts();
$google_fonts_array = reminiscence_lite_font_array();
$wedev_cta_font = get_theme_mod( 'wedev_cta_font',$reminiscence_lite_default['wedev_cta_font'] );
$wedev_cta_font_key = array_search( $wedev_cta_font, array_column( $google_fonts_array, 'family') );
$wedev_cta_font_variants = $google_fonts_array[$wedev_cta_font_key]['variants'];

// Call To Action Main Section.
$wp_customize->add_section( 'cta_section_settings',
	array(
		'title'      => __( 'Call To Action Section', 'reminiscence-lite' ),
		'priority'   => 20,
		'capability' => 'edit_theme_options',
		'panel'      => 'reminiscence_lite_home',
	)
);

// Setting - enable_cta_section.
$wp_customize->add_setting( 'enable_cta_section',
	array(
		'default'           => $default['enable_cta_section'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'reminiscence_lite_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'enable_cta_section',
	array(
		'label'    => __( 'Enable Call To Action', 'reminiscence-lite' ),
		'section'  => 'cta_section_settings',
		'type'     => 'checkbox',
	)
);


$wp_customize->add_setting( 'select_page_for_cta', array(
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'reminiscence_lite_sanitize_dropdown_pages',
) );

$wp_customize->add_control( 'select_page_for_cta', array(
    'input_attrs'       => array(
        'style'           => 'width: 50px;'
        ),
    'label'             => __( 'Select Call To Action Page', 'reminiscence-lite' ),
    'section'           => 'cta_section_settings',
    'type'        		=> 'dropdown-pages',
    'allow_addition' => true,
    )
);

/*content excerpt in Call To Action*/
$wp_customize->add_setting( 'excerpt_content_home_cta',
	array(
		'default'           => $default['excerpt_content_home_cta'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'reminiscence_lite_sanitize_positive_integer',
	)
);
$wp_customize->add_control( 'excerpt_content_home_cta',
	array(
		'label'    => __( 'Excerpt for Call To Action Section', 'reminiscence-lite' ),
		'description'     => __( 'Number of excerpt to display on the CTA section', 'reminiscence-lite' ),
		'section'  => 'cta_section_settings',
		'type'     => 'number',
		'input_attrs'     => array( 'min' => 1, 'max' => 500, 'style' => 'width: 150px;' ),

	)
);


$wp_customize->add_setting( 'button_text_on_cta',
	array(
		'default'           => $default['button_text_on_cta'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'button_text_on_cta',
	array(
		'label'    => __( 'Button Text', 'reminiscence-lite' ),
		'description'     => __( 'Removing text will disable button on the CTA section', 'reminiscence-lite' ),
		'section'  => 'cta_section_settings',
		'type'     => 'text',
	)
);



$wp_customize->add_setting( 'wedev_cta_font',
    array(
    'default'           => $reminiscence_lite_default['wedev_cta_font'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'reminiscence_lite_sanitize_select',
    )
);
$wp_customize->add_control( 'wedev_cta_font',
    array(
    'label'       => esc_html__( 'CTA Font', 'reminiscence-lite' ),
    'section'     => 'cta_section_settings',
    'type'        => 'select',
    'choices'     => $google_fonts,
    )
);

$wp_customize->add_setting( 'wedev_cta_font_weight',
    array(
    'default'           => $reminiscence_lite_default['wedev_cta_font_weight'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'reminiscence_lite_sanitize_select',
    )
);
$wp_customize->add_control( 'wedev_cta_font_weight',
    array(
    'label'       => esc_html__( 'CTA Font Weight', 'reminiscence-lite' ),
    'section'     => 'cta_section_settings',
    'type'        => 'select',
    'choices'     => $wedev_cta_font_variants,
    )
);

$wp_customize->add_setting(
    'reminiscence_lite_cta_font_size',
    array(
        'default'           => $reminiscence_lite_default['reminiscence_lite_cta_font_size'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    )
);
$wp_customize->add_control(
    new Reminiscence_Lite_Range_Slider( 
        $wp_customize,
        'reminiscence_lite_cta_font_size',
        array(
            'label'      => esc_html__( 'CTA Font Size', 'reminiscence-lite' ),
            'settings' => 'reminiscence_lite_cta_font_size',
            'section'       => 'cta_section_settings',
            'min'        => '1',
            'max'        => '100',
        )
    )
);

$wp_customize->add_setting( 'reminiscence_lite_cta_font_case',
    array(
        'default'           => $reminiscence_lite_default['reminiscence_lite_cta_font_case'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'reminiscence_lite_sanitize_select',
    )
);
$wp_customize->add_control( 'reminiscence_lite_cta_font_case',
    array(
    'label'       => esc_html__( 'CTA Case', 'reminiscence-lite' ),
    'section'     => 'cta_section_settings',
    'type'        => 'select',
    'choices'               => array(
        'none'      => esc_html__( 'Normal', 'reminiscence-lite' ),
        'uppercase' => esc_html__( 'Uppercase', 'reminiscence-lite' ),
        'lowercase' => esc_html__( 'Lowercase', 'reminiscence-lite' ),
        ),
    )
);
