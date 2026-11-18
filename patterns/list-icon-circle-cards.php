<?php
/**
 * Title: List: Eight cards with circle icons
 * Slug: vk-site-builder/list-icon-circle-cards
 * Description: A centered heading and eight white cards in four columns on a light background, each with a white icon in a key color circle, a centered title, and a short text. For a list of app or product features.
 * Categories: vk-site-builder-list
 * Keywords: list, features, functions, app, product, cards, icons, grid
 * Layout: grid
 * Images: none
 *
 * @package VK_Site_Builder
 */

$vksb_items = array(
	array( 'fa-bell', __( 'お知らせ通知', 'vk-site-builder' ), __( '予定の前に、スマートフォンへ通知が届きます。', 'vk-site-builder' ) ),
	array( 'fa-flag', __( '目標の設定', 'vk-site-builder' ), __( '目標を決めて、達成までの進み具合を確認できます。', 'vk-site-builder' ) ),
	array( 'fa-coins', __( 'ポイント', 'vk-site-builder' ), __( '続けた日数に応じて、ポイントがたまります。', 'vk-site-builder' ) ),
	array( 'fa-chart-simple', __( '記録とグラフ', 'vk-site-builder' ), __( '毎日の記録を、グラフでひと目で振り返れます。', 'vk-site-builder' ) ),
	array( 'fa-comments', __( 'コミュニティ', 'vk-site-builder' ), __( 'ほかの利用者と、情報の交換や質問ができます。', 'vk-site-builder' ) ),
	array( 'fa-lightbulb', __( 'おすすめ提案', 'vk-site-builder' ), __( '記録をもとに、次に取り組むことを提案します。', 'vk-site-builder' ) ),
	array( 'fa-calendar-days', __( '予定の共有', 'vk-site-builder' ), __( '家族や仲間と、予定をかんたんに共有できます。', 'vk-site-builder' ) ),
	array( 'fa-lock', __( 'データの保護', 'vk-site-builder' ), __( '大切なデータは、暗号化して安全に保管します。', 'vk-site-builder' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"backgroundColor":"bg-secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-bg-secondary-background-color has-background" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-text-align-center is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php esc_html_e( 'そのほかの機能', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"><?php esc_html_e( '毎日の習慣づくりを、アプリがしっかり支えます', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"13rem"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
<?php foreach ( $vksb_items as $vksb_item ) : ?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|50","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50"},"blockGap":"0"}},"backgroundColor":"bg-primary","layout":{"type":"default"}} -->
<div class="wp-block-group has-bg-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_vk_icon( $vksb_item[0], 26, 18, 'primary', 'bg-primary', 'center' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"fontSize":"large","className":"is-vk-trim-both"} -->
<h3 class="wp-block-heading has-text-align-center has-large-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0;line-height:1.4"><?php echo esc_html( $vksb_item[1] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-small-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"><?php echo esc_html( $vksb_item[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->

<?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
