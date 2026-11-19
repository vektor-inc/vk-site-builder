<?php
/**
 * Title: Details: Facility description and information table
 * Slug: vk-site-builder/detail-facility-info
 * Description: A detailed explanation of a facility with a centered heading and a wide photo, followed by a description on the left and a table of information such as address and opening hours on the right.
 * Categories: vk-site-builder-details
 * Keywords: details, facility, access, opening hours, table, image and text
 * Layout: split, stack
 * Images: photo
 *
 * @package VK_Site_Builder
 */

$vksb_info = array(
	__( '所在地', 'vk-site-builder' )      => __( '〒000-0000 サンプル県サンプル市サンプル町0-0-0', 'vk-site-builder' ),
	__( '営業時間', 'vk-site-builder' ) => __( '9:00〜18:00', 'vk-site-builder' ),
	__( '定休日', 'vk-site-builder' )       => __( '土曜・日曜・祝日', 'vk-site-builder' ),
	__( '席数', 'vk-site-builder' )        => __( '20席', 'vk-site-builder' ),
	__( 'アクセス', 'vk-site-builder' )       => __( 'サンプル駅から徒歩5分', 'vk-site-builder' ),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"backgroundColor":"bg-secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-bg-secondary-background-color has-background" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-text-align-center is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php esc_html_e( '事務所のご案内', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<?php echo vksb_spacer( '40' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'ご来社をお待ちしています', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:image {"aspectRatio":"21/9","scale":"cover","sizeSlug":"large","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-large" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( vksb_pattern_image_url( 'about-office.jpg' ) ); ?>" alt="" style="aspect-ratio:21/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"fontSize":"x-large","className":"is-vk-trim-both"} -->
<h3 class="wp-block-heading has-x-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php echo vksb_nowrap_text( __( '<span class="text-nowrap">ホームページのことを、</span><span class="text-nowrap">じっくり話せる場所</span>', 'vk-site-builder' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h3>
<!-- /wp:heading -->

<?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php esc_html_e( '事務所は駅近くのビルの3階にあります。打ち合わせ室には大きな画面があり、ホームページを一緒に見ながらお話しできます。', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'ご来社の際は、事前にご連絡ください。オンラインでの打ち合わせにも対応しています。', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"fontSize":"x-large","className":"is-vk-trim-both"} -->
<h3 class="wp-block-heading has-x-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php esc_html_e( '基本情報', 'vk-site-builder' ); ?></h3>
<!-- /wp:heading -->

<?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:table {"className":"is-style-vk-table-border-top-bottom","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<figure class="wp-block-table is-style-vk-table-border-top-bottom has-small-font-size" style="margin-top:0;margin-bottom:0"><table><tbody><?php foreach ( $vksb_info as $vksb_label => $vksb_value ) : ?><tr><td><strong><?php echo esc_html( $vksb_label ); ?></strong></td><td><?php echo esc_html( $vksb_value ); ?></td></tr><?php endforeach; ?></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
