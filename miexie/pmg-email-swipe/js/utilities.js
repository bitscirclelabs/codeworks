
function swapPage(sel_id,arr_data){
    jQuery(sel_id).removeClass('.hide-tag'); 
	jQuery('.hide-tag').fadeOut('fast');	
	jQuery(sel_id).addClass('.hide-tag').fadeIn('fast');   
	
	jQuery(sel_id + ' > .inner-maincontent-body').html('<p>loading...</p>'); 
	jQuery.post(ajaxurl, arr_data, function(response) {
		jQuery(sel_id + ' > .inner-maincontent-body').empty().html(response); 	
	
	});
	
	
}



function load_popup(arrdata,arr_dataval){
				var title = arrdata["title"];
				var closeimg = arrdata["closeimg"];
				
								  
                var panel = jQuery('<div class="alert_panel" id="alert_panelid" style="display:none;" ><div class="alert_title_container"> <img src="'+closeimg+'" onClick="javascript:close_alert();"/>  <div class="alert_title" id="alert_titleid"></div> </div>      <div class="alert_msg_container"> <div class="alert_msg" id="alert_msgid"></div> </div> </div>');
	            panel.appendTo(document.body);
                jQuery("#alert_titleid").empty().html(title);
				jQuery("#alert_msgid").empty().html('loading...');
				jQuery("#alert_panelid").slideToggle("normal");  
				
			if(arr_dataval){
				jQuery.post(ajaxurl, arr_dataval, function(response) {
					jQuery("#alert_msgid").empty().html(response); 	
				});
			}	
}



function close_alert(){
	jQuery("#alert_panelid").slideToggle('normal'); 
	jQuery("#alert_panelid").remove(); 
}



	
/**
	 * used for validating text field value and character length
	 *
	 * @access	public
	 * @param	jquery field selector, error selector, error message,  minimum character length, and boolean value if it is required
	 * @return	field value if true, and false otherwise
	 */
	function validate_field(selector,err_selector,err_msg,minlength,required)
	{
	   
		//if the field is required..
		if(required){
		   
			if(jQuery(selector).val()!="" && jQuery(selector).val().length >= minlength){
				jQuery(err_selector).fadeOut(500);
				return jQuery(selector).val();
				
			}else{
			   
				jQuery(err_selector).html('<font color="red">'+err_msg+'</font>').fadeIn(500);
				return false;
			}
		//if the field is not required..
		   
		}else{
			if(jQuery(selector).val()==""){
				jQuery(err_selector).fadeOut(500);
				var field='NULL';
				return field;
			}else{
				if(jQuery(selector).val().length >= minlength){
					jQuery(err_selector).fadeOut(500);
					return jQuery(selector).val();
				}else{
					jQuery(err_selector).html('<font color="red">'+err_msg+'</font>').fadeIn(500);
					return false;
				}  
			}
		}
		
		
	
	}//end function

	// --------------------------------------------------------------------
	/**
	 *Used to dynamically generating options for select	tag
	 *
	 * @access	public
	 * @param	ajax url, xml area selector, select selector, default option (none or select)
	 * @return	populated select
	 */

	 
	function populate_dynamicselect(sel_select,default_option,arr_dataval){
		
			jQuery(sel_select).html('<option value="" >populating..</option>');			
			jQuery(sel_select).html('<option value="" >'+default_option+'</option>');	
			
			jQuery.post(ajaxurl, arr_dataval, function(response) {
				jQuery(sel_select).append(response);	
			});
			
					
			
		}//end function

	// --------------------------------------------------------------------

	
	
/**
	 *Used to clear form fields
	 *
	 * @access	public
	 * @param	valid jquery form selector
	 * @return	none
	 */

	
	
	 
			
	function clear_form(sel_form){		
				jQuery(sel_form+' input[type="text"]').val('');
				jQuery(sel_form+' input[type="password"]').val('');
				jQuery(sel_form+' input[type="file"]').val('');
				jQuery(sel_form+' textarea').val('');
				jQuery(sel_form+' select option:nth-child(1)').attr('selected','selected');
			
			}//end function
	

	// --------------------------------------------------------------------
	
	
	

/**
	 * used for checking/unchecking all list items' checkboxes
	 *
	 * @access	public
	 * @param	status and form name
	 * @return	none
	 */

              var val=1;
              function SetChecked(chkName,formName) {
				var form=formName; //Give the form name here              
              dml=document.forms[form];
              len = dml.elements.length;
              var i=0;
              if(chkName=='all'){
              for( i=0 ; i<len ; i++){
                         dml.elements[i].checked=val;
                     }
 				if(val==1)
                   {
                   val=0;
                  
                   }else{
                   val=1;
                   
                   }
                }else{
             for( i=0 ; i<len ; i++){
                if(dml.elements[i].name==chkName){
                      dml.elements[i].checked=val;
            }
          }        
                              if(val==1)
                   {
                   val=0;
                  
                   }else{
                   val=1;
                   
                   }
   			 }
                   
                 
		}



//----------------------------------------------------
/**
	 * used for getting all checked items' id
	 *
	 * @access	public
	 * @param	controller's url to delete & jquery selector
	 * @return	string values of all checked items' id
	 */


function remove_items(tbl_name){  
	var chkitems_length=$(".chkbox:checked").length;
	if(chkitems_length>0){
		var confrm_status=confirm('Deleting these '+ chkitems_length + ' ' + tbl_name + ' will delete all their children records. Are you sure that you wanted to proceed?');
		
		var arr_ids=new Array;
		arr_ids[chkitems_length];
		var i=0;
		if(confrm_status){
		$(".chkbox:checked").each(function(){
				arr_ids[i]=$(this).val();
				i++;
				return arr_ids[i];
				
			});
		
			return arr_ids;		
		}else{
			return false;	
		}
			
	}else{
		alert('Please select an item to delete.');
		return false;
	}
	
}            


	// --------------------------------------------------------------------
	
		
		// Start Validating that company postcode should be numeric
	function digitonly (e, sel_id, err_msg)  
	{ 
		
	  //if the letter is not digit then display error and don't type anything
	  if( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57))
	  {
		//display error message
		$(sel_id).html('<font color="red">'+err_msg+'</font>').show().fadeOut(2000); 
	    return false;
		
      }	
	  
	}
// End Validating that company postcode should be numeric