 <?php get_header();  ?>      
	    
    <div class="content-section"  id="body-content-section" >
        <div class="container">
        <div class="floatleft" id="site-main" >         
       <?php get_sidebar(); ?>                
          <div class="col-md-8 post-<?php the_ID(); ?>" id="main-article-wrapper"  >
             <!-- <div class="row"><div class="col-md-12  featured-wrapper-header"><h1>Discover our Awesome Getaway Package...</h1></div></div>              
              <div class="row featured-wrapper-1">
                 <div class="col-md-4">
                   <div class="featured-section-1">
                     <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/gateaway1.jpg" />
                      <h2>Beijing</h2>
                      <p>Want to book a vacation to Beijing? Whether you're off for a romantic vacation, family trip, or an all-inclusive holiday, Beijing vacation packages on Travel Best Guide make planning your trip simple and affordable.</p>
                     </div>
                 </div>
                 <div class="col-md-4">
                  <div class="featured-section-1">
                     <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/gateaway2.jpg" />
                      <h2>Kyoto</h2>
                      <p>Find the perfect vacation package for Kyoto on Travel Best Guide by comparing Kyoto hotel and flight prices. Travelers like you have written 45,574 reviews and posted 36,090 candid photos for Kyoto hotels. Book your Kyoto vacation today!</p>
                     </div>
                 </div>
                 <div class="col-md-4">
                  <div class="featured-section-1">
                     <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/gateaway3.jpg" />
                      <h2>Rome</h2>
                      <p>Want to book a vacation to Rome? Whether you're off for a romantic vacation, family trip, or an all-inclusive holiday, Rome vacation packages on Travel Best Guide make planning your trip simple and affordable.</p>
                     </div>
                 </div>   
              </div> -->
              
            
           <?php
			// Start the loop.
			while ( have_posts() ) : the_post();
			// Include the page content template.
			get_template_part( 'content' );
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			// End the loop.
			endwhile;
			?>
        
              
         </div> <!--end main-article-wrapper--> 

         </div>
		
        </div>
    </div>
    <?php get_footer(); ?>
