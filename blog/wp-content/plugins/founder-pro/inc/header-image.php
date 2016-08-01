<?php
defined( 'ABSPATH' ) OR exit;

function ct_founder_pro_output_header_image() {

	$header_image  = get_theme_mod( 'header_image_upload' );
	$homepage_only = get_theme_mod( 'header_image_homepage' );

	if ( $homepage_only == 'yes' && ! is_front_page() ) {
		return;
	}
	if ( $header_image ) {
		echo '<div id="header-image" class="header-image" style="background-image: url(\'' . $header_image . '\')" >';
			if ( get_theme_mod( 'header_image_link_home' ) == 'yes' ) {
				echo '<a href="' . site_url() . '">Visit Homepage</a>';
			}
		echo '</div>';
	}
}
add_action( 'body_top', 'ct_founder_pro_output_header_image' );

function ct_founder_pro_header_image_css() {

	$header_image = get_theme_mod( 'header_image_upload' );

	if ( ! empty( $header_image ) ) {

		$height_type = get_theme_mod( 'header_image_height_type' );
		$height      = get_theme_mod( 'header_image_height' );

		if ( empty( $height ) ) {
			$height = 20;
		}

		if ( $height_type == 'fixed' ) {
			$custom_css = "#header-image { height: " . $height * 5 . "px; padding-bottom: 0; }";
		} else {
			$custom_css = "#header-image { padding-bottom: $height%; }";
		}

		$custom_css = ct_founder_pro_sanitize_css( $custom_css );

		wp_add_inline_style( 'ct-founder-style', $custom_css );
		wp_add_inline_style( 'ct-founder-style-rtl', $custom_css );
	}
}
add_action( 'wp_enqueue_scripts', 'ct_founder_pro_header_image_css', 99 );

// add class if header image has parallax effect
function ct_founder_pro_header_image_class( $classes ) {

	$parallax     = get_theme_mod( 'header_image_parallax' );
	$header_image = get_theme_mod( 'header_image_upload' );

	if ( $parallax == 'yes' && ! empty( $header_image ) ) {
		$classes[] = 'parallax';
	}

	return $classes;
}
add_filter( 'body_class', 'ct_founder_pro_header_image_class' );