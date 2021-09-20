<?php

$reminiscence_lite_default = reminiscence_lite_get_default_theme_options();
$home_section_order_6 = get_theme_mod( 'home_section_order_6',$reminiscence_lite_default['home_section_order_6'] );

if ( 'posts' == get_option( 'show_on_front' ) && !$home_section_order_6 ) {
    
    include( get_home_template() );

}elseif( $home_section_order_6 ){ 

    get_header(); 
    
    ?>

    	<div class="wedevs-block-wrapper homepage-block-wrapper">

    		<?php
            
    		foreach( $home_section_order_6 as $home_section ){
                if( !is_paged() && $home_section == 'cta-section' ){
                    
                    reminiscence_lite_call_to_action();

                }

    			if( !is_paged() && $home_section == 'banner' ){
            		
            		reminiscence_lite_main_slider();

            	}
            	
    			if( !is_paged() && $home_section == 'featured-category' ){
            		
            		reminiscence_lite_featured_category();

            	}              


            	if( $home_section == 'latest-posts' ){
            		
            		$content_column_class = reminiscence_lite_sidebar();
					?>
                    <div class="wedevs-block wedevs-latest-block">
                        <div class="site-wrapper">
                            <div class="site-row">

                                <div id="primary" class="content-area site-column site-column-sm-12 <?php echo esc_attr( $content_column_class ); ?>">
                                    <main id="main" class="site-main site-archive-main">

                                        <?php
                                        if (have_posts()) :

                                            if (is_home() && !is_front_page()) :
                                                ?>
                                                <header>
                                                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                                                </header>
                                            <?php
                                            endif;

                                            /* Start the Loop */
                                            while (have_posts()) :
                                                the_post();

                                                /*
                                                 * Include the Post-Type-specific template for the content.
                                                 * If you want to override this in a child theme, then include a file
                                                 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                                 */
                                                get_template_part('template-parts/content', get_post_type());

                                            endwhile;

                                        else :

                                            get_template_part('template-parts/content', 'none');

                                        endif;
                                        ?>

                                    </main><!-- #main -->

                                    <?php do_action('reminiscence_lite_archive_pagination'); ?>
                                    
                                </div>

                                <?php get_sidebar(); ?>

                            </div>
                        </div>
                    </div>

				<?php
            	}

            } ?>


		</div>

	<?php
	get_footer();

}else {

    include( get_page_template() );
    
}
