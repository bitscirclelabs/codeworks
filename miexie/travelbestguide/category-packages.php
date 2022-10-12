 <?php get_header();  ?>      
	    
    <div class="content-section"  id="body-content-section" >
        <div class="container">
        <div class="floatleft" id="site-main" >         
       <?php get_sidebar(); ?>                
          <div class="col-md-8" id="main-article-wrapper"  >
          
       	<?php if ( have_posts() ) : ?>

			<header class="archive-header">
				<h1 class="archive-title"><?php echo single_cat_title( '', false ); ?></h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .archive-header -->

          <div class="row">
			<?php
					// Start the Loop.
					while ( have_posts() ) : the_post(); ?>

					<div class="col-md-3">
                      <div class="package-img"><a href="<?php echo get_permalink(); ?>" ><?php if ( has_post_thumbnail() ) { 
						the_post_thumbnail('image-gallery-size');
						} ?></a></div>
                      <div class="package-caption"><a href="<?php echo get_permalink(); ?>" ><?php the_title(); ?></a></div>    
                    </div>
                    
                    
			   <?php endwhile; ?>
			   		<div class="col-md-12">			
              <?php  mixify_paging_nav();		 ?>
             		 </div>
                     	
			<?php	else :  echo '<p>No package added yet!</p>'; endif; 		?>
          </div> 
            
            
              
         </div> <!--end main-article-wrapper--> 

         </div>
		
        </div>
    </div>
    <?php get_footer(); ?>
