<?php get_header(); ?>
	<div class="page-container container">
		<div class="row main">
			
			<div class="col-md-12">
				
				<?php 
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content-page' );
					endwhile;
				?>

			</div>

		</div>
	</div>
<?php get_footer(); ?>