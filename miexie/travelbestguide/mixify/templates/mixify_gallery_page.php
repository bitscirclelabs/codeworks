<!--start Home Page-->
<div  class="mixify-body-inner" >  
   <div class="field-row" ><?php include MIXIFY_INCLUDES_DIR.'/mixify-inc-main-btns.php';  ?></div>  
              
     <div class="field-row" >
	    <div>Featured Gallery:</div>     
		<div>        
         <div class="field-row" >
         <?php $optionname = 'mixify_gallery_header'; ?>
          <input type="text" value="<?php echo mixify_get_option($optionname); ?>"  data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  />   
		  <p class="description">Enter above featured gallery heading label which found on homepage. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre></p>  
         </div>
         
         <div class="field-row" >
         <?php $optionname = 'mixify_gallery_termid'; ?>
          <div class="mixify-styled-select mixify-semi-square">
  			<select   data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"   >
            <option value="0">Select gallery category</option>
    		<?php
$args = array( 'orderby' => 'name',  'hierarchical' => 1 , 'taxonomy'  => 'gallery-category' );
$categories = get_categories( $args );
foreach ( $categories as $category ) {
  echo '<option value="'.$category->term_id.'"   '; 
  if($category->term_id==mixify_get_option($optionname)) echo ' selected="selected" '; 
  echo ' >' . $category->name . '</option>';  
}
?>
  			</select>
		   </div>
		  <p class="description">Select a gallery category for your featured. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p>  
         </div>
                    
        </div> 
     </div>     
     
     <div class="field-row" ><hr /></div>    
   
   
    <div class="field-row" >
	    <div>See More Link:</div>     
		<div>    
            
         <div class="field-row" >
         <?php $optionname = 'mixify_gallery_seemore_link'; ?>
          <input type="text" width="200"  value="<?php echo mixify_get_option($optionname); ?>" data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field" />
		  <p class="description">To obtain the see more link, you need to create a page using the pre-defined &#39;<strong>Gallery Page Template</strong>&#39; found on Page Menu. See screenshot below.
          <p><img src="<?php echo MIXIFY_IMAGES_URL; ?>/screenshots/gallery-page-template.jpg" width="200" /></p>
           Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p>
         </div>       
                    
        </div> 
     </div>     
     
        
      
          
    <div class="field-row" ><?php include MIXIFY_INCLUDES_DIR.'/mixify-inc-main-btns.php';  ?></div>    
</div> 