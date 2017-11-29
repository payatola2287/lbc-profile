<?php
/**
 * Plugin Name: User Profile Add on
 * Description: Add-on for beaver builder to display member profile.
 * Version: 1.0.3
 * Author: Paolo Gallardo
 * Author URI: http://www.paologallardo.com
 */

 require 'plugin-update-checker/plugin-update-checker.php';
 $myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
 	'https://github.com/payatola2287/lbc-profile',
 	__FILE__,
 	'lbc-profile'
 );

define( 'LBCP_MODULES_DIR', plugin_dir_path( __FILE__ ) );
define( 'LBCP_MODULES_URL', plugins_url( '/', __FILE__ ) );


/*
*  Load the necessary module if Beaver Builder is enabled or installed
*  @hook init
*/
function lbcp_load_module_examples() {
    if ( class_exists( 'FLBuilder' ) ) {
        // Include your custom modules here.
        include 'modules/read/lbc-profile-read.php';
    }
}
add_action( 'init', 'lbcp_load_module_examples' );
