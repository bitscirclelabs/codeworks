<?php /* Framework Name:       Mixify
Plugin URI:           #
Description:          A framework that gives you ease and makes you cool.
Version:              0.0.1
Author:               Miexie Tulid & Romel Gudes
Author URI:           #
License:              ©2015 Mixify. All rights reserved.
*/   		 
if ( ! defined( 'MIXIFY_THEME_DIR' ) )
	 define('MIXIFY_THEME_DIR', untrailingslashit( dirname( __FILE__ ) ) );		 
if ( ! defined( 'MIXIFY_DEFAULTHOOKS_DIR' ) )
	 define('MIXIFY_DEFAULTHOOKS_DIR', MIXIFY_THEME_DIR.'/default-hooks' );			
if ( ! defined( 'MIXIFY_TEMPLATES_DIR' ) )
	 define('MIXIFY_TEMPLATES_DIR', MIXIFY_THEME_DIR.'/templates' );		 
if ( ! defined( 'MIXIFY_INCLUDES_DIR' ) )
	 define('MIXIFY_INCLUDES_DIR', MIXIFY_THEME_DIR.'/includes' );	
if ( ! defined( 'MIXIFY_THIRDPARTY_DIR' ) )
	 define('MIXIFY_THIRDPARTY_DIR', MIXIFY_THEME_DIR.'/thirdparty' );	
//-------------------------------------------------------------------------	
if ( ! defined( 'MIXIFY_THEME_URL' ) )
	define('MIXIFY_THEME_URL', get_bloginfo('template_url').'/mixify');  	
if ( ! defined( 'MIXIFY_IMAGES_URL' ) )
	define('MIXIFY_IMAGES_URL', MIXIFY_THEME_URL.'/images');
if ( ! defined( 'MIXIFY_SLIDERIMAGES_URL' ) )
	define('MIXIFY_SLIDERIMAGES_URL', MIXIFY_IMAGES_URL.'/slider');  
	if ( ! defined( 'MIXIFY_SOCIALIMAGES_URL' ) )
	define('MIXIFY_SOCIALIMAGES_URL', MIXIFY_IMAGES_URL.'/social');            
if ( ! defined( 'MIXIFY_CSS_URL' ) )
	define('MIXIFY_CSS_URL', MIXIFY_THEME_URL.'/css');    
if ( ! defined( 'MIXIFY_JS_URL' ) )
	define('MIXIFY_JS_URL', MIXIFY_THEME_URL.'/js');    
if ( ! defined( 'MIXIFY_THIRDPARTY_URL' ) )   
	define('MIXIFY_THIRDPARTY_URL', MIXIFY_THEME_URL.'/thirdparty');
	
require_once MIXIFY_THEME_DIR.'/mixify-settings.php';	
require_once MIXIFY_THEME_DIR.'/mixify-config.php';   
require_once MIXIFY_THEME_DIR.'/mixify-helpers.php';   
require_once MIXIFY_DEFAULTHOOKS_DIR.'/register-menus.php';
require_once MIXIFY_DEFAULTHOOKS_DIR.'/register-widgets.php';
require_once MIXIFY_DEFAULTHOOKS_DIR.'/extra_init.php';
require_once MIXIFY_THEME_DIR.'/mixify-css.php'; 
require_once MIXIFY_THEME_DIR.'/mixify-js.php'; 
require_once MIXIFY_THEME_DIR.'/mixify-menu.php'; 
require_once MIXIFY_THEME_DIR.'/mixify-page.php'; 
require_once MIXIFY_THEME_DIR.'/mixify-controller.php'; 