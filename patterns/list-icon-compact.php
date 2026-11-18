<?php
/**
 * Title: List: Twelve compact items with icons
 * Slug: vk-site-builder/list-icon-compact
 * Description: A centered heading and twelve compact items in four columns on a light background, each with a small icon, a title, and a one-line text. For a long list of features.
 * Categories: vk-site-builder-list
 * Keywords: list, features, functions, icons, grid, many items
 * Layout: grid
 * Images: none
 *
 * @package VK_Site_Builder
 */

$vksb_items = array(
	array( 'fa-swatchbook', __( 'カラーパレット', 'vk-site-builder' ), __( 'サイト全体の色をまとめて設定', 'vk-site-builder' ) ),
	array( 'fa-font', __( '書体の設定', 'vk-site-builder' ), __( '見出しと本文の書体を選べます', 'vk-site-builder' ) ),
	array( 'fa-bars', __( 'メニューの設定', 'vk-site-builder' ), __( 'ヘッダーとフッターに配置', 'vk-site-builder' ) ),
	array( 'fa-image', __( 'ロゴの設定', 'vk-site-builder' ), __( '画像と文字のロゴに対応', 'vk-site-builder' ) ),
	array( 'fa-table-columns', __( 'レイアウトの切り替え', 'vk-site-builder' ), __( '1 列と 2 列をページごとに選択', 'vk-site-builder' ) ),
	array( 'fa-list-ol', __( '目次の自動作成', 'vk-site-builder' ), __( '見出しから目次を自動で表示', 'vk-site-builder' ) ),
	array( 'fa-shoe-prints', __( 'パンくずリスト', 'vk-site-builder' ), __( '今いるページの場所を表示', 'vk-site-builder' ) ),
	array( 'fa-share-nodes', __( 'SNS ボタン', 'vk-site-builder' ), __( '記事の共有ボタンを表示', 'vk-site-builder' ) ),
	array( 'fa-envelope', __( 'お問い合わせ', 'vk-site-builder' ), __( 'ページ下に問い合わせ欄', 'vk-site-builder' ) ),
	array( 'fa-language', __( '多言語対応', 'vk-site-builder' ), __( '翻訳ファイルで表示を切り替え', 'vk-site-builder' ) ),
	array( 'fa-universal-access', __( 'アクセシビリティ', 'vk-site-builder' ), __( '読み上げや操作に配慮', 'vk-site-builder' ) ),
	array( 'fa-rotate', __( '自動アップデート', 'vk-site-builder' ), __( '管理画面から最新版に更新', 'vk-site-builder' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"backgroundColor":"bg-secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-bg-secondary-background-color has-background" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-text-align-center is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php esc_html_e( '機能一覧', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"><?php esc_html_e( 'すべての機能を、追加料金なしで使えます', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"14rem"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
<?php foreach ( $vksb_items as $vksb_item ) : ?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50"}},"backgroundColor":"bg-primary","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group has-bg-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_vk_icon_only( $vksb_item[0], 22 ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700"><?php echo esc_html( $vksb_item[1] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"textColor":"text-secondary","fontSize":"x-small","className":"is-vk-trim-both"} -->
<p class="has-text-secondary-color has-text-color has-x-small-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"><?php echo esc_html( $vksb_item[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->

<?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
