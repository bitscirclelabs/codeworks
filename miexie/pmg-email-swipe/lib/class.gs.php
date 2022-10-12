<?php /* 
* @filesource   ./class.gs.php
* @since		Version 1.0
* @description  This is the main class of the plugin
*/
class Class_Gswaibot
{ 
  function get_eswipe($args=array()){   
      global $wpdb; $return = array();
      $return['query'] = " SELECT * FROM $wpdb->posts  WHERE post_type='pmg_eswipe' ";
      if(array_key_exists('id',$args) && $args['id']){ $return['query'] .= " AND ID IN ($args[id]) "; }   
      $return['query'] .= " ORDER BY ID DESC ";
	  
      $return['result'] = $wpdb->get_results($return['query']);
	  
	  return $return;
  } //end get_eswipe   


  //------------------------
  function delete_eswipe($args=array()){ 
    $return = false;  global $wpdb;
    if(array_key_exists('id',$args) && $args['id']){
		$return = $wpdb->delete( $wpdb->posts , array( 'ID' => $args['id']  ), array( '%d' ) );
	}
     
	 return $return;
  } //end delete_eswipe
  
  //------------------------
   function make_duplicate($args=array()){ 
    $return = array('result'=>false,'msgtype'=>'notice-error', 'msg'=>'Something went wrong! Please try again later.');  global $wpdb;
    $meta_key = 'eswipe-custom-design';
	
    if(array_key_exists('id',$args) && $args['id']){
		
		 $result = $this->get_eswipe(array('id'=>$args['id']));
         if($result['result']){ 
		    $record = $result['result'][0];  
			if($post_ID = wp_insert_post(array('post_title'=>$record->post_title, 'post_type'=>'pmg_eswipe', 'post_content' => $record->post_content))):
			
			  $return = array('result'=>$post_ID,'msgtype'=>'notice-success', 'msg'=>'Email swipe has been successfully copied.');
			
			  if($meta_value = get_post_meta( $record->ID, $meta_key, true )):
			      add_post_meta($post_ID, $meta_key, $meta_value, true);              
			  endif;
			 endif;
		 }
		
	}
     
	 return $return;
  } //end delete_eswipe
  
  
}//end class