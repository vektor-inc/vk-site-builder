<?php
/**
 * Title: FAQ: Guide with accordion beside it
 * Slug: vk-site-builder/faq-split
 * Description: A two-column section with a heading, a lead text, and a contact button on the left, and frequently asked questions as an accordion on the right.
 * Categories: vk-site-builder-faq
 * Keywords: faq, questions, accordion, contact
 *
 * @package VK_Site_Builder
 */

$vksb_faqs = array(
	array(
		'question' => __( 'Is the first consultation free?', 'vk-site-builder' ),
		'answer'   => __( 'Yes. The first consultation and the estimate are free of charge.', 'vk-site-builder' ),
	),
	array(
		'question' => __( 'Can you renew our current website?', 'vk-site-builder' ),
		'answer'   => __( 'Yes. We check your current website and suggest what to keep and what to improve.', 'vk-site-builder' ),
	),
	array(
		'question' => __( 'Do you write the text and take photos?', 'vk-site-builder' ),
		'answer'   => __( 'We can help with both. Writing and photography are available as options.', 'vk-site-builder' ),
	),
	array(
		'question' => __( 'How do I pay?', 'vk-site-builder' ),
		'answer'   => __( 'We send an invoice after delivery. Payment is by bank transfer.', 'vk-site-builder' ),
	),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><!-- wp:spacer {"height":"var:preset|spacing|70","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"width":"35%"} -->
<div class="wp-block-column" style="flex-basis:35%"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"0.15em","textTransform":"uppercase"}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700;letter-spacing:0.15em;text-transform:uppercase">FAQ</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0;line-height:1.4"><?php esc_html_e( 'Common questions', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><?php esc_html_e( 'If you cannot find the answer here, feel free to contact us.', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|60","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<?php echo vksb_vk_button( __( 'Contact us', 'vk-site-builder' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:column -->

<!-- wp:column {"width":"65%"} -->
<div class="wp-block-column" style="flex-basis:65%"><!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border-normal);border-top-width:1px;margin-top:0;margin-bottom:0">
<?php foreach ( $vksb_faqs as $vksb_faq ) : ?>
<!-- wp:details {"style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"large"} -->
<details class="wp-block-details has-large-font-size" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);font-style:normal;font-weight:700"><summary><?php echo esc_html( $vksb_faq['question'] ); ?></summary><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"medium","className":"is-vk-trim-both"} -->
<p class="has-medium-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0;font-style:normal;font-weight:400"><?php echo esc_html( $vksb_faq['answer'] ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->
<?php endforeach; ?>
</div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|70","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
