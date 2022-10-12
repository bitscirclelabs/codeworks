 <?php /* Template Name: Gallery Page Template   */ ?>
 <?php get_header();  ?>     
	    
    <div class="content-section"  id="body-content-section" >
        <div class="container">
        <div class="floatleft" id="site-main" >         
       <?php get_sidebar(); ?>                
          <div class="col-md-8 post-<?php the_ID(); ?>" id="main-article-wrapper"  >
             <?php
			// Start the loop.
			while ( have_posts() ) : the_post();  ?>
               <div class="row">
 <div class="col-md-12"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></div>
<?php  if ( is_single() ) : ?>
   <div class="col-md-12 post-date-author">
           <span class="post-author"><?php echo ucwords(get_the_author()); ?></span> | <span class="post-date"><?php echo get_the_date('M j, Y', $post->ID);?></span></div>
<?php endif; ?>
</div> 

 <div class="row ">
    <div class="col-md-12">
       <div class="entry-content">
		<?php	the_content();  ?>
	</div><!-- .entry-content -->           
   </div>   
 </div>
 <?php endwhile;	?>
        
       <?php 
				  $args = array('post_type'  => 'gallery', 'orderby'  => 'date', 'order'  => 'DESC' );
				   $my_query = new WP_Query($args);  
				  if( $my_query->have_posts() ) {
  					while ($my_query->have_posts()) : $my_query->the_post(); 					 
				  $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'image-gallery-size' );
				  $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
					?>    					
                    <a class="fancybox-button" rel="fancybox-button" href="<?php echo $url; ?>" title="<?php the_title(); ?>">					
					<img src="<?php echo $thumb['0']; ?>" alt="<?php the_title(); ?>"  title="<?php the_title(); ?>" /></a>   
              <?php  endwhile;
			 } wp_reset_query(); 
 			?>              
         </div> <!--end main-article-wrapper--> 

         </div>
		
        </div>
    </div>
    <?php get_footer(); ?>
