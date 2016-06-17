<?php
/**
 * The Lorax
 *
 * @package           The_Lorax
 * @license           GPL-2.0+
 * @link
 * @copyright
 *
 * Plugin Name:       The Lorax
 * Plugin URI:		  https://github.com/cdils/the-lorax
 * Description:		  Settings page for the Lorax reader
 * Version:           0.0.1
 * Author:            Carrie Dils, Raymond Johnson, Pat Ramsey
 * Author URI:
 * Text Domain:       the-lorax
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/cdils/lorax
 * GitHub Branch:     master
 */

/**
 * Exit if accessed directly
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'admin_menu', 'the_lorax_menu' );
/**
 * Build the menu and add it to WP Admin menu
 */
function the_lorax_menu() {
	add_menu_page(
		'The Lorax',
		'The Lorax Settings',
		'manage_options',
		'the-lorax',
		'the_lorax_settings',
		'dashicons-list-view',
		'25'
	);
}

/**
 * Create settings page in wp-admin
 *
 */
function the_lorax_settings() {
	?>
	<div class="wrap">
		<h2>Lorax Settings</h2>
		 <--! put your stuff here -->
	</div>
	<?php
}
