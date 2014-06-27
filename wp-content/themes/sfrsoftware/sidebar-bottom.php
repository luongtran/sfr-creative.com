<div class="row">
                        <div class="col-sm-6">
                            <div class="news-header">
                                <div class="news-line"></div>
                                <h3>Laster News</h3>
                            </div>
                            <ul class="news-list list-unstyled">
                            <?php  
                            $query = new WP_Query('posts_per_page=2');
                            if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                                <li class="row">                                
									<h2></h2>							 	
                                    <div class="col-xs-4 col-md-4">
                                        <?php if (has_post_thumbnail()) {
                                                the_post_thumbnail('medium',array('class' => 'img-responsive'));
                                            } else { echo '<img class="img-responsive thumbnail" src="'.print IMAGES.'/no-img.jpg">'; } 
            				?>
                                    </div>
                                    <div class="col-xs-8 col-md-8">
                                        <h4 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        <p class="news-summary"><?php echo excerpt(17); ?></p>
                                        <p class="news-link"><a href="<?php the_permalink(); ?>"><i class="fa fa-long-arrow-right"> </i> Read more</a></p>
                                    </div>
                                </li>
                                <?php endwhile; endif;?>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <div class="news-header">
                                <div class="news-line"></div>
                                <h3>Testimonilas</h3>
                            </div>
                            <div class="clearfix">
                                <div class="col-xs-6">
                                    <div class="clearfix">
                                        <div class="feedback-quote">
                                            <i>&quot;</i><br/>
                                            Ut wisi enim ad minim quis nostrud exerci tation veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                                            <br>
                                            <i>&quot;</i>
                                        </div>
                                        <div class="feedback-client clearfix">
                                            <div class="col-xs-4">
                                                <img src="<?php print IMAGES; ?>/sfrTeam_35.jpg" class="img-responsive" />
                                            </div>
                                            <div class="col-xs-8">
                                                <p class="client-name">Yzachi</p>
                                                <p class="client-position ">CEO AZB</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="clearfix">
                                        <div class="feedback-quote">
                                            <i>&quot;</i><br/>
                                            Ut wisi enim ad minim quis nostrud exerci tation veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                                            <br>
                                            <i>&quot;</i>
                                        </div>
                                        <div class="feedback-client clearfix">
                                            <div class="col-xs-4">
                                                <img src="<?php print IMAGES; ?>/sfrTeam_33.jpg" class="img-responsive" />
                                            </div>
                                            <div class="col-xs-8">
                                                <p class="client-name">Yzachi</p>
                                                <p class="client-position ">CEO AZB</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>