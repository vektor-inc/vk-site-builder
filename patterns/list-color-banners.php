<?php
/**
 * Title: List: Full-width color banners
 * Slug: vk-site-builder/list-color-banners
 * Description: Four colored columns that fill the screen width with no gap, each with a title, a label, a short text, and a "learn more" text at the bottom. For a list of courses or programs.
 * Categories: vk-site-builder-list
 * Keywords: list, courses, programs, menu, banners, full width, color
 * Layout: grid
 * Images: none
 *
 * @package VK_Site_Builder
 */

$vksb_items = array(
	array(
		'title' => __( '<span class="text-nowrap">ゲーム</span><span class="text-nowrap">プログラミング</span>', 'vk-site-builder' ),
		'label' => __( '対象：小学3年生から', 'vk-site-builder' ),
		'text'  => __( 'かんたんな 2D ゲームづくりを通して、プログラミングの基本を学びます。最後に自分だけのゲームを完成させます。', 'vk-site-builder' ),
		'color' => 'primary',
	),
	array(
		'title' => __( '<span class="text-nowrap">ロボット</span><span class="text-nowrap">プログラミング</span>', 'vk-site-builder' ),
		'label' => __( '対象：小学1年生から', 'vk-site-builder' ),
		'text'  => __( 'ロボットを動かしながら、センサーの使い方や順番に考える力を楽しく身につけます。', 'vk-site-builder' ),
		'color' => 'primary-hover',
	),
	array(
		'title' => __( 'アプリ開発', 'vk-site-builder' ),
		'label' => __( '対象：小学5年生から', 'vk-site-builder' ),
		'text'  => __( 'スマートフォン向けのアプリを企画からつくり、アイデアを形にする流れを体験します。', 'vk-site-builder' ),
		'color' => 'primary',
	),
	array(
		'title' => __( 'デジタルアート', 'vk-site-builder' ),
		'label' => __( '対象：小学1年生から', 'vk-site-builder' ),
		'text'  => __( 'プログラミングで絵やアニメーションを動かし、オリジナルの作品を仕上げます。', 'vk-site-builder' ),
		'color' => 'primary-hover',
	),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns alignfull" style="margin-top:0;margin-bottom:0">
<?php foreach ( $vksb_items as $vksb_item ) : ?>
<!-- wp:column {"backgroundColor":"<?php echo esc_attr( $vksb_item['color'] ); ?>","textColor":"bg-primary","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|60","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-column has-bg-primary-color has-<?php echo esc_attr( $vksb_item['color'] ); ?>-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"dimensions":{"minHeight":"100%"},"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="min-height:100%"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"textColor":"bg-primary","fontSize":"x-large","className":"is-vk-trim-both"} -->
<h3 class="wp-block-heading has-text-align-center has-bg-primary-color has-text-color has-x-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php echo vksb_nowrap_text( $vksb_item['title'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h3>
<!-- /wp:heading -->

<?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|bg-primary","width":"1px"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|50","bottom":"var:preset|spacing|30","left":"var:preset|spacing|50"}}},"fontSize":"x-small","className":"is-vk-trim-both"} -->
<p class="has-border-color has-x-small-font-size is-vk-trim-both" style="border-color:var(--wp--preset--color--bg-primary);border-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)"><?php echo esc_html( $vksb_item['label'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php echo esc_html( $vksb_item['text'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"right","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"className":"is-vk-trim-both"} -->
<p class="has-text-align-right is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700"><?php esc_html_e( '詳しく見る →', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->
<?php endforeach; ?>
</div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
