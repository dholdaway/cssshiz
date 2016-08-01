<?php get_header(); ?>
	<div class="page-container container">
		<div class="row main">
			
			<div class="col-md-12">
				
				<div class="page-not-found">
					<h1 class="http-code">404</h1>
					<p class="http-desc">We didn't found what you were looking, too bad..</p>
					<p class="suggestion">Shall we go</p>
					<a href="<?php echo esc_url( home_url( '/' ) )?>" class="home-link">home</a>
				</div>

			</div>

		</div>
	</div>
<?php get_footer(); ?>