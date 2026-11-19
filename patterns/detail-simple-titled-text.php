<?php
/**
 * Title: Details: Numbered headings and texts
 * Slug: vk-site-builder/detail-simple-titled-text
 * Description: A simple explanation with a heading and a text, followed by items stacked vertically. Each item has a numbered label and a heading, marked with a line on the left, and a text below, and a wide screenshot at the end. Suited for explaining options or points with one image.
 * Categories: vk-site-builder-details
 * Keywords: details, options, plans, numbered, text, screenshot, simple
 * Layout: stack
 * Images: figure, photo
 *
 * @package VK_Site_Builder
 */

$vksb_items = array(
	array(
		'num'   => '01',
		'label' => __( '基本', 'vk-site-builder' ),
		'title' => __( '<span class="text-nowrap">かんたん設定で</span><span class="text-nowrap">始める</span>', 'vk-site-builder' ),
		'text'  => __( '必要な項目だけを入力すれば、すぐに使い始められます。細かな設定は、おすすめの値があらかじめ入っているので、変えなくてもそのまま使えます。迷ったときは、まずこちらを選んでください。あとから詳細設定に切り替えても、入力した内容はそのまま引き継がれます。はじめて使う方や、まずは試してみたい方に向いています。', 'vk-site-builder' ),
	),
	array(
		'num'   => '02',
		'label' => __( '細かく調整したい方', 'vk-site-builder' ),
		'title' => __( '<span class="text-nowrap">詳細設定で</span><span class="text-nowrap">調整する</span>', 'vk-site-builder' ),
		'text'  => __( '表示や動きを、項目ごとに細かく変えられます。通知を送る相手やタイミング、画面に出す情報の順番なども、運用に合わせて決められます。設定した内容は書き出して保存できるので、別の環境に同じ設定を移すときも手間がかかりません。社内の決まりに合わせて調整したい方や、複数の担当者で使う方に向いています。', 'vk-site-builder' ),
	),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php echo vksb_nowrap_text( __( '<span class="text-nowrap">使い方は、</span><span class="text-nowrap">2 つから選べます</span>', 'vk-site-builder' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h2>
<!-- /wp:heading -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php esc_html_e( '目的に合う方を選んでください。あとから切り替えることもできます。', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<?php foreach ( $vksb_items as $vksb_index => $vksb_item ) : ?><?php if ( $vksb_index > 0 ) : ?><?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<?php endif; ?><!-- wp:group {"style":{"border":{"left":{"color":"var:preset|color|primary","width":"3px"}},"spacing":{"padding":{"left":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-left-color:var(--wp--preset--color--primary);border-left-width:3px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"0.08em"}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700;letter-spacing:0.08em">PLAN <?php echo esc_html( $vksb_item['num'] ); ?>｜<?php echo esc_html( $vksb_item['label'] ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '40' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"fontSize":"xx-large","className":"is-vk-trim-both"} -->
<h3 class="wp-block-heading has-xx-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php echo vksb_nowrap_text( $vksb_item['title'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php echo esc_html( $vksb_item['text'] ); ?></p>
<!-- /wp:paragraph -->

<?php endforeach; ?><?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:image {"sizeSlug":"large","borderColor":"border-normal","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"width":"1px"}}} -->
<figure class="wp-block-image size-large has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( vksb_pattern_image_url( 'dummy-IT-service.jpg' ) ); ?>" alt="" class="has-border-color has-border-normal-border-color" style="border-width:1px"/></figure>
<!-- /wp:image -->

<?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
