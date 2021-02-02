<?php

/*
Plugin Name: Theme Demo Importer
Plugin URI: https://wordpress.org/plugins/theme-demo-import/
Description: Quickly import theme live demo content, widgets and settings. This provides a basic layout to build your website and speed up the development process.
Version: 1.0.8
Author: Themely
Author URI: https://www.themely.com
License: GPL3
License URI: http://www.gnu.org/licenses/gpl.html
Text Domain: theme-demo-import
Tested up to: 5.4.2
Requires PHP: 5.6
*/

// Block direct access to the main plugin file.
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/**
 * Display admin error message if PHP version is older than 5.3.2.
 * Otherwise execute the main plugin class.
 */
if ( version_compare( phpversion(), '5.3.2', '<' ) ) {

	/**
	 * Display an admin error notice when PHP is older the version 5.3.2.
	 * Hook it to the 'admin_notices' action.
	 */
	function TDI_old_php_admin_error_notice() {
		$message = sprintf( esc_html__( 'The %2$sTheme Demo Importer%3$s plugin requires %2$sPHP 5.3.2+%3$s to run properly. Please contact your hosting company and ask them to update the PHP version of your site to at least PHP 5.3.2.%4$s Your current version of PHP: %2$s%1$s%3$s', 'theme-demo-import' ), phpversion(), '<strong>', '</strong>', '<br>' );

		printf( '<div class="notice notice-error"><p>%1$s</p></div>', wp_kses_post( $message ) );
	}
	add_action( 'admin_notices', 'TDI_old_php_admin_error_notice' );
}
else {

	// Current version of the plugin.
	define( 'TDI_VERSION', '1.0.4' );

	// Path/URL to root of this plugin, with trailing slash.
	define( 'TDI_PATH', plugin_dir_path( __FILE__ ) );
	define( 'TDI_URL', plugin_dir_url( __FILE__ ) );

	// Require main plugin file.
	require TDI_PATH . 'inc/class-tdi-main.php';

	// Instantiate the main plugin class *Singleton*.
	$Theme_Demo_Import = Theme_Demo_Import::getInstance();
}