<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.helix.hr/
 * @since      1.0.0
 *
 * @package    Search_Categories_By_Id
 * @subpackage Search_Categories_By_Id/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Search_Categories_By_Id
 * @subpackage Search_Categories_By_Id/includes
 * @author     tburic <tomislav.buric@helix.hr>
 */
class Search_Categories_By_Id_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'search-categories-by-id',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
