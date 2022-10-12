<?php /* 
* @filesource   ./menus.php
* @since		Version 1.0
* @description  All Dashboard top and sub menus will added here
*/
add_action('admin_menu', 'gswaibot_menus_admin');    
function gswaibot_menus_admin() {
    $menu_index = add_menu_page('Affiliate Swipe', 'Affiliate Swipe', 'manage_options', 'gswaibot-index-page', 'gswaibot_index_page',WP_GSWAIBOT_IMAGES_URL.'/icon.png');       
	$menu_new_eswipe = add_submenu_page('gswaibot-index-page', 'Add Affiliate Swipe', 'Add Affiliate Swipe',  'manage_options', 'gswaibot-new-eswipe-page', 'gswaibot_new_eswipe_page');   
    
	$menu_delete_swipe = add_submenu_page('admin.php', 'Delete Affiliate Swipe', 'Delete Affiliate Swipe', 'manage_options', 'gswaibot-delete-eswipe-page', 'gswaibot_delete_eswipe_page');  
	
	$menu_edit_style = add_submenu_page('admin.php', 'Edit Affiliate Swipe Style', 'Edit Affiliate Swipe Style', 'manage_options', 'gswaibot-edit-eswipe-style-page', 'gswaibot_edit_eswipe_style_page');  	
	
	
	
	add_action( 'admin_print_styles-' . $menu_index, 'gswaibot_admin_styles' ); 
	add_action( 'admin_print_styles-' . $menu_new_eswipe, 'gswaibot_admin_styles' ); 
	add_action( 'admin_print_styles-' . $menu_delete_swipe, 'gswaibot_admin_styles' ); 
	add_action( 'admin_print_styles-' . $menu_edit_style, 'gswaibot_admin_styles' ); 

    add_action( 'admin_print_scripts-' . $menu_index, 'gswaibot_admin_scripts' );  
	add_action( 'admin_print_scripts-' . $menu_new_eswipe, 'gswaibot_admin_scripts' ); 
	add_action( 'admin_print_scripts-' . $menu_delete_swipe, 'gswaibot_admin_scripts' ); 
	add_action( 'admin_print_scripts-' . $menu_edit_style, 'gswaibot_admin_scripts' ); 

} //end function
  
