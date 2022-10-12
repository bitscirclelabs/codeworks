<?php
add_action('wp_ajax_mixify_updatechanges', 'mixify_updatechanges_callback');
function mixify_updatechanges_callback() {
  $mixify_site_config = unserialize(MIXIFY_SITE_CONFIG);       
  $themeoptions = $_POST['themeoptions'];
  $button = $_POST['button'];
  $return = 'FALSE';
  
  
  if(is_array($themeoptions)){
	for($i=0; $i<count($themeoptions);$i++):
	  $option = json_decode(stripslashes($themeoptions[$i]));	
	 
	  if($option->type=='form-slider'):	$value = serialize($option->value); 
	  else:  $value = $option->value;  endif;        
	  
	  if($button=='reset'):
	    $value = $mixify_site_config[$option->name];
	  endif;    	    	  
	  	 
	  update_option( $option->name, $value );       
	endfor;
	$return = 'TRUE';
  }  
  
  echo $return;
  die(); // this is required to return a proper result
}
//--------------------------------------------------
