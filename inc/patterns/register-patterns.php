<?php
/**
 * ブロックパターンの登録
 *
 * @package VK_Site_Builder
 */

// 直接アクセスされた場合は処理しない.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * パターンファイルの先頭コメントから読み取る項目
 *
 * キーは register_block_pattern() に渡す引数名、値はファイルの先頭コメントの項目名.
 */
const VKSB_PATTERN_HEADERS = array(
	'title'       => 'Title',
	'slug'        => 'Slug',
	'description' => 'Description',
	'categories'  => 'Categories',
	'keywords'    => 'Keywords',
);

/**
 * パターンの仮の画像の URL を返す
 *
 * 画像は assets/images/patterns/ に置く. パターンのファイルから、出力時に esc_url() を通して使う.
 *
 * @param string $file_name 画像のファイル名.
 * @return string 画像の URL.
 */
function vksb_pattern_image_url( $file_name ) {
	return VKSB_PLUGIN_URL . 'assets/images/patterns/' . $file_name;
}

/**
 * パターンのカテゴリーを登録する
 *
 * @return void
 */
function vksb_register_pattern_categories() {
	$categories = array(
		'vk-site-builder-hero'             => __( 'Hero (VK Site Builder)', 'vk-site-builder' ),
		'vk-site-builder-flow'             => __( 'Flow (VK Site Builder)', 'vk-site-builder' ),
		'vk-site-builder-faq'              => __( 'FAQ (VK Site Builder)', 'vk-site-builder' ),
		'vk-site-builder-cta'              => __( 'Call to action (VK Site Builder)', 'vk-site-builder' ),
		'vk-site-builder-problem-solution' => __( 'Problem and solution (VK Site Builder)', 'vk-site-builder' ),
		'vk-site-builder-features'         => __( 'Features and benefits (VK Site Builder)', 'vk-site-builder' ),
		'vk-site-builder-details'          => __( 'Details (VK Site Builder)', 'vk-site-builder' ),
		'vk-site-builder-price'            => __( 'Price (VK Site Builder)', 'vk-site-builder' ),
	);

	foreach ( $categories as $name => $label ) {
		register_block_pattern_category( $name, array( 'label' => $label ) );
	}
}
add_action( 'init', 'vksb_register_pattern_categories' );

/**
 * パターンファイルの先頭コメントを、register_block_pattern() に渡す引数に変換する
 *
 * Title と Slug が無い場合は登録できないため null を返す.
 * Categories と Keywords はカンマ区切りの文字列を配列にする.
 *
 * @param array $headers get_file_data() で読み取った項目（キーは VKSB_PATTERN_HEADERS のキー）.
 * @return array|null register_block_pattern() に渡す引数（slug を含む）。登録できない場合は null.
 */
function vksb_build_pattern_args( $headers ) {
	// 必須の項目がそろっているか確かめる.
	if ( empty( $headers['title'] ) || empty( $headers['slug'] ) ) {
		return null;
	}

	$args = array(
		'slug'  => $headers['slug'],
		// 先頭コメントの文字列は翻訳ファイルに拾われないため、ここで翻訳関数を通す.
		'title' => translate_with_gettext_context( $headers['title'], 'Pattern title', 'vk-site-builder' ),
	);

	if ( ! empty( $headers['description'] ) ) {
		$args['description'] = translate_with_gettext_context( $headers['description'], 'Pattern description', 'vk-site-builder' );
	}

	// カンマ区切りの項目を配列にする.
	foreach ( array( 'categories', 'keywords' ) as $key ) {
		if ( ! empty( $headers[ $key ] ) ) {
			$args[ $key ] = array_values( array_filter( array_map( 'trim', explode( ',', $headers[ $key ] ) ) ) );
		}
	}

	return $args;
}

/**
 * patterns ディレクトリにあるパターンファイルをすべて登録する
 *
 * @param string $patterns_dir パターンファイルを置いたディレクトリの絶対パス.
 * @return string[] 登録したパターンのスラッグ.
 */
function vksb_register_patterns_in_dir( $patterns_dir ) {
	$registered = array();
	$files      = glob( trailingslashit( $patterns_dir ) . '*.php' );

	if ( ! $files ) {
		return $registered;
	}

	foreach ( $files as $file ) {
		// 先頭コメントから登録に使う項目を読み取る.
		$args = vksb_build_pattern_args( get_file_data( $file, VKSB_PATTERN_HEADERS ) );
		if ( null === $args ) {
			continue;
		}

		// ファイルを読み込み、出力されたブロックのマークアップを本文にする.
		ob_start();
		include $file;
		$args['content'] = ob_get_clean();

		$slug = $args['slug'];
		unset( $args['slug'] );

		if ( register_block_pattern( $slug, $args ) ) {
			$registered[] = $slug;
		}
	}

	return $registered;
}

/**
 * プラグインのパターンを登録する
 *
 * @return void
 */
function vksb_register_patterns() {
	vksb_register_patterns_in_dir( VKSB_PLUGIN_DIR . 'patterns' );
}
// カテゴリーより後に登録するため、優先度を既定より遅くする.
add_action( 'init', 'vksb_register_patterns', 11 );
