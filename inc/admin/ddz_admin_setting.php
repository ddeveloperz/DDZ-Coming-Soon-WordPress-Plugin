<?php

function ddz_tabs_arr()
{
	$tabs = array(
		'general_settings' => 'General Settings' , 
		'ddz_time_out' => 'Time Out' ,
		'ddz_content' => 'Content' ,
		'ddz_background' => 'Background' ,
		'ddz_subscribe' => 'Subscribe' ,
		'ddz_security' => 'Security' ,
		'ddz_social' => 'Social' ,
		'ddz_help' => 'Help' 
	);
	return $tabs;
}


function ddz_return_arr( $field ){

  switch($field){
        case 'ddz_content':
            $variables = array(
                                'ddz_logo' => DDZ_DIR_PATH . 'files/images/default-logo.png',
                                'ddz_logo_height' => 130,
                                'ddz_home_label' => 'Home',
                                'ddz_title_1' => 'Thonus',
                                'ddz_title_2' => 'Coming',
                                'ddz_title_3' => 'Sooon Plugin',
                                'ddz_tagline' => 'Best Plugin in Market',

                                

                                //copyright text
                                'ddz_copyright' => 'Copyright © 2015 - Thonus',

                                //about page
                                'ddz_about_page_enable' => 1,
                                'ddz_about_label' => 'Our Company',
                                'ddz_about_title' => 'A quick overview',
                                'ddz_about_text' => '<div>Donec luctus nisi dui, id rhoncus odio blandit vitae. Sed laoreet lectus elit, eu rutrum velit dignissim in. Curabitur ipsum ipsum, tincidunt vewsel metus nec, ultricies molestie purus neque vel.<span style="line-height: 1.714285714; font-size: 1rem;">Pellentesque </span><a style="line-height: 1.714285714; font-size: 1rem;" href="file:///C:/Users/Developer4/Desktop/Transient/MAIN/HTML/Static%20-%20Copy/index.html#">semper quam</a><span style="line-height: 1.714285714; font-size: 1rem;"> in tortor semper, in faucibus odio tempor. Proin aliquam arcu urna. Nullam tempus ante ut nunc dapibus, a blandit ipsum interdum.</span></div>',
                                    //About Icons
                                'fa-camera-ddz-text' => 'Photography',
                                'fa-camera-ddz-enable' => 1,
                                'fa-bolt-ddz-text' => 'Digital Media',
                                'fa-bolt-ddz-enable' => 1,
                                'fa-users-ddz-text' => 'Marketing',
                                'fa-users-ddz-enable' => 1,
                                'fa-circle-o-ddz-text' => 'Signage',
                                'fa-circle-o-ddz-enable' => 1,
                                'fa-inbox-ddz-text' => 'Packaging',
                                'fa-inbox-ddz-enable' => 1,
                                'fa-desktop-ddz-text' => 'Web',
                                'fa-desktop-ddz-enable' => 1,

                                //contact page
                                'ddz_contact_page_enable' => 1,
                                'ddz_contact_label' => 'Contact',
                                'ddz_contact_title' => 'Contact Us',
                                'ddz_contact_name' => 'Name',
                                'ddz_contact_email' => 'Email Address',
                                'ddz_contact_message' => 'Message',
                                'ddz_contact_submit' => 'Send',
                                'ddz_admin_email' => 'your@email.com',
                                'ddz_contact_s_msg' => 'Your message has been sent.',

                                //more info
                                'ddz_enable_more_info' => 1,
								'ddz_more_info_text' => 'Find out more',
								'ddz_title_more_info' => 'More info',
                                'ddz_more_info' => 'Praesent faucibus iaculis nulla, vel placerat dui commodo in. Suspendisse potenti. Fusce dignissim id diam ut imperdiet. Duis venenatis turpis nibh. Mauris egestas turpis in elit vestibulum, nec pretium tortor scelerisque. Mauris non mauris et leo tempor sodales.<h4>Extra content</h4>Morbi quis erat bibendum quam iaculis faucibus. Quisque ornare varius nunc. Nunc interdum nisi non ante bibendum facilisis.Vestibulum ullamcorper, tortor dictum <a href="file:///C:/Users/Developer4/Desktop/Transient/MAIN/HTML/Static%20-%20Copy/index.html#">semper adipiscing</a>, dui mauris vestibulum turpis, at dignissim lectus erat eu nibh. Aenean sit amet laoreet mi.Praesent faucibus iaculis nulla, vel placerat dui commodo in. Suspendisse potenti. Fusce dignissim id diam ut imperdiet. Duis venenatis turpis nibh. Mauris egestas turpis in elit vestibulum, nec pretium tortor scelerisque. Mauris non mauris et leo tempor sodales.',
                              );
        break;

        case 'ddz_social' :
        	$variables = array(
        						//social media
                                'ddz_smb_text' => 'or find us online',
                                'ddz_facebook' => '#',
                                'ddz_twitter' => '#',
                                'ddz_googleplus' => '#',
                                'ddz_linkedin' => '#',
                                'ddz_instagram' => '#',
                                'ddz_pinterest' => '',
                                'ddz_youtube' => '',
                                'ddz_vk' => '',
                                'ddz_vimeo' => '',
                                'ddz_dribbble' => '',
                                // twitter api settings
                                'ddz_consumer_key' => '',
                                'ddz_consumer_secret' => '',
                                'ddz_access_token' => '',
                                'ddz_access_token_secret' => '',
                                'ddz_twitter_username' => '',
                                'ddz_tweets_count' => 5,
        					);
        break;
        case 'ddz_background':
             $variables = array(
                                'ddz_bk_type' => 'solid_color',
                                'ddz_background_img' => '',
                                'ddz_img_arr' => '',
                                'ddz_img_arr_effect' => '',
                                'ddz_color_bk' => '#666666',
                                'ddz_slide_effect' => 0,
                                'ddz_bk_pn' => 'pattern_1.png',
                                'ddz_background_d' => '0.4',
                                'ddz_video_bk' => '',
                                'ddz_sound_on' => 1,
								                'ddz_video_mobile' => 0,
                                'ddz_parallax_image' => '',
                             );
        break;
        case 'general_settings':
              $variables = array(
                                  'ddz_enable' => 0,
                                  'ddz_meta_title' => 'Indeed Coming Soon Plugin',
                                  'ddz_meta_keywords' => '',
                                  'ddz_meta_description' => 'Indeed Coming Soon Plugin',
                                  'ddz_favicon' => '',
								                  'ddz_custom_css' => '',
                                  'ddz_general_color' => '',
                                  'ddz_change_page_effect' => 'fadeIn',
                                  'ddz_layout' => 1,
                                );
        break;
        case 'ddz_time_out':
              $date = date(time() + (7 * 24 * 60 * 60));
              $variables = array(
                                  'ddz_count_down_type' => 'digits',
                                  'ddz_lanuch_time' => '00:00' ,
                                  'ddz_lanuch_date' => date('d-m-y', $date),
				              		//time
				              		'ddz_days_word' => 'Days',
				              		'ddz_day_word' => 'day',
				              		'ddz_hours_word' => 'Hours',
				              		'ddz_hour_word' => 'hour',
				              		'ddz_minutes_word' => 'Minutes',
				              		'ddz_minute_word' => 'minute',
				              		'ddz_seconds_word' => 'Seconds',
				              		'ddz_second_word' => 'second',
				              		'ddz_auto_turnoff' => 0,
                               );
        break;
        case 'ddz_subscribe':
              $variables = array(
                                  'ddz_enable_subscribe' => 1,
								                  'ddz_subscribe_title' => 'Subscribe for updates',
                                  'ddz_subscribe_label' => 'Email address',
                                  'ddz_subscribe_button' => 'Go',
                                  'ddz_subscribe_message' => 'You have been subscribed.',
                                  'ddz_subscribe_type' => 'email_list',
                                  //mailchimp
                                  'ddz_mailchimp_api' => '',
                                  'ddz_mailchimp_id_list' => '',
                                  //getresponse
                                  'ddz_getResponse_api_key' => '',
                                  'ddz_getResponse_token' => '',
                                  //campaign monitor
                                  'ddz_cm_list_id' => '',
                                  'ddz_cm_api_key' => '',
                                  //icontact
                                  'ddz_icontact_user' => '',
                                  'ddz_icontact_pass' => '',
                                  'ddz_icontact_appid' => '',
                                  'ddz_icontact_list_id' => '',
                                  //constant contact
                                  'ddz_cc_user' => '',
                                  'ddz_cc_pass' => '',
								                  'ddz_cc_list' => '',
                                  //wysija
                                  'ddz_wysija_list_id' => '',
                                  //mymail
                                  'ddz_mymail_list_id' => '',
                                  //madmimi
                                  'ddz_madmimi_username' => '',
                                  'ddz_madmimi_apikey' => '',
                                  'ddz_madmimi_listname' => '',
                                  //aweber
                                  'ddz_aweber_auth_code' => '',
                                  'ddz_aweber_list' => '',
                                );
        	break;
        case 'ddz_security':
        	$variables = array(
        						'ddz_roles' => 'administrator',
        						
        					);
        	break;
  }
    return $variables;
}

function ddz_argument_val( $field ){
    $variables = ddz_return_arr( $field );
    foreach($variables as $key => $value){
        if( get_option( $key )===FALSE ) add_option($key, $value);
        else $variables[$key] = get_option($key);
    }
    return $variables;
}

/*
// function for saving values in optios table
*/
function ddz_arugment_update( $field ){
    $variables = ddz_return_arr( $field );
    foreach($variables as $key => $value){
        if(get_option($key)===FALSE){
            if(!isset($_REQUEST[$key])){
                add_option($key, '');
                //return;
            }elseif(is_array($_REQUEST[$key])){
                add_option($key, serialize($_REQUEST[$key]));
            }else { add_option($key, $_REQUEST[$key]);}
        }else{
            if(!isset($_REQUEST[$key])){
                update_option($key, '');
                //return;
            }elseif(is_array($_REQUEST[$key])){
                update_option($key, serialize($_REQUEST[$key]));
            }else{
                update_option($key, $_REQUEST[$key]);
            }
        }
    }

}