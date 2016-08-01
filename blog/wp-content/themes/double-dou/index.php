<?php get_header(); ?>
	<div class="blog-lists container">
		<div class="row main">
			
			<div class="col-md-12 blog-column" id="posts">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/content' ) ?>
					<?php endwhile; ?>
					<?php wp_link_pages(); ?>
					<div class="load-more-box">
						<div class="row">
							<div class="col-md-12 aligncenter" id="load-more">
								<?php next_posts_link( 'More posts' )?>
							</div>
						</div>
					</div>
				<?php else : ?>
					<?php get_template_part( 'template-parts/content-none' ); ?>
				<?php endif;?>
			</div>

		</div>
	</div>
<?php get_footer(); ?>