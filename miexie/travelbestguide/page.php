 <?php get_header();  ?>      
	    
    <div class="content-section"  id="body-content-section" >
        <div class="container">
        <div class="floatleft" id="site-main" >         
       <?php get_sidebar(); ?>                
          <div class="col-md-8 post-<?php the_ID(); ?>" id="main-article-wrapper"  >
                        
            
           <?php
			// Start the loop.
			while ( have_posts() ) : the_post();
			  // Include the page content template.
			   get_template_part( 'content' );
			  // If comments are open or we have at least one comment, load up the comment template. 			
			endwhile;
			?>
        
              
         </div> <!--end main-article-wrapper--> 

         </div>
		
        </div>
    </div>
    <?php get_footer(); ?>
