<?php 

/**
* Mj Slideshow view file
* @copyright (C) 2012 by Dasinfomedia - All rights reserved!
* @package Mj-Slideshow
* @license GNU/GPL, see LICENSE.php
*/


//No Direct Access
defined('_JEXEC') or die('Restricted Access');


//Taking the Contents of Slideshow in an Array. Making Both Image and It's title Compulsory.

	$content_slides = array();
	if($img1 != "" && $title1 != "")
	{	
 		$one = array($img1, $title1, $desc1);
		array_push($content_slides, $one);
	}
	
	if($img2 != "" && $title2 != "")
	{	
 		$two = array($img2, $title2, $desc2);
		array_push($content_slides, $two);
	}
	
	if($img3 != "" && $title3 != "")
	{	
 		$three = array($img3, $title3, $desc3);
		array_push($content_slides, $three);
	}
	
	if($img4 != "" && $title4 != "")
	{	
 		$four = array($img4, $title4, $desc4);
		array_push($content_slides, $four);
	}
	
	if($img5 != "" && $title5 != "")
	{	
 		$five = array($img5, $title5, $desc5);
		array_push($content_slides, $five);
	}

?>

<?php

//Counting the number of Slides

$slides = count($content_slides);
$document = &JFactory::getDocument();

//Main Jquery File Inclusion

/*$document->addScript(JURI::base().'modules/mod_mj-slideshow/js/jquery.js');*/

//Checking the type of Effect select by User.


//For Transform Effect

if($effect == "transform")
{
	$document->addStyleSheet(JURI::base().'modules/mod_mj-slideshow/css/transform/effect.css'); ?>  <!-- Adding the Main CSS File -->
	
    <!-- For IE -->
    
    <!--[if IE]>
    <script src="modules/mod_mj-slideshow/js/mj-slideshow.effect.ie.js"></script>
    <script src="modules/mod_mj-slideshow/js/effect.ie.e.js"></script>
    <script src="modules/mod_mj-slideshow/js/effect.ie.js"></script>
    
    <![endif]-->
    
<?php
		//Calling the CSS file Responsible for Effect as per the number of Slides.
	
	if($slides==2)
	{
		$document->addStyleSheet(JURI::base().'modules/mod_mj-slideshow/css/transform/effect.fx_2.css');
	}
	else if($slides==3)
	{
		$document->addStyleSheet(JURI::base().'modules/mod_mj-slideshow/css/transform/effect.fx_3.css');
	}
	else if($slides==4)
	{
		$document->addStyleSheet(JURI::base().'modules/mod_mj-slideshow/css/transform/effect.fx_4.css');
	}
	else if($slides==5)
	{
		$document->addStyleSheet(JURI::base().'modules/mod_mj-slideshow/css/transform/effect.fx_5.css');
	}
}


// For Kenburns Effect

if($effect == "kenburns")
{
	$document->addStyleSheet(JURI::base().'modules/mod_mj-slideshow/css/kenburns/effect.css'); ?>  <!-- Adding the Main CSS File -->
    
    <!-- For IE -->
    
	<!--[if IE]>
    <script src="modules/mod_mj-slideshow/js/mj-slideshow.kenburns.ie.js"></script>
    <script src="modules/mod_mj-slideshow/js/kenburns.ie.e.js"></script>
    <script src="modules/mod_mj-slideshow/js/kenburns.ie.js"></script>
    <script src="modules/mod_mj-slideshow/js/jquery.js"></script>
    <![endif]-->
<?php

	//Calling the CSS file Responsible for Effect as per the number of Slides.
	
	if($slides==2)
	{
		$document->addStyleSheet(JURI::base().'modules/mod_mj-slideshow/css/kenburns/kenburns.fx_2.css');
	}
	else if($slides==3)
	{
		$document->addStyleSheet(JURI::base().'modules/mod_mj-slideshow/css/kenburns/kenburns.fx_3.css');
	}
	else if($slides==4)
	{
		$document->addStyleSheet(JURI::base().'modules/mod_mj-slideshow/css/kenburns/kenburns.fx_4.css');
	}
	else if($slides==5)
	{
		$document->addStyleSheet(JURI::base().'modules/mod_mj-slideshow/css/kenburns/kenburns.fx_5.css');
	}
}

// NOT IN USE..

/*if($effect == "slide")
{
	$document->addStyleSheet(JURI::base().'modules/mod_mj-slideshow/css/slide/effect.css');
	$document->addScript(JURI::base().'modules/mod_mj-slideshow/js/mj-slideshow.slide.ie.js');
	$document->addScript(JURI::base().'modules/mod_mj-slideshow/js/slide.ie.js');
	$document->addScript(JURI::base().'modules/mod_mj-slideshow/js/slide.ie.e.js');
	?>
    <!--[if IE]>
    <script src="modules/mod_mj-slideshow/js/mj-slideshow.slide.ie.js"></script>
    <script src="modules/mod_mj-slideshow/js/slide.ie.e.js"></script>
    <script src="modules/mod_mj-slideshow/js/slide.ie.js"></script>
    <script src="modules/mod_mj-slideshow/js/jquery.js"></script>
    <![endif]-->
    <?php
	if($slides==2)
	{
		$document->addStyleSheet(JURI::base().'modules/mod_mj-slideshow/css/slide/slide.fx_2.css');
	}
	else if($slides==3)
	{
		$document->addStyleSheet(JURI::base().'modules/mod_mj-slideshow/css/slide/slide.fx_3.css');
	}
	else if($slides==4)
	{
		$document->addStyleSheet(JURI::base().'modules/mod_mj-slideshow/css/slide/slide.fx_4.css');
	}
	else if($slides==5)
	{
		$document->addStyleSheet(JURI::base().'modules/mod_mj-slideshow/css/slide/slide.fx_5.css');
	}
}*/



// For Fade Effect

if($effect == "fade")
{
	$document->addStyleSheet(JURI::base().'modules/mod_mj-slideshow/css/fade/effect.css'); ?>   <!-- Adding the Main CSS File -->
	
    <!--For IE -->
    
    <!--[if IE]>
    <script src="modules/mod_mj-slideshow/js/mj-slideshow.fade.ie.js"></script>
    <script src="modules/mod_mj-slideshow/js/fade.ie.e.js"></script>
    <script src="modules/mod_mj-slideshow/js/fade.ie.js"></script>
    <script src="modules/mod_mj-slideshow/js/fade.js"></script>
    <![endif]-->
	<?php
	
	//Calling the CSS file Responsible for Effect as per the number of Slides.
	
	if($slides==2)
	{
		$document->addStyleSheet(JURI::base().'modules/mod_mj-slideshow/css/fade/fade.fx_2.css');
	}
	else if($slides==3)
	{
		$document->addStyleSheet(JURI::base().'modules/mod_mj-slideshow/css/fade/fade.fx_3.css');
	}
	else if($slides==4)
	{
		$document->addStyleSheet(JURI::base().'modules/mod_mj-slideshow/css/fade/fade.fx_4.css');
	}
	else if($slides==5)
	{
		$document->addStyleSheet(JURI::base().'modules/mod_mj-slideshow/css/fade/fade.fx_5.css');
	}
}
?>


<meta name="viewport" content="width=device-width" />

<div id="main_mj-slideshow" style="height:<?php echo $slideHeight;?>; max-width:<?php echo $slideWidth; ?>;">
<div class="mj-slideshow-wrap" style="height:100%; width:100%">

<?php
		for($i = 1; $i <= count($content_slides); $i++ )
		{
	?>
    <div class="mj-slideshow-fixed" id="mj-slideshow-slide-<?php echo $i; ?>-target"></div>
    <?php }?>
    
	<div class="mj-slideshow-fixed" id="mj-slideshow-play"></div>

	

	<div class="mj-slideshow-pager-wrap mj">
    	<div class="mj-slideshow-play" id="mj-slideshow-play"><a href="#mj-slideshow-play"></a></div>
        
        <?php
		for($i = 1; $i <= count($content_slides); $i++ )
		{
	?>
		<div class="mj-slideshow-pager mj" id="mj-slideshow-pager-<?php echo $i; ?>"><a href="#mj-slideshow-slide-<?php echo $i; ?>-target"></a></div>
        
        <?php } ?>
	</div>

<?php 

	if(count($content_slides)==2)
	{
?>
	<div class="mj-slideshow-arrow mj mj-slideshow-arrow-next mj-slideshow-arrow-slide-one"><a href="#mj-slideshow-slide-2-target"></a></div>
	<div class="mj-slideshow-arrow mj mj-slideshow-arrow-prev mj-slideshow-arrow-slide-one"><a href="#mj-slideshow-slide-2-target"></a></div>

	<div class="mj-slideshow-arrow mj mj-slideshow-arrow-next mj-slideshow-arrow-slide-two"><a href="#mj-slideshow-slide-1-target"></a></div>
	<div class="mj-slideshow-arrow mj mj-slideshow-arrow-prev mj-slideshow-arrow-slide-two"><a href="#mj-slideshow-slide-1-target"></a></div>
<?php } 
else if(count($content_slides)==3)
	{
?>

	<div class="mj-slideshow-arrow mj mj-slideshow-arrow-next mj-slideshow-arrow-slide-one"><a href="#mj-slideshow-slide-2-target"></a></div>
	<div class="mj-slideshow-arrow mj mj-slideshow-arrow-prev mj-slideshow-arrow-slide-one"><a href="#mj-slideshow-slide-3-target"></a></div>

	<div class="mj-slideshow-arrow mj mj-slideshow-arrow-next mj-slideshow-arrow-slide-two"><a href="#mj-slideshow-slide-3-target"></a></div>
	<div class="mj-slideshow-arrow mj mj-slideshow-arrow-prev mj-slideshow-arrow-slide-two"><a href="#mj-slideshow-slide-1-target"></a></div>

	<div class="mj-slideshow-arrow mj mj-slideshow-arrow-next mj-slideshow-arrow-slide-three"><a href="#mj-slideshow-slide-1-target"></a></div>
	<div class="mj-slideshow-arrow mj mj-slideshow-arrow-prev mj-slideshow-arrow-slide-three"><a href="#mj-slideshow-slide-2-target"></a></div>
    
  <?php } 
  else if(count($content_slides)==4)
		{  
  ?>

	<div class="mj-slideshow-arrow mj mj-slideshow-arrow-next mj-slideshow-arrow-slide-one"><a href="#mj-slideshow-slide-2-target"></a></div>
	<div class="mj-slideshow-arrow mj mj-slideshow-arrow-prev mj-slideshow-arrow-slide-one"><a href="#mj-slideshow-slide-4-target"></a></div>

	<div class="mj-slideshow-arrow mj mj-slideshow-arrow-next mj-slideshow-arrow-slide-two"><a href="#mj-slideshow-slide-3-target"></a></div>
	<div class="mj-slideshow-arrow mj mj-slideshow-arrow-prev mj-slideshow-arrow-slide-two"><a href="#mj-slideshow-slide-1-target"></a></div>

	<div class="mj-slideshow-arrow mj mj-slideshow-arrow-next mj-slideshow-arrow-slide-three"><a href="#mj-slideshow-slide-4-target"></a></div>
	<div class="mj-slideshow-arrow mj mj-slideshow-arrow-prev mj-slideshow-arrow-slide-three"><a href="#mj-slideshow-slide-2-target"></a></div>
	
	<div class="mj-slideshow-arrow mj mj-slideshow-arrow-next mj-slideshow-arrow-slide-four"><a href="#mj-slideshow-slide-1-target"></a></div>
	<div class="mj-slideshow-arrow mj mj-slideshow-arrow-prev mj-slideshow-arrow-slide-four"><a href="#mj-slideshow-slide-3-target"></a></div>
<?php } 
	else if(count($content_slides)==5)
	{
?>

	<div class="mj-slideshow-arrow mj mj-slideshow-arrow-next mj-slideshow-arrow-slide-one"><a href="#mj-slideshow-slide-2-target"></a></div>
	<div class="mj-slideshow-arrow mj mj-slideshow-arrow-prev mj-slideshow-arrow-slide-one"><a href="#mj-slideshow-slide-5-target"></a></div>

	<div class="mj-slideshow-arrow mj mj-slideshow-arrow-next mj-slideshow-arrow-slide-two"><a href="#mj-slideshow-slide-3-target"></a></div>
	<div class="mj-slideshow-arrow mj mj-slideshow-arrow-prev mj-slideshow-arrow-slide-two"><a href="#mj-slideshow-slide-1-target"></a></div>

	<div class="mj-slideshow-arrow mj mj-slideshow-arrow-next mj-slideshow-arrow-slide-three"><a href="#mj-slideshow-slide-4-target"></a></div>
	<div class="mj-slideshow-arrow mj mj-slideshow-arrow-prev mj-slideshow-arrow-slide-three"><a href="#mj-slideshow-slide-2-target"></a></div>

	<div class="mj-slideshow-arrow mj mj-slideshow-arrow-next mj-slideshow-arrow-slide-four"><a href="#mj-slideshow-slide-5-target"></a></div>
	<div class="mj-slideshow-arrow mj mj-slideshow-arrow-prev mj-slideshow-arrow-slide-four"><a href="#mj-slideshow-slide-3-target"></a></div>
    
    <div class="mj-slideshow-arrow mj mj-slideshow-arrow-next mj-slideshow-arrow-slide-five"><a href="#mj-slideshow-slide-1-target"></a></div>
	<div class="mj-slideshow-arrow mj mj-slideshow-arrow-prev mj-slideshow-arrow-slide-five"><a href="#mj-slideshow-slide-4-target"></a></div>
   
   <?php } ?>

    
    <!--Slides -->
  	<?php
		$j=0;
		if($effect == "slide") 
		{ 
			for($i = 1; $i <= count($content_slides); $i++ )
			{
				$left_pos = $slideWidth * $i;
		?>
        
        <div class="mj-slideshow-overflow-wrap mj">
			<div class="mj-slideshow-slides-wrap mj" style="height:100%; max-width:100%">
				<div class="mj-slideshow-slide mj" id="mj-slideshow-slide-<?php echo $i; ?>" style="height:100%; max-width:100%; left: <?php echo $left_pos - $slideWidth . "px" ; ?>">
		
					<div class="mj-slideshow-text mj" style="height:100%; width:<?php echo $txt_width;?>">
						 <div class="text" style="height:95%; width:85%" >
                            <!-- CONTENT FOR THE LEFT BOX GOES HERE: --> 
                           <h3> <?php echo $content_slides[$j][1]; ?> </h3>
                           <div id="desc"><?php echo $content_slides[$j][2]; ?></div>
                        </div>
					</div>
					<div class="mj-slideshow-image mj" style="height:100%; width:<?php echo $img_width;?>">
	 						<div class="image" style="max-width:93%; height:98%"> 
                        		<img src="modules/mod_mj-slideshow/images/<?php  echo $content_slides[$j][0]; ?>" alt="img" height="100%" width="100%" /> 
                    		</div>
					</div>
				</div>
        	</div>
        </div>
        <?php $j++ ; } }
		 else 
		 { 
		 	for($i = 1; $i <= count($content_slides); $i++ )
			{
		?>
        <div class="mj-slideshow-slide mj" id="mj-slideshow-slide-<?php echo $i; ?>">
            <div class="mj-slideshow-slide-content mj" style="height:<?php echo $slideHeight;?>;max-width:100%">
                    <div class="mj-slideshow-text mj" style="width:<?php echo $txt_width;?>; float:<?php echo $txt_position;?>"> 
                        <div class="text" style="width:96%; text-align: <?php echo $txt_align;?>" >
                            
                            <!-- CONTENT FOR THE LEFT BOX GOES HERE: --> 
                           
                           <h3> <?php echo $content_slides[$j][1]; ?> </h3>
                           <div id="desc"> <?php echo $content_slides[$j][2]; ?> </div>
                        
                        </div>
                    
                    </div>
                    
                    <div class="mj-slideshow-image mj" style="width:<?php echo $img_width;?>;<?php if($txt_width == '100%') {?> position: relative; bottom:0; <?php } else { ?> position: relative; <?php } ?> ">
                        
                        <!-- CONTENT FOR THE RIGHT BOX GOES HERE: -->
                        
                        <div class="image" style="max-width:100%; <?php if($txt_width == '100%') {?><?php /*?> padding: 0.9% 0 0;<?php */?> position: inherit; bottom:0 <?php } ?>"> 
                        	<img src="modules/mod_mj-slideshow/images/<?php  echo $content_slides[$j][0]; ?>" alt="img" /> 
                    	</div>
                    
                    </div>
            </div>
        </div>
    	<?php $j++; } }?> 
</div>
</div>

