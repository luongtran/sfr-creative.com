<?php get_header(); ?>
  <!-- Carousel items -->
<?php get_sidebar('intro'); ?>
        <div class="container">
            <div class="row" id="main-content">
            	<div class="col-sm-10 col-sm-offset-1">              
                    <?php 
                    $query = new WP_Query('page_id=2132');
                    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
                        the_content();
                    endwhile;endif; ?>
                    <div id="projects" class="row">
                        <div class="row">
                        <ul class="grid cs-style-3">
                            <?php 
                                $featured_args = array(
                                'posts_per_page' => 8,
                                'post_type' => 'dichvu',
                                );
                                $query = new WP_Query( $featured_args );
                                if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
                            ?>
                            <li class="col-sm-3"> 
                                
                            <figure>  
                                <a id="inline" href="#<?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?>" >
                                <?php if (has_post_thumbnail()) {
                                   the_post_thumbnail('normal',array('class'=>'img-responsive'));
                                   } else { echo '<img class="img-responsive thumbnail" src="'.IMAGES.'/no-img.jpg">'; } 
                               ?>
                                </a> 
                            </figure>   
                                <div style="display:none" >
                                <div  id="<?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?>" >
                                   <?php the_post_thumbnail(array(9999,9999));?>
                                </div>
                                </div>
                            </li>
                        <?php  endwhile; endif;?>
			</ul>
                        </div>
                    </div>
                    <div name="technicals-services" id="technicals-services">
                    <?php 
                        $query = new WP_Query('page_id=2134');                 
                        if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
                            the_content();
                        endwhile;endif; 
                    ?>
                        <div id="technicals-image-wrapper">
                            <img src="<?php print IMAGES; ?>/logo-services.png" alt="" class="img-responsive" />
                        </div>
                    </div>
                    <?php get_sidebar('bottom'); ?>
                </div>
            </div>
        </div>
        
<?php get_footer(); ?>
