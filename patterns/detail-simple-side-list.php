<?php
/**
 * Title: Details: Simple list and screenshot side by side
 * Slug: vk-site-builder/detail-simple-side-list
 * Description: A simple two-column explanation with a small heading, a text and a check-mark list on the left, and a screenshot on the right. Suited for listing what a feature can do.
 * Categories: vk-site-builder-details
 * Keywords: details, features, list, screenshot, simple, side by side
 * Layout: split
 * Images: figure, photo
 *
 * @package VK_Site_Builder
 */

$vksb_items = array(
	__( '更新が必要なプラグインとテーマの一覧', 'vk-site-builder' ),
	__( 'バージョンの変更の履歴', 'vk-site-builder' ),
	__( 'サイトが止まったときのメール通知', 'vk-site-builder' ),
	__( 'SSL 証明書の有効期限', 'vk-site-builder' ),
	__( 'サイトごとの担当者とメモ', 'vk-site-builder' ),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"0.15em"}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700;letter-spacing:0.15em">FEATURES</p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '40' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"fontSize":"xx-large","className":"is-vk-trim-both"} -->
<h3 class="wp-block-heading has-xx-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php echo vksb_nowrap_text( __( '<span class="text-nowrap">管理画面で</span><span class="text-nowrap">確認できること</span>', 'vk-site-builder' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h3>
<!-- /wp:heading -->

<?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'すべてのサイトの状態を 1 つの画面でまとめて確認できます。', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:list {"className":"is-style-vk-check-mark","color":"primary","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<ul style="margin-top:0;margin-bottom:0" class="wp-block-list is-style-vk-check-mark"><?php foreach ( $vksb_items as $vksb_item ) : ?><!-- wp:list-item -->
<li><?php echo esc_html( $vksb_item ); ?></li>
<!-- /wp:list-item --><?php endforeach; ?></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:group {"backgroundColor":"bg-secondary","style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|60","bottom":"0","left":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-bg-secondary-background-color has-background" style="padding-top:0;padding-right:var(--wp--preset--spacing--60);padding-bottom:0;padding-left:var(--wp--preset--spacing--60)"><?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:image {"sizeSlug":"large","borderColor":"border-normal","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"width":"1px"}}} -->
<figure class="wp-block-image size-large has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( vksb_pattern_image_url( 'dummy-IT-service.jpg' ) ); ?>" alt="" class="has-border-color has-border-normal-border-color" style="border-width:1px"/></figure>
<!-- /wp:image -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
