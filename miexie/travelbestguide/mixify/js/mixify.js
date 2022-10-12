//start menu accordion   
jQuery(document).ready(function(){
   selectmenu(jQuery('#mixify-nav > li:first-child > a'));
   jQuery('#mixify-nav > li > a').click(function(){	  
      jQuery('#mixify-nav > li > ul > li  a').removeClass('active'); 
      selectmenu(this);
   });
   
   jQuery('#mixify-nav > li > ul > li  a').click(function(){
      jQuery('#mixify-nav > li > ul > li  a').removeClass('active');
      jQuery(this).addClass('active');
   });
   
 });
 
function selectmenu(selected){
  if (jQuery(selected).attr('class') != 'active'){
      jQuery('#mixify-nav > li > ul').slideUp();
      jQuery(selected).next().slideToggle();
      jQuery('#mixify-nav > li > a').removeClass('active');
      jQuery(selected).addClass('active');
  }
} 
function showpage(nth,thisselector){
  jQuery('#mixify-body-wrapper > div').removeClass('active-mixify-body');          
  jQuery('#mixify-body-wrapper > div:nth-child('+nth+')').addClass('active-mixify-body'); 
}

//-----------------------------------------------------
//start raphael js onload functionality
(function() {
    var paper, circs, i, nowX, nowY, timer, props = {}, toggler = 0, elie, dx, dy, rad, cur, opa;
    // Returns a random integer between min and max  
    // Using Math.round() will give you a non-uniform distribution!  
    function ran(min, max)  
    {  
        return Math.floor(Math.random() * (max - min + 1)) + min;  
    } 
    
    function moveIt()
    {
        for(i = 0; i < circs.length; ++i)
        {            
              // Reset when time is at zero
            if (! circs[i].time) 
            {
                circs[i].time  = ran(30, 100);
                circs[i].deg   = ran(-179, 180);
                circs[i].vel   = ran(1, 5);  
                circs[i].curve = ran(0, 1);
                circs[i].fade  = ran(0, 1);
                circs[i].grow  = ran(-2, 2); 
            }                
                // Get position
            nowX = circs[i].attr("cx");
            nowY = circs[i].attr("cy");   
               // Calc movement
            dx = circs[i].vel * Math.cos(circs[i].deg * Math.PI/180);
            dy = circs[i].vel * Math.sin(circs[i].deg * Math.PI/180);
                // Calc new position
            nowX += dx;
            nowY += dy;
                // Calc wrap around
            if (nowX < 0) nowX = 490 + nowX;
            else          nowX = nowX % 490;            
            if (nowY < 0) nowY = 490 + nowY;
            else          nowY = nowY % 490;
            
                // Render moved particle
            circs[i].attr({cx: nowX, cy: nowY});
            
                // Calc growth
            rad = circs[i].attr("r");
            if (circs[i].grow > 0) circs[i].attr("r", Math.min(30, rad +  .1));
            else                   circs[i].attr("r", Math.max(10,  rad -  .1));
            
                // Calc curve
            if (circs[i].curve > 0) circs[i].deg = circs[i].deg + 2;
            else                    circs[i].deg = circs[i].deg - 2;
            
                // Calc opacity
            opa = circs[i].attr("fill-opacity");
            if (circs[i].fade > 0) {
                circs[i].attr("fill-opacity", Math.max(.3, opa -  .01));
                circs[i].attr("stroke-opacity", Math.max(.3, opa -  .01)); }
            else {
                circs[i].attr("fill-opacity", Math.min(1, opa +  .01));
                circs[i].attr("stroke-opacity", Math.min(1, opa +  .01)); }

            // Progress timer for particle
            circs[i].time = circs[i].time - 1;
            
                // Calc damping
            if (circs[i].vel < 1) circs[i].time = 0;
            else circs[i].vel = circs[i].vel - .05;              
       
        } 
        timer = setTimeout(moveIt, 60);
    }
    
    window.onload = function () {
        paper = Raphael("mixify-header-bubbles", "100%", "100%");
        circs = paper.set();
        for (i = 0; i < 30; ++i)
        {
            opa = ran(3,10)/10;
            circs.push(paper.circle(ran(0,1000), ran(0,1000), ran(10,30)).attr({"fill-opacity": opa,
                                                                           "stroke-opacity": opa}));
        }
        circs.attr({fill: "#84912b", stroke: "#84912b"});
        moveIt();
        elie = document.getElementById("toggle");
        elie.onclick = function() {
            (toggler++ % 2) ? (function(){
                    moveIt();
                    elie.value = " Stop ";
                }()) : (function(){
                    clearTimeout(timer);
                    elie.value = " Start ";
                }());
        }
    };
}());
//----------------END raphael functionality--------------------------

//-------START Social Icon Preview------
function socialicon_preview(prefix){
   var div_wrapper = '.'+prefix+'-wrapper'; 
   var iconfilename = prefix;
   iconfilename  = iconfilename + '-' + jQuery(div_wrapper+'  select.select-icon-name').val();   
   iconfilename  = iconfilename + '-' + jQuery(div_wrapper+'  select.select-icon-size').val();
   jQuery(div_wrapper+'  img.iconpreview').attr('src', mixify_social_iconurl+'/'+iconfilename+'.png');   

}
//-------END Social Icon Preview------

//-------START Add New Slider Image------
function slider_newimg(){
   var div_wrapper = '#mixify-sliderimages-container'; 
   var numslides_sel = '#slider-numimages';       
   var numslides = jQuery(numslides_sel).val();
   var content = '<div class="field-row  mixify-each-slider" id="field-row'+numslides+'" >  <hr /> <div class="field-row" ><button class="button button-primary mixify-left mixify-upload-btn" ><i class="fa fa-upload"></i> Upload an Image</button> &nbsp;&nbsp;<b class="mixify-left">- OR -</b>&nbsp;&nbsp; <button  class="button button-primary mixify-left mixify-pastelink-btn"><i class="fa fa-clipboard"></i> Paste an image link</button></div>     <div class="field-row" >      <input type="hidden"  class="mixify-img-id"   value="0"  /> <input type="text" readonly="readonly" value=""  class="mixify-left  mixify-fullwidth  mixify-slider-src"/> <img src="'+mixify_sliderimages_url+'/default-image.jpg" style="max-width:80%;" title="New Image" alt="New Image" />  </div>  <p><input type="text" class="mixify-left  mixify-fullwidth mixify-slider-title" value="" /></p> <p><textarea class="mixify-left  mixify-fullwidth  mixify-slider-text" ></textarea></p><p><button class="button button-primary mixify-left mixify-upload-btn"  onclick="jQuery(\'#field-row'+numslides+'\').remove();"><i class="fa fa-trash"></i> Remove Image</button></p>  </div>   ';
   jQuery(div_wrapper).append(content);
   numslides = Number(numslides)+Number(1);  
   jQuery(numslides_sel).val(numslides);   
   mixifyinitupload();  

}
//-------END Add New Slider Image------

//-------START update changes------
function mixify_updatechanges(button){
   var nameattr	= 'data-mixifyname';
   var typeattr	= 'data-mixifytype';  
   var typeattr_formfield	= 'form-field'; 
   var typeattr_formslider	= 'form-slider'; 
   
   var themeoptions = new Array;
   var i=0;
   
   if(button=='reset'){
	   var proceed = confirm("Are you sure you want to reset all changes made to your site? This will revert all changes to its default settings. Please click OK to proceed.");
	   var appenmsg = 'reset';
   }else{
	   var proceed = true;
	   var appenmsg = 'saved';
   }
   
  
 if(proceed){
	
	 //start checking and getting data name and data type
   jQuery(mixify_status_wrapper).html('<div class="normal"  ><img src="'+mixify_images_url+'/ajax_small.gif" /> Updating changes...</div>').fadeIn('normal');       
   jQuery('['+nameattr+']').each(function(){
	   if(jQuery(this).attr(typeattr)==typeattr_formfield){
		   themeoptions[i] = JSON.stringify({name:jQuery(this).attr(nameattr),value:jQuery(this).val(),type:jQuery(this).attr(typeattr)});
		   i++;
	   }else if(jQuery(this).attr(typeattr)==typeattr_formslider){
		   var value = new Array; var x=0; 
		   jQuery(".mixify-each-slider", this).each(function(){
			   value[x] = {src:jQuery(".mixify-slider-src", this).val(),title:jQuery(".mixify-slider-title", this).val(),text:jQuery(".mixify-slider-text", this).val()};
			   x++;   
		   });	    
		  
		  themeoptions[i] = JSON.stringify({name:jQuery(this).attr(nameattr),value:value,type:jQuery(this).attr(typeattr)});
		  i++;
	   }
   }); 
   
   //start ajax posting      
   var arr_dataval = { action:'mixify_updatechanges', button:button, themeoptions:themeoptions };   
   jQuery.post(mixify_ajaxurl, arr_dataval, function(response) {    
     if(response=='TRUE'){	   
       jQuery(mixify_status_wrapper).html('<div class="success"  ><span class="status-icon"><i class="fa fa-check"></i></span> Changes have been successfully '+appenmsg+'.</div>').fadeIn('normal').fadeOut(7000);  
	 }else{
		 jQuery(mixify_status_wrapper).html('<div class="error"  ><span class="status-icon"><i class="fa fa-times"></i></span> Sorry something went wrong. Unable to  '+appenmsg+' changes.</div>').fadeIn('normal').fadeOut(7000);  
	 }
   });    
 }   
    

}
//-------END update changes------
