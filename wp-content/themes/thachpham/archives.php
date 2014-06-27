<?php get_header(); ?>

<div class="content-main">
<?php if (have_posts()) :  while (have_posts()) : the_post();?>
     <div class="post">
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
                 <div class="facebook">Facebook</div>
                 <div class="googleplus">Google+</div>
                 <div class="more">
                     <a href="<?php the_permalink(); ?>">Đọc tiếp</a>
                 </div>
             </div>
         </div><!--end .post-info-->
     </div><!--end .post-->
 <?php endwhile; //End Loop 
 	endif;
 ?>
     
     <div class="pagination">
         <?php wp_pagenavi(); ?>
     </div>
     <div class="category-content">
         <div class="cat-1">
             <h3>Thủ thuật WordPress</h3>
             <?php 
             	$query = new WP_Query('cat=1&posts_per_page=1');
                if($query->have_posts()) : 
	             	while($query->have_posts()) : $query->the_post(); ?>
	             	<div class="post-info">
	             		<?php if(has_post_thumbnail()) {
	             			the_post_thumbnail('medium');
	            		} else { echo '<img src="http://placehold.it/217x210">'; } ?>
	             		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
	             	<?php endwhile; ?>
	             		<ul class="child">
	             		<?php 
	             		$query = new WP_Query('cat=1&posts_per_page=4&offset=1');
	             		while($query->have_posts()) : $query->the_post(); ?>
	             		<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
             <?php endwhile; endif; ?>
                 </ul>
             </div>
         </div><!--end cat-->
         <div class="cat-2">
             <h3>Thủ thuật blog</h3>
             <?php 
             	$query = new WP_Query('cat=55&posts_per_page=1');
                if($query->have_posts()) : 
	             	while($query->have_posts()) : $query->the_post(); ?>
	             	<div class="post-info">
	             		<?php if(has_post_thumbnail()) {
	             			the_post_thumbnail('medium');
	            		} else { echo '<img src="http://placehold.it/217x210">'; } ?>
	             		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
	             	<?php endwhile; ?>
	             		<ul class="child">
	             		<?php 
	             		$query = new WP_Query('cat=55&posts_per_page=4&offset=1');
	             		while($query->have_posts()) : $query->the_post(); ?>
	             		<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
             <?php endwhile; endif; ?>
                 </ul>
             </div>
         </div><!--end cat-->
     </div><!--end .category-content-->
 </div>
<?php get_sidebar(); ?>


<?php get_footer(); ?>