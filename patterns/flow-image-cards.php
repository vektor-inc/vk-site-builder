<?php
/**
 * Title: Flow: Image cards
 * Slug: vk-site-builder/flow-image-cards
 * Description: A section that shows the steps of a process as cards on a light background, each with an image, a step label, a title, and a description.
 * Categories: vk-site-builder-flow
 * Keywords: flow, steps, process, cards, image
 *
 * @package VK_Site_Builder
 */

$vksb_steps = array(
	array(
		'title' => __( 'Choose a plan', 'vk-site-builder' ),
		'text'  => __( 'Compare the plans and pick the one that suits you best.', 'vk-site-builder' ),
	),
	array(
		'title' => __( 'Place your order', 'vk-site-builder' ),
		'text'  => __( 'Enter your details on the order page and confirm the content.', 'vk-site-builder' ),
	),
	array(
		'title' => __( 'Receive the product', 'vk-site-builder' ),
		'text'  => __( 'We ship within three business days. Track your delivery online.', 'vk-site-builder' ),
	),
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:0"><!-- wp:spacer {"height":"var:preset|spacing|70","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-text-align-center is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'How to order', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-small-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"><?php esc_html_e( 'Order online in three easy steps', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|60","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"grid","minimumColumnWidth":"16rem"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
<?php foreach ( $vksb_steps as $vksb_index => $vksb_step ) : ?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"bg-secondary","layout":{"type":"default"}} -->
<div class="wp-block-group has-bg-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-large" style="margin-top:0;margin-bottom:0"><img alt="" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}},"typography":{"letterSpacing":"0.1em"}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0;letter-spacing:0.1em"><?php echo esc_html( sprintf( 'STEP %02d', $vksb_index + 1 ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"fontSize":"x-large","className":"is-vk-trim-both"} -->
<h3 class="wp-block-heading has-x-large-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"><?php echo esc_html( $vksb_step['title'] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><?php echo esc_html( $vksb_step['text'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|70","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
