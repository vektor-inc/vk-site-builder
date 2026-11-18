<?php
/**
 * Title: Flow: Number cards
 * Slug: vk-site-builder/flow-number-cards
 * Description: A section that shows the steps of a process as bordered cards without images, each with a step label with a number, a title, and a short description. The cards wrap to the next row as the number of steps grows.
 * Categories: vk-site-builder-flow
 * Keywords: flow, steps, process, cards, numbers
 * Layout: grid
 * Images: none
 *
 * @package VK_Site_Builder
 */

$vksb_steps = array(
	array(
		'title' => __( 'お申し込み', 'vk-site-builder' ),
		'text'  => __( 'フォームから、プランを選んでお申し込みください。', 'vk-site-builder' ),
	),
	array(
		'title' => __( '初期設定', 'vk-site-builder' ),
		'text'  => __( '管理画面の情報をお預かりし、こちらで設定を済ませます。', 'vk-site-builder' ),
	),
	array(
		'title' => __( '現状の診断', 'vk-site-builder' ),
		'text'  => __( 'サイトの状態を調べて、気になる点をレポートでお知らせします。', 'vk-site-builder' ),
	),
	array(
		'title' => __( '運用開始', 'vk-site-builder' ),
		'text'  => __( '毎月の更新と点検を始めます。結果は月ごとにご報告します。', 'vk-site-builder' ),
	),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-text-align-center is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php esc_html_e( '導入の流れ', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"><?php esc_html_e( 'お申し込みから運用開始まで、4 つのステップで進みます', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","minimumColumnWidth":"14rem"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
<?php foreach ( $vksb_steps as $vksb_index => $vksb_step ) : ?>
<!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"borderColor":"border-normal","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-border-normal-border-color" style="border-width:1px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"0.15em","textTransform":"uppercase"}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700;letter-spacing:0.15em;text-transform:uppercase"><?php echo esc_html( sprintf( 'STEP %02d', $vksb_index + 1 ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"fontSize":"x-large","className":"is-vk-trim-both"} -->
<h3 class="wp-block-heading has-x-large-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0;line-height:1.4"><?php echo esc_html( $vksb_step['title'] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}},"fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-small-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><?php echo esc_html( $vksb_step['text'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->

<?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
