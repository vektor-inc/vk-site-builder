<?php
/**
 * Title: Details: Wide photo and long text
 * Slug: vk-site-builder/detail-article
 * Description: A detailed explanation with a label, a heading, and a lead text, followed by a wide photo and several paragraphs divided by small headings.
 * Categories: vk-site-builder-details
 * Keywords: details, description, service, product, article, image and text
 * Layout: stack
 * Images: photo
 *
 * @package VK_Site_Builder
 */

$vksb_sections = array(
	array(
		'title' => __( '<span class="text-nowrap">まずはお話を</span><span class="text-nowrap">うかがいます</span>', 'vk-site-builder' ),
		'texts' => array(
			__( 'デザインの話をする前に、事業の内容やお客さまのこと、ホームページで実現したいことをうかがいます。今のホームページや、競合のホームページも拝見します。', 'vk-site-builder' ),
			__( 'うかがった内容をもとに、必要なページと、それぞれのページで伝えることを決めていきます。', 'vk-site-builder' ),
		),
	),
	array(
		'title' => __( '<span class="text-nowrap">お客さまと</span><span class="text-nowrap">一緒につくります</span>', 'vk-site-builder' ),
		'texts' => array(
			__( 'デザインと文章の案は、段階ごとにお見せします。確認用のサイトで進み具合を見ながら、ご意見をお聞かせください。', 'vk-site-builder' ),
			__( '写真や文章は、お客さまにご用意いただくことも、こちらで用意することもできます。スケジュールとご予算に合わせて、良い方法をご提案します。', 'vk-site-builder' ),
		),
	),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"0.15em","textTransform":"uppercase"}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700;letter-spacing:0.15em;text-transform:uppercase"><?php esc_html_e( 'ホームページのリニューアル', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '40' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php echo vksb_nowrap_text( __( '<span class="text-nowrap">リニューアルの</span><span class="text-nowrap">進め方</span>', 'vk-site-builder' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h2>
<!-- /wp:heading -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"large","className":"is-vk-trim-both"} -->
<p class="has-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'リニューアルは、見た目を新しくするだけではありません。ホームページが事業のために果たす役割から見直し、長く使い続けられる形につくり直します。', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-large" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( vksb_pattern_image_url( 'about-office.jpg' ) ); ?>" alt="" style="aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
<?php foreach ( $vksb_sections as $vksb_index => $vksb_section ) : ?>
	<?php if ( 0 === $vksb_index ) : ?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
	<?php else : ?>
<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
	<?php endif; ?><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"fontSize":"x-large","className":"is-vk-trim-both"} -->
<h3 class="wp-block-heading has-x-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php echo vksb_nowrap_text( $vksb_section['title'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h3>
<!-- /wp:heading -->
	<?php foreach ( $vksb_section['texts'] as $vksb_text ) : ?>

<?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php echo esc_html( $vksb_text ); ?></p>
<!-- /wp:paragraph -->
	<?php endforeach; ?>
</div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->

<?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
