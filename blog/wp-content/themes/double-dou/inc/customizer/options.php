<?php



/**
 *
 * Options file
 *
 */



// User access level

$capability = 'edit_theme_options';

/**
 *
 * Set Options for Customizer
 *
 */

$options = array();

/*--------------------------------------------------------------
    Panels (Optional - Since it's only available at WP 4.0+)
--------------------------------------------------------------*/



$options[] = array(

		'title'				=> __( 'Theme Options', 'double-dou' ),

		'description'		=> '',

		'id'				=> 'theme_options',

		'priority'			=> 10,

		'theme_supports'	=> '',

		'type'				=> 'panel'

	);





/*--------------------------------------------------------------

    Sections

--------------------------------------------------------------*/



$options[] = array(
		'title'				=> __( 'General', 'double-dou' ),
		'id'				=> 'general',
		'priority'			=> 10,
		'theme_supports'	=> '',
		'type'				=> 'section'
);

$options[] = array(
		'title'				=> __( 'Social Links', 'double-dou' ),
		'id'				=> 'social_links',
		'priority'			=> 10,
		'theme_supports'	=> '',
		'type'				=> 'section'
);

$options[] = array(
		'title'				=> __( 'User Profile', 'double-dou' ),
		'id'				=> 'user_profile',
		'priority'			=> 10,
		'theme_supports'	=> '',
		'type'				=> 'section'
);
/*--------------------------------------------------------------

    Settings & Controls

--------------------------------------------------------------*/
$temp_uri = get_template_directory_uri();

$options[] = array(
	'title'				=> __( 'Ground Section Background Color', 'double-dou' ),
	'description'		=> '',
	'section'			=> 'colors',
	'id'				=> 'background_color',
	'default'			=> '#FFF',
	'option'			=> 'color',
	'sanitize_callback'	=> 'sanitize_hex_color',
	'type'				=> 'control'
);

$options[] = array(
	'title'				=> __( 'Top Section Background Image', 'double-dou' ),
	'description'		=> '',
	'section'			=> 'background_image',
	'id'				=> 'top_bg_image',
	'default'			=> '',
	'option'			=> 'image',
	'sanitize_callback'	=> '',
	'type'				=> 'control'
);

$options[] = array(
	'title'				=> __( 'Top/Content Section Background Color', 'double-dou' ),
	'description'		=> '',
	'section'			=> 'colors',
	'id'				=> 'top_color',
	'default'			=> '#FFF',
	'option'			=> 'color',
	'sanitize_callback'	=> 'sanitize_hex_color',
	'type'				=> 'control'
);

$options[] = array(
	'title'				=> __( 'Post Header/Title Color', 'double-dou' ),
	'description'		=> '',
	'section'			=> 'colors',
	'id'				=> 'pht_color',
	'default'			=> '#337ab7',
	'option'			=> 'color',
	'sanitize_callback'	=> 'sanitize_hex_color',
	'type'				=> 'control'
);

$options[] = array(
	'title'				=> __( 'Facebook', 'double-dou' ),
	'description'		=> '',
	'section'			=> 'social_links',
	'id'				=> 'social_fb',
	'default'			=> 'http://facebook.com/',
	'option'			=> 'text',
	'sanitize_callback'	=> 'esc_url',
	'type'				=> 'control'
);

$options[] = array(
	'title'				=> __( 'Twitter', 'double-dou' ),
	'description'		=> '',
	'section'			=> 'social_links',
	'id'				=> 'social_tw',
	'default'			=> 'http://twitter.com/',
	'option'			=> 'text',
	'sanitize_callback'	=> 'esc_url',
	'type'				=> 'control'
);

$options[] = array(
	'title'				=> __( 'Google Plus', 'double-dou' ),
	'description'		=> '',
	'section'			=> 'social_links',
	'id'				=> 'social_gp',
	'default'			=> 'http://google.com/',
	'option'			=> 'text',
	'sanitize_callback'	=> 'esc_url',
	'type'				=> 'control'
);

$options[] = array(
	'title'				=> __( 'Instagram', 'double-dou' ),
	'description'		=> '',
	'section'			=> 'social_links',
	'id'				=> 'social_inst',
	'default'			=> 'http://instagram/',
	'option'			=> 'text',
	'sanitize_callback'	=> 'esc_url',
	'type'				=> 'control'
);

$options[] = array(
	'title'				=> __( 'Pinterest', 'double-dou' ),
	'description'		=> '',
	'section'			=> 'social_links',
	'id'				=> 'social_pint',
	'default'			=> 'http://pinterest/',
	'option'			=> 'text',
	'sanitize_callback'	=> 'esc_url',
	'type'				=> 'control'
);

$options[] = array(
	'title'				=> __( 'RSS', 'double-dou' ),
	'description'		=> '',
	'section'			=> 'social_links',
	'id'				=> 'rss_link',
	'default'			=> '#rss',
	'option'			=> 'text',
	'sanitize_callback'	=> 'esc_url',
	'type'				=> 'control'
);

$options[] = array(
	'title'				=> __( "Owner's Photo", 'double-dou' ),
	'description'		=> '',
	'section'			=> 'user_profile',
	'id'				=> 'owners_pp',
	'default'			=> $temp_uri . '/img/owner.jpg',
	'option'			=> 'image',
	'sanitize_callback'	=> 'esc_url',
	'type'				=> 'control'
);

$options[] = array(
	'title'				=> __( "Owner's Name", 'double-dou' ),
	'description'		=> '',
	'section'			=> 'user_profile',
	'id'				=> 'owners_name',
	'default'			=> 'John Doe',
	'option'			=> 'text',
	'sanitize_callback'	=> 'sanitize_text_field',
	'type'				=> 'control'
);

$options[] = array(
	'title'				=> __( "Owner's Name", 'double-dou' ),
	'description'		=> '',
	'section'			=> 'user_profile',
	'id'				=> 'owners_bio',
	'default'			=> 'Freelance Web Developer | Artist',
	'option'			=> 'textarea',
	'sanitize_callback'	=> 'sanitize_text_field',
	'type'				=> 'control'
);

$options[] = array(
	'title'				=> __( 'Copyright Text', 'double-dou' ),
	'description'		=> '',
	'section'			=> 'title_tagline',
	'id'				=> 'footer_creds',
	'default'			=> '',
	'option'			=> 'text',
	'sanitize_callback'	=> 'sanitize_text_field',
	'type'				=> 'control'
);