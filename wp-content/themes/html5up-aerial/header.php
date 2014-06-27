<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /> <!--Thiết lập bảng mã trang web-->
        <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>" />
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/><!--Bật Responsive-->
        
        
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="<?php bloginfo('template_url'); ?>/js/skel.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/init.js"></script>
		
			<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/skel.css" />
			<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" />
			<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style-wide.css" />
			<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style-noscript.css" />
		
		<!--[if lte IE 9]><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie/v9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie/v8.css" /><![endif]-->
		<!--[if lt IE 9]>
            <script src="<?php bloginfo('template_url'); ?>/js/vendor/html5-3.6-respond-1.1.0.min.js"></script>
        <![endif]-->
		<?php wp_head(); ?>
	</head>
	<body class="loading">
		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">