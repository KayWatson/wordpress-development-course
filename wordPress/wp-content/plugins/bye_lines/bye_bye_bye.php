<?php
/*
Plugin Name: Bye Bye Bye Lines
Plugin URI:  http://www.nsync.com/
Description: Display a byline at the end of a post, making it a Bye bye bye line.
Version:     1.0
Author:      'N Sync
Author URI:  http://www.nsync.com/
License:     GPLv2 or later
*/

/**
 * Set up the metabox.
 *
 * @param  string    $post_type    The post type.
 * @param  object    $post         The current post object.
 * @return void
 */
//1st edit- add prefixes to every function//
function klw_call_meta_box( $post_type, $post ) {
    add_meta_box(
        'byebyebye_line',
        __( 'Bye Bye Bye Line', 'klw_byebyebye_lines' ),
        'klw_display_meta_box',
        'post',
        'side',
        'high'
    );
}

add_action( 'add_meta_boxes', 'klw_call_meta_box', 10, 2 );

/**
 * Display the HTML for the metabox.
 *
 * @param  object    $post    The current post object
 * @param  array     $args    Additional arguments for the metabox.
 * @return void
 */
//2nd edit- wp_nonce_field//
function klw_display_meta_box( $post, $args ) {
     wp_nonce_field( plugins_url( __FILE__ ), 'klw_byebyebye_lines_noncename' );
?>
    <p>
        <label for="klw-byeline">
            <?php _e( 'Bye Bye Bye Line', 'klw_byebyebye_lines' ); ?>:&nbsp;
        </label>
        <input type="text" class="widefat" name="klw-byeline" value="<?php echo get_post_meta( $post->ID, 'klw-byeline', true ); ?>" />
        <em>
            <?php _e( 'HTML is not allowed', 'klw_byebyebye_lines' ); ?>
        </em>
    </p>
<?php
}

/**
 * Save the metabox.
 *
 * @param  int       $post_id    The ID for the current post.
 * @param  object    $post       The current post object.
 */

//3rd edit-create else statement//
function klw_save_meta_box( $post_id, $post ) {
    if ( ! isset( $_POST['klw_byebyebye_lines_noncename'] ) && wp_verify_nonce( $_POST[ 'klw_byebyebye_lines_noncename' ], plugins_url( __FILE__ ) ) ){
        return;
    } else{
    //4th edit-sanitize_text_field function//         
    $byeline = sanitize_text_field($_POST['klw_byeline']);
    update_post_meta( $post_id, 'klw_byebyebye-line', $byeline );
    }
    return;
}

add_action( 'save_post', 'klw_save_meta_box', 10, 2 );

/**
 * Append the Bye Bye Bye Line to the content.
 *
 * @param  string    $content    The original content.
 * @return string                The altered content.
 */

//5th-edit change print function to display//
function klw_display_byebyebye_line( $content ) {
    $byebyebye_line = get_post_meta( get_the_ID(), 'klw_byebyebye-line', true );
    return $content . $byebyebye_line;
}

add_filter( 'the_content', 'klw_display_byebyebye_line', 40, 1 );