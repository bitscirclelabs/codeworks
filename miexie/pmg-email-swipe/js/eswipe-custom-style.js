function eswipe_update_style(refresh_style) {	
 var option_wrapper = '#style-options-area';	
 var box1_sel_raw = 'eswipe-box-1';
 var box2_sel_raw = 'eswipe-box-2';
 var box1_sel = '#'+box1_sel_raw;
 var box2_sel = '#'+box2_sel_raw;

//box 1 default values
 var box1_style = {
	    border_size : {sel:'box-border-size', val:1},
	    border_color : {sel:'box-border-color', val:'#dddddd'},
	    border_style : {sel:'box-border-style', val:'solid'},
	    bg_color : {sel:'box-bg-color', val:'#ffffff'},
	    border_radius_topleft : {sel:'box-border-radius-topleft', val:3},
		border_radius_topright : {sel:'box-border-radius-topright', val:3},
	    border_radius_botleft : {sel:'box-border-radius-botleft', val:3},
		border_radius_botright : {sel:'box-border-radius-botright', val:3},   
	 }
 
  var box1_head_style = {
	    font_color : {sel:'head-font-color', val:'#000000'},
		font_size : {sel:'head-font-size', val:20},    
		font_weight : {sel:'head-font-weight', val:'bold'},  
		bg_color : {sel:'head-bg-color', val:'#f6f6f6'},      
		text_case : {sel:'head-text-case', val:'capitalize'}, 
		border_bottom: {val:'1px solid #dddddd'}, 
	 }

  var box1_btn_style = {
	    font_color : {sel:'btn-font-color', val:'#ffffff'},
		font_size : {sel:'btn-font-size', val:14},    
		font_weight : {sel:'btn-font-weight', val:'normal'},  
		bg_color : {sel:'btn-bg-color', val:'#0073aa'},      
		text_case : {sel:'btn-text-case', val:'capitalize'}, 
		border_radius_topleft : {sel:'btn-border-radius-topleft', val:0},
		border_radius_topright : {sel:'btn-border-radius-topright', val:0},
	    border_radius_botleft : {sel:'btn-border-radius-botleft', val:0},
		border_radius_botright : {sel:'btn-border-radius-botright', val:0},   
	 }

//box 2 default values
 var box2_style = {
	    border_size : {sel:'box-border-size', val:3},
	    border_color : {sel:'box-border-color', val:'#faa523'},
	    border_style : {sel:'box-border-style', val:'dashed'},   
	    bg_color : {sel:'box-bg-color', val:'#ffffff'},
	    border_radius_topleft : {sel:'box-border-radius-topleft', val:0},
		border_radius_topright : {sel:'box-border-radius-topright', val:0},
	    border_radius_botleft : {sel:'box-border-radius-botleft', val:0},
		border_radius_botright : {sel:'box-border-radius-botright', val:0},   
	 }
 
  var box2_head_style = {
	    font_color : {sel:'head-font-color', val:'#000000'},
		font_size : {sel:'head-font-size', val:20},    
		font_weight : {sel:'head-font-weight', val:'bold'},  
		bg_color : {sel:'head-bg-color', val:'#ffffff'},      
		text_case : {sel:'head-text-case', val:'capitalize'},
		border_bottom: {val:'0 none'},  
	 }

  var box2_btn_style = {
	    font_color : {sel:'btn-font-color', val:'#ffffff'},
		font_size : {sel:'btn-font-size', val:14},    
		font_weight : {sel:'btn-font-weight', val:'normal'},  
		bg_color : {sel:'btn-bg-color', val:'#0073aa'},      
		text_case : {sel:'btn-text-case', val:'capitalize'}, 
		border_radius_topleft : {sel:'btn-border-radius-topleft', val:0},
		border_radius_topright : {sel:'btn-border-radius-topright', val:0},
	    border_radius_botleft : {sel:'btn-border-radius-botleft', val:0},
		border_radius_botright : {sel:'btn-border-radius-botright', val:0},   
	 }
	 
	 
	 
 //start checking selected box 
 var box = jQuery(option_wrapper+' input[name="radio-box"]:checked').val();
 var selected_box_sel = '#preview-accordion .textarea-wrapper > .eswipe-box';


 if(box=='box2'){  
	var selected_box_style = box2_style;
	var selected_head_style = box2_head_style;
	var selected_btn_style = box2_btn_style;
 }else{ 
	var selected_box_style = box1_style;
	var selected_head_style = box1_head_style;
	var selected_btn_style = box1_btn_style; 
  }   
     
	 
  //start checking if box style is being refreshed
  if(refresh_style){
	  //update options
	  
	 
	 
	  
	  //box style
	  jQuery('input[name="'+selected_box_style.border_size.sel+'"]').val(selected_box_style.border_size.val);
	 
	  jQuery('input[name="'+selected_box_style.border_color.sel+'"]').val(selected_box_style.border_color.val);
	  jQuery('input[name="'+selected_box_style.border_color.sel+'"]').parent().parent().children('a.wp-color-result').css('background-color',selected_box_style.border_color.val);
	  
	  jQuery('select[name="'+selected_box_style.border_style.sel+'"]').val(selected_box_style.border_style.val);
	  
	   jQuery('input[name="'+selected_box_style.bg_color.sel+'"]').val(selected_box_style.bg_color.val);
	  jQuery('input[name="'+selected_box_style.bg_color.sel+'"]').parent().parent().children('a.wp-color-result').css('background-color',selected_box_style.bg_color.val);
	  
	 jQuery('input[name="'+selected_box_style.border_radius_topleft.sel+'"]').val(selected_box_style.border_radius_topleft.val);
	 jQuery('input[name="'+selected_box_style.border_radius_topright.sel+'"]').val(selected_box_style.border_radius_topright.val);
	 jQuery('input[name="'+selected_box_style.border_radius_botleft.sel+'"]').val(selected_box_style.border_radius_botleft.val);
	 jQuery('input[name="'+selected_box_style.border_radius_botright.sel+'"]').val(selected_box_style.border_radius_botright.val); 
	  
	  
	  
	  //box head
	  jQuery('input[name="'+selected_head_style.font_color.sel+'"]').val(selected_head_style.font_color.val);
	  jQuery('input[name="'+selected_head_style.font_color.sel+'"]').parent().parent().children('a.wp-color-result').css('background-color',selected_head_style.font_color.val);
	  
	   jQuery('input[name="'+selected_head_style.font_size.sel+'"]').val(selected_head_style.font_size.val);
	   jQuery('select[name="'+selected_head_style.font_weight.sel+'"]').val(selected_head_style.font_weight.val);
	  
	   jQuery('input[name="'+selected_head_style.bg_color.sel+'"]').val(selected_head_style.bg_color.val);
	  jQuery('input[name="'+selected_head_style.bg_color.sel+'"]').parent().parent().children('a.wp-color-result').css('background-color',selected_head_style.bg_color.val);
	  
	   jQuery('select[name="'+selected_head_style.text_case.sel+'"]').val(selected_head_style.text_case.val);
	  
	  
	  
	  //button style
	  jQuery('input[name="'+selected_btn_style.font_color.sel+'"]').val(selected_btn_style.font_color.val);
	  jQuery('input[name="'+selected_btn_style.font_color.sel+'"]').parent().parent().children('a.wp-color-result').css('background-color',selected_btn_style.font_color.val);   
	  
	  jQuery('input[name="'+selected_btn_style.font_size.sel+'"]').val(selected_btn_style.font_size.val);
	  jQuery('select[name="'+selected_btn_style.font_weight.sel+'"]').val(selected_btn_style.font_weight.val);
	  
	  jQuery('input[name="'+selected_btn_style.bg_color.sel+'"]').val(selected_btn_style.bg_color.val);
	  jQuery('input[name="'+selected_btn_style.bg_color.sel+'"]').parent().parent().children('a.wp-color-result').css('background-color',selected_btn_style.bg_color.val);   
	  
	  jQuery('select[name="'+selected_btn_style.text_case.sel+'"]').val(selected_btn_style.text_case.val);
	  
	 jQuery('input[name="'+selected_btn_style.border_radius_topleft.sel+'"]').val(selected_btn_style.border_radius_topleft.val);
	 jQuery('input[name="'+selected_btn_style.border_radius_topright.sel+'"]').val(selected_btn_style.border_radius_topright.val);
	 jQuery('input[name="'+selected_btn_style.border_radius_botleft.sel+'"]').val(selected_btn_style.border_radius_botleft.val);
	 jQuery('input[name="'+selected_btn_style.border_radius_botright.sel+'"]').val(selected_btn_style.border_radius_botright.val); 
	
	 
	  
  }else{
	
	  
	  //start getting updated option values
	  //box style
	  selected_box_style.border_size.val = jQuery('input[name="'+selected_box_style.border_size.sel+'"]').val();  
	  selected_box_style.border_color.val =jQuery('input[name="'+selected_box_style.border_color.sel+'"]').val();
	  selected_box_style.border_style.val=jQuery('select[name="'+selected_box_style.border_style.sel+'"]').val();
	  selected_box_style.bg_color.val=jQuery('input[name="'+selected_box_style.bg_color.sel+'"]').val();
	  selected_box_style.border_radius_topleft.val=jQuery('input[name="'+selected_box_style.border_radius_topleft.sel+'"]').val();
	  selected_box_style.border_radius_topright.val = jQuery('input[name="'+selected_box_style.border_radius_topright.sel+'"]').val();
	  selected_box_style.border_radius_botleft.val=jQuery('input[name="'+selected_box_style.border_radius_botleft.sel+'"]').val();
	  selected_box_style.border_radius_botright.val=jQuery('input[name="'+selected_box_style.border_radius_botright.sel+'"]').val();
	  
	  
	  
	  //box head
	  selected_head_style.font_color.val=jQuery('input[name="'+selected_head_style.font_color.sel+'"]').val();
	  selected_head_style.font_size.val=jQuery('input[name="'+selected_head_style.font_size.sel+'"]').val();
	  selected_head_style.font_weight.val=jQuery('select[name="'+selected_head_style.font_weight.sel+'"]').val();
	  selected_head_style.bg_color.val=jQuery('input[name="'+selected_head_style.bg_color.sel+'"]').val();
	  selected_head_style.text_case.val=jQuery('select[name="'+selected_head_style.text_case.sel+'"]').val();
	  
	  //--constant values 
	  if(box=='box1'){  
	     selected_head_style.border_bottom.val = selected_box_style.border_size.val+'px '+selected_box_style.border_style.val+' '+selected_box_style.border_color.val;        
	  }
	  
	  
	  //button
	  selected_btn_style.font_color.val=jQuery('input[name="'+selected_btn_style.font_color.sel+'"]').val();
	  selected_btn_style.font_size.val=jQuery('input[name="'+selected_btn_style.font_size.sel+'"]').val();
	  selected_btn_style.font_weight.val=jQuery('select[name="'+selected_btn_style.font_weight.sel+'"]').val();
	  selected_btn_style.bg_color.val=jQuery('input[name="'+selected_btn_style.bg_color.sel+'"]').val();
	  selected_btn_style.text_case.val=jQuery('select[name="'+selected_btn_style.text_case.sel+'"]').val();
	  selected_btn_style.border_radius_topleft.val=jQuery('input[name="'+selected_btn_style.border_radius_topleft.sel+'"]').val();
	  selected_btn_style.border_radius_topright.val=jQuery('input[name="'+selected_btn_style.border_radius_topright.sel+'"]').val();
	  selected_btn_style.border_radius_botleft.val=jQuery('input[name="'+selected_btn_style.border_radius_botleft.sel+'"]').val();
	  selected_btn_style.border_radius_botright.val=jQuery('input[name="'+selected_btn_style.border_radius_botright.sel+'"]').val();
	  
	  
  } //end if(refresh_style)
	 
	 
	 
	 
	//---------------------------------------
	   //update preview
	  //box style
	  jQuery(selected_box_sel).css('border-width',selected_box_style.border_size.val+'px');
	  jQuery(selected_box_sel).css('border-color',selected_box_style.border_color.val);
	  jQuery(selected_box_sel).css('border-style',selected_box_style.border_style.val);
	  jQuery(selected_box_sel).css('background-color',selected_box_style.bg_color.val);
	  
	  var border_radius = selected_box_style.border_radius_topleft.val+'px '+selected_box_style.border_radius_topright.val+'px '+selected_box_style.border_radius_botleft.val+'px '+selected_box_style.border_radius_botright.val+'px';
	  jQuery(selected_box_sel).css('border-radius',border_radius);
	  jQuery(selected_box_sel).css('-moz-border-radius',border_radius);
	  jQuery(selected_box_sel).css('-webkit-border-radius',border_radius);
	  
	   //box head
	  jQuery(selected_box_sel+' > h3').css('color',selected_head_style.font_color.val);
	  jQuery(selected_box_sel+' > h3').css('font-size',selected_head_style.font_size.val+'px');
	  jQuery(selected_box_sel+' > h3').css('font-weight',selected_head_style.font_weight.val);
	  jQuery(selected_box_sel+' > h3').css('background-color',selected_head_style.bg_color.val);
	  jQuery(selected_box_sel+' > h3').css('text-transform',selected_head_style.text_case.val);
	  jQuery(selected_box_sel+' > h3').css('border-bottom',selected_head_style.border_bottom.val);
	  
	  
	  
	  //button style
	   jQuery(selected_box_sel+' .email-swipe-action button').css('color',selected_btn_style.font_color.val);
	   jQuery(selected_box_sel+' .email-swipe-action button').css('font-size',selected_btn_style.font_size.val+'px');
	   jQuery(selected_box_sel+' .email-swipe-action button').css('font-weight',selected_btn_style.font_weight.val);
	  jQuery(selected_box_sel+' .email-swipe-action button').css('background-color',selected_btn_style.bg_color.val);
	  jQuery(selected_box_sel+' .email-swipe-action button').css('text-transform',selected_btn_style.text_case.val);
	  
	   var border_radius = selected_btn_style.border_radius_topleft.val+'px '+selected_btn_style.border_radius_topright.val+'px '+selected_btn_style.border_radius_botleft.val+'px '+selected_btn_style.border_radius_botright.val+'px';
	  jQuery(selected_box_sel+' .email-swipe-action button').css('border-radius',border_radius);
	 jQuery(selected_box_sel+' .email-swipe-action button').css('-moz-border-radius',border_radius);
	  jQuery(selected_box_sel+' .email-swipe-action button').css('-webkit-border-radius',border_radius);
	
	
	
	//store overall design options to textarea field
	 var eswipe_custom_design = {
		 selected_box_style:selected_box_style,
	     selected_head_style:selected_head_style,      
	     selected_btn_style:selected_btn_style,
	 };
	 jQuery('textarea[name="eswipe-custom-design"]').val(JSON.stringify(eswipe_custom_design));
	 
}//end function eswipe_update_style(refresh_style)