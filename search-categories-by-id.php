<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.helix.hr/
 * @since             1.0.0
 * @package           Search_Categories_By_Id
 *
 * @wordpress-plugin
 * Plugin Name:       Search Categories by ID
 * Plugin URI:        https://www.helix.hr/
 * Description:       Pretražuje kategorije prema ID broju.
 * Version:           1.0.0
 * Author:            tburic
 * Author URI:        https://www.helix.hr/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       search-categories-by-id
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
define( 'SEARCH_CATEGORIES', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-search-categories-by-id-activator.php
 */
function activate_search_categories_by_id() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-search-categories-by-id-activator.php';
	Search_Categories_By_Id_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-search-categories-by-id-deactivator.php
 */
function deactivate_search_categories_by_id() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-search-categories-by-id-deactivator.php';
	Search_Categories_By_Id_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_search_categories_by_id' );
register_deactivation_hook( __FILE__, 'deactivate_search_categories_by_id' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-search-categories-by-id.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_search_categories_by_id() {

	$plugin = new Search_Categories_By_Id();
	$plugin->run();

}
run_search_categories_by_id();
