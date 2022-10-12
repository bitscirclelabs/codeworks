 <!--start Slider Images Page-->

<div class="mixify-body-inner  mixify-body-sliderimages-inner" > 
<?php 
$optionname = 'mixify_slider_images'; 
$mixify_slider_images = mixify_get_option($optionname,array('unserialize'=>true));
$numimages = count($mixify_slider_images);
?> 	 
     <div class="field-row" ><?php include MIXIFY_INCLUDES_DIR.'/mixify-inc-main-btns.php';  ?></div>  
    
    
     <div class="field-row" >
       <h2>Upload Images for Slider</h2>
       <p class="description">*This is your website slider. Images must be 1366px width and 400px height. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>',array(&#39;unserialize&#39;=&gt;true)); ?&gt;</pre> </p> 
     </div>  
        
<div class="field-row" id="mixify-sliderimages-container"  data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-slider"  >          
    <!--start getting no of images-->     
    <input type="hidden" id="slider-numimages" value="<?php echo $numimages; ?>" />
    <?php 
	  for($i=0; $i<$numimages; $i++){ $arreachimg = (array)$mixify_slider_images[$i];   ?>
      
      <div class="field-row  mixify-each-slider" id="field-row<?php echo $i; ?>"    >
      <hr /> 
      <div class="field-row" ><button class="button button-primary mixify-left mixify-upload-btn" ><i class="fa fa-upload"></i>
 Upload an Image</button> &nbsp;&nbsp;<b class="mixify-left">- OR -</b>&nbsp;&nbsp; <button  class="button button-primary mixify-left mixify-pastelink-btn"><i class="fa fa-clipboard"></i> Paste an image link</button></div>
 
       <div class="field-row" >
         <input type="hidden"  class="mixify-img-id"   value="0"  />
         <input type="text" readonly="readonly" value="<?php echo $arreachimg['src']; ?>"  class="mixify-left  mixify-fullwidth mixify-slider-src" />
         <img src="<?php echo $arreachimg['src']; ?>" style="max-width:80%;" title="<?php echo $arreachimg['title']; ?>" alt="<?php echo $arreachimg['title']; ?>" />
        </div>  
        
       <p><input type="text" class="mixify-left  mixify-fullwidth  mixify-slider-title" value="<?php echo $arreachimg['title']; ?>" /></p>          
	  <p><textarea class="mixify-left  mixify-fullwidth  mixify-slider-text" ><?php echo $arreachimg['text']; ?></textarea></p>
	 <p><button class="button button-primary mixify-left mixify-upload-btn"  onclick="jQuery('#field-row<?php echo $i; ?>').remove();"><i class="fa fa-trash"></i> Remove Image</button></p>  
             
  </div>   
  <?php   }//end for($i=0; $i<$numimages; $i++){	?>
    
</div>    
    
	<br />
	<div class="field-row" >
	<button class="button button-primary mixify-left" onclick="slider_newimg();" ><i class="fa fa-file-image-o"></i> Add New Image</button>
	</div>
	
    <div class="field-row" ><?php include MIXIFY_INCLUDES_DIR.'/mixify-inc-main-btns.php';  ?></div>  
      
</div>
   