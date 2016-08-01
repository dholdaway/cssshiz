<article id="post-<?php the_ID() ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<p class="post-meta">
			<a href="<?php echo get_permalink() ?>" class="bypostauthor"><?php the_author(); ?></a>
			&middot;
			<span class="time"><?php the_time( 'F d, Y' ) ?></span>
			&middot;
			<?php if ( ! post_password_required() && comments_open() && get_comments_number() ) : ?>
				<?php comments_popup_link( __( '<span class="no-comments">0<i class="fa fa-comments"></i></span>', 'double-dou' ), __( '<span class="no-comments">1<i class="fa fa-comments"></i></span>', 'double-dou' ), __( '<span class="no-comments">%<i class="fa fa-comments"></i></span>', 'double-dou' ) ); ?>
			<?php endif; ?>
		</p>
		
		<?php the_title( '<h2 class="entry-title">', '</h2>' ) ?>
	</header>
	<?php if ( has_post_thumbnail() ) :?>
		<div class="post-featured-img">
			<?php the_post_thumbnail( 'full' ); ?>
		</div>
	<?php endif ?>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
	<footer class="page-footer">
		<?php

			edit_post_link(
				sprintf(
					esc_html__( 'Edit %s', 'double-dou' ),
					the_title( '<span class="screen-reader-text">', '</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);

		?>
	</footer>
</article>