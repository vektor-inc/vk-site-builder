<?php
/**
 * PHPUnit の起動処理
 *
 * @package VK_Site_Builder
 */

// Composer のライブラリを読み込む.
require_once dirname( __DIR__ ) . '/vendor/autoload.php';

// WordPress のテスト一式の場所を決める（wp-env の tests-cli では WP_TESTS_DIR が設定されている）.
$_tests_dir = getenv( 'WP_TESTS_DIR' );
if ( ! $_tests_dir ) {
	$_tests_dir = getenv( 'WP_PHPUNIT__DIR' );
}
if ( ! $_tests_dir ) {
	$_tests_dir = '/tmp/wordpress-tests-lib';
}

// tests_add_filter() を使えるようにする.
require_once $_tests_dir . '/includes/functions.php';

/**
 * テスト対象のプラグインを読み込む
 *
 * @return void
 */
function vksb_tests_load_plugin() {
	require dirname( __DIR__ ) . '/vk-site-builder.php';
}
tests_add_filter( 'muplugins_loaded', 'vksb_tests_load_plugin' );

// WordPress のテスト環境を起動する.
require $_tests_dir . '/includes/bootstrap.php';
