<?php
/**
 * Plugin Name:       VK Site Builder
 * Plugin URI:        https://github.com/vektor-inc/vk-site-builder
 * Description:       サイト制作に使うブロックパターンをまとめたプラグインです。
 * Version:           0.2.0
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
define( 'VKSB_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// プラグインのバージョンをヘッダーの Version から読み取る.
$vksb_plugin_data = get_file_data( __FILE__, array( 'version' => 'Version' ) );
define( 'VKSB_VERSION', $vksb_plugin_data['version'] );

// Composer のライブラリを読み込む. vendor/ が無い状態で配信されても致命的なエラーにしないため、存在を確かめる.
$vksb_autoload_path = VKSB_PLUGIN_DIR . 'vendor/autoload.php';
if ( file_exists( $vksb_autoload_path ) ) {
	require_once $vksb_autoload_path;
}

require_once VKSB_PLUGIN_DIR . 'inc/patterns/register-patterns.php';
require_once VKSB_PLUGIN_DIR . 'inc/patterns/pattern-parts.php';
require_once VKSB_PLUGIN_DIR . 'inc/update-checker/register-update-checker.php';

// 管理画面の更新通知と自動更新で新しい版を受け取れるようにする.
vksb_register_update_checker( __FILE__ );
