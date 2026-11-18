<?php
/**
 * Title: Case studies: Results in numbers
 * Slug: vk-site-builder/case-numbers
 * Description: A centered heading and four large numbers with labels in four columns on a key color background, followed by a note. For showing results and track records in numbers.
 * Categories: vk-site-builder-voice
 * Keywords: results, track record, numbers, statistics, achievements
 *
 * @package VK_Site_Builder
 */

$vksb_numbers = array(
	array( __( '制作実績', 'vk-site-builder' ), __( '500', 'vk-site-builder' ), __( '件以上', 'vk-site-builder' ) ),
	array( __( '継続率', 'vk-site-builder' ), __( '95', 'vk-site-builder' ), __( '%', 'vk-site-builder' ) ),
	array( __( '満足度', 'vk-site-builder' ), __( '4.8', 'vk-site-builder' ), __( '/ 5', 'vk-site-builder' ) ),
	array( __( '創業から', 'vk-site-builder' ), __( '20', 'vk-site-builder' ), __( '年', 'vk-site-builder' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"backgroundColor":"primary","textColor":"bg-primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-bg-primary-color has-primary-background-color has-text-color has-background" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"textColor":"bg-primary","className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-text-align-center has-bg-primary-color has-text-color is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php esc_html_e( '数字で見る実績', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"textColor":"bg-primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-bg-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"><?php esc_html_e( '多くのお客さまに、長く選ばれ続けています', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"9rem"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
<?php foreach ( $vksb_numbers as $vksb_number ) : ?>
<!-- wp:group {"style":{"border":{"left":{"color":"var:preset|color|border-normal-darkbg","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-left-color:var(--wp--preset--color--border-normal-darkbg);border-left-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700"><?php echo esc_html( $vksb_number[0] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"bottom"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1"}},"fontSize":"xxx-large","className":"is-vk-trim-both"} -->
<p class="has-xxx-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700;line-height:1"><?php echo esc_html( $vksb_number[1] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1"}},"fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1"><?php echo esc_html( $vksb_number[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"right","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"0"}}},"textColor":"text-normal-darkbg","fontSize":"x-small","className":"is-vk-trim-both"} -->
<p class="has-text-align-right has-text-normal-darkbg-color has-text-color has-x-small-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:0"><?php esc_html_e( '※ 2025 年 3 月時点の自社調べ', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
