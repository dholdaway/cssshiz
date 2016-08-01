<?php get_header(); ?>
	<div class="single-blog container">
		<div class="row main">
			
			<div class="col-md-12 single-column">

				<?php 
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content-single' );

						if ( comments_open() || get_comments_number() ) : ?>
							<div class="comments-box">
								<?php comments_template( '', true );?>
							</div>
						<?php endif;
					endwhile;
				?>
				
			</div>

		</div>
	</div>
<?php get_footer(); ?>