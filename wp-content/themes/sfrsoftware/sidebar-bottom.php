<div class="row">
                        <div class="col-sm-6">
                            <div class="news-header">
                                <div class="news-line"></div>
                                <h3>Laster News</h3>
                            </div>
                            <ul class="news-list list-unstyled">
                            <?php
                            $input = array('posts_per_page'=>2,'tag'=>'News');
                            $query = new WP_Query($input);
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
                            <?php
                            $input = array('posts_per_page'=>2,'tag'=>'Testimonilas');
                            $query = new WP_Query($input);
                            if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                                <div class="col-xs-6">
                                    <div class="clearfix">
                                    <?php
                                        remove_filter ('the_content', 'wpautop'); 
                                            the_content(); 
                                        add_filter ('the_content', 'wpautop');
                                    ?>
                                    </div>
                                </div>
                            <?php endwhile; endif;?>
                            </div>
                        </div>
                    </div>