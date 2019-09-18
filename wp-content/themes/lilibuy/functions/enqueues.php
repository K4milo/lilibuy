<?php

function lilibuy_child_assets() {

	// Bootstrap Support
	//enqueue bootstrap in the child theme 
	
	wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri().'/bootstrap/css/bootstrap.min.css', false, NULL, 'all');

	// Styles
	$theme_info = wp_get_theme();

	wp_enqueue_style('my-styles', get_stylesheet_directory_uri().'/assets/css/theme.css', array(), $theme_info->get('Version'));

	// Scripts

	wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri().'/bootstrap/js/bootstrap.min.js', array('jquery'), NULL, true);

	wp_enqueue_script('slick-js', get_stylesheet_directory_uri().'/assets/js/vendors/slick/slick.js', false, null, true);

	wp_enqueue_script('theme-scripts', get_stylesheet_directory_uri().'/assets/js/theme.js', false, null, true);
}

add_action('wp_enqueue_scripts', 'lilibuy_child_assets', 300);