<?php
/**
 * Plugin Name: My First Plugin Demo 
 * Plugin URI: http://wordpress.local 
 * Description: Đây là plugin đầu tiên mà tôi viết dành riêng cho WordPress, chỉ để học tập mà thôi. 
 * Version: 1.0 
 * Author: viethung 
 * Author URI: http://wordpress.local 
 * License: GPLv2 or later 
 */
?>
<?php
if(!class_exists('My_First_Plugin_Demo')) {
        class My_First_Plugin_Demo {
                function __construct() {
                        if(!function_exists('add_shortcode')) {
                                return;
                        }
                        add_shortcode( 'hello' , array(&$this, 'hello_func') );
                }
 
                function hello_func($atts = array(), $content = null) {
                        extract(shortcode_atts(array('name' => 'World'), $atts));
                        return '<div><p>Hello '.$name.'!!!</p></div>';
                }
        }
}
function mfpd_load() {
        global $mfpd;
        $mfpd = new My_First_Plugin_Demo();
}
add_action( 'plugins_loaded', 'mfpd_load' );
?>