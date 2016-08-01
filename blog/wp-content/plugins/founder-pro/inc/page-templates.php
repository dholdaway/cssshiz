<?php
defined( 'ABSPATH' ) OR exit;

function ct_founder_pro_add_post_template_meta_box() {

	$screens = array( 'post', 'page' );

	foreach ( $screens as $screen ) {

		add_meta_box(
			'ct_founder_pro_post_template',
			__( 'Template', 'founder-pro' ),
			'ct_founder_pro_post_template_callback',
			$screen,
			'side'
		);
	}
}
add_action( 'add_meta_boxes', 'ct_founder_pro_add_post_template_meta_box' );

function ct_founder_pro_post_template_callback( $post ) {

	wp_nonce_field( 'ct_founder_pro_post_template', 'ct_founder_pro_post_template_nonce' );

	$template = get_post_meta( $post->ID, 'ct_founder_pro_post_template_key', true );

	?>
	<p>
		<select name="founder-pro-post-template" id="founder-pro-post-template" class="widefat">
			<option value=""><?php _e( 'Default Template', 'founder-pro' ); ?></option>
			<option value="full-width-image" <?php if ( $template == 'full-width-image' ) {
				echo 'selected';
			} ?>><?php _e( 'Full-width Image', 'founder-pro' ); ?></option>
			<option value="title-overlay" <?php if ( $template == 'title-overlay' ) {
				echo 'selected';
			} ?>><?php _e( 'Title Overlay', 'founder-pro' ); ?></option>
		</select>
	</p> <?php
}

function ct_founder_pro_post_template_save_data( $post_id ) {

	global $post;

	if ( ! isset( $_POST['ct_founder_pro_post_template_nonce'] ) ) {
		return;
	}
	if ( ! wp_verify_nonce( $_POST['ct_founder_pro_post_template_nonce'], 'ct_founder_pro_post_template' ) ) {
		return;
	}
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	/* it's safe to save the data now. */

	if ( isset( $_POST['founder-pro-post-template'] ) ) {

		$template = $_POST['founder-pro-post-template'];

		if ( $template != 'full-width-image' && $template != 'title-overlay' && $template != '' ) {
			return;
		}

		update_post_meta( $post_id, 'ct_founder_pro_post_template_key', $template );
	}
}
add_action( 'pre_post_update', 'ct_founder_pro_post_template_save_data' );

// output the template file content instead of normal singular template
function ct_founder_pro_include_template( $template ) {

	global $post;
	$file = '';
	$templates = array(
		'full-width-image' => 'Full-width Image',
		'title-overlay'    => 'Title Overlay'
	);

	// if one of the templates is not set in the post meta, return
	if ( ! isset( $templates[ get_post_meta(
			$post->ID, 'ct_founder_pro_post_template_key', true
		) ] ) ) {
		return $template;
	}

	if ( is_singular( 'post' ) ) {

		// get the path to the template file based on the post meta
		$file = plugin_dir_path( __FILE__ ) . 'templates/' . get_post_meta(
				$post->ID, 'ct_founder_pro_post_template_key', true
			) . '-post.php';

	} elseif ( is_singular( 'page' ) ) {

		// get the path to the template file based on the post meta
		$file = plugin_dir_path( __FILE__ ) . 'templates/' . get_post_meta(
				$post->ID, 'ct_founder_pro_post_template_key', true
			) . '.php';
	}

	if ( $file ) {

		$file = esc_url_raw( $file );

		// Just to be safe, check if the file exist first
		if ( file_exists( $file ) ) {

			// add a filter to add template-based class to body for styling (ex. 'full-width-image-post')
			add_filter( 'body_class', 'ct_founder_pro_template_classes' );

			// return template file instead of $template
			return $file;
		} // if file doesn't exist print the path to where it thinks it is
		else {
			echo $file;
		}
	}

	// if no $file, return the template
	return $template;
}
add_filter( 'template_include', 'ct_founder_pro_include_template' );

function ct_founder_pro_template_classes( $classes ) {

	global $post;

	$type = is_singular( 'post' ) ? 'post' : 'page';

	// add template name plus the post type (ex. 'full-width-image-post')
	$classes[] = get_post_meta( $post->ID, 'ct_founder_pro_post_template_key', true ) . '-' . $type;

	return $classes;
}