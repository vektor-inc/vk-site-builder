<?php
/**
 * Title: FAQ: Accordion
 * Slug: vk-site-builder/faq-accordion
 * Description: A section that lists frequently asked questions as an accordion. Each answer opens when the question is clicked.
 * Categories: vk-site-builder-faq
 * Keywords: faq, questions, accordion, details
 *
 * @package VK_Site_Builder
 */

$vksb_faqs = array(
	array(
		'question' => __( 'How much does a website cost?', 'vk-site-builder' ),
		'answer'   => __( 'It depends on the number of pages and the features you need. We send you a free estimate after a short hearing.', 'vk-site-builder' ),
	),
	array(
		'question' => __( 'How long does it take to launch?', 'vk-site-builder' ),
		'answer'   => __( 'It usually takes two to three months from the first meeting to launch.', 'vk-site-builder' ),
	),
	array(
		'question' => __( 'Can I update the website myself?', 'vk-site-builder' ),
		'answer'   => __( 'Yes. We build the site with WordPress and show you how to update news and pages after launch.', 'vk-site-builder' ),
	),
	array(
		'question' => __( 'Can you also take care of the domain and server?', 'vk-site-builder' ),
		'answer'   => __( 'Yes. We can help you choose and set them up, or we can use the ones you already have.', 'vk-site-builder' ),
	),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><!-- wp:spacer {"height":"var:preset|spacing|70","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-text-align-center is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php esc_html_e( 'Frequently asked questions', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|60","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
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
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|70","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
