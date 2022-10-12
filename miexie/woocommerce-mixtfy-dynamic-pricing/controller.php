<?php set_time_limit(0);

add_action('wp_ajax_mixify_update_sales', 'mixify_update_sales_callback');
function mixify_update_sales_callback() {       
  $themeoptions = $_POST['themeoptions'];
  $return = 'FALSE';
  
  if(is_array($themeoptions)){
	for($i=0; $i<count($themeoptions);$i++):
	  $option = json_decode(stripslashes($themeoptions[$i]));	   
	  update_option($option->name, $option->value );       
	endfor;
	$return = 'TRUE';   
  }  
  
   //-----------------------------
   $percent_amt = false;  
   if(get_option('mf_woo_discount_amt'))  $percent_amt = get_option('mf_woo_discount_amt');   
   $args = array( 'post_type' => 'product', 'posts_per_page' => -1 );   
   $loop = new WP_Query( $args );
   while ( $loop->have_posts() ) : $loop->the_post(); 
      global $product; $id = $product->get_ID();  
	  
      if($product->product_type == 'simple'){    
	   
	    $sales_price = '';
		if($percent_amt && !empty($percent_amt)){
			$sales_price = round(($product->regular_price - ($product->regular_price * ($percent_amt/100))),2); 
			update_post_meta($id,'_sale_price', $sales_price);
		    update_post_meta($id, '_price', $sales_price);  
		}else{
			delete_post_meta($id,'_sale_price'); 
			update_post_meta($id, '_price', $product->regular_price); 
		}
		 
		
	  }elseif($product->product_type == 'variable'){  
		 $available_variations = $product->get_available_variations();	
		 $min_price_variation_id = get_post_meta($id, '_min_price_variation_id', true );
		 $max_price_variation_id = get_post_meta($id, '_max_price_variation_id', true );
		 
		 //getting default variation attr
		 $default_cover_attr = ''; $default_variation_id = false;
		 $wc_product_variable  =  new WC_Product_Variable( $id );
         $default_attr = $wc_product_variable->get_variation_default_attributes();
		 if(array_key_exists('cover', $default_attr) && $default_attr['cover'])
	     	$default_cover_attr = $default_attr['cover'];
	
	   
					
		 for ($i = 0; $i < count($available_variations); ++$i) {
				$variation_id=$available_variations[$i]['variation_id'];
				$variable_product1= new WC_Product_Variation( $variation_id );
				$regular_price = $variable_product1 ->regular_price;
				$variation_attributes = $variable_product1 ->get_variation_attributes();   
				
				if($default_cover_attr==$variation_attributes['attribute_cover'])
					$default_variation_id = $variation_id;   
				
				
				//for individual variation
				$sales_price = '';
				if($percent_amt && !empty($percent_amt)){
					$sales_price = round(($regular_price - ($regular_price * ($percent_amt/100))),2); 
					update_post_meta($variation_id,'_sale_price', $sales_price);
		    		update_post_meta($variation_id, '_price', $sales_price);  
				}else{
					update_post_meta($variation_id,'_sale_price', NULL);
		    		update_post_meta($variation_id, '_price', $regular_price);     
				}   
				
				
				//for min price
				if($min_price_variation_id == $variation_id){
					$sales_price = '';
					if($percent_amt && !empty($percent_amt)){
						$sales_price = round(($regular_price - ($regular_price * ($percent_amt/100))),2); 
						update_post_meta($id,'_min_variation_price', $sales_price);  
						update_post_meta($id,'_min_variation_sale_price', $sales_price);
						update_post_meta($id, '_min_sale_price_variation_id', $variation_id);  
					}else{
						update_post_meta($id,'_min_variation_price', NULL);  
						update_post_meta($id,'_min_variation_sale_price', NULL);
						update_post_meta($id, '_min_sale_price_variation_id', NULL);  
					}
				}
				
				
				//for max price
				if($max_price_variation_id == $variation_id){
					$sales_price = '';
					if($percent_amt && !empty($percent_amt)){
						$sales_price = round(($regular_price - ($regular_price * ($percent_amt/100))),2); 
						update_post_meta($id,'_max_variation_price', $sales_price);  
						update_post_meta($id,'_max_variation_sale_price', $sales_price);
						update_post_meta($id, '_max_sale_price_variation_id', $variation_id); 
					}else{
						update_post_meta($id,'_max_variation_price', NULL);  
						update_post_meta($id,'_max_variation_sale_price', NULL);
						update_post_meta($id, '_max_sale_price_variation_id', NULL);  
					}
				}
				
		
		 }//endfor
		 
		 
		  //getting default variation price 
		  if($default_variation_id): 
		    $_price = get_post_meta($default_variation_id, '_price', true );
		  else:
		     $_price = get_post_meta($min_price_variation_id, '_price', true );
		  endif;      
		  update_post_meta($id,'_price', $_price);   
		  update_post_meta($id,'_sale_price', $_price);         
		 
		 
	 } //end for variable product  
   endwhile; 
   wp_reset_query(); 
  //------------------------   
  
  echo $return;
  die(); // this is required to return a proper result
}
//--------------------------------------------------
