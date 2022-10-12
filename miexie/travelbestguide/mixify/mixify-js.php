<?php //REGISTERING JS FILES
function mixify_js_files() {  
 wp_register_script('raphael-js',MIXIFY_JS_URL.'/raphael-1.5.2-min.js',array(),'1.5.2','all');  
 wp_register_script('mixify-js',MIXIFY_JS_URL.'/mixify.js',array(),'0.0.1','all'); 
 wp_register_script('mixifyupload-js',MIXIFY_JS_URL.'/upload.js',array(),'0.0.1','all'); 
 wp_register_script( 'mixify-colorpicker-js', MIXIFY_JS_URL.'/mixify-colorpicker.js', array( 'jquery', 'wp-color-picker' ),'0.0.1','all'); 
}
add_action('admin_init', 'mixify_js_files');        

/*
 * It will be called only on your framework admin page, enqueue our scripts here 
*/
function mixify_scripts() { 
 wp_enqueue_media();
 wp_enqueue_script('raphael-js');              
 wp_enqueue_script('mixify-js');   
 wp_enqueue_script('mixifyupload-js');  
 wp_enqueue_script('mixify-colorpicker-js');  
}


/*
 *initializing global js variables at the dashboard header
*/
add_action('admin_head','mixify_global_js');
function mixify_global_js() {
   ?>
   <script type="text/javascript">    
     var mixify_ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
     var mixify_images_url = '<?php echo MIXIFY_IMAGES_URL; ?>';       
     var mixify_sliderimages_url = '<?php echo MIXIFY_SLIDERIMAGES_URL; ?>';   
     var mixify_social_iconurl = '<?php echo MIXIFY_SOCIALIMAGES_URL; ?>';
     var mixify_status_wrapper = '#mixify-status-wrapper';         
   </script>
   <?php         
}



