<?php /* 
* @filesource   ./pages.php
* @since		Version 1.0
* @description  All dashboard pages linked ot Dashboard menus will be added here
*/
function gswaibot_index_page() {  
 require WP_GSWAIBOT_TEMPLATE_DIR.'/gswaibot-index-page.php';    
}

function gswaibot_new_eswipe_page() {  
 require WP_GSWAIBOT_TEMPLATE_DIR.'/gswaibot-new-eswipe-page.php';      
}

function gswaibot_delete_eswipe_page() {  
 require WP_GSWAIBOT_TEMPLATE_DIR.'/gswaibot-delete-eswipe-page.php';      
}

function gswaibot_edit_eswipe_style_page() {  
 require WP_GSWAIBOT_TEMPLATE_DIR.'/gswaibot-edit-eswipe-style-page.php';      
}