<?php
/* Template Name: client_template */
 
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_sidebar(); ?>
		<div id="content">
			<div class="container">
	 				<div id="main_service_content">
	 				 <div class="p_c_image">
	  		  			<div style="text-align:center">
       						<?php
							if (has_post_thumbnail()) {
								the_post_thumbnail('featured-thumb');
							} else { echo '<img src="http://placehold.it/217x210">'; } ?>
      						<h4><?php echo the_title()?></h4>
      					</div>
      				</div>
      				<div class="p_c_content">
      				 	<div>
      						 <?php the_content(', '); ?>
      					</div>
      				</div>	  	 
	  				</div><!-- ./service image -->			      
						
					</div>
			</div>
 	<?php endwhile; else: ?>
		<p><?php _e('No posts were found. Sorry!'); ?></p>
	<?php endif; ?>
			</div><!-- ./container -->
		</div><!-- ./content -->	
<div>
<?php get_sidebar('footer'); ?>
<?php get_footer(); ?>