<?php
/**
 * Title: Details: Simple list in two columns
 * Slug: vk-site-builder/detail-simple-list-columns
 * Description: A simple explanation with a heading and a text, followed by a check-mark list split into two columns on wide screens. Suited for listing many features without making the section too long.
 * Categories: vk-site-builder-details
 * Keywords: details, features, list, two columns, simple
 * Layout: grid
 * Images: none
 *
 * @package VK_Site_Builder
 */

$vksb_lists = array(
	array(
		__( '更新が必要なプラグインとテーマの一覧', 'vk-site-builder' ),
		__( 'バージョンの変更の履歴', 'vk-site-builder' ),
		__( 'サイトが止まったときのメール通知', 'vk-site-builder' ),
		__( 'SSL 証明書の有効期限', 'vk-site-builder' ),
	),
	array(
		__( 'バックアップの状況', 'vk-site-builder' ),
		__( 'バージョンでの絞り込み', 'vk-site-builder' ),
		__( 'カテゴリーでの分類と CSV の書き出し', 'vk-site-builder' ),
		__( 'サイトごとの担当者とメモ', 'vk-site-builder' ),
	),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"0.15em"}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700;letter-spacing:0.15em">FEATURES</p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '40' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php echo vksb_nowrap_text( __( '<span class="text-nowrap">確認できる情報と</span><span class="text-nowrap">便利な機能</span>', 'vk-site-builder' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'すべてのサイトの状態を 1 つの画面でまとめて確認できます。', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"backgroundColor":"bg-secondary","style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|60","bottom":"0","left":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-bg-secondary-background-color has-background" style="padding-top:0;padding-right:var(--wp--preset--spacing--60);padding-bottom:0;padding-left:var(--wp--preset--spacing--60)"><?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><?php foreach ( $vksb_lists as $vksb_list ) : ?><!-- wp:column -->
<div class="wp-block-column"><!-- wp:list {"className":"is-style-vk-check-mark","color":"primary","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<ul style="margin-top:0;margin-bottom:0" class="wp-block-list is-style-vk-check-mark"><?php foreach ( $vksb_list as $vksb_item ) : ?><!-- wp:list-item -->
<li><?php echo esc_html( $vksb_item ); ?></li>
<!-- /wp:list-item --><?php endforeach; ?></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<?php endforeach; ?></div>
<!-- /wp:columns -->

<?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->

<?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
