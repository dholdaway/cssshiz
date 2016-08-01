<?php
defined( 'ABSPATH' ) OR exit;

function ct_founder_pro_get_fonts() {

	$fonts_url     = FOUNDER_PRO_URL . "assets/fonts.json";
	$fonts         = wp_remote_get( $fonts_url, array( 'timeout' => 10 ) );
	$response_code = wp_remote_retrieve_response_code( $fonts );

	if ( ! is_wp_error( $fonts ) && $response_code == 200 ) {
		$fonts = wp_remote_retrieve_body( $fonts );
	} else {
		$fonts = wp_remote_fopen( $fonts_url );
	}

	if ( is_string( $fonts ) && ! empty( $fonts ) ) {
		$fonts_object = json_decode( $fonts, true );
	} else {
		$fonts_object = '';
	}

	return $fonts_object;
}

// return the available fonts in a format the customizer can use
function ct_founder_pro_prepare_fonts() {

	// get fonts array from fonts.json file
	$fonts = ct_founder_pro_get_fonts();

	$font_families = array();

	if ( is_array( $fonts ) && ! empty( $fonts ) ) {

		// for each item in the file (which holds data for one font)
		foreach ( $fonts['items'] as $key => $value ) {

			// store current font family
			$item_family = $fonts['items'][ $key ]['family'];

			// store available weights
			$item_weights = $fonts['items'][ $key ]['variants'];

			// add current font family to font list with available weights
			$font_families[ $item_family ] = $item_weights;
		}
	}

	return $font_families;
}

function ct_founder_pro_font_css() {

	$primary_font        = get_theme_mod( 'primary_font' );
	$heading_font        = get_theme_mod( 'heading_font' );
	$primary_font_weight = get_theme_mod( 'primary_font_weight' );
	$heading_font_weight = get_theme_mod( 'heading_font_weight' );
	$css                 = '';

	if ( empty( $primary_font_weight ) ) {
		$primary_font_weight = 400;
	}
	if ( empty( $heading_font_weight ) ) {
		$heading_font_weight = 700;
	}

	if ( $primary_font != "Noto Sans" && ! empty( $primary_font ) ) {

		$css .= "body, input, textarea  {
			font-family: '$primary_font' !important;
		}";
	}
	if ( $primary_font_weight != "400" && ! empty( $primary_font_weight ) ) {

		$css .= "body, input, textarea {
			font-weight: $primary_font_weight;
		}";
	}
	if ( $heading_font != "Noto Sans" && ! empty( $heading_font ) ) {

		$css .= "h1, h2, h3, h4, h5, h6 {
			font-family: '$heading_font';
		}";
	}
	if ( $heading_font_weight != "700" && ! empty( $heading_font_weight ) ) {

		$css .= "h1, h2, h3, h4, h5, h6 {
			font-weight: $heading_font_weight;
		}";
	}

	if ( ! empty( $css ) ) {

		$css = ct_founder_pro_sanitize_css( $css );

		wp_add_inline_style( 'ct-founder-style', $css );
		wp_add_inline_style( 'ct-founder-style-rtl', $css );
	}
}
add_action( 'wp_enqueue_scripts', 'ct_founder_pro_font_css', 99 );

function ct_founder_pro_register_new_font() {

	$primary_font        = get_theme_mod( 'primary_font' );
	$heading_font        = get_theme_mod( 'heading_font' );
	$primary_font_weight = get_theme_mod( 'primary_font_weight' );
	$heading_font_weight = get_theme_mod( 'heading_font_weight' );

	if ( $primary_font != "Noto Sans" && ! empty( $primary_font ) ) {

		$fonts_url = ct_founder_pro_format_font_request( $primary_font );

		wp_register_style( 'ct-founder-pro-primary-google-fonts', $fonts_url );

		wp_enqueue_style( 'ct-founder-pro-primary-google-fonts' );
	}
	if ( $heading_font != "Noto Sans" && ! empty( $heading_font ) ) {

		$fonts_url = ct_founder_pro_format_font_request( $heading_font );

		wp_register_style( 'ct-founder-pro-heading-google-fonts', $fonts_url );

		wp_enqueue_style( 'ct-founder-pro-heading-google-fonts' );
	}
}
add_action( 'wp_enqueue_scripts', 'ct_founder_pro_register_new_font', 30 );

function ct_founder_pro_format_font_request( $font ) {

	// get array of fonts and their weights
	$fonts = ct_founder_pro_prepare_fonts();

	$fonts_url = '';

	if ( is_array( $fonts ) && ! empty( $fonts ) ) {

		// get all weights for user selected font
		foreach ( $fonts[ $font ] as $weight ) {
			$weights[ $weight ] = $weight;
		}

		if ( ! empty( $weights ) ) {

			// convert to comma-delimited list
			$weights = implode( ',', $weights );

			// turn 'regular' into '400'
			$weights = str_replace( 'regular', '400', $weights );

			// replace any spaces with '+'
			$font = str_replace( ' ', '+', $font );

			// format the font/weight for the request
			$font_request = $font . ':' . $weights;

			$font_args = array(
				'family' => $font_request,
				'subset' => urlencode( 'latin,latin-ext' )
			);

			$fonts_url = add_query_arg( $font_args, '//fonts.googleapis.com/css' );

			apply_filters( 'founder-pro-font-filter', $fonts_url );

			$fonts_url = esc_url_raw( $fonts_url );
		}
	}

	return $fonts_url;
}