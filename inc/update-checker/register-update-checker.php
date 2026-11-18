<?php
/**
 * 更新チェッカーの登録
 *
 * VWS（ベクトルの製品配布用サーバー）から配信する新しい版を、管理画面の更新通知・自動更新で受け取れるようにする.
 *
 * @package VK_Site_Builder
 */

// 直接アクセスされた場合は処理しない.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * 更新チェッカーが使うプラグインのスラッグ
 */
const VKSB_UPDATE_CHECKER_SLUG = 'vk-site-builder';

/**
 * 更新チェッカーを作るクラス（plugin-update-checker の v5）
 */
const VKSB_UPDATE_CHECKER_FACTORY = 'YahnisElsts\PluginUpdateChecker\v5\PucFactory';

/**
 * 更新情報の問い合わせ先の URL を返す
 *
 * ライセンスキーは送らない（誰でも更新を受け取れる）.
 *
 * @return string ライセンスサーバーの更新情報の URL.
 */
function vksb_get_update_metadata_url() {
	return 'https://license.vektor-inc.co.jp/check/?action=get_metadata&slug=' . VKSB_UPDATE_CHECKER_SLUG;
}

/**
 * 更新チェッカーを登録する
 *
 * WP-Cron による自動更新でも動くよう、管理画面だけに限定しない.
 * vendor/ が無い状態で配信された場合は、更新チェッカーのクラスが無いため何もしない.
 *
 * @param string $plugin_file   プラグインのメインファイルの絶対パス.
 * @param string $factory_class 更新チェッカーを作るクラスの名前（テストで差し替えるための引数）.
 * @return object|null 登録した更新チェッカー。クラスが無く登録できない場合は null.
 */
function vksb_register_update_checker( $plugin_file, $factory_class = VKSB_UPDATE_CHECKER_FACTORY ) {
	// ライブラリが読み込まれていなければ登録しない.
	if ( ! class_exists( $factory_class ) ) {
		return null;
	}

	return $factory_class::buildUpdateChecker(
		vksb_get_update_metadata_url(),
		$plugin_file,
		VKSB_UPDATE_CHECKER_SLUG
	);
}
