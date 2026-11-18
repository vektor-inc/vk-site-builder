<?php
/**
 * パターンの登録のテスト
 *
 * @package VK_Site_Builder
 */

/**
 * パターンの登録を確かめる
 */
class VKSB_Register_Patterns_Test extends WP_UnitTestCase {

	/**
	 * テストで登録したパターンを消す
	 *
	 * @return void
	 */
	public function tear_down() {
		$registry = WP_Block_Patterns_Registry::get_instance();
		if ( $registry->is_registered( 'vk-site-builder-test/sample' ) ) {
			$registry->unregister( 'vk-site-builder-test/sample' );
		}
		parent::tear_down();
	}

	/**
	 * パターンファイルの先頭コメントから、登録に使う引数を作れるか確かめる
	 *
	 * @return void
	 */
	public function test_vksb_build_pattern_args() {
		$test_cases = array(
			array(
				'test_condition_name' => 'すべての項目がある場合 => カンマ区切りの項目は前後の空白を除いた配列になる',
				'conditions'          => array(
					'headers' => array(
						'title'       => 'Hero',
						'slug'        => 'vk-site-builder/hero',
						'description' => 'A hero.',
						'categories'  => 'cat-a, cat-b',
						'keywords'    => 'hero , top',
					),
				),
				'expected'            => array(
					'slug'        => 'vk-site-builder/hero',
					'title'       => 'Hero',
					'description' => 'A hero.',
					'categories'  => array( 'cat-a', 'cat-b' ),
					'keywords'    => array( 'hero', 'top' ),
				),
			),
			array(
				'test_condition_name' => 'Title と Slug だけの場合 => その 2 つだけの配列になる',
				'conditions'          => array(
					'headers' => array(
						'title'       => 'Hero',
						'slug'        => 'vk-site-builder/hero',
						'description' => '',
						'categories'  => '',
						'keywords'    => '',
					),
				),
				'expected'            => array(
					'slug'  => 'vk-site-builder/hero',
					'title' => 'Hero',
				),
			),
			array(
				'test_condition_name' => 'Title が無い場合 => 登録できないため null',
				'conditions'          => array(
					'headers' => array(
						'title' => '',
						'slug'  => 'vk-site-builder/hero',
					),
				),
				'expected'            => null,
			),
			array(
				'test_condition_name' => 'Slug が無い場合 => 登録できないため null',
				'conditions'          => array(
					'headers' => array(
						'title' => 'Hero',
						'slug'  => '',
					),
				),
				'expected'            => null,
			),
		);

		foreach ( $test_cases as $case ) {
			$actual = vksb_build_pattern_args( $case['conditions']['headers'] );
			$this->assertSame( $case['expected'], $actual, $case['test_condition_name'] );
		}
	}

	/**
	 * ディレクトリにあるパターンファイルを登録できるか確かめる
	 *
	 * @return void
	 */
	public function test_vksb_register_patterns_in_dir() {
		$test_cases = array(
			array(
				'test_condition_name' => 'Title の無いファイルを含むディレクトリの場合 => Title のあるパターンだけを登録する',
				'conditions'          => array(
					'patterns_dir' => __DIR__ . '/fixtures/patterns',
				),
				'expected'            => array( 'vk-site-builder-test/sample' ),
			),
			array(
				'test_condition_name' => '末尾にスラッシュを付けたディレクトリの場合 => 同じく登録する',
				'conditions'          => array(
					'patterns_dir' => __DIR__ . '/fixtures/patterns/',
				),
				'expected'            => array( 'vk-site-builder-test/sample' ),
			),
			array(
				'test_condition_name' => '存在しないディレクトリの場合 => 何も登録せず空の配列',
				'conditions'          => array(
					'patterns_dir' => __DIR__ . '/fixtures/not-exists',
				),
				'expected'            => array(),
			),
		);

		foreach ( $test_cases as $case ) {
			$actual = vksb_register_patterns_in_dir( $case['conditions']['patterns_dir'] );
			$this->assertSame( $case['expected'], $actual, $case['test_condition_name'] );
		}
	}

	/**
	 * プラグインの読み込み後、init でプラグインのパターンが登録されているか確かめる
	 *
	 * @return void
	 */
	public function test_vksb_register_patterns() {
		$registry = WP_Block_Patterns_Registry::get_instance();

		$test_cases = array(
			array(
				'test_condition_name' => 'patterns/ の CTA のパターンが登録されている',
				'slug'                => 'vk-site-builder/cta-dark-center',
				'expected'            => true,
			),
			array(
				'test_condition_name' => 'patterns/ のヒーローのパターンが登録されている',
				'slug'                => 'vk-site-builder/hero-cover-left',
				'expected'            => true,
			),
			array(
				'test_condition_name' => 'patterns/ に無いスラッグは登録されていない',
				'slug'                => 'vk-site-builder/not-exists',
				'expected'            => false,
			),
		);

		foreach ( $test_cases as $case ) {
			$this->assertSame( $case['expected'], $registry->is_registered( $case['slug'] ), $case['test_condition_name'] );
		}
	}
}
