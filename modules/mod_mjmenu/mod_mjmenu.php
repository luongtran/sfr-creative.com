<?php /*
* @package Mj Menu
* @copyright (C) 2012 by Dasinfomedia - All rights reserved!
* @license GNU/GPL, see LICENSE.php
*/
defined('_JEXEC') or die('Restricted access');
?>
<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css' />
<?php
$mjapp = JFactory::getApplication();
$document = JFactory::getDocument();

//$document->addScript('modules/mod_mjmenu/assets/js/jquery.js');

$bootstrap = 'modules/mod_mjmenu/assets/css/bootstrap.css';
$responsive = 'modules/mod_mjmenu/assets/css/bootstrap-responsive.css';
$template = 'modules/mod_mjmenu/assets/css/template.css';
//$document->addStyleSheet($bootstrap);
//$document->addStyleSheet($responsive);
$document->addStyleSheet($template);

$mainmenubgcolor=$params->get('mainmenubgcolor'); 

if(isset($mainmenubgcolor)) {
	$document->addStyleDeclaration("
		.mj-mainnav.navbar .nav > li > a,.mj-mainnav.navbar .nav-collapse .nav > li > a, .mj-mainnav.navbar .nav-collapse ul.nav li a {background-color:$mainmenubgcolor;}
		");
}

$submenubgcolor=$params->get('submenubgcolor'); 

if(isset($submenubgcolor)) {
	$document->addStyleDeclaration("
.mj-mainnav.navbar .nav > li ul.nav-child li a{background-color:$submenubgcolor;}
		");
}

$mainmenucolor=$params->get('mainmenucolor'); 
if(isset($mainmenucolor)) {
	$document->addStyleDeclaration("
	.mj-mainnav.navbar .nav > li > a,.mj-mainnav.navbar .nav-collapse .nav > li > a, .mj-mainnav.navbar .nav-collapse ul.nav li a{color:$mainmenucolor;}
		");
}

$submenucolor=$params->get('submenucolor'); 

if(isset($submenucolor)) {
	$document->addStyleDeclaration("
.mj-mainnav.navbar .nav > li ul.nav-child li a, .mj-mainnav.navbar .nav-collapse ul.nav li.active > ul.nav-child li a{color:$submenucolor;}
		");
}

$fsize=$params->get('fsize'); 
if(isset($fsize)) {
	$document->addStyleDeclaration("
.mj-mainnav.navbar .nav > li > a{font-size:$fsize;}
		");
}
$subfsize=$fsize;
$subfsizediv=$subfsize/5;
$subfsize=$subfsize - $subfsizediv;
if(isset($subfsize)) {
	$document->addStyleDeclaration("
	.mj-mainnav.navbar .nav > li ul.nav-child li a{font-size:$subfsize;}
		");
}

require_once (dirname(__FILE__).'/helper.php');
$params->def('module_id',$module->id);
$mjmenu = new modMJMenuHelper();
require(JModuleHelper::getLayoutPath('mod_mjmenu'));

?>



