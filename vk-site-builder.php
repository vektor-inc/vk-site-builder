<?php
/**
 * Plugin Name:       VK Site Builder
 * Plugin URI:        https://github.com/vektor-inc/vk-site-builder
 * Description:       VK Site Builder
 * Version:           0.0.0
 * Requires at least: 6.5
 * Requires PHP:      7.4
 * Author:            Vektor,Inc.
 * Author URI:        https://vektor-inc.co.jp
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       vk-site-builder
 *
 * @package VK_Site_Builder
 */

// 直接アクセスされた場合は処理しない.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'VKSB_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

require_once VKSB_PLUGIN_DIR . 'inc/patterns/register-patterns.php';
