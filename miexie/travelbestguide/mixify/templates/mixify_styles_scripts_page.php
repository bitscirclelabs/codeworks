 <!--start Styles & Scripts Page-->
<div class="mixify-body-inner" >  
	  <div class="field-row" ><?php include MIXIFY_INCLUDES_DIR.'/mixify-inc-main-btns.php';  ?></div>  
  
    <div class="field-row" >
	  <div>Custom Javascript <?php $optionname = 'mixify_custom_js'; ?></div>
	  <div>  
            
         <div class="field-row" >
          <div class="field-column2  mixify-right">
            <p class="description">Enter your custom javascript in the text area found on left side. Do not include &lt;script&gt; &amp; &lt;&frasl;script&gt; tags. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p> 
          </div>
          <div class="field-column2">
           <textarea class="mixify-textarea" data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field" ><?php echo mixify_get_option($optionname); ?></textarea>
          </div>
       </div> 
       
      </div>
    </div> 
       
     <div class="field-row" ><hr /></div>      
     <div class="field-row" >
	  <div>Custom CSS Style <?php $optionname = 'mixify_custom_css'; ?></div>
	  <div>  
            
         <div class="field-row" >
          <div class="field-column2  mixify-right">
            <p class="description">Enter your custom css style in the text area found on left side. Do not include &lt;style&gt; &amp; &lt;&frasl;style&gt; tags. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p> 
          </div>
          <div class="field-column2">
          <textarea class="mixify-textarea" data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field" ><?php echo mixify_get_option($optionname); ?></textarea>
          </div>
       </div> 
       
      </div>
    </div> 
        
    <div class="field-row" ><hr /></div>      
     <div class="field-row" >
	  <div>Google Analytics <?php $optionname = 'mixify_google_analytics'; ?></div>
	  <div>  
            
         <div class="field-row" >
          <div class="field-column2  mixify-right">    
            <p class="description">Enter your site&#39;s Google Analytics in the text area found on left side. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p> 
          </div>
          <div class="field-column2">
          <textarea class="mixify-textarea" data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field" ><?php echo mixify_get_option($optionname); ?></textarea>
          </div>
       </div> 
       
      </div>
    </div> 
        
       <div class="field-row" ><?php include MIXIFY_INCLUDES_DIR.'/mixify-inc-main-btns.php';  ?></div>       
</div>
   