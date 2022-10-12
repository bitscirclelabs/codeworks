<div class="gswaibot-maincontent" id="gswaibot-index-page">
 <h1>Delete Affiliate Swipe</h1>			
<?php  $error = false;
$class_myplugin = new Class_Gswaibot; 
if(isset($_GET['id']) && $_GET['id']){
  $id = $_GET['id'];
  
  if(isset($_GET['action']) && $_GET['action']=='delete'){
	  if($class_myplugin->delete_eswipe(array('id'=>$id))){
		  $url = menu_page_url( 'gswaibot-index-page', false ).'&msg='.urlencode('Affiliate swipe has been successfully deleted.').'&msgtype=notice-success';
		 ?> <script>window.location="<?php echo $url; ?>";</script> <?php
	  }
  }
  
  
  $result = $class_myplugin->get_eswipe(array('id'=>$id));
  if($result['result']){ $record = $result['result'][0]; ?>
  Are you sure you want to delete this affiliate swipe?
  <h3>Name: <?php echo $record->post_title; ?></h3>	  
  <a href="<?php menu_page_url( 'gswaibot-delete-eswipe-page' ); ?>&action=delete&id=<?php echo $id; ?>" class="eswipe-btn eswipe-btn-auto btn-delete no-margin">Yes! I want to delete this.</a> <a href="<?php menu_page_url( 'gswaibot-index-page' ); ?>" class="eswipe-btn eswipe-btn-auto "><< Back to affiliate swipes</a>
	  
 <?php }else{  $error = 'Hey, the affiliate swipe you are trying to delete didn&#39;t already exists.';  }
}else{ $error = 'Something went wrong. Please try again later.'; } ?>	




<?php if($error){ ?>
 <div class="notice notice-error is-dismissible"><p><?php echo $error; ?> <br /> <a href="<?php menu_page_url( 'gswaibot-index-page' ); ?>"><< Back to affiliate swipes </a> </p></div>
<?php } ?>
 
  <?php include WP_GSWAIBOT_TEMPLATE_DIR.'/inc/ads.php'; ?>
</div>     
	