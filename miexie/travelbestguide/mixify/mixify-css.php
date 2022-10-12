<?php //REGISTERING CSS FILES
function mixify_css_files() {
wp_register_style('mixify-css',MIXIFY_CSS_URL.'/mixify.css',array(),'0.0.1','all');	
wp_register_style('font-awesome-css','//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',array(),'4.3.0','all');	
}
add_action('admin_init', 'mixify_css_files'); 

/*
 * It will be called only on your framework admin page, enqueue our stylesheet here
*/
function mixify_styles() {	
  wp_enqueue_style('mixify-css');
  wp_enqueue_style('font-awesome-css');
  // Add the color picker css file      
  wp_enqueue_style( 'wp-color-picker' );    
}
