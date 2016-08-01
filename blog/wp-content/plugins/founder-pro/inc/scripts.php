<?php
defined( 'ABSPATH' ) OR exit;

// Front-end
function ct_founder_pro_enqueue_front_end_styles() {

	if ( is_rtl() ) {
		wp_enqueue_style( 'ct-founder-pro-style-rtl', FOUNDER_PRO_URL . 'styles/rtl.min.css' );
	} else {
		wp_enqueue_style( 'ct-founder-pro-style', FOUNDER_PRO_URL . 'styles/style.min.css' );
	}

	// main JS file (ct-founder-js dependency contains fitvids)
	wp_enqueue_script( 'ct-founder-pro-js', FOUNDER_PRO_URL . 'js/build/functions.min.js', array( 'ct-founder-js' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'ct_founder_pro_enqueue_front_end_styles', 20 );

// Back-end
function ct_founder_pro_enqueue_admin_styles( $hook ) {

	if ( $hook == 'post.php' || $hook == 'post-new.php' ) {

		// Admin CSS
		wp_enqueue_style( 'ct-founder-pro-admin-style', FOUNDER_PRO_URL . 'styles/admin.min.css' );

		// Fitvids JS
		wp_enqueue_script( 'fitvids', FOUNDER_PRO_URL . 'js/fitvids.js', array( 'jquery' ), '', true );

		// Admin JS
		wp_enqueue_script( 'ct-founder-pro-admin-js', FOUNDER_PRO_URL . 'js/build/admin.min.js', array(
			'jquery',
			'fitvids'
		), '', true );
	}
	if ( $hook == 'appearance_page_founder-options' ) {
		// Admin CSS
		wp_enqueue_style( 'ct-founder-pro-admin-style', FOUNDER_PRO_URL . 'styles/admin.min.css' );
	}
}
add_action( 'admin_enqueue_scripts', 'ct_founder_pro_enqueue_admin_styles' );

// Customizer
function ct_founder_pro_enqueue_customizer_scripts() {
	wp_enqueue_script( 'ct-founder-pro-customizer-js', FOUNDER_PRO_URL . 'js/build/customizer.min.js', array( 'jquery' ), '', true );
	wp_enqueue_style( 'ct-founder-pro-customizer-css', FOUNDER_PRO_URL . 'styles/customizer.min.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'ct_founder_pro_enqueue_customizer_scripts' );

/*
 * Script for live updating with customizer options. Has to be loaded separately on customize_preview_init hook
 * transport => postMessage
 */
function ct_founder_pro_enqueue_customizer_post_message_scripts() {
	wp_enqueue_script( 'ct-founder-pro-post-message-js', FOUNDER_PRO_URL . 'js/build/postMessage.min.js', array( 'jquery' ), '', true );
}
add_action( 'customize_preview_init', 'ct_founder_pro_enqueue_customizer_post_message_scripts' );