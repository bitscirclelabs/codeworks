<?php 
$framework_config = unserialize(MIXIFY_FRAMEWORK_CONFIG);  
$mixify_site_config = unserialize(MIXIFY_SITE_CONFIG);  
include_once MIXIFY_INCLUDES_DIR.'/mixify-inc-header.php';  ?>
<div id="mixify-status-wrapper"  > <div class="success"  >Success</div> <div class="normal"  >Loading...</div> <div class="error"  >Error</div> </div>        
<div id="mixify-main-wrapper" > 
<?php include_once MIXIFY_INCLUDES_DIR.'/mixify-inc-menu.php';  ?>
<!--start body-->
<div id="mixify-body-wrapper" >   
   <?php 
   include MIXIFY_TEMPLATES_DIR.'/mixify_general_page.php';  
   include MIXIFY_TEMPLATES_DIR.'/mixify_home_page.php';     
   include MIXIFY_TEMPLATES_DIR.'/mixify_socialmedia_page2.php';   
   include MIXIFY_TEMPLATES_DIR.'/mixify_testimonials_page.php';  
   include MIXIFY_TEMPLATES_DIR.'/mixify_gallery_page.php';  
   include MIXIFY_TEMPLATES_DIR.'/mixify_appearance_page.php';  
   include MIXIFY_TEMPLATES_DIR.'/mixify_slider_page.php'; 
   include MIXIFY_TEMPLATES_DIR.'/mixify_slider_images_page.php';
   include MIXIFY_TEMPLATES_DIR.'/mixify_styles_scripts_page.php';
   ?>
</div>
</div>
<?php include_once MIXIFY_INCLUDES_DIR.'/mixify-inc-footer.php';  ?>