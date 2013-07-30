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

function add_this_sharing_script(){
    if ( is_single() && 0 == get_option( 'add_this_disable_button', 0) ) {        
        $js_html = '<script type="text/javascript">';
        $js_html .= 'addthis.layers({';
        $js_html .= '"theme" : "gray",';
        $js_html .= '"share" : {';
        $js_html .= '"position" : "right",';
        $js_html .= '"numPreferredServices" : 5';
        $js_html .= '},';
        $js_html .= '"whatsnext" : {},';
        $js_html .= '"recommended" : {';
        $js_html .= '"title": "Recommended for you:"';
        $js_html .= '}';
        $js_html .= '});';
        $js_html .= '</script>';   
    }    
        echo $js_html;
}
/*function add_this_sharing_buttons( $content ) {


        $button_html = '<div class="addthis_toolbox addthis_floating_style addthis_32x32_style" style="left:50px;top:50px;">';
        $button_html .= '<a class="addthis_button_preferred_1"></a>';
        $button_html .= '<a class="addthis_button_preferred_2"></a>';
        $button_html .= '<a class="addthis_button_preferred_3"></a>';
        $button_html .= '<a class="addthis_button_preferred_4"></a>';
        $button_html .= '<a class="addthis_button_compact"></a>';
        $button_html .= '</div>';

        $content .= $button_html;


    return $content;
} */

add_action( "wp_footer", "add_this_sharing_script", 20 );

function add_this_add_options_page() {
    add_options_page(
        __( 'addThis Options' ),
        __( 'addThis Options' ),
        'manage_options',
        'add_this_options_page',
        'add_this_render_options_page',

    );
}

add_action( 'admin_menu', 'add_this_add_options_page' );

function add_this_render_options_page() {
    ?>
    <div class="wrap">
        <?php screen_icon(); ?>
        <h2><?php _e( 'AddThis Options' ); ?></h2>
        <form action="options.php" method="post">
            <?php settings_fields( 'add_this_disable_button' ); ?>
            <?php do_settings_sections( 'add_this_options_page' ); ?>
            <p class="submit">
                <input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e( 'Save Changes' ); ?>">
            </p>
        </form>
    </div>
    <?php
}

function add_this_add_disable_button_setting() {
    // Register a binary value called "addThis_disable"
    register_setting(
        'add_this_disable_button',
        'add_this_disable_button',
        'absint'
    );

    register_setting(
        'add_this_number_preferred',
        'add_this_number_preferred',
        'absint'
    );

    // Add the settings section to hold the interface
    add_settings_section(
        'add_this_main_settings',
        __( 'AddThis Controls' ),
        'add_this_render_main_settings_section',
        'add_this_options_page'
    );

    // Add the settings field to define the interface
    add_settings_field(
        'add_this_disable_button_field',
        __( 'Disable AddThis Buttons' ),
        'add_this_render_disable_button_input',
        'add_this_options_page',
        'add_this_main_settings'
    );

    add_settings_field(
        'add_this_number_preferred_field',
        __( 'Choose Number of Buttons to be Displayed' ),
        'add_this_render_number_preferred_input',
        'add_this_options_page',
        'add_this_main_settings'
    );
}

add_action( 'admin_init', 'add_this_add_disable_button_setting' );


function add_this_render_main_settings_section() {
    echo '<p>Main settings for the AddThis plugin.</p>';
}

function add_this_render_disable_button_input() {
    // Get the current value
    $current = get_option( 'add_this_disable_button', 0 );
    echo '<input id="add-this-disable-button" name="add_this_disable_button" type="checkbox" value="1" ' . checked( 1, $current, false ) . ' />';
}


function add_this_render_number_preferred_input(){ 
    //borrowed this from Jameson to get number options in settings (but I can't get it to work)
    $current = get_option('number_preferred_field', 5);
    echo '<label><input type="radio" name="number_preferred_input" value="1"'. checked(1, $current, false) .'/> 1 </label>';
    echo '<label><input type="radio" name="number_preferred_input" value="2"'. checked(2, $current, false) .'/> 2 </label>';
    echo '<label><input type="radio" name="number_preferred_input" value="3"'. checked(3, $current, false) .'/> 3 </label>';
    echo '<label><input type="radio" name="number_preferred_input" value="4"'. checked(4, $current, false) .'/> 4 </label>';
    echo '<label><input type="radio" name="number_preferred_input" value="5"'. checked(5, $current, false) .'/> 5 </label>';
    echo '<label><input type="radio" name="number_preferred_input" value="6"'. checked(6, $current, false) .'/> 6 </label>';
}
