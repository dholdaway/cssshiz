<?php
/*
 * Post Template: Full-width Image
*/

get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div <?php post_class(); ?>>
		<?php do_action( 'post_before' ); ?>
		<article>
			<?php ct_founder_featured_image(); ?>
			<div class='post-header'>
				<h1 class='post-title'><?php the_title(); ?></h1>
				<?php get_template_part( 'content/post-meta' ); ?>
			</div>
			<div class="post-content">
				<?php the_content(); ?>
				<?php wp_link_pages( array(
					'before' => '<p class="singular-pagination">' . __( 'Pages:', 'founder' ),
					'after'  => '</p>',
				) ); ?>
			</div>
			<div class="post-after">
				<?php get_template_part( 'content/post-categories' ); ?>
				<?php get_template_part( 'content/post-tags' ); ?>
				<?php do_action( 'post_after' ); ?>
				<?php get_template_part( 'content/post-nav' ); ?>
			</div>
		</article>
		<?php comments_template(); ?>
	</div>
<?php endwhile; endif;

get_footer();