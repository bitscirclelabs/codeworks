<?php
/********************* JAVASCRIPT ******************************/
function golf_options_enqueue_scripts() { 
		wp_enqueue_script('jquery');
		wp_enqueue_script('thickbox');
		wp_enqueue_style('thickbox');
		wp_enqueue_script('media-upload');
	
}
add_action('admin_enqueue_scripts', 'golf_options_enqueue_scripts');
?>