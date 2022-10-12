var _custom_media = true,
_orig_send_attachment = wp.media.editor.send.attachment;
var uploadbtn_class = '.mixify-upload-btn';
var pastelinkbtn_class = '.mixify-pastelink-btn';
jQuery(document).ready(function(){      
	mixifyinitupload();
});

function mixifyinitupload(){
  jQuery(uploadbtn_class).each(function(e) {
		var thisselector = this;
		jQuery(thisselector).click(function(){
		  mixifyupload(thisselector);		
		});
	});
	
	jQuery(pastelinkbtn_class).each(function(e) {
		var thisselector = this;
		jQuery(thisselector).click(function(){
		  var mainparent_div = jQuery(thisselector).parent().parent();
		  mainparent_div.children('div').children('input[type="text"]').removeAttr('readonly').val('');	
		  mainparent_div.children('div').children('img').fadeOut('normal');			
		  mainparent_div.children('div').children('input[type="hidden"]').val('0');		
		});
	});
 
	jQuery('.add_media').on('click', function(){
		_custom_media = false;
	});
}

function mixifyupload(thisselector){
	var send_attachment_bkp = wp.media.editor.send.attachment;
	var button = jQuery(thisselector);
	var mainparent_div = jQuery(thisselector).parent().parent();
	
		_custom_media = true;       
		wp.media.editor.send.attachment = function(props, attachment){  		    		           		     
			if ( _custom_media ) {
				mainparent_div.children('div').children('input[type="text"]').attr('readonly','readonly').val(attachment.url);	
				mainparent_div.children('div').children('img').attr('src',attachment.url).fadeIn('normal');					                mainparent_div.children('div').children('input[type="hidden"]').val(attachment.id);	 
			} else {
				return _orig_send_attachment.apply( this, [props, attachment] );
			};
		}
 
		wp.media.editor.open(button);     
		return false;	  
}