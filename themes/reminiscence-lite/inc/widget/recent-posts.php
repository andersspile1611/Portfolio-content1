<?php
/**
 * Recent Post Widgets.
 *
 * @package Reminiscence Lite
 */

if ( !function_exists('reminiscence_lite_recent_post_widgets') ) :

    function reminiscence_lite_recent_post_widgets(){
        
        register_widget('Reminiscence_Lite_Sidebar_Recent_Post_Widget');

    }

endif;

add_action('widgets_init', 'reminiscence_lite_recent_post_widgets');


if ( !class_exists('Reminiscence_Lite_Sidebar_Recent_Post_Widget') ) :

    // Recent Post widget Form & Display

    class Reminiscence_Lite_Sidebar_Recent_Post_Widget extends Reminiscence_Lite_Widget_Base{

        function __construct(){

            $opts = array(
                'classname' => 'reminiscence_lite_recent_post_widget',
                'description' => esc_html__('Displays post form selected category specific for popular post in sidebars.', 'reminiscence-lite'),
                'customize_selective_refresh' => true,
            );
            
            $category_list = reminiscence_lite_post_category_list();

            $fields = array(
                'title' => array(
                    'label' => esc_html__('Title:', 'reminiscence-lite'),
                    'type' => 'text',
                    'class' => 'widefat',
                ),
                'post_category' => array(
                    'label' => esc_html__('Select Category:', 'reminiscence-lite'),
                    'type' => 'select',
                    'options' => $category_list,
                ),
                'post_number' => array(
                    'label' => esc_html__('Number of posts to show:', 'reminiscence-lite'),
                    'type' => 'number',
                    'default' => 5,
                    'css' => 'max-width:60px;',
                    'min' => 1,
                    'max' => 10,
                ),
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

            parent::__construct( 'reminiscence-lite-recent-posts', esc_html__('WeDevs: Sidebar Recent Post Widget', 'reminiscence-lite'), $opts, array(), $fields );

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

            $title = isset( $params['title'] ) ? $params['title'] : '';
            $post_number = isset( $params['post_number'] ) ? $params['post_number'] : '';
            $post_category = isset( $params['post_category'] ) ? $params['post_category'] : '';
            $display_style = isset( $params['display_style'] ) ? $params['display_style'] : '';

            if( $title ){
                echo $args['before_title'] . esc_html( $title ) . $args['after_title'];
            }

            $qargs = array(
                'posts_per_page' => esc_attr( $post_number ),
                'no_found_rows' => true,
            );

            if( $display_style == 'layout-2' ){
                $size = 'medium';
            }else{
                $size = 'thumbnail';
            }
            $recent_posts_query = new WP_Query( $qargs );
            $count = 1;
            
            if ( $recent_posts_query->have_posts() ) : ?>

                <!--Recent Widgets-->
                <div class="site-widget site-widget-recent">
                    <ul class="recent-widget-layout widget-<?php echo esc_attr( $display_style ); ?>">

                        <?php
                        while ( $recent_posts_query->have_posts() ) :
                            $recent_posts_query->the_post();  ?>

                                <li>

                                    <?php if( has_post_thumbnail() ){ ?>
                                        <div class="entry-thumbnail">
                                            <?php reminiscence_lite_post_thumbnail( $size, $else = false ); ?>
                                        </div>
                                    <?php } ?>
                                
                                    <div class="entry-header">

                                        <?php
                                        if( $display_style == 'layout-2' ){ ?>
                                            <?php reminiscence_lite_entry_cat(); ?>
                                        <?php } ?>


                                        <h5 class="entry-title entry-title-regular">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h5>

                                        <div class="entry-meta">
                                            <?php
                                            reminiscence_lite_posted_on( $title = false );
                                            ?>
                                        </div>

                                    </div>

                                </li>

                            <?php 
                            $count++;
                        endwhile; ?>
                    
                    </ul>
                </div>
                <!--Recent Widgets-->

                <?php wp_reset_postdata();

            endif;
            
            echo $args['after_widget'];
        }

    }

endif;