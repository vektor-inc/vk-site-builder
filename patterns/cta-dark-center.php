<?php
/**
 * Title: CTA: Centered on a dark background
 * Slug: vk-site-builder/cta-dark-center
 * Description: A call to action on a full-width dark background, with a centered heading, a short text, and two buttons.
 * Categories: vk-site-builder-cta
 * Keywords: cta, call to action, contact, dark
 *
 * @package VK_Site_Builder
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"backgroundColor":"bg-dark","textColor":"text-normal-darkbg","layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group alignfull has-text-normal-darkbg-color has-bg-dark-background-color has-text-color has-background" style="padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"0.15em","textTransform":"uppercase"}},"textColor":"bg-primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-bg-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700;letter-spacing:0.15em;text-transform:uppercase"><?php esc_html_e( 'Contact', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"textColor":"bg-primary","className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-text-align-center has-bg-primary-color has-text-color is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0;line-height:1.4"><?php esc_html_e( 'Let us talk about your website', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="has-text-align-center is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:0"><?php esc_html_e( 'Tell us what you have in mind. The first consultation and the estimate are free.', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><?php echo vksb_vk_button( __( 'Contact us', 'vk-site-builder' ), 'white' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<?php echo vksb_vk_button( __( 'See our plans', 'vk-site-builder' ), 'outline-white' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->

<?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
