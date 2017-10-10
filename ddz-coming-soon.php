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






