<?php
/*
Plugin Name: Ddeveloperz Coming Soon
Plugin URI: http://www.ddeveloperz.com/
Description: The Ultimate Coming Soon Plugin Fully Responsive with multiple Background and CountDown Options.
Version: 0.1
Author: indeed
Author URI: http://www.ddeveloperz.com
*/

define(DDZ_DIR_PATH, plugin_dir_path(__FILE__));
define(DDZ_DIR_URL, plugin_dir_url(__FILE__ ));

global $options;
ob_start();
$options = get_option('ddz_plugin_setting' );

//admin scripts & style
add_action("admin_enqueue_scripts", 'ddz_be_head');
function ddz_be_head(){
    
        wp_enqueue_style ( 'ddz_jquery-ui.css', DDZ_DIR_URL . 'assets/css/jquery-ui.css' );
        wp_enqueue_style ( 'ddz_jquery.timepicker.css', DDZ_DIR_URL . 'assets/css/jquery.timepicker.css' );
        wp_enqueue_style ( 'bootstrap', DDZ_DIR_URL . 'assets/css/bootstrap.css' );
        wp_enqueue_style ( 'ddz_font-awesome.min.css', DDZ_DIR_URL . 'assets/css/font-awesome.min.css' );
        wp_enqueue_style ( 'ddz_colorpicker-css', DDZ_DIR_URL . 'assets/css/colorpicker.css' );

        wp_enqueue_script ( 'jquery' );
        wp_enqueue_script( 'jquery-ui-datepicker' );

    if( function_exists( 'wp_enqueue_media' ) ){
        wp_enqueue_media();
        wp_enqueue_script ( 'open_media_3_5', DDZ_DIR_URL . 'assets/js/open_media_3_5.js', array(), null );
    }else{
        wp_enqueue_style( 'thickbox' );
        wp_enqueue_script( 'thickbox' );
        wp_enqueue_script( 'media-upload' );
        wp_enqueue_script ( 'open_media_3_4', DDZ_DIR_URL . 'assets/js/open_media_3_4.js', array(), null );
    }
        wp_enqueue_script ( 'ddz_jquery.timepicker.min', DDZ_DIR_URL . 'assets/js/jquery.timepicker.min.js', array(), null );
        wp_enqueue_script ( 'ddz_colorpicker-js', DDZ_DIR_URL . 'assets/js/colorpicker.js', array(), null );
        
}

add_action("admin_footer", 'ddz_admin_footer_scripts');

function ddz_admin_footer_scripts()
{
    wp_enqueue_script ( 'ddz_ddz_admin', DDZ_DIR_URL . 'assets/js/ddz_admin.js', array(), null );
}


class ddz_plugin_options 
{
    public $options;
    public function __construct()
    {
      $this->options = get_option('ddz_plugin_setting' );
      $this->ddz_register_settings_and_fields();
      
    }

    public function ddz_theme_page()
    {
        
        add_menu_page('ddz Coming Soon','ddz Coming Soon','manage_options','ddz_plugin_option',array('ddz_plugin_options','ddz_display_options_page'));
    }


    function ddz_display_options_page()
    {
        wp_enqueue_style ( 'jquery.minicolors.css', DDZ_DIR_URL . 'assets/css/jquery.minicolors.css' );
        wp_enqueue_script ( 'jquery', DDZ_DIR_URL . 'assets/js/jquery-1.10.2.min.js', array(), null );
        

        include_once DDZ_DIR_PATH.'/inc/ddz_admin.php';
        ddz_admin_settings_display();
        
    }


    // register plugin settings 

    function ddz_register_settings_and_fields()
    {
        

    }
   



}


// add menu page
add_action('admin_menu',function(){
     ddz_plugin_options::ddz_theme_page();
} ,25);

// hooke into wordpress
add_action('admin_init',function(){
    new ddz_plugin_options();
} );




add_action('init', 'ddz_coming_soon');
function ddz_coming_soon(){
    /*
     * @param none
     * @return string
     */
    if (get_option('ddz_enable')!=1) return;
    
    /// its ajax -> out
    if (defined('DOING_AJAX') && DOING_AJAX) return;
    
    ///its cron -> out
    if (defined('DOING_CRON') && DOING_CRON) return;
    
    //admin can view anything
    if( is_admin() || current_user_can( 'manage_options' ) || in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php')) ) return;  

    if (get_option('ddz_auto_turnoff')){
        /// check time
        $expire_data = get_option('ddz_end_date');
        $expire_time = get_option('ddz_end_time');
        if ($expire_data && $expire_time){
            $timeout = strtotime($expire_data . ' ' .  $expire_time);
            if ($timeout && time()>$timeout){
                return;
            }           
        }
    }
    
    //check user role
    global $current_user;
    if (!empty($current_user) && !empty($current_user->ID)){
        $user = new WP_User( $current_user->ID );
        if ($user && !empty($user->roles) && !empty($user->roles[0])){
            $allowed_roles = get_option('ddz_wp_roles');
            if ($allowed_roles){
                $roles = explode(',', $allowed_roles);
                if ($roles && is_array($roles) && in_array($user->roles[0], $roles)){
                    return;
                }
            }
        }       
    }
    
    //$current_uri = ddz_site_protocol().$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    
    //check visible urls
    $data = get_option('ddz_visible_urls');
    if ($data && is_array($data)){
        if (in_array($current_uri, $data)){
            return;
        }   
    }
    //check url based on keyword
    $data = get_option('ddz_visible_urls_keywords');
    if ($data && is_array($data)){
        foreach ($data as $keyword){
            if (strpos($current_uri, $keyword)!==FALSE){
                return;
            }
        }
    }    
    
    // $meta_arr = array_merge(ddz_return_arr_val('content'), ddz_return_arr_val('background'));
    // $meta_arr = array_merge(ddz_return_arr_val('general_options'), $meta_arr);
    // $meta_arr = array_merge(ddz_return_arr_val('timeout'), $meta_arr);
    // $meta_arr = array_merge(ddz_return_arr_val('subscribe'), $meta_arr);

    
    // if($current_uri != get_option('siteurl').'/' && $current_uri != get_option('siteurl')){
    //     header( 'Location: ' . get_option('siteurl') );
    //     exit;
    // }
    require DDZ_DIR_PATH . 'front_view/index.php';
    // if(isset($meta_arr['ddz_layout'])){
    //     //LAYOUT 1
    //     if( $meta_arr['ddz_layout']==1 ) require DDZ_DIR_PATH . 'includes/ddz_view_1.php';
    //     //LAYOUT 2
    //     elseif( $meta_arr['ddz_layout']==2 ) require DDZ_DIR_PATH . 'includes/ddz_view_2.php';
    // }else{
    //     //DEFAULT
    //     require DDZ_DIR_PATH . 'includes/ddz_view.php';
    // }
    exit();
}






