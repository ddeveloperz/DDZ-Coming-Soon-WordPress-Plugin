<?php
include_once DDZ_DIR_PATH.'/inc/admin/ddz_admin_setting.php';

function ddz_admin_settings_display()
{		
	

	if (isset($_POST) && $_POST['ddz_settings'] == 'save') {

		if (!isset($_GET['tab'])) {
			ddz_arugment_update('general_settings');
			wp_redirect( admin_url('admin.php?page=ddz_plugin_option') );
			exit();
		} else {
			ddz_arugment_update($_GET['tab']);
			wp_redirect( admin_url('admin.php?page=ddz_plugin_option&tab='.$_GET['tab']) );
			exit();
		}
		
	}
	     

	?>
	 <div class="wrap">
      


            <h1>Coming Soon Options</h1>
            <div class="container">
            	<div class="col-md-12">
            		<form method="POST" action="#" enctype="multipart/form-data">
            		<?php ddz_plugin_navigation(); ?>
	               	<?php ddz_display_current_settings(); ?>
	               	<div class="form-group">
	                   <button type="submit" name="ddz_settings"class="btn btn-primary" value="save">Submit</button>
	                </div>
	                </p>
	            </form>
            	</div>
	            
        	</div>
        
        	

        </div>

	<?php
}


function ddz_plugin_navigation () 
{

	$tabs = 	ddz_tabs_arr();
	?>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">Plugin Options</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	    	<?php 
	    	foreach ($tabs as $key => $value) {
	    		?>
	    		<li class="nav-item <?php echo ($_GET['tab'] == $key) ? 'acive' : ''; ?>">
			        <a class="nav-link" href="<?php 
			        echo admin_url('admin.php?page=ddz_plugin_option&tab='.$key  ); 

			        ?>"><?php echo $value; ?></a>
			    </li>

	    		<?php
	    	}
	    	?>
	  </div>
	</nav>

	<?php
}


function ddz_display_current_settings()
{
	$current_tab = $_GET['tab'];
	$tabs = 	ddz_tabs_arr();
	 if ($current_tab == 'general_settings' || !isset($current_tab)) {
		ddz_general_settings();
	} elseif ($current_tab == 'ddz_time_out') {
		ddz_timout_settings();
	} elseif ($current_tab == 'ddz_content') {
		ddz_content_settings();
	} elseif ($current_tab == 'ddz_background') {
		ddz_background_settings();
	} elseif ($current_tab == 'ddz_subscribe') {
		ddz_subscribe_settings();
	} elseif ($current_tab == 'ddz_security') {
		ddz_security_settings();
	} elseif ($current_tab == 'ddz_social') {
		ddz_social_settings();
	} elseif ($current_tab == 'ddz_help') {
		ddz_help_settings();
	}
}



function ddz_general_settings ()
{
	if (isset($_GET['tab'])) {
		$general = ddz_argument_val($_GET['tab']);	
	} else {
		$general = ddz_argument_val('general_settings');
	}
		
	?>
	<div class="col-md-12">
		<div class="card col-md-12">
			 <div class="card-header">Enable</div>
			 <div class="card-body">
			 	<div class="form-group">
			 		
				   <label>Activate</label> <input id="ddz_enable" type="checkbox" name="ddz_enable" value="<?php echo $general['ddz_enable']; ?>" <?php echo ($general['ddz_enable'] == 1)? 'checked':''; ?> >
				</div>

				
			 </div>
		</div>
		<div class="card col-md-12">
			 <div class="card-header">Select layout</div>
			 <div class="card-body">
			 	<div class="form-group">
				   <label>Layout</label> <input type="text" name="ddz_layout" value="<?php echo $general['ddz_layout']; ?>">
				</div>

				
			 </div>
		</div>

		<div class="card col-md-12">
			 <div class="card-header">Theme Color</div>
			 <div class="card-body">
			 	<div class="form-group">
			 		<div class="form-group">
					  <label for="hue-demo">Hue</label>
					  <input type="text" id="hue-demo" class="form-control demo"  name="ddz_general_color" data-control="hue" value="<?php echo $general['ddz_general_color']; ?>">
				  </div>

				  
				</div>

				
			 </div>
		</div>
		<div class="card col-md-12">
			 <div class="card-header">Meta settings</div>
			 <div class="card-body">
			 	<div class="form-group">
				   <label>Meta Title</label> <input type="text" name="ddz_meta_title" value="<?php echo $general['ddz_meta_title']; ?>">
				</div>

				<div class="form-group">
				   <label>Meta Keywords</label> <input type="text" name="ddz_meta_keywords" value="<?php echo $general['ddz_meta_keywords']; ?>">
				</div>

				<div class="form-group">
				   <label>Meta Description</label> <input type="text" name="ddz_meta_description" value="<?php echo $general['ddz_meta_description']; ?>">
				</div>
			 </div>
		</div>

		<div class="card col-md-12">
			<div class="card-header">Custom CSS</div>
			 <div class="card-body">
			 	<div class="form-group">
			 		<div class="form-group">
					   <label for="hue-demo">Custom Code</label>
						<textarea name="ddz_custom_css" style="width: 500px;height: 150px;"><?php echo $general['ddz_custom_css']; ?></textarea>
				  </div>
		
				  
				</div>

				
			 </div>
		</div>
		
	</div>
	

	<?php
}


function ddz_timout_settings()
{
	
	$time = ddz_argument_val($_GET['tab']);	
	
	?>
	
<script type="text/javascript">
	


</script>

	<div class="card col-md-12">
			<div class="card-header">Date of launch</div>
			 <div class="card-body">
			 	<div class="form-group">
			 		<div class="form-group">
					   <label for="hue-demo">Date</label>

						<input name="ddz_lanuch_date"  id="datepicker" value="<?php echo $time['ddz_lanuch_date']; ?>">
						<input name="ddz_lanuch_time" type="text" class="timepicker" id="basicExample" value="<?php echo $time['ddz_lanuch_time']; ?>">
						
				  </div>
		
				  
				</div>

				
			 </div>
		</div>


	<?php
}

function ddz_content_settings()
{
	$data = ddz_argument_val($_GET['tab']);	
	$image = wp_get_attachment_url( $data['ddz_logo'] );
	
	?>
<img id="ddz_img_url" src="<?php echo $image; ?>" width="200px" height="auto" >
<input type="submit"  name="button" id="upload_image_button" class="button" value="Add Logo"/>
<input type="hidden" name="ddz_logo" id="ddz_logo" value="">
	<div class="card col-md-12">
		<div class="card-header">Title</div>
		 <div class="card-body">
		 	<div class="form-group">
		 		<div class="form-group">
				    <label >Line 1</label>
					<input name="ddz_title_1" type="text" value="<?php echo $data['ddz_title_1']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Line 2</label>
					<input name="ddz_title_2" type="text" value="<?php echo $data['ddz_title_2']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Line 3</label>
					<input name="ddz_title_3" type="text" value="<?php echo $data['ddz_title_3']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Tagline</label>
					<input name="ddz_tagline" type="text" value="<?php echo $data['ddz_tagline']; ?>">
			 	</div>
			</div>		
		</div>
	</div>

	<div class="card col-md-12">
		<div class="card-header">Copy Rights</div>
		 <div class="card-body">
		 	<div class="form-group">
		 		<div class="form-group">
				   <label>Copy Rights</label>
					<input name="ddz_copyright" type="text" value="<?php echo $data['ddz_copyright']; ?>">
			  </div>
			</div>		
		</div>
	</div>

	<div class="card col-md-12">
		<div class="card-header">Contact Form</div>
		 <div class="card-body">
		 	<div class="form-group">
		 		<div class="form-group">
				    <label >Contact Form Title</label>
					<input name="ddz_contact_title" type="text" value="<?php echo $data['ddz_contact_title']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Name Field</label>
					<input name="ddz_contact_name" type="text" value="<?php echo $data['ddz_contact_name']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Email Field</label>
					<input name="ddz_contact_email" type="text" value="<?php echo $data['ddz_contact_email']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Message Field</label>
					<input name="ddz_contact_message" type="text" value="<?php echo $data['ddz_contact_message']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Send Button</label>
					<input name="ddz_contact_submit" type="text" value="<?php echo $data['ddz_contact_submit']; ?>">
			 	</div>
			 	<label class="badge badge-warning">Admin Email</label>
			 	<div class="form-group">
				    <label >Admin Email</label>
					<input name="ddz_admin_email" type="text" value="<?php echo $data['ddz_admin_email']; ?>">
			 	</div>
			</div>		
		</div>
	</div>

	<?php
}


function ddz_background_settings()
{
	$data = ddz_argument_val($_GET['tab']);	
	$image = wp_get_attachment_url( $data['ddz_background_img'] );
	
	?>
<img id="ddz_background_img" src="<?php echo $image; ?>" width="200px" height="auto" >
<input type="submit" id="upload_image_button_1" class="button" value="Add Logo"/>
<input type="hidden" name="ddz_background_img" id="ddz_background_img_id" value="">
	<script>
  jQuery( function() {
    jQuery( "#gallery_display" ).sortable();
    jQuery( "#gallery_display" ).disableSelection();
  } );
  </script>
	<div class="card col-md-12">
		<div class="card-header">Gallery</div>
		 <div class="card-body">
		 	<div class="form-group">
		 		<div class="form-group">
				   <label>Select image</label>
				  
				   <input type="submit" class="button" id="upload_image_button_gallery" value="Add Image">
					<input type="hidden" id="previous_images" value="<?php 
				  foreach (unserialize($data['ddz_img_arr']) as $value) {
				  	echo $value.',';
				  }
				  ?>" >
					<div>
						<ul id="gallery_display">
							<?php 
							if (is_array(unserialize($data['ddz_img_arr']))) {
							 	foreach (unserialize($data['ddz_img_arr']) as $value) {
							 		$image = wp_get_attachment_url($value);
							 		?>

							 		<li><img width="200px" height="auto"  id="'+value.id+'" src="<?php echo $image; ?>"><input name="ddz_img_arr[]" type="hidden" value="<?php echo $value; ?>"></li>
							 		<?php
							 	}
							 } 
				   			?>
						</ul>
					</div>
			  </div>
			</div>		
		</div>
	</div>
	<div class="card col-md-12">
		<div class="card-header">Gallery</div>
		 <div class="card-body">
		 	<div class="form-group">
		 		<div class="form-group">
				   <label>Type</label>
				  
				   <input type="text" class="" name="ddz_bk_type" value="">
					
			  </div>
			</div>		
		</div>
	</div>
	<?php
}

function ddz_subscribe_settings()
{
		$data = ddz_argument_val($_GET['tab']);	

	?>
	<div class="card col-md-12">
		<div class="card-header">Subscribe Form</div>
		 <div class="card-body">
		 	<div class="form-group">
		 		<div class="form-group">
				    <label >Subscribe Form Title</label>
					<input name="ddz_subscribe_title" type="text" value="<?php echo $data['ddz_subscribe_title']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Email Field</label>
					<input name="ddz_subscribe_label" type="text" value="<?php echo $data['ddz_subscribe_label']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Button Text</label>
					<input name="ddz_subscribe_button" type="text" value="<?php echo $data['ddz_subscribe_button']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Subscribe Message</label>
					<input name="ddz_subscribe_message" type="text" value="<?php echo $data['ddz_subscribe_message']; ?>">
			 	</div>
			</div>		
		</div>
	</div>

	<div class="card col-md-12">
		<div class="card-header">Storing Users info</div>
		 <div class="card-body">
		 	<div class="form-group">
		 		<div class="form-group">
				    <label >Subscribe Form Title</label>
					
					<select name="ddz_subscribe_type">
						<option>Select</option>
						<option>Database</option>
						<option>MailChimp</option>
					</select>
			 	</div>
			 	
			 	
			</div>		
		</div>
	</div>
	<?php
}


function ddz_security_settings()
{
	$data = ddz_argument_val($_GET['tab']);	
	$roles_allowed = unserialize($data['ddz_roles']);
	$wp_roles = new WP_Roles();
	?>
		<div class="card col-md-12">
			<div class="card-header">Access for users</div>
			 <div class="card-body">
			 	<div class="form-group">
			 		<?php
			 		foreach ($wp_roles->get_names() as $key => $value) {
					?>
			 		<div class="form-group">
					    <label ><?php echo $value; ?></label>
						<input name="ddz_roles[]" type="checkbox" value="<?php echo $key; ?>" <?php echo (in_array($key, $roles_allowed)) ? 'checked' : ''; ?>>
				 	</div>
					<?php
					}
					?>
				</div>		
			</div>
		</div>
	<?php
	
}



function ddz_social_settings()
{
	$data = ddz_argument_val($_GET['tab']);	
	?>
	<div class="card col-md-12">
		<div class="card-header">Social Media Links</div>
		 <div class="card-body">
		 	<div class="form-group">
		 		<div class="form-group">
				    <label >Text before Links</label>
					<input name="ddz_smb_text" type="text" value="<?php echo $data['ddz_smb_text']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Facebook</label>
					<input name="ddz_facebook" type="text" value="<?php echo $data['ddz_facebook']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Twitter</label>
					<input name="ddz_twitter" type="text" value="<?php echo $data['ddz_twitter']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Google plus</label>
					<input name="ddz_googleplus" type="text" value="<?php echo $data['ddz_googleplus']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Linkdin</label>
					<input name="ddz_linkedin" type="text" value="<?php echo $data['ddz_linkedin']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Instagram</label>
					<input name="ddz_instagram" type="text" value="<?php echo $data['ddz_instagram']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Pinterest</label>
					<input name="ddz_pinterest" type="text" value="<?php echo $data['ddz_pinterest']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Youtube</label>
					<input name="ddz_youtube" type="text" value="<?php echo $data['ddz_youtube']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >VK</label>
					<input name="ddz_vk" type="text" value="<?php echo $data['ddz_vk']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Vimeo</label>
					<input name="ddz_vimeoddz_dribbble" type="text" value="<?php echo $data['ddz_vimeoddz_dribbble']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Dribbble</label>
					<input name="ddz_dribbble" type="text" value="<?php echo $data['ddz_dribbble']; ?>">
			 	</div>
			</div>		
		</div>
	</div>

	<div class="card col-md-12">
		<div class="card-header">Twitter API</div>
		 <div class="card-body">
		 	<div class="form-group">
		 		<div class="form-group">
				    <label >Consumer Key (API Key)</label>
					<input name="ddz_consumer_key" type="text" value="<?php echo $data['ddz_consumer_key']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Consumer Secret (API Secret)</label>
					<input name="ddz_consumer_secret" type="text" value="<?php echo $data['ddz_consumer_secret']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Access Token</label>
					<input name="ddz_access_token" type="text" value="<?php echo $data['ddz_access_token']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Access Token Secret</label>
					<input name="ddz_access_token_secret" type="text" value="<?php echo $data['ddz_access_token_secret']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Twitter Username</label>
					<input name="ddz_twitter_username" type="text" value="<?php echo $data['ddz_twitter_username']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Twitter tweets</label>
					<input name="ddz_tweets_count" type="number" value="<?php echo $data['ddz_tweets_count']; ?>">
			 	</div>
			</div>		
		</div>
	</div>


	<?php
}

function ddz_help_settings()
{
	echo "help settings";
}
