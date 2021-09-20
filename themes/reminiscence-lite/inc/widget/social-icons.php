<?php
/**
 * Social Icon Widgets.
 *
 * @package Reminiscence Lite
 */

if ( !function_exists('reminiscence_lite_social_icon_widgets') ) :

    function reminiscence_lite_social_icon_widgets(){
        
        register_widget('Reminiscence_Lite_Sidebar_Social_Icon_Widget');

    }

endif;

add_action('widgets_init', 'reminiscence_lite_social_icon_widgets');


if ( !class_exists('Reminiscence_Lite_Sidebar_Social_Icon_Widget') ) :

    // Recent Post widget Form & Display

    class Reminiscence_Lite_Sidebar_Social_Icon_Widget extends Reminiscence_Lite_Widget_Base{

        function __construct(){

            $opts = array(
                'classname' => 'reminiscence_lite_social_icon_widget',
                'description' => esc_html__('Display social icon. You can enable and manage settings from Customizer -> Theme Option.', 'reminiscence-lite'),
                'customize_selective_refresh' => true,
            );


            $fields = array(
                'display_style' => array(
                    'label' => esc_html__('Layout:', 'reminiscence-lite'),
                    'type' => 'select',
                    'default' => 'layout-1',
                    'options' => array(
                        'layout-1' => esc_html__('Layout One','reminiscence-lite'),
                        'layout-2' => esc_html__('Layout Two','reminiscence-lite'),
                    ),
                ),
            );

            parent::__construct( 'reminiscence-lite-social-icon', esc_html__('WeDevs: Social Icon Widget', 'reminiscence-lite'), $opts, array(), $fields );

        }

        /**
         * Outputs the content for the current widget instance.
         *
         * @since 1.0.0
         *
         * @param array $args Display arguments.
         * @param array $instance Settings for the current widget instance.
         */
        function widget( $args, $instance ){

            $params = $this->get_params( $instance );

            echo $args['before_widget'];

            $display_style = isset( $params['display_style'] ) ? $params['display_style'] : '';

            reminiscence_lite_social_icon( $display_style, $social_label = true );
            
            echo $args['after_widget'];
        }

    }

endif;