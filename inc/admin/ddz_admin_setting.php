<?php

function tcs_tabs_arr()
{
	$tabs = array(
		'general_settings' => 'General Settings' , 
		'tcs_time_out' => 'Time Out' ,
		'tcs_content' => 'Content' ,
		'tcs_background' => 'Background' ,
		'tcs_subscribe' => 'Subscribe' ,
		'tcs_security' => 'Security' ,
		'tcs_social' => 'Social' ,
		'tcs_help' => 'Help' 
	);
	return $tabs;
}


function tcs_return_arr( $field ){

  switch($field){
        case 'tcs_content':
            $variables = array(
                                'tcs_logo' => DDZ_DIR_PATH . 'files/images/default-logo.png',
                                'tcs_logo_height' => 130,
                                'tcs_home_label' => 'Home',
                                'tcs_title_1' => 'Thonus',
                                'tcs_title_2' => 'Coming',
                                'tcs_title_3' => 'Sooon Plugin',
                                'tcs_tagline' => 'Best Plugin in Market',

                                

                                //copyright text
                                'tcs_copyright' => 'Copyright © 2015 - Thonus',

                                //about page
                                'tcs_about_page_enable' => 1,
                                'tcs_about_label' => 'Our Company',
                                'tcs_about_title' => 'A quick overview',
                                'tcs_about_text' => '<div>Donec luctus nisi dui, id rhoncus odio blandit vitae. Sed laoreet lectus elit, eu rutrum velit dignissim in. Curabitur ipsum ipsum, tincidunt vewsel metus nec, ultricies molestie purus neque vel.<span style="line-height: 1.714285714; font-size: 1rem;">Pellentesque </span><a style="line-height: 1.714285714; font-size: 1rem;" href="file:///C:/Users/Developer4/Desktop/Transient/MAIN/HTML/Static%20-%20Copy/index.html#">semper quam</a><span style="line-height: 1.714285714; font-size: 1rem;"> in tortor semper, in faucibus odio tempor. Proin aliquam arcu urna. Nullam tempus ante ut nunc dapibus, a blandit ipsum interdum.</span></div>',
                                    //About Icons
                                'fa-camera-tcs-text' => 'Photography',
                                'fa-camera-tcs-enable' => 1,
                                'fa-bolt-tcs-text' => 'Digital Media',
                                'fa-bolt-tcs-enable' => 1,
                                'fa-users-tcs-text' => 'Marketing',
                                'fa-users-tcs-enable' => 1,
                                'fa-circle-o-tcs-text' => 'Signage',
                                'fa-circle-o-tcs-enable' => 1,
                                'fa-inbox-tcs-text' => 'Packaging',
                                'fa-inbox-tcs-enable' => 1,
                                'fa-desktop-tcs-text' => 'Web',
                                'fa-desktop-tcs-enable' => 1,

                                //contact page
                                'tcs_contact_page_enable' => 1,
                                'tcs_contact_label' => 'Contact',
                                'tcs_contact_title' => 'Contact Us',
                                'tcs_contact_name' => 'Name',
                                'tcs_contact_email' => 'Email Address',
                                'tcs_contact_message' => 'Message',
                                'tcs_contact_submit' => 'Send',
                                'tcs_admin_email' => 'your@email.com',
                                'tcs_contact_s_msg' => 'Your message has been sent.',

                                //more info
                                'tcs_enable_more_info' => 1,
								'tcs_more_info_text' => 'Find out more',
								'tcs_title_more_info' => 'More info',
                                'tcs_more_info' => 'Praesent faucibus iaculis nulla, vel placerat dui commodo in. Suspendisse potenti. Fusce dignissim id diam ut imperdiet. Duis venenatis turpis nibh. Mauris egestas turpis in elit vestibulum, nec pretium tortor scelerisque. Mauris non mauris et leo tempor sodales.<h4>Extra content</h4>Morbi quis erat bibendum quam iaculis faucibus. Quisque ornare varius nunc. Nunc interdum nisi non ante bibendum facilisis.Vestibulum ullamcorper, tortor dictum <a href="file:///C:/Users/Developer4/Desktop/Transient/MAIN/HTML/Static%20-%20Copy/index.html#">semper adipiscing</a>, dui mauris vestibulum turpis, at dignissim lectus erat eu nibh. Aenean sit amet laoreet mi.Praesent faucibus iaculis nulla, vel placerat dui commodo in. Suspendisse potenti. Fusce dignissim id diam ut imperdiet. Duis venenatis turpis nibh. Mauris egestas turpis in elit vestibulum, nec pretium tortor scelerisque. Mauris non mauris et leo tempor sodales.',
                              );
        break;

        case 'tcs_social' :
        	$variables = array(
        						//social media
                                'tcs_smb_text' => 'or find us online',
                                'tcs_facebook' => '#',
                                'tcs_twitter' => '#',
                                'tcs_googleplus' => '#',
                                'tcs_linkedin' => '#',
                                'tcs_instagram' => '#',
                                'tcs_pinterest' => '',
                                'tcs_youtube' => '',
                                'tcs_vk' => '',
                                'tcs_vimeo' => '',
                                'tcs_dribbble' => '',
                                // twitter api settings
                                'tcs_consumer_key' => '',
                                'tcs_consumer_secret' => '',
                                'tcs_access_token' => '',
                                'tcs_access_token_secret' => '',
                                'tcs_twitter_username' => '',
                                'tcs_tweets_count' => 5,
        					);
        break;
        case 'tcs_background':
             $variables = array(
                                'tcs_bk_type' => 'solid_color',
                                'tcs_background_img' => '',
                                'tcs_img_arr' => '',
                                'tcs_img_arr_effect' => '',
                                'tcs_color_bk' => '#666666',
                                'tcs_slide_effect' => 0,
                                'tcs_bk_pn' => 'pattern_1.png',
                                'tcs_background_d' => '0.4',
                                'tcs_video_bk' => '',
                                'tcs_sound_on' => 1,
								                'tcs_video_mobile' => 0,
                                'tcs_parallax_image' => '',
                             );
        break;
        case 'general_settings':
              $variables = array(
                                  'tcs_enable' => 0,
                                  'tcs_meta_title' => 'Indeed Coming Soon Plugin',
                                  'tcs_meta_keywords' => '',
                                  'tcs_meta_description' => 'Indeed Coming Soon Plugin',
                                  'tcs_favicon' => '',
								  'tcs_custom_css' => '',
                                  'tcs_general_color' => '',
                                  'tcs_change_page_effect' => 'fadeIn',
                                  'tcs_layout' => 1,
                                );
        break;
        case 'tcs_time_out':
              $date = date(time() + (7 * 24 * 60 * 60));
              $variables = array(
                                  'tcs_count_down_type' => 'digits',
                                  'tcs_lanuch_time' => '00:00' ,
                                  'tcs_lanuch_date' => date('d-m-y', $date),
				              		//time
				              		'tcs_days_word' => 'Days',
				              		'tcs_day_word' => 'day',
				              		'tcs_hours_word' => 'Hours',
				              		'tcs_hour_word' => 'hour',
				              		'tcs_minutes_word' => 'Minutes',
				              		'tcs_minute_word' => 'minute',
				              		'tcs_seconds_word' => 'Seconds',
				              		'tcs_second_word' => 'second',
				              		'tcs_auto_turnoff' => 0,
                               );
        break;
        case 'tcs_subscribe':
              $variables = array(
                                  'tcs_enable_subscribe' => 1,
								  'tcs_subscribe_title' => 'Subscribe for updates',
                                  'tcs_subscribe_label' => 'Email address',
                                  'tcs_subscribe_button' => 'Go',
                                  'tcs_subscribe_message' => 'You have been subscribed.',
                                  'tcs_subscribe_type' => 'email_list',
                                  //mailchimp
                                  'tcs_mailchimp_api' => '',
                                  'tcs_mailchimp_id_list' => '',
                                  //getresponse
                                  'tcs_getResponse_api_key' => '',
                                  'tcs_getResponse_token' => '',
                                  //campaign monitor
                                  'tcs_cm_list_id' => '',
                                  'tcs_cm_api_key' => '',
                                  //icontact
                                  'tcs_icontact_user' => '',
                                  'tcs_icontact_pass' => '',
                                  'tcs_icontact_appid' => '',
                                  'tcs_icontact_list_id' => '',
                                  //constant contact
                                  'tcs_cc_user' => '',
                                  'tcs_cc_pass' => '',
								  'tcs_cc_list' => '',
                                  //wysija
                                  'tcs_wysija_list_id' => '',
                                  //mymail
                                  'tcs_mymail_list_id' => '',
                                  //madmimi
                                  'tcs_madmimi_username' => '',
                                  'tcs_madmimi_apikey' => '',
                                  'tcs_madmimi_listname' => '',
                                  //aweber
                                  'tcs_aweber_auth_code' => '',
                                  'tcs_aweber_list' => '',
                                );
        	break;
        case 'tcs_security':
        	$variables = array(
        						'tcs_roles' => 'administrator',
        						
        					);
        	break;
  }
    return $variables;
}

function tcs_argument_val( $field ){
    $variables = tcs_return_arr( $field );
    foreach($variables as $key => $value){
        if( get_option( $key )===FALSE ) add_option($key, $value);
        else $variables[$key] = get_option($key);
    }
    return $variables;
}

/*
// function for saving values in optios table
*/
function tcs_arugment_update( $field ){
    $variables = tcs_return_arr( $field );
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