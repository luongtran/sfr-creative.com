<?php
add_action('init', 'business_manager_register'); 
function business_manager_register() { 
//Arguments to create post type.
	$args = array( 
	'label' => __('Business Manager'), 
	'singular_label' => __('Business'), 
	'public' => true, 
	'show_ui' => true, 
	'capability_type' => 'post', 
	'hierarchical' => true, 
	'has_archive' => true,
	'supports' => array('title', 'editor', 'thumbnail'),
	'rewrite' => array('slug' => 'businesses', 'with_front'=> false), ); 
//Register type and custom taxonomy for type.
	register_post_type( 'businesses' , $args );
}
register_taxonomy("business-type", array("businesses"), array("hierarchical" => true, "label" => "Business Types", "singular_label" => "Business Type", "rewrite" => true, "slug" => 'business-type'));
if (function_exists('add_theme_support')) {
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size( 220, 150 );
	add_image_size('storefront', 620, 270, true);
}
add_action("admin_init", "business_manager_add_meta"); 
function business_manager_add_meta(){ 
	add_meta_box("business-meta", "Business Options", "business_manager_meta_options", "businesses", "normal", "high"); 
} 
function business_manager_meta_options(){ 
global $post; 
if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;
	$custom = get_post_custom($post->ID); 
	$address= $custom["address"][0];
	$address_two= $custom["address_two"][0];
	$city= $custom["city"][0];
	$state= $custom["state"][0];
	$zip= $custom["zip"][0];
	$website = $custom["website"][0]; 
	$phone = $custom["phone"][0]; 
	$email = $custom["email"][0]; 
?> 
<style type="text/css">
	<?php include('business-manager.css'); ?>
</style>
<div class="business_manager_extras">
<?php $website= ($website == "") ? "http://" : $website; ?>
<div><label>Website:</label><input name="website" 
value="<?php echo $website; ?>" /></div>
<div><label>Phone:</label><input name="phone" 
value="<?php echo $phone; ?>" /></div>
<div><label>Email:</label><input name="email" 
value="<?php echo $email; ?>" /></div>
<div><label>Address:</label><input name="address" 
value="<?php echo $address; ?>" /></div>
<div><label>Address 2:</label><input name="address_two" 
value="<?php echo $address_two; ?>" /></div>
<div><label>City:</label><input name="city" 
value="<?php echo $city; ?>" /></div>
<div><label>State:</label><input name="state" 
value="<?php echo $state; ?>" /></div>
<div><label>Zip:</label><input name="zip" 
value="<?php echo $zip; ?>" /></div>
</div> 
<?php 
} 
add_action('save_post', 'business_manager_save_extras'); 
function business_manager_save_extras(){ 
global $post;
if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){ 
//if you remove this the sky will fall on your head.
return $post_id;
}else{
update_post_meta($post->ID, "website", $_POST["website"]); 
update_post_meta($post->ID, "city", $_POST["city"]);
update_post_meta($post->ID, "state", $_POST["state"]);
update_post_meta($post->ID, "address", $_POST["address"]);
update_post_meta($post->ID, "address_two", $_POST["address_two"]); 
update_post_meta($post->ID, "zip", $_POST["zip"]);
update_post_meta($post->ID, "phone", $_POST["phone"]);

update_post_meta($post->ID, "email", $_POST["email"]);
} 
} 





















function stheme_product_post_type() {
 
    $labels = array(
        'name'                => _x( 'Sản phẩm', 'Tên của post type', 'stheme' ),
        'singular_name'       => _x( 'Sản phẩm', 'Tên của post type', 'stheme' ),
        'menu_name'           => __( 'Sản phẩm', 'stheme' ),
        'parent_item_colon'   => __( 'Parent Item:', 'stheme' ),
        'all_items'           => __( 'Quản lý sản phẩm', 'stheme' ),
        'view_item'           => __( 'Xem sản phẩm', 'stheme' ),
        'add_new_item'        => __( 'Thêm sản phẩm', 'stheme' ),
        'add_new'             => __( 'Thêm sản phẩm', 'stheme' ),
        'edit_item'           => __( 'Sửa sản phẩm', 'stheme' ),
        'update_item'         => __( 'Cập nhật sản phẩm', 'stheme' ),
        'search_items'        => __( 'Tìm kiếm sản phẩm', 'stheme' ),
        'not_found'           => __( 'Chưa có sản phẩm nào được tạo.', 'stheme' ),
        'not_found_in_trash'  => __( 'Không có sản phẩm trong này.', 'stheme' ),
    );
    $args = array(
        'label'               => __( 'sproduct', 'stheme' ),
        'description'         => __( 'Quản lý danh mục sản phẩm', 'stheme' ),
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'thumbnail', 'comments', 'excerpt'),
        'taxonomies'          => array( 'category', 'post_tag' ),
        'hierarchical'        => false,
        'public'              => true,
        'rewrite' 			  => array("slug" => "san-pham"),
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => IMAGES.('/icon-shop.png'),
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post'
    );
    register_post_type( 'sproduct', $args );
 
}
add_action( 'init', 'stheme_product_post_type', 0 );