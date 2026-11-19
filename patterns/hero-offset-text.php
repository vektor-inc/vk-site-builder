<?php
/**
 * Title: Hero: Photo with an offset text box
 * Slug: vk-site-builder/hero-offset-text
 * Description: A hero area with a wide photo and a white text box that overlaps its bottom edge, followed by an introduction.
 * Categories: vk-site-builder-hero
 * Keywords: hero, main visual, cover
 * Layout: stack
 * Images: photo
 *
 * @package VK_Site_Builder
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( vksb_pattern_image_url( 'about-office.jpg' ) ); ?>","dimRatio":0,"overlayColor":"bg-primary","isUserOverlayColor":true,"minHeight":60,"minHeightUnit":"vh","contentPosition":"bottom center","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light has-custom-content-position is-position-bottom-center" style="padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50);min-height:60vh"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( vksb_pattern_image_url( 'about-office.jpg' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-bg-primary-background-color has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"0","left":"var:preset|spacing|60"}}},"backgroundColor":"bg-primary","textColor":"text-normal","layout":{"type":"default"}} -->
<div class="wp-block-group has-text-normal-color has-bg-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:0;padding-left:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"fontSize":"xxx-large","className":"is-vk-trim-both"} -->
<h1 class="wp-block-heading has-text-align-center has-xxx-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php echo vksb_nowrap_text( __( '<span class="text-nowrap">御社の魅力を、</span><span class="text-nowrap">わかりやすく</span>', 'vk-site-builder' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h1>
<!-- /wp:heading -->

<?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontSize":"large","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-primary-color has-text-color has-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php esc_html_e( '地域の会社のためのホームページ制作', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><!-- wp:spacer {"height":"var:preset|spacing|60","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="has-text-align-center is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php esc_html_e( '御社ならではの魅力をうかがい、訪れた人にひと目で伝わるホームページに仕上げます。企画から公開まで、一歩ずつご一緒します。', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|70","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
