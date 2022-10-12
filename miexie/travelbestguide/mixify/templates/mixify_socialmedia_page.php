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
         <div class="field-row" >
          <div class="field-column2  mixify-right">
            <p class="description">Customize your <?php echo $socialname; ?> icon using with the options on the left side. Embed this to your php script to get the value: 
            <br /><strong>For enabled: </strong><pre>&lt;?php echo mixify_get_option('mixify_social_<?php echo $iconprefix;?>_enabled'); ?&gt;</pre> 
         <br /><strong>For icon: </strong><pre>&lt;?php echo '<?php echo MIXIFY_SOCIALIMAGES_URL.'/'.$iconprefix;?>-'.mixify_get_option('mixify_social_<?php echo $iconprefix;?>_optionslug').'-'.mixify_get_option('mixify_social_<?php echo $iconprefix;?>_optionsize').'.png'; ?&gt;</pre>     
       
            
</p> 
          </div>
          <div class="field-column2">
            <strong>Icon:</strong> &nbsp; 
            <div class="field-row" >
             <?php $optionname = 'mixify_social_'.$iconprefix.'_enabled';  ?> 
              Enabled <span class="mixify-checkbox"><input type="checkbox" id="<?php echo $iconprefix;?>-enabled"   <?php if(mixify_get_option($optionname)) echo ' checked="checked" '; ?>  data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-tick"   /><label for="<?php echo $iconprefix;?>-enabled"></label>
</span> </div> 
            
            <div class="field-row" >
            <?php $optionname = 'mixify_social_'.$iconprefix.'_optionslug';  ?>             
            <div class="mixify-styled-select mixify-semi-square">  
  			<select onchange="socialicon_preview('<?php echo $iconprefix;?>');"  class="select-icon-name"  data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"   > 
             <?php
			  if($social_icons){
				foreach($social_icons as $icon): 
				  $selected = '';
				  if($icon['slug']==mixify_get_option($optionname)){ 
				   $iconfilename .= '-'.$icon['slug'];
				   $selected = ' selected="selected" '; 
				  }
				  echo '<option  value="'.$icon['slug'].'"  '.$selected.' >'.$icon['name'].'</option>';
				endforeach;
			  }
			 ?>
  			</select>
		   </div>
            </div>
            
            <div class="field-row" >
            <?php $optionname = 'mixify_social_'.$iconprefix.'_optionsize';  ?>       
            
            <div class="mixify-styled-select mixify-semi-square">
  			<select onchange="socialicon_preview('<?php echo $iconprefix;?>');"   class="select-icon-size"   data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  >
             <?php
			  if($social_icons_sizes){
				  foreach($social_icons_sizes as $size):    
				    $selected = '';
				    if($size['slug']==mixify_get_option($optionname)){ 
				      $iconfilename .= '-'.$size['slug'];
				      $selected = ' selected="selected" '; 
				    } 
				   echo '<option  value="'.$size['slug'].'"  '.$selected.' >'.$size['name'].'</option>';   
				  endforeach;
			  }
			 ?>             
  			</select> 
		   </div>
            </div>
            
             <div class="field-row" >
               <img src="<?php echo MIXIFY_SOCIALIMAGES_URL.'/'.$iconfilename.'.png'; ?>" alt="<?php echo $socialname; ?>" title="<?php echo $socialname; ?>"  class="iconpreview" />
             </div>
            
           
          </div>
       </div> 
        
         <div class="field-row" >
          <?php $optionname = 'mixify_social_'.$iconprefix.'_link'; ?>
          <div class="field-column2  mixify-right">
            <p class="description">Paste your <?php echo $socialname; ?> link here. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> 
.</p> 
          </div>
          <div class="field-column2">
            <strong>Link: </strong> &nbsp; 
            <div class="field-row" >
            <input type="text" value="<?php echo mixify_get_option($optionname); ?>"  data-mixifyname="<?php echo $optionname; ?>"   data-mixifytype="form-field"   /></div>
          </div>
        </div>  
            
            
      </div>
    </div>   
     
	 
	<div class="field-row" ><hr /></div>	 
	<!--start twitter social icon-->	 	 
	 <div class="field-row" >
	  <div><?php  $socialname = 'Twitter'; $iconprefix = 'tw';    
	  $iconfilename = $iconprefix;
	   echo $socialname; ?>
      </div>
	  <div class="<?php echo $iconprefix;?>-wrapper" >        
         <div class="field-row" >
          <div class="field-column2  mixify-right">
            <p class="description">Customize your <?php echo $socialname; ?> icon using with the options on the left side. Embed this to your php script to get the value: 
            <br /><strong>For enabled: </strong><pre>&lt;?php echo mixify_get_option('mixify_social_<?php echo $iconprefix;?>_enabled'); ?&gt;</pre> 
         <br /><strong>For icon: </strong><pre>&lt;?php echo '<?php echo MIXIFY_SOCIALIMAGES_URL.'/'.$iconprefix;?>-'.mixify_get_option('mixify_social_<?php echo $iconprefix;?>_optionslug').'-'.mixify_get_option('mixify_social_<?php echo $iconprefix;?>_optionsize').'.png'; ?&gt;</pre>     
       
            
</p> 
          </div>
          <div class="field-column2">
            <strong>Icon:</strong> &nbsp; 
            <div class="field-row" >
             <?php $optionname = 'mixify_social_'.$iconprefix.'_enabled';  ?> 
              Enabled <span class="mixify-checkbox"><input type="checkbox" id="<?php echo $iconprefix;?>-enabled"   <?php if(mixify_get_option($optionname)) echo ' checked="checked" '; ?>  data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-tick"   /><label for="<?php echo $iconprefix;?>-enabled"></label>
</span> </div> 
            
            <div class="field-row" >
            <?php $optionname = 'mixify_social_'.$iconprefix.'_optionslug';  ?>             
            <div class="mixify-styled-select mixify-semi-square">  
  			<select onchange="socialicon_preview('<?php echo $iconprefix;?>');"  class="select-icon-name"  data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"   > 
             <?php
			  if($social_icons){
				foreach($social_icons as $icon): 
				  $selected = '';
				  if($icon['slug']==mixify_get_option($optionname)){ 
				   $iconfilename .= '-'.$icon['slug'];
				   $selected = ' selected="selected" '; 
				  }
				  echo '<option  value="'.$icon['slug'].'"  '.$selected.' >'.$icon['name'].'</option>';
				endforeach;
			  }
			 ?>
  			</select>
		   </div>
            </div>
            
            <div class="field-row" >
            <?php $optionname = 'mixify_social_'.$iconprefix.'_optionsize';  ?>       
            
            <div class="mixify-styled-select mixify-semi-square">
  			<select onchange="socialicon_preview('<?php echo $iconprefix;?>');"   class="select-icon-size"   data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  >
             <?php
			  if($social_icons_sizes){
				  foreach($social_icons_sizes as $size):    
				    $selected = '';
				    if($size['slug']==mixify_get_option($optionname)){ 
				      $iconfilename .= '-'.$size['slug'];
				      $selected = ' selected="selected" '; 
				    } 
				   echo '<option  value="'.$size['slug'].'"  '.$selected.' >'.$size['name'].'</option>';   
				  endforeach;
			  }
			 ?>             
  			</select> 
		   </div>
            </div>
            
             <div class="field-row" >
               <img src="<?php echo MIXIFY_SOCIALIMAGES_URL.'/'.$iconfilename.'.png'; ?>" alt="<?php echo $socialname; ?>" title="<?php echo $socialname; ?>"  class="iconpreview" />
             </div>
            
           
          </div>
       </div> 
        
         <div class="field-row" >
          <?php $optionname = 'mixify_social_'.$iconprefix.'_link'; ?>
          <div class="field-column2  mixify-right">
            <p class="description">Paste your <?php echo $socialname; ?> link here. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> 
.</p> 
          </div>
          <div class="field-column2">
            <strong>Link: </strong> &nbsp; 
            <div class="field-row" >
            <input type="text" value="<?php echo mixify_get_option($optionname); ?>"  data-mixifyname="<?php echo $optionname; ?>"   data-mixifytype="form-field"   /></div>
          </div>
        </div>  
            
            
      </div>
    </div>   
     
     <!--start youtube social icon-->	 	 
	 <div class="field-row" >
	  <div><?php  $socialname = 'YouTube'; $iconprefix = 'yt';    
	  $iconfilename = $iconprefix;
	   echo $socialname; ?>
      </div>
	  <div class="<?php echo $iconprefix;?>-wrapper" >        
         <div class="field-row" >
          <div class="field-column2  mixify-right">
            <p class="description">Customize your <?php echo $socialname; ?> icon using with the options on the left side. Embed this to your php script to get the value: 
            <br /><strong>For enabled: </strong><pre>&lt;?php echo mixify_get_option('mixify_social_<?php echo $iconprefix;?>_enabled'); ?&gt;</pre> 
         <br /><strong>For icon: </strong><pre>&lt;?php echo '<?php echo MIXIFY_SOCIALIMAGES_URL.'/'.$iconprefix;?>-'.mixify_get_option('mixify_social_<?php echo $iconprefix;?>_optionslug').'-'.mixify_get_option('mixify_social_<?php echo $iconprefix;?>_optionsize').'.png'; ?&gt;</pre>     
       
            
</p> 
          </div>
          <div class="field-column2">
            <strong>Icon:</strong> &nbsp; 
            <div class="field-row" >
             <?php $optionname = 'mixify_social_'.$iconprefix.'_enabled';  ?> 
              Enabled <span class="mixify-checkbox"><input type="checkbox" id="<?php echo $iconprefix;?>-enabled"   <?php if(mixify_get_option($optionname)) echo ' checked="checked" '; ?>  data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-tick"   /><label for="<?php echo $iconprefix;?>-enabled"></label>
</span> </div> 
            
            <div class="field-row" >
            <?php $optionname = 'mixify_social_'.$iconprefix.'_optionslug';  ?>             
            <div class="mixify-styled-select mixify-semi-square">  
  			<select onchange="socialicon_preview('<?php echo $iconprefix;?>');"  class="select-icon-name"  data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"   > 
             <?php
			  if($social_icons){
				foreach($social_icons as $icon): 
				  $selected = '';
				  if($icon['slug']==mixify_get_option($optionname)){ 
				   $iconfilename .= '-'.$icon['slug'];
				   $selected = ' selected="selected" '; 
				  }
				  echo '<option  value="'.$icon['slug'].'"  '.$selected.' >'.$icon['name'].'</option>';
				endforeach;
			  }
			 ?>
  			</select>
		   </div>
            </div>
            
            <div class="field-row" >
            <?php $optionname = 'mixify_social_'.$iconprefix.'_optionsize';  ?>       
            
            <div class="mixify-styled-select mixify-semi-square">
  			<select onchange="socialicon_preview('<?php echo $iconprefix;?>');"   class="select-icon-size"   data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  >
             <?php
			  if($social_icons_sizes){
				  foreach($social_icons_sizes as $size):    
				    $selected = '';
				    if($size['slug']==mixify_get_option($optionname)){ 
				      $iconfilename .= '-'.$size['slug'];
				      $selected = ' selected="selected" '; 
				    } 
				   echo '<option  value="'.$size['slug'].'"  '.$selected.' >'.$size['name'].'</option>';   
				  endforeach;
			  }
			 ?>             
  			</select> 
		   </div>
            </div>
            
             <div class="field-row" >
               <img src="<?php echo MIXIFY_SOCIALIMAGES_URL.'/'.$iconfilename.'.png'; ?>" alt="<?php echo $socialname; ?>" title="<?php echo $socialname; ?>"  class="iconpreview" />
             </div>
            
           
          </div>
       </div> 
        
         <div class="field-row" >
          <?php $optionname = 'mixify_social_'.$iconprefix.'_link'; ?>
          <div class="field-column2  mixify-right">
            <p class="description">Paste your <?php echo $socialname; ?> link here. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> 
.</p> 
          </div>
          <div class="field-column2">
            <strong>Link: </strong> &nbsp; 
            <div class="field-row" >
            <input type="text" value="<?php echo mixify_get_option($optionname); ?>"  data-mixifyname="<?php echo $optionname; ?>"   data-mixifytype="form-field"   /></div>
          </div>
        </div>  
            
            
      </div>
    </div>   
     
   
	  <div class="field-row" ><?php include MIXIFY_INCLUDES_DIR.'/mixify-inc-main-btns.php';  ?></div>   
      
</div>
   