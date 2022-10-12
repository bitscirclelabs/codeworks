<div class="row category-wrapper">
    <div class="col-md-12">
      
      <div class="row ">
    <div class="col-md-12">
    <a href="<?php echo get_permalink(); ?>" ><?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			the_post_thumbnail();
		} ?></a>
    </div>
 </div>
      
         <div class="row"><div class="col-md-12">
	     <a href="<?php echo get_permalink(); ?>"  class="no-decoration" > <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></a>
          <div class="post-date-author">
           <span class="post-author"><?php echo ucwords(get_the_author()); ?></span> | <span class="post-date"><?php echo get_the_date('M j, Y', $post->ID);?></span></div>
          <?php if(has_category()){ ?><div class="post-categories"><strong>Categories:</strong> <?php the_category(', '); ?></div><?php } ?>
           <?php if(has_tag()){ ?><div class="post-tags"><strong>Tags:</strong> <?php the_tags('',', ',''); ?></div> <?php } ?>
 		   
          </div></div> 
          
  <div class="row ">
    <div class="col-md-12">
       <p class="entry-content">
		<?php
							$trimmed_content = wp_trim_words( get_the_content(), 40, '...' .'
								<div class="read-more-link-container">
								<a href="'. get_permalink() .'" class="read-more-link"> Read More</a>
								</div>
								' );
							echo $trimmed_content;
						?>
	</p><!-- .entry-content -->           
   </div>   
 </div>
 
    
    </div>
</div> 
 
 
 
 