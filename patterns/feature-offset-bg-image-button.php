<?php
/**
 * Title: Features: Offset background with tall photos
 * Slug: vk-site-builder/feature-offset-bg-image-button
 * Description: Full-width rows on a light gray background that is shifted to one side. Each row has a heading, a text, and a button, and a tall photo that reaches the edge of the screen. The photo switches sides on each row.
 * Categories: vk-site-builder-features
 * Keywords: features, offset background, image and text, full width, half content width
 *
 * @package VK_Site_Builder
 */

$vksb_rows = array(
	array(
		'image' => 'about-office.jpg',
		'title' => __( 'Built to solve real problems', 'vk-site-builder' ),
		'text'  => __( 'Many businesses know a website matters, but are too busy to start, or find it hard to keep it up to date. We create tools that make running a website simple for everyone.', 'vk-site-builder' ),
	),
	array(
		'image' => 'pc-data.jpg',
		'title' => __( 'Made with your team in mind', 'vk-site-builder' ),
		'text'  => __( 'You do not need special knowledge to update the pages. Our staff show you how to use it, and stay with you after the website goes live.', 'vk-site-builder' ),
	),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo vksb_spacer( '80' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"align":"full","style":{"color":{"gradient":"linear-gradient(90deg,var(--wp--preset--color--bg-secondary) 76%,rgba(255,255,255,0) 76%)"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-background" style="background:linear-gradient(90deg,var(--wp--preset--color--bg-secondary) 76%,rgba(255,255,255,0) 76%);margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo vksb_spacer( '80' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:columns {"verticalAlignment":"center","align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|60","left":"0"}}}} -->
<div class="wp-block-columns alignfull are-vertically-aligned-center" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","className":"is-vk-content-width-half","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"var:preset|spacing|80"}}},"contentWidthHalf":true} -->
<div class="wp-block-column is-vertically-aligned-center is-vk-content-width-half" style="padding-top:0;padding-right:var(--wp--preset--spacing--80);padding-left:0;padding-bottom:0"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php echo esc_html( $vksb_rows[0]['title'] ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:0"><?php echo esc_html( $vksb_rows[0]['text'] ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<?php echo vksb_vk_button( __( 'Learn more', 'vk-site-builder' ), 'primary' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:cover {"url":"<?php echo esc_url( vksb_pattern_image_url( $vksb_rows[0]['image'] ) ); ?>","dimRatio":0,"overlayColor":"bg-primary","isUserOverlayColor":true,"minHeight":380,"isDark":false,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover is-light" style="margin-top:0;margin-bottom:0;min-height:380px"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( vksb_pattern_image_url( $vksb_rows[0]['image'] ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-bg-primary-background-color has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<?php echo vksb_spacer( '80' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->

<?php echo vksb_spacer( '80' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"align":"full","style":{"color":{"gradient":"linear-gradient(90deg,rgba(255,255,255,0) 24%,var(--wp--preset--color--bg-secondary) 24%)"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-background" style="background:linear-gradient(90deg,rgba(255,255,255,0) 24%,var(--wp--preset--color--bg-secondary) 24%);margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo vksb_spacer( '80' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:columns {"verticalAlignment":"center","align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|60","left":"0"}}},"className":"is-vk-row-reverse","reverse":true} -->
<div class="wp-block-columns alignfull are-vertically-aligned-center is-vk-row-reverse" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","className":"is-vk-content-width-half","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|80","right":"0"}}},"contentWidthHalf":true} -->
<div class="wp-block-column is-vertically-aligned-center is-vk-content-width-half" style="padding-top:0;padding-right:0;padding-left:var(--wp--preset--spacing--80);padding-bottom:0"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php echo esc_html( $vksb_rows[1]['title'] ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:0"><?php echo esc_html( $vksb_rows[1]['text'] ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<?php echo vksb_vk_button( __( 'Learn more', 'vk-site-builder' ), 'primary' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:cover {"url":"<?php echo esc_url( vksb_pattern_image_url( $vksb_rows[1]['image'] ) ); ?>","dimRatio":0,"overlayColor":"bg-primary","isUserOverlayColor":true,"minHeight":380,"isDark":false,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover is-light" style="margin-top:0;margin-bottom:0;min-height:380px"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( vksb_pattern_image_url( $vksb_rows[1]['image'] ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-bg-primary-background-color has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<?php echo vksb_spacer( '80' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->

<?php echo vksb_spacer( '80' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
