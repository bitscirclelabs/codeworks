 <?php get_header();  ?>      
	    
    <div class="content-section"  id="body-content-section" >
        <div class="container">
        <div class="floatleft" id="site-main" >         
       <?php get_sidebar(); ?>                
          <div class="col-md-8" id="main-article-wrapper"  >
          
       	<?php if ( have_posts() ) : ?>

			<header class="archive-header">
				<h1 class="archive-title">Tag: <?php echo ucwords(single_cat_title( '', false )); ?></h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .archive-header -->

			<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', 'category' );

					endwhile;
					
                    mixify_paging_nav();
					
				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			?>
              
         </div> <!--end main-article-wrapper--> 

         </div>
		
        </div>
    </div>
    <?php get_footer(); ?>
