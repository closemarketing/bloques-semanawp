<?php
/**
 * Plugin Name: Bloques SemanaWP
 * Plugin URI:  bloques-semanawp
 * Description: Bloques para Gutenberg.
 * Version:     1.0
 * Author:      David Pérez
 * Author URI:  https://www.closemarketing.es
 * Text Domain: bloques-semanawp
 * Domain Path: /languages
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package     WordPress
 * @author      David Pérez
 * @copyright   2020 Closemarketing
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 *
 * Prefix:      bsmwp
 */

defined( 'ABSPATH' ) || die( 'No script kiddies please!' );

add_action( 'plugins_loaded', 'bsmwp_plugin_init' );
/**
 * Load localization files
 *
 * @return void
 */
function bsmwp_plugin_init() {
	load_plugin_textdomain( 'ejemplo-bloques-semanawp', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}
// Include files.
//require_once plugin_dir_path( __FILE__ ) . '//block.php';