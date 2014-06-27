<?php
	define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));
	define( 'IMAGES', TEMPPATH. "/images"); 
	register_nav_menu('main-menu', __('Menu Chinh'));
	add_theme_support('post-thumbnails'); //Bật tính năng Set Featured Image cho bài viết
	add_image_size('featured-thumb', 330, 335, true); //Size ảnh thumbnail của .featured-post.
	add_image_size('medium', 217, 210, true); //Size ảnh thumbnail của .featured-post.
	if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
    function my_jquery_enqueue() {
		wp_deregister_script('jquery');
		wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
    	wp_enqueue_script('jquery');
    	wp_enqueue_script( 'comment-reply' );
    }
 
    //Insert main.js
    function main_javascript() {
		wp_enqueue_script( 'mainjs', get_stylesheet_directory_uri() . '/js/main.js', array('jquery') );
    }
    add_action( 'wp_enqueue_scripts', 'main_javascript' );
	// Tạo sidebar
	if ( function_exists('register_sidebar') ) {
        register_sidebar(array(
                'name' => 'Sidebar Chính',
                'id' => 'main-sidebar',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>'
        ));
	}
	//Tuỳ biến searchform.
	function custom_searchform( $form ) {
	    $form = '<form role="search" method="get" class="search" action="' . home_url( '/' ) . '" >
	    <input type="text" placeholder="'.__("Nhập từ khoá").'" value="' . get_search_query() . '" name="s" id="s" />
	    <input type="submit" id="searchsubmit" value="Tìm" />
	    </form>';
	 
	    return $form;
	}
	add_filter( 'get_search_form', 'custom_searchform' );
	
	//Tạo widget danh sách bài mới
        class thachpham_recent_posts extends WP_Widget {
 
            function __construct() {
                parent::__construct(
                  'thachpham-recent-posts',
                  'Bài viết mới kèm thumbnail',
                  array( 'description' => 'Hiển thị bài viết mới bao gồm thumbnail', )
                );
        }
 
            public function widget($args, $instance) {
                    extract($args);
 
              $title = apply_filters( 'widget_title', $instance['title'] );
              $number = $instance['number'];
 
                    echo $before_widget . $before_title;
                    if ( ! empty ( $title ) ) {
                      echo $title;
                    }
                    echo $after_title;
 
                $args = array (
                  'posts_per_page' => $number,
                );
                $neatly_posts = new WP_Query($args);
                if( $neatly_posts->have_posts() ) {
                  echo '<ul>';
                  while( $neatly_posts->have_posts() ) : $neatly_posts->the_post(); ?>
                    <li>
                        <div class="post-thumbnail">
                                <?php if ( has_post_thumbnail() ) : the_post_thumbnail('thumbnail'); endif; ?>
                        </div>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                  <?php endwhile;
                }
 
                wp_reset_postdata();
 
                    echo $after_widget;
                }
 
            public function form( $instance ) {
                $title = strip_tags($instance['title']);
                if (isset( $instance[ 'number' ] ) ) {
                  $number = $instance['number'];
                } else { $number = '5'; }
 
            ?>
            <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>
            <p><em>Use the following options to customize the display.</em></p>
 
            <p style="border-bottom:4px double #eee;padding: 0 0 10px;">
              <label for="<?php echo $this->get_field_id( 'number' ); ?>">Số lượng bài viết cần hiển thị</label>
              <input id="<?php echo $this->get_field_id( 'number'); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" value="<?php echo esc_attr($number); ?>" type="number" style="width:100%;" /><br>
            </p>
 
            <?php }
 
            public function update( $new_instance, $old_instance ) {
                $instance = $old_instance;
 
                $instance['title'] = strip_tags($new_instance['title']);
                $instance['number'] = strip_tags($new_instance['number']);
 
                return $instance;
            }
 
        }
 
        function register_thachpham_recent_posts() {
            register_widget( 'thachpham_recent_posts' );
        }
        add_action( 'widgets_init', 'register_thachpham_recent_posts' );
        
function tao_custom_post_type()
{
 
    /*
     * Biến $label để chứa các text liên quan đến tên hiển thị của Post Type trong Admin
     */
    $label = array(
        'name' => 'Các sản phẩm', //Tên post type dạng số nhiều
        'singular_name' => 'Sản phẩm' //Tên post type dạng số ít
    );
 
    /*
     * Biến $args là những tham số quan trọng trong Post Type
     */
    $args = array(
        'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => 'Post type đăng sản phẩm', //Mô tả của post type
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
            'comments',
            'trackbacks',
            'revisions',
            'custom-fields'
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
        'rewrite' => array( 'slug' => 'sanpham' ),
        'capability_type' => 'post'
    );
 
    register_post_type('sanpham', $args); //Tạo post type với slug tên là sanpham và các tham số trong biến $args ở trên
 
}
/* Kích hoạt hàm tạo custom post type */
add_action('init', 'tao_custom_post_type'); 
/* Hiển thị custom post type ra trang chu post */       
add_filter('pre_get_posts','lay_custom_post_type');
function lay_custom_post_type($query) {
  if (is_home() && $query->is_main_query ())
    $query->set ('post_type', array ('post','sanpham'));
    return $query;
}
function tao_taxonomy() {
 
        /* Biến $label chứa các tham số thiết lập tên hiển thị của Taxonomy
         */
        $labels = array(
                'name' => 'Các loại sản phẩm',
                'singular' => 'Loại sản phẩm',
                'menu_name' => 'Loại sản phẩm'
        );
 
        /* Biến $args khai báo các tham số trong custom taxonomy cần tạo
         */
        $args = array(
                'labels'                     => $labels,
                'hierarchical'               => false,
                'public'                     => true,
                'show_ui'                    => true,
                'show_admin_column'          => true,
                'show_in_nav_menus'          => true,
                'show_tagcloud'              => true,
        		'rewrite' => array( 'slug' => 'loai-san-pham' ),
        );
 
        /* Hàm register_taxonomy để khởi tạo taxonomy
         */
        register_taxonomy('loai-san-pham', 'sanpham', $args);
 
}
 
// Hook into the 'init' action
add_action( 'init', 'tao_taxonomy', 0 );
//lay taxonomy
    function list_posts_by_taxonomy( $post_type, $taxonomy, $get_terms_args = array(), $wp_query_args = array() ){
    $tax_terms = get_terms( $taxonomy, $get_terms_args );
    if( $tax_terms ){
        foreach( $tax_terms  as $tax_term ){
            $query_args = array(
                'post_type' => $post_type,
                "$taxonomy" => $tax_term->slug,
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'ignore_sticky_posts' => true
            );
            $query_args = wp_parse_args( $wp_query_args, $query_args );
 
            $my_query = new WP_Query( $query_args );
            if( $my_query->have_posts() ) { ?>
                <h2 id="<?php echo $tax_term->slug; ?>" class="tax_term-heading"><?php echo $tax_term->name; ?></h2>
                <ul>
                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile; ?>
                </ul>
                <?php
            }
            wp_reset_query();
        }
    }
}    