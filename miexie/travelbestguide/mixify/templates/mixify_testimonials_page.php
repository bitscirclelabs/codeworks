<!--start Home Page-->
<div  class="mixify-body-inner" >  
   <div class="field-row" ><?php include MIXIFY_INCLUDES_DIR.'/mixify-inc-main-btns.php';  ?></div>  
              
     <div class="field-row" >
	    <div>Featured Testimonials:</div>  
		<div>        
         <div class="field-row" >
         <?php $optionname = 'mixify_testimonial_header'; ?>
          <input type="text" value="<?php echo mixify_get_option($optionname); ?>"  data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  />   
		  <p class="description">Enter above featured testimonials heading label which found on homepage. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre></p> 
         </div>
         
         <div class="field-row" >
         <?php $optionname = 'mixify_testimonial_termid'; ?>
          <div class="mixify-styled-select mixify-semi-square">
  			<select   data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"   >
            <option value="0">Select testimonial category</option>
    		<?php
$args = array( 'orderby' => 'name',  'hierarchical' => 1 , 'taxonomy'  => 'testimonial-category' );
$categories = get_categories( $args );
foreach ( $categories as $category ) {
  echo '<option value="'.$category->term_id.'"   '; 
  if($category->term_id==mixify_get_option($optionname)) echo ' selected="selected" '; 
  echo ' >' . $category->name . '</option>';  
}
?>
  			</select>
		   </div>
		  <p class="description">Select a testimonial category for your featured. Embed this to your php script to get the value: <pre>&lt;?php echo mixify_get_option('<?php echo $optionname; ?>'); ?&gt;</pre> </p>
         </div>
                    
        </div> 
    </div>     
      
    <div class="field-row" ><?php include MIXIFY_INCLUDES_DIR.'/mixify-inc-main-btns.php';  ?></div>    
</div> 