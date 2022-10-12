  <div class="col-md-4 floatright " id="main-sidebar-wrapper" >
             <aside class="widget widget_subscribe" >
                   <div class="row"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/subscribe-head.png" alt="Signup for free!"  title="Signup for free!" /></div>
                   <div class="row"><p>Lovely things to see & do across the UK direct to your inbox!</p></div>
                   <div class="row"><div class="theme-form floatleft" ><input type="text" placeholder="Your Email Address"  class="floatleft" /><button class="floatleft" >Go</button></div> </div>
                  <div class="row"><hr class="hr-dashed" /></div>
            </aside> 
            
      <?php $fb_link = mixify_get_option('mixify_social_fb_link'); $tw_link = mixify_get_option('mixify_social_yt_link');  
	      if(!empty($fb_link) || !empty($yt_link)):  ?> 			
           <aside class="widget  widget_social" >
           <?php if(!empty($fb_link)): ?> 
			<div class="row"><span><img src="<?php echo mixify_get_option('mixify_social_fb_icon'); ?>" alt="Facebook"  title="Facebook" /></span><span><?php echo($fb_link); ?></span></div>
		   <?php endif; ?>
		   <?php if(!empty($yt_link)): ?> 
              <div class="row"><span><img src="<?php echo mixify_get_option('mixify_social_yt_icon'); ?>" alt="YouTube"  title="YouTube" /></span><span><?php echo($yt_link); ?></span></div>   
           <?php endif; ?>			  
            </aside> 
      <?php endif; ?>      
            
			<aside class="widget widget_testimonials" >  
                <h3 class="widget-title"><?php echo mixify_get_option('mixify_testimonial_header'); ?></h3>     
               <ul id="quotes">                
       		   
                <?php if($testimonial_termid = mixify_get_option('mixify_testimonial_termid')): ?>
                <?php 
				$args = array('post_type'  => 'testimonial', 
					'tax_query' => array(
						'relation' => 'AND',
						 array(
							'taxonomy' => 'testimonial-category',
							'field'    => 'term_id',
							'terms'    => array( $testimonial_termid )
						 ) 
					), 
				 'orderby'  => 'date', 'order'  => 'DESC' );
				   $my_query = new WP_Query($args);  
				  if( $my_query->have_posts() ) {
  					while ($my_query->have_posts()) : $my_query->the_post(); ?>    					
                   <li>
            		 <blockquote><?php the_content(); ?></blockquote>
            		 <cite>&mdash; <?php the_title(); ?></cite>
        		   </li>
              <?php  endwhile;
					} wp_reset_query(); 
 			    else: ?>               
                  <li>
            		<blockquote>Duis aute irure dolor in reprehenderit?</blockquote>
            		<cite>&mdash; Illinois</cite>
        		</li>
        		  <li>
            	  <blockquote>Dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
            sunt in culpa qui officia deserunt mollit anim id est laborum.</blockquote>
            	 <cite>&mdash; West Virginia</cite>
        		</li>                 
				<?php endif; ?>
                   
        		
    		</ul>
       
             </aside>    
             
             <?php if ( !is_page('gallery') ): ?>
               <aside class="widget  widget_gallery" >
                <h3 class="widget-title"><?php echo mixify_get_option('mixify_gallery_header'); ?></h3>  
                  <div class="col-md-12 ">  
               
                <?php if($gallery_termid = mixify_get_option('mixify_gallery_termid')): ?>
                <?php 
				$args = array('post_type'  => 'gallery', 
					'tax_query' => array(
						'relation' => 'AND',
						 array(
							'taxonomy' => 'gallery-category',
							'field'    => 'term_id',
							'terms'    => array( $gallery_termid )
						 ) 
					), 
				 'orderby'  => 'date', 'order'  => 'DESC' );
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
 			    else: ?>               
                  <a class="fancybox-button" rel="fancybox-button" href="<?php echo get_bloginfo( 'template_directory' ); ?>/images/gallery1.png" title="Gallery1"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/gallery1.png" alt="Gallery1"  title="Gallery1" />
               </a>                                    
                  <a class="fancybox-button" rel="fancybox-button" href="<?php echo get_bloginfo( 'template_directory' ); ?>/images/gallery2.png" title="Gallery12"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/gallery2.png" alt="Gallery2"  title="Gallery2" />
               </a> 
                  <a class="fancybox-button" rel="fancybox-button" href="<?php echo get_bloginfo( 'template_directory' ); ?>/images/gallery3.png" title="Gallery3"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/gallery3.png" alt="Gallery3"  title="Gallery3" />
               </a>
                  <a class="fancybox-button" rel="fancybox-button" href="<?php echo get_bloginfo( 'template_directory' ); ?>/images/gallery4.png" title="Gallery4"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/gallery4.png" alt="Gallery4"  title="Gallery4" />
               </a>                                 
				<?php endif; ?>
                
                
               
              
                </div>   
                <div class="row"> <a href="<?php echo mixify_get_option('mixify_gallery_seemore_link'); ?>" class="see-more">See More</a> </div>
             </aside>    
            <?php endif; ?>   
             
             <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Main Sidebar')) ?>   
                 
          </div>   <!--end main-sidebar-wrapper--> 
        