<?php
/**
 * Reminiscence Lite Widgets
 *
 *
 * @package Reminiscence Lite
 */

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function reminiscence_lite_widgets_init() {
	
	register_sidebar(

		array(
			'name'          => esc_html__( 'Sidebar', 'reminiscence-lite' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'reminiscence-lite' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
		
	);

	for( $j = 1; $j < 4; $j++ ){

        if( $j == 1 ) { $title = esc_html__( 'One', 'reminiscence-lite' ); }
        if( $j == 2 ) { $title = esc_html__( 'Two', 'reminiscence-lite' ); }
        if( $j == 3 ) { $title = esc_html__( 'Three', 'reminiscence-lite' ); }

        register_sidebar(array(

            'name' => esc_html__('Footer Widget ', 'reminiscence-lite') . $title,
            'id' => 'reminiscence-lite-footer-widget-' . $j,
            'description' => esc_html__('Add widgets here.', 'reminiscence-lite'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',

        ));

    }

}
add_action( 'widgets_init', 'reminiscence_lite_widgets_init' );

require get_template_directory() . '/inc/widget/widget-base.php';
require get_template_directory() . '/inc/widget/category.php';
require get_template_directory() . '/inc/widget/recent-posts.php';
require get_template_directory() . '/inc/widget/social-icons.php';
require get_template_directory() . '/inc/widget/author.php';
require get_template_directory() . '/inc/widget/slide-post.php';