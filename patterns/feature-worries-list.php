<?php
/**
 * Title: Features: List of worries on a diagonal background
 * Slug: vk-site-builder/feature-worries-list
 * Description: A section with a centered question as the heading, followed by white boxes that each have a worried face icon and a short worry, on a background split diagonally into white and light gray.
 * Categories: vk-site-builder-features
 * Keywords: features, worries, problems, list, icon
 *
 * @package VK_Site_Builder
 */

$vksb_worries = array(
	__( 'ホームページから新しいお客さまが来ない', 'vk-site-builder' ),
	__( 'デザインが古く、信頼感が伝わらない', 'vk-site-builder' ),
	__( 'スマートフォンで見ると読みにくい', 'vk-site-builder' ),
	__( 'ホームページの更新に時間がかかりすぎる', 'vk-site-builder' ),
);
?>
<!-- wp:group {"align":"full","style":{"color":{"gradient":"linear-gradient(125deg,var(--wp--preset--color--bg-primary) 44%,var(--wp--preset--color--bg-secondary) 44%)"},"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group alignfull has-background" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;background:linear-gradient(125deg,var(--wp--preset--color--bg-primary) 44%,var(--wp--preset--color--bg-secondary) 44%);padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-text-align-center is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php esc_html_e( 'こんなお悩みはありませんか？', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
<?php foreach ( $vksb_worries as $vksb_worry ) : ?>
<!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|60","bottom":"var:preset|spacing|50","left":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|50"}},"backgroundColor":"bg-primary","borderColor":"border-normal","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-border-color has-border-normal-border-color has-bg-primary-background-color has-background" style="border-width:1px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--60)"><?php echo vksb_vk_icon_only( 'fa-face-frown', 28 ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fill"},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.6"}},"fontSize":"large","className":"is-vk-trim-both"} -->
<p class="has-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700;line-height:1.6"><?php echo esc_html( $vksb_worry ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->

<?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
