<!DOCTYPE html >
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head <?php language_attributes(); ?> >
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


	<!-- Bootstrap css -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap/bootstrap.min.css" media="screen" type="text/css" />
	
	<!-- Styles cloning from askhanuman.co.th layout.less file -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/askhanuman.css" media="screen" type="text/css" />

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css"  />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body lang="th" >

<!-- 
<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
	<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
	<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
</nav> -->


<nav class="hidden-xs font-thai ">
	<div class="container ">
		<ul class="list-inline list-unstyled">
			<li class="active">
				<a href="/" target="_self" title="Car insurance">
				<div class="icon-navigation-icons-03 pull-left mini-logo" alt="navigation logo"></div>
				<span class="hidden-sm">ประกันภัยรถยนต์</span>
				</a>

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