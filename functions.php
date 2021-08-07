<?php

add_theme_support( 'admin-bar' );
add_theme_support( 'block-templates' );
add_theme_support( 'full-site-editing' );
add_theme_support( 'menus' );
add_theme_support( 'wp-block-styles' );
add_theme_support( 'core-block-patterns' );
add_theme_support( 'post-thumbnails' );

add_action('wp_enqueue_scripts', function() {

	wp_enqueue_style(
		'proto-styles',
		get_template_directory_uri() . '/style.css',
		array(),
		time(),
		'all'
	);

});
