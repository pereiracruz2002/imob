<?php
function load_imob_scripts(){
	wp_enqueue_style( 'imob_style', get_stylesheet_uri() );
	wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array( '' ), '3.3.7', 'all' );
	
	wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array( 'jquery' ), null, true );
}
add_action( 'wp_enqueue_scripts', 'load_imob_scripts', 10, 1 );

register_nav_menus( 
	array( 'my_menu_main' => 'Menu Principal') 
);
