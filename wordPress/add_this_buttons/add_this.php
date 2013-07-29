<?php
/*
Plugin Name: AddThis Buttons
Plugin URI: http://www.addthis.com/
Version: 1.0
Description: Vertical menu for AddThis social network share buttons 
License: GNU General Public License v2 or later
*/


function add_this_sharing_enqueue_script(){
        wp_enqueue_script(
        'add_this_sharing',
        '//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-51f45f596a3e1f1a',
        array(),
        null,
        true
    );
} 

add_action( 'wp_enqueue_scripts', 'add_this_sharing_enqueue_script' );

function add_this_sharing_buttons( $content ) {
    if ( is_single() ) {

        $button_html = '<div class="addthis_toolbox addthis_floating_style addthis_32x32_style" style="left:50px;top:50px;">';
        $button_html .= '<a class="addthis_button_preferred_1"></a>';
        $button_html .= '<a class="addthis_button_preferred_2"></a>';
        $button_html .= '<a class="addthis_button_preferred_3"></a>';
        $button_html .= '<a class="addthis_button_preferred_4"></a>';
        $button_html .= '<a class="addthis_button_compact"></a>';
        $button_html .= '</div>';

        $content .= $button_html;

    }

    return $content;
}

add_filter( "the_content", "add_this_sharing_buttons", 20 );

function addThis_add_options_page() {
    add_options_page(
        __( 'addThis Options' ),
        __( 'addThis Options' ),
        'manage_options',
        'addThis_options_page',
        'addThis_render_options_page'
    );
}

add_action( 'admin_menu', 'addThis_add_options_page' );

function addThis_render_options_page() {
    ?>
    <div class="wrap">
        <?php screen_icon(); ?>
        <h2><?php _e( 'AddThis Options' ); ?></h2>
        <form action="options.php" method="post">
            <?php settings_fields( 'addThis_disable_button' ); ?>
            <?php do_settings_sections( 'addThis_options_page' ); ?>
            <p class="submit">
                <input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e( 'Save Changes' ); ?>">
            </p>
        </form>
    </div>
    <?php
}

function addThis_add_disable_button_setting() {
    // Register a binary value called "addThis_disable"
    register_setting(
        'addThis_disable_button',
        'addThis_disable_button',
        'absint'
    );

    // Add the settings section to hold the interface
    add_settings_section(
        'addThis_main_settings',
        __( 'AddThis Controls' ),
        'addThis_render_main_settings_section',
        'addThis_options_page'
    );

    // Add the settings field to define the interface
    add_settings_field(
        'addThis_disable_button_field',
        __( 'Disable AddThis Buttons' ),
        'addThis_render_disable_button_input',
        'addThis_options_page',
        'addThis_main_settings'
    );
}

add_action( 'admin_init', 'addThis_add_disable_button_setting' );


function addThis_render_main_settings_section() {
    echo '<p>Main settings for the AddThis plugin.</p>';
}

function addThis_render_disable_button_input() {
    // Get the current value
    $current = get_option( 'addThis_disable_button', 0 );
    echo '<input id="addThis-disable-button" name="addThis_disable_button" type="checkbox" value="1" ' . checked( 1, $current, false ) . ' />';
}

