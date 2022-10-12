jQuery(function(){   
	  //accordion style
	  jQuery('#preview-accordion').accordion({  heightStyle: "content"  });   
	  
	  //vertical tabs                            
      jQuery( "#vertical-tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
      jQuery( "#vertical-tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );       
	  
	   //horizontal tabs
	  jQuery( ".eswipe-tabs" ).tabs();   
	  
	  //check radio jquery ui
	  jQuery('input.eswipe-checkradio').checkboxradio();
	  
    });        
	
//---------------------------
  jQuery(function(){ 
     
	 jQuery('input[name="eswipe-title"]').on('change', function(e) {
		  var content = jQuery(this).val();
          jQuery('#preview-accordion .eswipe-box  > h3').html(content);
      });
      
	  
      tinymce.init({
  		selector: 'textarea.new-eswipe-textarea',
		min_height: 500,
  		menubar: false,
        toolbar: false,
		setup: function(editor) {
             editor.on('change', function(e) {
				  var editorcontent = editor.getContent();
                 jQuery('#preview-accordion .eswipe-box-content > #eswipe-box-text-0').html(editorcontent);
            });
        }

      });           


    });   	