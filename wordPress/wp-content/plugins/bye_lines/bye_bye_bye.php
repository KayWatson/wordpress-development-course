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
function klw_display_meta_box( $post, $args ) {
?>
    <p>
        <label for="klw-byeline">
            <?php _e( 'Bye Bye Bye Line', 'klw_byebyebye_lines' ); ?>:&nbsp;
        </label>
        <input type="text" class="widefat" name="byeline" value="" />
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
function klw_save_meta_box( $post_id, $post ) {
    if ( ! isset( $_POST['klw_byeline'] ) ) {
        return;
    }

    $byeline = $_POST['klw_byeline'];
    update_post_meta( $post_id, 'klw_byebyebye-line', $byeline );
}

add_action( 'save_post', 'klw_save_meta_box', 10, 2 );

/**
 * Append the Bye Bye Bye Line to the content.
 *
 * @param  string    $content    The original content.
 * @return string                The altered content.
 */
function klw_print_byebyebye_line( $content ) {
    $byebyebye_line = get_post_meta( get_the_ID(), 'klw_byebyebye-line', true );
    return $content . $byebyebye_line;
}

add_filter( 'the_content', 'klw_print_byebyebye_line' );