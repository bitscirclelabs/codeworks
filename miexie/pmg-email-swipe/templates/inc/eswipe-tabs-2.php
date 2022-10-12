<!--Box Style-->
<table class="options-table">
  <tbody>
       <tr>
        <td> <label>Border Size: </label> <span><input type="number" name="box-border-size"  min="0" onchange="eswipe_update_style();" value="<?php if($eswipe_custom) echo $selected_box_style['border_size']['val'];?>" /> <em>px</em></span></td>
        <td> <label>Border Radius Top Left: </label> <span><input type="number" name="box-border-radius-topleft"  min="0" onchange="eswipe_update_style();"  value="<?php if($eswipe_custom) echo $selected_box_style['border_radius_topleft']['val'];?>"  /> <em>px</em></span> </td>        
       </tr>
       
        <tr>
         <td><label>Border Color: </label> <span><input type="text" class="pmg-colorpicker" name="box-border-color" onchange="eswipe_update_style();" value="<?php if($eswipe_custom) echo $selected_box_style['border_color']['val'];?>" /> </span></td>
         <td><label>Border Radius Top Right: </label> <span><input type="number" name="box-border-radius-topright"  min="0" onchange="eswipe_update_style();" value="<?php if($eswipe_custom) echo $selected_box_style['border_radius_topright']['val'];?>" /> <em>px</em></span></td>     
       </tr>
       
        <tr>
         <td><label>Border Style: </label> <span><select name="box-border-style" onchange="eswipe_update_style();" >   
         <option value="solid" <?php if($eswipe_custom && $selected_box_style['border_style']['val']=='solid') echo 'selected="selected"';?> >Solid</option>      
         <option value="dotted"  <?php if($eswipe_custom && $selected_box_style['border_style']['val']=='dotted') echo 'selected="selected"';?>  >Dotted</option> 
         <option value="dashed"  <?php if($eswipe_custom && $selected_box_style['border_style']['val']=='dashed') echo 'selected="selected"';?>  >Dashed</option>    
        </select></span></td>
         <td> <label>Border Radius Bottom Left: </label> <span><input type="number" name="box-border-radius-botleft"  min="0" onchange="eswipe_update_style();" value="<?php if($eswipe_custom) echo $selected_box_style['border_radius_botleft']['val'];?>" /> <em>px</em></span> </td>      
       </tr>
       
         <tr>
         <td> <label>Background Color: </label> <span><input type="text" class="pmg-colorpicker" name="box-bg-color"  onchange="eswipe_update_style();" value="<?php if($eswipe_custom) echo $selected_box_style['bg_color']['val'];?>"  /> </span></td>
        <td><label>Border Radius Bottom Right: </label> <span><input type="number" name="box-border-radius-botright"  min="0" onchange="eswipe_update_style();"  value="<?php if($eswipe_custom) echo $selected_box_style['border_radius_botright']['val'];?>"  /> <em>px</em></span></td> 
       </tr>
       
   </tbody>
</table>