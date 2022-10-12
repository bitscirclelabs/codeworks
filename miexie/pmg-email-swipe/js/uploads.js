jQuery(document).ready(function($){
	//upload logo event
	jQuery('#upload_logo_button').click(function() {
		//type = image,audio,video,file. If we write it wrong, nothing will appear. type = file by default
		// El tipo no importa, ya que desde hace algunas versiones, el uploader puede subir cualquier tipo de archivo
		
		// Si no lo hacemos desde un meta box dentro de un post y además WP_DEBUG = true, nos saldrá un error ya que
		// no estará asociado a ningún post
		
		//tb_show(caption, url, imageGroup)
		// Google: 'ImageGroup tb_show thickbox':
		//The optional imageGroup parameter can also be used to pass in an array of images for a single or multiple image slide show gallery.
		// The problem is that inserting a gallery needs an associated post to work
		tb_show('Media Library', 'media-upload.php?referer=wptuts-settings&amp;type=image&amp;TB_iframe=true&amp;post_id=0', false);
		
			window.send_to_editor = function(html) {
			// html returns a link like this:
			// <a href="{server_uploaded_image_url}"><img src="{server_uploaded_image_url}" alt="" title="" width="" height"" class="alignzone size-full wp-image-125" /></a>
		
		
			jQuery('#html_logo').html(html);			
			var image_url = jQuery('#html_logo a').attr('href');		
			
			jQuery('#logo_url').val(image_url);			  			
			jQuery('#upload_logo_preview img').attr('src',image_url);
			jQuery('#upload_logo_preview').fadeIn('normal');
			tb_remove();  
			
			
		
			}
		
		
		return false;
	});
	
 //--------------------------------------------------	
	
	//upload logo event
	jQuery('#upload_favicon_button').click(function() {
		//type = image,audio,video,file. If we write it wrong, nothing will appear. type = file by default
		// El tipo no importa, ya que desde hace algunas versiones, el uploader puede subir cualquier tipo de archivo
		
		// Si no lo hacemos desde un meta box dentro de un post y además WP_DEBUG = true, nos saldrá un error ya que
		// no estará asociado a ningún post
		
		//tb_show(caption, url, imageGroup)
		// Google: 'ImageGroup tb_show thickbox':
		//The optional imageGroup parameter can also be used to pass in an array of images for a single or multiple image slide show gallery.
		// The problem is that inserting a gallery needs an associated post to work
		tb_show('Media Library', 'media-upload.php?referer=wptuts-settings&amp;type=image&amp;TB_iframe=true&amp;post_id=0', false);
		
			window.send_to_editor = function(html) {  
			// html returns a link like this:
			// <a href="{server_uploaded_image_url}"><img src="{server_uploaded_image_url}" alt="" title="" width="" height"" class="alignzone size-full wp-image-125" /></a>
		
		
			jQuery('#html_favicon').html(html);			
			var image_url = jQuery('#html_favicon a').attr('href');		
			
			jQuery('#favicon_url').val(image_url);			  			
			jQuery('#upload_favicon_preview img').attr('src',image_url);
			jQuery('#upload_favicon_preview').fadeIn('normal');
			tb_remove();  
			
			
			
		
			}
		
		
		return false;
	});
	
	
	
	//---------------------------------------
	
});