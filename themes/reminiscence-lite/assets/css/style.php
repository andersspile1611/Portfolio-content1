<?php
/**
 * Reminiscence Lite Dynamic Styles
 *
 * @package Reminiscence Lite
 */


function reminiscence_lite_dynamic_css_generate( $wedev_font_weight = false, $class = '' ){

    if( $wedev_font_weight ){

        $generated_css = '';
        if( $wedev_font_weight == 'regular' ){
            $wedev_font_weight = '400';
        }
        if( $wedev_font_weight != 'italic' && strpos($wedev_font_weight, 'italic') !== false) {

            $wedev_font_weight_exp = explode( 'italic',$wedev_font_weight);
            
            $font_weight = isset( $wedev_font_weight_exp[0] ) ? $wedev_font_weight_exp[0] : '';
            $font_style = isset( $wedev_font_weight_exp[1] ) ? $wedev_font_weight_exp[1] : '';
            if( $font_weight ){
                $generated_css .= "{$class}{font-weight: {$font_weight};}";
                $generated_css .= "{$class}{font-style: italic;}";
            }
        }else{

            if( $wedev_font_weight == 'italic'){
                $generated_css .= "{$class}{font-style: {$wedev_font_weight};}";    
            }else{
                $generated_css .= "{$class}{font-weight: {$wedev_font_weight};}";
            }
        }

        return $generated_css;

    }

    return false;

}

function reminiscence_lite_dynamic_css(){

    $dynamic_css = "";
    $reminiscence_lite_default = reminiscence_lite_get_default_theme_options();
    $logo_width = esc_attr(get_theme_mod('logo_width', $reminiscence_lite_default['logo_width']));
    $wedev_tagline_font = esc_attr(get_theme_mod('wedev_tagline_font', $reminiscence_lite_default['wedev_tagline_font']));
    $wedev_tagline_font_weight = esc_attr(get_theme_mod('wedev_tagline_font_weight', $reminiscence_lite_default['wedev_tagline_font_weight']));
    if( $wedev_tagline_font_weight ){
        $dynamic_css .= reminiscence_lite_dynamic_css_generate( $wedev_tagline_font_weight, '.site-branding .site-title' );
    }

    $reminiscence_lite_tagline_font_size = esc_attr(get_theme_mod('reminiscence_lite_tagline_font_size', $reminiscence_lite_default['reminiscence_lite_tagline_font_size']));
    $reminiscence_lite_tagline_font_case = esc_attr(get_theme_mod('reminiscence_lite_tagline_font_case', $reminiscence_lite_default['reminiscence_lite_tagline_font_case']));



    $wedev_cta_font = esc_attr(get_theme_mod('wedev_cta_font', $reminiscence_lite_default['wedev_cta_font']));
    $wedev_cta_font_weight = esc_attr(get_theme_mod('wedev_cta_font_weight', $reminiscence_lite_default['wedev_cta_font_weight']));
    if( $wedev_cta_font_weight ){
        $dynamic_css .= reminiscence_lite_dynamic_css_generate( $wedev_cta_font_weight, '.site-branding .site-title' );
    }

    $reminiscence_lite_cta_font_size = esc_attr(get_theme_mod('reminiscence_lite_cta_font_size', $reminiscence_lite_default['reminiscence_lite_cta_font_size']));
    $reminiscence_lite_cta_font_case = esc_attr(get_theme_mod('reminiscence_lite_cta_font_case', $reminiscence_lite_default['reminiscence_lite_cta_font_case']));

    
    $wedev_general_font = esc_attr(get_theme_mod('wedev_general_font', $reminiscence_lite_default['wedev_general_font']));
    $wedev_general_font_weight = esc_attr(get_theme_mod('wedev_general_font_weight', $reminiscence_lite_default['wedev_general_font_weight']));
    if( $wedev_general_font_weight ){
        $dynamic_css .= reminiscence_lite_dynamic_css_generate( $wedev_general_font_weight, 'body, button, input, select, optgroup, textarea' );
    }

    $wedev_heading_font = esc_attr(get_theme_mod('wedev_heading_font', $reminiscence_lite_default['wedev_heading_font']));

    $wedev_heading_font_case = esc_attr(get_theme_mod('wedev_heading_font_case', $reminiscence_lite_default['wedev_heading_font_case']));

    $reminiscence_lite_general_font_size = absint(get_theme_mod('reminiscence_lite_general_font_size', $reminiscence_lite_default['reminiscence_lite_general_font_size']));
    $reminiscence_lite_h1_font_size = absint(get_theme_mod('reminiscence_lite_h1_font_size', $reminiscence_lite_default['reminiscence_lite_h1_font_size']));
    $reminiscence_lite_h2_font_size = absint(get_theme_mod('reminiscence_lite_h2_font_size', $reminiscence_lite_default['reminiscence_lite_h2_font_size']));
    $reminiscence_lite_h3_font_size = absint(get_theme_mod('reminiscence_lite_h3_font_size', $reminiscence_lite_default['reminiscence_lite_h3_font_size']));
    $reminiscence_lite_h4_font_size = absint(get_theme_mod('reminiscence_lite_h4_font_size', $reminiscence_lite_default['reminiscence_lite_h4_font_size']));
    $reminiscence_lite_h5_font_size = absint(get_theme_mod('reminiscence_lite_h5_font_size', $reminiscence_lite_default['reminiscence_lite_h5_font_size']));
    $reminiscence_lite_h6_font_size = absint(get_theme_mod('reminiscence_lite_h6_font_size', $reminiscence_lite_default['reminiscence_lite_h6_font_size']));

    $reminiscence_lite_h1_font_weight = esc_attr(get_theme_mod('reminiscence_lite_h1_font_weight', $reminiscence_lite_default['reminiscence_lite_h1_font_weight']));
    if( $reminiscence_lite_h1_font_weight ){
        $dynamic_css .= reminiscence_lite_dynamic_css_generate( $reminiscence_lite_h1_font_weight, '.h1,.entry-title-large' );
    }

    $reminiscence_lite_h2_font_weight = esc_attr(get_theme_mod('reminiscence_lite_h2_font_weight', $reminiscence_lite_default['reminiscence_lite_h2_font_weight']));
    if( $reminiscence_lite_h2_font_weight ){
        $dynamic_css .= reminiscence_lite_dynamic_css_generate( $reminiscence_lite_h2_font_weight, '.h2,.entry-title-big' );
    }

    $reminiscence_lite_h3_font_weight = esc_attr(get_theme_mod('reminiscence_lite_h3_font_weight', $reminiscence_lite_default['reminiscence_lite_h3_font_weight']));
    if( $reminiscence_lite_h3_font_weight ){
        $dynamic_css .= reminiscence_lite_dynamic_css_generate( $reminiscence_lite_h3_font_weight, '.h3,.entry-title-medium' );
    }

    $reminiscence_lite_h4_font_weight = esc_attr(get_theme_mod('reminiscence_lite_h4_font_weight', $reminiscence_lite_default['reminiscence_lite_h4_font_weight']));
    if( $reminiscence_lite_h4_font_weight ){
        $dynamic_css .= reminiscence_lite_dynamic_css_generate( $reminiscence_lite_h4_font_weight, '.h4,h4' );
    }

    $reminiscence_lite_h5_font_weight = esc_attr(get_theme_mod('reminiscence_lite_h5_font_weight', $reminiscence_lite_default['reminiscence_lite_h5_font_weight']));
    if( $reminiscence_lite_h5_font_weight ){
        $dynamic_css .= reminiscence_lite_dynamic_css_generate( $reminiscence_lite_h5_font_weight, '.h5,h5' );
    }

    $reminiscence_lite_h6_font_weight = esc_attr(get_theme_mod('reminiscence_lite_h6_font_weight', $reminiscence_lite_default['reminiscence_lite_h6_font_weight']));
    if( $reminiscence_lite_h6_font_weight ){
        $dynamic_css .= reminiscence_lite_dynamic_css_generate( $reminiscence_lite_h6_font_weight, '.h6,h6' );
    }


    $dynamic_css .= " 
.site-logo img{width: {$logo_width}px;}
.site-branding .site-title{font-family: {$wedev_tagline_font};}
.site-branding .site-title{font-size: {$reminiscence_lite_tagline_font_size}px;}
.site-branding .site-title{text-transform: {$reminiscence_lite_tagline_font_case};}
:root {
 --primary-font-family: {$wedev_general_font};
 --secondary-font-family: {$wedev_heading_font};
}

body, button, input, select, optgroup, textarea{font-size: {$reminiscence_lite_general_font_size}px;}
        
h1,h2,h3,h4,h5,h6{text-transform: {$wedev_heading_font_case};}
                              
                
h1,.entry-title-large{font-size:{$reminiscence_lite_h1_font_size}px;}
h2,.entry-title-big{font-size:{$reminiscence_lite_h2_font_size}px;}
h3,.entry-title-medium{font-size: {$reminiscence_lite_h3_font_size}px;}
h4{font-size:{$reminiscence_lite_h4_font_size}px;}
h5{font-size:{$reminiscence_lite_h5_font_size}px;}
h6,.entry-title-small{font-size:{$reminiscence_lite_h6_font_size}px;}

.wedevs-cta-block .entry-title{font-family: {$wedev_cta_font};}
.wedevs-cta-block .entry-title{font-size: {$reminiscence_lite_cta_font_size}px;}
.wedevs-cta-block .entry-title{text-transform: {$reminiscence_lite_cta_font_case};}

        ";

    wp_add_inline_style('reminiscence-lite-style', $dynamic_css);
}

add_action('wp_enqueue_scripts', 'reminiscence_lite_dynamic_css'); ?>