<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	
<meta charset="<?php bloginfo( 'charset' ) ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1" >
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site-content">
	<div class="outer-section">
		<div class="spinner">
		  	<div class="cube1"></div>
		  	<div class="cube2"></div>
		</div>
	</div>
	<div class="ground-section">
		<aside class="left-aside" id="left-sidebar">
			<div class="aside-inner">
				<div class="site-branding">
					<?php if ( get_header_image() ) : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php bloginfo( 'name' ) ?>">
						</a>
					<?php else : ?>
						<?php if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title">
								<a href="<?php echo esc_url( home_url( '/' ) ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a>
							</h1>
						<?php else : ?>
							<p class="site-title">
								<a href="<?php echo esc_url( home_url( '/' ) ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a>
							</p>
						<?php endif; ?>
						<?php
							$description = get_bloginfo( 'description', 'display' );
							if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo $description; ?></p>
						<?php endif; ?>
					<?php endif; ?>
				</div>
				<div class="side-navigation">
					<nav class="main-navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => ' ', 'menu_id' => 'primary-navigation' ) ) ?>
					</nav>
				</div>
				<div class="owners-profile">
					<?php echo ( $pp = get_option( 'owners_pp', get_template_directory_uri() . '/img/owner.jpg' ) ) ? '<div class="profile-img"><img src="'. esc_url( $pp ) .'" alt="'. esc_attr_e( 'Site Owners Picture', 'double-dou' ) .'"></div>' : ''; ?>
					<?php echo ( $on = get_option( 'owners_name', 'John Doe' ) ) ? '<h4 class="profile-name">' . esc_attr($on) . '</h4>' : '';?>
					<?php echo ( $ob = get_option( 'owners_bio', 'Freelance Developer | Artist | Lover' ) ) ? '<p class="profile-bio">' . $ob . '</p>' : '' ?>
				</div>
				<div class="social-links">
					<?php if ( $fb = get_option('social_fb', '#') ) : ?><a href="<?php echo esc_url($fb); ?>"><i class="fa fa-facebook-square"></i></a><?php endif;?>
					<?php if ( $tw = get_option('social_tw', '#') ) : ?><a href="<?php echo esc_url($tw); ?>"><i class="fa fa-twitter-square"></i></a><?php endif;?>
					<?php if ( $gp = get_option('social_gp', '#') ) : ?><a href="<?php echo esc_url($gp); ?>"><i class="fa fa-google-plus-square"></i></a><?php endif;?>
					<?php if ( $inst = get_option('social_inst', '#') ) : ?><a href="<?php echo esc_url($inst); ?>"><i class="fa fa-instagram"></i></a><?php endif;?>
					<?php if ( $pint = get_option('social_pint', '#') ) : ?><a href="<?php echo esc_url($pint); ?>"><i class="fa fa-pinterest-square"></i></a><?php endif;?>
					<?php if ( $rss = get_option('rss_link', '#') ) : ?><a href="<?php echo esc_url( $rss ) ?>"><i class="fa fa-rss"></i></a><?php endif; ?>
				</div>
				<div class="side-link">
					<p>· Proudly powered by <a href="http://wordpress.org">Wordpress</a> · Double Dou by <a href="http://logicbasinteractive.com">Logicbase Interactive</a></p>
				</div>
			</div>
		</aside>
		<aside class="right-aside" id="right-sidebar">
			<div class="aside-inner">
				<?php 
					if ( is_active_sidebar( 'sidebar-1' ) )
						dynamic_sidebar( 'sidebar-1' );
				?>
			</div>
		</aside>
	</div>
	<div class="top-section">
		<div class="side-navigations">

			<div class="hamburger top-btn btn-left" data-side="left">
				<span class="bar"></span>
				<span class="bar"></span>
			</div>

			<div class="hamburger top-btn btn-left btn-mobile" data-side="left">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</div>

			<div class="hamburger top-btn btn-right" data-side="right">
				<span class="bar"></span>
				<span class="bar"></span>
			</div>

			<div class="hamburger btn-up">
				<span class="bar"></span>
				<span class="bar"></span>
			</div>

		</div>
		<div class="content-inner">
