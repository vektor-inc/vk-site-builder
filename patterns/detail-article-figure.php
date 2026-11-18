<?php
/**
 * Title: Details: Article with lists, code, and screenshots
 * Slug: vk-site-builder/detail-article-figure
 * Description: A long explanation in a narrow column, like a manual. A heading and a lead text are followed by blocks of the same shape, each with a small heading, a paragraph, a list, a code block, and an uncropped screenshot with a border. Delete the parts you do not need.
 * Categories: vk-site-builder-details
 * Keywords: details, article, manual, documentation, list, code, screenshot
 * Layout: stack
 * Images: figure, photo
 *
 * @package VK_Site_Builder
 */

$vksb_sections = array(
	array(
		'title' => __( '設定のしかた', 'vk-site-builder' ),
		'text'  => __( '管理画面の「設定」から、監視するサイトを登録します。登録が終わると、最初の点検が始まります。', 'vk-site-builder' ),
		'items' => array(
			__( 'サイトの URL を入力します', 'vk-site-builder' ),
			__( '通知を受け取るメールアドレスを選びます', 'vk-site-builder' ),
			__( '「保存」を押して登録を終えます', 'vk-site-builder' ),
		),
		'code'  => 'https://example.com/',
		'image' => 'dummy-IT-service.jpg',
	),
	array(
		'title' => __( 'アクセスを制限しているとき', 'vk-site-builder' ),
		'text'  => __( 'Basic 認証や IP アドレスでアクセスを制限しているサイトは、点検用のアクセスを許可してください。許可しないと、点検の結果がエラーになります。', 'vk-site-builder' ),
		'items' => array(
			__( 'Basic 認証のユーザー名とパスワードを登録します', 'vk-site-builder' ),
			__( 'IP 制限には、下の IP アドレスを追加します', 'vk-site-builder' ),
			__( '設定のあと、「再点検」で結果を確かめます', 'vk-site-builder' ),
		),
		'code'  => "Require ip 192.0.2.10\nRequire ip 192.0.2.11",
		'image' => 'dummy-IT-service.jpg',
	),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php esc_html_e( 'ご利用の前に', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:0"><?php esc_html_e( 'サイトを登録して、点検を始めるまでの手順をご説明します。環境によっては、追加の設定が必要です。', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->
<?php foreach ( $vksb_sections as $vksb_section ) : ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:0"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"fontSize":"x-large","className":"is-vk-trim-both"} -->
<h3 class="wp-block-heading has-x-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php echo esc_html( $vksb_section['title'] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><?php echo esc_html( $vksb_section['text'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}}} -->
<ul class="wp-block-list" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><?php foreach ( $vksb_section['items'] as $vksb_item ) : ?><!-- wp:list-item -->
<li><?php echo esc_html( $vksb_item ); ?></li>
<!-- /wp:list-item --><?php endforeach; ?></ul>
<!-- /wp:list -->

<!-- wp:code {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}}} -->
<pre class="wp-block-code" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><code><?php echo esc_html( $vksb_section['code'] ); ?></code></pre>
<!-- /wp:code -->

<!-- wp:image {"sizeSlug":"large","borderColor":"border-normal","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}},"border":{"width":"1px"}}} -->
<figure class="wp-block-image size-large has-custom-border" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><img src="<?php echo esc_url( vksb_pattern_image_url( $vksb_section['image'] ) ); ?>" alt="" class="has-border-color has-border-normal-border-color" style="border-width:1px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<?php endforeach; ?>

<?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
