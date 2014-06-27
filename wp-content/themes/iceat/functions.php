<?php 
	define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));
	define( 'IMAGES', TEMPPATH. "/images"); 
	register_nav_menu('main-menu', __('Menu Chinh'));
	add_theme_support('post-thumbnails'); //Bật tính năng Set Featured Image cho bài viết
	add_image_size('featured-thumb', 985, 285, false); //Size ảnh thumbnail của .featured-post.
	function my_page_css_class( $css_class, $page ) {
    global $post;
    if ( $post->ID == $page->ID ) {
        $css_class[] = 'active';
    }
    return $css_class;
	}
	add_filter( 'page_css_class', 'my_page_css_class', 10, 2 );
?>