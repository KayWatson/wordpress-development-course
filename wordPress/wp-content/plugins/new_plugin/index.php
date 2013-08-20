<?php
/*
Plugin Name: New Plugin
Plugin URI: http://new_plugin.com
version: 1.0
Description: A plugin that is new
Plugin Name: Whatever P Dangit
Author: WDIM393F
Author URI: http://new-plugin.com
*/

function kle_remove_capital_P_damnit(){
	remove_filter('the_content', 'capital_P_dangit', 11);
	remove_filter('the_title', 'capital_P_dangit', 11);
	remove_filter('comment_text', 'capital_P_dangit', 31);
}
add_action('init', 'kle_remove_capital_P_damnit');