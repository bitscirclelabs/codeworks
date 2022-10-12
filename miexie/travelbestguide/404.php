 <?php get_header();  ?>      
	    
    <div class="content-section"  id="body-content-section" >
        <div class="container">
        <div class="floatleft" id="site-main" >         
       <?php get_sidebar(); ?>                
          <div class="col-md-8" id="main-article-wrapper"  >
                      
      
<div class="row">
 <div class="col-md-12"><h1 class="entry-title">Not Found</h1></div>
</div> 
 <div class="row ">
    <div class="col-md-12">
       <div class="entry-content">
	      <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?' ); ?></p>
          <?php get_search_form(); ?>
	</div><!-- .entry-content -->           
   </div>   
 </div>              
         </div> <!--end main-article-wrapper--> 

         </div>
		
        </div>
    </div>
    <?php get_footer(); ?>
