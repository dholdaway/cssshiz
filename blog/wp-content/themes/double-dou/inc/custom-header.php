<?php

function double_dou_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'double_dou_custom_header_args', array(
			'default-text-color'	=> '000000',
			'width'					=> 250,
			'height'				=> 250,
			'wp-head-callback'		=> 'double_dou_header_style'
	) ) );
}
add_action( 'after_setup_theme', 'double_dou_custom_header_setup' );

if ( ! function_exists( 'double_dou_header_style' ) ) :
	
	function double_dou_header_style() {
		$header_text_color = get_header_textcolor();

		?>

		<style type="text/css">
			<?php  if ( ! display_header_text() ) : ?>
				.site-title,
				.site-description {
					position: absolute;
					clip: rect(1px,1px,1px,1px);
				}
			<?php else : ?>
				.site-title a,
				.site-description {
					color: #<?php echo esc_attr( $header_text_color ) ?>;
				}
			<?php endif; ?>
			.top-section {
				background-color: <?php echo get_option( 'top_color', '#FFF' )?>;
				background-image: <?php echo ( $bg = get_option( 'top_bg_image' ) ) ? "url('". $bg ."')" : 'none'?>;
			}
			.blog-lists .post-title a {
				color: <?php echo get_option( 'pht_color', '#337ab7' ) ?>;
			}
		</style>

		<?php
		
	}

endif;