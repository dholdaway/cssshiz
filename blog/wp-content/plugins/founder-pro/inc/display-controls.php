<?php
defined( 'ABSPATH' ) OR exit;

function ct_founder_pro_display_controls_css() {

	$css = '';

	if ( get_theme_mod( 'display_site_title' ) == 'hide' ) {
		$css .= '.site-title { display: none; }';
	}
	if ( get_theme_mod( 'display_primary_menu' ) == 'hide' ) {
		$css .= '.menu-primary, .toggle-navigation { display: none; }';
	}
	if ( get_theme_mod( 'display_post_meta' ) == 'hide' ) {
		$css .= '.post-meta { display: none; }';
	}
	if ( get_theme_mod( 'display_post_title' ) == 'hide' ) {
		$css .= '.post-title { display: none; }';
	}
	if ( get_theme_mod( 'display_more_link' ) == 'hide' ) {
		$css .= '.more-link { display: none; }';
	}
	if ( get_theme_mod( 'display_comments_link' ) == 'hide' ) {
		$css .= '.post-comments { display: none; }';
		$css .= '.more-link {margin-right: 0;}';
	}
	if ( get_theme_mod( 'display_post_categories' ) == 'hide' ) {
		$css .= '.post-categories { display: none; }';
	}
	if ( get_theme_mod( 'display_post_tags' ) == 'hide' ) {
		$css .= '.post-tags { display: none; }';
	}
	if ( get_theme_mod( 'display_post_nav' ) == 'hide' ) {
		$css .= '.further-reading { display: none; }';
	}
	if ( get_theme_mod( 'display_comment_count' ) == 'hide' ) {
		$css .= '.comments-number { display: none; }';
	}

	$css = ct_founder_pro_sanitize_css( $css );

	wp_add_inline_style( 'ct-founder-style', $css );
	wp_add_inline_style( 'ct-founder-style-rtl', $css );
}
add_action( 'wp_enqueue_scripts', 'ct_founder_pro_display_controls_css', 99 );