<?php 
if ( ! function_exists('mixify_get_option'))
{
	function mixify_get_option($key=false,$arg=array())
	{  
	  $mixify_site_config = unserialize(MIXIFY_SITE_CONFIG); 
	  $return = ''; 
	  if($key){	    
		if(get_option($key)):  $return = get_option($key);
		else:			  	  
		  if(array_key_exists($key,$mixify_site_config))  $return = $mixify_site_config[$key];
		endif;
				
		if(array_key_exists('unserialize',$arg) && $arg['unserialize'])
		  $return = unserialize($return);   
	  }//end if($key)...	  
	  return $return;
	  
	}
}

//get options necessary for theme header  
if ( ! function_exists('mixify_header'))
{
	function mixify_header($arg=array())
	{  //start getting options from Appearance Page  ?>
      
     <!--[if IE]> 
     <script src="<?php echo MIXIFY_THIRDPARTY_URL; ?>/html5shiv-master/dist/html5shiv.min.js"></script>    
     <script src="<?php echo MIXIFY_THIRDPARTY_URL; ?>/respond-master/dest/respond.min.js"></script>
     <script src="<?php echo MIXIFY_THIRDPARTY_URL; ?>/respond-master/dest/respond.src.js"></script>
    <![endif]-->
    
     <link rel="stylesheet" href="<?php echo MIXIFY_THIRDPARTY_URL; ?>/bootstrap-3.3.5/css/bootstrap.css">   
     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">    
     <link rel="stylesheet" href="<?php echo MIXIFY_THIRDPARTY_URL; ?>/responsiveslides/responsiveslides.css">
     <link rel="stylesheet" href="<?php echo MIXIFY_THIRDPARTY_URL; ?>/responsiveslides/responsiveslides-custom.css">  
     <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" >
     <link rel="stylesheet" href="<?php echo MIXIFY_CSS_URL; ?>/responsive.css" media="all" >   
     <link id="page_favicon" href="<?php echo mixify_get_option('mixify_favicon'); ?>" rel="icon" type="image/x-icon" />  
     <link rel="stylesheet" type="text/css" href="<?php echo MIXIFY_THIRDPARTY_URL; ?>/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
     <link rel="stylesheet" type="text/css" href="<?php echo MIXIFY_THIRDPARTY_URL; ?>/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />     
	 <link rel="stylesheet" type="text/css" href="<?php echo MIXIFY_THIRDPARTY_URL; ?>/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
    <!--[if IE]>
     <link rel="stylesheet" href="<?php echo MIXIFY_CSS_URL; ?>/style-ie.css"  >   
	<![endif]-->   
    
     <style type="text/css">
	  html{margin-top:0px !important;}
	 </style>  
     
	 <style type="text/css">
	  body
		{
	    font-family: "<?php echo mixify_get_option('mixify_body_fontface'); ?>";
		font-size:<?php echo mixify_get_option('mixify_body_fontsize'); ?>;
	    color: <?php echo mixify_get_option('mixify_body_fontcolor'); ?>;
	    background: #fff none repeat scroll 0 0;
		}
		#body-content-section { 
  background: url("<?php echo mixify_get_option('mixify_body_background'); ?>") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  padding-bottom: 25px;
}
     .header{
	   background: #83a334 url("<?php echo mixify_get_option('mixify_header_background'); ?>") repeat left top;
     }
	 a, a *{
		 text-decoration:<?php echo mixify_get_option('mixify_a_decoration'); ?>;
		 font-family: "<?php echo mixify_get_option('mixify_a_fontface'); ?>";
		 color:<?php echo mixify_get_option('mixify_a_fontcolor'); ?>;		 
	 }
	 a{font-size:<?php echo mixify_get_option('mixify_a_fontsize'); ?>;}
	 a:hover, a:focus, a:hover *, a:focus *{
         text-decoration:<?php echo mixify_get_option('mixify_ahover_decoration'); ?>;
		 font-family: "<?php echo mixify_get_option('mixify_ahover_fontface'); ?>";
		 color:<?php echo mixify_get_option('mixify_ahover_fontcolor'); ?>;
     }
     
	 a:hover, a:focus {
		 font-size:<?php echo mixify_get_option('mixify_ahover_fontsize'); ?>;
     }
	 	 
    p{
		font-family: "<?php echo mixify_get_option('mixify_p_fontface'); ?>";
		font-size:<?php echo mixify_get_option('mixify_p_fontsize'); ?>;
	    color: <?php echo mixify_get_option('mixify_p_fontcolor'); ?>;
	}
	
	h1{
		font-family: "<?php echo mixify_get_option('mixify_h1_fontface'); ?>";
		font-size:<?php echo mixify_get_option('mixify_h1_fontsize'); ?>;
	    color: <?php echo mixify_get_option('mixify_h1_fontcolor'); ?>;
	}
	h2{
		font-family: "<?php echo mixify_get_option('mixify_h2_fontface'); ?>";
		font-size:<?php echo mixify_get_option('mixify_h2_fontsize'); ?>;
	    color: <?php echo mixify_get_option('mixify_h2_fontcolor'); ?>;
	}
	
	
	 <?php echo mixify_get_option('mixify_custom_css'); ?>
	 </style>
     
    <?php echo mixify_get_option('mixify_google_analytics'); ?>
	<?php   
	}
}




//get options necessary for theme footer   
if ( ! function_exists('mixify_footer'))
{
	function mixify_footer($arg=array())
	{   	 
	  //start getting options from Custom js Page  ?>   
    <script src="<?php echo MIXIFY_THIRDPARTY_URL; ?>/vendor/jquery-1.11.1.js"></script>    
    <script src="<?php echo MIXIFY_THIRDPARTY_URL; ?>/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    <script src="<?php echo MIXIFY_THIRDPARTY_URL; ?>/bootstrap-3.3.5/js/bootstrap.js"></script>  
          
    <!--[if IE]>
    <script type="text/javascript" src="<?php echo MIXIFY_THIRDPARTY_URL; ?>/selectivizr/selectivizr-min.js"></script>
	<![endif]-->   
     
    <script src="<?php echo MIXIFY_THIRDPARTY_URL; ?>/quoterotator/jquery.quote_rotator.js"></script>     
    <script src="<?php echo MIXIFY_THIRDPARTY_URL; ?>/responsiveslides/responsiveslides.min.js"></script> 
	<script type="text/javascript" src="<?php echo MIXIFY_THIRDPARTY_URL; ?>/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
	<script type="text/javascript" src="<?php echo MIXIFY_THIRDPARTY_URL; ?>/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
	<script type="text/javascript" src="<?php echo MIXIFY_THIRDPARTY_URL; ?>/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<script type="text/javascript" src="<?php echo MIXIFY_THIRDPARTY_URL; ?>/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	<script type="text/javascript" src="<?php echo MIXIFY_THIRDPARTY_URL; ?>/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
    
    <script>   
    // You can also use "$(window).load(function() {"
    jQuery(function () {		
      // Slideshow 4
      jQuery("#slider4").responsiveSlides({		  
		   manualControls: '#slider4-pager',
		  auto: <?php echo mixify_get_option('mixify_slider_auto'); ?>,             // Boolean: Animate automatically, true or false
  		  speed: <?php echo mixify_get_option('mixify_slider_speed'); ?>,            // Integer: Speed of the transition, in milliseconds
  		  timeout: <?php echo mixify_get_option('mixify_slider_timeout'); ?>,          // Integer: Time between slide transitions, in milliseconds
  		  pager: <?php echo mixify_get_option('mixify_slider_pager'); ?>,           // Boolean: Show pager, true or false
  		  nav: <?php echo mixify_get_option('mixify_slider_nav'); ?>,             // Boolean: Show navigation, true or false
  		  random: <?php echo mixify_get_option('mixify_slider_random'); ?>,          // Boolean: Randomize the order of the slides, true or false
  		  pause: <?php echo mixify_get_option('mixify_slider_pause'); ?>,           // Boolean: Pause on hover, true or false
  		  pauseControls: <?php echo mixify_get_option('mixify_slider_pausecontrols'); ?>,
          namespace: "callbacks"
      });     
    });
   </script>
   <script type="text/javascript" charset="utf-8">
        jQuery(document).ready(function() {
		    jQuery('ul#quotes').quote_rotator({ 
    		 rotation_speed: 5000,     
     		 pause_on_hover: true
			});
        });
    </script>    
    <script type="text/javascript">
	  <?php echo mixify_get_option('mixify_custom_js'); ?>   
	</script>   
     <script type="text/javascript" charset="utf-8">
     jQuery(document).ready(function() {
	  jQuery(".fancybox-button").fancybox({
		prevEffect		: 'none',
		nextEffect		: 'none',
		closeBtn		: false,
		helpers		: {
			title	: { type : 'inside' },
			buttons	: {}
		}
	  });
	});
    </script>     
	<?php   
	}
}



/***************************************/

if ( ! function_exists( 'mixify_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 *
 * @since Twenty Fourteen 1.0
 *
 * @global WP_Query   $wp_query   WordPress Query object.
 * @global WP_Rewrite $wp_rewrite WordPress Rewrite object.
 */
function mixify_paging_nav() {
	global $wp_query, $wp_rewrite;
	
	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 ) {
		return;
	}

	$paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
	$pagenum_link = html_entity_decode( get_pagenum_link() );
	$query_args   = array();
	$url_parts    = explode( '?', $pagenum_link );

	if ( isset( $url_parts[1] ) ) {
		wp_parse_str( $url_parts[1], $query_args );
	}

	$pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
	$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

	$format  = $wp_rewrite->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
	$format .= $wp_rewrite->using_permalinks() ? user_trailingslashit( $wp_rewrite->pagination_base . '/%#%', 'paged' ) : '?paged=%#%';

	// Set up paginated links.
	$links = paginate_links( array(
		'base'     => $pagenum_link,
		'format'   => $format,
		'total'    => $wp_query->max_num_pages,
		'current'  => $paged,
		'mid_size' => 1,
		'add_args' => array_map( 'urlencode', $query_args ),
		'prev_text' => __( '&larr; Previous', 'twentyfourteen' ),
		'next_text' => __( 'Next &rarr;', 'twentyfourteen' ),
	) );

	if ( $links ) :

	?>
	<nav class="navigation paging-navigation" role="navigation">
		<div class="pagination loop-pagination">
			<?php echo $links; ?>
		</div><!-- .pagination -->
	</nav><!-- .navigation -->
	<?php
	endif;
}
endif;
