<?php
/**
 * Title: Problem and solution: Side by side pairs
 * Slug: vk-site-builder/problem-pairs
 * Description: A section that shows each problem and its solution side by side, with the problem in a gray box and the solution in a box framed in the main color.
 * Categories: vk-site-builder-problem-solution
 * Keywords: problems, worries, solution, before and after
 *
 * @package VK_Site_Builder
 */

$vksb_pairs = array(
	array(
		'problem'  => __( 'Our website does not look good on smartphones.', 'vk-site-builder' ),
		'solution' => __( 'We rebuild it with a design that fits every screen, from phones to large monitors.', 'vk-site-builder' ),
	),
	array(
		'problem'  => __( 'We always have to ask someone to update the website.', 'vk-site-builder' ),
		'solution' => __( 'We build it with WordPress and teach you how to update news and pages yourself.', 'vk-site-builder' ),
	),
	array(
		'problem'  => __( 'We get few inquiries from the website.', 'vk-site-builder' ),
		'solution' => __( 'We rethink the page structure and the contact form so that visitors can reach you easily.', 'vk-site-builder' ),
	),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><!-- wp:spacer {"height":"var:preset|spacing|70","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-text-align-center is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php esc_html_e( 'How we solve your problems', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|60","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
<?php foreach ( $vksb_pairs as $vksb_pair ) : ?>
<!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"bg-secondary"} -->
<div class="wp-block-column has-bg-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><?php echo vksb_vk_icon( 'fa-exclamation', 14, 7, 'text-normal' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"0.15em","textTransform":"uppercase"}},"fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700;letter-spacing:0.15em;text-transform:uppercase"><?php esc_html_e( 'Problem', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}},"fontSize":"large","className":"is-vk-trim-both"} -->
<p class="has-large-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><?php echo esc_html( $vksb_pair['problem'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"borderColor":"primary"} -->
<div class="wp-block-column has-border-color has-primary-border-color" style="border-width:1px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><?php echo vksb_vk_icon( 'fa-lightbulb', 14, 7 ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"0.15em","textTransform":"uppercase"}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700;letter-spacing:0.15em;text-transform:uppercase"><?php esc_html_e( 'Solution', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><?php echo esc_html( $vksb_pair['solution'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|70","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
