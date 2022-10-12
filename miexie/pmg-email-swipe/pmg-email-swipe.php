<?php
/*
Plugin Name:          EZ Affiliate Swipe
Plugin URI:           https://priormarketing.com/  
Description:          Create beautiful boxes for affiliate swipe copy that your affiliates can easily grab with just a click of a button.  
Version:              0.0.4             
Author:               Prior Marketing Solutions
Author URI:           https://priormarketing.com/
License:              Prior Marketing Solutions

Copyright 2017  Prior Marketing Solutions   
This program is not a free software; It is under the terms of the Mixtfy License version.         
*/
       	
if ( ! defined( 'WP_GSWAIBOT_DIR' ) )
	define( 'WP_GSWAIBOT_DIR', WP_PLUGIN_DIR.'/pmg-email-swipe' );	     
	    
		
if ( ! defined( 'WP_GSWAIBOT_TEMPLATE_DIR' ) )
	define(   'WP_GSWAIBOT_TEMPLATE_DIR', WP_GSWAIBOT_DIR .'/templates' );	
	
	
if ( ! defined( 'WP_GSWAIBOT_INCLUDES_DIR' ) )
	define( 'WP_GSWAIBOT_INCLUDES_DIR', WP_GSWAIBOT_DIR .'/includes' );		   
	
	
if ( ! defined( 'WP_GSWAIBOT_LIB_DIR' ) )
	define( 'WP_GSWAIBOT_LIB_DIR', WP_GSWAIBOT_DIR .'/lib' );	      		

	
if ( ! defined( 'WP_GSWAIBOT_IMAGES_DIR' ) )
	define( 'WP_GSWAIBOT_IMAGES_DIR', WP_GSWAIBOT_DIR .'/images' ); 
	

if ( ! defined( 'WP_GSWAIBOT_CSS_DIR' ) )
	define( 'WP_GSWAIBOT_CSS_DIR', WP_GSWAIBOT_DIR .'/css' ); 

	
if ( ! defined( 'WP_GSWAIBOT_JS_DIR' ) )
	define( 'WP_GSWAIBOT_JS_DIR', WP_GSWAIBOT_DIR .'/js' ); 	
	   
//-------------------------------------------------------------------------	


if ( ! defined( 'WP_GSWAIBOT_URL' ) )
	define( 'WP_GSWAIBOT_URL', untrailingslashit( plugins_url( '', __FILE__ ) ) );      
	
	
if ( ! defined( 'WP_GSWAIBOT_TEMPLATE_URL' ) )
	define( 'WP_GSWAIBOT_TEMPLATE_URL', WP_GSWAIBOT_URL .'/templates' );		  

	
if ( ! defined( 'WP_GSWAIBOT_IMAGES_URL' ) )
	define( 'WP_GSWAIBOT_IMAGES_URL', WP_GSWAIBOT_URL .'/images' );	
	
	
if ( ! defined( 'WP_GSWAIBOT_CSS_URL' ) )
	define( 'WP_GSWAIBOT_CSS_URL', WP_GSWAIBOT_URL .'/css' );		


if ( ! defined( 'WP_GSWAIBOT_JS_URL' ) )
	define( 'WP_GSWAIBOT_JS_URL', WP_GSWAIBOT_URL .'/js' );	       	   	

	
//-----------------------------------------------------	
      require_once WP_GSWAIBOT_DIR . '/config.php';      
	  require_once WP_GSWAIBOT_DIR . '/dbase-tables.php'; 
	  require_once WP_GSWAIBOT_DIR . '/hooks.php';   
      require_once  WP_GSWAIBOT_DIR . '/helpers.php';      	
	  require_once WP_GSWAIBOT_LIB_DIR.'/class.gs.php';
	  require_once WP_GSWAIBOT_LIB_DIR.'/init.php';                
      require_once  WP_GSWAIBOT_DIR . '/controller.php';    
	  
      require_once WP_GSWAIBOT_DIR . '/css.php';   
	  require_once WP_GSWAIBOT_DIR . '/js.php'; 
	  require_once WP_GSWAIBOT_DIR . '/header.php';
	  require_once WP_GSWAIBOT_DIR . '/menus.php';
	  require_once WP_GSWAIBOT_DIR . '/pages.php';    
	  require_once WP_GSWAIBOT_DIR . '/footer.php';   
 
	  //start including shortcodes	    
	  require_once WP_GSWAIBOT_DIR . '/shortcodes.php'; 