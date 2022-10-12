 <div class="row ">
    <div class="col-md-12">
    <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			the_post_thumbnail();
		} ?>
    </div>
 </div>
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
		<?php
			the_content();

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->           
   </div>   
 </div>
 <div class="row ">
   <?php  if ( is_single() ) : ?>
   <div class="col-md-12">
      <?php if(has_category()){ ?><div class="post-categories"><strong>Categories:</strong> <?php the_category(', '); ?></div><?php } ?>
      <?php if(has_tag()){ ?><div class="post-tags"><strong>Tags:</strong> <?php the_tags('',', ',''); ?></div> <?php } ?>
   </div>
   <?php endif; ?>
           
    <div class="col-md-12">
    <br />
    <?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<p class="edit-link">', '</p>' ); ?>
    </div>
 </div>