<!DOCTYPE html> 
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>

<a class="skip-link screen-reader-text" href="#page"><?php _e( 'Skip to content', 'indite' ); ?></a>

<div id="wrapper">
	
	<?php if ( get_header_image() ) : ?>
		<div class="site-header">
			<a href="<?php echo esc_url( home_url('/') ); ?>" rel="home">
				<img class="site-image" src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
			</a>
		</div>
	<?php endif; ?>
	
	<div id="wrapper-inner">
	
		<header id="header">
			
			<?php echo indite_site_title(); ?>
			<?php if ( display_header_text() == true ): ?>
				<p class="site-description"><?php bloginfo( 'description' ); ?></p>
			<?php endif; ?>

			<?php if ( has_nav_menu('header') ): ?>
				<div id="wrap-nav-header" class="wrap-nav">
					<?php \AlxMedia\Nav::nav_menu(array('theme_location'=>'header','menu_id' => 'nav-header','fallback_cb'=> false)); ?>
				</div>
			<?php endif; ?>
			
			<?php if ( has_nav_menu('mobile') ): ?>
				<div id="wrap-nav-mobile" class="wrap-nav">
					<?php \AlxMedia\Nav::nav_menu(array('theme_location'=>'mobile','menu_id' => 'nav-mobile','fallback_cb'=> false)); ?>
				</div>
			<?php endif; ?>
			
			<?php if ( get_theme_mod('profile-image') || get_theme_mod('profile-name') || get_theme_mod('profile-description') ): ?>
				<div id="profile" class="group">
					<div id="profile-inner">
						<?php if ( get_theme_mod('profile-image') ): ?>
							<div id="profile-image"><img src="<?php echo esc_html( get_theme_mod('profile-image') ); ?>" alt="" /></div>
						<?php endif; ?>
						<?php if ( get_theme_mod('profile-name') ): ?>
							<div id="profile-name"><?php echo esc_html( get_theme_mod('profile-name') ); ?></div>
						<?php endif; ?>
						<?php if ( get_theme_mod('profile-description') ): ?>
							<div id="profile-description"><?php echo wp_kses_post( get_theme_mod('profile-description') ); ?></div>
						<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>
			
			<div id="move-sidebar-header"></div>
			<?php get_sidebar(); ?>
			
		</header><!--/#header-->
		
		<div class="sidebar s2 group">
			<?php if ( get_theme_mod( 'header-search', 'on' ) == 'on' ): ?>
				<button class="toggle-search">
					<svg class="svg-icon" id="svg-search" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23"><path d="M38.710696,48.0601792 L43,52.3494831 L41.3494831,54 L37.0601792,49.710696 C35.2632422,51.1481185 32.9839107,52.0076499 30.5038249,52.0076499 C24.7027226,52.0076499 20,47.3049272 20,41.5038249 C20,35.7027226 24.7027226,31 30.5038249,31 C36.3049272,31 41.0076499,35.7027226 41.0076499,41.5038249 C41.0076499,43.9839107 40.1481185,46.2632422 38.710696,48.0601792 Z M36.3875844,47.1716785 C37.8030221,45.7026647 38.6734666,43.7048964 38.6734666,41.5038249 C38.6734666,36.9918565 35.0157934,33.3341833 30.5038249,33.3341833 C25.9918565,33.3341833 22.3341833,36.9918565 22.3341833,41.5038249 C22.3341833,46.0157934 25.9918565,49.6734666 30.5038249,49.6734666 C32.7048964,49.6734666 34.7026647,48.8030221 36.1716785,47.3875844 C36.2023931,47.347638 36.2360451,47.3092237 36.2726343,47.2726343 C36.3092237,47.2360451 36.347638,47.2023931 36.3875844,47.1716785 Z" transform="translate(-20 -31)"></path></svg>
					<svg class="svg-icon" id="svg-close" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 16 16"><polygon fill="" fill-rule="evenodd" points="6.852 7.649 .399 1.195 1.445 .149 7.899 6.602 14.352 .149 15.399 1.195 8.945 7.649 15.399 14.102 14.352 15.149 7.899 8.695 1.445 15.149 .399 14.102"></polygon></svg>
				</button>
				<div class="search-expand">
					<div class="search-expand-inner">
						<?php get_search_form(); ?>
					</div>
				</div>
			<?php endif; ?>
			<?php if ( get_theme_mod( 'header-social', 'on' ) == 'on' ): ?>
				<?php indite_social_links() ; ?>
			<?php endif; ?>
		</div>

		<div class="main" id="page">
			<div class="main-inner group">