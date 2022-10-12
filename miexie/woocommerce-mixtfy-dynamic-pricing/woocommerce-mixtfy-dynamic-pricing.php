<?php 
/*
Plugin Name: WooCommerce Mixtfy Dynamic Pricing
Plugin URI: http://www.mixtfy.com
Description: WooCommerce extension for dynamic pricing.   
Version: 1.0.0
Author: Miexie D. Tulid
Author URI: http://www.mixtfy.com
*/


/**
 * Check if WooCommerce is active
 */
$active_plugins = apply_filters( 'active_plugins', get_option( 'active_plugins' ) );
if ( in_array( 'woocommerce/woocommerce.php', $active_plugins) ) {

if( ! defined( 'WP_MYPLUGIN_DIR' ) )
	define( 'WP_MYPLUGIN_DIR', WP_PLUGIN_DIR.'/woocommerce-mixtfy-dynamic-pricing' );	
if( ! defined( 'WP_MYPLUGIN_TEMPLATE_DIR' ) )
	define( 'WP_MYPLUGIN_TEMPLATE_DIR', WP_MYPLUGIN_DIR .'/templates' );
if( ! defined( 'WP_MYPLUGIN_CSS_DIR' ) )
	define( 'WP_MYPLUGIN_CSS_DIR', WP_MYPLUGIN_DIR .'/css' );             	
if( ! defined( 'WP_MYPLUGIN_JS_DIR' ) )
	define( 'WP_MYPLUGIN_JS_DIR', WP_MYPLUGIN_DIR .'/js' ); 	
if ( ! defined( 'WP_MYPLUGIN_IMAGES_DIR' ) )
	define( 'WP_MYPLUGIN_IMAGES_DIR', WP_MYPLUGIN_DIR .'/images' ); 	
	

//-------------------------------------------------------------------------	
if ( ! defined( 'WP_MYPLUGIN_URL' ) )
	define( 'WP_MYPLUGIN_URL', untrailingslashit( plugins_url( '', __FILE__ ) ) );      
	
if ( ! defined( 'WP_MYPLUGIN_TEMPLATE_URL' ) )
	define( 'WP_MYPLUGIN_TEMPLATE_URL', WP_MYPLUGIN_URL .'/templates' );		  
	
if ( ! defined( 'WP_MYPLUGIN_IMAGES_URL' ) )
	define( 'WP_MYPLUGIN_IMAGES_URL', WP_MYPLUGIN_URL .'/images' );		
	
if ( ! defined( 'WP_MYPLUGIN_CSS_URL' ) )
	define( 'WP_MYPLUGIN_CSS_URL', WP_MYPLUGIN_URL .'/css' );		
if ( ! defined( 'WP_MYPLUGIN_JS_URL' ) )
	define( 'WP_MYPLUGIN_JS_URL', WP_MYPLUGIN_URL .'/js' );	       	   	

	
	require_once WP_MYPLUGIN_DIR . '/css.php'; 
	require_once WP_MYPLUGIN_DIR . '/js.php'; 
	require_once WP_MYPLUGIN_DIR . '/controller.php';       
	require_once WP_MYPLUGIN_DIR . '/menus.php';
	require_once WP_MYPLUGIN_DIR . '/pages.php';  

}