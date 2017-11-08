
    // Uploading files
    var file_frame;

   jQuery('#upload_image_button_gallery').live('click', function( event ){
    console.log('here');
    event.preventDefault();
    
    // If the media frame already exists, reopen it.
    if ( file_frame ) {
      file_frame.open();
      return;
    }


    // Create the media frame.
    file_frame = wp.media.frames.file_frame = wp.media({
      title: 'Select a images to upload (hold control key for multiple select)',
          button: {
            text: 'Add Images to Gallery',
          },
      multiple: true  // Set to true to allow multiple files to be selected
    });

       file_frame.on('open',function() {
      var selection = file_frame.state().get('selection');
      ids = jQuery('#previous_images').val().split(',');
      //console.log(ids);
        ids.forEach(function(id) {
      attachment = wp.media.attachment(id);
      attachment.fetch();
      selection.add( attachment ? [ attachment ] : [] );
    });
    });
    // When an image is selected, run a callback.
    file_frame.on( 'select', function() {
      // We set multiple to false so only get one image from the uploader
      attachment = file_frame.state().get('selection').toJSON();
      var img_gallery = [];
      var imageHTML = '';
      jQuery.each( attachment, function( key, value ) {
          imageHTML += '<li ><img width="200px" height="auto"  id="'+value.id+'" src="'+value.url+'"><input name="ddz_img_arr[]" type="hidden" value="'+value.id+'"></li>';
          img_gallery.push(value.id);
        });
      
      jQuery('#gallery_display').html(imageHTML);

      // Do something with attachment.id and/or attachment.url here
    });

    // Finally, open the modal
    file_frame.open();
  });


  // Uploading files
var file_frame;

  jQuery('#upload_image_button').live('click', function( event ){

    event.preventDefault();

    // If the media frame already exists, reopen it.
    if ( file_frame ) {
      file_frame.open();
      return;
    }

    // Create the media frame.
    file_frame = wp.media.frames.file_frame = wp.media({
      title: jQuery( this ).data( 'uploader_title' ),
      button: {
        text: jQuery( this ).data( 'uploader_button_text' ),
      },
      multiple: false  // Set to true to allow multiple files to be selected
    });

    // When an image is selected, run a callback.
    file_frame.on( 'select', function() {
      // We set multiple to false so only get one image from the uploader
      attachment = file_frame.state().get('selection').first().toJSON();
      
      jQuery('#ddz_logo').val(attachment.id);
      jQuery("#ddz_img_url").attr('src', attachment.url);

      
    });

    // Finally, open the modal
    file_frame.open();
  });






    // Uploading files
var file_frame;

  jQuery('#upload_image_button_1').live('click', function( event ){
    //console.log('here');
    event.preventDefault();

    // If the media frame already exists, reopen it.
    if ( file_frame ) {
      file_frame.open();
      return;
    }

    // Create the media frame.
    file_frame = wp.media.frames.file_frame = wp.media({
      title: jQuery( this ).data( 'uploader_title' ),
      button: {
        text: jQuery( this ).data( 'uploader_button_text' ),
      },
      multiple: false  // Set to true to allow multiple files to be selected
    });

    // When an image is selected, run a callback.
    file_frame.on( 'select', function() {
      // We set multiple to false so only get one image from the uploader
      attachment = file_frame.state().get('selection').first().toJSON();
      
      jQuery('#ddz_background_img_id').val(attachment.id);
      jQuery("#ddz_background_img").attr('src', attachment.url);

      
    });

    // Finally, open the modal
    file_frame.open();
  });