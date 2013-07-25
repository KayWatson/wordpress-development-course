/*
Plugin Name: AddThis Buttons
Plugin URI: http://www.addthis.com/
Version: 1.0
Description: Vertical menu for AddThis social network share buttons 
License: GNU General Public License v2 or later
*/

//I'm not sure if I got the right js script 

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


//This is my first attempt to use the Pimpletrest lecture and apply it to the AddThis sharing Plugin 

function add_this_sharing( $content ) {
    if ( is_single() ) {
        // Create the Sharing buttons HTML- Code borrowed from the pimpletrest example
        $button_html  = '<a href="//pinterest.com/pin/create/button/" data-pin-do="buttonBookmark">';
        $button_html .= '<img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" />';
        $button_html .= '</a>';
     

        //This is the HTML borrowed from the AddThis website 

        <div class="addthis_toolbox addthis_default_style ">
		<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
		<a class="addthis_button_tweet"></a>
		<a class="addthis_button_pinterest_pinit"></a>
		<a class="addthis_counter addthis_pill_style"></a>
		</div>
		

        // Append the buttons to the content
        
        $content .= $button_html;
    }

    return $content;
}

add_filter( 'the_content', 'add_this_sharing', 20 );

