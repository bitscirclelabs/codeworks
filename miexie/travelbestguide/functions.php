<?php
 define('THEME_DIR', untrailingslashit( dirname( __FILE__ ) ) );	
 define('THEME_URI', get_bloginfo('template_directory') );	 
 include(THEME_DIR.'/mixify/init.php');  
 
 function limit_packages_per_archive_page() {
	if ( is_category('packages') )
		set_query_var('posts_per_archive_page', 20); // or use variable key: posts_per_page
}
add_filter('pre_get_posts', 'limit_packages_per_archive_page');