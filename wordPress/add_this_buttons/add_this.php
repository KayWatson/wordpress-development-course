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
        '//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-51f086dc1e6af3a7',
        array(),
        null,
        true
    );
} 

add_action( 'wp_enqueue_scripts', 'add_this_sharing_enqueue_script' );

function add_this_sharing_buttons( $content ) {
    if ( is_single() ) {

        $button_html = '<div class="addthis_toolbox addthis_default_style ">';
		$button_html .= '<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>';
		$button_html .= '<a class="addthis_button_tweet"></a>';
		$button_html .= '<a class="addthis_button_pinterest_pinit"></a>';
		$button_html .= '<a class="addthis_counter addthis_pill_style"></a>';
		$button_html .= '</div>';
        
        $content .= $button_html;
    }

    return $content;
}

function add_this_sharing_script( $footer ){

        $js_html = '<script type="text/javascript">';
        $js_html .= 'addthis.layers({';
        $js_html .= '"theme" : "gray",';
        $js_html .= '"share" : {';
        $js_html .= '"position" : "right",';
        $js_html .= '"numPreferredServices" : 3';
        $js_html .= '},';
        $js_html .= '"whatsnext" : {},';
        $js_html .= '"recommended" : {';
        $js_html .= '"title": "Recommended for you:"';
        $js_html .= '}';
        $js_html .= '});';
        $js_html .= '</script>';   
    
        $footer .= $js_html;
        return $footer;
}

add_filter( "the_content", "add_this_sharing_buttons", 20 );
add_filter( "the_footer", "add_this_sharing_script", 21 );

