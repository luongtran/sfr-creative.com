<?php get_header(); ?>
  <!-- Carousel items -->
<?php get_sidebar('intro'); ?>
    <div class="container">         
        <div class="row"  id="main-content">
            <div class="col-sm-10 col-sm-offset-1">   
                <div class="post-thumbnail">
                    <?php if (has_post_thumbnail()) {
                                 the_post_thumbnail('medium');
                    } else { echo '<img src="http://placehold.it/217x210">'; } ?>
                </div>
            <div class="post-info">
                <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                <div class="post-meta">
                    Đăng bởi <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a> trong mục <a href="#"><?php the_category(', ') ?></a>
                </div>
                <div class="post-exceprt">
                    <?php the_excerpt(); ?>
                </div>
                <div class="post-below">
                     <a href="<?php the_permalink(); ?>">Đọc tiếp</a>
                </div>
            </div>
        </div><!--end .content-->
        </div>
    </div>
  </div>
<?php get_footer(); ?>
