<?php //CONFIG PARAMETERS
$config=array();
$config['framework_prefix']='mixify';   
$config['framework_name']='NOW';  
$config['framework_developer']='Mixify Inc.';
$config['framework_logo']=MIXIFY_IMAGES_URL.'/logo.png';  
$config['framework_icon']=MIXIFY_IMAGES_URL.'/icon.png';  
$config['framework_copyright']='&copy; New Options Worldwide Outsourcing. All rights reserved '.date("Y").'.';
$config['framework_support_text']='<a href="#"><i class="fa fa-th-large"></i> Themes</a> | <a href="#"><i class="fa fa-life-ring"></i> Support</a>';
if ( ! defined( 'MIXIFY_FRAMEWORK_CONFIG' ) )	
	define('MIXIFY_FRAMEWORK_CONFIG', serialize($config));   

//---------------------------------------------------------
$siteconfig = array();
//General Page
$siteconfig['blogname'] = 'Travel Best Guide';   
$siteconfig['blogdescription'] = 'Exploring the world together';      
$siteconfig['mixify_logo'] = get_bloginfo('template_directory').'/images/logo.png';   
$siteconfig['mixify_favicon'] = get_bloginfo('template_directory').'/images/favicon.png';    
$siteconfig['mixify_contactno'] = '+639177136204';  
$siteconfig['mixify_copyright'] = '&copy; Travel Best Guide. All rights reserved '.date("Y").'.';
$siteconfig['mixify_footer1_title'] = 'About Us';    
$siteconfig['mixify_footer1_content'] = 'Travel Best opened last August 2006. Our well-managed teams of qualified, competent and friendly people will respond to your first inquiry, carefully study your itinerary, gives the optimum travel options, within your budgetary constraints and work all along with you.';   
$siteconfig['mixify_footer2_title'] = 'Latest Posts';    
$siteconfig['mixify_latestpost_limit'] = '0';
$siteconfig['mixify_footer3_title'] = 'Social Media';      

//Home Page  
$siteconfig['mixify_topfeat1_title'] = '<h1>Flight Deals</h1><p>More deals</p>';    
$siteconfig['mixify_topfeat1_content'] = '  <div class="col-md-2  flight-deals-instance">
              <p>Melbourne</p>
              <p>One way</p>
              <p>&#x20B1; 20634</p>
          </div>'."\n".'
  		 <div class="col-md-2 flight-deals-instance">
              <p>Paris</p>
              <p>One way</p>
              <p>&#x20B1; 15645</p>
          </div> '."\n".'
  		  <div class="col-md-2 flight-deals-instance">
              <p>London</p>
              <p>One way</p>
              <p>&#x20B1; 17640</p>
          </div>'."\n".'
  		  <div class="col-md-2 flight-deals-instance">
              <p>Sydney</p>
              <p>One way</p>
              <p>&#x20B1; 33785</p>  
          </div>';       

$siteconfig['mixify_topfeat2_title'] = '<h1>Travel Top Sellers</h1><p>See more hot travel deals</p>';    
$siteconfig['mixify_topfeat2_content'] = '  <div class="col-md-2 top-deals-instance">
              <p>Rail Passes</p>
              <p>Global Pass</p>
              <p>&#x20B1; 10657</p>
          </div> '."\n".'
  		 <div class="col-md-2 top-deals-instance">
              <p>Car Hire</p>
              <p>Rent a car from</p>
              <p>&#x20B1; 226<span>/day</span></p>
          </div> '."\n".'
  		  <div class="col-md-2 top-deals-instance">
              <p>Music Fest</p>
              <p>Festival Packages</p>
              <p>&#x20B1; 5124</p>
          </div> '."\n".'  
  		  <div class="col-md-2 top-deals-instance">
              <p>Beach</p>
              <p>Beach and Hotels</p>
              <p>&#x20B1; 9478</p>  
       </div> ';       


$siteconfig['mixify_feat1_posts_header'] = 'Discover our Awesome Getaway Package...'; 
$siteconfig['mixify_feat1_posts_termid'] = 0;  
$siteconfig['mixify_feat1_posts_limit'] = 3;  

$siteconfig['mixify_feat2_posts_header'] = 'Domestic Packages'; 
$siteconfig['mixify_feat2_posts_termid'] = 0;  
$siteconfig['mixify_feat2_posts_limit'] = 5;   

//Social page
$siteconfig['mixify_social_icons'] = array( array('slug'=>'roundededge','name'=>'Rounded Edge'), array('slug'=>'round','name'=>'Rounded Icon'), array('slug'=>'round3d','name'=>'Rounded 3D'));    
$siteconfig['mixify_social_icons_sizes'] = array(  array('slug'=>'48x48','name'=>'48px x 48px'),array('slug'=>'32x32','name'=>'32px x 32px', 'selected'=>'selected'),array('slug'=>'24x24','name'=>'24px x 24px')); 

$siteconfig['mixify_social_fb_enabled'] = 1;
$siteconfig['mixify_social_fb_optionslug'] = 'round3d';
$siteconfig['mixify_social_fb_optionsize'] = '48x48';
$siteconfig['mixify_social_fb_link'] = '';
$siteconfig['mixify_social_fb_icon'] = get_bloginfo('template_directory').'/images/icon/facebook.png';   

$siteconfig['mixify_social_tw_enabled'] = 1;
$siteconfig['mixify_social_tw_optionslug'] = 'round3d';
$siteconfig['mixify_social_tw_optionsize'] = '48x48'; 
$siteconfig['mixify_social_tw_link'] = '';
$siteconfig['mixify_social_tw_icon'] = '#';   

$siteconfig['mixify_social_yt_enabled'] = 1;
$siteconfig['mixify_social_yt_optionslug'] = 'round3d';
$siteconfig['mixify_social_yt_optionsize'] = '48x48';  
$siteconfig['mixify_social_yt_link'] = '';           
$siteconfig['mixify_social_yt_icon'] = get_bloginfo('template_directory').'/images/icon/youtube.png';             

//Testimonial Page
$siteconfig['mixify_testimonial_header'] = 'Testimonials'; 
$siteconfig['mixify_testimonial_termid'] = 0;   

//Gallery Page
$siteconfig['mixify_gallery_header'] = 'Gallery'; 
$siteconfig['mixify_gallery_termid'] = 0;  
$siteconfig['mixify_gallery_seemore_link'] = '#'; 


//Appearance Page
$siteconfig['mixify_font_faces'] = array( 
array('slug'=>'Tahoma','name'=>'Tahoma'), 
array('slug'=>'Arial','name'=>'Arial'), 
array('slug'=>'Georgia','name'=>'Georgia'), 
array('slug'=>'Times New Roman','name'=>'Times New Roman'), 
array('slug'=>'Verdana','name'=>'Verdana'), 
array('slug'=>'Helvetica','name'=>'Helvetica'), 
array('slug'=>'AlfaSlabOne','name'=>'AlfaSlabOne'), 
array('slug'=>'AmaticSC','name'=>'AmaticSC'), 
array('slug'=>'Arvo','name'=>'Arvo'), 
array('slug'=>'BELL_0','name'=>'BELL_0'), 
array('slug'=>'cinnamon cake','name'=>'cinnamon cake'), 
array('slug'=>'CreteRound','name'=>'CreteRound')
);
    
$siteconfig['mixify_text_decorations'] = array( array('slug'=>'none','name'=>'None'), array('slug'=>'underline','name'=>'Underline'));    

$siteconfig['mixify_body_background'] = get_bloginfo('template_directory').'/images/body-bg.jpg';
$siteconfig['mixify_body_fontcolor'] = '#000';
$siteconfig['mixify_body_fontface'] = 'BELL_0'; 
$siteconfig['mixify_body_fontsize'] = '16px'; 

$siteconfig['mixify_header_background'] = get_bloginfo('template_directory').'/images/header-bg.jpg'; 

$siteconfig['mixify_a_fontcolor'] = '#608f40';
$siteconfig['mixify_a_fontface'] = 'BELL_0'; 
$siteconfig['mixify_a_fontsize'] = '16px'; 
$siteconfig['mixify_a_decoration'] = 'none'; 

$siteconfig['mixify_ahover_fontcolor'] = '#486235';
$siteconfig['mixify_ahover_fontface'] = 'BELL_0'; 
$siteconfig['mixify_ahover_fontsize'] = '16px'; 
$siteconfig['mixify_ahover_decoration'] = 'underline'; 

$siteconfig['mixify_p_fontcolor'] = '#000000';
$siteconfig['mixify_p_fontface'] = 'BELL_0'; 
$siteconfig['mixify_p_fontsize'] = '17px'; 
 
$siteconfig['mixify_h1_fontcolor'] = '#000000';
$siteconfig['mixify_h1_fontface'] = 'BELL_0'; 
$siteconfig['mixify_h1_fontsize'] = '29px'; 

$siteconfig['mixify_h2_fontcolor'] = '#000000';
$siteconfig['mixify_h2_fontface'] = 'BELL_0'; 
$siteconfig['mixify_h2_fontsize'] = '24px'; 
 
//Slider Page 
$siteconfig['mixify_slider_auto'] = 'true'; 
$siteconfig['mixify_slider_speed'] = '500'; 
$siteconfig['mixify_slider_timeout'] = '4000';    
$siteconfig['mixify_slider_showcaption'] = 'true';   
$siteconfig['mixify_slider_pager'] = 'false';   
$siteconfig['mixify_slider_nav'] = 'true';   
$siteconfig['mixify_slider_random'] = 'false';   
$siteconfig['mixify_slider_pause'] = 'false';  
$siteconfig['mixify_slider_pausecontrols'] = 'false';  

  
//Slider Images Page  
$siteconfig['mixify_slider_images'] = serialize(array( 
 array('src' => get_bloginfo('template_directory').'/images/slider1.jpg', 'title' => '', 'text' => 'Paris is the capital and most-populous city of France. Situated on the Seine River, in the north of the country, it is in the centre of the Île-de-France region, also known as the région parisienne, "Paris Region".'), 
 array('src' => get_bloginfo('template_directory').'/images/slider2.jpg','title' => '', 'text' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. ') ));    
      
//Styles & Scripts Page
$siteconfig['mixify_custom_js'] = '';  
$siteconfig['mixify_custom_css'] = '';  
$siteconfig['mixify_google_analytics'] = '';  

 
 
       
//serialized and start declaring constant variable 
if ( ! defined( 'MIXIFY_SITE_CONFIG' ) )	
	define('MIXIFY_SITE_CONFIG', serialize($siteconfig));  