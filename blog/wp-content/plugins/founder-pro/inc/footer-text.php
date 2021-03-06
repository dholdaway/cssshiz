<?php
defined( 'ABSPATH' ) OR exit;

function ct_founder_pro_filter_footer_text( $footer_text ) {

	$custom_text = get_theme_mod( 'footer_text' );

	if ( $custom_text ) {
		$footer_text = $custom_text;
	}

	return $footer_text;
}
add_filter( 'ct_founder_footer_text', 'ct_founder_pro_filter_footer_text', 99 );