<?php

if ( ! function_exists( 'otakupahptest_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since otakupahptest 1.0
	 *
	 * @return void
	 */
	function otakupahptest_support() {
		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
		
		//Agregar soporte para Woocommerce
		add_theme_support( 'woocommerce' );

	}

endif;
add_action( 'after_setup_theme', 'otakupahptest_support' );

/*
Enqueue styles and scripts
*/

if ( ! function_exists( 'iroasformacion_styles' ) ) :
	
    function iroasformacion_styles(){
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		
		wp_register_style(
			'iroasformacion-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);
		wp_enqueue_style( 'iroasformacion-style' );
		
		
    }

endif;

add_action('wp_enqueue_scripts', 'iroasformacion_styles' ); 
