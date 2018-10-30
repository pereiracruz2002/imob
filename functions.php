<?php

load_imob_scripts(){
	wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array( '' ), '3.3.7', 'all' );
	wp_enqueue_style( 'template', get_stylesheet(), array( '' ), false, 'all' );
	wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array( 'jquery' ), null, true );
}

add_action( 'wp_enqueue_scripts', 'load_imob_scripts', 10, 1 );
