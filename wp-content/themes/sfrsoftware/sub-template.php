<?php
/* Template Name: sub_template */
 
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_sidebar(); ?>
		<div id="content">
			<div class="container">
	 				<div id="service_image">			      
						<?php
						if (has_post_thumbnail()) {
								the_post_thumbnail('featured-thumb');
						} else { echo '<img src="http://placehold.it/217x210">'; } ?>
					</div>
					<?php get_sidebar('leftbar') ?>
					<?php get_sidebar('main') ?>
			</div>
 	<?php endwhile; else: ?>
		<p><?php _e('No posts were found. Sorry!'); ?></p>
	<?php endif; ?>
			</div><!-- ./container -->
		</div><!-- ./content -->	
<div>
<?php get_sidebar('footer'); ?>
<?php get_footer(); ?>