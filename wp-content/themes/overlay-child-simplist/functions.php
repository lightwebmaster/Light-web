<?php
/**
 * Guten Child functions and definitions
 */
define( 'OVERLAYCHILD_SIMPLIST_THEME_VERSION' , '1.1.0' );

/**
 * Enqueue parent theme style
 */
function overlaychild_simplist_child_enqueue_styles() {
    // wp_enqueue_style( 'overlay-default-fonts', '//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Rokkitt:300,400,600,700', array(), OVERLAYCHILD_SIMPLIST_THEME_VERSION );
    wp_enqueue_style( 'overlay-style', get_template_directory_uri() . '/style.css', array(), OVERLAYCHILD_SIMPLIST_THEME_VERSION );
    
    wp_enqueue_style( 'overlaychild-simplist-style', get_stylesheet_uri(), array( 'overlay-style' ), OVERLAYCHILD_SIMPLIST_THEME_VERSION );
    wp_enqueue_style( 'overlaychild-simplist-header-style', get_stylesheet_directory_uri() . '/templates/header/header-style.css', array( 'overlay-style', 'overlay-header-style' ), OVERLAYCHILD_SIMPLIST_THEME_VERSION );

    // Load Responsive Stylesheets
	if ( !get_theme_mod( 'overlay-responsive-disable', customizer_library_get_default( 'overlay-responsive-disable' ) ) ) :
		$overlay_resp_mobile = get_theme_mod( 'overlay-mobile-breakat', customizer_library_get_default( 'overlay-mobile-breakat' ) );
		wp_enqueue_style( 'overlaychild-simplist-resp-mobile', get_stylesheet_directory_uri()."/includes/css/responsive-mobile.css", array( 'overlay-style', 'overlay-resp-mobile' ), OVERLAYCHILD_SIMPLIST_THEME_VERSION, '(max-width: '.esc_attr( $overlay_resp_mobile ).'px)' );
	endif;
}
add_action( 'wp_enqueue_scripts', 'overlaychild_simplist_child_enqueue_styles' );

/**
 * Enqueue Overlay custom customizer styling.
 */
function overlaychild_simplist_load_customizer_script() {
	wp_enqueue_script( 'overlaychild-simplist-customizer-js', get_stylesheet_directory_uri() . "/includes/js/customizer-custom.js", array( 'jquery', 'overlay-customizer-js' ), OVERLAYCHILD_SIMPLIST_THEME_VERSION, true );
    wp_enqueue_style( 'overlaychild-simplist-customizer-css', get_stylesheet_directory_uri() . "/includes/css/customizer.css", array( 'overlay-customizer-css' ), OVERLAYCHILD_SIMPLIST_THEME_VERSION );
}
add_action( 'customize_controls_enqueue_scripts', 'overlaychild_simplist_load_customizer_script' );
