		</div><!-- .content-inner -->
		<footer>
			<div class="footer-inner">
				<?php if ( is_single() || is_page() ) :?>
					<div class="container footer-widgets">
						<div class="row footer-widget-container">
							<div class="col-md-4 footer-widget-box">
								<?php
									if ( is_active_sidebar( 'footer-1' ) )
										dynamic_sidebar( 'footer-1' );
								?>
							</div>
							<div class="col-md-4 footer-widget-box">
								<?php
									if ( is_active_sidebar( 'footer-2' ) )
										dynamic_sidebar( 'footer-2' );
								?>
							</div>
							<div class="col-md-4 footer-widget-box">
								<?php
									if ( is_active_sidebar( 'footer-3' ) )
										dynamic_sidebar( 'footer-3' );
								?>
							</div>
						</div>
					</div>
				<?php endif; ?>
				<div class="copyright-text">
					<?php echo get_option( 'footer_creds', '<p>· Proudly powered by <a href="http://wordpress.org">Wordpress</a> · Double Dou by <a href="http://logicbasinteractive.com">Logicbase Interactive</a></p>' ); ?>
				</div>
			</div>
		</footer>
	</div><!-- .top-section -->
</div><!-- #page.site-content -->
<?php wp_footer(); ?>
</body>
</html>