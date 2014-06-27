<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?> | <?php wp_title(); ?> </title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
	<!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
</head>
<body>
	<div id="wrap" >
		<div id="container" class="group">
			<!--Header  -->
			<header class="group">
			<h1><img src="<?php print IMAGES; ?>/logo.png" alt="<?php bloginfo('name'); ?>" /></h1>
			<div class="searchbar">
				<?php get_search_form(); ?>
				<?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' )); ?>
			</header>
			<!-- End Header -->
			<!-- Main Area -->
			<div id="content" class="group" >