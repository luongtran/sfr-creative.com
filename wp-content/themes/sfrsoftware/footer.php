<footer >
<div class="container" name="footer" >
    <div class="row ">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="row nopadding">
                <div class="col-sm-12 nopadding">
                    <div class="col-sm-2 nopadding bottom-logo">
                        <a class="col-sm-12 nopadding"  href="<?php bloginfo('url'); ?>" title="">
                            <img src="<?php print IMAGES; ?>/header-logo.png" class="img-responsive" />
                            <!--<span>SMART - FAST - RESPONSIBLE</span>-->
                        </a>
                    </div>
                    <div class="col-sm-10 nopadding">
                    <ul class="col-sm-12" >
                        <?php
                        $featured_args = array(
                            'posts_per_page' => 3,
                            'post_type' => 'menubot',
                        );
                        $query = new WP_Query( $featured_args );
                        if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
                        ?>
                            <li class="col-sm-3 nopadding-left">
                                <h4><?php echo the_title(); ?></h4>
                                <span style="color: #e2e2e2;">
                                    <?php the_content(); ?>
                                </span>
                            </li>
                        <?php
                        endwhile;endif;
                        ?>
                        <li class="col-sm-3 nopadding">
                            <h4>Get in Touch</h4>
                            <!-- Begin Address -->
                            <p class="col-xs-2 nopadding" >
                                <i class="fa fa-map-marker col-xs-2 nopadding"></i> 
                            </p>
                            <div class="col-xs-10 nopadding" >
                            <?php 
                                    $query = new WP_Query(array('post_type' => 'getintouch', 'p' => '2226'));                 
                                    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
                                        the_content();
                                    endwhile;endif; 
                            ?>
                            </div>
                            <!-- End Address -->
                            <!-- Begin Phone -->
                            <p class="col-xs-2 nopadding" >
                                <i class="fa fa-phone col-xs-2 nopadding"></i> 
                            </p>
                            <div class="col-xs-10 nopadding" >
                            <?php 
                                    $query = new WP_Query(array('post_type' => 'getintouch', 'p' => '2227'));                 
                                    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
                                        the_content();
                                    endwhile;endif; 
                            ?>
                            </div>
                            <!-- End Phone -->
                            <!-- Begin Email -->
                            <p class="col-xs-2 nopadding" >
                                <i class="fa fa-envelope-o col-xs-2 nopadding"></i> 
                            </p>
                            <div class="col-xs-10 nopadding" >
                            <?php 
                                    $query = new WP_Query(array('post_type' => 'getintouch', 'p' => '2228'));                 
                                    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                                       <a href="mailto:<?php remove_filter ('the_content', 'wpautop'); the_content(); add_filter ('the_content', 'wpautop'); ?>" id="mailto" ><?php the_content(); ?></a> 
                            <?php endwhile;endif; ?>
                            </div>
                            <!-- End Mail -->
                            <!-- Begin Link -->
                            <p class="col-xs-2 nopadding" >
                                <i class="fa fa-globe col-xs-2 nopadding"></i>                                  	
                            </p>
                            <div class="col-xs-10 nopadding" >
                            <?php 
                                    $query = new WP_Query(array('post_type' => 'getintouch', 'p' => '2229'));                 
                                    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
                                        the_content();
                                    endwhile;endif; 
                            ?>
                            </div>
                            <!-- End Link -->
                            <p class="col-xs-12 contact-bt" >
                                <div class="mj-social">
                                    <a class="facebook" href="#">Facebook</a>
                                    <a class="twitter" href="#">Twitter</a>
                                    <a class="rss" href="#">RSS</a>
                                </div>
                            </p>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                </div>
            </div>
        </div>
    </div>
    <p id="back-top" style="display: block;">
            <a href="#top"><span></span><!--<em>Back to top</em>--> </a>
    </p>
</div>           
</footer>
<!-- Form contact -->
<div class="contact-form">
<div style="display:none" >
    <div  id="contact_form_pop" >
        <h4 class="title-contact">Contact</h4>
        <?php echo do_shortcode('[contact-form-7 id="2202" title="Contact")]'); ?>
    </div>
</div>
</div>
<script type="text/javascript">
    //style="height:540px;overflow-y:scroll;"
        $('.carousel').carousel({
                  interval: 4000
        });
        function scrollToAnchor(aid){
            var aTag = $("div[name='"+ aid +"']");
            if(aid=='footer'){
                $('html,body').animate({scrollTop: aTag.offset().top-300},1000);
            } else {
                $('html,body').animate({scrollTop: aTag.offset().top},1000);
            }
        }
        $("#go-bottom").click(function() {
           scrollToAnchor('summary');
        });
        $(".technical").click(function() {
           scrollToAnchor('technicals-services');
        });
        $(".working").click(function() {
           scrollToAnchor('summary');
        });
        /*$(".about-us").click(function() {
           scrollToAnchor('footer');
        });*/
        $(document).ready(function(){

                // hide #back-top first
                $("#back-top").hide();

                // fade in #back-top
                $(function () {
                        $(window).scroll(function () {
                                if ($(this).scrollTop() > 500) {
                                        $('#back-top').fadeIn();
                                } else {
                                        $('#back-top').fadeOut();
                                }
                        });

                        // scroll body to 0px on click
                        $('#back-top a').click(function () {
                                $('body,html').animate({
                                        scrollTop: 0
                                }, 800);
                                return false;
                        });
                });

        });	
        /*disble link menu*/
       
            $("li.menu-item-2143").children("a").attr('href', "#");
            $("li.menu-item-2142").children("a").attr('href', "#");
            //$("li.menu-item-2144").children("a").attr('href', "#");
            $("li.menu-item-2146").children("a").attr('href', "#");
            $("li.menu-item-2146").children("a").attr('id', "callus");
            $("li.menu-item-2146").children("a").attr('data-toggle', "popover");
            $("li.menu-item-2146").children("a").attr('data-placement', "bottom");
            $("li.menu-item-2146").children("a").attr('data-content', '\n\
                <?php 
                    $query = new WP_Query('page_id=2140');      
                    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
                        remove_filter ('the_content', 'wpautop');
                        the_content();
                    endwhile; endif; 
                ?>');
            $("li.menu-item-2145").children("a").attr('href', "#contact_form_pop");
            $("li.menu-item-2145").children("a").attr('id', "inline");
            $('#callus').popover('hide');
        
        // Fancybox
	/* Apply fancybox to multiple items */
	
	$("a#inline").fancybox({
                maxWidth	: 295,
                width		: '70%',
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	true,
                'autoScale'          :   true,
                helpers : {
                    title : {
                            type : 'inside'
                    },
                    overlay : {
                            css : {
                                    'background' : 'rgba(238,238,238,0.85)'
                            }
                    }
                },
	});
        $("#projects #inline").fancybox({
                maxWidth	: 600,
                width		: '70%',
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	true,
                'autoScale'          :   true,
                helpers : {
                    title : {
                            type : 'inside'
                    },
                    overlay : {
                            css : {
                                    'background' : 'rgba(238,238,238,0.85)'
                            }
                    }
                },
	});
</script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/functions.js"></script>
<?php wp_footer(); ?>

</div>
</body>
</html>