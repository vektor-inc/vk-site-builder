<?php
/**
 * Title: Case studies: Three cards with results
 * Slug: vk-site-builder/case-cards
 * Description: A centered heading and three case study cards, each with a photo, an industry label, a title, and a result box, followed by a button to the list of cases.
 * Categories: vk-site-builder-voice
 * Keywords: case studies, works, results, examples, cards, image and text
 * Layout: grid
 * Images: photo
 *
 * @package VK_Site_Builder
 */

$vksb_cases = array(
	array(
		'image'  => 'service-web.jpg',
		'label'  => __( '製造業', 'vk-site-builder' ),
		'title'  => __( '<span class="text-nowrap">技術の強みが</span><span class="text-nowrap">伝わるサイトに</span>', 'vk-site-builder' ),
		'result' => __( '問い合わせ数が 1 年で 2 倍に', 'vk-site-builder' ),
	),
	array(
		'image'  => 'about-office.jpg',
		'label'  => __( '士業', 'vk-site-builder' ),
		'title'  => __( '<span class="text-nowrap">料金と流れのページを</span><span class="text-nowrap">新設</span>', 'vk-site-builder' ),
		'result' => __( '初回相談の申し込みが月 10 件以上に', 'vk-site-builder' ),
	),
	array(
		'image'  => 'service-support.jpg',
		'label'  => __( '医療・クリニック', 'vk-site-builder' ),
		'title'  => __( '<span class="text-nowrap">スタッフが更新できる</span><span class="text-nowrap">仕組みに</span>', 'vk-site-builder' ),
		'result' => __( 'お知らせの更新が週 1 回に', 'vk-site-builder' ),
	),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-text-align-center is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php esc_html_e( '導入事例', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<?php echo vksb_spacer( '40' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'さまざまな業種で、成果につながっています', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
<?php foreach ( $vksb_cases as $vksb_case ) : ?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"3/2","scale":"cover","sizeSlug":"large","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-large" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( vksb_pattern_image_url( $vksb_case['image'] ) ); ?>" alt="" style="aspect-ratio:3/2;object-fit:cover"/></figure>
<!-- /wp:image -->

<?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|40","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"backgroundColor":"primary","textColor":"bg-primary","fontSize":"x-small","className":"is-vk-trim-both"} -->
<p class="has-bg-primary-color has-primary-background-color has-text-color has-background has-x-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40);font-style:normal;font-weight:700"><?php echo esc_html( $vksb_case['label'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.5"}},"fontSize":"large","className":"is-vk-trim-both"} -->
<h3 class="wp-block-heading has-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.5"><?php echo vksb_nowrap_text( $vksb_case['title'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h3>
<!-- /wp:heading -->

<?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"backgroundColor":"bg-secondary","layout":{"type":"default"}} -->
<div class="wp-block-group has-bg-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><?php echo vksb_vk_icon_only( 'fa-arrow-trend-up', 20 ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700"},"layout":{"selfStretch":"fill","flexSize":null}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700"><?php echo esc_html( $vksb_case['result'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<?php echo vksb_vk_button( __( '事例一覧を見る', 'vk-site-builder' ), 'primary', 'center' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
