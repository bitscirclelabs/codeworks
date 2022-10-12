<?php
//Start registering widgets
function register_mixify_widgets() {
  register_sidebar( array(
		'name' => __( 'Main Sidebar'),
		'id' => 'main-sidebar',
		'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
}
add_action( 'init', 'register_mixify_widgets' );
//--------------------------------------------------