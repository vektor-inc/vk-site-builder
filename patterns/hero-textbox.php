<?php
/**
 * Title: Hero: Photo with a translucent text box
 * Slug: vk-site-builder/hero-textbox
 * Description: A hero area with a full-width photo and a translucent white text box on the left, with a heading, a subtitle, a description, and a button.
 * Categories: vk-site-builder-hero
 * Keywords: hero, main visual, cover, text box
 * Layout: stack
 * Images: photo
 *
 * @package VK_Site_Builder
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( vksb_pattern_image_url( 'contact-image.jpg' ) ); ?>","dimRatio":0,"overlayColor":"bg-dark","isUserOverlayColor":true,"align":"full","style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( vksb_pattern_image_url( 'contact-image.jpg' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-bg-dark-background-color has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":"var:preset|spacing|80","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"560px","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:cover {"dimRatio":80,"overlayColor":"bg-primary","isUserOverlayColor":true,"minHeight":1,"minHeightUnit":"px","contentPosition":"top left","isDark":false,"style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|60","bottom":"0","left":"var:preset|spacing|60"}}},"textColor":"text-normal","layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-top-left has-text-normal-color has-text-color" style="padding-top:0;padding-right:var(--wp--preset--spacing--60);padding-bottom:0;padding-left:var(--wp--preset--spacing--60);min-height:1px"><span aria-hidden="true" class="wp-block-cover__background has-bg-primary-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__inner-container"><?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"fontSize":"xxx-large","className":"is-vk-trim-both"} -->
<h1 class="wp-block-heading has-xxx-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php echo vksb_nowrap_text( __( '<span class="text-nowrap">お気軽に</span><span class="text-nowrap">ご相談ください</span>', 'vk-site-builder' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h1>
<!-- /wp:heading -->

<?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontSize":"large","className":"is-vk-trim-both"} -->
<p class="has-primary-color has-text-color has-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php esc_html_e( '中小企業を、親身にサポートします', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'ちょっとした更新から全面リニューアルまで、ホームページのご質問にスタッフがお答えします。', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|60","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<?php echo vksb_vk_button( __( '詳しく見る', 'vk-site-builder' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|80","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover -->
