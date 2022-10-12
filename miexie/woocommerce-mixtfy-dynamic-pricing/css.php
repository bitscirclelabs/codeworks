<?php  //CSS Only for Myplugin Pages
function myplugin_admin_css_file() { 	
wp_register_style($handle = 'admin-myplugin-css', $src = WP_MYPLUGIN_CSS_URL.'/admin-style.css', $deps = array(), $ver = '1.0.0', $media =  'all');
}  
//START DFINING STYLE SHEET 
add_action('admin_init', 'myplugin_admin_css_file'); 

/**It will be called only on your plugin admin page, enqueue our stylesheet here**/
function my_plugin_admin_styles() {
  wp_enqueue_style( 'admin-myplugin-css' );
}
