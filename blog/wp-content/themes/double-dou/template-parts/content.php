<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<?php if ( ! is_sticky() ) :?>
		<header>
			<p class="post-meta">
				<a href="<?php echo get_permalink() ?>" class="bypostauthor"><?php the_author(); ?></a>
				&middot;
				<span class="time"><?php the_time( 'F d, Y' ) ?></span>
				&middot;
				<?php if ( ! post_password_required() && comments_open() && get_comments_number() ) : ?>
					<?php comments_popup_link( __( '<span class="no-comments">0<i class="fa fa-comments"></i></span>', 'double-dou' ), __( '<span class="no-comments">1<i class="fa fa-comments"></i></span>', 'double-dou' ), __( '<span class="no-comments">%<i class="fa fa-comments"></i></span>', 'double-dou' ) ); ?>
				<?php endif; ?>
			</p>
		</header>
	<?php endif;?>
		<div class="post-content">
			<div class="post-featured-img">
				<?php
					if ( has_post_thumbnail() ) :
						echo '<a href="'.get_permalink().'">';
						the_post_thumbnail( 'double-dou-home-image', array( 'class' => 'image-responsive center-block' ) );
						echo '</a>';
					endif;
				?>
			</div>
			<h3 class="post-title">
				<a href="<?php the_permalink(); ?>">
					<?php the_title() ?>
				</a>
			</h3>
			<div class="post-excerpt">
				<?php if ( ! is_sticky() ) : ?>
					<?php echo '<p>' . double_dou_get_excerpt( 350 ) . '</p>'; ?>
				<?php else : ?>
					<?php the_content() ?>
				<?php endif; ?>
			</div>
			<?php if ( ! is_sticky() ) : ?>
				<div class="post-tags">
					<?php the_tags(); ?>
				</div>
				<a href="<?php the_permalink() ?>" class="read-more">Read More</a>
			<?php endif; ?>
		</div>
</article>