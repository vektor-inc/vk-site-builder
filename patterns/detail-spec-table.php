<?php
/**
 * Title: Details: Photo and specification table
 * Slug: vk-site-builder/detail-spec-table
 * Description: A two-column detailed explanation with a photo on the left, and a label, a heading, a text, and a table of specifications on the right.
 * Categories: vk-site-builder-details
 * Keywords: details, specifications, product, table, image and text
 *
 * @package VK_Site_Builder
 */

$vksb_specs = array(
	__( 'Plan', 'vk-site-builder' )             => __( 'Standard plan', 'vk-site-builder' ),
	__( 'Number of pages', 'vk-site-builder' )  => __( 'Up to 10 pages', 'vk-site-builder' ),
	__( 'Production time', 'vk-site-builder' )  => __( 'About 2 months', 'vk-site-builder' ),
	__( 'Supported devices', 'vk-site-builder' ) => __( 'Smartphones, tablets, and computers', 'vk-site-builder' ),
	__( 'Support', 'vk-site-builder' )          => __( 'Email and phone, for 1 year after launch', 'vk-site-builder' ),
	__( 'Price', 'vk-site-builder' )            => __( 'From 000,000 yen (tax included)', 'vk-site-builder' ),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-large" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( vksb_pattern_image_url( 'service-web.jpg' ) ); ?>" alt="" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"0.15em","textTransform":"uppercase"}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700;letter-spacing:0.15em;text-transform:uppercase"><?php esc_html_e( 'Specifications', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0;line-height:1.4"><?php esc_html_e( 'Standard website plan', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:0"><?php esc_html_e( 'Our most popular plan for small businesses. It includes everything you need to start, from planning to support after launch.', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:table {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"0"}}}} -->
<figure class="wp-block-table" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:0"><table class="has-fixed-layout"><tbody><?php foreach ( $vksb_specs as $vksb_label => $vksb_value ) : ?><tr><td><strong><?php echo esc_html( $vksb_label ); ?></strong></td><td><?php echo esc_html( $vksb_value ); ?></td></tr><?php endforeach; ?></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
