<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Reminiscence Lite
 */
$reminiscence_lite_default = reminiscence_lite_get_default_theme_options();
$enable_author_box = get_theme_mod( 'enable_author_box',$reminiscence_lite_default['enable_author_box'] );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('wedevs-post wedevs-single-article'); ?> itemscope itemtype="https://schema.org/Blog">

    <div class="post-content">
        <div class="entry-content" itemprop="text">
            <?php
            the_content(
                sprintf(
                    wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'reminiscence-lite' ),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post( get_the_title() )
                )
            );

            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'reminiscence-lite' ),
                    'after'  => '</div>',
                )
            );

            if ( 'post' === get_post_type() ) : ?>

                <footer class="entry-footer">
                    <div class="entry-footer-left">
                        <?php reminiscence_lite_entry_tag(); ?>
                    </div>

                    <div class="entry-footer-right">
                        <div class="wedevs-social-share">
                            <?php reminiscence_lite_social_share(); ?>
                        </div>
                    </div>
                </footer><!-- .entry-footer -->

            <?php endif;

            if( 'post' === get_post_type() && $enable_author_box ){
                reminiscence_lite_author_box();
            }

            if( 'post' === get_post_type() ){
                reminiscence_lite_single_navigation();
            }
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif; ?>

        </div><!-- .entry-content -->

    </div>

</article><!-- #post-<?php the_ID(); ?> -->
