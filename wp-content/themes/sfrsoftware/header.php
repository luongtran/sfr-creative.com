<!DOCTYPE html>
<html>
    <head>
        <title>SFR Software</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?j" type="text/css" media="screen" />
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/functions.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/modernizr.custom.js"></script>
			<!-- Add mousewheel plugin (this is optional) -->
		<script type="<?php bloginfo('template_url'); ?>/js/jquery.mousewheel-3.0.6.pack.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox.js?v=2.1.5"></script>
		<!-- Add Button helper (this is optional) -->
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox-buttons.js?v=1.0.5"></script>
		<!-- Add Thumbnail helper (this is optional) -->
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox-thumbs.js?v=1.0.7"></script>
		<!-- Add Media helper (this is optional) -->
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox-media.js?v=1.0.6"></script>
        
        <?php wp_head(); ?> 
        
    </head>
    <body id="top">
        <div id="intro-wrapper">
            <nav role="navigation" class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button data-target="#collapse-menu" data-toggle="collapse" class="navbar-toggle" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="<?php bloginfo('url'); ?>" class="navbar-brand" id="top-logo">
                            <span>SMART - FAST - RESPONSIBLE</span>
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div id="collapse-menu" class="collapse navbar-collapse">
                    	<?php 
	                    if ( has_nav_menu( 'main-menu' ) ) {
	                          wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'nav navbar-nav navbar-right' , 'container' => false ) );
	                    }
                        ?>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
            </nav>
<!-- End header -->