<?php
/**
 * Title: Hero: Centered on dark background
 * Slug: vk-site-builder/hero-centered-dark
 * Description: A full-width hero with a centered heading, lead text, and two buttons on a dark background.
 * Categories: vk-site-builder-hero, banner
 * Keywords: hero, header, main visual
 *
 * @package VK_Site_Builder
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"backgroundColor":"bg-dark","textColor":"text-normal-darkbg","layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group alignfull has-text-normal-darkbg-color has-bg-dark-background-color has-text-color has-background" style="padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><!-- wp:spacer {"height":"var:preset|spacing|70","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"text-secondary-darkbg","fontSize":"small"} -->
<p class="has-text-align-center has-text-secondary-darkbg-color has-text-color has-small-font-size" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'Web production for small businesses', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"xxx-large"} -->
<h1 class="wp-block-heading has-text-align-center has-xxx-large-font-size" style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Turn your strengths into a website that brings customers', 'vk-site-builder' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"0"}}},"fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size" style="margin-bottom:0"><?php esc_html_e( 'We listen to what makes your business special and shape it into pages that visitors understand at a glance.', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|60","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"bg-primary","textColor":"bg-dark"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-bg-dark-color has-bg-primary-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'Contact us', 'vk-site-builder' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'See our work', 'vk-site-builder' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"var:preset|spacing|70","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
