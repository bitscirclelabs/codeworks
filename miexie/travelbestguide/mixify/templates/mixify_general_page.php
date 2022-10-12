 <!--start General Page-->
   <div class="mixify-body-inner active-mixify-body" >  
	  <div class="field-row" ><?php include MIXIFY_INCLUDES_DIR.'/mixify-inc-main-btns.php';  ?></div>     
      
	  <div class="field-row" >
	    <div>Site Title: <?php $optionname = 'blogname'; ?></div>
		<div><input type="text" value="<?php echo mixify_get_option($optionname); ?>"  data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  />
		<p class="description">This is the name of your blog.</p></div>
	  </div>


	  <div class="field-row" >
	    <div>Tagline: <?php $optionname = 'blogdescription'; ?></div>
		<div><input type="text" value="<?php echo mixify_get_option($optionname); ?>"  data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field" />
		<p class="description">In a few words, explain what this site is about.</p></div>   
	  </div>
	
     <div class="field-row"  >
	    <div>Site Logo: <?php $optionname = 'mixify_logo'; ?></div>
		<div>
        <div class="field-row" ><button class="button button-primary mixify-left mixify-upload-btn" ><i class="fa fa-upload"></i>
 Upload an Image</button> &nbsp;&nbsp;<b class="mixify-left">- OR -</b>&nbsp;&nbsp; <button  class="button button-primary mixify-left mixify-pastelink-btn"><i class="fa fa-clipboard"></i>
 Paste an image link</button></div>
        <div class="field-row" >
         <input type="hidden"  class="mixify-img-id"   value="0"  />
         <input type="text" readonly="readonly" value="<?php echo mixify_get_option($optionname); ?>"  data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  /> 
         <img src="<?php echo mixify_get_option($optionname); ?>" style="max-width:575px;max-height:135px;" title="Site Logo" alt="Site Logo" />
        </div> 
		<p class="description">Upload a custom logo image for your site here. Size for height should be 575px or 135px for a better display, for retina screens. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p></div>
	  </div>  
      
      <div class="field-row"  ><hr /></div>
      <div class="field-row"  >
	    <div>Site Favicon: <?php $optionname = 'mixify_favicon'; ?></div>
		<div>
        <div class="field-row" ><button class="button button-primary mixify-left  mixify-upload-btn"><i class="fa fa-upload"></i>
 Upload an Image</button> &nbsp;&nbsp;<b class="mixify-left">- OR -</b>&nbsp;&nbsp; <button  class="button button-primary mixify-left mixify-pastelink-btn"><i class="fa fa-clipboard"></i>
 Paste an image link</button></div>
        <div class="field-row" >
         <input type="hidden"  class="mixify-img-id"   value="0"  />
         <input type="text" readonly="readonly"  value="<?php echo mixify_get_option($optionname); ?>"  data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field" />
        <br /> <img src="<?php echo mixify_get_option($optionname); ?>" style="max-width:32px;max-height:32px;"  title="Site Logo" alt="Site Logo" />
        </div> 
		<p class="description">Upload a custom favicon (.ico/.png/.gif) image for your site here. Maximum size should be 32px x 32px. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p></div>
	  </div>  
      
      
      
   <div class="field-row" ><hr /></div>   
   
    <div class="field-row" >
	    <div>Contact No.: <?php $optionname = 'mixify_contactno'; ?></div>
		<div><input type="text" value="<?php echo mixify_get_option($optionname); ?>"   data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  />
		<p class="description">Enter your contact no. here. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p></div>
	</div>   
    
      <div class="field-row" ><hr /></div>   
   
   
    <div class="field-row" >
	    <div>Copyright: <?php $optionname = 'mixify_copyright'; ?></div>
		<div><textarea data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field" class="mixify-textarea" ><?php echo mixify_get_option($optionname); ?></textarea>
		<p class="description">Enter your copyright content here. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p></div>
	</div>   
    
      <div class="field-row" ><hr /></div>   
   
   
   
    <div class="field-row" > 
	    <div>Footer Widget1 Title: <?php $optionname = 'mixify_footer1_title'; ?></div>
		<div><input type="text" value="<?php echo mixify_get_option($optionname); ?>"   data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  />
		<p class="description">Enter the title for the first footer widget. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p></div>        
	</div>   
    
    <div class="field-row" > 
        <div>Footer Widget1 Content: <?php $optionname = 'mixify_footer1_content'; ?></div>
		<div><textarea data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field" class="mixify-textarea" ><?php echo mixify_get_option($optionname); ?></textarea>
		<p class="description">Enter the content of the first footer widget. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p></div>        
     </div>
     
     
      <div class="field-row" ><hr /></div>   
   
    <div class="field-row" > 
	    <div>Footer Widget2 Title: <?php $optionname = 'mixify_footer2_title'; ?></div>
		<div><input type="text" value="<?php echo mixify_get_option($optionname); ?>"   data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  />
		<p class="description">Enter the title for the second footer widget. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p></div>        
	</div>   
     <div class="field-row" > 
	    <div>Latest Post Limit: <?php $optionname = 'mixify_latestpost_limit'; ?></div>
		<div><input type="text" value="<?php echo mixify_get_option($optionname); ?>"   data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  />
		<p class="description">Enter number of latest posts to be displayed. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p></div>        
	</div>   
    
    
     <div class="field-row" ><hr /></div>   
   
    <div class="field-row" > 
	    <div>Footer Widget3 Title: <?php $optionname = 'mixify_footer3_title'; ?></div>
		<div><input type="text" value="<?php echo mixify_get_option($optionname); ?>"   data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  />
		<p class="description">Enter the title for the third footer widget. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p></div>        
	</div>   
      
	   <div class="field-row" ><?php include MIXIFY_INCLUDES_DIR.'/mixify-inc-main-btns.php';  ?></div>
   </div>
   