<?php
/*
#------------------------------------------------------------------------
# Package - JoomlaMan JMSlideShow
# Version 1.0
# -----------------------------------------------------------------------
# Author - JoomlaMan http://www.joomlaman.com
# Copyright © 2012 - 2013 JoomlaMan.com. All Rights Reserved.
# @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
# Websites: http://www.JoomlaMan.com
#------------------------------------------------------------------------
*/
// no direct access
defined('_JEXEC') || die('Restricted access');
if (!defined('DS'))
  define('DS', '/');
if (!defined('JM_NEWS_PRO_IMAGE_FOLDER')) {
  define('JM_NEWS_PRO_IMAGE_FOLDER', JPATH_SITE . DS . 'media' . DS . 'mod_jmnewspro');
}
if (!defined('JM_NEWS_PRO_IMAGE_PATH')) {
  define('JM_NEWS_PRO_IMAGE_PATH', JURI::root(true) . '/media/mod_jmnewspro');
}
if (!file_exists(JM_NEWS_PRO_IMAGE_FOLDER)) {
  @mkdir(JM_NEWS_PRO_IMAGE_FOLDER, 0755) or die('Please change the permission');
}
if (!class_exists('JMNewsProSlide')) {
  require_once JPATH_SITE . DS . 'modules' . DS . 'mod_jmnewspro' . DS . 'classes' . DS . 'slide.php';
}
// Include the syndicate functions only once
require_once (dirname(__file__) . DS . 'helper.php');
$module_id = $module->id;
$slides = ModJmNewsProHelper::getSlides($params);
//print_r($slides);
$doc = JFactory::getDocument();
$jmnewspro_auto = $params->get('jmnewspro_auto', 'true');
$jmnewspro_timeout = $params->get('jmnewspro_timeout', 4000);
$jmnewspro_onhover = $params->get('jmnewspro_onhover', 'true');
$jmnewspro_speed = $params->get('jmnewspro_speed', 500);
$jmnewspro_touch = $params->get('$jmnewspro_touch', 0);
if(empty($jmnewspro_touch)) $jmnewspro_touch = 'false';
else $jmnewspro_touch = 'true';
//Finding for custom CSS in template
$custom_css = JPATH_SITE . '/templates/' . ModJmNewsProHelper::getTemplate() . '/css/' . $module->module . '_' . $params->get('jmnewspro_layout', 'default') . '.css';
if (file_exists($custom_css)) {
  $doc->addStylesheet(JURI::root(true) . '/templates/' . ModJmNewsProHelper::getTemplate() . '/css/' . $module->module . '_' . $params->get('jmnewspro_layout', 'default') . '.css');
} else {
  $doc->addStylesheet(JURI::root(true) . DS . 'modules/mod_jmnewspro/assets/css/mod_jmnewspro_' . $params->get('jmnewspro_layout', 'default') . '.css');
}
if ($params->get('jmnewspro_include_jquery', 0) == 1) {
  $doc->addScript(JURI::root(true) . DS . 'modules/mod_jmnewspro/assets/js/jquery-1.8.3.js');
}
global $jm_jquery_autoload;
if($params->get('jmnewspro_include_jquery')==2 && empty($jm_jquery_autoload)):?>
<script type="text/javascript">
var jQueryScriptOutputted = false;
function JMInitJQuery() {    
  if (typeof(jQuery) == 'undefined') {   
    if (! jQueryScriptOutputted) {
      jQueryScriptOutputted = true;
      document.write("<scr" + "ipt type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js\"></scr" + "ipt>");
    }
    setTimeout("JMInitJQuery()", 50);
  }         
}
JMInitJQuery();
</script>
<?php
$jm_jquery_autoload = 1;
endif;
require JModuleHelper::getLayoutPath('mod_jmnewspro', $params->get('jmnewspro_layout', 'default'));