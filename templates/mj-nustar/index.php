<?php 
// Add JavaScript Frameworks

JHtml::_('bootstrap.framework');

ini_set("display_errors","0");
$menu = &JSite::getMenu();
$menu1 = $menu->getActive();
@$pagetitle = $menu1->title;


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD xhtml 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width" />

<jdoc:include type="head" />
<link id="page_favicon" href="images/favicon.ico" rel="icon" type="image/x-icon" />
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/mj-general.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/mj-layout.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/mj-template.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/mj-tab.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/mj-mobile.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/mj-color.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/tabber.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!--[if lte IE 7]>
    <link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/mj-ie.css" rel="stylesheet" type="text/css" />
<![endif]-->

<!--[if gte IE 8]>
	 <link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/mj-ie8.css" rel="stylesheet" type="text/css" />
<![endif]-->


<?php if($this->params->get('googleFont') == 1 &&0 ) { ?>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans|<?php echo $this->params->get('googleFontName');  ?>' rel='stylesheet' type='text/css' />
<?php } elseif(0) { ?>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css' />
<?php } ?>

<?php
// Custom Logo 
if ($this->params->get('logoFile'))
{
	$logo = JURI::root() . $this->params->get('logoFile');
}
else
{
	$logo = $this->baseurl . "/templates/" . $this->template . "/images/sfr-logo.png";
}
?>

<?php 
// Condition for mj-contentarea class
if( (!$this->countModules('mj-left')) || (!$this->countModules('mj-right')) )
{
	$cls = "mj-grid72";
    
}
if( (!$this->countModules('mj-left')) && (!$this->countModules('mj-right')) )
{
	$cls = "mj-grid96";
}
if( ($this->countModules('mj-left')) && ($this->countModules('mj-right')) )
{
        $cls = "span4";
        //$cls = "mj-grid30";
	//$cls = "mj-grid48";
}
?>

<!-- css for 3 col layout and content + right col layout -->
<style type="text/css">
<?php if( ($this->countModules('mj-left')) && ($this->countModules('mj-right')) || ($this->countModules('mj-right')) ) { ?>
/*	#mj-contentarea {
		position: relative;
		right: 33.5%;
	}
	
	#mj-right {
		position: relative;
	}
	
	.mj-subcontainer {
		position: relative;
	}*/
<?php } ?>
<?php if( ($this->countModules('mj-left')) && ($this->countModules('mj-right')) ) { ?>
/*	#mj-right {
		right:-32.9%
	}*/
<?php } ?>

<?php if( !($this->countModules('mj-left')) && ($this->countModules('mj-right')) ) { ?>
/*	#mj-right {
		right: -75%;
	}*/
<?php } ?>

/* For Google Font */
<?php if($this->params->get('googleFont') == 1 ) { ?>
	.button, input[type="submit"], input[type="reset"], input[type="button"], .readmore, button, .moduletable h3,
	#mj-topbar, #mj-logo, #mj-navigation li, #mj-featured1, .page-header h2, #mj-slidetitle, ul.tabbernav li a, .nspArt h4.nspHeader,
	h1, h2, h3, h4, h5, h6 {
		font-family: <?php echo $this->params->get('googleFontName');  ?>,sans-serif;
	}
<?php } ?>
</style>
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/fix.css" rel="stylesheet" type="text/css" />
<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>-->
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/backtotop.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/tabber.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.bxslider.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.carouFredSel.js"></script>
<script type="text/javascript">
            jQuery(document).ready(function(){
//                jQuery('.slide-webapps').bxSlider({
//                    slideWidth: 240,
//                    minSlides: 2,
//                    maxSlides: 4,
//                    slideMargin: 10,
//                    startSlide :1,
//                    pager:false,
//                    useCSS:false
//                });
            });           
 </script>
</head>

<body>

<!-- Mj-Container Start -->
<div id="mj-container">
<!-- Mj-SubContainer Start -->
<div class="mj-subcontainer">
	<?php if($this->countModules('mj-topbar')) { ?>
    <!-- Mj-Topbar Start -->
    <div id="mj-topbar">
        <jdoc:include type="modules" name="mj-topbar" style="xhtml" />
    </div>
    <!-- Mj-Topbar End -->
    <?php } ?>
    
    <!-- Mj-Shadow Start -->    
	<div class="mj-shadow">	
        <!-- Mj-Header Start -->
        <div id="mj-header">
            <!-- Mj-Logo Start -->
            <div id="mj-logo">
                	<a href="<?php echo $this->baseurl; ?>"><img src="<?php echo $logo; ?>" alt="logo" /></a>
            </div>
            <p class="logo-des">SMART - FAST - RESPONSIBLE</p>
            <!-- Mj-Logo End -->
            <?php if($this->countModules('mj-position1')) { ?>
            <!-- Mj-Righttop Start -->
            <div id="mj-righttop">
                <jdoc:include type="modules" name="mj-position1" style="xhtml" />
            </div>
            <!-- Mj-Righttop End -->
            <?php } ?>
        </div>
        <!-- Mj-Header End -->
        
        
        <?php if($this->countModules('mj-position2')) { ?>
        <!-- Mj-Navigation Start -->
        <div id="mj-navigation">
              
            <jdoc:include type="modules" name="mj-position2" style="xhtml" />
            
        </div>
        
        <!-- Mj-Navigation End -->
        <?php } ?>
        
        <?php if ($menu->getActive() == $menu->getDefault()) { ?>
			<?php if($this->countModules('mj-position3')) { ?>
            <!-- Mj-Slideshow Start -->
            <div id="mj-slideshow">
                <jdoc:include type="modules" name="mj-position3" style="xhtml" />
            </div>
            <!-- Mj-Slideshow End -->
            <?php } ?>
		<?php } else { ?>
            <!-- Mj-Slidetitle Start -->
            <div id="mj-slidetitle">
                <span class="mj-title mj-grid96"><?php echo $pagetitle; ?></span>
                <jdoc:include type="modules" name="mj-position3" style="xhtml" />
            </div>
            <!-- Mj-Slidetitle End -->
        <?php } ?>
        
        <?php if($this->countModules('mj-position4')) { ?>
        <!-- Mj-Featured1 Start -->
        <div id="mj-featured1">
            <div class="container-fluid">
                 <jdoc:include type="modules" name="mj-position4" style="xhtml" />
            </div>
        </div>
        <!-- Mj-Featured1 End -->
        <?php } ?>
        
        <?php if($this->countModules('mj-position5')) { ?>
       
        <?php } ?>
        
        <!-- Mj-Maincontent Start -->
        <div class="container-fluid" style="background: #ffffff;">
        <div class="row-fluid">
            <div  class="<?php echo $cls; ?>">
                <?php if($this->countModules('mj-contenttop')) { ?>
                <!-- Mj-Contenttop Start -->
                <div id="mj-contenttop">
                    <jdoc:include type="modules" name="mj-contenttop" style="xhtml" />
                </div>
                <!-- Mj-Contenttop End -->
                <?php } ?>
                
                <!-- Mj-Content Start -->
                <div id="mj-content">
                    <jdoc:include type="component" />
                </div>
                <!-- Mj-Content End -->
                
                <?php if($this->countModules('mj-contentbottom')) { ?>
                <!-- Mj-Contentbottom Start -->
                <div id="mj-contentbottom">
                    <jdoc:include type="modules" name="mj-contentbottom" style="xhtml" />
                </div>
                <!-- Mj-Contentbottom End -->
                <?php } ?>
            </div>
            
            <?php if($this->countModules('mj-left')) { ?>
            <!-- Mj-Left Start -->
            <div  class="span4">
                <jdoc:include type="modules" name="mj-left" style="xhtml" />
            </div>
            <!-- Mj-Left End -->
            <?php } ?>
            
            <?php if($this->countModules('mj-right')) { ?>
            <!-- Mj-Right Start -->
            <div  class="span4">
                <jdoc:include type="modules" name="mj-right" style="xhtml" />
            </div>
            <!-- Mj-Right End -->
            <?php } ?>
            </div>
        </div>
        <!-- Mj-Maincontent End -->
      
         <!-- Mj-Featured2 Start -->
        <div id="mj-featured2">
            <jdoc:include type="modules" name="mj-position5" style="xhtml" />
        </div>
        <!-- Mj-Featured2 End -->
			<a id="next" href="#"></a>
			<div id="pager"></div>
       
        
        <?php if($this->countModules('mj-position6')) { ?>
        <!-- Mj-Featured3 Start -->
        <div id="mj-featured3">
            <jdoc:include type="modules" name="mj-position6" style="xhtml" />
        </div>
        <!-- Mj-Featured3 End -->
        <?php } ?>
        
        <?php if($this->countModules('mj-position7')) { ?>
        <!-- Mj-Featured4 Start -->
        <div id="mj-featured4">
            <jdoc:include type="modules" name="mj-position7" style="xhtml" />
        </div>
        <!-- Mj-Featured4 End -->
        <?php } ?>
	</div>
    <!-- Mj-Shadow End -->
    
	<?php if($this->countModules('mj-position8')) { ?>
    <!-- Mj-Footer Start -->
    <div id="mj-footer">
    	<jdoc:include type="modules" name="mj-position8" style="xhtml" />
    </div>
    <!-- Mj-Footer End -->
    <?php } ?>
    
    <?php if($this->countModules('mj-position9')) { ?>
    <!-- Mj-Copyright Start -->
    <div id="mj-copyright">
    	<jdoc:include type="modules" name="mj-position9" style="xhtml" />
    </div>
    <!-- Mj-Copyright End -->
    <?php } ?>
    
</div>
<!-- Mj-SubContainer End -->
</div>
<!-- Mj-Container End -->

</body>
</html>