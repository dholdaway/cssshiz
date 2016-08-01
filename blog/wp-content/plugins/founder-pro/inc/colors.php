<?php
defined( 'ABSPATH' ) OR exit;

// setup array used to create customizer sections/settings/controls and output css
function ct_founder_pro_custom_colors_data() {

	$color_sections = array(
		/***** Base *****/
		array(
			'section_id'    => 'ct_founder_pro_colors_base',
			'section_title' => __( 'Base', 'founder-pro' ),
			'description'   => __( 'These colors affect elements across the entire site.', 'founder-pro' ),
			array(
				'setting_id'      => 'colors_base_main_bg',
				'setting_default' => '#ffffff',
				'control_label'   => __( 'Main Background', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_base_headings',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Headings', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_base_links',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Links', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_base_links_underline',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Links Underline', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_base_links_hover',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Links (hover)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_base_links_underline_hover',
				'setting_default' => '#e37d39',
				'control_label'   => __( 'Links Underline (hover)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_base_text',
				'setting_default' => '#666666',
				'control_label'   => __( 'Text', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_base_button_text',
				'setting_default' => '#ffffff',
				'control_label'   => __( 'Button Text', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_base_button_bg',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Button Background', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_base_button_text_hover',
				'setting_default' => '#ffffff',
				'control_label'   => __( 'Button Text (hover)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_base_button_bg_hover',
				'setting_default' => '#4d4d4d',
				'control_label'   => __( 'Button Background (hover)', 'founder-pro' )
			)
		),
		/***** Sidebar *****/
		array(
			'section_id'    => 'ct_founder_pro_colors_sidebar',
			'section_title' => __( 'Sidebar', 'founder-pro' ),
			'description'   => __( 'These colors affect the Primary Sidebar.', 'founder-pro' ),
			array(
				'setting_id'      => 'colors_sidebar_bg',
				'setting_default' => '#ffffff',
				'control_label'   => __( 'Background', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_sidebar_border',
				'setting_default' => '#d4d4d4',
				'control_label'   => __( 'Bottom Border', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_sidebar_button_border',
				'setting_default' => '#d4d4d4',
				'control_label'   => __( 'Button Border', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_sidebar_button_background',
				'setting_default' => '#ffffff',
				'control_label'   => __( 'Button Background', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_sidebar_button_arrow',
				'setting_default' => '#a1a1a1',
				'control_label'   => __( 'Button Arrow', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_sidebar_button_border_hover',
				'setting_default' => '#e37d39',
				'control_label'   => __( 'Button Border (hover)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_sidebar_button_background_hover',
				'setting_default' => '#ffffff',
				'control_label'   => __( 'Button Background (hover)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_sidebar_button_arrow_hover',
				'setting_default' => '#e37d39',
				'control_label'   => __( 'Button Arrow (hover)', 'founder-pro' )
			)
		),
		/***** Widgets *****/
		array(
			'section_id'    => 'ct_founder_pro_colors_widgets',
			'section_title' => __( 'Widgets', 'founder-pro' ),
			'description'   => __( 'These colors affect the Widgets.', 'founder-pro' ),
			array(
				'setting_id'      => 'colors_widgets_title',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Title', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_widgets_text',
				'setting_default' => '#666666',
				'control_label'   => __( 'Text', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_widgets_links',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Links', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_widgets_links_underline',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Links Underline', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_widgets_links_hover',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Links (hover)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_widgets_links_underline_hover',
				'setting_default' => '#e37d39',
				'control_label'   => __( 'Links Underline (hover)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_widgets_button_text',
				'setting_default' => '#ffffff',
				'control_label'   => __( 'Button Text', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_widgets_button_bg',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Button Background', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_widgets_button_text_hover',
				'setting_default' => '#ffffff',
				'control_label'   => __( 'Button Text (hover)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_widgets_button_bg_hover',
				'setting_default' => '#4d4d4d',
				'control_label'   => __( 'Button Background (hover)', 'founder-pro' )
			)
		),
		/***** Primary Menu *****/
		array(
			'section_id'    => 'ct_founder_pro_colors_primary_menu',
			'section_title' => __( 'Primary Menu', 'founder-pro' ),
			'description'   => __( 'These colors affect menu items in the Primary Menu.', 'founder-pro' ),
			array(
				'setting_id'      => 'colors_primary_menu_links',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Links', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_primary_menu_links_underline_hover',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Links Underline (hover)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_primary_menu_submenu_bg',
				'setting_default' => '#ffffff',
				'control_label'   => __( 'Sub-menu Background', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_primary_menu_submenu_border',
				'setting_default' => '#d4d4d4',
				'control_label'   => __( 'Sub-menu Border', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_primary_menu_links_underline_current',
				'setting_default' => '#e37d39',
				'control_label'   => __( 'Current Page Underline', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_primary_menu_button',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Mobile Menu Button', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_primary_menu_button_open',
				'setting_default' => '#e37d39',
				'control_label'   => __( 'Mobile Menu Button (open)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_primary_menu_submenu_button_border',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Mobile Sub-menu Button Border', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_primary_menu_submenu_button_arrow',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Mobile Sub-menu Button Arrow', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_primary_menu_submenu_button_border_open',
				'setting_default' => '#e37d39',
				'control_label'   => __( 'Mobile Sub-menu Button Border (open)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_primary_menu_submenu_button_arrow_open',
				'setting_default' => '#e37d39',
				'control_label'   => __( 'Mobile Sub-menu Button Arrow (open)', 'founder-pro' )
			)
		),
		/***** Secondary Menu *****/
		array(
			'section_id'    => 'ct_founder_pro_colors_secondary_menu',
			'section_title' => __( 'Secondary Menu', 'founder-pro' ),
			'description'   => __( 'These colors affect elements in the Secondary Menu.', 'founder-pro' ),
			array(
				'setting_id'      => 'colors_secondary_menu_bg',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Background', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_secondary_menu_links',
				'setting_default' => '#ffffff',
				'control_label'   => __( 'Links', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_secondary_menu_links_hover',
				'setting_default' => '#ffffff',
				'control_label'   => __( 'Links (hover)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_secondary_menu_links_underline_hover',
				'setting_default' => '#ffffff',
				'control_label'   => __( 'Links Underline (hover)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_secondary_menu_submenu_bg',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Sub-menu Background', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_secondary_menu_links_underline_current',
				'setting_default' => '#e37d39',
				'control_label'   => __( 'Current Page Underline', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_secondary_menu_mobile_button',
				'setting_default' => '#ffffff',
				'control_label'   => __( 'Mobile Menu Button', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_secondary_menu_mobile_button_open',
				'setting_default' => '#e37d39',
				'control_label'   => __( 'Mobile Menu Button (open)', 'founder-pro' )
			),
		),
		/***** Footer Menu *****/
		array(
			'section_id'    => 'ct_founder_pro_colors_footer_menu',
			'section_title' => __( 'Footer Menu', 'founder-pro' ),
			'description'   => __( 'These colors affect elements in the Footer Menu.', 'founder-pro' ),
			array(
				'setting_id'      => 'colors_footer_menu_links',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Links', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_footer_menu_links_underline',
				'setting_default' => '#d4d4d4',
				'control_label'   => __( 'Links Underline', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_footer_menu_links_hover',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Links (hover)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_footer_menu_links_underline_hover',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Links Underline (hover)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_footer_menu_submenu_bg',
				'setting_default' => '#ffffff',
				'control_label'   => __( 'Sub-menu Background', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_footer_menu_submenu_border',
				'setting_default' => '#d4d4d4',
				'control_label'   => __( 'Sub-menu Border', 'founder-pro' )
			),
		),
		/***** Header *****/
		array(
			'section_id'    => 'ct_founder_pro_colors_header',
			'section_title' => __( 'Header', 'founder-pro' ),
			'description'   => __( 'These colors affect elements in the Header.', 'founder-pro' ),
			array(
				'setting_id'      => 'colors_header_bg',
				'setting_default' => '#ffffff',
				'control_label'   => __( 'Background', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_header_border',
				'setting_default' => '#d4d4d4',
				'control_label'   => __( 'Bottom Border', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_header_site_title',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Site Title', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_header_site_title_hover',
				'setting_default' => '#666666',
				'control_label'   => __( 'Site Title (hover)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_header_tagline',
				'setting_default' => '#666666',
				'control_label'   => __( 'Tagline', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_header_social_icons',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Social Media Icons', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_header_social_icons_hover',
				'setting_default' => '#e37d39',
				'control_label'   => __( 'Social Media Icons (hover)', 'founder-pro' )
			)
		),
		/***** Posts/Pages *****/
		array(
			'section_id'    => 'ct_founder_pro_colors_posts_pages',
			'section_title' => __( 'Posts/Pages', 'founder-pro' ),
			'description'   => __( 'These colors affect elements in Posts and Pages.', 'founder-pro' ),
			array(
				'setting_id'      => 'colors_posts_pages_title',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Title', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_posts_pages_title_underline',
				'setting_default' => '#d4d4d4',
				'control_label'   => __( 'Title Underline (blog only)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_posts_pages_title_underline_hover',
				'setting_default' => '#e37d39',
				'control_label'   => __( 'Title Underline (hover - blog only)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_posts_pages_title_overlay',
				'setting_default' => '#ffffff',
				'control_label'   => __( 'Title (Title Overlay Template)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_posts_pages_title_overlay_bg',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Title Background (Title Overlay Template)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_posts_pages_meta',
				'setting_default' => '#666666',
				'control_label'   => __( 'Post Meta (author/date)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_posts_pages_meta_overlay',
				'setting_default' => '#666666',
				'control_label'   => __( 'Post Meta (Title Overlay Template)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_posts_pages_text',
				'setting_default' => '#666666',
				'control_label'   => __( 'Text', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_posts_pages_links',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Links', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_posts_pages_links_underline',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Links Underline', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_posts_pages_links_hover',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Links (hover)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_posts_pages_links_underline_hover',
				'setting_default' => '#e37d39',
				'control_label'   => __( 'Links Underline (hover)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_posts_pages_tags',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Tag Text', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_posts_pages_tags_bg',
				'setting_default' => '#f7f7f7',
				'control_label'   => __( 'Tag Background', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_posts_pages_tags_border',
				'setting_default' => '#ededed',
				'control_label'   => __( 'Tag Border', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_posts_pages_tags_hover',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Tag Text (hover)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_posts_pages_tags_bg_hover',
				'setting_default' => '#ededed',
				'control_label'   => __( 'Tag Background (hover)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_posts_pages_tags_border_hover',
				'setting_default' => '#d4d4d4',
				'control_label'   => __( 'Tag Border (hover)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_posts_pages_post_nav_border',
				'setting_default' => '#d4d4d4',
				'control_label'   => __( 'Prev/Next Post Borders', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_posts_pages_post_nav_text',
				'setting_default' => '#666666',
				'control_label'   => __( 'Prev/Next Post Text', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_posts_pages_post_nav_links',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Prev/Next Post Links', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_posts_pages_post_nav_links_underline',
				'setting_default' => '#d4d4d4',
				'control_label'   => __( 'Prev/Next Post Underline', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_posts_pages_post_nav_links_underline_hover',
				'setting_default' => '#e37d39',
				'control_label'   => __( 'Prev/Next Post Underline (hover)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_posts_pages_blockquote_border',
				'setting_default' => '#d37d39',
				'control_label'   => __( 'Blockquote Border', 'founder-pro' )
			)
		),
		/***** Archives *****/
		array(
			'section_id'    => 'ct_founder_pro_colors_archives',
			'section_title' => __( 'Blog/Archives', 'founder-pro' ),
			'description'   => __( 'These colors affect elements only on the Blog/Archive pages.', 'founder-pro' ),
			array(
				'setting_id'      => 'colors_archives_more_link',
				'setting_default' => '#ffffff',
				'control_label'   => __( 'Continue Reading Button Text', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_archives_more_link_bg',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Continue Reading Button Background', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_archives_more_link_hover',
				'setting_default' => '#ffffff',
				'control_label'   => __( 'Continue Reading Button Text (hover)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_archives_more_link_bg_hover',
				'setting_default' => '#4d4d4d',
				'control_label'   => __( 'Continue Reading Button Background (hover)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_archives_comments_link',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Comments Link', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_archives_comments_link_underline_hover',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Comments Link Underline (hover)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_archives_sticky',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Sticky Post Status Text', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_archives_sticky_bg',
				'setting_default' => '#ededed',
				'control_label'   => __( 'Sticky Post Status Background', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_archives_header',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Archive Header Text', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_archives_loop_links',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Pagination Links', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_archives_loop_links_underline',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Pagination Links Underline', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_archives_loop_links_hover',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Pagination Links (hover)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_archives_loop_links_underline_hover',
				'setting_default' => '#e37d39',
				'control_label'   => __( 'Pagination Links Underline (hover)', 'founder-pro' )
			),
		),
		/***** Comments *****/
		array(
			'section_id'    => 'ct_founder_pro_colors_comments',
			'section_title' => __( 'Comments', 'founder-pro' ),
			'description'   => __( 'These colors affect comments on Posts, Pages, and Attachments.', 'founder-pro' ),
			array(
				'setting_id'      => 'colors_comments_text',
				'setting_default' => '#666666',
				'control_label'   => __( 'Text', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_comments_links',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Links', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_comments_links_underline',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Links Underline', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_comments_links_hover',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Links (hover)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_comments_links_underline_hover',
				'setting_default' => '#e37d39',
				'control_label'   => __( 'Links Underline (hover)', 'founder-pro' )
			)
		),
		/***** Comment Form *****/
		array(
			'section_id'    => 'ct_founder_pro_colors_comment_form',
			'section_title' => __( 'Comment Form', 'founder-pro' ),
			'description'   => __( 'These colors affect the comment form following the comments.', 'founder-pro' ),
			array(
				'setting_id'      => 'colors_comment_form_input_bg',
				'setting_default' => '#ededed',
				'control_label'   => __( 'Input Background', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_comment_form_input_bg_focus',
				'setting_default' => '#ffffff',
				'control_label'   => __( 'Input Background (focus)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_comment_form_input_border',
				'setting_default' => '#d4d4d4',
				'control_label'   => __( 'Input Border', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_comment_form_input_text',
				'setting_default' => '#666666',
				'control_label'   => __( 'Input Text', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_comment_form_submit_text',
				'setting_default' => '#ffffff',
				'control_label'   => __( 'Submit Button Text', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_comment_form_submit_bg',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Submit Button Background', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_comment_form_submit_text_hover',
				'setting_default' => '#ffffff',
				'control_label'   => __( 'Submit Button Text (hover)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_comment_form_submit_bg_hover',
				'setting_default' => '#4d4d4d',
				'control_label'   => __( 'Submit Button Background (hover)', 'founder-pro' )
			)
		),
		/***** Footer *****/
		array(
			'section_id'    => 'ct_founder_pro_colors_footer',
			'section_title' => __( 'Footer', 'founder-pro' ),
			'description'   => __( 'These colors affect the elements in the Footer.', 'founder-pro' ),
			array(
				'setting_id'      => 'colors_footer_bg',
				'setting_default' => '#ffffff',
				'control_label'   => __( 'Background', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_footer_text',
				'setting_default' => '#666666',
				'control_label'   => __( 'Text', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_footer_links',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Links', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_footer_links_underline',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Links Underline', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_footer_links_hover',
				'setting_default' => '#1a1a1a',
				'control_label'   => __( 'Links (hover)', 'founder-pro' )
			),
			array(
				'setting_id'      => 'colors_footer_links_underline_hover',
				'setting_default' => '#e37d39',
				'control_label'   => __( 'Links Underline (hover)', 'founder-pro' )
			)
		)
	);

	return apply_filters( 'ct_founder_pro_filter_color_data', $color_sections );

}

// filter the custom color data, so it can be updated based on the child theme active
function ct_founder_pro_filter_custom_colors_css( $color_sections ) {

	// if Unit child theme is active
	if ( wp_get_theme() == 'Unit' ) {

		// for each section
		foreach ( $color_sections as $key1 => &$section ) {

			/* Add Settings */

			// add new settings to footer section
			if ( $section['section_id'] == 'ct_founder_pro_colors_footer' ) {

				// setting for footer border
				$footer_border = array(
					'setting_id'      => 'colors_footer_border',
					'setting_default' => '#e0e0e0',
					'control_label'   => __( 'Border', 'founder-pro' )
				);

				// add to current section array
				$color_sections[ $key1 ][] = $footer_border;
			} // add new settings to archives section
			elseif ( $section['section_id'] == 'ct_founder_pro_colors_archives' ) {

				// pagination link bg :hover
				$pagination_bg_hover = array(
					'setting_id'      => 'colors_archives_loop_links_bg_hover',
					'setting_default' => '#f7f7f7',
					'control_label'   => __( 'Pagination Links Background (hover)', 'founder-pro' )
				);
				// pagination link border :hover
				$pagination_border_hover = array(
					'setting_id'      => 'colors_archives_loop_links_border_hover',
					'setting_default' => '#ededed',
					'control_label'   => __( 'Pagination Links Border (hover)', 'founder-pro' )
				);
				// pagination bg
				$pagination_bg = array(
					'setting_id'      => 'colors_archives_loop_bg',
					'setting_default' => '#ffffff',
					'control_label'   => __( 'Pagination Background', 'founder-pro' )
				);
				// pagination border
				$pagination_border = array(
					'setting_id'      => 'colors_archives_loop_border',
					'setting_default' => '#e0e0e0',
					'control_label'   => __( 'Pagination Border', 'founder-pro' )
				);
				// archive header bg
				$archive_header_bg = array(
					'setting_id'      => 'colors_archives_header_bg',
					'setting_default' => '#ffffff',
					'control_label'   => __( 'Archive Header Background', 'founder-pro' )
				);
				// archive header border
				$archive_header_border = array(
					'setting_id'      => 'colors_archives_header_border',
					'setting_default' => '#e0e0e0',
					'control_label'   => __( 'Archive Header Border', 'founder-pro' )
				);

				// add new settings to end of section array
				$color_sections[ $key1 ][] = $pagination_bg_hover;
				$color_sections[ $key1 ][] = $pagination_border_hover;
				$color_sections[ $key1 ][] = $pagination_bg;
				$color_sections[ $key1 ][] = $pagination_border;

				// insert new "archive header" settings after original for text color
				array_splice( $color_sections[ $key1 ], 12, 0, array( $archive_header_bg ) );
				array_splice( $color_sections[ $key1 ], 13, 0, array( $archive_header_border ) );
			} // add new settings to Post section
			elseif ( $section['section_id'] == 'ct_founder_pro_colors_posts_pages' ) {

				// post bg
				$entry_bg = array(
					'setting_id'      => 'colors_posts_pages_bg',
					'setting_default' => '#ffffff',
					'control_label'   => __( 'Background', 'founder-pro' )
				);
				// post border
				$entry_border = array(
					'setting_id'      => 'colors_posts_pages_border',
					'setting_default' => '#e0e0e0',
					'control_label'   => __( 'Border', 'founder-pro' )
				);

				// add new settings to beginning of section array
				array_unshift( $color_sections[ $key1 ], $entry_border );
				array_unshift( $color_sections[ $key1 ], $entry_bg );
			}

			/* Change Existing Color Default values */

			// for each setting
			foreach ( $section as $key2 => &$setting ) {

				// error checking
				if ( is_array( $setting ) ) {

					// main bg
					if ( $setting['setting_id'] == 'colors_base_main_bg' ) {
						$setting['setting_default'] = '#ededed';
					}
					// header bottom border
					if ( $setting['setting_id'] == 'colors_header_border' ) {
						$setting['setting_default'] = '#e0e0e0';
					} // sidebar button border
					elseif ( $setting['setting_id'] == 'colors_sidebar_button_border' ) {
						$setting['setting_default'] = '#e0e0e0';
					} // sidebar button border :hover
					elseif ( $setting['setting_id'] == 'colors_sidebar_button_border_hover' ) {
						$setting['setting_default'] = '#e0e0e0';
					} // sidebar border bottom (when opened)
					elseif ( $setting['setting_id'] == 'colors_sidebar_border' ) {
						$setting['setting_default'] = '#e0e0e0';
					} // further reading borders
					elseif ( $setting['setting_id'] == 'colors_posts_pages_post_nav_border' ) {
						$setting['setting_default'] = '#e0e0e0';
					}

					/* Remove Settings */

					// pagination links underline
					elseif ( $setting['setting_id'] == 'colors_archives_loop_links_underline' ) {
						unset( $color_sections[ $key1 ][ $key2 ] );
					} // pagination links underline :hover
					elseif ( $setting['setting_id'] == 'colors_archives_loop_links_underline_hover' ) {
						unset( $color_sections[ $key1 ][ $key2 ] );
					}
				}
			}
		}
	}

	return $color_sections;
}

add_filter( 'ct_founder_pro_filter_color_data', 'ct_founder_pro_filter_custom_colors_css' );

// output the css
function ct_founder_pro_custom_colors_css() {

	// get the data
	$color_sections = ct_founder_pro_custom_colors_data();

	// set array
	$custom_css = '';

	// for each section
	foreach ( $color_sections as $section ) {

		// for each setting
		foreach ( $section as $setting ) {

			// error checking
			if ( is_array( $setting ) ) {

				// get the color value
				$value = get_theme_mod( $setting['setting_id'] );

				// if not empty and not equal to default value
				if ( $value && $value !== $setting['setting_default'] ) {

					/***** Base *****/
					if ( $setting['setting_id'] == 'colors_base_main_bg' ) {
						$custom_css .= "#overflow-container {background: $value;}";
						// underline under parent menu item + to cover up <a> underline
						$custom_css .= ".menu-primary-items > li.menu-item-has-children>a:after,
										.menu-unset ul > li.menu-item-has-children>a:after {border-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_base_headings' ) {
						$custom_css .= "h1,
										h2,
										h3,
										h4,
										h5,
										h6 {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_base_links' ) {
						$custom_css .= "a,
										a:link,
										a:visited {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_base_links_underline' ) {
						$custom_css .= "a,
										a:link,
										a:visited {border-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_base_links_hover' ) {
						$custom_css .= "a:hover,
						                a:active,
										a:focus {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_base_links_underline_hover' ) {
						$custom_css .= "a:hover,
						                a:active,
										a:focus {border-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_base_text' ) {
						$custom_css .= "body {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_base_button_text' ) {
						$custom_css .= "input[type='submit'] {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_base_button_bg' ) {
						$custom_css .= "input[type='submit'] {background: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_base_button_text_hover' ) {
						$custom_css .= "input[type='submit']:hover,
						                input[type='submit']:active,
						                input[type='submit']:focus {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_base_button_bg_hover' ) {
						$custom_css .= "input[type='submit']:hover,
						                input[type='submit']:active,
						                input[type='submit']:focus {background: $value;}";
					} /***** Sidebar *****/
					elseif ( $setting['setting_id'] == 'colors_sidebar_bg' ) {
						$custom_css .= ".sidebar-primary,
						                .sidebar-primary:before {background: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_sidebar_border' ) {
						$custom_css .= ".sidebar-primary.open {border-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_sidebar_button_border' ) {
						$custom_css .= ".toggle-sidebar {border-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_sidebar_button_background' ) {
						$custom_css .= ".toggle-sidebar {background: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_sidebar_button_arrow' ) {
						$custom_css .= ".toggle-sidebar i {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_sidebar_button_border_hover' ) {
						$custom_css .= ".toggle-sidebar:hover,
						                .toggle-sidebar:active,
						                .toggle-sidebar:focus,
										.sidebar-primary.open .toggle-sidebar {border-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_sidebar_button_background_hover' ) {
						$custom_css .= ".toggle-sidebar:hover,
						                .toggle-sidebar:active,
						                .toggle-sidebar:focus,
										.sidebar-primary.open .toggle-sidebar {background: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_sidebar_button_arrow_hover' ) {
						$custom_css .= ".toggle-sidebar:hover i,
						                .toggle-sidebar:active i,
						                .toggle-sidebar:focus i,
										.sidebar-primary.open .toggle-sidebar i {color: $value;}";
					} /***** Widgets *****/
					elseif ( $setting['setting_id'] == 'colors_widgets_title' ) {
						$custom_css .= ".widget-title {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_widgets_text' ) {
						$custom_css .= ".widget {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_widgets_links' ) {
						$custom_css .= ".widget a,
						                .widget a:link,
						                .widget a:visited {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_widgets_links_underline' ) {
						$custom_css .= ".widget a,
						                .widget a:link,
						                .widget a:visited,
						                .widget ul a,
						                .widget ul a:link,
						                .widget ul a:visited {border-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_widgets_links_hover' ) {
						$custom_css .= ".widget a:hover,
						                .widget a:active,
										.widget a:focus {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_widgets_links_underline_hover' ) {
						$custom_css .= ".widget a:hover,
						                .widget a:active,
										.widget a:focus,
										.widget ul a:hover,
						                .widget ul a:active,
										.widget ul a:focus {border-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_widgets_button_text' ) {
						$custom_css .= ".widget input[type='submit'] {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_widgets_button_bg' ) {
						$custom_css .= ".widget input[type='submit'] {background: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_widgets_button_text_hover' ) {
						$custom_css .= ".widget input[type='submit']:hover,
						                .widget input[type='submit']:active,
						                .widget input[type='submit']:focus {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_widgets_button_bg_hover' ) {
						$custom_css .= ".widget input[type='submit']:hover,
						                .widget input[type='submit']:active,
						                .widget input[type='submit']:focus {background: $value;}";
					} /***** Primary Menu *****/
					elseif ( $setting['setting_id'] == 'colors_primary_menu_links' ) {
						$custom_css .= ".menu-primary-items a,
										.menu-unset ul a,
						                .menu-primary-items a:link,
						                .menu-unset ul a:link,
						                 .menu-primary-items a:visited,
						                .menu-unset ul a:visited {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_primary_menu_links_underline_hover' ) {
						$custom_css .= ".menu-primary-items a:hover,
										.menu-primary-items a:active,
										.menu-primary-items a:focus,
										.menu-unset ul a:hover,
										.menu-unset ul a:active,
										.menu-unset ul a:focus {border-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_primary_menu_submenu_bg' ) {
						// needs media query b/c unlike CSS below this will mess up the mobile bg
						$custom_css .= "@media all and (min-width: 56.25em) {.menu-primary-items ul {background: $value;}}";
						// tier 2 top-side caret
						$custom_css .= ".menu-primary-items ul:after {border-bottom-color: $value;}";
						// parent menu item + underline
						$custom_css .= ".menu-primary-items ul li.menu-item-has-children > a:after {border-bottom-color: $value;}";
						// tier 3 left-side caret
						$custom_css .= ".menu-primary-items ul li.menu-item-has-children ul:after {border-right-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_primary_menu_submenu_border' ) {
						$custom_css .= ".menu-primary-items ul {border-color: $value;}";
						// tier 2 top-side caret
						$custom_css .= ".menu-primary-items ul:before {border-bottom-color: $value;}";
						// tier 3 left-side caret
						$custom_css .= ".menu-primary-items ul li.menu-item-has-children ul:before {border-right-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_primary_menu_links_underline_current' ) {
						$custom_css .= ".menu-primary-items li.current-menu-item:after,
										.menu-primary-items li.current_page_item:after,
										.menu-unset ul li.current-menu-item:after,
										.menu-unset ul li.current_page_item:after {background: $value}";
						$custom_css .= ".menu-primary-items li.current-menu-item>a,
										.menu-primary-items li.current_page_item>a,
										.menu-unset ul li.current-menu-item>a,
										.menu-unset ul li.current_page_item>a {border-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_primary_menu_button' ) {
						$custom_css .= ".toggle-navigation {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_primary_menu_button_open' ) {
						$custom_css .= ".toggle-navigation.open,
										.toggle-navigation:focus {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_primary_menu_submenu_button_border' ) {
						$custom_css .= ".toggle-dropdown {border-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_primary_menu_submenu_button_arrow' ) {
						$custom_css .= ".toggle-dropdown {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_primary_menu_submenu_button_border_open' ) {
						$custom_css .= ".menu-primary-items li.open>button,
										.menu-unset ul li.open>button {border-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_primary_menu_submenu_button_arrow_open' ) {
						$custom_css .= ".menu-primary-items li.open>button,
										.menu-unset ul li.open>button {color: $value;}";
					} /***** Secondary Menu *****/
					elseif ( $setting['setting_id'] == 'colors_secondary_menu_bg' ) {
						$custom_css .= ".overflow-container .menu-secondary-container,
						                .overflow-container .menu-secondary-container:after {background: $value;}";
						$custom_css .= ".overflow-container .menu-secondary-items > li.menu-item-has-children>a:after {border-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_secondary_menu_links' ) {
						$custom_css .= ".menu-secondary .menu-secondary-items a,
										.menu-secondary .menu-secondary-items a:link,
										.menu-secondary .menu-secondary-items a:visited {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_secondary_menu_links_hover' ) {
						$custom_css .= ".menu-secondary .menu-secondary-items a:hover,
										.menu-secondary .menu-secondary-items a:active,
										.menu-secondary .menu-secondary-items a:focus {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_secondary_menu_links_underline_hover' ) {
						$custom_css .= ".menu-secondary .menu-secondary-items a:hover,
										.menu-secondary .menu-secondary-items a:active,
										.menu-secondary .menu-secondary-items a:focus {border-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_secondary_menu_submenu_bg' ) {
						$custom_css .= "@media all and (min-width: 43.75em) { .menu-secondary .menu-secondary-items ul {background: $value;} }";
						$custom_css .= "@media all and (min-width: 43.75em) { .menu-secondary .menu-secondary-items ul li.menu-item-has-children>a:after {border-color: $value;} }";
					} elseif ( $setting['setting_id'] == 'colors_secondary_menu_links_underline_current' ) {
						$custom_css .= ".menu-secondary-items li.current-menu-item>a {border-color: $value !important;}";
					} elseif ( $setting['setting_id'] == 'colors_secondary_menu_mobile_button' ) {
						$custom_css .= ".menu-secondary-container .toggle-secondary-navigation {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_secondary_menu_mobile_button_open' ) {
						$custom_css .= ".menu-secondary-container .toggle-secondary-navigation.open,
										.menu-secondary-container .toggle-secondary-navigation:focus {color: $value;}";
					} /***** Footer Menu *****/
					elseif ( $setting['setting_id'] == 'colors_footer_menu_links' ) {
						$custom_css .= ".menu-footer .menu-footer-items a,
						                .menu-footer .menu-footer-items a:link,
						                .menu-footer .menu-footer-items a:visited {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_footer_menu_links_underline' ) {
						$custom_css .= ".menu-footer .menu-footer-items a {border-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_footer_menu_links_hover' ) {
						$custom_css .= ".menu-footer .menu-footer-items a:hover,
						                .menu-footer .menu-footer-items a:active,
						                .menu-footer .menu-footer-items a:focus {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_footer_menu_links_underline_hover' ) {
						$custom_css .= ".menu-footer .menu-footer-items a:hover,
						                .menu-footer .menu-footer-items a:active,
						                .menu-footer .menu-footer-items a:focus {border-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_footer_menu_submenu_bg' ) {
						$custom_css .= "@media all and (min-width: 43.75em) { .menu-footer .menu-footer-items ul {background: $value;} }";
						// tier 2 top-side caret
						$custom_css .= ".menu-footer .menu-footer-items ul:after {border-top-color: $value;}";
						// parent menu item + underline
						$custom_css .= ".menu-footer .menu-footer-items ul li.menu-item-has-children > a:after {border-bottom-color: $value;}";
						// tier 3 left-side caret
						$custom_css .= ".menu-footer .menu-footer-items ul li.menu-item-has-children ul:after {border-right-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_footer_menu_submenu_border' ) {
						$custom_css .= ".menu-footer .menu-footer-items ul {border-color: $value;}";
					} /***** Header *****/
					elseif ( $setting['setting_id'] == 'colors_header_bg' ) {
						$custom_css .= ".site-header {background: $value;}";
						// add psuedo-elements to expand bg beyond max-width
						$custom_css .= "@media all and (min-width: 87.5em) {
							.site-header:before {
								content: '';
								position: absolute;
								top: 0;
								left: -999px;
								right: -999px;
								height: 100%;
								z-index: -1;
								background: $value;
							}
						}";
						// underline under parent menu item + to cover up <a> underline
						$custom_css .= ".menu-primary-items > li.menu-item-has-children>a:after,
										.menu-unset ul > li.menu-item-has-children>a:after {border-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_header_border' ) {
						$custom_css .= ".site-header {border-color: $value;}";
						$custom_css .= ".site-header:after {background: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_header_site_title' ) {
						$custom_css .= ".site-title a,
						                .site-title a:link,
						                .site-title a:visited {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_header_site_title_hover' ) {
						$custom_css .= ".site-title a:hover,
						                .site-title a:active,
						                .site-title a:focus {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_header_tagline' ) {
						$custom_css .= ".tagline {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_header_social_icons' ) {
						$custom_css .= ".social-media-icons a,
										.social-media-icons a:link,
										.social-media-icons a:visited {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_header_social_icons_hover' ) {
						$custom_css .= ".social-media-icons a:hover,
										.social-media-icons a:active,
										.social-media-icons a:focus {color: $value;}";
					} /***** Posts/Pages *****/

					elseif ( $setting['setting_id'] == 'colors_posts_pages_bg' ) {
						$custom_css .= ".entry {background: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_posts_pages_border' ) {
						$custom_css .= ".entry {border-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_posts_pages_title' ) {
						$custom_css .= ".post-title,
						                .post-title a,
						                .post-title a:link {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_posts_pages_title_underline' ) {
						$custom_css .= ".post-title a,
						                .post-title a:link {border-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_posts_pages_title_underline_hover' ) {
						$custom_css .= ".post-title a:hover,
						                .post-title a:active,
										.post-title a:focus {border-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_posts_pages_title_overlay' ) {
						$custom_css .= ".title-overlay-post .post-header .post-title,
						                .title-overlay-page .post-header .post-title {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_posts_pages_title_overlay_bg' ) {
						$custom_css .= ".title-overlay-post .entry .post-header:after,
						                .title-overlay-page .entry .post-header:after {background: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_posts_pages_meta' ) {
						$custom_css .= ".post-meta {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_posts_pages_meta_overlay' ) {
						$custom_css .= ".title-overlay-post .post-meta,
						                .title-overlay-page .post-meta {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_posts_pages_text' ) {
						$custom_css .= ".entry {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_posts_pages_links' ) {
						$custom_css .= ".post-content a,
						                .post-content a:link {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_posts_pages_links_underline' ) {
						$custom_css .= ".post-content a,
						                .post-content a:link {border-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_posts_pages_links_hover' ) {
						$custom_css .= ".post-content a:hover,
						                .post-content a:active,
										.post-content a:focus {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_posts_pages_links_underline_hover' ) {
						$custom_css .= ".post-content a:hover,
						                .post-content a:active,
										.post-content a:focus {border-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_posts_pages_tags' ) {
						$custom_css .= ".post-tags a,
						                .post-tags a:link {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_posts_pages_tags_bg' ) {
						$custom_css .= ".post-tags a {background: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_posts_pages_tags_border' ) {
						$custom_css .= ".post-tags a,
						                .post-tags a:link,
						                .post-tags a:visited {border-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_posts_pages_tags_hover' ) {
						$custom_css .= ".post-tags a:hover,
						                .post-tags a:active,
						                .post-tags a:focus {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_posts_pages_tags_bg_hover' ) {
						$custom_css .= ".post-tags a:hover,
						                .post-tags a:active,
						                .post-tags a:focus {background: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_posts_pages_tags_border_hover' ) {
						$custom_css .= ".post-tags a:hover,
						                .post-tags a:active,
						                .post-tags a:focus {border-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_posts_pages_post_nav_border' ) {
						$custom_css .= ".further-reading:before,
						                .further-reading:after {background: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_posts_pages_post_nav_text' ) {
						$custom_css .= ".further-reading {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_posts_pages_post_nav_links' ) {
						$custom_css .= ".further-reading a,
						                .further-reading a:link {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_posts_pages_post_nav_links_underline' ) {
						$custom_css .= ".further-reading a,
						                .further-reading a:link {border-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_posts_pages_post_nav_links_underline_hover' ) {
						$custom_css .= ".further-reading a:hover,
						                .further-reading a:active,
										.further-reading a:focus {border-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_posts_pages_blockquote_border' ) {
						$custom_css .= "blockquote {border-color: $value;}";
					} /***** Archives *****/
					elseif ( $setting['setting_id'] == 'colors_archives_more_link' ) {
						$custom_css .= ".more-link,
						                .more-link:link,
										.more-link:visited {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_archives_more_link_bg' ) {
						$custom_css .= ".more-link {background: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_archives_more_link_hover' ) {
						$custom_css .= ".entry .more-link:hover,
						                .entry .more-link:active,
						                .entry .more-link:focus {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_archives_more_link_bg_hover' ) {
						$custom_css .= ".more-link:hover,
						                .more-link:active,
						                .more-link:focus {background: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_archives_comments_link' ) {
						$custom_css .= ".post-comments a,
						                .post-comments a:link,
										.post-comments a:visited,
										.post-comments i {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_archives_comments_link_underline_hover' ) {
						$custom_css .= ".post-comments a:hover,
						                .post-comments a:active,
										.post-comments a:focus {border-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_archives_sticky' ) {
						$custom_css .= ".entry.sticky .sticky-status span {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_archives_sticky_bg' ) {
						$custom_css .= ".entry.sticky .sticky-status span {background: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_archives_header' ) {
						$custom_css .= ".archive-header h2,
						                .archive-header i {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_archives_header_bg' ) {
						$custom_css .= ".archive-header {background: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_archives_header_border' ) {
						$custom_css .= ".archive-header {border-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_archives_loop_links' ) {
						$custom_css .= ".loop-pagination a,
						                .loop-pagination a:link {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_archives_loop_links_underline' ) {
						$custom_css .= ".loop-pagination a,
						                .loop-pagination a:link {border-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_archives_loop_links_hover' ) {
						$custom_css .= ".loop-pagination a:hover,
						                .loop-pagination a:active,
										.loop-pagination a:focus {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_archives_loop_links_underline_hover' ) {
						$custom_css .= ".loop-pagination a:hover,
						                .loop-pagination a:active,
										.loop-pagination a:focus {border-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_archives_loop_links_bg_hover' ) {
						$custom_css .= ".loop-pagination a:hover,
						                .loop-pagination a:active,
										.loop-pagination a:focus {background: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_archives_loop_links_border_hover' ) {
						$custom_css .= ".loop-pagination a:hover,
						                .loop-pagination a:active,
										.loop-pagination a:focus {border-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_archives_loop_bg' ) {
						$custom_css .= ".loop-pagination {background: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_archives_loop_border' ) {
						$custom_css .= ".loop-pagination {border-color: $value;}";
					} /***** Comments *****/
					elseif ( $setting['setting_id'] == 'colors_comments_text' ) {
						$custom_css .= ".comment {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_comments_links' ) {
						$custom_css .= ".comment a,
						                .comment a:link {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_comments_links_underline' ) {
						$custom_css .= ".comment a,
						                .comment a:link {border-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_comments_links_hover' ) {
						$custom_css .= ".comment a:hover,
						                .comment a:active,
										.comment a:focus {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_comments_links_underline_hover' ) {
						$custom_css .= ".comment a:hover,
						                .comment a:active,
										.comment a:focus {border-color: $value;}";
					} /***** Comment Form *****/
					elseif ( $setting['setting_id'] == 'colors_comment_form_input_bg' ) {
						$custom_css .= ".comment-respond input:not([type=checkbox]):not([type=radio]):not([type=submit]):not([type=file]):not([type=image]),
										.comment-respond textarea {background: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_comment_form_input_bg_focus' ) {
						$custom_css .= ".comment-respond input:not([type=checkbox]):not([type=radio]):not([type=submit]):not([type=file]):not([type=image]):focus,
										.comment-respond textarea:focus {background: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_comment_form_input_border' ) {
						$custom_css .= ".comment-respond input:not([type=checkbox]):not([type=radio]):not([type=submit]):not([type=file]):not([type=image]),
										.comment-respond textarea {outline-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_comment_form_input_text' ) {
						$custom_css .= ".comment-respond input:not([type=checkbox]):not([type=radio]):not([type=submit]):not([type=file]):not([type=image]),
										.comment-respond textarea {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_comment_form_submit_text' ) {
						$custom_css .= ".comment-respond input[type='submit'] {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_comment_form_submit_bg' ) {
						$custom_css .= ".comment-respond input[type='submit'] {background: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_comment_form_submit_text_hover' ) {
						$custom_css .= ".comment-respond input[type='submit']:hover,
						                .comment-respond input[type='submit']:active,
						                .comment-respond input[type='submit']:focus {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_comment_form_submit_bg_hover' ) {
						$custom_css .= ".comment-respond input[type='submit']:hover,
						                .comment-respond input[type='submit']:active,
						                .comment-respond input[type='submit']:focus {background: $value;}";
					} /***** Footer *****/
					elseif ( $setting['setting_id'] == 'colors_footer_bg' ) {
						$custom_css .= ".site-footer {background: $value;}";
						$custom_css .= "@media all and (min-width: 87.5em) {
							.site-footer:before {
								content: '';
								position: absolute;
								top: 0;
								left: -999px;
								right: -999px;
								height: 100%;
								z-index: -1;
								background: $value;
							}
						}";
					} elseif ( $setting['setting_id'] == 'colors_footer_text' ) {
						$custom_css .= ".site-footer {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_footer_links' ) {
						$custom_css .= ".site-footer a,
										.site-footer a:link {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_footer_links_underline' ) {
						$custom_css .= ".site-footer a,
										.site-footer a:link {border-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_footer_links_hover' ) {
						$custom_css .= ".site-footer a:hover,
										.site-footer a:active,
										.site-footer a:focus {color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_footer_links_underline_hover' ) {
						$custom_css .= ".site-footer a:hover,
										.site-footer a:active,
										.site-footer a:focus {border-color: $value;}";
					} elseif ( $setting['setting_id'] == 'colors_footer_border' ) {
						$custom_css .= ".site-footer {border-color: $value;}";
						$custom_css .= ".site-footer:after {background: $value;";
					}
				}
			}
		}
	}

	$custom_css = ct_founder_pro_sanitize_css( $custom_css );

	wp_add_inline_style( 'ct-founder-style-rtl', $custom_css );
	wp_add_inline_style( 'ct-founder-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'ct_founder_pro_custom_colors_css', 99 );