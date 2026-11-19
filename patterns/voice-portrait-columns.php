<?php
/**
 * Title: Testimonials: Round portraits in three columns
 * Slug: vk-site-builder/voice-portrait-columns
 * Description: A centered heading and three columns, each with a round portrait photo, a name, a catch phrase, and a comment.
 * Categories: vk-site-builder-voice
 * Keywords: testimonials, customer voice, students, portraits, photos, columns
 * Layout: grid
 * Images: person
 *
 * @package VK_Site_Builder
 */

$vksb_voices = array(
	array(
		'image' => 'school-face-boy-1.jpg',
		'name'  => __( 'じろうさん（小学生）', 'vk-site-builder' ),
		'catch' => __( '<span class="text-nowrap">毎回のレッスンが</span><span class="text-nowrap">楽しみです</span>', 'vk-site-builder' ),
		'text'  => __( 'ゲームや歌で英語を勉強できるのが好きです。先生がいつもほめてくれるので、自信を持って話せるようになりました。', 'vk-site-builder' ),
	),
	array(
		'image' => 'school-face-boy-2.jpg',
		'name'  => __( 'しょうたさん（中学生）', 'vk-site-builder' ),
		'catch' => __( '<span class="text-nowrap">わからないところを</span><span class="text-nowrap">丁寧に</span>', 'vk-site-builder' ),
		'text'  => __( '自分の意見を英語で言えるようになりました。わからないところは何度でも教えてもらえるので、学校の成績も上がりました。', 'vk-site-builder' ),
	),
	array(
		'image' => 'school-face-girl-2.jpg',
		'name'  => __( 'まいかさん（高校生）', 'vk-site-builder' ),
		'catch' => __( '<span class="text-nowrap">大学受験にも</span><span class="text-nowrap">自信が持てました</span>', 'vk-site-builder' ),
		'text'  => __( '目標に合わせてレッスンを組んでもらえました。発表の練習を重ねて、英語で意見を伝えることに自信がつきました。', 'vk-site-builder' ),
	),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-text-align-center is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php esc_html_e( 'みんなの声', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<?php echo vksb_spacer( '40' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php esc_html_e( '通っている生徒さんに、感想を聞きました', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
<?php foreach ( $vksb_voices as $vksb_voice ) : ?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"200px","aspectRatio":"1","scale":"cover","sizeSlug":"large","align":"center","className":"is-style-rounded","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image aligncenter size-large is-resized is-style-rounded" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( vksb_pattern_image_url( $vksb_voice['image'] ) ); ?>" alt="" style="aspect-ratio:1;object-fit:cover;width:200px"/></figure>
<!-- /wp:image -->

<?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"text-secondary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-text-secondary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php echo esc_html( $vksb_voice['name'] ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '40' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.5"}},"fontSize":"large","className":"is-vk-trim-both"} -->
<h3 class="wp-block-heading has-text-align-center has-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.5"><?php echo vksb_nowrap_text( $vksb_voice['catch'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h3>
<!-- /wp:heading -->

<?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php echo esc_html( $vksb_voice['text'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->

<?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
