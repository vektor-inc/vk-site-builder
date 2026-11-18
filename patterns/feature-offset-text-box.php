<?php
/**
 * Title: Features: Photos with overlapping text boxes
 * Slug: vk-site-builder/feature-offset-text-box
 * Description: Rows of a photo and a white text box with a shadow that overlaps the photo and sits a little lower. The photo switches sides on each row. On smartphones, the box comes below the photo.
 * Categories: vk-site-builder-features
 * Keywords: features, image and text, overlap, offset, shadow, zigzag
 *
 * @package VK_Site_Builder
 */

$vksb_rows = array(
	array(
		'image' => 'pc-data.jpg',
		'title' => __( 'Clear reports every month', 'vk-site-builder' ),
		'text'  => __( 'We show you how many people visited your website and what they looked at, in a report that is easy to read even if you are new to the web.', 'vk-site-builder' ),
	),
	array(
		'image' => 'service-web.jpg',
		'title' => __( 'Design that fits your brand', 'vk-site-builder' ),
		'text'  => __( 'Colors, fonts, and photos are chosen to match your business, so that your customers recognize you at a glance.', 'vk-site-builder' ),
	),
	array(
		'image' => 'service-seo.jpg',
		'title' => __( 'Easy to find on search engines', 'vk-site-builder' ),
		'text'  => __( 'We choose the words your customers search for and use them in the right places on each page.', 'vk-site-builder' ),
	),
	array(
		'image' => 'service-support.jpg',
		'title' => __( 'Help whenever you need it', 'vk-site-builder' ),
		'text'  => __( 'Ask us by email or phone at any time. We explain the answer in plain words and help until the problem is solved.', 'vk-site-builder' ),
	),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
<?php foreach ( $vksb_rows as $vksb_index => $vksb_row ) : ?>
	<?php
	// 写真は左右交互. 箱は写真に 2 列分だけ重ね、後に置いて上に重ねる.
	// 写真の下の 2 段目にスペーサーを置き、箱を 2 段にまたがらせて、箱の下端を写真より下に下げる.
	// 行の親を flex にすると、グリッドの行の高さが崩れるため、行の間はスペーサーで空ける.
	$vksb_image_start = 0 === $vksb_index % 2 ? 1 : 6;
	$vksb_box_start   = 0 === $vksb_index % 2 ? 6 : 1;
	?>
	<?php if ( 0 < $vksb_index ) : ?>
<?php echo vksb_spacer( '80' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
	<?php endif; ?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"grid","columnCount":12,"minimumColumnWidth":"3rem"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","style":{"layout":{"columnStart":<?php echo (int) $vksb_image_start; ?>,"columnSpan":7,"rowStart":1,"rowSpan":1},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-large" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( vksb_pattern_image_url( $vksb_row['image'] ) ); ?>" alt="" style="aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"layout":{"columnStart":<?php echo (int) $vksb_box_start; ?>,"columnSpan":7,"rowStart":1,"rowSpan":2},"shadow":"var:preset|shadow|natural","spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"0"},"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"bg-primary","layout":{"type":"default"}} -->
<div class="wp-block-group has-bg-primary-background-color has-background" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);box-shadow:var(--wp--preset--shadow--natural)"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"fontSize":"xx-large","className":"is-vk-trim-both"} -->
<h3 class="wp-block-heading has-xx-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php echo esc_html( $vksb_row['title'] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><?php echo esc_html( $vksb_row['text'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|60","style":{"layout":{"columnStart":<?php echo (int) $vksb_image_start; ?>,"columnSpan":7,"rowStart":2,"rowSpan":1},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->

<?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
