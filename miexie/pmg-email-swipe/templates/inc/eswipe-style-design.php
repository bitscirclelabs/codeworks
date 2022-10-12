 <!--start preview section here-->
 <div id="preview-accordion">
  <h3>Preview Section</h3>
  <div>
    <div class="accordion-inner-body textarea-wrapper" >
   
  
     <div class="eswipe-box eswipe-box-1" id="eswipe-box-1">
      <h3><?php echo $record->post_title; ?></h3>
 	  <div class="eswipe-box-content">
	    <div id="eswipe-box-text-0" ><?php echo $record->post_content; ?></div>
        <div class="email-swipe-action"><button onclick="copy_text('eswipe-box-text-0')" type="button">Copy To Clipboard</button></div>
      </div>      
	 </div>
    <!--End Box Style 1-->     
    
  
       
    
    </div>
  </div>
</div>

<br />
<!--start styling section here-->


<div class="eswipe-tabs" id="style-options-area">
  <ul>
    <li><a href="#eswipe-tabs-1">Box Type</a></li>
    <li><a href="#eswipe-tabs-2">Box Style</a></li>
    <li><a href="#eswipe-tabs-3">Header Style</a></li>
    <li><a href="#eswipe-tabs-4">Button Style</a></li>
  </ul>
  <div id="eswipe-tabs-1">
    <?php  include WP_GSWAIBOT_TEMPLATE_DIR.'/inc/eswipe-tabs-1.php';    ?>
  </div>
  <div id="eswipe-tabs-2">
   <?php  include WP_GSWAIBOT_TEMPLATE_DIR.'/inc/eswipe-tabs-2.php';    ?>
  </div>
  <div id="eswipe-tabs-3">
   <?php  include WP_GSWAIBOT_TEMPLATE_DIR.'/inc/eswipe-tabs-3.php';    ?>
  </div>
   <div id="eswipe-tabs-4">
   <?php  include WP_GSWAIBOT_TEMPLATE_DIR.'/inc/eswipe-tabs-4.php';    ?>
  </div>
</div>

<textarea name="eswipe-custom-design"></textarea>
<script>
jQuery(function(){  
  eswipe_update_style();
});
</script>