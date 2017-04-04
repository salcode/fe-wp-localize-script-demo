<?php
/**
 * Plugin Name: Iron Code wp_localize_script Demo
 * Plugin URI: https://github.com/salcode/fe-wp-localize-script-demo/
 * Description: Demo using the WordPress function wp_localize_script.
 * Version: 0.1.0
 * Author: Sal Ferrarello
 * Author URI: http://salferrarello.com/
 *
 * @package fe-wp-localize-script-demo
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action( 'wp_enqueue_scripts', 'fe_wp_localize_script_demo_scripts' );

function fe_wp_localize_script_demo_scripts() {
	$js_src = plugin_dir_url( __FILE__ ) . '/js/display-php-value.js';
	wp_enqueue_script( 'fe-display-php-value', $js_src, [], '0.1.0' );

	$my_php_value = 'Hello Everybody';
	wp_localize_script( 'fe-display-php-value', 'feWPLocalizeScriptDemo', array( 'phpValueToDisplay' => $my_php_value ) );
}


