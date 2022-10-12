
     <div class="content-section" >
        <div class="container">
        <div class="floatleft" id="footer-main" > 
          
             <div class="col-md-4 widget_footer">
               <h3 class="widget_footer_title" ><?php echo mixify_get_option('mixify_footer1_title'); ?></h3>
               <p><?php echo mixify_get_option('mixify_footer1_content'); ?></p>
             </div>
  			 <div class="col-md-4 widget_footer">
                 <h3 class="widget_footer_title" ><?php echo mixify_get_option('mixify_footer2_title'); ?></h3>
                 <ul> 
                 <?php
				 if(mixify_get_option('mixify_latestpost_limit')):
				    $recent_posts = wp_get_recent_posts(array('numberposts' => mixify_get_option('mixify_latestpost_limit')));
					foreach( $recent_posts as $recent ){
					   echo '<li><a href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"].'</a> </li> ';
					}
				 else: ?>
				   <li><a href="#">Book a Flight Now!</a></li>
                   <li><a href="#">Money Tips</a></li>
                   <li><a href="#">How to "Travel Arrangements"</a></li>
		  <?php endif; ?>                  
                 </ul>
             </div>
  			 <div class="col-md-4 widget_footer">
                 <h3 class="widget_footer_title" ><?php echo mixify_get_option('mixify_footer3_title'); ?></h3>
                <a href="<?php echo mixify_get_option('mixify_social_fb_link'); ?>"><span><img src="<?php echo mixify_get_option('mixify_social_fb_icon'); ?>" alt="Facebook"  title="Facebook" /></span></a> 
                 <a href="<?php echo mixify_get_option('mixify_social_yt_link'); ?>"><span><img src="<?php echo mixify_get_option('mixify_social_yt_icon'); ?>" alt="YouTube"  title="YouTube" /></span></a>
             </div>
          
          
             <div class="col-md-12 widget_footer copyright" >
                <?php echo mixify_get_option('mixify_copyright'); ?>
             </div>
         </div>
		
        </div>
    </div>
    <?php mixify_footer(); ?>   
    <?php wp_footer(); ?> 
</body>

</html>