<?php
/**
 * Title: CTA: Band in the main color
 * Slug: vk-site-builder/cta-primary-band
 * Description: A call to action on a full-width band in the main color, with a heading and a text on the left and a button on the right.
 * Categories: vk-site-builder-cta
 * Keywords: cta, call to action, contact, band
 * Layout: stack
 * Images: none
 *
 * @package VK_Site_Builder
 */

?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"backgroundColor":"primary","textColor":"bg-primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-bg-primary-color has-primary-background-color has-text-color has-background" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><!-- wp:spacer {"height":"var:preset|spacing|70","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"textColor":"bg-primary","className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-bg-primary-color has-text-color is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php echo vksb_nowrap_text( __( '<span class="text-nowrap">まずはお気軽に</span><span class="text-nowrap">ご相談ください</span>', 'vk-site-builder' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h2>
<!-- /wp:heading -->

<?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php esc_html_e( '通常、1営業日以内にご返信します。', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php echo vksb_vk_button( __( 'お問い合わせ', 'vk-site-builder' ), 'white' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|70","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
