<div class="gswaibot-maincontent" id="gswaibot-index-page">
	<h1>Add Affiliate Swipe</h1>			
	
	
    <div class="accordion-inner-body textarea-wrapper" >
    
      <?php 
	  $class_myplugin = new Class_Gswaibot; 
	  $id = 0; $title=''; $content='';
	  $success = false; 
	  if(isset($_POST['submit'])){
		  $meta_key = 'eswipe-custom-design';
		  $id = (isset($_POST['id']) && $_POST['id']) ? $_POST['id'] : false;
		  $title = (isset($_POST['eswipe-title']) && $_POST['eswipe-title']) ? $_POST['eswipe-title'] : false;
		  $content = (isset($_POST['eswipe-content']) && $_POST['eswipe-content']) ? $_POST['eswipe-content'] : false;
		  $eswipe_custom_design = (!empty($_POST['eswipe-custom-design']) && $_POST['eswipe-custom-design']) ? $_POST['eswipe-custom-design'] : false;
			   
		  if(!$title){ ?>
			  <div class="notice notice-error is-dismissible"><p>Please provide a title to your new email swipe.</p></div>
		  <?php }
		  
		  if(!$content){ ?>
			  <div class="notice notice-error is-dismissible"><p>Please provide a content to your new email swipe.</p></div>
		  <?php }
		  
		  if($title && $content){
			  $args = array('post_title'=>$title, 'post_type'=>'pmg_eswipe', 'post_content' => $content);  
			  
			  if($id){
				  $args['ID'] = $id;
				  if(wp_update_post($args)){
			      }else{  ?><div class="notice notice-error is-dismissible"><p>Something went wrong. Please try again later.</p></div><?php
			      }
				  
			  }else{
			      if($id = wp_insert_post($args)){
			      }else{  ?><div class="notice notice-error is-dismissible"><p>Something went wrong. Please try again later.</p></div><?php
			   }
			  }//end  if($id)
			  
			  
			  
		   //adding post meta
			if($id){ 
			 if($eswipe_custom_design){
			    $meta_value = stripslashes($eswipe_custom_design);
			    $meta_value = json_decode($meta_value,true);
			    $meta_value = serialize($meta_value);
			    if( get_post_meta( $id,  $meta_key, true ) ) { update_post_meta($id,  $meta_key, $meta_value);
			    }else{ add_post_meta($id, $meta_key, $meta_value, true); }
			 }
			 
				  $url = menu_page_url( 'gswaibot-index-page', false ).'&msg='.urlencode('Affiliate swipe has been successfully saved.').'&msgtype=notice-success'; ?> <script>window.location="<?php echo $url; ?>";</script><?php
		 
			}
			  //------------
			  
			  
			  
		  }
	  }else{
		  
		  	//start getting existing id
			if(isset($_GET['id']) && $_GET['id']){
  			  $id = $_GET['id'];
			  $result = $class_myplugin->get_eswipe(array('id'=>$id));
              if($result['result']){ $record = $result['result'][0]; $title=$record->post_title; $content=$record->post_content;}
			}
		  
	  }
	 ?>
     
     <?php
	  $eswipe_custom = array();
      if($id){$result = $class_myplugin->get_eswipe(array('id'=>$id));
       if($result['result']){ $record = $result['result'][0]; 
	    if($meta_value = get_post_meta( $record->ID, 'eswipe-custom-design', true )){
		 $eswipe_custom = unserialize($meta_value);
		 $selected_box_style = $eswipe_custom['selected_box_style'];
		 $selected_head_style = $eswipe_custom['selected_head_style'];
		 $selected_btn_style = $eswipe_custom['selected_btn_style'];   
	   } } }
	   ?>
     <form action="" method="post">   
      <input type="hidden" name="id" value="<?php echo $id; ?>" />
      <input type="text" placeholder="Enter email swipe title here..." name="eswipe-title" class="" value="<?php echo $title; ?>" />
      <textarea name="eswipe-content" class="new-eswipe-textarea"><?php echo $content; ?></textarea>
      <br />
      <?php  require_once WP_GSWAIBOT_TEMPLATE_DIR.'/inc/eswipe-style-design.php';    ?>
      <div class="email-swipe-action"><button name="submit" value="submit">Save Affiliate Swipe</button></div>
      </form>
    </div>

 <?php include WP_GSWAIBOT_TEMPLATE_DIR.'/inc/ads.php'; ?>
</div>     
	