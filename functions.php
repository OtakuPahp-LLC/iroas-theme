<?php

if ( ! function_exists( 'iroas_theme_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since iroas-theme 1.0
	 *
	 * @return void
	 */
	function iroas_theme_support() {
		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
		
		//Agregar soporte para Woocommerce
		add_theme_support( 'woocommerce' );

	}

endif;
add_action( 'after_setup_theme', 'iroas_theme_support' );

/*
Enqueue styles and scripts
*/

if ( ! function_exists( 'iroas_theme_estilos_scripts' ) ) :
	
    function iroas_theme_estilos_scripts(){
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		
		wp_register_style(
			'iroas-theme-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);
		wp_enqueue_style( 'iroas-theme-style' );
		
		
    }

endif;

add_action('wp_enqueue_scripts', 'iroas_theme_estilos_scripts' ); 
