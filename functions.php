<?php
/**
 * Block Fragments Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package block-fragments
 */

add_action( 'wp_enqueue_scripts', 'twentytwenty_parent_theme_enqueue_styles' );

/**
 * Enqueue scripts and styles.
 */
function twentytwenty_parent_theme_enqueue_styles() {
	wp_enqueue_style( 'twentytwentyone-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'block-fragments-style',
		get_stylesheet_directory_uri() . '/style.css',
		[ 'twentytwentyone-style' ]
	);
}

add_action( 'after_setup_theme', function() {
	add_theme_support( 'block-template-parts' );
} );
