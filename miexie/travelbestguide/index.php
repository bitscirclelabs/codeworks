 <?php get_header();  ?>   
   
	<header id="banner"  >
      <div class="callbacks_container">
      <ul class="rslides" id="slider4">
      
       <?php $mixify_slider_images = mixify_get_option('mixify_slider_images',array('unserialize'=>true));
            $numimages = count($mixify_slider_images); ?>
        <?php  for($i=0; $i<$numimages; $i++){ $arreachimg = (array)$mixify_slider_images[$i];   ?>
        <li>
          <img src="<?php echo $arreachimg['src']; ?>"  alt="<?php echo $arreachimg['title']; ?>"  title="<?php echo $arreachimg['title']; ?>"   >
         <?php 
		 if(mixify_get_option('mixify_slider_showcaption')=='true'){ ?><div class="caption"><div class="wrapper"> <div class="caption-inner"> 
            <?php if(!empty($arreachimg['title'])): ?><h1><?php echo $arreachimg['title']; ?></h1> <?php endif; ?>
            <?php if(!empty($arreachimg['text'])): ?><p><?php echo $arreachimg['text']; ?></p> <?php endif; ?>      
             </div> </div> </div> <?php } ?>
        </li>
        <?php } ?>
        
      </ul>  
    </div>
    
      <!-- Slideshow 4 Pager -->
    <?php if(mixify_get_option('mixify_slider_pager')=='true'){ ?> <ul id="slider4-pager">
      <?php  for($i=0; $i<$numimages; $i++){ $arreachimg = (array)$mixify_slider_images[$i];   ?>
       <li><a href="#"><img src="<?php echo $arreachimg['src']; ?>"  alt="<?php echo $arreachimg['title']; ?>"  title="<?php echo $arreachimg['title']; ?>"   ></a></li>
      <?php } ?>
     </ul> <?php } ?>
     
     
    </header>

    <div class="content-section top-content-section" >
       <div class="container">
          <div class="col-md-4"><div class="package-label" id="flight-deals" ><?php echo mixify_get_option('mixify_topfeat1_title');  ?></div></div>  <?php echo mixify_get_option('mixify_topfeat1_content');  ?>
       </div>
       <div class="container">
          <div class="col-md-4" ><div class="package-label" id="top-deals" ><?php echo mixify_get_option('mixify_topfeat2_title');  ?></div></div>
  		  <?php echo mixify_get_option('mixify_topfeat2_content');  ?>
    </div>
    </div>
    
    
    <div class="content-section"  id="body-content-section" >
        <div class="container">
        <div class="floatleft site-home-main" id="site-main" > 
        
        
       <?php get_sidebar(); ?>
        
        
          <div class="col-md-8 " id="main-article-wrapper" >
              <div class="row"><div class="col-md-12  featured-wrapper-header"><h1><?php echo mixify_get_option('mixify_feat1_posts_header');  ?></h1></div></div>              
              <div class="row featured-wrapper-1">
              
              
                <?php if(mixify_get_option('mixify_feat1_posts_termid')): ?>
                 <?php 
					$args = array( 'posts_per_page' => mixify_get_option('mixify_feat1_posts_limit'), 'category' => mixify_get_option('mixify_feat1_posts_termid'), 'orderby'  => 'date', 'order'  => 'DESC' );
				    $myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
					                    
                    <div class="col-md-4">
                   <div class="featured-section-1">
                      <a title="<?php echo $post->post_title; ?>" href="<?php echo get_permalink( $post->id ); ?>"><?php echo get_the_post_thumbnail( $post->ID ); ?></a>
                      <a title="<?php echo $post->post_title; ?>" href="<?php echo get_permalink( $post->id ); ?>"><h2><?php echo $post->post_title; ?></h2></a>
                      <p><?php
							$trimmed_content = wp_trim_words( get_the_content(), 40, '...' .' <a href="'. get_permalink() .'" class="read-more-link"> Read More</a>' );
							echo $trimmed_content;
						?></p>
                     </div>
                 </div>
                 
				 <?php endforeach; 
				 wp_reset_postdata();?>

			   <?php else: ?>
               
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
                 
				<?php endif; ?>
              
              
              </div>
              
              <hr />
              
               <div class="row"><div class="col-md-12  featured-wrapper-header"><h2><?php echo mixify_get_option('mixify_feat2_posts_header');  ?></h2></div></div>              
              <div class="featured-wrapper-2">
                
                 <?php if(mixify_get_option('mixify_feat2_posts_termid')): ?>
                 <?php 
					$args = array( 'posts_per_page' => mixify_get_option('mixify_feat2_posts_limit'), 'category' => mixify_get_option('mixify_feat2_posts_termid'), 'orderby'  => 'date', 'order'  => 'DESC' );
				    $myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post ); ?>			                   
                    
                     <div class="col-md-4">
                   <div class="featured-section-2">
                    <a title="<?php echo $post->post_title; ?>" href="<?php echo get_permalink( $post->id ); ?>"><?php echo get_the_post_thumbnail( $post->ID ); ?></a>
                    <a title="<?php echo $post->post_title; ?>" href="<?php echo get_permalink( $post->id ); ?>"><h2><?php echo $post->post_title; ?></h2></a>
                    </div>
                 </div>
                    
				 <?php endforeach; 
				 wp_reset_postdata();?>

			   <?php else: ?>
               
                 <div class="col-md-4">
                   <div class="featured-section-2">
                     <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/domestic1.png" />
                      <h2>Boracay</h2>
                    </div>
                 </div>
                 <div class="col-md-4">
                   <div class="featured-section-2">
                     <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/domestic2.png" />
                      <h2>Puerto Galera</h2>
                    </div>
                 </div>
                 <div class="col-md-4">
                   <div class="featured-section-2">
                     <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/domestic3.png" />
                      <h2>Donsol</h2>
                    </div>
                 </div>
                 <div class="col-md-4">
                 <div class="featured-section-2">
                     <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/domestic4.png" />
                      <h2>Banaue Rice Terraces</h2>
                    </div>
                 </div>                 
                 <div class="col-md-4"> 
                 <div class="featured-section-2">
                     <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/domestic5.png" />
                      <h2>Tubbataha Reef</h2>
                    </div>
                  </div>          
                 
				<?php endif; ?>
                        
              </div>
              
         </div> <!--end main-article-wrapper--> 

         </div>
		
        </div>
    </div>


    <?php get_footer(); ?>
