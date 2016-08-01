<?php
defined( 'ABSPATH' ) OR exit;

function ct_founder_pro_register_menus() {

	register_nav_menus( array(
		'secondary' => __( 'Secondary', 'founder-pro' ),
		'footer'    => __( 'Footer', 'founder-pro' )
	) );
}
add_action( 'after_setup_theme', 'ct_founder_pro_register_menus', 20 );

function ct_founder_pro_output_secondary_menu() {
	include( 'menus/menu-secondary.php' );
}
add_action( 'before_header', 'ct_founder_pro_output_secondary_menu' );

function ct_founder_pro_output_footer_menu() {
	include( 'menus/menu-footer.php' );
}
add_action( 'footer_top', 'ct_founder_pro_output_footer_menu' );