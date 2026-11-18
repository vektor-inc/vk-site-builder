<?php
/**
 * Title: Testimonials: Two voices for each person
 * Slug: vk-site-builder/voice-pair-box
 * Description: Rows of a person illustration with a name on the left, and a bordered box on the right with two comments, such as from a student and a parent, separated by a line.
 * Categories: vk-site-builder-voice
 * Keywords: testimonials, customer voice, student, parent, school, two voices
 *
 * @package VK_Site_Builder
 */

$vksb_rows = array(
	array(
		'image'  => 'school-face-boy-1.jpg',
		'grade'  => __( '小学 6 年', 'vk-site-builder' ),
		'name'   => __( 'E くん', 'vk-site-builder' ),
		'first'  => __( 'わからないところを先生に聞けるようになって、勉強が好きになりました。中学生になっても、この自信で頑張れると思います。', 'vk-site-builder' ),
		'second' => __( '通い始めて 3 か月が過ぎました。塾との相性が心配でしたが、毎回楽しそうに通っています。', 'vk-site-builder' ),
	),
	array(
		'image'  => 'school-face-girl-1.jpg',
		'grade'  => __( '中学 3 年', 'vk-site-builder' ),
		'name'   => __( 'K さん', 'vk-site-builder' ),
		'first'  => __( '苦手な数学を集中して勉強しました。授業がわかりやすく、期末テストで 80 点がとれて、志望校にも合格できました。', 'vk-site-builder' ),
		'second' => __( '高校受験まで、本当にお世話になりました。自分から机に向かうようになり、感謝しています。', 'vk-site-builder' ),
	),
	array(
		'image'  => 'school-face-boy-2.jpg',
		'grade'  => __( '中学 2 年', 'vk-site-builder' ),
		'name'   => __( 'R くん', 'vk-site-builder' ),
		'first'  => __( '先生が一人ひとりに合わせて教えてくれるので、質問しやすいです。テスト前の対策授業が助かっています。', 'vk-site-builder' ),
		'second' => __( '無料体験で授業の雰囲気がよくわかり、ここに決めました。本人が楽しそうに通っているのがうれしいです。', 'vk-site-builder' ),
	),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-text-align-center is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php esc_html_e( '生徒と保護者の声', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"><?php esc_html_e( '通っている生徒さんと、保護者の方にうかがいました', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->
<?php foreach ( $vksb_rows as $vksb_row ) : ?>

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"><!-- wp:image {"width":"120px","aspectRatio":"1","scale":"cover","sizeSlug":"full","align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( vksb_pattern_image_url( $vksb_row['image'] ) ); ?>" alt="" style="aspect-ratio:1;object-fit:cover;width:120px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}},"textColor":"text-secondary","fontSize":"x-small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-text-secondary-color has-text-color has-x-small-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><?php echo esc_html( $vksb_row['grade'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"className":"is-vk-trim-both"} -->
<p class="has-text-align-center is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0;font-style:normal;font-weight:700"><?php echo esc_html( $vksb_row['name'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"80%","style":{"border":{"color":"var:preset|color|border-normal","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column has-border-color" style="border-color:var(--wp--preset--color--border-normal);border-width:1px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);flex-basis:80%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|50","bottom":"var:preset|spacing|30","left":"var:preset|spacing|50"}},"border":{"color":"var:preset|color|primary","width":"1px"},"typography":{"fontStyle":"normal","fontWeight":"700"}},"backgroundColor":"primary","textColor":"bg-primary","fontSize":"x-small","className":"is-vk-trim-both"} -->
<p class="has-border-color has-bg-primary-color has-primary-background-color has-text-color has-background has-x-small-font-size is-vk-trim-both" style="border-color:var(--wp--preset--color--primary);border-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50);font-style:normal;font-weight:700"><?php esc_html_e( '生徒の声', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"><?php echo esc_html( $vksb_row['first'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"},"padding":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border-normal);border-top-width:1px;margin-top:var(--wp--preset--spacing--50);margin-bottom:0;padding-top:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|50","bottom":"var:preset|spacing|30","left":"var:preset|spacing|50"}},"border":{"color":"var:preset|color|primary","width":"1px"},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontSize":"x-small","className":"is-vk-trim-both"} -->
<p class="has-border-color has-primary-color has-text-color has-x-small-font-size is-vk-trim-both" style="border-color:var(--wp--preset--color--primary);border-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50);font-style:normal;font-weight:700"><?php esc_html_e( '保護者の声', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"><?php echo esc_html( $vksb_row['second'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<?php endforeach; ?>

<?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
