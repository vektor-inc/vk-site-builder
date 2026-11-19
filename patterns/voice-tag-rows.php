<?php
/**
 * Title: Testimonials: Light gray boxes with tags
 * Slug: vk-site-builder/voice-tag-rows
 * Description: A centered heading and a stack of light gray boxes, each with a person illustration on the left, and an attribute, a catch phrase in the key color, tags for the services used, and a comment on the right.
 * Categories: vk-site-builder-voice
 * Keywords: testimonials, customer voice, users, services, tags, care, welfare
 * Layout: stack
 * Images: person
 *
 * @package VK_Site_Builder
 */

$vksb_voices = array(
	array(
		'image' => 'care-face-man-1.jpg',
		'who'   => __( 'サンプル市 男性 M 様', 'vk-site-builder' ),
		'catch' => __( '<span class="text-nowrap">仕事と介護を両立でき、</span><span class="text-nowrap">家族の心が</span><span class="text-nowrap">楽になりました</span>', 'vk-site-builder' ),
		'tags'  => array( __( '生活援助', 'vk-site-builder' ), __( '身体介護', 'vk-site-builder' ) ),
		'text'  => __( '遠方に住んでいて、一人暮らしの父のことが心配でした。家事を丁寧に手伝っていただけるので、家族みんなが安心しています。', 'vk-site-builder' ),
	),
	array(
		'image' => 'care-face-woman-1.jpg',
		'who'   => __( 'サンプル町 女性 I 様', 'vk-site-builder' ),
		'catch' => __( '<span class="text-nowrap">スタッフの皆さんが</span><span class="text-nowrap">丁寧で、</span><span class="text-nowrap">母が笑顔に</span><span class="text-nowrap">なりました</span>', 'vk-site-builder' ),
		'tags'  => array( __( '生活援助', 'vk-site-builder' ) ),
		'text'  => __( '口数の少ない母ですが、スタッフの方のことを楽しそうに話してくれます。これからもよろしくお願いします。', 'vk-site-builder' ),
	),
	array(
		'image' => 'care-face-man-2.jpg',
		'who'   => __( 'サンプル区 男性 H 様', 'vk-site-builder' ),
		'catch' => __( '<span class="text-nowrap">定期的に様子を</span><span class="text-nowrap">見てもらえるので</span><span class="text-nowrap">安心です</span>', 'vk-site-builder' ),
		'tags'  => array( __( '生活援助', 'vk-site-builder' ), __( '見守り', 'vk-site-builder' ) ),
		'text'  => __( '日報を細かく書いていただけるので、離れていても母の様子がよくわかり、助かっています。', 'vk-site-builder' ),
	),
	array(
		'image' => 'care-face-woman-2.jpg',
		'who'   => __( 'サンプル市 女性 K 様', 'vk-site-builder' ),
		'catch' => __( '<span class="text-nowrap">利用を始めて 1 年、</span><span class="text-nowrap">感謝の気持ちで</span><span class="text-nowrap">いっぱいです</span>', 'vk-site-builder' ),
		'tags'  => array( __( '生活援助', 'vk-site-builder' ), __( '見守り', 'vk-site-builder' ) ),
		'text'  => __( 'いつも明るくあいさつしてくださり、こちらまで元気が出ます。普段は口数の少ない父も、スタッフの方とは楽しそうに話しています。', 'vk-site-builder' ),
	),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-text-align-center is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php esc_html_e( 'ご利用者さまの声', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<?php echo vksb_spacer( '40' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'ご家族の方からいただいた声をご紹介します', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
<?php foreach ( $vksb_voices as $vksb_voice ) : ?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","right":"var:preset|spacing|60","bottom":"0","left":"var:preset|spacing|60"},"blockGap":"0"}},"backgroundColor":"bg-secondary","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"center"}} -->
<div class="wp-block-group has-bg-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--60);padding-bottom:0;padding-left:var(--wp--preset--spacing--60)"><?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:image {"width":"140px","aspectRatio":"1","scale":"cover","sizeSlug":"full","align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( vksb_pattern_image_url( $vksb_voice['image'] ) ); ?>" alt="" style="aspect-ratio:1;object-fit:cover;width:140px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"80%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80%"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"text-secondary","fontSize":"x-small","className":"is-vk-trim-both"} -->
<p class="has-text-secondary-color has-text-color has-x-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php echo esc_html( $vksb_voice['who'] ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '40' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.5"}},"textColor":"primary","fontSize":"x-large","className":"is-vk-trim-both"} -->
<h3 class="wp-block-heading has-primary-color has-text-color has-x-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.5"><?php echo vksb_nowrap_text( $vksb_voice['catch'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h3>
<!-- /wp:heading -->

<?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
	<?php foreach ( $vksb_voice['tags'] as $vksb_tag ) : ?>
<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|40","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40"}},"border":{"color":"var:preset|color|primary","width":"1px"}},"backgroundColor":"bg-primary","textColor":"primary","fontSize":"x-small","className":"is-vk-trim-both"} -->
<p class="has-border-color has-primary-color has-bg-primary-background-color has-text-color has-background has-x-small-font-size is-vk-trim-both" style="border-color:var(--wp--preset--color--primary);border-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><?php echo esc_html( $vksb_tag ); ?></p>
<!-- /wp:paragraph -->
	<?php endforeach; ?>
</div>
<!-- /wp:group -->

<?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php echo esc_html( $vksb_voice['text'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->

<?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
