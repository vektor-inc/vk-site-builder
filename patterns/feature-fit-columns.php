<?php
/**
 * Title: Features: Full-width photo and text rows
 * Slug: vk-site-builder/feature-fit-columns
 * Description: Full-width rows of a photo that reaches the edge of the screen and a text with a heading and a button. The text stays inside the content width, and the photo switches sides on each row.
 * Categories: vk-site-builder-features
 * Keywords: features, image and text, full width, zigzag, half content width
 *
 * @package VK_Site_Builder
 */

$vksb_rows = array(
	array(
		'image' => 'service-web.jpg',
		'title' => __( '事業に合ったホームページを', 'vk-site-builder' ),
		'text'  => __( 'デザインの前に、まず事業の仕組みを理解します。ページ・言葉・写真は、御社ならではの強みがお客さまに伝わるように選びます。', 'vk-site-builder' ),
	),
	array(
		'image' => 'service-support.jpg',
		'title' => __( '頼れるサポート', 'vk-site-builder' ),
		'text'  => __( '公開後も、メールやお電話でご質問にお答えし、事業の成長に合わせたページの更新をお手伝いします。', 'vk-site-builder' ),
	),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
<?php foreach ( $vksb_rows as $vksb_index => $vksb_row ) : ?>
	<?php
	$vksb_reverse   = 1 === $vksb_index % 2;
	$vksb_cols_attr = $vksb_reverse ? ',"className":"is-vk-row-reverse","reverse":true' : '';
	$vksb_cols_cls  = $vksb_reverse ? ' is-vk-row-reverse' : '';
	// 文章の、写真に面する側の余白.
	$vksb_inner_pad = $vksb_reverse ? '"left":"0","right":"var:preset|spacing|80"' : '"left":"var:preset|spacing|80","right":"0"';
	$vksb_inner_css = $vksb_reverse ? 'padding-right:var(--wp--preset--spacing--80);padding-left:0' : 'padding-right:0;padding-left:var(--wp--preset--spacing--80)';
	?>
<!-- wp:columns {"verticalAlignment":"center","align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"}}}<?php echo $vksb_cols_attr; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>} -->
<div class="wp-block-columns alignfull are-vertically-aligned-center<?php echo esc_attr( $vksb_cols_cls ); ?>" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-large" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( vksb_pattern_image_url( $vksb_row['image'] ) ); ?>" alt="" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","className":"is-vk-content-width-half","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70",<?php echo $vksb_inner_pad; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>}}},"contentWidthHalf":true} -->
<div class="wp-block-column is-vertically-aligned-center is-vk-content-width-half" style="padding-top:var(--wp--preset--spacing--70);<?php echo $vksb_inner_css; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>;padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php echo esc_html( $vksb_row['title'] ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:0"><?php echo esc_html( $vksb_row['text'] ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<?php echo vksb_vk_button( __( '詳しく見る', 'vk-site-builder' ), 'outline' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->
