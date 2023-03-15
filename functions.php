<?php

function phone_enqueue_scripts() {
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/style.css',  array(), false, 'all' );
  wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/app.js',  array(), false, true );
  
}

add_action( 'wp_enqueue_scripts', 'phone_enqueue_scripts' );