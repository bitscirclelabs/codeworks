<?php 
//Start registering navigation menus
function register_mixify_menus() {
  register_nav_menus(
    array( 'header-menu' => __( 'Header Menu' ) )
  );
}
add_action( 'init', 'register_mixify_menus' );

function mixify_setcontainer_attributes ($args) {
  $args['container_class'] = 'collapse navbar-collapse'; 
  $args['container_id'] = 'bs-example-navbar-collapse-1'; 
  return $args;
}
add_filter ('wp_nav_menu_args', 'mixify_setcontainer_attributes');

//--------------------------------------------------
function mixify_clean_custom_menus() {
	wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'nav navbar-nav navbar-left', 'menu_id' => 'ul-top-menu' ) ); 
} 