<?php
/**
 * Title: Features: Concept with a wide photo and a long text
 * Slug: vk-site-builder/feature-concept
 * Description: A concept section. A label and a large heading sit next to a wide photo that reaches the edge of the screen, followed by a tall photo and a long text that explains the idea.
 * Categories: vk-site-builder-features
 * Keywords: features, concept, philosophy, message, full width, half content width
 *
 * @package VK_Site_Builder
 */

$vksb_paragraphs = array(
	__( 'We design websites that grow with your business for ten, twenty, and thirty years. A website is the place where your customers first meet you, so it should feel like you.', 'vk-site-builder' ),
	__( 'We start by listening. We visit your office, talk with your staff, and learn what your customers value. Only then do we decide the structure, the words, and the photos.', 'vk-site-builder' ),
	__( 'The way people use the web keeps changing. We keep learning new tools and ideas, and use them only when they truly help your customers.', 'vk-site-builder' ),
	__( 'With the experience we have built over many years, we turn your wishes into a website that you can be proud of, and stay with you after it goes live.', 'vk-site-builder' ),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo vksb_spacer( '80' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:columns {"verticalAlignment":"center","align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|60","left":"0"}}}} -->
<div class="wp-block-columns alignfull are-vertically-aligned-center" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","className":"is-vk-content-width-half","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"var:preset|spacing|80"}}},"contentWidthHalf":true} -->
<div class="wp-block-column is-vertically-aligned-center is-vk-content-width-half" style="padding-top:0;padding-right:var(--wp--preset--spacing--80);padding-bottom:0;padding-left:0"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"0.15em","textTransform":"uppercase"}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700;letter-spacing:0.15em;text-transform:uppercase"><?php esc_html_e( 'Our concept', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}},"typography":{"lineHeight":"1.5"}},"fontSize":"xxx-large","className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-xxx-large-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0;line-height:1.5"><?php esc_html_e( 'Websites that carry your story to the next generation', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-large" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( vksb_pattern_image_url( 'about-office.jpg' ) ); ?>" alt="" style="aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<?php echo vksb_spacer( '80' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-large" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( vksb_pattern_image_url( 'about-president.jpg' ) ); ?>" alt="" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
<?php foreach ( $vksb_paragraphs as $vksb_index => $vksb_paragraph ) : ?>
<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"<?php echo 0 === $vksb_index ? '0' : 'var:preset|spacing|50'; ?>","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:<?php echo 0 === $vksb_index ? '0' : 'var(--wp--preset--spacing--50)'; ?>;margin-bottom:0"><?php echo esc_html( $vksb_paragraph ); ?></p>
<!-- /wp:paragraph -->
<?php endforeach; ?>
</div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<?php echo vksb_spacer( '80' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
