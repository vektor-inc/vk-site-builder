<?php
/**
 * プラグインの読み込みのテスト
 *
 * @package VK_Site_Builder
 */

/**
 * プラグインのメインファイルを読み込んだ結果を確かめる
 */
class VKSB_Plugin_Load_Test extends WP_UnitTestCase {

	/**
	 * メインファイルの読み込みで、定数・関数・更新チェッカーが用意されるか確かめる
	 *
	 * @return void
	 */
	public function test_plugin_load() {
		// ヘッダーの Version を、テストの期待値として直接読み取る.
		$plugin_data = get_file_data( dirname( __DIR__ ) . '/vk-site-builder.php', array( 'version' => 'Version' ) );

		$test_cases = array(
			array(
				'test_condition_name' => 'バージョンの定数がヘッダーの Version と一致する',
				'actual'              => defined( 'VKSB_VERSION' ) ? VKSB_VERSION : null,
				'expected'            => $plugin_data['version'],
			),
			array(
				'test_condition_name' => 'パターンを登録する関数が読み込まれている',
				'actual'              => function_exists( 'vksb_register_patterns' ),
				'expected'            => true,
			),
			array(
				'test_condition_name' => '更新チェッカーを登録する関数が読み込まれている',
				'actual'              => function_exists( 'vksb_register_update_checker' ),
				'expected'            => true,
			),
			array(
				'test_condition_name' => '管理画面の外（is_admin() が false）でも、更新を定期的に確かめる処理が登録されている',
				'actual'              => ! is_admin() && false !== has_action( 'puc_cron_check_updates-vk-site-builder' ),
				'expected'            => true,
			),
			array(
				'test_condition_name' => '別のスラッグの更新確認は登録されていない',
				'actual'              => has_action( 'puc_cron_check_updates-vk-site-builder-unknown' ),
				'expected'            => false,
			),
		);

		foreach ( $test_cases as $case ) {
			$this->assertSame( $case['expected'], $case['actual'], $case['test_condition_name'] );
		}
	}
}
