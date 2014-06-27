<!DOCTYPE html>
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8">
<title>Iceat</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="http://iceat.net/sites/all/themes/new_iceat/images/favicon.gif"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="/misc/favicon.ico" type="image/x-icon" />
<link type="text/css" rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/css/node.css?j" />
<link type="text/css" rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/css/defaults.css?j" />
<link type="text/css" rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/css/system.css?j" />
<link type="text/css" rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/css/system-menus.css?j" />
<link type="text/css" rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/css/user.css?j" />
<link type="text/css" rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/css/ontent-module.css?j" />
<link type="text/css" rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/css/ckeditor.css?j" />
<link type="text/css" rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/css/ctools.css?j" />
<link type="text/css" rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/css/filefield.css?j" />
<link type="text/css" rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/css/views.css?j" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?j" type="text/css" media="screen" />


<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive.css" media="screen"/><!-- RESPONSIVE CSS FILE -->
<link rel="stylesheet" id="style-color" href="<?php bloginfo('template_url'); ?>/css/blue-color.css" media="screen"/><!-- DEFAULT BLUE COLOR CSS FILE -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,500' rel='stylesheet' type='text/css'><!-- ROBOTO FONT FROM GOOGLE CSS FILE -->

<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/skin.css" type="text/css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/layer-slider.css" media="screen"/><!-- LAYER SLIDER CSS FILE -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/flexslider.css" media="screen"/><!-- FLEX SLIDER CSS FILE -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/revolution-slider.css" media="screen"/><!-- REVOLUTION SLIDER CSS FILE -->
<!-- All JavaScript Files (FOR FASTER LOADING OF YOUR SITE, REMOVE ALL JS PLUGINS YOU WILL NOT USE)-->

</head>
<body  class="front not-logged-in page-node no-sidebars i18n-en">
<div id="container">
	<!-- main container starts-->
	<div id="wrapp">
		<!-- main wrapp starts-->
		<header id="header">
		<!--header starts -->
		<div id="header-links">
			<div class="container">
							<div class="one-half float-right no-margin-right">
					<ul class="social-links">
						<!-- header social links starts-->
						<li><a href="#" ><i class="fa fa-twitter"></i></i></a></li>
						<li><a href="#" ><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" ><i class="fa fa-skype"></i></a></li>
					</ul>
					<!--header social links ends -->
				</div>
			</div>
		</div>
		<div class="container">
			<div class="head-wrapp">
				<a href="<?php bloginfo('url'); ?>" id="logo"><img src="<?php print IMAGES; ?>/new_logo.png" alt=""/></a>
				<!--your logo-->
			</div>
		</div>
		<div id="main-navigation">
			<!--main navigation wrapper starts --> 
			<div class="container">

				<!-- main navigation start-->

		        <?php 
                    if ( has_nav_menu( 'main-menu' ) ) {
                          wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'main-menu' , 'container' => false ) );
                    }
                 ?>
				</ul>
				<!-- main navigation ends-->

			</div>
		</div>
		<!--main navigation wrapper ends -->
		</header> <!-- header ends-->