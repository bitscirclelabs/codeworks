(function( $ ) {
    $(function() { 
	   var myOptions = {   
        change: function(event, ui){ eswipe_update_style(); },        
        clear: function() { eswipe_update_style();  },  
          };
        $( '.pmg-colorpicker' ).wpColorPicker(myOptions);    
    });
})( jQuery );



 