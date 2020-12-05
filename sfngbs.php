<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://hbgl.dev
 * @since             1.0.0
 * @package           Sfngbs
 *
 * @wordpress-plugin
 * Plugin Name:       Storefront No Gutenberg Styles
 * Plugin URI:        https://github.com/hbgl/storefront-no-gutenberg-styles
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            hbgl
 * Author URI:        https://hbgl.dev
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sfngbs
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
define( 'SFNGBS_VERSION', '1.0.0' );

add_filter( 'storefront_gutenberg_block_editor_customizer_css', function () {
	return '';
}, 1 );