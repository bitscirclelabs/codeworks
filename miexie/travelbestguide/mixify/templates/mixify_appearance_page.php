 <!--start Appearance Page-->
<div class="mixify-body-inner" >  
	 <div class="field-row" ><?php include MIXIFY_INCLUDES_DIR.'/mixify-inc-main-btns.php';  ?></div>  
    <?php
	$fontfaces = mixify_get_option('mixify_font_faces');
	$fontdecorations = mixify_get_option('mixify_text_decorations');
	
	?>
      
     <div class="field-row" >
	  <div>Body Tag (&lt;body&gt;)</div>
	  <div>
         
         
         <div class="field-row"  >
	    <div>Background Image: <?php $optionname = 'mixify_body_background'; ?></div>
		<div>
        <div class="field-row" ><button class="button button-primary mixify-left mixify-upload-btn" ><i class="fa fa-upload"></i>
 Upload an Image</button> &nbsp;&nbsp;<b class="mixify-left">- OR -</b>&nbsp;&nbsp; <button  class="button button-primary mixify-left mixify-pastelink-btn"><i class="fa fa-clipboard"></i>
 Paste an image link</button></div>
        <div class="field-row" >
         <input type="hidden"  class="mixify-img-id"   value="0"  />
         <input type="text" readonly="readonly" value="<?php echo mixify_get_option($optionname); ?>"  data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  /> 
         <img src="<?php echo mixify_get_option($optionname); ?>" style="max-width:222px;" title="Body Background" alt="Body Background" />
        </div> 
		<p class="description">Upload a custom background image for your site body here. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p>
        </div>
	  </div> 
        
         
         <div class="field-row" >
         <?php $optionname = 'mixify_body_fontface'; ?>
          <div class="field-column2  mixify-right">
            <p class="description">Select the font face of your body from the suggested on the drop-down found on your left.</p> 
          </div>
          <div class="field-column2">
           Font Face:  <br />
            <div class="mixify-styled-select mixify-semi-square">
  			<select   data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  >
              <?php
			  if($fontfaces){
				foreach($fontfaces as $font): 
				  $selected = '';
				  if($font['slug'] == mixify_get_option($optionname)) $selected = ' selected="selected" '; 				 
				  echo '<option  value="'.$font['slug'].'"  '.$selected.' >'.$font['name'].'</option>';
				endforeach;
			  }
			 ?>
  			</select>
		   </div>
           <p class="description"> Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p>
          </div>
       </div>      
        
         <div class="field-row" >
         <?php $optionname = 'mixify_body_fontcolor'; ?>
          <div class="field-column2  mixify-right">
            <p class="description">You can customize the font color of your body using the color picker on the left side.</p>
          </div>
          <div class="field-column2">
           Font Color:<br /><input type="text"  value="<?php echo mixify_get_option($optionname); ?>"   data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"   class="mixify-color-picker"   />
           <p class="description"> Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p>
          </div>
       </div>          
         
         <div class="field-row" >
         <?php $optionname = 'mixify_body_fontsize'; ?>
          <div class="field-column2  mixify-right">
            <p class="description">You can customize the font size of your body using the text field on the left side. You can use any standard font unit like &#39;px&#39;, &#39;%&#39;.</p>
          </div>
          <div class="field-column2">
           Font Size:<br /><input type="text"  value="<?php echo mixify_get_option($optionname); ?>"   data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"     />
           <p class="description"> Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p>
          </div>
       </div>   
      </div>
    </div>
      
    <div class="field-row" ><hr /></div>    
   
     <div class="field-row" >
	  <div>Header</div>
	  <div>
         
         
         <div class="field-row"  >
	    <div>Background Image: <?php $optionname = 'mixify_header_background'; ?></div>
		<div>
        <div class="field-row" ><button class="button button-primary mixify-left mixify-upload-btn" ><i class="fa fa-upload"></i>
 Upload an Image</button> &nbsp;&nbsp;<b class="mixify-left">- OR -</b>&nbsp;&nbsp; <button  class="button button-primary mixify-left mixify-pastelink-btn"><i class="fa fa-clipboard"></i>
 Paste an image link</button></div>
        <div class="field-row" >
         <input type="hidden"  class="mixify-img-id"   value="0"  />
         <input type="text" readonly="readonly" value="<?php echo mixify_get_option($optionname); ?>"  data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  /> 
        <br /> <img src="<?php echo mixify_get_option($optionname); ?>" style="max-width:222px;" title="Header Background" alt="Header Background" />
        </div> 
		<p class="description">Upload a custom background image for your site header here. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p>
        </div>
	  </div> 
       
      </div>
    </div>
    
    <div class="field-row" ><hr /></div>      
    <div class="field-row" >
	  <div>Anchor/Link Tag (&lt;a&gt;)</div>
	  <div>
         
         <div class="field-row" >
          <div class="field-column2  mixify-right">
            <p class="description">Select the font decoration of your link from the suggested on the drop-down found on your left. </p> 
          </div> 
          <div class="field-column2">
           Text Decoration: <?php $optionname = 'mixify_a_decoration'; ?><br /> 
            <div class="mixify-styled-select mixify-semi-square">
  			<select   data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  >
              <?php
			  if($fontdecorations){
				foreach($fontdecorations as $font): 
				  $selected = '';
				  if($font['slug'] == mixify_get_option($optionname)) $selected = ' selected="selected" '; 				 
				  echo '<option  value="'.$font['slug'].'"  '.$selected.' >'.$font['name'].'</option>';
				endforeach;
			  }
			 ?>
  			</select>
		   </div>           
          <p class="description"> Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p>
          </div>
       </div>
       
         <div class="field-row" >
          <div class="field-column2  mixify-right">
            <p class="description">Select the font face of your link from the suggested on the drop-down found on your left.</p> 
          </div>
          <div class="field-column2">
           Font Face: <?php $optionname = 'mixify_a_fontface'; ?><br />
            <div class="mixify-styled-select mixify-semi-square">
  			<select  data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  >
              <?php
			  if($fontfaces){
				foreach($fontfaces as $font): 
				  $selected = '';
				  if($font['slug'] == mixify_get_option($optionname)) $selected = ' selected="selected" '; 				 
				  echo '<option  value="'.$font['slug'].'"  '.$selected.' >'.$font['name'].'</option>';
				endforeach;
			  }
			 ?>
  			</select>
		   </div>           
           <p class="description"> Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p>
           
          </div>
       </div>      
        
         <div class="field-row" >
          <div class="field-column2  mixify-right">
            <p class="description">You can customize the font color of your link using the color picker on the left side.</p>
          </div>
          <div class="field-column2">
           Font Color: <?php $optionname = 'mixify_a_fontcolor'; ?> <br /><input type="text"  value="<?php echo mixify_get_option($optionname); ?>"   data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"   class="mixify-color-picker"   />
           <p class="description"> Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p>
          </div>
       </div>          
         
         <div class="field-row" >
          <div class="field-column2  mixify-right">
            <p class="description">You can customize the font size of your link using the text field on the left side. You can use any standard font unit like &#39;px&#39;, &#39;%&#39;.</p>
          </div>
          <div class="field-column2">
           Font Size: <?php $optionname = 'mixify_a_fontsize'; ?><br /><input type="text"  value="<?php echo mixify_get_option($optionname); ?>"   data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"     />
           <p class="description"> Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p>
          </div>
       </div>   
      </div>
    </div>
    
    <div class="field-row" >
	  <div>Anchor/Link Tag Hover Effects (a:hover)</div>
	  <div>
         
         <div class="field-row" >
          <div class="field-column2  mixify-right">
            <p class="description">Select the font decoration of your link when hover from the suggested on the drop-down found on your left.</p> 
          </div>
          <div class="field-column2">
           Text Decoration: <?php $optionname = 'mixify_ahover_decoration'; ?><br />
            <div class="mixify-styled-select mixify-semi-square">
  			<select  data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  >
              <?php
			  if($fontdecorations){
				foreach($fontdecorations as $font): 
				  $selected = '';
				  if($font['slug'] == mixify_get_option($optionname)) $selected = ' selected="selected" '; 				 
				  echo '<option  value="'.$font['slug'].'"  '.$selected.' >'.$font['name'].'</option>';
				endforeach;
			  }
			 ?>
  			</select>
		   </div>
           <p class="description"> Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p>
          </div>
       </div>
       
         <div class="field-row" >
          <div class="field-column2  mixify-right">
            <p class="description">Select the font face of your link when hover from the suggested on the drop-down found on your left.</p> 
          </div>
          <div class="field-column2">
           Font Face: <?php $optionname = 'mixify_ahover_fontface'; ?><br />
            <div class="mixify-styled-select mixify-semi-square">
  			<select   data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  >
              <?php
			  if($fontfaces){
				foreach($fontfaces as $font): 
				  $selected = '';
				  if($font['slug'] == mixify_get_option($optionname)) $selected = ' selected="selected" '; 				 
				  echo '<option  value="'.$font['slug'].'"  '.$selected.' >'.$font['name'].'</option>';
				endforeach;
			  }
			 ?>
  			</select>
		   </div>
           <p class="description"> Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p>
          </div>
       </div>      
        
         <div class="field-row" >
          <div class="field-column2  mixify-right">
            <p class="description">You can customize the font color of your link when hover using the color picker on the left side.</p>
          </div>
          <div class="field-column2">
           Font Color: <?php $optionname = 'mixify_ahover_fontcolor'; ?><br /><input type="text"  value="<?php echo mixify_get_option($optionname); ?>"   data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"   class="mixify-color-picker"   />
           <p class="description"> Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p>
          </div>
       </div>          
         
         <div class="field-row" >
          <div class="field-column2  mixify-right">
            <p class="description">You can customize the font size of your body using the text field on the left side. You can use any standard font unit like &#39;px&#39;, &#39;%&#39;.</p>
          </div>
          <div class="field-column2">
           Font Size: <?php $optionname = 'mixify_ahover_fontsize'; ?><br /><input type="text"  value="<?php echo mixify_get_option($optionname); ?>"   data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"     />
           <p class="description"> Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p>
          </div>
       </div>   
      </div>
    </div>
    
     <div class="field-row" ><hr /></div>      
     <div class="field-row" >
	  <div>Paragraph Tag (&lt;p&gt;)</div>
	  <div>
         
         <div class="field-row" >
          <div class="field-column2  mixify-right">
            <p class="description">Select the font face of your paragraph from the suggested on the drop-down found on your left.</p> 
          </div>
          <div class="field-column2">
           Font Face: <?php $optionname = 'mixify_p_fontface'; ?><br />   
            <div class="mixify-styled-select mixify-semi-square">
  			<select  data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  >
              <?php
			  if($fontfaces){
				foreach($fontfaces as $font): 
				  $selected = '';
				  if($font['slug'] == mixify_get_option($optionname)) $selected = ' selected="selected" '; 				 
				  echo '<option  value="'.$font['slug'].'"  '.$selected.' >'.$font['name'].'</option>';
				endforeach;
			  }
			 ?>
  			</select>
		   </div>
           <p class="description"> Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p>
          </div>
       </div>      
        
         <div class="field-row" >
          <div class="field-column2  mixify-right">
            <p class="description">You can customize the font color of your paragraph using the color picker on the left side.</p>
          </div>
          <div class="field-column2">
           Font Color: <?php $optionname = 'mixify_p_fontcolor'; ?><br /><input type="text"  value="<?php echo mixify_get_option($optionname); ?>"   data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"   class="mixify-color-picker"   />
           <p class="description"> Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p>  
          </div>
       </div>          
         
         <div class="field-row" >
          <div class="field-column2  mixify-right">
            <p class="description">You can customize the font size of your body using the text field on the left side. You can use any standard font unit like &#39;px&#39;, &#39;%&#39;.</p>
          </div>
          <div class="field-column2">
           Font Size: <?php $optionname = 'mixify_p_fontsize'; ?><br /><input type="text"  value="<?php echo mixify_get_option($optionname); ?>"   data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"     />
           <p class="description"> Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p>
          </div>
       </div>   
      </div>
    </div>
    
      <div class="field-row" ><hr /></div>      
      <div class="field-row" >
	  <div>Heading1 Tag(&lt;h1&gt;)</div>
	  <div>
         
         <div class="field-row" >
          <div class="field-column2  mixify-right">
            <p class="description">Select the font face of your h1 from the suggested on the drop-down found on your left.</p> 
          </div>
          <div class="field-column2">
           Font Face: <?php $optionname = 'mixify_h1_fontface'; ?><br />
            <div class="mixify-styled-select mixify-semi-square">
  			<select   data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  >
              <?php
			  if($fontfaces){
				foreach($fontfaces as $font): 
				  $selected = '';
				  if($font['slug'] == mixify_get_option($optionname)) $selected = ' selected="selected" '; 				 
				  echo '<option  value="'.$font['slug'].'"  '.$selected.' >'.$font['name'].'</option>';
				endforeach;
			  }
			 ?>
  			</select>
		   </div>
           <p class="description"> Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p>
          </div>
       </div>      
        
         <div class="field-row" >
          <div class="field-column2  mixify-right">
            <p class="description">You can customize the font color of your h1 using the color picker on the left side.</p>
          </div>
          <div class="field-column2">
           Font Color: <?php $optionname = 'mixify_h1_fontcolor'; ?> <br /><input type="text"  value="<?php echo mixify_get_option($optionname); ?>"   data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"   class="mixify-color-picker"   />
           <p class="description"> Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p>
          </div>
       </div>          
         
         <div class="field-row" >
          <div class="field-column2  mixify-right">
            <p class="description">You can customize the font size of your h1 using the text field on the left side. You can use any standard font unit like &#39;px&#39;, &#39;%&#39;.</p>
          </div>
          <div class="field-column2">
           Font Size: <?php $optionname = 'mixify_h1_fontsize'; ?> <br /><input type="text"  value="<?php echo mixify_get_option($optionname); ?>"   data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"     />
           <p class="description"> Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p>
          </div> 
       </div>   
      </div>
    </div>
    
     <div class="field-row" ><hr /></div>      
     <div class="field-row" >
	  <div>Heading2 Tag(&lt;h2&gt;)</div>
	  <div>
         
         <div class="field-row" >
          <div class="field-column2  mixify-right">
            <p class="description">Select the font face of your h2 from the suggested on the drop-down found on your left.</p> 
          </div>
          <div class="field-column2">
           Font Face: <?php $optionname = 'mixify_h2_fontface'; ?><br />
            <div class="mixify-styled-select mixify-semi-square">
  			<select   data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  >
              <?php     
			  if($fontfaces){
				foreach($fontfaces as $font): 
				  $selected = '';
				  if($font['slug'] == mixify_get_option($optionname)) $selected = ' selected="selected" '; 				 
				  echo '<option  value="'.$font['slug'].'"  '.$selected.' >'.$font['name'].'</option>';
				endforeach;
			  }
			 ?>
  			</select>
		   </div>
           <p class="description"> Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p>
          </div>
       </div>      
        
         <div class="field-row" >
          <div class="field-column2  mixify-right">
            <p class="description">You can customize the font color of your h2 using the color picker on the left side.</p>
          </div>
          <div class="field-column2">
           Font Color: <?php $optionname = 'mixify_h2_fontcolor'; ?><br /><input type="text"  value="<?php echo mixify_get_option($optionname); ?>"   data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"   class="mixify-color-picker"   />
           <p class="description"> Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p>
          </div>
       </div>          
         
         <div class="field-row" >
          <div class="field-column2  mixify-right">
            <p class="description">You can customize the font size of your h2 using the text field on the left side. You can use any standard font unit like &#39;px&#39;, &#39;%&#39;.</p>
          </div>
          <div class="field-column2">
           Font Size: <?php $optionname = 'mixify_h2_fontsize'; ?><br /><input type="text"  value="<?php echo mixify_get_option($optionname); ?>"   data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"     />
           <p class="description"> Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p>
          </div>
       </div>   
      </div>
    </div>
    
    
    <div class="field-row" ><?php include MIXIFY_INCLUDES_DIR.'/mixify-inc-main-btns.php';  ?></div>  
         
</div><!--end main container-->
   