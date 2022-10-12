<!DOCTYPE html>
<html  <?php language_attributes(); ?>> 
<head>
 <meta charset="<?php bloginfo( 'charset' ); ?>" />
 <meta http-equiv="X-UA-Compatible" content="IE=8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width">
<title>
<?php wp_title(''); ?>
<?php if(wp_title('', false)) { echo ' | '; } ?>
<?php bloginfo('name'); ?> 
<?php if ( is_home() ) { echo ' - '. mixify_get_option('blogdescription');  } ?>
</title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
   <?php wp_head(); ?> 
   <?php mixify_header(); ?>  
   <style type="text/css">
    /*body *{border:1px solid !important}  */
   </style>   
</head>  
<body>


 <div class="content-section header"  >
        <div class="container">   
           <div class="col-md-4">
             <a href="<?php echo get_bloginfo( 'url' ); ?>"><img src="<?php echo mixify_get_option('mixify_logo'); ?>" alt="<?php echo get_bloginfo( 'name' ); ?>" title="<?php echo get_bloginfo( 'name' ); ?>" id="logo-img" /> </a>   
           </div>
           
            
           <div class="col-md-8">
            
              <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <?php if (function_exists(mixify_clean_custom_menus())) mixify_clean_custom_menus(); ?>
  </div><!-- /.container-fluid -->
</nav> 

           </div>           
        </div>
  </div>