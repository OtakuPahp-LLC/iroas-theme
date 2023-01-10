<?php
/**
 * Functions and definitions
 *
 * @package otakupahp-iroas-theme
 *
 * @since 1.0.0
 */

/**
 * Enqueue the style.css file.
 *
 * @since 1.0.0
 */
function otk_iroas_styles() {
    
    // Get version of JS and CSS
	$js_ver  = date( "ymd-Gis", filemtime( get_stylesheet_directory() . '/scripts.js' ) );
	$css_ver = date( "ymd-Gis", filemtime( get_stylesheet_directory() . '/style.css' ) );
	
	wp_enqueue_style(
		'otk-iroas-style',
		get_stylesheet_uri(),
		array(),
		$css_ver
	);
	wp_enqueue_script(
	    'otk-iroas-script',
	    get_stylesheet_directory_uri() . '/scripts.js',
	    array(),
	    $js_ver
	);
	
}
add_action( 'wp_enqueue_scripts', 'otk_iroas_styles' );

/**
 * Define theme support.
 *
 * @since 1.0.0
 */
function otk_iroas_theme_support() {

	// Add support for featured images.
	add_theme_support('post-thumbnails');

}
//add_action('after_setup_theme', 'otk_iroas_theme_support');