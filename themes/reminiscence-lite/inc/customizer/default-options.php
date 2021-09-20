<?php
/**
 * Default Values
 *
 * @package Reminiscence Lite
 */

if( !function_exists('reminiscence_lite_get_default_theme_options') ):

    /**
     * Get default theme options
     *
     * @return array Default theme options.
     * @since 1.0.0
     *
    */

    function reminiscence_lite_get_default_theme_options(){

        $reminiscence_lite_defaults = array();

        $reminiscence_lite_defaults['reminiscence_lite_social_icon_4'] = json_encode( array(
            array(
                'social_svg_icon'     => reminiscence_lite_get_theme_svg( 'facebook',true ),
                'social_link'     => '#',
                'label'     => esc_html__('Facebook','reminiscence-lite'),
            ),
            array(
                'social_svg_icon'     => reminiscence_lite_get_theme_svg( 'twitter',true ),
                'social_link'     => '#',
                'label'     => esc_html__('Twitter','reminiscence-lite'),
            ),
            array(
                'social_svg_icon'     => reminiscence_lite_get_theme_svg( 'instagram',true ),
                'social_link'     => '#',
                'label'     => esc_html__('Instagram','reminiscence-lite'),
            ),
        ) );

        $reminiscence_lite_defaults['header_text']                               = esc_html__('Hello World!','reminiscence-lite');
        $reminiscence_lite_defaults['header_button_label']                       = esc_html__('Learn more','reminiscence-lite');

        $reminiscence_lite_defaults['reminiscence_lite_pagination_layout']                  = 'numeric';
        $reminiscence_lite_defaults['global_sidebar_layout']             = 'right-sidebar';
        $reminiscence_lite_defaults['single_sidebar_layout']             = 'right-sidebar';
        $reminiscence_lite_defaults['archive_sidebar_layout']             = 'right-sidebar';
        $reminiscence_lite_defaults['enable_recommended_posts']             = 1;
        $reminiscence_lite_defaults['enable_facebook']                  = 1;
        $reminiscence_lite_defaults['enable_twitter']                   = 1;
        $reminiscence_lite_defaults['enable_pinterest']                 = 1;
        $reminiscence_lite_defaults['enable_linkedin']                  = 1;
        $reminiscence_lite_defaults['enable_email']                     = 1;
        $reminiscence_lite_defaults['enable_author_box']                = 1;
        $reminiscence_lite_defaults['logo_width']                       = '60';
        $reminiscence_lite_defaults['enable_single_related_post']       = 1;
        $reminiscence_lite_defaults['enable_subscribe']                 = 0;
        $reminiscence_lite_defaults['related_post_title']               = esc_html__('Related Posts','reminiscence-lite');
        $reminiscence_lite_defaults['subscribe_section_title']          = esc_html__('Newsletter Subscription Us','reminiscence-lite');
        $reminiscence_lite_defaults['subscribe_section_desc']           = esc_html__("Newsletter Subscription Us and we'll keep you updated with news and information",'reminiscence-lite');

        $reminiscence_lite_defaults['enable_header_search']             = 1;
        $reminiscence_lite_defaults['enable_social_link']               = 1;
        $reminiscence_lite_defaults['enable_popup_newsletter']          = 1;
        $reminiscence_lite_defaults['popup_newsletter_description']     = esc_html__("Newsletter Subscription Us and we'll keep you updated with news and information",'reminiscence-lite');
        $reminiscence_lite_defaults['popup_newsletter_title']             = esc_html__('Newsletter Subscription Us','reminiscence-lite');
        $reminiscence_lite_defaults['404_page_image']             = get_template_directory_uri() . '/assets/images/404-image.jpg';
        $reminiscence_lite_defaults['enable_404_recommended_posts'] = 1;
        $reminiscence_lite_defaults['ed_popup_model_box'] = 0;
        $reminiscence_lite_defaults['ed_popup_model_box_home_only'] = 0;
        $reminiscence_lite_defaults['ed_popup_model_box_first_loading_only'] = 0;
        $reminiscence_lite_defaults['wedev_popup_title'] = esc_html__('Sign Up to Our Newsletter', 'reminiscence-lite');
        $reminiscence_lite_defaults['wedev_popup_desc'] = esc_html__('Get notified about exclusive offers every week!', 'reminiscence-lite');
        $reminiscence_lite_defaults['enable_404_recommended_posts_title'] = esc_html__('Recommended Posts', 'reminiscence-lite');
        $reminiscence_lite_defaults['archive_recommended_posts_title'] = esc_html__('More like this', 'reminiscence-lite');
        $reminiscence_lite_defaults['enable_header_banner'] = 1;
        $reminiscence_lite_defaults['enable_header_featured_category'] = 0;

        $reminiscence_lite_defaults['enable_cta_section'] = 1;
        $reminiscence_lite_defaults['select_page_for_cta'] = '';
        $reminiscence_lite_defaults['excerpt_content_home_cta'] = '';
        $reminiscence_lite_defaults['button_text_on_cta'] = esc_html__('Learn More', 'reminiscence-lite');

        $reminiscence_lite_defaults['enable_trending_article_section'] = 1;
        $reminiscence_lite_defaults['trending_section_title'] = esc_html__('Trending News', 'reminiscence-lite');
        $reminiscence_lite_defaults['select_trending_category'] = '';

        // Typography.
        $reminiscence_lite_defaults['wedev_cta_font'] = 'Poppins';
        $reminiscence_lite_defaults['wedev_cta_font_weight'] = '900';
        $reminiscence_lite_defaults['reminiscence_lite_cta_font_size'] = '54';
        $reminiscence_lite_defaults['reminiscence_lite_cta_font_case'] = 'none';

        $reminiscence_lite_defaults['wedev_tagline_font'] = 'Poppins';
        $reminiscence_lite_defaults['wedev_tagline_font_weight'] = '900';
        $reminiscence_lite_defaults['reminiscence_lite_tagline_font_size'] = '34';

        $reminiscence_lite_defaults['wedev_general_font'] = 'Roboto';
        $reminiscence_lite_defaults['wedev_general_font_weight'] = 'regular';
        $reminiscence_lite_defaults['reminiscence_lite_general_font_size'] = '18';

        $reminiscence_lite_defaults['wedev_heading_font'] = 'Poppins';
        $reminiscence_lite_defaults['wedev_heading_font_case'] = 'none';

        $reminiscence_lite_defaults['reminiscence_lite_h1_font_size'] = '54';
        $reminiscence_lite_defaults['reminiscence_lite_h2_font_size'] = '42';
        $reminiscence_lite_defaults['reminiscence_lite_h3_font_size'] = '34';
        $reminiscence_lite_defaults['reminiscence_lite_h4_font_size'] = '28';
        $reminiscence_lite_defaults['reminiscence_lite_h5_font_size'] = '24';
        $reminiscence_lite_defaults['reminiscence_lite_h6_font_size'] = '20';
        $reminiscence_lite_defaults['reminiscence_lite_h1_font_weight'] = '700';
        $reminiscence_lite_defaults['reminiscence_lite_h2_font_weight'] = '700';
        $reminiscence_lite_defaults['reminiscence_lite_h3_font_weight'] = '700';
        $reminiscence_lite_defaults['reminiscence_lite_h4_font_weight'] = '700';
        $reminiscence_lite_defaults['reminiscence_lite_h5_font_weight'] = '700';
        $reminiscence_lite_defaults['reminiscence_lite_h6_font_weight'] = '700';
        $reminiscence_lite_defaults['reminiscence_lite_tagline_font_case'] = 'none';

        $reminiscence_lite_defaults['home_section_order_6'] = array('cta-section','banner','featured-category','latest-posts' );

        $reminiscence_lite_defaults['enable_header_featured_category_column'] = 4;
        $reminiscence_lite_defaults['upload_footer_logo'] = '';
        
        // Pass through filter.
        $reminiscence_lite_defaults = apply_filters('reminiscence_lite_filter_default_theme_options', $reminiscence_lite_defaults);

        return $reminiscence_lite_defaults;

    }

endif;
