<?php /* 
* @filesource   ./css.php
* @since		Version 1.0
* @description  All css linking, hooks, embedding should be put in here..
*/

function gswaibot_admin_css_file() {
    wp_register_style($handle = 'gswaibot-css', $src = WP_GSWAIBOT_CSS_URL.'/gswaibot.css', $deps = array(), $ver = '1.0.0', $media =  'all');   
   
    wp_register_style($handle = 'responsive-css', $src = WP_GSWAIBOT_CSS_URL.'/responsive.css', $deps = array(), $ver = '1.0.0', $media =  'all');   
	
	wp_register_style($handle = 'jquery-ui-css', $src = WP_GSWAIBOT_CSS_URL.'/jquery-ui/jquery-ui.css', $deps = array(), $ver = '1.12.1', $media =  'all');      
	
	wp_register_style($handle = 'jquery-ui-style', $src = WP_GSWAIBOT_CSS_URL.'/jquery-ui/style.css', $deps = array(), $ver = '1.0.0', $media =  'all');                
	
	 wp_register_style($handle = 'font-awesome', $src = 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', $deps = array(), $ver = '4.5.0', $media =  'all');   
	 
	 wp_register_style($handle = 'eswipe-custom-style', $src = WP_GSWAIBOT_CSS_URL.'/eswipe-custom-style.css', $deps = array(), $ver = '1.0.0', $media =  'all');                 
	 
}
//START DFINING STYLE SHEET 
add_action('admin_init', 'gswaibot_admin_css_file'); 
//----------------------------------
function gswaibot_admin_styles() {
  wp_enqueue_style('gswaibot-css');
  wp_enqueue_style('responsive-css');  
  wp_enqueue_style('jquery-ui-css');
  wp_enqueue_style('jquery-ui-style');     
  wp_enqueue_style('font-awesome');     
  wp_enqueue_style('eswipe-custom-style');    
}

//------------------------------------------
function gswaibot_wp_head_css() { ?>
     <link rel='stylesheet'  href='<?php echo WP_GSWAIBOT_CSS_URL.'/gswaibot.css'; ?>' type='text/css' media='all' />
     <link rel='stylesheet'  href='<?php echo WP_GSWAIBOT_CSS_URL.'/eswipe-custom-style.css'; ?>' type='text/css' media='all' />
<?php }      
//START DFINING STYLE SHEET 
add_action('wp_head', 'gswaibot_wp_head_css'); 

