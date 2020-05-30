<?php

/**
 * Add Support for WooCommerce
 */
function customtheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'customtheme_add_woocommerce_support' );


/**
 * Disable all the unnecessary thinks
 */
function disable_bloatware() {

    // Disable the emoji's
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	
	// Remove from TinyMCE
    add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
    
    // Disable XMLRPC
    add_filter('xmlrpc_enabled', '__return_false');

}
add_action( 'init', 'disable_bloatware' );


/**
 * Filter out the tinymce emoji plugin.
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

/**
 * Add all Styles and Scripts
 */
function add_theme_assets() {

	// Fonts
	wp_enqueue_style ('google-fonts', 'https://fonts.googleapis.com/css2?family=Bitter:ital@1&family=Open+Sans:wght@300;400;600;700&family=Roboto:wght@300;400;500;700&display=swap' );

    // Styles
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    // Scripts
    wp_enqueue_script( 'splide', get_template_directory_uri() . '/assets/js/splide.js', array(), '5-22-2020', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/main.js', array(), '5-22-2020', true );

}
add_action( 'wp_enqueue_scripts', 'add_theme_assets' );


include('inc/woocommerce/global.php');
include('inc/woocommerce/archive-product.php');
include('inc/woocommerce/content-product.php');