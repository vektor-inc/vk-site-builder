<?php
/**
 * Title: Features: Text and a photo collage
 * Slug: vk-site-builder/feature-photo-collage
 * Description: Full-width rows of a centered heading, a text, and a button, next to a collage of one tall photo and two small photos that reaches the edge of the screen. The collage switches sides on each row.
 * Categories: vk-site-builder-features
 * Keywords: features, services, photo collage, gallery, full width, half content width
 * Layout: split-rows
 * Images: photo
 *
 * @package VK_Site_Builder
 */

$vksb_rows = array(
	array(
		'images' => array( 'about-office.jpg', 'contact-image.jpg', 'about-office.jpg' ),
		'title'  => __( '新規制作', 'vk-site-builder' ),
		'sub'    => __( '御社のためだけのホームページを', 'vk-site-builder' ),
		'text'   => __( 'お客さまに伝えたいことをもとに、ホームページを一からつくります。構成から写真・言葉まで、まとめてお任せください。', 'vk-site-builder' ),
		'button' => __( '制作実績を見る', 'vk-site-builder' ),
	),
	array(
		'images' => array( 'pc-data.jpg', 'service-seo.jpg', 'service-web.jpg' ),
		'title'  => __( 'リニューアル', 'vk-site-builder' ),
		'sub'    => __( '今のホームページを、もっと働くサイトに', 'vk-site-builder' ),
		'text'   => __( '今のホームページの良いところと課題を確かめ、小さな手直しから全面リニューアルまで、デザインやページを段階的に改善します。', 'vk-site-builder' ),
		'button' => __( 'リニューアル事例を見る', 'vk-site-builder' ),
	),
	array(
		'images' => array( 'service-support.jpg', 'pc-data.jpg', 'service-support.jpg' ),
		'title'  => __( '運用サポート', 'vk-site-builder' ),
		'sub'    => __( 'ホームページを、新しく安全な状態に', 'vk-site-builder' ),
		'text'   => __( '公開後は、ページの更新代行やシステムの保守を行い、訪問者の使われ方をもとに改善をご提案します。', 'vk-site-builder' ),
		'button' => __( 'サポートプランを見る', 'vk-site-builder' ),
	),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo vksb_spacer( '80' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
<?php foreach ( $vksb_rows as $vksb_index => $vksb_row ) : ?>
	<?php
	$vksb_reverse   = 1 === $vksb_index % 2;
	$vksb_cols_attr = $vksb_reverse ? ',"className":"is-vk-row-reverse","reverse":true' : '';
	$vksb_cols_cls  = $vksb_reverse ? ' is-vk-row-reverse' : '';
	// 文章の、写真に面する側の余白.
	$vksb_inner_pad = $vksb_reverse ? '"left":"var:preset|spacing|80","right":"0"' : '"left":"0","right":"var:preset|spacing|80"';
	$vksb_inner_css = $vksb_reverse ? 'padding-right:0;padding-left:var(--wp--preset--spacing--80)' : 'padding-right:var(--wp--preset--spacing--80);padding-left:0';
	?>
	<?php if ( 0 < $vksb_index ) : ?>
<?php echo vksb_spacer( '80' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
	<?php endif; ?>
<!-- wp:columns {"verticalAlignment":"center","align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|60","left":"0"}}}<?php echo $vksb_cols_attr; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>} -->
<div class="wp-block-columns alignfull are-vertically-aligned-center<?php echo esc_attr( $vksb_cols_cls ); ?>" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","className":"is-vk-content-width-half","style":{"spacing":{"padding":{"top":"0","bottom":"0",<?php echo $vksb_inner_pad; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>}}},"contentWidthHalf":true} -->
<div class="wp-block-column is-vertically-aligned-center is-vk-content-width-half" style="padding-top:0;<?php echo $vksb_inner_css; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>;padding-bottom:0"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-text-align-center is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php echo vksb_nowrap_text( $vksb_row['title'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h2>
<!-- /wp:heading -->

<?php echo vksb_spacer( '40' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php echo esc_html( $vksb_row['sub'] ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php echo esc_html( $vksb_row['text'] ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<?php echo vksb_vk_button( $vksb_row['button'], 'outline', 'center' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile" style="margin-top:0;margin-bottom:0"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( vksb_pattern_image_url( $vksb_row['images'][0] ) ); ?>","dimRatio":0,"overlayColor":"bg-primary","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"%","isDark":false,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover is-light" style="margin-top:0;margin-bottom:0;min-height:100%"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( vksb_pattern_image_url( $vksb_row['images'][0] ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-bg-primary-background-color has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-large" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( vksb_pattern_image_url( $vksb_row['images'][1] ) ); ?>" alt="" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<?php echo vksb_spacer( '40' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-large" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( vksb_pattern_image_url( $vksb_row['images'][2] ) ); ?>" alt="" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<?php endforeach; ?>

<?php echo vksb_spacer( '80' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
