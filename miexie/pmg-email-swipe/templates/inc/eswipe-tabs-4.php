<!--Button Style-->
  <table class="options-table">
      <tbody>
       <tr>
        <td> <label>Font Color: </label> <span><input type="text" class="pmg-colorpicker" name="btn-font-color" onchange="eswipe_update_style();"  value="<?php if($eswipe_custom) echo $selected_btn_style['font_color']['val'];?>"  /> </span></td>
         <td> <label>Border Radius Top Left: </label> <span><input type="number" name="btn-border-radius-topleft"  min="0" onchange="eswipe_update_style();" value="<?php if($eswipe_custom) echo $selected_btn_style['border_radius_topleft']['val'];?>"  /> <em>px</em></span> </td>  
       </tr>
       
        <tr>
        <td> <label>Font Size: </label> <span><input type="number" name="btn-font-size"  min="0" onchange="eswipe_update_style();" value="<?php if($eswipe_custom) echo $selected_btn_style['font_size']['val'];?>"  /> <em>px</em></span></td>
        <td><label>Border Radius Top Right: </label> <span><input type="number" name="btn-border-radius-topright"  min="0" onchange="eswipe_update_style();" value="<?php if($eswipe_custom) echo $selected_btn_style['border_radius_topright']['val'];?>" /> <em>px</em></span></td>    
       </tr>
       
       <tr>
        <td> <label>Font Weight: </label> <span><select name="btn-font-weight"  onchange="eswipe_update_style();">
        <option value="100"  <?php if($eswipe_custom && $selected_btn_style['font_weight']['val']=='100') echo 'selected="selected"';?>   >100</option>
         <option value="200"  <?php if($eswipe_custom && $selected_btn_style['font_weight']['val']=='200') echo 'selected="selected"';?>   >200</option>
         <option value="300"  <?php if($eswipe_custom && $selected_btn_style['font_weight']['val']=='300') echo 'selected="selected"';?>   >300</option>
         <option value="400"  <?php if($eswipe_custom && $selected_btn_style['font_weight']['val']=='400') echo 'selected="selected"';?>   >400</option>
         <option value="500"  <?php if($eswipe_custom && $selected_btn_style['font_weight']['val']=='500') echo 'selected="selected"';?>   >500</option>
         <option value="600"  <?php if($eswipe_custom && $selected_btn_style['font_weight']['val']=='600') echo 'selected="selected"';?>   >600</option>
         <option value="700"  <?php if($eswipe_custom && $selected_btn_style['font_weight']['val']=='700') echo 'selected="selected"';?>   >700</option>
         <option value="800"  <?php if($eswipe_custom && $selected_btn_style['font_weight']['val']=='800') echo 'selected="selected"';?>   >800</option>
         <option value="900"  <?php if($eswipe_custom && $selected_btn_style['font_weight']['val']=='900') echo 'selected="selected"';?>   >900</option>
         <option value="normal"  <?php if($eswipe_custom && $selected_btn_style['font_weight']['val']=='normal') echo 'selected="selected"';?>   >Regular</option>
         <option value="bold"  <?php if($eswipe_custom && $selected_btn_style['font_weight']['val']=='bold') echo 'selected="selected"';?>   >Bold</option>   
        </select></span></td>
        <td> <label>Border Radius Bottom Left: </label> <span><input type="number" name="btn-border-radius-botleft"  min="0" onchange="eswipe_update_style();"  value="<?php if($eswipe_custom) echo $selected_btn_style['border_radius_botleft']['val'];?>" /> <em>px</em></span> </td>        
       </tr>
       
      
       
        <tr>
         <td> <label>Transform Text: </label> <span><select name="btn-text-case" onchange="eswipe_update_style();">   
      
         <option value="capitalize" <?php if($eswipe_custom && $selected_btn_style['text_case']['val']=='capitalize') echo 'selected="selected"';?>  >Capitalize</option>
         <option value="uppercase"  <?php if($eswipe_custom && $selected_btn_style['text_case']['val']=='uppercase') echo 'selected="selected"';?>   >Upper Case</option>       
         
        </select></span></td>
          <td><label>Border Radius Bottom Right: </label> <span><input type="number" name="btn-border-radius-botright"  min="0" onchange="eswipe_update_style();"  value="<?php if($eswipe_custom) echo $selected_btn_style['border_radius_botright']['val'];?>"  /> <em>px</em></span></td>        
       </tr>
        
         <tr>
        <td> <label>Background Color: </label> <span><input type="text" class="pmg-colorpicker" name="btn-bg-color" onchange="eswipe_update_style();"  value="<?php if($eswipe_custom) echo $selected_btn_style['bg_color']['val'];?>"   /> </span></td>
         <td>&nbsp;</td>
       </tr>
       
       
      </tbody>
     </table>