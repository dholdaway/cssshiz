<?php
defined( 'ABSPATH' ) OR exit;

add_action( 'customize_register', 'ct_founder_pro_add_customizer_content', 11 );

function ct_founder_pro_add_customizer_content( $wp_customize ) {

	// if Live Previewing another theme, don't do anything

	$founder_section = $wp_customize->get_section('ct_founder_logo_upload');
	if ( empty( $founder_section ) ) {
		return;
	}

	/********** Remove Founder Pro Advertisement Sections **********/

	$wp_customize->remove_section( 'founder_header_image' );
	$wp_customize->remove_section( 'founder_colors' );
	$wp_customize->remove_section( 'founder_font' );
	$wp_customize->remove_section( 'founder_display_control' );
	$wp_customize->remove_section( 'founder_footer_text' );

	/********** Add Panels **********/

	// Add panel for colors
	if ( method_exists( 'WP_Customize_Manager', 'add_panel' ) ) {

		$wp_customize->add_panel( 'ct_founder_pro_colors_panel', array(
			'priority'    => 42,
			'title'       => __( 'Colors', 'founder-pro' ),
			'description' => __( 'Change any color on your site', 'founder-pro' )
		) );
	}

	/***** Header Image *****/

	// section
	$wp_customize->add_section( 'ct_founder_pro_header_image', array(
		'title'    => __( 'Header Image', 'founder-pro' ),
		'priority' => 40
	) );
	// setting - upload
	$wp_customize->add_setting( 'header_image_upload', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	// control - upload
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize, 'header_image_upload', array(
			'label'    => __( 'Upload an image', 'founder-pro' ),
			'section'  => 'ct_founder_pro_header_image',
			'settings' => 'header_image_upload'
		)
	) );
	// setting - homepage only
	$wp_customize->add_setting( 'header_image_homepage', array(
		'default'           => 'no',
		'sanitize_callback' => 'ct_founder_pro_sanitize_yes_no_settings'
	) );
	// control - homepage only
	$wp_customize->add_control( 'header_image_homepage', array(
		'label'    => __( 'Only display on homepage?', 'founder-pro' ),
		'section'  => 'ct_founder_pro_header_image',
		'settings' => 'header_image_homepage',
		'type'     => 'radio',
		'choices'  => array(
			'yes' => __( 'Yes', 'founder-pro' ),
			'no'  => __( 'No', 'founder-pro' )
		)
	) );
	// setting - link home
	$wp_customize->add_setting( 'header_image_link_home', array(
		'default'           => 'no',
		'sanitize_callback' => 'ct_founder_pro_sanitize_yes_no_settings'
	) );
	// control - link home
	$wp_customize->add_control( 'header_image_link_home', array(
		'label'    => __( 'Link header image to homepage?', 'founder-pro' ),
		'section'  => 'ct_founder_pro_header_image',
		'settings' => 'header_image_link_home',
		'type'     => 'radio',
		'choices'  => array(
			'yes' => __( 'Yes', 'founder-pro' ),
			'no'  => __( 'No', 'founder-pro' )
		)
	) );
	// setting - height type
	$wp_customize->add_setting( 'header_image_height_type', array(
		'default'           => 'responsive',
		'sanitize_callback' => 'ct_founder_pro_sanitize_header_image_height_type'
	) );
	// control - height type
	$wp_customize->add_control( 'header_image_height_type', array(
		'label'    => __( 'Responsive or Fixed height?', 'founder-pro' ),
		'section'  => 'ct_founder_pro_header_image',
		'settings' => 'header_image_height_type',
		'type'     => 'radio',
		'choices'  => array(
			'responsive' => __( 'Responsive', 'founder-pro' ),
			'fixed'      => __( 'Fixed', 'founder-pro' )
		)
	) );
	// setting - height
	$wp_customize->add_setting( 'header_image_height', array(
		'default'           => '20',
		'sanitize_callback' => 'absint',
		'transport'         => 'postMessage'
	) );
	// control - height
	$wp_customize->add_control( 'header_image_height', array(
		'label'       => __( 'Adjust the height', 'founder-pro' ),
		'section'     => 'ct_founder_pro_header_image',
		'settings'    => 'header_image_height',
		'type'        => 'range',
		'input_attrs' => array(
			'min'  => 5,
			'max'  => 100,
			'step' => 1
		)
	) );
	// setting - parallax
	$wp_customize->add_setting( 'header_image_parallax', array(
		'default'           => 'no',
		'sanitize_callback' => 'ct_founder_pro_sanitize_yes_no_settings'
	) );
	// control - parallax
	$wp_customize->add_control( 'header_image_parallax', array(
		'label'    => __( 'Add Parallax Effect?', 'founder-pro' ),
		'section'  => 'ct_founder_pro_header_image',
		'settings' => 'header_image_parallax',
		'type'     => 'radio',
		'choices'  => array(
			'yes' => __( 'Yes', 'founder-pro' ),
			'no'  => __( 'No', 'founder-pro' )
		)
	) );

	/***** Colors *****/

	$color_sections = ct_founder_pro_custom_colors_data();

	// set priority (in case user is < 4.0, set below widgets)
	// panel is 42
	$priority = 120;

	// sections
	foreach ( $color_sections as $section ) {

		// add section
		$wp_customize->add_section( $section['section_id'], array(
			'priority'    => $priority,
			'title'       => $section['section_title'],
			'description' => $section['description'],
			'panel'       => 'ct_founder_pro_colors_panel'
		) );

		$priority ++;

		/* Add Settings & Controls */

		$control_priority = 1;

		foreach ( $section as $setting ) {

			if ( is_array( $setting ) ) {

				$wp_customize->add_setting( $setting['setting_id'], array(
					'default'           => $setting['setting_default'],
					'sanitize_callback' => 'sanitize_hex_color'
				) );

				$wp_customize->add_control( new WP_Customize_Color_Control(
					$wp_customize, $setting['setting_id'], array(
						'label'    => $setting['control_label'],
						'section'  => $section['section_id'],
						'settings' => $setting['setting_id'],
						'priority' => $control_priority
					)
				) );

				$control_priority ++;
			}
		}
	}

	/***** Fonts *****/

	$fonts = ct_founder_pro_prepare_fonts();

	foreach ( $fonts as $font => $weights ) {
		$fonts[ $font ] = $font;
	}

	// section
	$wp_customize->add_section( 'ct_founder_pro_fonts', array(
		'title'    => __( 'Fonts', 'founder-pro' ),
		'priority' => 50
	) );
	// setting - primary font family
	$wp_customize->add_setting( 'primary_font', array(
		'default'           => 'Noto Sans',
		'sanitize_callback' => 'ct_founder_pro_sanitize_font_family'
	) );
	// control - primary font family
	$wp_customize->add_control( 'primary_font', array(
		'type'        => 'select',
		'label'       => __( 'Primary Font', 'founder-pro' ),
		'description' => __( 'Default font is Noto Sans.', 'founder-pro' ),
		'section'     => 'ct_founder_pro_fonts',
		'setting'     => 'primary_font',
		'choices'     => $fonts
	) );
	// setting - primary font weight
	$wp_customize->add_setting( 'primary_font_weight', array(
		'default'           => '400',
		'sanitize_callback' => 'ct_founder_pro_sanitize_font_weight'
	) );
	// control - primary font weight
	$wp_customize->add_control( 'primary_font_weight', array(
		'type'    => 'select',
		'label'   => __( 'Primary Font Weight', 'founder-pro' ),
		'section' => 'ct_founder_pro_fonts',
		'setting' => 'primary_font_weight',
		'choices' => array(
			'100' => __( 'Thin', 'founder-pro' ),
			'200' => __( 'Extra-light', 'founder-pro' ),
			'300' => __( 'Light', 'founder-pro' ),
			'400' => __( 'Regular', 'founder-pro' ),
			'500' => __( 'Medium', 'founder-pro' ),
			'600' => __( 'Semi-Bold', 'founder-pro' ),
			'700' => __( 'Bold', 'founder-pro' ),
			'800' => __( 'Extra-Bold', 'founder-pro' ),
			'900' => __( 'Ultra-Bold', 'founder-pro' )
		)
	) );
	// setting - heading font family
	$wp_customize->add_setting( 'heading_font', array(
		'default'           => 'Noto Sans',
		'sanitize_callback' => 'ct_founder_pro_sanitize_font_family'
	) );
	// control - heading font family
	$wp_customize->add_control( 'heading_font', array(
		'type'        => 'select',
		'label'       => __( 'Heading Font', 'founder-pro' ),
		'description' => __( 'Default font is Noto Sans.', 'founder-pro' ),
		'section'     => 'ct_founder_pro_fonts',
		'setting'     => 'heading_font',
		'choices'     => $fonts
	) );
	// setting - heading font weight
	$wp_customize->add_setting( 'heading_font_weight', array(
		'default'           => '700',
		'sanitize_callback' => 'ct_founder_pro_sanitize_font_weight'
	) );
	// control - heading font weight
	$wp_customize->add_control( 'heading_font_weight', array(
		'type'    => 'select',
		'label'   => __( 'Heading Font Weight', 'founder-pro' ),
		'section' => 'ct_founder_pro_fonts',
		'setting' => 'heading_font_weight',
		'choices' => array(
			'100' => __( 'Thin', 'founder-pro' ),
			'200' => __( 'Extra-light', 'founder-pro' ),
			'300' => __( 'Light', 'founder-pro' ),
			'400' => __( 'Regular', 'founder-pro' ),
			'500' => __( 'Medium', 'founder-pro' ),
			'600' => __( 'Semi-Bold', 'founder-pro' ),
			'700' => __( 'Bold', 'founder-pro' ),
			'800' => __( 'Extra-Bold', 'founder-pro' ),
			'900' => __( 'Ultra-Bold', 'founder-pro' )
		)
	) );

	/***** Featured Image Size *****/

	// section
	$wp_customize->add_section( 'ct_founder_pro_featured_image_size', array(
		'title'    => __( 'Featured Image Size', 'founder-pro' ),
		'priority' => 57
	) );
	// setting
	$wp_customize->add_setting( 'featured_image_size', array(
		'default'           => '2-1',
		'sanitize_callback' => 'ct_founder_pro_sanitize_featured_image_size'
	) );
	// control
	$wp_customize->add_control( 'featured_image_size', array(
		'label'       => __( 'Aspect ratio for all Featured Images', 'founder-pro' ),
		'description' => __( 'Size can be overridden in the Edit Post page.', 'founder-pro' ),
		'section'     => 'ct_founder_pro_featured_image_size',
		'settings'    => 'featured_image_size',
		'type'        => 'select',
		'choices'     => array(
			'2-1'     => '2:1',
			'1-2'     => '1:2',
			'16-9'    => '16:9',
			'9-16'    => '9:16',
			'3-2'     => '3:2',
			'2-3'     => '2:3',
			'4-3'     => '4:3',
			'3-4'     => '3:4',
			'5-4'     => '5:4',
			'4-5'     => '4:5',
			'1-1'     => '1:1',
			'natural' => __( 'Natural Dimensions', 'founder-pro' )
		)
	) );

	/***** Display Options *****/

	// section
	$wp_customize->add_section( 'ct_founder_pro_display', array(
		'title'    => __( 'Display Controls', 'founder-pro' ),
		'priority' => 60
	) );
	// setting - site title
	$wp_customize->add_setting( 'display_site_title', array(
		'default'           => 'show',
		'sanitize_callback' => 'ct_founder_pro_sanitize_show_hide'
	) );
	// control - site title
	$wp_customize->add_control( 'display_site_title', array(
		'type'    => 'radio',
		'label'   => __( 'Show site title?', 'founder-pro' ),
		'section' => 'ct_founder_pro_display',
		'setting' => 'display_site_title',
		'choices' => array(
			'show' => __( 'Show', 'founder-pro' ),
			'hide' => __( 'Hide', 'founder-pro' )
		)
	) );
	// setting - primary menu
	$wp_customize->add_setting( 'display_primary_menu', array(
		'default'           => 'show',
		'sanitize_callback' => 'ct_founder_pro_sanitize_show_hide'
	) );
	// control - primary menu
	$wp_customize->add_control( 'display_primary_menu', array(
		'type'    => 'radio',
		'label'   => __( 'Primary Menu', 'founder-pro' ),
		'section' => 'ct_founder_pro_display',
		'setting' => 'display_primary_menu',
		'choices' => array(
			'show' => __( 'Show', 'founder-pro' ),
			'hide' => __( 'Hide', 'founder-pro' )
		)
	) );
	// setting - post meta
	$wp_customize->add_setting( 'display_post_meta', array(
		'default'           => 'show',
		'sanitize_callback' => 'ct_founder_pro_sanitize_show_hide'
	) );
	// control - post meta
	$wp_customize->add_control( 'display_post_meta', array(
		'type'    => 'radio',
		'label'   => __( 'Show post date/author?', 'founder-pro' ),
		'section' => 'ct_founder_pro_display',
		'setting' => 'display_post_meta',
		'choices' => array(
			'show' => __( 'Show', 'founder-pro' ),
			'hide' => __( 'Hide', 'founder-pro' )
		)
	) );
	// setting - post title
	$wp_customize->add_setting( 'display_post_title', array(
		'default'           => 'show',
		'sanitize_callback' => 'ct_founder_pro_sanitize_show_hide'
	) );
	// control - post title
	$wp_customize->add_control( 'display_post_title', array(
		'type'    => 'radio',
		'label'   => __( 'Show post titles?', 'founder-pro' ),
		'section' => 'ct_founder_pro_display',
		'setting' => 'display_post_title',
		'choices' => array(
			'show' => __( 'Show', 'founder-pro' ),
			'hide' => __( 'Hide', 'founder-pro' )
		)
	) );
	// setting - more link
	$wp_customize->add_setting( 'display_more_link', array(
		'default'           => 'show',
		'sanitize_callback' => 'ct_founder_pro_sanitize_show_hide'
	) );
	// control - more link
	$wp_customize->add_control( 'display_more_link', array(
		'type'    => 'radio',
		'label'   => __( 'Show Continue Reading button?', 'founder-pro' ),
		'section' => 'ct_founder_pro_display',
		'setting' => 'display_more_link',
		'choices' => array(
			'show' => __( 'Show', 'founder-pro' ),
			'hide' => __( 'Hide', 'founder-pro' )
		)
	) );
	// setting - comments link
	$wp_customize->add_setting( 'display_comments_link', array(
		'default'           => 'show',
		'sanitize_callback' => 'ct_founder_pro_sanitize_show_hide'
	) );
	// control - comments link
	$wp_customize->add_control( 'display_comments_link', array(
		'type'    => 'radio',
		'label'   => __( 'Show comments link?', 'founder-pro' ),
		'section' => 'ct_founder_pro_display',
		'setting' => 'display_comments_link',
		'choices' => array(
			'show' => __( 'Show', 'founder-pro' ),
			'hide' => __( 'Hide', 'founder-pro' )
		)
	) );
	// setting - post categories
	$wp_customize->add_setting( 'display_post_categories', array(
		'default'           => 'show',
		'sanitize_callback' => 'ct_founder_pro_sanitize_show_hide'
	) );
	// control - post categories
	$wp_customize->add_control( 'display_post_categories', array(
		'type'    => 'radio',
		'label'   => __( 'Show post categories?', 'founder-pro' ),
		'section' => 'ct_founder_pro_display',
		'setting' => 'display_post_categories',
		'choices' => array(
			'show' => __( 'Show', 'founder-pro' ),
			'hide' => __( 'Hide', 'founder-pro' )
		)
	) );
	// setting - post tags
	$wp_customize->add_setting( 'display_post_tags', array(
		'default'           => 'show',
		'sanitize_callback' => 'ct_founder_pro_sanitize_show_hide'
	) );
	// control - post tags
	$wp_customize->add_control( 'display_post_tags', array(
		'type'    => 'radio',
		'label'   => __( 'Show post tags?', 'founder-pro' ),
		'section' => 'ct_founder_pro_display',
		'setting' => 'display_post_tags',
		'choices' => array(
			'show' => __( 'Show', 'founder-pro' ),
			'hide' => __( 'Hide', 'founder-pro' )
		)
	) );
	// setting - post nav
	$wp_customize->add_setting( 'display_post_nav', array(
		'default'           => 'show',
		'sanitize_callback' => 'ct_founder_pro_sanitize_show_hide'
	) );
	// control - post nav
	$wp_customize->add_control( 'display_post_nav', array(
		'type'    => 'radio',
		'label'   => __( 'Show previous/next post links?', 'founder-pro' ),
		'section' => 'ct_founder_pro_display',
		'setting' => 'display_post_nav',
		'choices' => array(
			'show' => __( 'Show', 'founder-pro' ),
			'hide' => __( 'Hide', 'founder-pro' )
		)
	) );
	// setting - comment count
	$wp_customize->add_setting( 'display_comment_count', array(
		'default'           => 'show',
		'sanitize_callback' => 'ct_founder_pro_sanitize_show_hide'
	) );
	// control - comment count
	$wp_customize->add_control( 'display_comment_count', array(
		'type'    => 'radio',
		'label'   => __( 'Show comment count?', 'founder-pro' ),
		'section' => 'ct_founder_pro_display',
		'setting' => 'display_comment_count',
		'choices' => array(
			'show' => __( 'Show', 'founder-pro' ),
			'hide' => __( 'Hide', 'founder-pro' )
		)
	) );

	/***** Footer Text *****/

	// section
	$wp_customize->add_section( 'ct_founder_pro_footer_text', array(
		'title'    => __( 'Footer Text', 'founder-pro' ),
		'priority' => 63
	) );
	// setting
	$wp_customize->add_setting( 'footer_text', array(
		'sanitize_callback' => 'wp_kses_post',
		'transport'         => 'postMessage'
	) );
	// control
	$wp_customize->add_control( 'footer_text', array(
		'label'    => __( 'Edit the text in your footer', 'founder-pro' ),
		'section'  => 'ct_founder_pro_footer_text',
		'settings' => 'footer_text',
		'type'     => 'textarea'
	) );
}

function ct_founder_pro_sanitize_font_family( $input ) {

	$fonts = ct_founder_pro_prepare_fonts();

	foreach ( $fonts as $font => $weights ) {
		$fonts[ $font ] = $font;
	}

	return array_key_exists( $input, $fonts ) ? $input : '';
}

function ct_founder_pro_sanitize_font_weight( $input ) {

	$valid = array(
		'100' => __( 'Thin', 'founder-pro' ),
		'200' => __( 'Extra-light', 'founder-pro' ),
		'300' => __( 'Light', 'founder-pro' ),
		'400' => __( 'Regular', 'founder-pro' ),
		'500' => __( 'Medium', 'founder-pro' ),
		'600' => __( 'Semi-Bold', 'founder-pro' ),
		'700' => __( 'Bold', 'founder-pro' ),
		'800' => __( 'Extra-Bold', 'founder-pro' ),
		'900' => __( 'Ultra-Bold', 'founder-pro' )
	);

	return array_key_exists( $input, $valid ) ? $input : '';
}

// sanitize yes/no settings
function ct_founder_pro_sanitize_yes_no_settings( $input ) {

	$valid = array(
		'yes' => __( 'Yes', 'founder-pro' ),
		'no'  => __( 'No', 'founder-pro' )
	);

	return array_key_exists( $input, $valid ) ? $input : '';
}

function ct_founder_pro_sanitize_header_image_height_type( $input ) {

	$valid = array(
		'responsive' => __( 'Responsive', 'founder-pro' ),
		'fixed'      => __( 'Fixed', 'founder-pro' )
	);

	return array_key_exists( $input, $valid ) ? $input : '';
}

function ct_founder_pro_sanitize_featured_image_size( $input ) {

	$valid = array(
		'2-1'     => '2:1',
		'1-2'     => '1:2',
		'16-9'    => '16:9',
		'9-16'    => '9:16',
		'3-2'     => '3:2',
		'2-3'     => '2:3',
		'4-3'     => '4:3',
		'3-4'     => '3:4',
		'5-4'     => '5:4',
		'4-5'     => '4:5',
		'1-1'     => '1:1',
		'natural' => __( 'Natural Dimensions', 'founder-pro' )
	);

	return array_key_exists( $input, $valid ) ? $input : '';
}

function ct_founder_pro_sanitize_show_hide( $input ) {

	$valid = array(
		'show' => __( 'Show', 'founder-pro' ),
		'hide' => __( 'Hide', 'founder-pro' )
	);

	return array_key_exists( $input, $valid ) ? $input : '';
}

function ct_founder_pro_remove_customizer_ad( $content ) {
	return '';
}
add_filter( 'ct_founder_customizer_ad', 'ct_founder_pro_remove_customizer_ad' );