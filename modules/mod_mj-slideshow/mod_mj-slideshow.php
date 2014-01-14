<?php

/**
* Mj Slideshow view file
* @copyright (C) 2012 by Dasinfomedia - All rights reserved!
* @package Mj-Slideshow
* @license GNU/GPL, see LICENSE.php
*/


//No Direct Access
defined('_JEXEC') or die('Restricted Access');

?>

<?php


$slideWidth = $params->get('slideWidth');

$slideHeight = $params->get('slideHeight');

$effect = $params->get('sliderEffect');


//get details of Image 1

$img1 = $params->get('image1', "");
$title1 = $params->get('title1');
$desc1 = $params->get('desc1');

//get details of Image 2

$img2 = $params->get('image2', "");
$title2 = $params->get('title2');
$desc2 = $params->get('desc2');

//get details of Image 3

$img3 = $params->get('image3', "");
$title3 = $params->get('title3');
$desc3 = $params->get('desc3');

//get details of Image 4

$img4 = $params->get('image4', "");
$title4 = $params->get('title4');
$desc4 = $params->get('desc4');

//get details of Image 5

$img5 = $params->get('image5', "");
$title5 = $params->get('title5');
$desc5 = $params->get('desc5');

//get image and text width and Text Position

$img_width = $params->get('imageWidth');

$txt_width = $params->get('textWidth');

$txt_position = $params->get('textPosition');

$txt_align = $params->get('textAlign');

require JModuleHelper::getLayoutPath('mod_mj-slideshow');

?>

