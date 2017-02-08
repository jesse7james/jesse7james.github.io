

<?php 
 
function register_styles() {
	wp_register_style('my-bootstrap', get_template_directory_uri() . 
        '/bootstrap/css/bootstrap.css');
    wp_enqueue_style('my-bootstrap');
 
    wp_register_style('font-awesome', get_template_directory_uri() . 
        '/bootstrap/css/font-awesome.css');
    wp_enqueue_style('font-awesome');
 
    wp_register_style('style', get_template_directory_uri() . 
 		'/style.css');
    wp_enqueue_style('style'); 
 
}
 
add_action( 'wp_enqueue_scripts', 'register_styles' );
 
 
function load_my_script() {
  
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . 
 		'/bootstrap/js /jquery-3.1.1.js');
    wp_enqueue_script('jquery');
 
    wp_register_script('bootstrapjs', get_template_directory_uri() . 
 		'/bootstrap/js/bootstrap.js', array ('jquery'), null, false);
    wp_enqueue_script('bootstrapjs');
 
    
}
 
add_action('wp_enqueue_scripts', 'load_my_script');

register_nav_menu ('menu', 'Main menu');