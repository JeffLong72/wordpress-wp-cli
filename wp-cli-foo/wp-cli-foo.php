<?php
/**
 Plugin Name: WP-CLI Foo
 Plugin URI:  
 Description: A WP-CLI addon command for testing purposes. Use <strong>$ wp foo [function-name]</strong> to call a specific function. You can also pass multiple key=value params to the function by using <strong>$ wp foo [function-name] --key=value  --key=value</strong>
 Version: 1.0.0
 Author:      Jeff Long
 Author URI:  
 License: GPLv2+
 */

/**
 * Load extension if WP CLI exists.
 */
function wp_cli_foo_load() {
	
	if ( defined( 'WP_CLI' ) && WP_CLI ) 
	{
		include dirname(__FILE__) . '/cli.php';
	}
}
add_action( 'plugins_loaded', 'wp_cli_foo_load' );
