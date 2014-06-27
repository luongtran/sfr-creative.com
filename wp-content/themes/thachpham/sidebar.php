<div class="sidebar">
    <?php
 		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('main-sidebar') ) :

		endif;
	
	?>
	<?php 
	//list terms in a given taxonomy using wp_list_categories (also useful as a widget if using a PHP Code plugin)
	
	$taxonomy     = 'loai-san-pham';
	$orderby      = 'name'; 
	$show_count   = 1;      // 1 for yes, 0 for no
	$pad_counts   = 0;      // 1 for yes, 0 for no
	$hierarchical = 1;      // 1 for yes, 0 for no
	$title        = '';
	
	$args = array(
	  'taxonomy'     => $taxonomy,
	  'orderby'      => $orderby,
	  'show_count'   => $show_count,
	  'pad_counts'   => $pad_counts,
	  'hierarchical' => $hierarchical,
	  'title_li'     => $title
	);
	?>
	
	<ul>
	<?php wp_list_categories( $args ); ?>
	</ul>
</div>