 <!--start Social Media Page-->
 <?php $social_icons=$mixify_site_config['mixify_social_icons']; 
 $social_icons_sizes=$mixify_site_config['mixify_social_icons_sizes']; ?>
<div class="mixify-body-inner" >  
	 
	  <div class="field-row" ><?php include MIXIFY_INCLUDES_DIR.'/mixify-inc-main-btns.php';  ?></div>  
       
  <!--start facebook social icon-->	 	 
	 <div class="field-row" >
	  <div><?php  $socialname = 'Facebook'; $iconprefix = 'fb'; 
	  $iconfilename = $iconprefix;
	   echo $socialname; ?>
      </div>
	  <div class="<?php echo $iconprefix;?>-wrapper" >        
        
      <div class="field-row"  >
	    <div><strong>Icon:</strong> <?php $optionname = 'mixify_social_'.$iconprefix.'_icon'; ?></div>
		<div>
        <div class="field-row" ><button class="button button-primary mixify-left  mixify-upload-btn"><i class="fa fa-upload"></i>
 Upload an Image</button> &nbsp;&nbsp;<b class="mixify-left">- OR -</b>&nbsp;&nbsp; <button  class="button button-primary mixify-left mixify-pastelink-btn"><i class="fa fa-clipboard"></i>
 Paste an image link</button></div>
        <div class="field-row" >
         <input type="hidden"  class="mixify-img-id"   value="0"  />
         <input type="text" readonly="readonly"  value="<?php echo mixify_get_option($optionname); ?>"  data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field" />
        <br /> <img src="<?php echo mixify_get_option($optionname); ?>" style="max-width:32px;max-height:32px;"  title="<?php echo $socialname; ?> Icon" alt="<?php echo $socialname; ?> Icon" />
        </div> 
		<p class="description">Upload your custom <?php echo $socialname; ?> icon. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p></div>
	  </div>  
             
       <div class="field-row"  >
	    <div><strong>Link:</strong>   <?php $optionname = 'mixify_social_'.$iconprefix.'_link'; ?> </div>
		<div>       
        <div class="field-row" >
           <input type="text" value="<?php echo mixify_get_option($optionname); ?>"  data-mixifyname="<?php echo $optionname; ?>"   data-mixifytype="form-field"   /></div>
        </div> 
	 <p class="description">Paste your <?php echo $socialname; ?> link here. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> 
.</p> </div>
	 
      
            
      </div>
    </div>   
      
	<div class="field-row" ><hr /></div>	 
	
     <!--start facebook social icon-->	 	 
	 <div class="field-row" >
	  <div><?php  $socialname = 'YouTube'; $iconprefix = 'yt'; 
	  $iconfilename = $iconprefix;
	   echo $socialname; ?>
      </div>
	  <div class="<?php echo $iconprefix;?>-wrapper" >        
        
      <div class="field-row"  >
	    <div><strong>Icon:</strong> <?php $optionname = 'mixify_social_'.$iconprefix.'_icon'; ?></div>
		<div>
        <div class="field-row" ><button class="button button-primary mixify-left  mixify-upload-btn"><i class="fa fa-upload"></i>
 Upload an Image</button> &nbsp;&nbsp;<b class="mixify-left">- OR -</b>&nbsp;&nbsp; <button  class="button button-primary mixify-left mixify-pastelink-btn"><i class="fa fa-clipboard"></i>
 Paste an image link</button></div>
        <div class="field-row" >
         <input type="hidden"  class="mixify-img-id"   value="0"  />
         <input type="text" readonly="readonly"  value="<?php echo mixify_get_option($optionname); ?>"  data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field" />
        <br /> <img src="<?php echo mixify_get_option($optionname); ?>" style="max-width:32px;max-height:32px;"  title="<?php echo $socialname; ?> Icon" alt="<?php echo $socialname; ?> Icon" />
        </div> 
		<p class="description">Upload your custom <?php echo $socialname; ?> icon. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p></div>
	  </div>  
             
       <div class="field-row"  >
	    <div><strong>Link:</strong>   <?php $optionname = 'mixify_social_'.$iconprefix.'_link'; ?> </div>
		<div>       
        <div class="field-row" >
           <input type="text" value="<?php echo mixify_get_option($optionname); ?>"  data-mixifyname="<?php echo $optionname; ?>"   data-mixifytype="form-field"   /></div>
        </div> 
	 <p class="description">Paste your <?php echo $socialname; ?> link here. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> 
.</p> </div>
	 
      
            
      </div>
    </div>   
     
    
    
	<div class="field-row" ><?php include MIXIFY_INCLUDES_DIR.'/mixify-inc-main-btns.php';  ?></div>   
      
</div>
   