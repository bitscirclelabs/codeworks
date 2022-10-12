<?php /* 
* @filesource   ./js.php
* @since		Version 1.0
* @description  All javascript linking, hooks, embedding should be put in here..
*/
function gswaibot_admin_js_file() {       

    wp_register_script($handle = 'gswaibot-js', $src = WP_GSWAIBOT_JS_URL.'/gswaibot.js', $deps = array(), $ver = '1.0.0', $media = 'all');
	
	 wp_register_script($handle = 'gswaibot-front-js', $src = WP_GSWAIBOT_JS_URL.'/gswaibot-front.js', $deps = array(), $ver = '1.0.0', $media = 'all');
	 
    wp_register_script($handle = 'utilities-js', $src = WP_GSWAIBOT_JS_URL.'/utilities.js', $deps = array(), $ver = '1.0.0', $media = 'all');
    wp_register_script($handle = 'uploads-js', $src = WP_GSWAIBOT_JS_URL.'/uploads.js', $deps = array(), $ver = '1.0.0', $media = 'all');                   	             
    wp_register_script($handle = 'jquery-js', $src = 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js', $deps = array(), $ver = '3.1.0', $media = 'all');
    wp_register_script($handle = 'jquery-ui-js', $src = WP_GSWAIBOT_JS_URL.'/jquery-ui/jquery-ui.js', $deps = array(), $ver = '1.12.1', $media = 'all');    
	
	wp_register_script($handle = 'tinymce-js', $src = '//cdn.tinymce.com/4/tinymce.min.js', $deps = array(), $ver = '4', $media = 'all');    
	  
	wp_register_script($handle = 'eswipe-custom-style-js', $src = WP_GSWAIBOT_JS_URL.'/eswipe-custom-style.js', $deps = array(), $ver = '0.0.1', $media = 'all');            
	
       
}
    
//START DFINING JS SCRIPT
add_action('admin_init', 'gswaibot_admin_js_file');    
//-----------------------------
function gswaibot_admin_scripts() { 
	wp_enqueue_script('utilities-js');    
	wp_enqueue_script('uploads-js');   
	wp_enqueue_script('jquery-js'); 
	wp_enqueue_script('jquery-ui-js');              
	wp_enqueue_script('tinymce-js'); 
	wp_enqueue_script('eswipe-custom-style-js'); 
	wp_enqueue_script('gswaibot-js');     
	wp_enqueue_script('gswaibot-front-js');        
}
//-------------------------------

function gswaibot_color_picker($hook_suffix) {
    // $hook_suffix to apply a check for admin page.
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'pmg-colorpicker-handle', WP_GSWAIBOT_JS_URL.'/pmg-colorpicker.js', array( 'wp-color-picker' ), false, true );   
}
add_action( 'admin_enqueue_scripts', 'gswaibot_color_picker' );

//-----------------------------
add_action('admin_footer', 'gswaibot_admin_footer_function');
function gswaibot_admin_footer_function() {   
	?>
   
    <?php     
}



//-----------------------------
add_action('wp_footer', 'gswaibot_wp_footer_function');
function gswaibot_wp_footer_function() {  ?>
  <script src="<?php echo WP_GSWAIBOT_JS_URL.'/gswaibot-front.js'; ?>"></script>
<?php }