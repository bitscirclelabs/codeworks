 <!--start Slider Page-->
<div class="mixify-body-inner" >  
   <div class="field-row" ><?php include MIXIFY_INCLUDES_DIR.'/mixify-inc-main-btns.php';  ?></div>  
   
  <div class="field-row" ><h2>Resonsive Slider Settings</h2></div> 
  
   <div class="field-row" ><hr /></div>  
   <div class="field-row" >
	  <div>Animate Automatically <?php $optionname = 'mixify_slider_auto'; ?></div>
	  <div>        
         <div class="field-row" >
          <div class="field-column2  mixify-right">
            <p class="description">Animate automatically, yes or no. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p> 
          </div>
          <div class="field-column2">
            <div class="mixify-styled-select mixify-semi-square">
  			<select  data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  >
			<option value="true"  <?php if(mixify_get_option($optionname)=='true') echo' selected="selected" ';  ?>  >Yes</option>
			<option value="false" <?php if(mixify_get_option($optionname)=='false') echo' selected="selected" ';  ?>  >No</option> 
			</select>    
		   </div>
          </div>
       </div> 
      </div>      
    </div>
       
   <div class="field-row" ><hr /></div>   
   <div class="field-row" >
	  <div>Speed <?php $optionname = 'mixify_slider_speed'; ?></div>
	  <div>        
         <div class="field-row" >
          <div class="field-column2  mixify-right">
            <p class="description">Speed of the transition, in milliseconds. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p> 
          </div>
          <div class="field-column2">
           <input type="text"  value="<?php echo mixify_get_option($optionname); ?>"   data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"     />
          </div>
       </div> 
      </div>
      
    </div>
     
   <div class="field-row" ><hr /></div>   
   <div class="field-row" >
	  <div>Timeout <?php $optionname = 'mixify_slider_timeout'; ?></div>
	  <div>        
         <div class="field-row" >
          <div class="field-column2  mixify-right">
            <p class="description">Time between slide transitions, in milliseconds. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p> 
          </div>
          <div class="field-column2">
           <input type="text"  value="<?php echo mixify_get_option($optionname); ?>"   data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"     />
          </div>
       </div> 
      </div>
      
    </div>
    
    <div class="field-row" ><hr /></div>  
   <div class="field-row" >
	  <div>Show Caption <?php $optionname = 'mixify_slider_showcaption'; ?></div>
	  <div>        
         <div class="field-row" >
          <div class="field-column2  mixify-right">
            <p class="description">Show caption container, yes or no. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p> 
          </div>
          <div class="field-column2">
            <div class="mixify-styled-select mixify-semi-square">   
  			<select  data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  >
			<option value="true"  <?php if(mixify_get_option($optionname)=='true') echo' selected="selected" ';  ?>  >Yes</option>
			<option value="false" <?php if(mixify_get_option($optionname)=='false') echo' selected="selected" ';  ?>  >No</option> 
			</select>   
		   </div>
          </div>
       </div> 
      </div> 
      
    </div>
    
    
   <div class="field-row" ><hr /></div>  
   <div class="field-row" >
	  <div>Show Pager <?php $optionname = 'mixify_slider_pager'; ?></div>
	  <div>        
         <div class="field-row" >
          <div class="field-column2  mixify-right">
            <p class="description">Show slider pagination. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p> 
          </div>
          <div class="field-column2">
            <div class="mixify-styled-select mixify-semi-square">
  			<select  data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  >
			<option value="true"  <?php if(mixify_get_option($optionname)=='true') echo' selected="selected" ';  ?>  >Yes</option>
			<option value="false" <?php if(mixify_get_option($optionname)=='false') echo' selected="selected" ';  ?>  >No</option> 
			</select>   
		   </div>
          </div>
       </div> 
      </div>
      
    </div>
   
    <div class="field-row" ><hr /></div>  
    <div class="field-row" >
	  <div>Show Navigation <?php $optionname = 'mixify_slider_nav'; ?></div>
	  <div>        
         <div class="field-row" >
          <div class="field-column2  mixify-right">
            <p class="description">Show navigation. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre></p> 
          </div>
          <div class="field-column2">
            <div class="mixify-styled-select mixify-semi-square">
  			<select  data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  >
			<option value="true"  <?php if(mixify_get_option($optionname)=='true') echo' selected="selected" ';  ?>  >Yes</option>
			<option value="false" <?php if(mixify_get_option($optionname)=='false') echo' selected="selected" ';  ?>  >No</option> 
			</select>   
		   </div>
          </div>
       </div> 
      </div>
      
    </div>    
    
     <div class="field-row" ><hr /></div>  
    <div class="field-row" >
	  <div>Display Random Images <?php $optionname = 'mixify_slider_random'; ?></div>
	  <div>        
         <div class="field-row" >
          <div class="field-column2  mixify-right">
            <p class="description">Randomize the order of the slides. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p> 
          </div>
          <div class="field-column2">
            <div class="mixify-styled-select mixify-semi-square">
  			<select  data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  >
			<option value="true"  <?php if(mixify_get_option($optionname)=='true') echo' selected="selected" ';  ?>  >Yes</option>
			<option value="false" <?php if(mixify_get_option($optionname)=='false') echo' selected="selected" ';  ?>  >No</option> 
			</select>   
		   </div>
          </div>
       </div> 
      </div>
      
    </div>      
      
    <div class="field-row" ><hr /></div>  
    <div class="field-row" >
	  <div>Pause <?php $optionname = 'mixify_slider_pause'; ?></div>
	  <div>        
         <div class="field-row" >
          <div class="field-column2  mixify-right">
            <p class="description">Pause on hover, yes or no. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p> 
          </div>
          <div class="field-column2">
            <div class="mixify-styled-select mixify-semi-square">
  			<select  data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  >
			<option value="true"  <?php if(mixify_get_option($optionname)=='true') echo' selected="selected" ';  ?>  >Yes</option>
			<option value="false" <?php if(mixify_get_option($optionname)=='false') echo' selected="selected" ';  ?>  >No</option> 
			</select>   
		   </div>
          </div>
       </div> 
      </div>
      
    </div>      
     
    <div class="field-row" ><hr /></div>  
    <div class="field-row" >
	  <div>Pause Controls <?php $optionname = 'mixify_slider_pausecontrols'; ?></div>
	  <div>        
         <div class="field-row" >
          <div class="field-column2  mixify-right">
            <p class="description">Pause when hovering controls, true or false. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre></p> 
          </div>
          <div class="field-column2">
            <div class="mixify-styled-select mixify-semi-square">
  			<select  data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  >
			<option value="true"  <?php if(mixify_get_option($optionname)=='true') echo' selected="selected" ';  ?>  >Yes</option>
			<option value="false" <?php if(mixify_get_option($optionname)=='false') echo' selected="selected" ';  ?>  >No</option> 
			</select>   
		   </div>     
          </div>
       </div> 
      </div>
      
    </div>      
       
      
     <div class="field-row" ><?php include MIXIFY_INCLUDES_DIR.'/mixify-inc-main-btns.php';  ?></div>  
</div>
   