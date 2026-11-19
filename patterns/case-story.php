<?php
/**
 * Title: Case studies: One case with challenge, solution, and result
 * Slug: vk-site-builder/case-story
 * Description: One case study on a light background. A photo and the company profile table sit side by side, followed by three white boxes for the challenge, the solution, and the result.
 * Categories: vk-site-builder-voice
 * Keywords: case studies, works, results, challenge, solution, company profile, table
 * Layout: grid, split
 * Images: photo
 *
 * @package VK_Site_Builder
 */

$vksb_profile = array(
	__( '業種', 'vk-site-builder' )   => __( '建築・工務店', 'vk-site-builder' ),
	__( '所在地', 'vk-site-builder' )  => __( 'サンプル県サンプル市', 'vk-site-builder' ),
	__( '従業員数', 'vk-site-builder' ) => __( '25 名', 'vk-site-builder' ),
	__( 'ご依頼内容', 'vk-site-builder' ) => __( 'ホームページのリニューアル、施工事例ページの新設', 'vk-site-builder' ),
);
$vksb_steps   = array(
	array(
		'label' => __( '課題', 'vk-site-builder' ),
		'title' => __( '<span class="text-nowrap">施工の品質が</span><span class="text-nowrap">伝わらない</span>', 'vk-site-builder' ),
		'text'  => __( '以前のホームページは会社概要だけで、実際の家づくりの様子や、こだわりが伝わっていませんでした。', 'vk-site-builder' ),
	),
	array(
		'label' => __( '解決策', 'vk-site-builder' ),
		'title' => __( '<span class="text-nowrap">施工事例を、</span><span class="text-nowrap">写真と声で紹介</span>', 'vk-site-builder' ),
		'text'  => __( '施工事例のページを新しくつくり、写真と施主さまの声を、スタッフが自分で追加できるようにしました。', 'vk-site-builder' ),
	),
	array(
		'label' => __( '成果', 'vk-site-builder' ),
		'title' => __( '<span class="text-nowrap">見学会の予約が</span><span class="text-nowrap">3 倍に</span>', 'vk-site-builder' ),
		'text'  => __( '事例を見てから問い合わせる方が増え、完成見学会の予約数がリニューアル前の約 3 倍になりました。', 'vk-site-builder' ),
	),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"backgroundColor":"bg-secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-bg-secondary-background-color has-background" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-large" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( vksb_pattern_image_url( 'about-office.jpg' ) ); ?>" alt="" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"0.15em"}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700;letter-spacing:0.15em"><?php esc_html_e( '導入事例', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '40' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php echo vksb_nowrap_text( __( '<span class="text-nowrap">株式会社</span><span class="text-nowrap">サンプル工務店 様</span>', 'vk-site-builder' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h2>
<!-- /wp:heading -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:table {"className":"is-style-vk-table-border-top-bottom","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<figure class="wp-block-table is-style-vk-table-border-top-bottom has-small-font-size" style="margin-top:0;margin-bottom:0"><table><tbody><?php foreach ( $vksb_profile as $vksb_label => $vksb_value ) : ?><tr><td><strong><?php echo esc_html( $vksb_label ); ?></strong></td><td><?php echo esc_html( $vksb_value ); ?></td></tr><?php endforeach; ?></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
<?php foreach ( $vksb_steps as $vksb_step ) : ?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|60","bottom":"0","left":"var:preset|spacing|60"},"blockGap":"0"}},"backgroundColor":"bg-primary","layout":{"type":"default"}} -->
<div class="wp-block-group has-bg-primary-background-color has-background" style="padding-top:0;padding-right:var(--wp--preset--spacing--60);padding-bottom:0;padding-left:var(--wp--preset--spacing--60)"><?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"0.15em"}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700;letter-spacing:0.15em"><?php echo esc_html( $vksb_step['label'] ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '40' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.5"}},"fontSize":"large","className":"is-vk-trim-both"} -->
<h3 class="wp-block-heading has-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.5"><?php echo vksb_nowrap_text( $vksb_step['title'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h3>
<!-- /wp:heading -->

<?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php echo esc_html( $vksb_step['text'] ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->

<?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
