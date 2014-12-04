<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


	<!-- Bootstrap css -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap/bootstrap.min.css" media="screen" type="text/css" />
	
	<!-- Styles cloning from askhanuman.co.th layout.less file -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/askhanuman.css" media="screen" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/sprite-images.css" media="screen" type="text/css" />

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css"  />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>  lang="th" >

<nav class="hidden-xs font-thai ">
	<div class="container ">
		<ul class="list-inline list-unstyled">
			<li class="active">
				<a href="/" target="_self" title="Car insurance">
					<div class="icon-navigation-icons-03 pull-left mini-logo" alt="navigation logo"></div>
					<span class="hidden-sm">ประกันภัยรถยนต์</span>
				</a>

				<div  class="sublevel">
					<div class="container">
						<ul class="list-unstyled">
							<li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
								<a itemprop="url" href="/insurer/viriyah" title="viriyah">
									<div itemprop="title" class="icon-menu-icon-viriyah pull-left" alt="viriyah logo"></div> 
									วิริยะประกันภัย </a>
							</li>

						</ul>

						<ul class="list-unstyled">

							<li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
								
								<a itemprop="url" href="/insurer/dhipaya" title="Dhipaya">
									<div itemprop="title" class="icon-menu-icon-dhi pull-left" alt="Dhipaya logo" style="background-color : #FFF"></div> 

								ทิพยประกันภัย </a>
							</li>

						</ul>
					</div>
				</div>


			</li><li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">

			<a itemprop="url" href="/bangkok-insurance-travel" title="Travel insurance">


			<div class="icon-navigation-icons-01 pull-left mini-logo" itemprop="title" alt="navigation logo"></div>

			<span class="hidden-sm">ประกันการเดินทาง<span></a>
			<div class="sublevel">
				<div class="container">
					<ul class="list-unstyled">
						<li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
							<a itemprop="url" href="/bangkok-insurance-travel" title="Bangkok Travel insurance">
								<div class="pull-left icon-menu-icon-bki"></div>
								<span itemprop="title"> กรุงเทพประกันภัย </span>
							</a>

						</li>
					</ul>
				</div>
			</div>
			</li>
		</ul>
	</div>
</nav>

<div id="page" class="container main-content">
<!-- 	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		</a>
	</div>
	<?php endif; ?> -->

<!-- 	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<div class="search-toggle">
				<a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'twentyfourteen' ); ?></a>
			</div>

			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
		</div>

		<div id="search-container" class="search-box-wrapper hide">
			<div class="search-box">
				<?php get_search_form(); ?>
			</div>
		</div>
	</header><!-- #masthead --> 

	<div id="main" class="site-main row">


	<div class="col-lg-3 col-md-4">

		<div class="sidebar-myad" >
			<a href="https://www.askhanuman.co.th/" target="_blank"><img alt="ประกันภัยรถยนต์: บริการเปรียบเทียบราคาประกัน โดย อาสค์ หนุมาน" src="https://askhanuman.co.th/car-insurance/wp-content/uploads/2014/11/blog-usp-sidebanner.png" width="275" title="ประกันภัยรถยนต์: บริการเปรียบเทียบราคาประกัน โดย อาสค์ หนุมาน"></a>
		</div>

		<?php wp_list_categories( $args ); ?> 
	</div>


	<div class="col-lg-6 col-md-8">



