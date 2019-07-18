<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              github.com/abuzer
 * @since             1.0.0
 * @package           Super_login_form
 *
 * @wordpress-plugin
 * Plugin Name:       Super Login Form
 * Plugin URI:        http://superloginform.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Abuzer
 * Author URI:        github.com/abuzer
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       super_login_form
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'SUPER_LOGIN_FORM_VERSION', '1.0.0' );

function get_super_login_form_plugin_url(){
	echo plugin_dir_url( __FILE__ ).'public/';
}

require plugin_dir_path( __FILE__ ) . '/class-login-form-template.php';


function super_login_ajax_login_init(){
    // Enable the user with no privileges to run ajax_login() in AJAX
    add_action( 'wp_ajax_nopriv_superloginajaxlogin', 'super_login_form_ajax_login' );
}

// Execute the action only if the user isn't logged in
if (!get_current_user_id()) {
    add_action('init', 'super_login_ajax_login_init');
}


function super_login_form_ajax_login(){

    // First check the nonce, if it fails the function will break
    check_ajax_referer( 'ajax-login-nonce', 'security' );

    // Nonce is checked, get the POST data and sign user on
    $info = array();
    $info['user_login'] = $_POST['log'];
    $info['user_password'] = $_POST['pwd'];
    $info['remember'] = true;


    $user_signon = wp_signon( $info, false );
    if ( is_wp_error($user_signon) ){
        echo json_encode(array('loggedin'=>false, 'message'=>__('Wrong username or password.')));
    } else {
        echo json_encode(array('loggedin'=>true, 'message'=>__('Login successful, redirecting...')));
    }

    die();
}



add_action('init','super_login_possibly_redirect');

function super_login_possibly_redirect(){
 global $pagenow;
 if( 'wp-login.php' == $pagenow && !isset( $_GET['action']) ) {
    wp_redirect('login');
    exit();
 }
}