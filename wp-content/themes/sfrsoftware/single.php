<?php get_header(); ?>
  <!-- Carousel items -->
<?php get_sidebar('intro'); ?>
        
        <div class="container">           
            <div class="row">
            	<div class="col-sm-10 col-sm-offset-1">                    
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="page-header">
                        <h2><?php the_title(); ?></h2>
                    </div>
                    <div class="section border-bottom">
                        <?php the_content(); ?>
                    </div>                    
                    <?php endwhile; else: ?>
                        <p><?php _e('No posts were found. Sorry!'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
  </div>      
<?php get_footer(); ?>
