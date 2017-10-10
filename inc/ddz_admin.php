<?php
include_once DDZ_DIR_PATH.'/inc/admin/tcs_admin_setting.php';

function tcs_admin_settings_display()
{		
	

	if (isset($_POST) && $_POST['tcs_settings'] == 'save') {

		if (!isset($_GET['tab'])) {
			tcs_arugment_update('general_settings');
			wp_redirect( admin_url('admin.php?page=tcs_plugin_option') );
			exit();
		} else {
			tcs_arugment_update($_GET['tab']);
			wp_redirect( admin_url('admin.php?page=tcs_plugin_option&tab='.$_GET['tab']) );
			exit();
		}
		
	}
	     

	?>
	 <div class="wrap">
      


            <h1>Coming Soon Options</h1>
            <div class="container">
            	<div class="col-md-12">
            		<form method="POST" action="#" enctype="multipart/form-data">
            		<?php tcs_plugin_navigation(); ?>
	               	<?php tcs_display_current_settings(); ?>
	               	<div class="form-group">
	                   <button type="submit" name="tcs_settings"class="btn btn-primary" value="save">Submit</button>
	                </div>
	                </p>
	            </form>
            	</div>
	            
        	</div>
        
        	

        </div>

	<?php
}


function tcs_plugin_navigation () 
{

	$tabs = 	tcs_tabs_arr();
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
			        echo admin_url('admin.php?page=tcs_plugin_option&tab='.$key  ); 

			        ?>"><?php echo $value; ?></a>
			    </li>

	    		<?php
	    	}
	    	?>
	  </div>
	</nav>

	<?php
}


function tcs_display_current_settings()
{
	$current_tab = $_GET['tab'];
	$tabs = 	tcs_tabs_arr();
	 if ($current_tab == 'general_settings' || !isset($current_tab)) {
		tcs_general_settings();
	} elseif ($current_tab == 'tcs_time_out') {
		tcs_timout_settings();
	} elseif ($current_tab == 'tcs_content') {
		tcs_content_settings();
	} elseif ($current_tab == 'tcs_background') {
		tcs_background_settings();
	} elseif ($current_tab == 'tcs_subscribe') {
		tcs_subscribe_settings();
	} elseif ($current_tab == 'tcs_security') {
		tcs_security_settings();
	} elseif ($current_tab == 'tcs_social') {
		tcs_social_settings();
	} elseif ($current_tab == 'tcs_help') {
		tcs_help_settings();
	}
}



function tcs_general_settings ()
{
	if (isset($_GET['tab'])) {
		$general = tcs_argument_val($_GET['tab']);	
	} else {
		$general = tcs_argument_val('general_settings');
	}
		
	?>
	<div class="col-md-12">
		<div class="card col-md-12">
			 <div class="card-header">Select layout</div>
			 <div class="card-body">
			 	<div class="form-group">
				   <label>Layout</label> <input type="text" name="tcs_layout" value="<?php echo $general['tcs_layout']; ?>">
				</div>

				
			 </div>
		</div>

		<div class="card col-md-12">
			 <div class="card-header">Theme Color</div>
			 <div class="card-body">
			 	<div class="form-group">
			 		<div class="form-group">
					  <label for="hue-demo">Hue</label>
					  <input type="text" id="hue-demo" class="form-control demo"  name="tcs_general_color" data-control="hue" value="<?php echo $general['tcs_general_color']; ?>">
				  </div>

				  
				</div>

				
			 </div>
		</div>
		<div class="card col-md-12">
			 <div class="card-header">Meta settings</div>
			 <div class="card-body">
			 	<div class="form-group">
				   <label>Meta Title</label> <input type="text" name="tcs_meta_title" value="<?php echo $general['tcs_meta_title']; ?>">
				</div>

				<div class="form-group">
				   <label>Meta Keywords</label> <input type="text" name="tcs_meta_keywords" value="<?php echo $general['tcs_meta_keywords']; ?>">
				</div>

				<div class="form-group">
				   <label>Meta Description</label> <input type="text" name="tcs_meta_description" value="<?php echo $general['tcs_meta_description']; ?>">
				</div>
			 </div>
		</div>

		<div class="card col-md-12">
			<div class="card-header">Custom CSS</div>
			 <div class="card-body">
			 	<div class="form-group">
			 		<div class="form-group">
					   <label for="hue-demo">Custom Code</label>
						<textarea name="tcs_custom_css" style="width: 500px;height: 150px;"><?php echo $general['tcs_custom_css']; ?></textarea>
				  </div>
		
				  
				</div>

				
			 </div>
		</div>
		
	</div>
	

	<?php
}


function tcs_timout_settings()
{
	
	$time = tcs_argument_val($_GET['tab']);	
	
	?>
	

  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
   
   	$('#timepicker').timepicker({ timeFormat: 'HH:mm ',startTime: '00:00',});
  } );
  
  </script>
	<div class="card col-md-12">
			<div class="card-header">Date of launch</div>
			 <div class="card-body">
			 	<div class="form-group">
			 		<div class="form-group">
					   <label for="hue-demo">Date</label>

						<input name="tcs_lanuch_date"  id="datepicker" value="<?php echo $time['tcs_lanuch_date']; ?>">
						<input name="tcs_lanuch_time"  id="timepicker" value="<?php echo $time['tcs_lanuch_time']; ?>">
						
				  </div>
		
				  
				</div>

				
			 </div>
		</div>


	<?php
}

function tcs_content_settings()
{
	$data = tcs_argument_val($_GET['tab']);	
	$image = wp_get_attachment_url( $data['tcs_logo'] );
	
	?>
<img id="tcs_img_url" src="<?php echo $image; ?>" width="200px" height="auto" >
<input type="submit"  name="button" id="upload_image_button" class="button" value="Add Logo"/>
<input type="hidden" name="tcs_logo" id="tcs_logo" value="">
	<div class="card col-md-12">
		<div class="card-header">Title</div>
		 <div class="card-body">
		 	<div class="form-group">
		 		<div class="form-group">
				    <label >Line 1</label>
					<input name="tcs_title_1" type="text" value="<?php echo $data['tcs_title_1']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Line 2</label>
					<input name="tcs_title_2" type="text" value="<?php echo $data['tcs_title_2']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Line 3</label>
					<input name="tcs_title_3" type="text" value="<?php echo $data['tcs_title_3']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Tagline</label>
					<input name="tcs_tagline" type="text" value="<?php echo $data['tcs_tagline']; ?>">
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
					<input name="tcs_copyright" type="text" value="<?php echo $data['tcs_copyright']; ?>">
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
					<input name="tcs_contact_title" type="text" value="<?php echo $data['tcs_contact_title']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Name Field</label>
					<input name="tcs_contact_name" type="text" value="<?php echo $data['tcs_contact_name']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Email Field</label>
					<input name="tcs_contact_email" type="text" value="<?php echo $data['tcs_contact_email']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Message Field</label>
					<input name="tcs_contact_message" type="text" value="<?php echo $data['tcs_contact_message']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Send Button</label>
					<input name="tcs_contact_submit" type="text" value="<?php echo $data['tcs_contact_submit']; ?>">
			 	</div>
			 	<label class="badge badge-warning">Admin Email</label>
			 	<div class="form-group">
				    <label >Admin Email</label>
					<input name="tcs_admin_email" type="text" value="<?php echo $data['tcs_admin_email']; ?>">
			 	</div>
			</div>		
		</div>
	</div>

	<?php
}


function tcs_background_settings()
{
	$data = tcs_argument_val($_GET['tab']);	
	
	?>
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
				  
				   <input type="submit" class="button" id="upload_image_button" value="Add Image">
					<input type="hidden" id="previous_images" value="<?php 
				  foreach (unserialize($data['tcs_img_arr']) as $value) {
				  	echo $value.',';
				  }
				  ?>" >
					<div>
						<ul id="gallery_display">
							<?php 
							if (is_array(unserialize($data['tcs_img_arr']))) {
							 	foreach (unserialize($data['tcs_img_arr']) as $value) {
							 		$image = wp_get_attachment_url($value);
							 		?>

							 		<li><img width="200px" height="auto"  id="'+value.id+'" src="<?php echo $image; ?>"><input name="tcs_img_arr[]" type="hidden" value="<?php echo $value; ?>"></li>
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
				  
				   <input type="text" class="" name="tcs_bk_type" value="">
					
			  </div>
			</div>		
		</div>
	</div>
	<?php
}

function tcs_subscribe_settings()
{
		$data = tcs_argument_val($_GET['tab']);	

	?>
	<div class="card col-md-12">
		<div class="card-header">Subscribe Form</div>
		 <div class="card-body">
		 	<div class="form-group">
		 		<div class="form-group">
				    <label >Subscribe Form Title</label>
					<input name="tcs_subscribe_title" type="text" value="<?php echo $data['tcs_subscribe_title']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Email Field</label>
					<input name="tcs_subscribe_label" type="text" value="<?php echo $data['tcs_subscribe_label']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Button Text</label>
					<input name="tcs_subscribe_button" type="text" value="<?php echo $data['tcs_subscribe_button']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Subscribe Message</label>
					<input name="tcs_subscribe_message" type="text" value="<?php echo $data['tcs_subscribe_message']; ?>">
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
					
					<select name="tcs_subscribe_type">
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


function tcs_security_settings()
{
	$data = tcs_argument_val($_GET['tab']);	
	$roles_allowed = unserialize($data['tcs_roles']);
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
						<input name="tcs_roles[]" type="checkbox" value="<?php echo $key; ?>" <?php echo (in_array($key, $roles_allowed)) ? 'checked' : ''; ?>>
				 	</div>
					<?php
					}
					?>
				</div>		
			</div>
		</div>
	<?php
	
}



function tcs_social_settings()
{
	$data = tcs_argument_val($_GET['tab']);	
	?>
	<div class="card col-md-12">
		<div class="card-header">Social Media Links</div>
		 <div class="card-body">
		 	<div class="form-group">
		 		<div class="form-group">
				    <label >Text before Links</label>
					<input name="tcs_smb_text" type="text" value="<?php echo $data['tcs_smb_text']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Facebook</label>
					<input name="tcs_facebook" type="text" value="<?php echo $data['tcs_facebook']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Twitter</label>
					<input name="tcs_twitter" type="text" value="<?php echo $data['tcs_twitter']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Google plus</label>
					<input name="tcs_googleplus" type="text" value="<?php echo $data['tcs_googleplus']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Linkdin</label>
					<input name="tcs_linkedin" type="text" value="<?php echo $data['tcs_linkedin']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Instagram</label>
					<input name="tcs_instagram" type="text" value="<?php echo $data['tcs_instagram']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Pinterest</label>
					<input name="tcs_pinterest" type="text" value="<?php echo $data['tcs_pinterest']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Youtube</label>
					<input name="tcs_youtube" type="text" value="<?php echo $data['tcs_youtube']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >VK</label>
					<input name="tcs_vk" type="text" value="<?php echo $data['tcs_vk']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Vimeo</label>
					<input name="tcs_vimeotcs_dribbble" type="text" value="<?php echo $data['tcs_vimeotcs_dribbble']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Dribbble</label>
					<input name="tcs_dribbble" type="text" value="<?php echo $data['tcs_dribbble']; ?>">
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
					<input name="tcs_consumer_key" type="text" value="<?php echo $data['tcs_consumer_key']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Consumer Secret (API Secret)</label>
					<input name="tcs_consumer_secret" type="text" value="<?php echo $data['tcs_consumer_secret']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Access Token</label>
					<input name="tcs_access_token" type="text" value="<?php echo $data['tcs_access_token']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Access Token Secret</label>
					<input name="tcs_access_token_secret" type="text" value="<?php echo $data['tcs_access_token_secret']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Twitter Username</label>
					<input name="tcs_twitter_username" type="text" value="<?php echo $data['tcs_twitter_username']; ?>">
			 	</div>
			 	<div class="form-group">
				    <label >Twitter tweets</label>
					<input name="tcs_tweets_count" type="number" value="<?php echo $data['tcs_tweets_count']; ?>">
			 	</div>
			</div>		
		</div>
	</div>


	<?php
}

function tcs_help_settings()
{
	echo "help settings";
}
