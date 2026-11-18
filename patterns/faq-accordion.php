<?php
/**
 * Title: FAQ: Accordion
 * Slug: vk-site-builder/faq-accordion
 * Description: A section that lists frequently asked questions as an accordion with Q and A marks, using the VK Blocks FAQ block. Each answer opens when the question is clicked.
 * Categories: vk-site-builder-faq
 * Keywords: faq, questions, accordion, details
 * Layout: stack
 * Images: none
 *
 * @package VK_Site_Builder
 */

$vksb_faqs = array(
	array(
		'question' => __( 'ホームページの制作費用はどのくらいですか？', 'vk-site-builder' ),
		'answer'   => __( 'ページ数や必要な機能によって変わります。ヒアリングのあと、無料でお見積りをお送りします。', 'vk-site-builder' ),
	),
	array(
		'question' => __( '公開までにどのくらいかかりますか？', 'vk-site-builder' ),
		'answer'   => __( '最初の打ち合わせから公開まで、通常2〜3か月ほどです。', 'vk-site-builder' ),
	),
	array(
		'question' => __( '公開後、自分で更新できますか？', 'vk-site-builder' ),
		'answer'   => __( 'はい。WordPress で制作し、公開後にお知らせやページの更新方法をご説明します。', 'vk-site-builder' ),
	),
	array(
		'question' => __( 'ドメインやサーバーの手配もお願いできますか？', 'vk-site-builder' ),
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

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
<?php foreach ( $vksb_faqs as $vksb_index => $vksb_faq ) : ?>
<?php $vksb_show = 0 === $vksb_index ? 'open' : 'close'; // 最初の質問だけ開いておく. ?>
<!-- wp:vk-blocks/faq2 {"showContent":"<?php echo esc_attr( $vksb_show ); ?>","className":"is-style-vk_faq-bgfill-square"} -->
<div class="wp-block-vk-blocks-faq2 vk_faq  [accordion_trigger_switch] is-style-vk_faq-bgfill-square"><div class="vk_faq-header"></div><dl class="vk_faq-body"><!-- wp:vk-blocks/faq2-q -->
<dt class="wp-block-vk-blocks-faq2-q vk_faq_title" aria-label="質問"><!-- wp:paragraph -->
<p><?php echo esc_html( $vksb_faq['question'] ); ?></p>
<!-- /wp:paragraph --></dt>
<!-- /wp:vk-blocks/faq2-q -->

<!-- wp:vk-blocks/faq2-a -->
<dd class="wp-block-vk-blocks-faq2-a vk_faq_content" aria-label="回答"><!-- wp:paragraph -->
<p><?php echo esc_html( $vksb_faq['answer'] ); ?></p>
<!-- /wp:paragraph --></dd>
<!-- /wp:vk-blocks/faq2-a --></dl><div class="vk_faq-footer"></div></div>
<!-- /wp:vk-blocks/faq2 -->
<?php endforeach; ?>
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|70","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
