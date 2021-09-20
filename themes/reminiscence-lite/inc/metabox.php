<?php
/**
* Sidebar Metabox.
*
* @package Reminiscence Lite
*/
 
add_action( 'add_meta_boxes', 'reminiscence_lite_metabox' );

if( ! function_exists( 'reminiscence_lite_metabox' ) ):


    function  reminiscence_lite_metabox() {
        
        add_meta_box(
            'theme-custom-metabox',
            esc_html__( 'Sidebar Settings', 'reminiscence-lite' ),
            'reminiscence_lite_post_metafield_callback',
            'post', 
            'side', 
            'high'
        );
        add_meta_box(
            'theme-custom-metabox',
            esc_html__( 'Sidebar Settings', 'reminiscence-lite' ),
            'reminiscence_lite_post_metafield_callback',
            'page',
            'side', 
            'high'
        ); 
    }

endif;

$reminiscence_lite_post_sidebar_fields =  reminiscence_lite_sidebar_options();


/**
 * Callback function for post option.
*/
if( ! function_exists( 'reminiscence_lite_post_metafield_callback' ) ):
    
    function reminiscence_lite_post_metafield_callback() {
        global $post, $reminiscence_lite_post_sidebar_fields;
        $post_type = get_post_type($post->ID);
        wp_nonce_field( basename( __FILE__ ), 'reminiscence_lite_post_meta_nonce' ); ?>
        
        <div class="wedevs-meta-wrap">
            <?php
            $reminiscence_lite_post_sidebar = esc_html( get_post_meta( $post->ID, 'reminiscence_lite_post_sidebar_option', true ) ); 
            if( $reminiscence_lite_post_sidebar == '' ){ $reminiscence_lite_post_sidebar = 'right-sidebar'; }

            foreach ( $reminiscence_lite_post_sidebar_fields as $key => $reminiscence_lite_post_sidebar_field) { ?>

                <div class="components-panel__row">
                    <div class="components-base-control__field">
                        <div class="components-base-control">
                        
                            <span class="components-checkbox-control__input-container">
                                <input type="radio" name="reminiscence_lite_post_sidebar_option" value="<?php echo esc_attr( $key ); ?>" <?php if( $key == $reminiscence_lite_post_sidebar ){ echo "checked='checked'";} if( empty( $reminiscence_lite_post_sidebar ) && $key =='right-sidebar' ){ echo "checked='checked'"; } ?>/>
                            </span>

                            <label class="components-checkbox-control__label">
                                <?php echo esc_html( $reminiscence_lite_post_sidebar_field); ?>
                            </label>

                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>

    <?php
    }
endif;

// Save metabox value.
add_action( 'save_post', 'reminiscence_lite_save_post_meta' );

if( ! function_exists( 'reminiscence_lite_save_post_meta' ) ):

    function reminiscence_lite_save_post_meta( $post_id ) {

        global $post;

        if ( !isset( $_POST[ 'reminiscence_lite_post_meta_nonce' ] ) || !wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['reminiscence_lite_post_meta_nonce'] ) ), basename( __FILE__ ) ) ){
            return;
        }

        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ){
            return;
        }
            
        if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {  
            if ( !current_user_can( 'edit_page', $post_id ) ){  
                return $post_id;
            }
        }elseif( !current_user_can( 'edit_post', $post_id ) ) {
            return $post_id;
        }

        $reminiscence_lite_post_sidebar_option_old = esc_html( get_post_meta( $post_id, 'reminiscence_lite_post_sidebar_option', true ) ); 
        $reminiscence_lite_post_sidebar_option_new = isset( $_POST['reminiscence_lite_post_sidebar_option'] ) ? reminiscence_lite_sanitize_sidebar_option_meta( wp_unslash( $_POST['reminiscence_lite_post_sidebar_option'] ) ) : '';

        if ( $reminiscence_lite_post_sidebar_option_new && $reminiscence_lite_post_sidebar_option_new != $reminiscence_lite_post_sidebar_option_old ){
            update_post_meta ( $post_id, 'reminiscence_lite_post_sidebar_option', $reminiscence_lite_post_sidebar_option_new );
        }elseif( '' == $reminiscence_lite_post_sidebar_option_new && $reminiscence_lite_post_sidebar_option_old ) {
            delete_post_meta( $post_id,'reminiscence_lite_post_sidebar_option', $reminiscence_lite_post_sidebar_option_old );
        }
        
    }

endif;   