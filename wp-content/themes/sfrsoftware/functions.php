<?php 
    // Define
    define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));
    define( 'IMAGES', TEMPPATH. "/images"); 
    //register menu
    register_nav_menu('main-menu', __('Menu Chinh'));
    add_theme_support('post-thumbnails'); //Bật tính năng Set Featured Image cho bài viết
    set_post_thumbnail_size( 474, 180, true );
    
    add_image_size('featured-thumb', 1000, 1000, false); //Size ảnh thumbnail của .featured-post.
    add_image_size('normal', 260, 210, false); //Size ảnh thumbnail của .featured-post.
    add_image_size('big-img', 250, 200, false); //Size ảnh thumbnail của .featured-post.
    add_image_size('avatar-ceo', 50, 44, false); //Size ảnh thumbnail của .featured-post.
    //example
    /*if ( function_exists( 'add_image_size' ) ) { 
        add_image_size('featured-thumb', 1000, 1000, true); //Size ảnh thumbnail của .featured-post.
        add_image_size('normal', 222, 180, true); //Size ảnh thumbnail của .featured-post.
        add_image_size('big-img', 474, 180, true); //Size ảnh thumbnail của .featured-post.
    }*/
    
    function my_page_css_class( $css_class, $page ) {
        global $post;
        if ( $post->ID == $page->ID ) {
            $css_class[] = 'active';
        }
    return $css_class;
    }
    add_filter( 'page_css_class', 'my_page_css_class', 10, 2 );
	
    //Begin limit char excerpt
    function excerpt($limit) {
        $excerpt = explode(' ', get_the_excerpt(), $limit);
        if (count($excerpt)>=$limit) {
            array_pop($excerpt);
            $excerpt = implode(" ",$excerpt).'...';
        } else {
            $excerpt = implode(" ",$excerpt);
        }	
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
    }
     
    function content($limit) {
        $content = explode(' ', get_the_content(), $limit);
        if (count($content)>=$limit) {
            array_pop($content);
            $content = implode(" ",$content).'...';
        } else {
            $content = implode(" ",$content);
        }	
        $content = preg_replace('/\[.+\]/','', $content);
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]&gt;', $content);
    return $content;
    }
    //End limit char excerpt
    //Begin tao custom post
    function tao_custom_post_type()
    {
 
    /*
     * Biến $label để chứa các text liên quan đến tên hiển thị của Post Type trong Admin
     */
    $label = array(
        'name' => 'Các dịch vụ', //Tên post type dạng số nhiều
        'singular_name' => 'Dịch vụ' //Tên post type dạng số ít
    );
 
    /*
     * Biến $args là những tham số quan trọng trong Post Type
     */
    $args = array(
        'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => 'Post type đăng dịch vụ', //Mô tả của post type
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
            'comments',
        ), //Các tính năng được hỗ trợ trong post type
        'taxonomies' => array( 'category', 'post_tag' ), //Các taxonomy được phép sử dụng để phân loại nội dung
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, false thì giống như Page
        'public' => true, //Kích hoạt post type
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'menu_icon' => '', //Đường dẫn tới icon sẽ hiển thị
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post' //
    );
    flush_rewrite_rules();
    register_post_type('dichvu', $args); //Tạo post type với slug tên là sanpham và các tham số trong biến $args ở trên
    }
    /* Kích hoạt hàm tạo custom post type */
    add_action('init', 'tao_custom_post_type');
    add_filter('pre_get_posts','lay_custom_post_type');
    function lay_custom_post_type($query) {
        if (is_home() && $query->is_main_query ())
        $query->set ('post_type', array ('post','dichvu'));
    return $query;
    }
    
    // Begin tạo menu bootom
    function menubot_custom_post_type()
    {
 
    /*
     * Biến $label để chứa các text liên quan đến tên hiển thị của Post Type trong Admin
     */
    $label = array(
        'name' => 'Menu bottom', //Tên post type dạng số nhiều
        'singular_name' => 'Menu bottom' //Tên post type dạng số ít
    );
 
    /*
     * Biến $args là những tham số quan trọng trong Post Type
     */
    $args = array(
        'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => 'Post type menu bottom', //Mô tả của post type
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
        ), //Các tính năng được hỗ trợ trong post type
        'taxonomies' => array( 'category', 'post_tag' ), //Các taxonomy được phép sử dụng để phân loại nội dung
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, false thì giống như Page
        'public' => true, //Kích hoạt post type
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'orderby'=>'title',
        'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'menu_icon' => '', //Đường dẫn tới icon sẽ hiển thị
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post' //
    );
 
    register_post_type('menubot', $args); //Tạo post type với slug tên là sanpham và các tham số trong biến $args ở trên
    }
    /* Kích hoạt hàm tạo custom post type */
    add_action('init', 'menubot_custom_post_type');
    //End Menubot
    
    // Begin tạo get in touch
    function getintouch_custom_post_type()
    {
 
    /*
     * Biến $label để chứa các text liên quan đến tên hiển thị của Post Type trong Admin
     */
    $label = array(
        'name' => 'Get in touch', //Tên post type dạng số nhiều
        'singular_name' => 'Get in touch' //Tên post type dạng số ít
    );
 
    /*
     * Biến $args là những tham số quan trọng trong Post Type
     */
    $args = array(
        'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => 'Post type get in touch', //Mô tả của post type
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
        ), //Các tính năng được hỗ trợ trong post type
        'taxonomies' => array( 'category', 'post_tag' ), //Các taxonomy được phép sử dụng để phân loại nội dung
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, false thì giống như Page
        'public' => true, //Kích hoạt post type
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'orderby'=>'title',
        'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'menu_icon' => '', //Đường dẫn tới icon sẽ hiển thị
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post' //
    );
 
    register_post_type('getintouch', $args); //Tạo post type với slug tên là sanpham và các tham số trong biến $args ở trên
    }
    /* Kích hoạt hàm tạo custom post type */
    add_action('init', 'getintouch_custom_post_type');
    
    // Sologan
    function sologan_custom_post_type()
    {
 
    /*
     * Biến $label để chứa các text liên quan đến tên hiển thị của Post Type trong Admin
     */
    $label = array(
        'name' => 'Sologan', //Tên post type dạng số nhiều
        'singular_name' => 'Sologan' //Tên post type dạng số ít
    );
 
    /*
     * Biến $args là những tham số quan trọng trong Post Type
     */
    $args = array(
        'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => 'Post type sologan', //Mô tả của post type
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
        ), //Các tính năng được hỗ trợ trong post type
        'taxonomies' => array( 'category', 'post_tag' ), //Các taxonomy được phép sử dụng để phân loại nội dung
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, false thì giống như Page
        'public' => true, //Kích hoạt post type
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'orderby'=>'title',
        'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'menu_icon' => '', //Đường dẫn tới icon sẽ hiển thị
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post' //
    );
 
    register_post_type('sologan', $args); //Tạo post type với slug tên là sanpham và các tham số trong biến $args ở trên
    }
    /* Kích hoạt hàm tạo custom post type */
    add_action('init', 'sologan_custom_post_type');
    
?>