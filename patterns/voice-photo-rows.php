<?php
/**
 * Title: Testimonials: Photo and comment rows
 * Slug: vk-site-builder/voice-photo-rows
 * Description: A centered heading and two rows of a customer photo and a long comment with a catch phrase and the name of the customer. The photo switches sides on each row.
 * Categories: vk-site-builder-voice
 * Keywords: testimonials, customer voice, interview, image and text, zigzag
 * Layout: split-rows
 * Images: photo
 *
 * @package VK_Site_Builder
 */

$vksb_voices = array(
	array(
		'image' => 'voice-construction-owner.jpg',
		'catch' => __( '「何を伝えるか」から、一緒に考えてもらえました', 'vk-site-builder' ),
		'text'  => __( '最初は見た目を新しくしたいだけでした。でも打ち合わせを重ねるうちに、自分たちの強みや、お客さまに本当に伝えたいことが整理できました。完成したホームページを見た取引先から「会社の雰囲気が伝わる」と言ってもらえたのがうれしかったです。', 'vk-site-builder' ),
		'name'  => __( 'サンプル建設株式会社 代表取締役 田中 様', 'vk-site-builder' ),
	),
	array(
		'image' => 'voice-office-manager.jpg',
		'catch' => __( '困ったときに、すぐ相談できる安心感があります', 'vk-site-builder' ),
		'text'  => __( 'ホームページのことは社内にわかる人がいなかったので、公開後のサポートを重視して選びました。ちょっとした修正もすぐに対応してもらえるので、本業に集中できています。', 'vk-site-builder' ),
		'name'  => __( 'サンプル税理士事務所 事務長 高橋 様', 'vk-site-builder' ),
	),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-text-align-center is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php esc_html_e( 'お客さまインタビュー', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"><?php esc_html_e( 'ご依頼のきっかけと、その後の変化をうかがいました', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->
<?php foreach ( $vksb_voices as $vksb_index => $vksb_voice ) : ?>
	<?php
	$vksb_reverse   = 1 === $vksb_index % 2;
	$vksb_cols_attr = $vksb_reverse ? ',"className":"is-vk-row-reverse","reverse":true' : '';
	$vksb_cols_cls  = $vksb_reverse ? ' is-vk-row-reverse' : '';
	?>

<?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|70"}}}<?php echo $vksb_cols_attr; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>} -->
<div class="wp-block-columns are-vertically-aligned-center<?php echo esc_attr( $vksb_cols_cls ); ?>" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-large" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( vksb_pattern_image_url( $vksb_voice['image'] ) ); ?>" alt="" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><?php echo vksb_vk_icon_only( 'fa-quote-left', 28 ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}},"typography":{"lineHeight":"1.5"}},"fontSize":"x-large","className":"is-vk-trim-both"} -->
<h3 class="wp-block-heading has-x-large-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0;line-height:1.5"><?php echo esc_html( $vksb_voice['catch'] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:0"><?php echo esc_html( $vksb_voice['text'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"right","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"0"}}},"textColor":"text-secondary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-right has-text-secondary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:0"><?php echo esc_html( $vksb_voice['name'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<?php endforeach; ?>

<?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
