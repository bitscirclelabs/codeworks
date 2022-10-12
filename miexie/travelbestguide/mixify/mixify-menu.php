<?php //START CREATING MIXIFY MENU ON DASHBOARD
function mixify_admin_menus() { 
   $framework_config = unserialize(MIXIFY_FRAMEWORK_CONFIG); 
   $framework_prefix = (array_key_exists('framework_prefix',$framework_config))? $framework_config['framework_prefix'] : '';
   $framework_name = (array_key_exists('framework_name',$framework_config))? $framework_config['framework_name'] : '';
   $framework_icon = (array_key_exists('framework_icon',$framework_config))? $framework_config['framework_icon'] : '';	
   $menu_hook_suffix = add_menu_page('Theme Options', $framework_name, 'manage_options',$framework_prefix.'_theme_options', 'mixify_theme_options_page',$framework_icon,'59.75');    
   
   add_action( 'admin_print_styles-' . $menu_hook_suffix, 'mixify_styles' );
   add_action( 'admin_print_scripts-' . $menu_hook_suffix, 'mixify_scripts' );  
}  
  // This tells WordPress to call the function named "setup_theme_admin_menus"  
  // when it's time to create the menu pages.  
    add_action('admin_menu','mixify_admin_menus');                 