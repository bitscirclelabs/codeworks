<?php /* 
* @filesource   ./shortcodes.php
* @since		Version 1.0
* @description  All plugin shortcodes will be created or added here
*/
function pmg_email_swipe( $atts ) {
    $a = shortcode_atts( array(
        'id' => false
    ), $atts );
	
	ob_start();
	require WP_GSWAIBOT_TEMPLATE_DIR.'/inc/pmg-email-swipe.php';  
	
	return ob_get_clean();
}
add_shortcode('affiliate_swipe','pmg_email_swipe'); 