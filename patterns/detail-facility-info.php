<?php
/**
 * Title: Details: Facility description and information table
 * Slug: vk-site-builder/detail-facility-info
 * Description: A detailed explanation of a facility with a centered heading and a wide photo, followed by a description on the left and a table of information such as address and opening hours on the right.
 * Categories: vk-site-builder-details
 * Keywords: details, facility, access, opening hours, table, image and text
 *
 * @package VK_Site_Builder
 */

$vksb_info = array(
	__( 'Address', 'vk-site-builder' )      => __( '0-0-0 Sample Town, Sample City', 'vk-site-builder' ),
	__( 'Opening hours', 'vk-site-builder' ) => __( '9:00 to 18:00', 'vk-site-builder' ),
	__( 'Closed', 'vk-site-builder' )       => __( 'Saturdays, Sundays, and holidays', 'vk-site-builder' ),
	__( 'Seats', 'vk-site-builder' )        => __( '20 seats', 'vk-site-builder' ),
	__( 'Access', 'vk-site-builder' )       => __( '5 minutes on foot from Sample Station', 'vk-site-builder' ),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"backgroundColor":"bg-secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-bg-secondary-background-color has-background" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-text-align-center is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php esc_html_e( 'About our office', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"><?php esc_html_e( 'Visitors are always welcome', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:image {"aspectRatio":"21/9","scale":"cover","sizeSlug":"large","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-large" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( vksb_pattern_image_url( 'about-office.jpg' ) ); ?>" alt="" style="aspect-ratio:21/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"fontSize":"x-large","className":"is-vk-trim-both"} -->
<h3 class="wp-block-heading has-x-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php esc_html_e( 'A place to talk about your website', 'vk-site-builder' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><?php esc_html_e( 'Our office is on the third floor of a building near the station. The meeting room has a large screen, so we can look at your website together while we talk.', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><?php esc_html_e( 'If you would like to visit, please contact us in advance. We can also meet online if that is easier for you.', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"fontSize":"x-large","className":"is-vk-trim-both"} -->
<h3 class="wp-block-heading has-x-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php esc_html_e( 'Information', 'vk-site-builder' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:table {"className":"is-style-vk-table-border-top-bottom","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}},"fontSize":"small"} -->
<figure class="wp-block-table is-style-vk-table-border-top-bottom has-small-font-size" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><table><tbody><?php foreach ( $vksb_info as $vksb_label => $vksb_value ) : ?><tr><td><strong><?php echo esc_html( $vksb_label ); ?></strong></td><td><?php echo esc_html( $vksb_value ); ?></td></tr><?php endforeach; ?></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
