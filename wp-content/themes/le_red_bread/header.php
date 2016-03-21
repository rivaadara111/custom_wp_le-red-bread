<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php  get_template_directory_uri('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php  get_template_directory_uri('pingback_url'); ?>">
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html('Skip to content'); ?></a>
			<header id="masthead" class="site-header" role="banner">
			<div id="header-buffer-bar"></div>
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php  get_template_directory_uri('name'); ?></a></h1>
					<a href="<?php echo esc_url(home_url());?>">
						<img src="<?php  bloginfo(template_directory); ?>/images/lrb-logo.svg" class="logo" alt="Le Red Bread logo">
					</a>
					<p class="site-description"><?php  get_template_directory_uri('description'); ?></p>
					<div class="social">
							<ul>
									<li>
										<a href="www.facebook.com"><i class="fa fa-facebook"></i>
										</a>
									</li>
									<li>
											<a href="wwww.twitter.com"><i class="fa fa-twitter"></i>
									 </a>
									</li>
									<li>
											<a href="www.google.ca"><i class="fa fa-google-plus"></i>
									 </a>
									</li>
									<li>
											<a href="#"><i class="fa fa-envelope"></i>
									 </a>
									</li>
							</ul>
					</div>
				</div>
		<form role="search" method="get" id="searchform">
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html('Primary Menu'); ?></button>
				<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
			</nav>
			<div class ="search-bar">
				<?php get_search_form(); ?>
		  </div>
		</form>
	</header>

<div id="content" class="site-content">
