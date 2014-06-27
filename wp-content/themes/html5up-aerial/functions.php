<?php
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
    function my_jquery_enqueue() {
		wp_deregister_script('jquery');
		wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
    	wp_enqueue_script('jquery');
    }
 
    //Insert main.js
    function main_javascript() {
		wp_enqueue_script( 'mainjs', get_stylesheet_directory_uri() . '/js/main.js', array('jquery') );
    }
    add_action( 'wp_enqueue_scripts', 'main_javascript' );
?>