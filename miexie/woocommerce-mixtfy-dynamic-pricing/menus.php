<?php //MENUS FOR SUPER ADMIN
add_action('admin_menu', 'myplugin_woo_mixtfy_menu');
function myplugin_woo_mixtfy_menu() {   
  $page = add_submenu_page('woocommerce', 'Mixtfy Dynamic Pricing', 'Mixtfy Dynamic Pricing',  'manage_options', 'mixtfy-dynamic-pricing', 'mixtfy_dynamic_pricing_page');    
  add_action( 'admin_print_styles-' . $page, 'my_plugin_admin_styles' );
  add_action( 'admin_print_scripts-' . $page, 'my_plugin_admin_scripts' );                     
}
  