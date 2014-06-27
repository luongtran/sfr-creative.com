<?php get_header();?>			
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_sidebar(); ?>
		<div id="content">
			<div class="container">
	 				<div class="post">
						<h2><?php the_title(); ?>
						<?php the_content(); ?>
					</div>
 	<?php endwhile; else: ?>
		<p><?php _e('No posts were found. Sorry!'); ?></p>
	<?php endif; ?>
			</div><!-- ./container -->
		</div><!-- ./content -->	
<?php get_sidebar('footer'); ?>
<?php get_footer(); ?>