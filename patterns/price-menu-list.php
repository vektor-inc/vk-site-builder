<?php
/**
 * Title: Price: Menu and price list
 * Slug: vk-site-builder/price-menu-list
 * Description: A price list for menus and services. Items are grouped by category in two columns, and each row shows the item name, a short note, and the price on the right.
 * Categories: vk-site-builder-price
 * Keywords: price, menu, price list, salon, cafe, services
 * Layout: grid
 * Images: none
 *
 * @package VK_Site_Builder
 */

$vksb_groups = array(
	array(
		'title' => __( 'カット', 'vk-site-builder' ),
		'icon'  => 'fa-scissors',
		'items' => array(
			array( __( 'カット', 'vk-site-builder' ), __( 'シャンプー・ブロー込み', 'vk-site-builder' ), __( '4,400円', 'vk-site-builder' ) ),
			array( __( 'キッズカット', 'vk-site-builder' ), __( '小学生以下', 'vk-site-builder' ), __( '2,750円', 'vk-site-builder' ) ),
			array( __( '前髪カット', 'vk-site-builder' ), __( '10分ほど', 'vk-site-builder' ), __( '1,100円', 'vk-site-builder' ) ),
			array( __( 'シャンプー・ブロー', 'vk-site-builder' ), __( 'ヘッドマッサージ付き', 'vk-site-builder' ), __( '2,200円', 'vk-site-builder' ) ),
		),
	),
	array(
		'title' => __( 'カラー・ケア', 'vk-site-builder' ),
		'icon'  => 'fa-palette',
		'items' => array(
			array( __( 'カラー', 'vk-site-builder' ), __( '30色以上から選べます', 'vk-site-builder' ), __( '6,600円', 'vk-site-builder' ) ),
			array( __( 'リタッチ', 'vk-site-builder' ), __( '前回のカラーから2か月以内', 'vk-site-builder' ), __( '5,500円', 'vk-site-builder' ) ),
			array( __( 'ハイライト', 'vk-site-builder' ), __( '髪の長さにより料金が変わります', 'vk-site-builder' ), __( '8,800円', 'vk-site-builder' ) ),
			array( __( 'トリートメント', 'vk-site-builder' ), __( '傷んだ髪を補修します', 'vk-site-builder' ), __( '3,300円', 'vk-site-builder' ) ),
		),
	),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-text-align-center is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php esc_html_e( 'メニュー・料金', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<?php echo vksb_spacer( '40' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php esc_html_e( '表示価格はすべて税込です', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0">
<?php foreach ( $vksb_groups as $vksb_group ) : ?>
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|primary","width":"2px"}},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:2px;margin-top:0;margin-bottom:0;padding-bottom:var(--wp--preset--spacing--40)"><?php echo vksb_vk_icon_only( $vksb_group['icon'], 22 ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"},"layout":{"selfStretch":"fill","flexSize":null}},"fontSize":"x-large","className":"is-vk-trim-both"} -->
<h3 class="wp-block-heading has-x-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php echo vksb_nowrap_text( $vksb_group['title'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->
	<?php foreach ( $vksb_group['items'] as $vksb_item ) : ?>

<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"style":{"layout":{"selfStretch":"fill"},"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700"><?php echo esc_html( $vksb_item[0] ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '30' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"text-secondary","fontSize":"x-small","className":"is-vk-trim-both"} -->
<p class="has-text-secondary-color has-text-color has-x-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php echo esc_html( $vksb_item[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700"><?php echo esc_html( $vksb_item[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
	<?php endforeach; ?>
</div>
<!-- /wp:column -->
<?php endforeach; ?>
</div>
<!-- /wp:columns -->

<?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
