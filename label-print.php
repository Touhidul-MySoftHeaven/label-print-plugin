<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://encoderit.net
 * @since             1.0.0
 * @package           Label_Print
 *
 * @wordpress-plugin
 * Plugin Name:       Label Print
 * Plugin URI:        https://encoderit.net
 * Description:       You have to use [show_links] to show links in any page or post. And you have to use [show_forms] in a page where the url will be "label-print-forms". In Products menu, you have to use 3 custom fields named Serial, Weightg, Quantity-in-carton and Ingredients.
 * Version:           3.0.0
 * Author:            Encoder IT Limited
 * Author URI:        https://encoderit.net
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       label-print
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
define( 'LABEL_PRINT_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-label-print-activator.php
 */
function activate_label_print() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-label-print-activator.php';
	Label_Print_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-label-print-deactivator.php
 */
function deactivate_label_print() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-label-print-deactivator.php';
	Label_Print_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_label_print' );
register_deactivation_hook( __FILE__, 'deactivate_label_print' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-label-print.php';
require plugin_dir_path( __FILE__ ) . 'woo_place_order/woo_functions.php';
/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_label_print() {

	$plugin = new Label_Print();
	$plugin->run();

}
run_label_print();