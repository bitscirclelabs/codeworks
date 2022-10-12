//-------START update changes------
function mixify_updatechanges(){
	
  var mixify_status_wrapper = '#mixify-status-wrapper';	 
  var nameattr	= 'data-mixifyname';
   var typeattr	= 'data-mixifytype';  
   var typeattr_formfield	= 'form-field'; 
   var typeattr_formslider	= 'form-slider'; 
   var themeoptions = new Array;
   var i=0;
   
 	
	 //start checking and getting data name and data type
   jQuery(mixify_status_wrapper).html('<div class="normal"  ><img src="'+mixify_images_url+'/ajax_small.gif" /> Updating sales price...</div>').fadeIn('normal');       
   
   jQuery('['+nameattr+']').each(function(){
	 themeoptions[i] = JSON.stringify({name:jQuery(this).attr(nameattr),value:jQuery(this).val(),type:jQuery(this).attr(typeattr)});
	 i++;   
   });    
   
   
   //start ajax posting      
   var arr_dataval = { action:'mixify_update_sales',  themeoptions:themeoptions };   
   jQuery.post(ajaxurl, arr_dataval, function(response) { 
      
     if(response=='TRUE'){	   
       jQuery(mixify_status_wrapper).html('<div class="success"  ><span class="status-icon"><i class="fa fa-check"></i></span> Product sales price has been successfully updated.</div>').fadeIn('normal').fadeOut(7000);  
	 }else{
		 jQuery(mixify_status_wrapper).html('<div class="error"  ><span class="status-icon"><i class="fa fa-times"></i></span> Sorry something went wrong. Unable to  update sales price.</div>').fadeIn('normal').fadeOut(7000);  
	 }
	 
   });    
 
    

}
//-------END update changes------
