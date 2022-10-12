<?php 
//JS For Generic/All Dashboard Pages
function mixtfy_head_js_files() {  ?>
  <script>   
	   var blog_url = '<?php echo get_bloginfo('url'); ?>'; 
	   var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
	   var mixify_images_url = '<?php echo WP_MYPLUGIN_IMAGES_URL; ?>'; 
  </script>
<?php 
}
//START DFINING JS
add_action('admin_footer', 'mixtfy_head_js_files');       

//JS Only for Myplugin Pages     
function myplugin_admin_js_file() {
  /**
     * Enqueue script for general script 
     */
 wp_register_script($handle = 'general-js', $src = WP_MYPLUGIN_JS_URL.'/general.js', $deps = array(), $ver = '1.0.0', $media = 'all');
 
 wp_register_script($handle = 'fontawesome-js', $src = 'https://use.fontawesome.com/79957facdf.js', $deps = array(), $ver = '4.6.3', $media = 'all');        
 
 
}
//START DFINING SCRIPT SHEET   
add_action('admin_init', 'myplugin_admin_js_file');         

/**It will be called only on your plugin admin page, enqueue our scripts here**/   
function my_plugin_admin_scripts() {              
    wp_enqueue_script('general-js'); 
	wp_enqueue_script('fontawesome-js');           
}
