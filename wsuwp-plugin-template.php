<?php
/**
 * Plugin Name: [Plugin Display Name] 
 * Plugin URI: https://github.com/wsuwebteam/repo-name-here
 * Description: Describe the plugin
 * Version: 0.0.1
 * Requires PHP: 7.3
 * Author: Washington State University, Individual authors, ...
 * Author URI: https://web.wsu.edu/
 * Text Domain: wsuwp-plugin-template
 */


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

// Initiate plugin
require_once __DIR__ . '/includes/plugin.php';
