<?php

function i_am_awesome ($title, $sep){

$title='I Am Awesome';
return $title;
}

add_filter('wp_title','i_am_awesome', 20, 2);
