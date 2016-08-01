<?php if ( is_active_sidebar( 'before-main' ) ) : ?>
	<div class="sidebar sidebar-before-main-content" id="sidebar-before-main-content">
		<?php dynamic_sidebar( 'before-main' ); ?>
	</div>
<?php endif;