<!-- sidebar -->
<aside>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar") ) : ?>

<!-- archives -->
	<div class="sidebar">
		<h3>Archives</h3>
			<ul><?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'html', 'show_post_count' => true ) ); ?></ul>
	</div>
<!-- /archives -->

<!-- categories -->
	<div class="sidebar">
		<h3>Categories</h3>
			<ul><?php wp_list_categories('orderby=name&show_count=1&title_li='); ?></ul>
	</div>
<!-- /categories -->

<?php endif; ?>
</aside>

<!-- /sidebar -->