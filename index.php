<?php
/*
Plugin Name: Plus Minus
Plugin URI: http://www.trivialview.ch
Description: Creates a simple plus/minus-list that can be styled in the CSS
Version: 1.0
Author: Christian Cueni
Author URI: http://www.trivialview.ch
*/

//[plusminus]
function plusminus_func( $atts, $content = null ){
	return '<div class="plusminus"><$atts['heading_level']>$atts['title']</heading_level>' . do_shortcode($content) . '</div>';
	//return '<div class="plusminus">' . $content . '</div>';
}

function plus_func( $atts, $content = null ){
	return '<div class="plus plusminus_item">' . $content . '</div>';
}

function minus_func( $atts, $content = null ){
	return '<div class="minus plusminus_item">' . $content . '</div>';
}
add_shortcode( 'plusminus', 'plusminus_func' );
add_shortcode( 'plus', 'plus_func' );
add_shortcode( 'minus', 'minus_func' );
?>