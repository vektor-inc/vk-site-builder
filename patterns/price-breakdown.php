<?php
/**
 * Title: Price: Breakdown with icons
 * Slug: vk-site-builder/price-breakdown
 * Description: A price section that shows what the total cost is made of. Boxes with a label, an icon, and a price are joined with plus signs, followed by a short note.
 * Categories: vk-site-builder-price
 * Keywords: price, breakdown, fees, initial cost, monthly fee, icon
 * Layout: grid
 * Images: none
 *
 * @package VK_Site_Builder
 */

$vksb_fees = array(
	array(
		'label' => __( '初期費用', 'vk-site-builder' ),
		'icon'  => 'fa-flag',
		'price' => __( '29,800円', 'vk-site-builder' ),
	),
	array(
		'label' => __( '月額料金', 'vk-site-builder' ),
		'icon'  => 'fa-calendar-days',
		'price' => __( '2,980円', 'vk-site-builder' ),
	),
	array(
		'label' => __( '決済手数料', 'vk-site-builder' ),
		'icon'  => 'fa-handshake',
		'price' => __( '3.6%', 'vk-site-builder' ),
	),
);
$vksb_last_index = count( $vksb_fees ) - 1;
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-text-align-center is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php esc_html_e( '料金の内訳', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"><?php esc_html_e( '追加費用のない、わかりやすい料金です', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0;margin-bottom:0">
<?php foreach ( $vksb_fees as $vksb_index => $vksb_fee ) : ?>
<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"var:preset|spacing|60","left":"0"}}},"backgroundColor":"bg-secondary"} -->
<div class="wp-block-column is-vertically-aligned-center has-bg-secondary-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--60);padding-left:0"><!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"backgroundColor":"primary","textColor":"bg-primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-bg-primary-color has-primary-background-color has-text-color has-background has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);font-style:normal;font-weight:700"><?php echo esc_html( $vksb_fee['label'] ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<?php echo vksb_vk_icon_only( $vksb_fee['icon'], 40, 'primary', 'center' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1"}},"fontSize":"xx-large","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-xx-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700;line-height:1"><?php echo esc_html( $vksb_fee['price'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->
	<?php if ( $vksb_index < $vksb_last_index ) : ?>

<!-- wp:column {"verticalAlignment":"center","width":"2rem"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:2rem"><?php echo vksb_vk_icon_only( 'fa-plus', 24, 'primary', 'center' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:column -->
	<?php endif; ?>
<?php endforeach; ?>
</div>
<!-- /wp:columns -->

<!-- wp:paragraph {"align":"right","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}},"textColor":"text-secondary","fontSize":"x-small","className":"is-vk-trim-both"} -->
<p class="has-text-align-right has-text-secondary-color has-text-color has-x-small-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><?php esc_html_e( '※ 表示価格はすべて税込です。決済手数料にはカード決済の手数料を含みます。', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
