<?php

if ( ! function_exists( 'double_dou_setup' ) ) {

	function double_dou_setup() {

		load_theme_textdomain( 'double-dou', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'custom-background', apply_filters( 'double_dou_custom_background_args', array(
				'default-color' => 'FFFFFF',
				'default-image' => '',
		) ) );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption'
		) );

		register_nav_menus( array(
			'primary' => esc_html__( 'Header Menu', 'double-dou' ),
		) );

		add_image_size( 'double-dou-home-image', 700,467, true );

	}

}
add_action( 'after_setup_theme', 'double_dou_setup' );

function double_dou_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'double_dou_content_width', 640 );
}
add_action( 'after_setup_theme', 'double_dou_content_width', 0 );

function double_dou_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Primary Sidebar', 'double-dou' ),
		'id' => 'sidebar-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-title-box"><h3 class="widget-title">',
		'after_title' => '</h3></div>',	
	) );

	register_sidebar( array(
		'name' => __( 'Single/Page Footer Left', 'double-dou' ),
		'id' => 'footer-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',	
	) );

	register_sidebar( array(
		'name' => __( 'Single/Page Footer Center', 'double-dou' ),
		'id' => 'footer-2',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',	
	) );

	register_sidebar( array(
		'name' => __( 'Single/Page Footer Right', 'double-dou' ),
		'id' => 'footer-3',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',	
	) );
}
add_action( 'widgets_init', 'double_dou_widgets_init' );

function double_dou_fonts_url() {
	$fonts_url = '';
	$fonts 	   = array();

	if ( 'off' !== _x( 'on', 'Ubuntu font: on or off', 'double-dou' )  ) {
		$fonts[] = 'Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => str_replace(array( '%3A', '%2C' ), array( ':', ',' ), urlencode( implode( '|', $fonts ) )),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}

function double_dou_enqueue_scripts() {

	wp_enqueue_style( 'double-dou-fonts', double_dou_fonts_url(), array(), null );
	wp_enqueue_style( 'double-dou-fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	
	wp_enqueue_style( 'double-dou-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'double-dou-bootstrap-theme', get_template_directory_uri() . '/css/bootstrap-theme.min.css' );
	wp_enqueue_script( 'double-dou-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );

	wp_enqueue_script( 'double-dou-html5shiv', get_template_directory_uri() . '/js/html5shiv.min.js', array(), '3.7.3' );
	wp_script_add_data( 'double-dou-html5shiv', 'conditional', 'lt IE 9' );
	wp_enqueue_script( 'double-dou-respond', get_template_directory_uri() . '/js/respond.min.js', array(), '1.4.2' );
	wp_script_add_data( 'double-dou-respond', 'conditional', 'lt IE 9' );

	wp_enqueue_style( 'double-dou-style', get_stylesheet_uri() );

	wp_enqueue_script( 'double-dou-jscroll-js', get_template_directory_uri() . '/js/jquery.jscroll.min.js', array( 'jquery' ) );

	wp_enqueue_script( 'double-dou-script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ) );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'double_dou_enqueue_scripts' );

function double_dou_get_excerpt( $length ) {
	$temp_str = substr( strip_shortcodes( strip_tags( get_the_content() ) ), 0, $length );
	$temp_parts = explode( " ", $temp_str );
	$temp_parts[ ( count( $temp_parts ) - 1 ) ] = '';

	if ( strlen( strip_tags( get_the_content() ) ) > 125 )
		return implode( " ", $temp_parts ) . '...';
	else
		return implode( " ", $temp_parts );
}


require get_template_directory() . '/inc/custom-header.php';

require get_template_directory() . '/inc/customizer.php';