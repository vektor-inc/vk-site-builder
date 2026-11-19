<?php
/**
 * Title: Price: Plan comparison table
 * Slug: vk-site-builder/price-compare
 * Description: A table that compares three plans by price and features, with item names on the left. The recommended plan in the middle is surrounded by a key color frame. The columns stay side by side on smartphones.
 * Categories: vk-site-builder-price
 * Keywords: price, plans, comparison, pricing table, recommended
 * Layout: grid
 * Images: none
 *
 * @package VK_Site_Builder
 */

$vksb_plans = array(
	__( '都度払い', 'vk-site-builder' ),
	__( '定額', 'vk-site-builder' ),
	__( '通い放題', 'vk-site-builder' ),
);
// 値が true なら使える（チェック）、false なら使えない（横線）. 文字列はそのまま表示する.
$vksb_rows = array(
	array(
		'label'  => __( '料金', 'vk-site-builder' ),
		'values' => array( __( '1,320円', 'vk-site-builder' ), __( '4,400円', 'vk-site-builder' ), __( '6,600円', 'vk-site-builder' ) ),
	),
	array(
		'label'  => __( '支払い', 'vk-site-builder' ),
		'values' => array( __( '1回ごと', 'vk-site-builder' ), __( '毎月', 'vk-site-builder' ), __( '毎月', 'vk-site-builder' ) ),
	),
	array(
		'label'  => __( '利用回数', 'vk-site-builder' ),
		'values' => array( __( '1回', 'vk-site-builder' ), __( '月7回', 'vk-site-builder' ), __( '無制限', 'vk-site-builder' ) ),
	),
	array(
		'label'  => __( '日程変更', 'vk-site-builder' ),
		'values' => array( false, true, true ),
	),
	array(
		'label'  => __( 'プラン変更', 'vk-site-builder' ),
		'values' => array( false, true, true ),
	),
);
$vksb_featured   = 1;
$vksb_last_index = count( $vksb_rows ) - 1;

/**
 * 表のセル（カラム）の開始タグを返す
 *
 * @param array  $border     枠線. 辺（top / right / bottom / left）をキーに、array( 色のスラッグ, 太さ ).
 * @param string $background 背景色のスラッグ. 空なら背景なし.
 * @param string $text_color 文字色のスラッグ. 空なら指定なし.
 * @return string ブロックのマークアップ.
 */
$vksb_cell_open = static function ( $border, $background = '', $text_color = '' ) {
	$attrs = array(
		'style' => array(
			'spacing' => array(
				'padding' => array(
					'top'    => 'var:preset|spacing|50',
					'right'  => 'var:preset|spacing|40',
					'bottom' => 'var:preset|spacing|50',
					'left'   => 'var:preset|spacing|40',
				),
			),
		),
	);
	$css   = '';
	foreach ( $border as $side => $value ) {
		$attrs['style']['border'][ $side ] = array(
			'color' => 'var:preset|color|' . $value[0],
			'width' => $value[1],
		);
		$css .= 'border-' . $side . '-color:var(--wp--preset--color--' . $value[0] . ');border-' . $side . '-width:' . $value[1] . ';';
	}
	$css    .= 'padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)';
	$classes = 'wp-block-column';
	if ( $text_color ) {
		$attrs['textColor'] = $text_color;
		$classes           .= ' has-' . $text_color . '-color has-text-color';
	}
	if ( $background ) {
		$attrs['backgroundColor'] = $background;
		$classes                 .= ' has-' . $background . '-background-color has-background';
	}
	return '<!-- wp:column ' . serialize_block_attributes( $attrs ) . ' -->' . "\n" . '<div class="' . esc_attr( $classes ) . '" style="' . esc_attr( $css ) . '">';
};

/**
 * 表のセルの中の文字のマークアップを返す
 *
 * @param string $text  文字（エスケープ前）.
 * @param bool   $bold  太字にするか.
 * @param string $align 揃え. left / center.
 * @return string ブロックのマークアップ.
 */
$vksb_cell_text = static function ( $text, $bold = false, $align = 'center' ) {
	$attrs = array(
		'style'     => array( 'spacing' => array( 'margin' => array( 'top' => '0', 'bottom' => '0' ) ) ),
		'fontSize'  => 'small',
		'className' => 'is-vk-trim-both',
	);
	$css   = 'margin-top:0;margin-bottom:0';
	if ( 'left' !== $align ) {
		$attrs = array_merge( array( 'align' => $align ), $attrs );
	}
	if ( $bold ) {
		$attrs['style']['typography'] = array(
			'fontStyle'  => 'normal',
			'fontWeight' => '700',
		);
		$css                         .= ';font-style:normal;font-weight:700';
	}
	$class = ( 'left' !== $align ? 'has-text-align-' . $align . ' ' : '' ) . 'has-small-font-size is-vk-trim-both';
	return '<!-- wp:paragraph ' . serialize_block_attributes( $attrs ) . ' -->' . "\n"
		. '<p class="' . esc_attr( $class ) . '" style="' . esc_attr( $css ) . '">' . esc_html( $text ) . '</p>' . "\n"
		. '<!-- /wp:paragraph -->';
};

$vksb_cell_close = "</div>\n<!-- /wp:column -->";
$vksb_row_open   = '<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"}}}} -->' . "\n" . '<div class="wp-block-columns is-not-stacked-on-mobile" style="margin-top:0;margin-bottom:0">';
$vksb_row_close  = "</div>\n<!-- /wp:columns -->";
$vksb_line       = array( 'border-normal', '1px' );
$vksb_frame      = array( 'primary', '2px' );
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"960px"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-text-align-center is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php esc_html_e( 'プランの比較', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<?php echo vksb_spacer( '40' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php esc_html_e( '通う頻度に合わせて、ぴったりのプランを選べます', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
<?php
// 見出しの行.
echo $vksb_row_open; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
echo $vksb_cell_open( array() ) . $vksb_cell_close; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
foreach ( $vksb_plans as $vksb_index => $vksb_plan ) {
	if ( $vksb_featured === $vksb_index ) {
		echo $vksb_cell_open( array( 'top' => $vksb_frame, 'right' => $vksb_frame, 'left' => $vksb_frame ), 'primary', 'bg-primary' ) . $vksb_cell_text( $vksb_plan, true ) . $vksb_cell_close; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	} else {
		echo $vksb_cell_open( array( 'bottom' => $vksb_line ), 'bg-secondary' ) . $vksb_cell_text( $vksb_plan, true ) . $vksb_cell_close; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}
echo $vksb_row_close . "\n\n"; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

// 項目の行.
foreach ( $vksb_rows as $vksb_row_index => $vksb_row ) {
	echo $vksb_row_open; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	echo $vksb_cell_open( array( 'bottom' => $vksb_line ), 'bg-secondary' ) . $vksb_cell_text( $vksb_row['label'], true, 'left' ) . $vksb_cell_close; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	foreach ( $vksb_row['values'] as $vksb_index => $vksb_value ) {
		if ( true === $vksb_value ) {
			$vksb_content = vksb_vk_icon_only( 'fa-check', 16, 'primary', 'center' );
		} elseif ( false === $vksb_value ) {
			$vksb_content = vksb_vk_icon_only( 'fa-minus', 16, 'text-secondary', 'center' );
		} else {
			$vksb_content = $vksb_cell_text( $vksb_value, 0 === $vksb_row_index );
		}
		if ( $vksb_featured === $vksb_index ) {
			$vksb_border = array(
				'right'  => $vksb_frame,
				'bottom' => $vksb_row_index === $vksb_last_index ? $vksb_frame : $vksb_line,
				'left'   => $vksb_frame,
			);
		} else {
			$vksb_border = array( 'bottom' => $vksb_line );
		}
		echo $vksb_cell_open( $vksb_border ) . $vksb_content . $vksb_cell_close; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
	echo $vksb_row_close . "\n\n"; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}
?>
</div>
<!-- /wp:group -->

<?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"text-secondary","fontSize":"x-small","className":"is-vk-trim-both"} -->
<p class="has-text-secondary-color has-text-color has-x-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php esc_html_e( '※ 表示価格はすべて税込です。月額プランは入会金 3,300円が別途かかります。', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
