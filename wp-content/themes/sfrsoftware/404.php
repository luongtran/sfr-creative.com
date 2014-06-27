<!DOCTYPE HTML>
<html>
<head>
<title>404 error page</title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/404.css" />

</head>
<body>
	<!-----start-wrap--------->
	<div class="wrap">
		<!-----start-content--------->
		<div class="content">
			<!-----start-logo--------->
			<div class="logo">
				<h1><a href="#"><img src="<?php print IMAGES; ?>/logo.png"/></a></h1>
				<span><img src="<?php print IMAGES; ?>/signal.png"/>Oops! The Page you requested was not found!</span>
			</div>
			<!-----end-logo--------->
			<!-----start-search-bar-section--------->
			<div class="buttom">
				<div class="seach_bar">
					<p>you can go to <span><a href="<?php bloginfo('url'); ?>">home</a></span> page or search here</p>
					<!-----start-sear-box--------->
					<div class="search_box">
                                            <?php get_search_form(); ?>
					 </div>
				</div>
			</div>
			<!-----end-sear-bar--------->
		</div>
		<!----copy-right-------------->
	<p class="copy_right">&#169 SFR - SOFTWARE; 2014</p>
	</div>
        <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div><label class="screen-reader-text" for="s">Search for:</label>
        <input type="text" value="" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="Search" />
    </div>
</form>
	<!---------end-wrap---------->
</body>
</html>