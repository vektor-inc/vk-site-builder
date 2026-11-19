<?php
/**
 * Title: Testimonials: Three quote cards
 * Slug: vk-site-builder/voice-cards
 * Description: A centered heading and three white cards on a light background, each with a quote icon, a short catch phrase, a comment, and the name and job of the customer.
 * Categories: vk-site-builder-voice
 * Keywords: testimonials, customer voice, reviews, quotes, cards
 * Layout: grid
 * Images: person
 *
 * @package VK_Site_Builder
 */

$vksb_voices = array(
	array(
		'image' => 'voice-restaurant-owner.jpg',
		'catch' => __( '<span class="text-nowrap">相談しやすく、</span><span class="text-nowrap">安心して</span><span class="text-nowrap">任せられました</span>', 'vk-site-builder' ),
		'text'  => __( '専門用語を使わずに説明してくれたので、何を決めればいいのかがよくわかりました。公開後も気軽に質問できるのが心強いです。', 'vk-site-builder' ),
		'name'  => __( '山田 様', 'vk-site-builder' ),
		'job'   => __( '飲食店 経営', 'vk-site-builder' ),
	),
	array(
		'image' => 'voice-construction-owner.jpg',
		'catch' => __( '<span class="text-nowrap">問い合わせが、</span><span class="text-nowrap">毎月届くように</span><span class="text-nowrap">なりました</span>', 'vk-site-builder' ),
		'text'  => __( 'リニューアルしてから、ホームページ経由の問い合わせが目に見えて増えました。新しいお客さまとの出会いにつながっています。', 'vk-site-builder' ),
		'name'  => __( '佐藤 様', 'vk-site-builder' ),
		'job'   => __( '工務店 代表', 'vk-site-builder' ),
	),
	array(
		'image' => 'voice-clinic-director.jpg',
		'catch' => __( '<span class="text-nowrap">自分たちで</span><span class="text-nowrap">更新できて、</span><span class="text-nowrap">助かっています</span>', 'vk-site-builder' ),
		'text'  => __( 'お知らせや写真の更新を、スタッフが自分でできるようになりました。情報をこまめに出せるので、患者さんからの評判も上々です。', 'vk-site-builder' ),
		'name'  => __( '鈴木 様', 'vk-site-builder' ),
		'job'   => __( 'クリニック 院長', 'vk-site-builder' ),
	),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"backgroundColor":"bg-secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-bg-secondary-background-color has-background" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-text-align-center is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php esc_html_e( 'お客さまの声', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<?php echo vksb_spacer( '40' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'ご依頼いただいた方に、感想をうかがいました', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
<?php foreach ( $vksb_voices as $vksb_voice ) : ?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|60","bottom":"0","left":"var:preset|spacing|60"},"blockGap":"0"}},"backgroundColor":"bg-primary","layout":{"type":"default"}} -->
<div class="wp-block-group has-bg-primary-background-color has-background" style="padding-top:0;padding-right:var(--wp--preset--spacing--60);padding-bottom:0;padding-left:var(--wp--preset--spacing--60)"><?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<?php echo vksb_vk_icon_only( 'fa-quote-left', 28 ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.5"}},"fontSize":"large","className":"is-vk-trim-both"} -->
<h3 class="wp-block-heading has-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.5"><?php echo vksb_nowrap_text( $vksb_voice['catch'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h3>
<!-- /wp:heading -->

<?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php echo esc_html( $vksb_voice['text'] ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border-normal);border-top-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50)"><!-- wp:image {"width":"56px","aspectRatio":"1","scale":"cover","sizeSlug":"large","className":"is-style-rounded","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fixedNoShrink","flexSize":"56px"}}} -->
<figure class="wp-block-image size-large is-resized is-style-rounded" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( vksb_pattern_image_url( $vksb_voice['image'] ) ); ?>" alt="" style="aspect-ratio:1;object-fit:cover;width:56px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700"><?php echo esc_html( $vksb_voice['name'] ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '30' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"text-secondary","fontSize":"x-small","className":"is-vk-trim-both"} -->
<p class="has-text-secondary-color has-text-color has-x-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php echo esc_html( $vksb_voice['job'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->

<?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
