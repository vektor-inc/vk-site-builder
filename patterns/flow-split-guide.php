<?php
/**
 * Title: Flow: Guide with steps beside it
 * Slug: vk-site-builder/flow-split-guide
 * Description: A two-column section with a heading, a lead text, and a button on the left, and the steps of a process on the right.
 * Categories: vk-site-builder-flow
 * Keywords: flow, steps, process, guide
 *
 * @package VK_Site_Builder
 */

$vksb_steps = array(
	array(
		'title' => __( 'Create an account', 'vk-site-builder' ),
		'text'  => __( 'Sign up with your email address. No credit card is needed.', 'vk-site-builder' ),
	),
	array(
		'title' => __( 'Set up your profile', 'vk-site-builder' ),
		'text'  => __( 'Add your company name and logo so your team can find you.', 'vk-site-builder' ),
	),
	array(
		'title' => __( 'Invite your team', 'vk-site-builder' ),
		'text'  => __( 'Send invitations to your colleagues and start working together.', 'vk-site-builder' ),
	),
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:0"><!-- wp:spacer {"height":"var:preset|spacing|70","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'Getting started', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><?php esc_html_e( 'Start in three steps', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><?php esc_html_e( 'You can be ready in about ten minutes. If you get stuck, our support team is happy to help.', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|60","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get started', 'vk-site-builder' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
<?php foreach ( $vksb_steps as $vksb_index => $vksb_step ) : ?>
<!-- wp:group {"style":{"border":{"left":{"color":"var:preset|color|primary","width":"2px"}},"spacing":{"padding":{"left":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-left-color:var(--wp--preset--color--primary);border-left-width:2px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"letterSpacing":"0.1em"}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;letter-spacing:0.1em"><?php echo esc_html( sprintf( 'STEP %02d', $vksb_index + 1 ) ); ?></p>
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
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|70","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
