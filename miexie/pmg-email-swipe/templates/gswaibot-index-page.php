<?php $class_myplugin = new Class_Gswaibot;  ?>
<div class="gswaibot-maincontent" id="gswaibot-index-page">
	<h1>EZ Affiliate Swipe</h1>			
	<div class="email-swipe-action"><a href="<?php menu_page_url( 'gswaibot-new-eswipe-page' ); ?>"> <button>Add New Affiliate Swipe</button></a></div>
   
   <div class="gswaibot-maincontent-inner">
     <?php if(isset($_GET['msg']) && $msg = $_GET['msg']){ 
	   $msgtype = (isset($_GET['msgtype']) && $_GET['msgtype']) ? $_GET['msgtype'] : '';
	   echo '<div class="notice '.$msgtype.' is-dismissible"><p>'.$msg.'</p></div>'; 
	 }
	 ?>
     
      <?php if((isset($_GET['action']) && $_GET['action'] == 'duplicate') && (isset($_GET['id']) && $id = $_GET['id'])){ 
	    $return =  $class_myplugin->make_duplicate(array('id'=>$id));
	    echo '<div class="notice '.$return['msgtype'].' is-dismissible"><p>'.$return['msg'].'</p></div>'; 
	 }
	 ?>
     
      <table class="wp-list-table widefat fixed striped">
      <thead>
       <tr>
        <td width="50">ID</td><td width="200">Name</td><td width="200" >Shortcode</td><td style="padding-left:20px;">Action</td>
       </tr>
      </thead>
      <tbody>
       <?php
  global $wpdb;
  $result = $wpdb->get_results(" SELECT * FROM $wpdb->posts  WHERE post_type='pmg_eswipe' ORDER BY ID DESC");
 if($result){   
	 foreach($result as $row): ?>   
      <tr> <td><?php echo $row->ID; ?></td><td><?php echo $row->post_title; ?></td><td>[affiliate_swipe id="<?php echo $row->ID; ?>"]</td><td><a href="<?php menu_page_url( 'gswaibot-new-eswipe-page' ); ?>&id=<?php echo $row->ID; ?>" class="eswipe-btn btn-edit">Edit Content</a>
      <a href="<?php menu_page_url( 'gswaibot-edit-eswipe-style-page' ); ?>&id=<?php echo $row->ID; ?>" class="eswipe-btn btn-edit-style">Edit Style</a>
       <a href="<?php menu_page_url( 'gswaibot-index-page' ); ?>&action=duplicate&id=<?php echo $row->ID; ?>" class="eswipe-btn btn-duplicate">Duplicate</a>        
      <a href="<?php menu_page_url( 'gswaibot-delete-eswipe-page' ); ?>&id=<?php echo $row->ID; ?>" class="eswipe-btn btn-delete">Delete</a></td> </tr>    
      <?php endforeach;
 }else{ ?>
    <tr><td colspan="4"> <div class="notice notice-info is-dismissible"><p>You have no affiliate swipe added yet.</p> </td></tr>
 <?php  }  ?>
      </tbody>
      </table>
   </div> 
   <?php include WP_GSWAIBOT_TEMPLATE_DIR.'/inc/ads.php'; ?>
</div>     

	