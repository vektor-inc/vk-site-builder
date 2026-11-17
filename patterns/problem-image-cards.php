<?php
/**
 * Title: Problem and solution: Photo cards and photo solution box
 * Slug: vk-site-builder/problem-image-cards
 * Description: A section that shows common problems as cards with photos, followed by a box in the main color with a photo and the solution.
 * Categories: vk-site-builder-problem-solution
 * Keywords: problems, worries, solution, cards, photo
 *
 * @package VK_Site_Builder
 */

$vksb_problems = array(
	array(
		'image' => 'service-seo.jpg',
		'title' => __( 'Hard to find', 'vk-site-builder' ),
		'text'  => __( 'Customers cannot find your website when they search for your services.', 'vk-site-builder' ),
	),
	array(
		'image' => 'pc-data.jpg',
		'title' => __( 'No results', 'vk-site-builder' ),
		'text'  => __( 'You do not know how many people visit the website or what they look at.', 'vk-site-builder' ),
	),
	array(
		'image' => 'service-support.jpg',
		'title' => __( 'No one to ask', 'vk-site-builder' ),
		'text'  => __( 'When something goes wrong, there is nobody to ask about the website.', 'vk-site-builder' ),
	),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><!-- wp:spacer {"height":"var:preset|spacing|70","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-text-align-center is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'Is your website working for you?', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|60","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"14rem"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
<?php foreach ( $vksb_problems as $vksb_index => $vksb_problem ) : ?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"backgroundColor":"bg-secondary","layout":{"type":"default"}} -->
<div class="wp-block-group has-bg-secondary-background-color has-background"><!-- wp:image {"aspectRatio":"3/2","scale":"cover","sizeSlug":"large","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-large" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( vksb_pattern_image_url( $vksb_problem['image'] ) ); ?>" alt="" style="aspect-ratio:3/2;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"letterSpacing":"0.1em"}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;letter-spacing:0.1em"><?php echo esc_html( sprintf( /* translators: %s: problem number such as 01. */ __( 'Problem %s', 'vk-site-builder' ), sprintf( '%02d', $vksb_index + 1 ) ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"fontSize":"x-large","className":"is-vk-trim-both"} -->
<h3 class="wp-block-heading has-x-large-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"><?php echo esc_html( $vksb_problem['title'] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><?php echo esc_html( $vksb_problem['text'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|60","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"primary","textColor":"bg-primary","layout":{"type":"default"}} -->
<div class="wp-block-group has-bg-primary-color has-primary-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-large" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( vksb_pattern_image_url( 'about-office.jpg' ) ); ?>" alt="" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"letterSpacing":"0.1em"}},"fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;letter-spacing:0.1em"><?php esc_html_e( 'Solution', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}},"textColor":"bg-primary","fontSize":"xx-large","className":"is-vk-trim-both"} -->
<h3 class="wp-block-heading has-bg-primary-color has-text-color has-xx-large-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><?php esc_html_e( 'We measure, improve, and support', 'vk-site-builder' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:0"><?php esc_html_e( 'We check how your website is used every month and keep improving it. You can always ask us when you are in trouble.', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|60","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"bg-primary","textColor":"primary"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-bg-primary-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'See our support plans', 'vk-site-builder' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|70","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
