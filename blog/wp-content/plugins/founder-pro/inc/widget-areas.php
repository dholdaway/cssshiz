<?php
defined( 'ABSPATH' ) OR exit;

/********** Register Widget Areas **********/

function ct_founder_pro_register_widget_areas() {

	// After post content
	register_sidebar( array(
		'name'          => __( 'After Post Content', 'founder-pro' ),
		'id'            => 'after-post',
		'description'   => __( 'Widgets in this area will be shown after the post content', 'founder-pro' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>'
	) );
	// After page content
	register_sidebar( array(
		'name'          => __( 'After Page Content', 'founder-pro' ),
		'id'            => 'after-page',
		'description'   => __( 'Widgets in this area will be shown after the page content', 'founder-pro' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>'
	) );
	// Before main content
	register_sidebar( array(
		'name'          => __( 'Before Main Content', 'founder-pro' ),
		'id'            => 'before-main',
		'description'   => __( 'Widgets in this area will be shown below the header and above the main content', 'founder-pro' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>'
	) );
	// After main content
	register_sidebar( array(
		'name'          => __( 'After Main Content', 'founder-pro' ),
		'id'            => 'after-main',
		'description'   => __( 'Widgets in this area will be shown below the main content', 'founder-pro' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>'
	) );
}
add_action( 'widgets_init', 'ct_founder_pro_register_widget_areas' );

/********** Add Widget Areas to Front-end **********/

// After Post Content
function ct_founder_pro_after_post_content_widgets() {
	include( 'widget-areas/after-post-content.php' );
}
add_action( 'post_after', 'ct_founder_pro_after_post_content_widgets' );

// After Page Content
function ct_founder_pro_after_page_content_widgets() {
	include( 'widget-areas/after-page-content.php' );
}
add_action( 'page_after', 'ct_founder_pro_after_page_content_widgets' );

// Before Main Content
function ct_founder_pro_before_main_content_widgets() {
	if ( is_home() || is_archive() ) {
		include( 'widget-areas/before-main-content.php' );
	}
}
add_action( 'main_top', 'ct_founder_pro_before_main_content_widgets' );

// After Main Content
function ct_founder_pro_after_main_content_widgets() {
	include( 'widget-areas/after-main-content.php' );
}
add_action( 'main_bottom', 'ct_founder_pro_after_main_content_widgets' );