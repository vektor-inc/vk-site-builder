<?php
/**
 * Title: Hero: Cover with left-aligned text
 * Slug: vk-site-builder/hero-cover-left
 * Description: A tall full-width cover hero with left-aligned text. Add a background image to finish it.
 * Categories: vk-site-builder-hero, banner
 * Keywords: hero, header, main visual, cover, background image
 *
 * @package VK_Site_Builder
 */

?>
<!-- wp:cover {"overlayColor":"primary","align":"full","style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":"var:preset|spacing|80","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"xxx-large","className":"is-vk-trim-both"} -->
<h1 class="wp-block-heading has-xxx-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'Small team, careful work', 'vk-site-builder' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}},"fontSize":"medium","className":"is-vk-trim-both"} -->
<p class="has-medium-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><?php esc_html_e( 'We take on a limited number of projects each month so that every client gets our full attention.', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|60","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'About our team', 'vk-site-builder' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|80","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover -->
