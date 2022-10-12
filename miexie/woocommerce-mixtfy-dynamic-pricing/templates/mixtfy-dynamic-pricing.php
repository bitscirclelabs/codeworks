<div id="mixify-status-wrapper"  > <div class="success"  >Success</div> <div class="normal"  >Loading...</div> <div class="error"  >Error</div> </div>        
<div id="mixify-main-wrapper" > 
  <div class="mixify-body-inner" >  
	  <div class="field-row" >
        <h2>Mixtfy Dynamic Pricing</h2>
	    <div class="valign-center">Enter your discount percent amount: <?php $optionname = 'mf_woo_discount_amt'; ?></div>   
		<div><input type="number" value="<?php if(get_option($optionname)) echo get_option($optionname); ?>"  data-mixifyname="<?php echo $optionname; ?>"  data-mixifytype="form-field"  /> <strong>%</strong>        
		<p class="description">Please enter the percent amount for all your product sales price.</p></div>
	  </div>
	   <div class="field-row" ><button class="button-primary" onclick="mixify_updatechanges();">Update All Sales Price</button></div>
   </div>
        
</div>