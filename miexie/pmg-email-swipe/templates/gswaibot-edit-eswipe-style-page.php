<div class="gswaibot-maincontent" id="gswaibot-index-page">
<h1>Edit Affiliate Swipe Style</h1>		
	
 <?php global $wpdb;
 $class_myplugin = new Class_Gswaibot; 
if(isset($_GET['id']) && $_GET['id']){
  $id = $_GET['id'];  $success = false; 
  
	 if(isset($_POST['submit'])){
		  $id = (isset($_POST['id']) && $_POST['id']) ? $_POST['id'] : false;
		  $eswipe_custom_design = (!empty($_POST['eswipe-custom-design']) && $_POST['eswipe-custom-design']) ? $_POST['eswipe-custom-design'] : false;
		  
		  if($id && $eswipe_custom_design){
			  $meta_value = stripslashes($eswipe_custom_design);
			  $meta_value = json_decode($meta_value,true);
			  $meta_value = serialize($meta_value);
			  
			 $error = 'Something went wrong. Please try again later'; $meta_key = 'eswipe-custom-design';
			 if ( get_post_meta( $id,  $meta_key, true ) ) {
			   if(update_post_meta($id,  $meta_key, $meta_value)){ $error = false; }
			 }else{
			  if(add_post_meta($id, $meta_key, $meta_value, true)){ $error = false; }
			 }
			 
			 
			 if(!$error){
				  $success = true;
				   $url = menu_page_url( 'gswaibot-index-page', false ).'&msg='.urlencode('Affiliate swipe style has been successfully updated.').'&msgtype=notice-success';
		 ?> <script>window.location="<?php echo $url; ?>";</script><?php
			 }else{
				  ?><div class="notice notice-error is-dismissible"><p>Something went wrong. Please try again later.</p></div><?php
			  }
			 
		  }
	  }
	 ?>
     
   <?php 
   $result = $class_myplugin->get_eswipe(array('id'=>$id));
    if($result['result']){ $record = $result['result'][0];   
	
	  $eswipe_custom = array();
	  if($meta_value = get_post_meta( $record->ID, 'eswipe-custom-design', true )){
		 $eswipe_custom = unserialize($meta_value);
		 $selected_box_style = $eswipe_custom['selected_box_style'];
		 $selected_head_style = $eswipe_custom['selected_head_style'];
		 $selected_btn_style = $eswipe_custom['selected_btn_style'];   
	   }
	?> 
    <form action="" method="post">             
     <input type="hidden" name="id" value="<?php echo $id; ?>" />    
     <?php  require_once WP_GSWAIBOT_TEMPLATE_DIR.'/inc/eswipe-style-design.php';    ?>
     <div class="email-swipe-action"><button name="submit" value="submit">Save Affiliate Swipe</button></div>   
    </form>
  <?php } //end if($result['result']) ?>
<?php } //end if(isset($_GET['id']) && $_GET['id']) ?>  

 <?php include WP_GSWAIBOT_TEMPLATE_DIR.'/inc/ads.php'; ?>
</div>     
	