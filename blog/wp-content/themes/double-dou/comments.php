<div id="comments" class="comments-area">
	<?php if( have_comments() ) : ?>
		<h2 class="title">
			<?php
				printf( esc_html( _nx( 'One Comment on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments-title', 'double-dou' ) ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
			?>
		</h2>

		<div class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'div',
					'short_ping' => true,
				) );
			?>
		</div>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
				<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'double-dou' ); ?></h2>
				<div class="nav-links">

					<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'double-dou' ) ); ?></div>
					<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'double-dou' ) ); ?></div>

				</div><!-- .nav-links -->
			</nav><!-- #comment-nav-below -->
		<?php
		endif;
	 endif; ?>
</div>
<?php
	
	if ( ! comments_open()  ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'double-dou' )?></p>
	<?php 
	else: 
		comment_form();
	endif;

?>