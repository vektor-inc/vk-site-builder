<?php
/**
 * Title: List: Nine photo cards
 * Slug: vk-site-builder/list-image-cards
 * Description: A centered heading and nine white cards in three columns on a light background, each with a photo, a title, and a short text. For a list of services or menus.
 * Categories: vk-site-builder-list
 * Keywords: list, services, menu, cards, image and text, grid, many items
 * Layout: grid
 * Images: photo
 *
 * @package VK_Site_Builder
 */

$vksb_items = array(
	array( 'service-web.jpg', __( '<span class="text-nowrap">ホームページ</span><span class="text-nowrap">制作</span>', 'vk-site-builder' ), __( '企画からデザイン、公開まで一貫して担当します。', 'vk-site-builder' ) ),
	array( 'service-seo.jpg', __( '検索対策', 'vk-site-builder' ), __( '検索で見つけてもらえるよう、ページを見直します。', 'vk-site-builder' ) ),
	array( 'service-support.jpg', __( '更新サポート', 'vk-site-builder' ), __( 'お知らせやページの更新を代わりに行います。', 'vk-site-builder' ) ),
	array( 'pc-data.jpg', __( 'アクセス解析', 'vk-site-builder' ), __( '毎月の訪問者の動きを、レポートでお伝えします。', 'vk-site-builder' ) ),
	array( 'service-web.jpg', __( 'システム開発', 'vk-site-builder' ), __( '予約や会員登録など、業務に合わせた機能をつくります。', 'vk-site-builder' ) ),
	array( 'contact-image.jpg', __( 'フォーム設置', 'vk-site-builder' ), __( 'お問い合わせや資料請求のフォームを用意します。', 'vk-site-builder' ) ),
	array( 'contact-image.jpg', __( '写真撮影', 'vk-site-builder' ), __( '店舗や事務所、スタッフの写真を撮影します。', 'vk-site-builder' ) ),
	array( 'about-office.jpg', __( '原稿作成', 'vk-site-builder' ), __( 'お話をうかがい、伝わる文章にまとめます。', 'vk-site-builder' ) ),
	array( 'service-support.jpg', __( '保守・管理', 'vk-site-builder' ), __( 'バックアップや更新で、サイトを安全に保ちます。', 'vk-site-builder' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"backgroundColor":"bg-secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-bg-secondary-background-color has-background" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-text-align-center is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php esc_html_e( '業務内容', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<?php echo vksb_spacer( '40' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php esc_html_e( '必要なものだけを選んでご依頼いただけます', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
<?php foreach ( $vksb_items as $vksb_item ) : ?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"backgroundColor":"bg-primary","layout":{"type":"default"}} -->
<div class="wp-block-group has-bg-primary-background-color has-background"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-large" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( vksb_pattern_image_url( $vksb_item[0] ) ); ?>" alt="" style="aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"fontSize":"large","className":"is-vk-trim-both"} -->
<h3 class="wp-block-heading has-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php echo vksb_nowrap_text( $vksb_item[1] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h3>
<!-- /wp:heading -->

<?php echo vksb_spacer( '40' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php echo esc_html( $vksb_item[2] ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->

<?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
