<div id="intro">
	<div class="col-sm-8  n-pl">	
		<div class="col-sm-10 n-pl">
			<div id="myCarousel" class=" carousel slide">
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
                                    <?php
                                        $count = 1; //sologan first asdfasfsa
                                        $featured_args = array(
                                            'posts_per_page' => 3,
                                            'post_type' => 'sologan',
                                        );
                                        $query = new WP_Query( $featured_args );
                                        if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
                                        if($count==1) {
                                        ?> 
                                            <div class="item active" >
                                                   <div id="saying" class="clearfix">
                                                           <div class=" col-sm-11 col-sm-offset-1">
                                                                    <h2>
                                                                        <?php echo '<i>" </i>';
                                                                             remove_filter ('the_content', 'wpautop'); 
                                                                             the_content(); 
                                                                             add_filter ('the_content', 'wpautop'); 
                                                                             echo '<i>"</i>';
                                                                        ?>
                                                                    </h2>
                                                           </div>						
                                                   </div> 
                                           </div>  
                                        <?php } else {?>
                                            <div class="item" >
                                                   <div id="saying" class="clearfix">
                                                           <div class=" col-sm-10 col-sm-offset-1">
                                                                    <h2>
                                                                        <?php echo '<i>" </i>';
                                                                             remove_filter ('the_content', 'wpautop'); 
                                                                             the_content(); 
                                                                             add_filter ('the_content', 'wpautop'); 
                                                                             echo '<i>"</i>';
                                                                        ?>
                                                                    </h2>
                                                           </div>						
                                                   </div> 
                                           </div> 
                                        <?php }
                                        $count ++;
                                        endwhile;endif;
                                    ?>
					
					
	            </div>
	            <p class="slide-seo">Luong Tran, CEO</p>
	         <!-- Carousel nav -->
			<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>
		</div>
	</div>
</div>
<div id="intro-button">
	<div class="col-sm-8  n-pl">
		<div class="col-sm-10 n-pl">
			<button class="btn btn-primary">See our works</button>
			<a href="#contact_form_pop" id="inline"><button class="btn btn-default">Contact</button></a>
		</div>
	</div>
</div>
<div id="intro-bottom">
	<a id="go-bottom" href="#"><i class="fa fa-chevron-circle-down"></i></a>
</div>
</div>
</div>