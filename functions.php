<?php
function add_styles_and_scripts() {
    
	// all styles
    wp_enqueue_style( 'style', get_template_directory_uri() . '/reset.css');
    wp_enqueue_style( 'style1', get_template_directory_uri('style') . '/style.css', array());

	// all scripts
	wp_enqueue_script( 'jquery-3.4.1', get_template_directory_uri() . '/assets/js/jquery-3.4.1.js');
    
}
add_action( 'wp_enqueue_scripts', 'add_styles_and_scripts' );


?>