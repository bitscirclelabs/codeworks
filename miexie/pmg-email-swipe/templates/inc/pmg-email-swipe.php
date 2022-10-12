<?php
  global $wpdb;
  $query = " SELECT * FROM $wpdb->posts  WHERE post_type='pmg_eswipe' ";
  if($a['id']){ $query .= " AND ID IN ($a[id]) "; }
  $query .= " ORDER BY ID DESC ";
  $result = $wpdb->get_results($query);
 
 if($result){
	 foreach($result as $row):
	 if($meta_value = get_post_meta( $row->ID, 'eswipe-custom-design', true )){
		 $eswipe_custom_design = unserialize($meta_value);
		 $selected_box_style = $eswipe_custom_design['selected_box_style'];
		 $selected_head_style = $eswipe_custom_design['selected_head_style'];
		 $selected_btn_style = $eswipe_custom_design['selected_btn_style'];
	  ?>
    
    <style>
	 /*Box Style*/
	 #eswipe-box-<?php echo $row->ID; ?> {
		 border-width:<?php echo $selected_box_style['border_size']['val']; ?>px;
		 border-color:<?php echo $selected_box_style['border_color']['val']; ?>;
		 border-style:<?php echo $selected_box_style['border_style']['val']; ?>;
		 background-color:<?php echo $selected_box_style['bg_color']['val']; ?>;
		 
		 <?php $border_radius = $selected_box_style['border_radius_topleft']['val'].'px '.$selected_box_style['border_radius_topright']['val'].'px '.$selected_box_style['border_radius_botleft']['val'].'px '.$selected_box_style['border_radius_botright']['val'].'px'; ?>
		 
		 border-radius:<?php echo $border_radius; ?>;
		 -moz-border-radius:<?php echo $border_radius; ?>;
		 -webkit-border-radius:<?php echo $border_radius; ?>;
	 }
	 
	 /*Head Style*/
	 #eswipe-box-<?php echo $row->ID; ?> > h3{
		 color: <?php echo $selected_head_style['font_color']['val']; ?>;
		 font-size: <?php echo $selected_head_style['font_size']['val']; ?>px;
		 font-weight: <?php echo $selected_head_style['font_weight']['val']; ?>;
		 background-color: <?php echo $selected_head_style['bg_color']['val']; ?>;
		 text-transform: <?php echo $selected_head_style['text_case']['val']; ?>;
		 border-bottom: <?php echo $selected_head_style['border_bottom']['val']; ?>;
		 margin:0px !important;
	 }
	 
	 /*Button Style*/
	 #eswipe-box-<?php echo $row->ID; ?> .email-swipe-action button{
		 color: <?php echo $selected_btn_style['font_color']['val']; ?>;
		 font-size: <?php echo $selected_btn_style['font_size']['val']; ?>;
		 font-weight: <?php echo $selected_btn_style['font_weight']['val']; ?>;
		 background-color: <?php echo $selected_btn_style['bg_color']['val']; ?>;
		 text-transform: <?php echo $selected_btn_style['text_case']['val']; ?>;
		 
		  <?php $border_radius = $selected_btn_style['border_radius_topleft']['val'].'px '.$selected_btn_style['border_radius_topright']['val'].'px '.$selected_btn_style['border_radius_botleft']['val'].'px '.$selected_btn_style['border_radius_botright']['val'].'px'; ?>
		  border-radius: <?php echo $border_radius; ?>;
		 -moz-border-radius: <?php echo $border_radius; ?>;
		 -webkit-border-radius: <?php echo $border_radius; ?>;
	 }
	</style> 
    <?php } ?>
    
    <div class="eswipe-box eswipe-box-<?php echo $row->ID; ?>" id="eswipe-box-<?php echo $row->ID; ?>">
      <h3><?php echo $row->post_title; ?></h3>
 	  <div class="eswipe-box-content">
	    <div id="eswipe-box-text-<?php echo $row->ID; ?>" ><?php echo do_shortcode($row->post_content); ?></div>
        <div class="email-swipe-action"><button onclick="copy_text('eswipe-box-text-<?php echo $row->ID; ?>')" type="button">Copy To Clipboard</button></div>
      </div>      
	 </div>
     
     
	 <?php endforeach;
 }else{ ?>
	<div class="notice notice-info is-dismissible"><p>You have no email swipe added yet.</p></div>
<?php  }  ?>


	