<?php
/**
 * Title: FAQ: Accordion
 * Slug: vk-site-builder/faq-accordion
 * Description: A section that lists frequently asked questions as an accordion, separated by thin lines, with a Q in the main color and an A in gray. It uses the VK Blocks Pro accordion block. Each answer opens when the question is clicked.
 * Categories: vk-site-builder-faq
 * Keywords: faq, questions, accordion, details
 * Layout: stack
 * Images: none
 *
 * @package VK_Site_Builder
 */

$vksb_faqs = array(
	array(
		'question' => __( '<span class="text-nowrap">ホームページの</span><span class="text-nowrap">制作費用は</span><span class="text-nowrap">どのくらいですか？</span>', 'vk-site-builder' ),
		'answer'   => __( 'ページ数や必要な機能によって変わります。ヒアリングのあと、無料でお見積りします。', 'vk-site-builder' ),
	),
	array(
		'question' => __( '<span class="text-nowrap">公開までに</span><span class="text-nowrap">どのくらい</span><span class="text-nowrap">かかりますか？</span>', 'vk-site-builder' ),
		'answer'   => __( '最初の打ち合わせから公開まで、通常2〜3か月ほどです。', 'vk-site-builder' ),
	),
	array(
		'question' => __( '<span class="text-nowrap">公開後、</span><span class="text-nowrap">自分で更新できますか？</span>', 'vk-site-builder' ),
		'answer'   => __( 'はい。WordPress で制作し、公開後にお知らせやページの更新方法をご説明します。', 'vk-site-builder' ),
	),
	array(
		'question' => __( '<span class="text-nowrap">ドメインやサーバーの</span><span class="text-nowrap">手配も</span><span class="text-nowrap">お願いできますか？</span>', 'vk-site-builder' ),
		'answer'   => __( 'はい。選び方から設定までお手伝いします。すでにお持ちのものを使うこともできます。', 'vk-site-builder' ),
	),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><!-- wp:spacer {"height":"var:preset|spacing|70","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-text-align-center is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php esc_html_e( 'よくあるご質問', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|60","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border-normal);border-top-width:1px;margin-top:0;margin-bottom:0">
<?php foreach ( $vksb_faqs as $vksb_index => $vksb_faq ) : ?>
<?php $vksb_state = 0 === $vksb_index ? 'open' : 'close'; // 最初の質問だけ開いておく. ?>
<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;margin-top:0;margin-bottom:0"><?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:vk-blocks/accordion {"initialState":"<?php echo esc_attr( $vksb_state ); ?>","className":"is-style-vk_accordion-plain vk_block-margin-0--margin-bottom"} -->
<div class="wp-block-vk-blocks-accordion vk_accordion is-style-vk_accordion-plain vk_block-margin-0--margin-bottom" data-initial-state="<?php echo esc_attr( $vksb_state ); ?>" data-initial-state-mobile="" data-initial-state-tablet="" data-initial-state-desktop="" data-device-specific="false"><!-- wp:vk-blocks/accordion-trigger -->
<div class="wp-block-vk-blocks-accordion-trigger vk_accordion-trigger"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1"}},"textColor":"primary","fontSize":"xx-large","className":"is-vk-trim-both"} -->
<p class="has-primary-color has-text-color has-xx-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700;line-height:1">Q</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700"},"layout":{"selfStretch":"fill"}},"fontSize":"large","className":"is-vk-trim-both"} -->
<p class="has-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700"><?php echo vksb_nowrap_text( $vksb_faq['question'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><span class="vk_accordion-toggle vk_accordion-toggle-close"></span></div>
<!-- /wp:vk-blocks/accordion-trigger -->

<!-- wp:vk-blocks/accordion-target -->
<div class="wp-block-vk-blocks-accordion-target vk_accordion-target"><?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1"}},"textColor":"text-secondary","fontSize":"xx-large","className":"is-vk-trim-both"} -->
<p class="has-text-secondary-color has-text-color has-xx-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700;line-height:1">A</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fill"}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php echo esc_html( $vksb_faq['answer'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:vk-blocks/accordion-target --></div>
<!-- /wp:vk-blocks/accordion -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|70","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
