<!--start Home Page-->
<div  class="mixify-body-inner" >  
   <div class="field-row" ><?php include MIXIFY_INCLUDES_DIR.'/mixify-inc-main-btns.php';  ?></div>  
    
     <div class="field-row" > 
	    <div>Top Featured 1 Title: <?php $optionname = 'mixify_topfeat1_title'; ?></div>   
		<div><input type="text" value="<?php echo mixify_get_option($optionname); ?>"   data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  /> 
		<p class="description">Enter the title for the first top featured widget. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p></div>        
	</div>      
     <div class="field-row" > 
        <div>Top Featured 1 Content: <?php $optionname = 'mixify_topfeat1_content'; ?></div>
		<div><textarea data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field" class="mixify-textarea" ><?php echo mixify_get_option($optionname); ?></textarea>
		<p class="description">Enter the content of the first top featured widget. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p></div>        
     </div>      
    <div class="field-row" ><hr /></div>  
    
     <div class="field-row" > 
	    <div>Top Featured 2 Title: <?php $optionname = 'mixify_topfeat2_title'; ?></div>   
		<div><input type="text" value="<?php echo mixify_get_option($optionname); ?>"   data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  /> 
		<p class="description">Enter the title for the second top featured widget. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p></div>        
	</div>      
     <div class="field-row" > 
        <div>Top Featured 2 Content: <?php $optionname = 'mixify_topfeat2_content'; ?></div>
		<div><textarea data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field" class="mixify-textarea" ><?php echo mixify_get_option($optionname); ?></textarea>
		<p class="description">Enter the content of the second top featured widget. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p></div>        
     </div>      
    <div class="field-row" ><hr /></div>  
    
      
     <div class="field-row" >
	    <div>Featured Posts:</div>
		<div>        
         <div class="field-row" >
         <?php $optionname = 'mixify_feat1_posts_header'; ?>
          <input type="text" value="<?php echo mixify_get_option($optionname); ?>"  data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  />   
		  <p class="description">Enter above featured post heading label. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre></p> 
         </div>
         
         <div class="field-row" >
         <?php $optionname = 'mixify_feat1_posts_termid'; ?>
          <div class="mixify-styled-select mixify-semi-square">
  			<select   data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"   >
            <option value="0">Select post category</option>
    		<?php
$args = array( 'orderby' => 'name',  'hierarchical' => 1  );
$categories = get_categories( $args );
foreach ( $categories as $category ) {
  echo '<option value="'.$category->term_id.'"   '; 
  if($category->term_id==mixify_get_option($optionname)) echo ' selected="selected" '; 
  echo ' >' . $category->name . '</option>';  
}
?>
  			</select>
		   </div>
		  <p class="description">Select a post category for your featured. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p>
         </div>
          
         <div class="field-row" >
         <?php $optionname = 'mixify_feat1_posts_limit'; ?>
          <input type="text" width="200"  value="<?php echo mixify_get_option($optionname); ?>" data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field" />
		  <p class="description">No. of limit for your featured post. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p>
         </div>         
          
        </div> 
    </div>
      
    <div class="field-row" ><hr /></div>    
      
     <div class="field-row" >
	    <div>Services Posts:</div>
		<div>        
         <div class="field-row" >
         <?php $optionname = 'mixify_feat2_posts_header'; ?>
          <input type="text"  value="<?php echo mixify_get_option($optionname); ?>"  data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  /> 
		  <p class="description">Enter above services post heading label. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p>
         </div>         
         <div class="field-row" >
         <?php $optionname = 'mixify_feat2_posts_termid'; ?>
          <div class="mixify-styled-select mixify-semi-square">
  			<select data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  >
            <option value="0">Select post category</option>
    		<?php
$args = array( 'orderby' => 'name',  'hierarchical' => 1  );
$categories = get_categories( $args );
foreach ( $categories as $category ) {
  echo '<option value="'.$category->term_id.'"   '; 
  if($category->term_id==mixify_get_option('$optionname')) echo ' selected="selected" '; 
  echo ' >' . $category->name . '</option>';  
}
?>
  			</select>
		   </div>
		  <p class="description">Select a post category for your services. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p>
         </div>          
         <div class="field-row" >
         <?php $optionname = 'mixify_feat2_posts_limit'; ?>
          <input type="text" width="200" value="<?php echo mixify_get_option($optionname); ?>"  data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  /> 
		  <p class="description">No. of limit for your services post. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p>
         </div>         
          
        </div> 
    </div>
    
    
    <div class="field-row" ><?php include MIXIFY_INCLUDES_DIR.'/mixify-inc-main-btns.php';  ?></div>    
</div> 