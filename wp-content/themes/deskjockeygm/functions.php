<?php

add_action( 'wp_enqueue_scripts', 'sam_theme_scripts' );

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' ); 
set_post_thumbnail_size( 300, 300 ); // 300 pixels wide by 300 pixels tall, resize mode

// smart jquery inclusion
if (!is_admin()) {
	wp_deregister_script('jquery');
	wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"), false);
	wp_enqueue_script('jquery');
}

/**
 * Proper way to enqueue scripts and styles
 */

function sam_theme_scripts() {
	wp_enqueue_style( 'main-css', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}

?>