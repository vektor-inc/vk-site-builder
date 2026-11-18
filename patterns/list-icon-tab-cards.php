<?php
/**
 * Title: List: Cards with an icon tab on top
 * Slug: vk-site-builder/list-icon-tab-cards
 * Description: A left-aligned heading and six white cards in three columns on a light background. Each card has a large icon in a white tab that sticks out above the card, a centered title, and a text. For a list of benefits or systems.
 * Categories: vk-site-builder-list
 * Keywords: list, benefits, welfare, recruit, cards, icons, grid
 * Layout: grid
 * Images: none
 *
 * @package VK_Site_Builder
 */

$vksb_items = array(
	array( 'fa-hand-holding-heart', __( '社会保険', 'vk-site-builder' ), __( '健康保険・厚生年金・雇用保険・労災保険を完備しています。安心して長く働ける環境を整えています。', 'vk-site-builder' ) ),
	array( 'fa-syringe', __( '健康管理', 'vk-site-builder' ), __( '年に一度の健康診断に加え、インフルエンザの予防接種の費用を会社が負担しています。', 'vk-site-builder' ) ),
	array( 'fa-children', __( '休暇制度', 'vk-site-builder' ), __( '年次有給休暇のほか、夏季休暇・年末年始休暇・産前産後休暇・育児休業を取得できます。', 'vk-site-builder' ) ),
	array( 'fa-book-open-reader', __( '教育・研修', 'vk-site-builder' ), __( '新人研修から専門的な技術研修まで、成長に合わせた研修を用意しています。資格取得の費用も補助します。', 'vk-site-builder' ) ),
	array( 'fa-house-chimney', __( '住宅手当', 'vk-site-builder' ), __( '賃貸住宅にお住まいの方に、家賃の一部を毎月支給しています。', 'vk-site-builder' ) ),
	array( 'fa-sack-dollar', __( '退職金制度', 'vk-site-builder' ), __( '勤続 3 年以上の方を対象に、退職金を支給しています。将来に備えて安心して働けます。', 'vk-site-builder' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"backgroundColor":"bg-secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-bg-secondary-background-color has-background" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php esc_html_e( '安心して、長く働ける環境を', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"><?php esc_html_e( '福利厚生制度', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
<?php foreach ( $vksb_items as $vksb_item ) : ?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"2.5rem","bottom":"0"},"padding":{"top":"0","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"},"blockGap":"0"}},"backgroundColor":"bg-primary","layout":{"type":"default"}} -->
<div class="wp-block-group has-bg-primary-background-color has-background" style="margin-top:2.5rem;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"-2.5rem","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-top:-2.5rem;margin-bottom:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|60","bottom":"var:preset|spacing|40","left":"var:preset|spacing|60"}}},"backgroundColor":"bg-primary","layout":{"type":"default"}} -->
<div class="wp-block-group has-bg-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)"><?php echo vksb_vk_icon_only( $vksb_item[0], 48, 'primary', 'center' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"fontSize":"x-large","className":"is-vk-trim-both"} -->
<h3 class="wp-block-heading has-text-align-center has-x-large-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0;line-height:1.4"><?php echo esc_html( $vksb_item[1] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}},"fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-small-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><?php echo esc_html( $vksb_item[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->

<?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
