<?php
/**
 * Title: List: Six icon cards
 * Slug: vk-site-builder/list-icon-cards
 * Description: A centered heading and six bordered cards in three columns, each with an icon, a title, and a short text. For a list of features or services.
 * Categories: vk-site-builder-list
 * Keywords: list, features, services, cards, icons, grid
 * Layout: grid
 * Images: none
 *
 * @package VK_Site_Builder
 */

$vksb_items = array(
	array(
		'icon'  => 'fa-palette',
		'title' => __( 'デザインの切り替え', 'vk-site-builder' ),
		'text'  => __( '色や書体の組み合わせを、管理画面からまとめて切り替えられます。', 'vk-site-builder' ),
	),
	array(
		'icon'  => 'fa-mobile-screen-button',
		'title' => __( 'スマートフォン対応', 'vk-site-builder' ),
		'text'  => __( '画面の幅に合わせて、メニューやレイアウトが自動で切り替わります。', 'vk-site-builder' ),
	),
	array(
		'icon'  => 'fa-cubes',
		'title' => __( 'ブロックパターン', 'vk-site-builder' ),
		'text'  => __( 'よく使う組み合わせを、ボタンひとつでページに追加できます。', 'vk-site-builder' ),
	),
	array(
		'icon'  => 'fa-magnifying-glass',
		'title' => __( '検索エンジン対策', 'vk-site-builder' ),
		'text'  => __( 'ページごとにタイトルや説明文を設定し、検索結果での見え方を整えます。', 'vk-site-builder' ),
	),
	array(
		'icon'  => 'fa-gauge-high',
		'title' => __( '表示の速さ', 'vk-site-builder' ),
		'text'  => __( '必要なファイルだけを読み込むので、ページがすばやく表示されます。', 'vk-site-builder' ),
	),
	array(
		'icon'  => 'fa-headset',
		'title' => __( 'サポート', 'vk-site-builder' ),
		'text'  => __( '使い方に迷ったときは、フォーラムやマニュアルで解決できます。', 'vk-site-builder' ),
	),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-text-align-center is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php esc_html_e( '主な機能', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"><?php esc_html_e( 'サイトづくりに必要な機能を、はじめからそろえています', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
<?php foreach ( $vksb_items as $vksb_item ) : ?>
<!-- wp:group {"style":{"border":{"color":"var:preset|color|border-normal","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border-normal);border-width:1px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><?php echo vksb_vk_icon_only( $vksb_item['icon'], 32 ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"fontSize":"large","className":"is-vk-trim-both"} -->
<h3 class="wp-block-heading has-large-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0;line-height:1.4"><?php echo esc_html( $vksb_item['title'] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-small-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"><?php echo esc_html( $vksb_item['text'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->

<?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
