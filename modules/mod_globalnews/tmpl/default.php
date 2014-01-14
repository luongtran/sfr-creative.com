<?php
/*------------------------------------------------------------------------
# mod_globalnews - Global News Module
# ------------------------------------------------------------------------
# author    Joomla!Vargas
# copyright Copyright (C) 2010 joomla.vargas.co.cr. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://joomla.vargas.co.cr
# Technical Support:  Forum - http://joomla.vargas.co.cr/forum
-------------------------------------------------------------------------*/

// no direct access
defined('_JEXEC') or die;

$i = $j = 0;
$begin_tag = array();
$end_tag = array();
$wrapper = $params->get('wrapper');//div class class1 class2 - div class class3 class4
if($wrapper!='null'){
    $doms = explode('---', $wrapper);
    $partent ="/([^`]*?) class .*?/";
    if(count($doms)>0){
        foreach ($doms as $k => $dom) {
            preg_match($partent,$dom,$dom_result);
            $tag = trim($dom_result[1]);//echo $tag;
            $classes = str_replace("$tag class",'', $dom);//echo  $classes.'-';
            $begin_tag[] = "<$tag class='$classes'>";
            $end_tag[]   = "</$tag>";
        }
    }
}
foreach ($cat as $group) :

	$listCondition = $group->cond;
	$list  = modGlobalNewsHelper::getGN_List($params,$listCondition);
        
	if (count($list) || $empty != 0) :

		$more  = $params->get('more', 1);

		$i++; $j++; 
 foreach ($begin_tag as $bg) {
     echo $bg;
 }
?>
<?php 
            if ( $show_cat != 0 ) : ?>
<div class="gn_header_<?php echo $globalnews_id; ?>"> <span class="gn_header"><?php echo $group->image . $group->title; ?></span>
  <div class="gn_clear"></div>
</div>
<?php endif;
            if ( count ( $list) > 0 ) :
            require(JModuleHelper::getLayoutPath('mod_globalnews', $layout));
    endif; ?>
<?php
    foreach ($end_tag as $end) {
       echo $end;
    }
    if ( $i == $cols && $j != $total ) : ?>
<?php
			$i=0; 
		endif;
	endif;
endforeach; ?>
