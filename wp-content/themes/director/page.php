<?php/* if ( have_posts() ) : //Kiểm tra xem biến $wp_query của WordPress có giá trị chưa, mặc định hàm này sẽ kiểm tra query trong $wp_query.
    while( have_posts() ) : //kiểm tra số lần lặp dựa trên số lượng bài viết được thực thi bởi $wp_query.
        the_post(); // Kiểm tra loop xem bài đã được loop chưa, nếu rồi thì bỏ qua và loop bài kế.
        the_title(); //Hiển thị tiêu đề của post, sử dụng get_the_title() để return giá trị của nó.
        the_time();
        the_content(); //hiển thị nội dung của post.
		 the_excerpt(); // hiển thị một phần nội dung
		 the_excerpt();
		 the_tags();
        /*--Xem thêm Template Tags: http://codex.wordpress.org/Template_Tags **/
    /*endwhile;
 else : //Nếu $wp_query không có nội dung
    echo "Không có bài nào cả";
 endif;
 */
?>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); 
?>
<!-- end vidu -->

<div id="main" class="group">
<div id="blog" class="left-col">
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	 <div class="post">
		<h2><?php the_title(); ?>
		<div class="byline">	by <?php the_author_posts_link(); ?> 
								on <span class="date"><?php the_time('l F d, Y'); ?></span><br/>
		</div>
	</div>
 	<?php endwhile; else: ?>
		<p><?php _e('No posts were found. Sorry!'); ?></p>
	<?php endif; ?>
<!-- end blog -->
<div class="navi">
	<div class="right">
	<?php previous_post_link(); ?> / <?php next_post_link(); ?>
</div>
</div>
<?php get_sidebar();?>
<?php get_footer();?>