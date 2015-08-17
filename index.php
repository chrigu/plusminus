<?php
/*
Plugin Name: PlusMinus
Plugin URI: http://www.trivialview.ch
Description: Creates a simple plus/minus-list that can be styled in the CSS
Version: 0.2
Author: Christian Cueni
Author URI: http://www.trivialview.ch
*/

//[plusminus]
function plusminus_func( $atts, $content = null ){
	$a = shortcode_atts( array(
    	'heading_level' => 'h4',
    	'title' => __('Plus & minus', 'plusminus'),
		), $atts );
	return '<div class="plusminus"><'.$a['heading_level'].'>'.$a['title'].'</'.$a['heading_level'].'>' . do_shortcode($content) . '</div>';
	//return '<div class="plusminus">' . $content . '</div>';
}

function plus_func( $atts, $content = null ){
	return '<div class="plus plusminus_item"><h5 class="plusminus_item_title">' . __('Plus'). '</h5>' . $content . '</div>';
}

function minus_func( $atts, $content = null ){
	return '<div class="minus plusminus_item"><h5 class="plusminus_item_title">' . __('Minus'). '</h5>' . $content . '</div>';
}
add_shortcode( 'plusminus', 'plusminus_func' );
add_shortcode( 'plus', 'plus_func' );
add_shortcode( 'minus', 'minus_func' );
?>