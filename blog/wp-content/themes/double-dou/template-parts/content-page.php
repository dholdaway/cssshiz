<article id="page-<?php the_ID(); ?>" <?php post_class() ?>>
	<header class="page-header">
		<?php the_title( '<h2 class="page-title">', '</h2>' ) ?>
	</header>
	<div class="page-content">
		<div class="page-inner">
			<?php the_content()?>
		</div>
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