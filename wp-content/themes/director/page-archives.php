<?php
/*
* Template Name: Archives
*/
?>
<?php get_header(); ?>
<div id="main" class="group">
	<div id="blog" class="left-col archives">
	</div>
	<?php get_sidebar(); ?>
	<?php wp_get_archives()?>
</div>
<?php get_footer(); ?>