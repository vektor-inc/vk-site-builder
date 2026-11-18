<?php
/**
 * 更新チェッカーの登録のテスト
 *
 * @package VK_Site_Builder
 */

/**
 * 更新チェッカーの登録を確かめる
 */
class VKSB_Update_Checker_Test extends WP_UnitTestCase {

	/**
	 * 更新情報の問い合わせ先の URL を確かめる
	 *
	 * @return void
	 */
	public function test_vksb_get_update_metadata_url() {
		$test_cases = array(
			array(
				'test_condition_name' => 'ライセンスサーバーの get_metadata に、スラッグ vk-site-builder で問い合わせる',
				'expected'            => 'https://license.vektor-inc.co.jp/check/?action=get_metadata&slug=vk-site-builder',
			),
		);

		foreach ( $test_cases as $case ) {
			$this->assertSame( $case['expected'], vksb_get_update_metadata_url(), $case['test_condition_name'] );
		}
	}

	/**
	 * 更新チェッカーを登録した結果を確かめる
	 *
	 * @return void
	 */
	public function test_vksb_register_update_checker() {
		$plugin_file = dirname( __DIR__ ) . '/vk-site-builder.php';

		$test_cases = array(
			array(
				'test_condition_name' => '既定のクラスで登録した場合 => スラッグとプラグインのファイルと問い合わせ先が設定される',
				'conditions'          => array(
					'factory_class' => null,
				),
				'expected'            => array(
					'slug'        => 'vk-site-builder',
					'pluginFile'  => 'vk-site-builder/vk-site-builder.php',
					'metadataUrl' => 'https://license.vektor-inc.co.jp/check/?action=get_metadata&slug=vk-site-builder',
				),
			),
			array(
				'test_condition_name' => 'plugin-update-checker v5 のクラスを明示した場合 => 既定と同じ内容で登録される',
				'conditions'          => array(
					'factory_class' => 'YahnisElsts\PluginUpdateChecker\v5\PucFactory',
				),
				'expected'            => array(
					'slug'        => 'vk-site-builder',
					'pluginFile'  => 'vk-site-builder/vk-site-builder.php',
					'metadataUrl' => 'https://license.vektor-inc.co.jp/check/?action=get_metadata&slug=vk-site-builder',
				),
			),
			array(
				'test_condition_name' => 'ライブラリのクラスが無い場合（vendor/ 無しで配信された場合） => 登録せず null',
				'conditions'          => array(
					'factory_class' => 'VKSB_Not_Exists_Factory',
				),
				'expected'            => null,
			),
		);

		foreach ( $test_cases as $case ) {
			// 更新チェッカーを登録する.
			if ( null === $case['conditions']['factory_class'] ) {
				$checker = vksb_register_update_checker( $plugin_file );
			} else {
				$checker = vksb_register_update_checker( $plugin_file, $case['conditions']['factory_class'] );
			}

			// 登録した内容を、比べられる形に取り出す.
			$actual = null;
			if ( is_object( $checker ) ) {
				$actual = array(
					'slug'        => $checker->slug,
					'pluginFile'  => $checker->pluginFile, // phpcs:ignore WordPress.NamingConventions.ValidVariableName.UsedPropertyNotSnakeCase
					'metadataUrl' => $checker->metadataUrl, // phpcs:ignore WordPress.NamingConventions.ValidVariableName.UsedPropertyNotSnakeCase
				);
			}

			$this->assertSame( $case['expected'], $actual, $case['test_condition_name'] );
		}
	}
}
