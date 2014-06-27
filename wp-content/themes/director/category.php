<?php if ( have_posts() ) : //Kiểm tra xem biến $wp_query của WordPress có giá trị chưa, mặc định hàm này sẽ kiểm tra query trong $wp_query.
    while( have_posts() ) : //kiểm tra số lần lặp dựa trên số lượng bài viết được thực thi bởi $wp_query.
        the_post(); // Kiểm tra loop xem bài đã được loop chưa, nếu rồi thì bỏ qua và loop bài kế.
        the_title(); //Hiển thị tiêu đề của post, sử dụng get_the_title() để return giá trị của nó.
        the_time();
        the_content(); //hiển thị nội dung của post.
		 the_excerpt(); // hiển thị một phần nội dung
		 the_tags();
        /*--Xem thêm Template Tags: http://codex.wordpress.org/Template_Tags **/
    endwhile;
 else : //Nếu $wp_query không có nội dung
    echo "Không có bài nào cả";
 endif;
 
?>