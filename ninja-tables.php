<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://wpmanageninja.com
 * @since             1.0.0
 * @package           ninja-tables
 *
 * @wordpress-plugin
 * Plugin Name:       Ninja Tables
 * Plugin URI:        https://wpmanageninja.com/plugins/ninja-tables/
 * Description:       The Easiest & Fastest Responsive Table Plugin on WordPress. Multiple templates, drag-&-drop live table builder, multiple color scheme, and styles.
 * Version:           1.3.0
 * Author:            WPManageNinja
 * Author URI:        https://wpmanageninja.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ninja-tables
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'NINJA_TABLES_DIR_URL', plugin_dir_url( __FILE__ ) );
define( 'NINJA_TABLES_PUBLIC_DIR_URL', NINJA_TABLES_DIR_URL . 'public/' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/NinjaTablesActivator.php
 */
function activate_ninja_tables() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/NinjaTablesActivator.php';
	NinjaTablesActivator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/NinjaTablesDeActivator.php
 */
//function deactivate_ninja_tables() {
//	require_once plugin_dir_path( __FILE__ ) . 'includes/NinjaTablesDeActivator.php';
//	NinjaTablesDeActivator::deactivate();
//}

register_activation_hook( __FILE__, 'activate_ninja_tables' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/NinjaTableClass.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ninja_tables() {
	$plugin = new NinjaTableClass();
	$plugin->run();
}

// kick off
run_ninja_tables();
