 <div class="row n-t30">
                        <ul class="grid cs-style-3">
						<li class="col-sm-3" >
							<figure>
								<img src="<?php print IMAGES; ?>/sfrTeam_13.jpg" class="img-responsive" />
								<figcaption>
									<a href="http://dribbble.com/shots/1116685-Settings">Take a look</a>
								</figcaption>
							</figure>
						</li>
						<li class="col-sm-3">
							<figure>
								<img src="<?php print IMAGES; ?>/sfrTeam_20.jpg" class="img-responsive" />
								<figcaption>
									<a href="http://dribbble.com/shots/1116685-Settings">Take a look</a>
								</figcaption>
							</figure>
						</li>
						<li class="col-sm-3">
							<figure>
								<img src="<?php print IMAGES; ?>/sfrTeam_21.jpg" class="img-responsive" />
								<figcaption>
									<a href="http://dribbble.com/shots/1116685-Settings">Take a look</a>
								</figcaption>
							</figure>
						</li>
						<li class="col-sm-3">
							<figure>
								<img src="<?php print IMAGES; ?>/sfrTeam_22.jpg" class="img-responsive" />
								<figcaption>
									<a href="http://dribbble.com/shots/1116685-Settings">Take a look</a>
								</figcaption>
							</figure>
						</li>
						</ul>
                        </div>
<ul class="col-sm-12" >
                        <li class="col-sm-3 nopadding-left">
                            <h4>About us</h4>
                            <p>
                                Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse  eu feugiat nulla <br>facilisis at vero eros et accumsan et iusto odio dignissim qui blandit.
                            </p>
                        </li>
                        <li class="col-sm-3 nopadding-left" >
                            <h4>Quick Links</h4>
                            <p>
                                Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse  eu feugiat nulla <br>facilisis at vero eros et accumsan et iusto odio dignissim qui blandit.
                            </p>
                        </li>
                        <li class="col-sm-3 nopadding-left">
                            <h4>Our Team</h4>
                            <p>
                                Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse  eu feugiat nulla <br>facilisis at vero eros et accumsan et iusto odio dignissim qui blandit.
                            </p>
                        </li>
                        <li class="col-sm-3 nopadding">
                            <h4>Get in Touch</h4>
                            <p class="col-xs-12 nopadding" >
                                <i class="fa fa-map-marker col-xs-2 nopadding"></i> 
                                <span class="col-xs-10 nopadding"  >North Carrolina <br />
                                8901 Marmora Road, Glasgow <br />
                                D04 89GR <br />
                                </span>
                            </p>
                            <p class="col-xs-12 nopadding" >
                                <i class="fa fa-phone col-xs-2 nopadding"></i> 
                                <span class="col-xs-10 nopadding"  >+1 (800) 123 9876
                                </span>
                            </p>
                            <p class="col-xs-12 nopadding" >
                                <i class="fa fa-envelope-o col-xs-2 nopadding"></i> 
                                <span class="col-xs-10 nopadding"  >info@demolink.org
                                </span>
                            </p>
                            <p class="col-xs-12 nopadding" >
                                <i class="fa fa-globe col-xs-2 nopadding"></i> 
                                <span class="col-xs-10 nopadding"  >www.demolink.org
                                </span>                                  	
                            </p>
                            <p class="col-xs-12 contact-bt" >
                                <a href="#" title="" ><i class="fa fa-envelope "></i></a>
                                <a href="#" title="" ><i class="fa fa-rss-square"></i></a>
                                <a href="#" title="" ><i class="fa fa-twitter-square "></i></a>
                            </p>
                        </li>
                    </ul>


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
                
                <figcaption >
                             		<a href="<?php the_permalink();?>">Take a look</a>
                              	</figcaption>