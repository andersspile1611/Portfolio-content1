<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Reminiscence Lite
 * @since Reminiscence Lite 1.0.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
$reminiscence_lite_unique_id = reminiscence_lite_unique_id( 'search-form-' );
$reminiscence_lite_aria_label = ! empty( $args['label'] ) ? 'aria-label="' . esc_attr( $args['label'] ) . '"' : '';
?>

<form role="search" <?php echo $reminiscence_lite_aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?> method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	
	<label for="<?php echo esc_attr( $reminiscence_lite_unique_id ); ?>">

		<span class="screen-reader-text"><?php _e( 'Search for:', 'reminiscence-lite' ); // phpcs:ignore: WordPress.Security.EscapeOutput.UnsafePrintingFunction -- core trusts translations ?></span>

		<input type="search" id="<?php echo esc_attr( $reminiscence_lite_unique_id ); ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'reminiscence-lite' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />

	</label>

	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'reminiscence-lite' ); ?>" />

</form>
