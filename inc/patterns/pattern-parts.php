<?php
/**
 * パターンで使う VK Blocks のブロックのマークアップ
 *
 * VK Blocks のボタン・アイコンは、保存されるマークアップがブロックエディタの出力と
 * 1 文字でも違うと壊れたブロックになる. パターンのファイルに手で書かず、ここで組み立てる.
 *
 * @package VK_Site_Builder
 */

// 直接アクセスされた場合は処理しない.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * WordPress コアのスペーサーブロックのマークアップを返す
 *
 * 高さは spacing プリセットで指定し、スペーサー自身の上下の margin は 0 にする.
 *
 * @param string $slug spacing プリセットのスラッグ（例: 70）.
 * @return string ブロックのマークアップ.
 */
function vksb_spacer( $slug ) {
	$slug = esc_attr( $slug );
	return '<!-- wp:spacer {"height":"var:preset|spacing|' . $slug . '","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->' . "\n"
		. '<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--' . $slug . ')" aria-hidden="true" class="wp-block-spacer"></div>' . "\n"
		. '<!-- /wp:spacer -->';
}

/**
 * VK Blocks のボタンの色の種類ごとの設定
 *
 * attrs はブロックの属性、classes はリンクに付くクラス、arrow は後ろに矢印のアイコンを付けるかどうか.
 */
const VKSB_VK_BUTTON_STYLES = array(
	// 紺の塗り. 白い背景・薄い灰色の背景の上で使う.
	'primary'       => array(
		'attrs'   => array(),
		'classes' => 'has-background has-vk-color-primary-background-color',
		'arrow'   => true,
	),
	// 白の塗り・紺の文字. 紺・暗い色・写真の背景の上で使う.
	'white'         => array(
		'attrs'   => array(
			'buttonColor'           => 'custom',
			'buttonTextColorCustom' => 'primary',
			'buttonColorCustom'     => 'bg-primary',
		),
		'classes' => 'has-background has-bg-primary-background-color has-text-color has-primary-color',
		'arrow'   => true,
	),
	// 紺の線. 白い背景の上で、2 つ目のボタンに使う.
	'outline'       => array(
		'attrs'   => array( 'buttonType' => '1' ),
		'classes' => 'has-text-color is-style-outline has-vk-color-primary-color',
		'arrow'   => false,
	),
	// 白の線. 暗い背景の上で、2 つ目のボタンに使う.
	'outline-white' => array(
		'attrs'   => array(
			'buttonType'        => '1',
			'buttonColor'       => 'custom',
			'buttonColorCustom' => 'bg-primary',
		),
		'classes' => 'has-text-color is-style-outline has-bg-primary-color',
		'arrow'   => false,
	),
);

/**
 * VK Blocks のボタンブロックのマークアップを返す
 *
 * 大きさは lg で揃える. 角の丸みはサイトのデザインで決まるため、ここでは指定しない. 塗りのボタンには、文字の後ろに右向きの矢印を付ける. $icon を渡すと、塗りでも線でも、矢印の代わりにそのアイコンを付ける.
 *
 * @param string $text  ボタンの文字（翻訳済み・エスケープ前）.
 * @param string $style 色の種類. VKSB_VK_BUTTON_STYLES のキー.
 * @param string $align 揃え. left / center / right.
 * @param string|null $icon 文字の後ろに付けるアイコン（Font Awesome の名前. 例: fa-download）. null なら色の種類の既定（塗りは矢印、線は無し）.
 * @return string ブロックのマークアップ.
 */
function vksb_vk_button( $text, $style = 'primary', $align = 'left', $icon = null ) {
	$settings = VKSB_VK_BUTTON_STYLES[ $style ];
	if ( null !== $icon ) {
		$settings['arrow'] = true;
	} else {
		$icon = 'fa-arrow-right';
	}
	$arrow = '<i class="fa-solid ' . $icon . '"></i>';

	// 属性は、既定値と同じものを書かない（ブロックエディタの出力に合わせる）.
	$attrs = array_merge( array( 'buttonSize' => 'lg' ), $settings['attrs'] );
	if ( 'left' !== $align ) {
		$attrs['buttonAlign'] = $align;
	}
	if ( $settings['arrow'] ) {
		$attrs['fontAwesomeIconAfter'] = $arrow;
	}
	$icon_html = $settings['arrow'] ? '<i class="fa-solid ' . esc_attr( $icon ) . ' vk_button_link_after"></i>' : '';

	return '<!-- wp:vk-blocks/button ' . serialize_block_attributes( $attrs ) . ' -->' . "\n"
		. '<div class="wp-block-vk-blocks-button vk_button vk_button-color-custom vk_button-align-' . esc_attr( $align ) . '">'
		. '<a class="vk_button_link btn ' . esc_attr( $settings['classes'] ) . ' btn-lg" role="button" aria-pressed="true" rel="noopener">'
		. '<div class="vk_button_link_caption"><span class="vk_button_link_txt">' . esc_html( $text ) . '</span>' . $icon_html . '</div>'
		. '</a></div>' . "\n"
		. '<!-- /wp:vk-blocks/button -->';
}

/**
 * VK Blocks のアイコンブロック（丸い背景の塗り）のマークアップを返す
 *
 * @param string      $icon       Font Awesome のアイコン名（例: fa-check）. スタイルは solid.
 * @param int         $size       アイコンの大きさ（px）.
 * @param int         $margin     アイコンと丸の縁の間（px）. 丸の直径は $size + $margin × 2.
 * @param string      $color      丸の色. カラーパレットのスラッグ.
 * @param string|null $font_color アイコンの色. カラーパレットのスラッグ. null なら白.
 * @param string      $align      揃え. left / center / right.
 * @return string ブロックのマークアップ.
 */
function vksb_vk_icon( $icon, $size, $margin, $color = 'primary', $font_color = null, $align = 'left' ) {
	$attrs = array(
		'faIcon'     => '<i class="fa-solid ' . $icon . '"></i>',
		'iconSize'   => $size,
		'iconMargin' => $margin,
	);
	if ( 'left' !== $align ) {
		$attrs['iconAlign'] = $align;
	}
	$attrs['iconColor'] = $color;
	if ( $font_color ) {
		$attrs['iconFontColor'] = $font_color;
	}

	$frame_class = 'left' === $align ? 'vk_icon_frame' : 'vk_icon_frame text-' . $align;
	$font_class  = $font_color ? ' has-text-color has-' . $font_color . '-color ' : '';
	$box         = 'calc(' . $size . 'px + ' . ( $margin * 2 ) . 'px)';

	return '<!-- wp:vk-blocks/icon ' . serialize_block_attributes( $attrs ) . ' -->' . "\n"
		. '<div class="wp-block-vk-blocks-icon vk_icon"><div class="' . esc_attr( $frame_class ) . '">'
		. '<div class="vk_icon_border has-background has-' . esc_attr( $color ) . '-background-color" style="width:' . $box . ';height:' . $box . '">'
		. '<i style="font-size:' . $size . 'px" class="fa-solid vk_icon_font ' . $font_class . ' ' . esc_attr( $icon ) . '"></i>'
		. '</div></div></div>' . "\n"
		. '<!-- /wp:vk-blocks/icon -->';
}

/**
 * VK Blocks のアイコンブロック（背景や枠の無い、アイコンだけ）のマークアップを返す
 *
 * ラベルや時刻の横に添える小さなアイコンに使う. 丸い背景の上に白いアイコンを載せると重く見えるため.
 *
 * @param string $icon  Font Awesome のアイコン名（例: fa-clock）. スタイルは solid.
 * @param int    $size  アイコンの大きさ（px）.
 * @param string $color アイコンの色. カラーパレットのスラッグ.
 * @param string $align 揃え. left / center / right.
 * @return string ブロックのマークアップ.
 */
function vksb_vk_icon_only( $icon, $size, $color = 'primary', $align = 'left' ) {
	$attrs = array(
		'faIcon'     => '<i class="fa-solid ' . $icon . '"></i>',
		'iconSize'   => $size,
		'iconMargin' => 0,
	);
	if ( 'left' !== $align ) {
		$attrs['iconAlign'] = $align;
	}
	$attrs['iconType']  = '2';
	$attrs['iconColor'] = $color;

	$frame_class = 'left' === $align ? 'vk_icon_frame' : 'vk_icon_frame text-' . $align;
	$box         = 'calc(' . $size . 'px + 0px)';

	return '<!-- wp:vk-blocks/icon ' . serialize_block_attributes( $attrs ) . ' -->' . "\n"
		. '<div class="wp-block-vk-blocks-icon vk_icon"><div class="' . esc_attr( $frame_class . ' is-style-noline' ) . '">'
		. '<div class="vk_icon_border has-text-color has-' . esc_attr( $color ) . '-color" style="width:' . $box . ';height:' . $box . '">'
		. '<i style="font-size:' . $size . 'px" class="fa-solid vk_icon_font  ' . esc_attr( $icon ) . '"></i>'
		. '</div></div></div>' . "\n"
		. '<!-- /wp:vk-blocks/icon -->';
}

/**
 * 改行させたくない語句を囲んだ文を返す
 *
 * 文の中の語句を <span class="text-nowrap"> で囲むと、画面が狭いときも、その語句の途中では折り返さない.
 * クラスは VK Blocks の書式「No wrap」と同じもの. ブロックエディタでも、その書式として読み込まれる.
 *
 * @param string $text 翻訳済みの文. 囲む語句を <span class="text-nowrap"> で書く.
 * @return string span 以外のタグを取り除いた文.
 */
function vksb_nowrap_text( $text ) {
	return wp_kses( $text, array( 'span' => array( 'class' => true ) ) );
}
