<?php
/**
 * Title: List: Text rows in two columns
 * Slug: vk-site-builder/list-text-rows
 * Description: A centered heading and eight items in two columns, each a row with a title, a short text, and an arrow, separated by lines. For a list of menus or departments that link to detail pages.
 * Categories: vk-site-builder-list
 * Keywords: list, menu, departments, services, rows, links, many items
 *
 * @package VK_Site_Builder
 */

$vksb_items = array(
	array( __( '一般内科', 'vk-site-builder' ), __( '風邪・発熱・腹痛など、体調の不安はまずご相談ください。', 'vk-site-builder' ) ),
	array( __( '生活習慣病', 'vk-site-builder' ), __( '高血圧・糖尿病・脂質異常症の治療と生活の見直し。', 'vk-site-builder' ) ),
	array( __( 'アレルギー外来', 'vk-site-builder' ), __( '花粉症やじんましんの検査と治療を行います。', 'vk-site-builder' ) ),
	array( __( '健康診断', 'vk-site-builder' ), __( '企業健診・特定健診・雇入れ時健診に対応します。', 'vk-site-builder' ) ),
	array( __( '予防接種', 'vk-site-builder' ), __( 'インフルエンザなど、各種ワクチンを接種できます。', 'vk-site-builder' ) ),
	array( __( '禁煙外来', 'vk-site-builder' ), __( '飲み薬とカウンセリングで、禁煙を支えます。', 'vk-site-builder' ) ),
	array( __( '在宅医療', 'vk-site-builder' ), __( '通院が難しい方のご自宅へ、医師がうかがいます。', 'vk-site-builder' ) ),
	array( __( 'オンライン診療', 'vk-site-builder' ), __( 'スマートフォンで、自宅から診察を受けられます。', 'vk-site-builder' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-text-align-center is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php esc_html_e( '診療案内', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"><?php esc_html_e( '詳しい内容は、各診療のページをご覧ください', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0">
<?php foreach ( array_chunk( $vksb_items, 4 ) as $vksb_col ) : ?>
<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column">
	<?php foreach ( $vksb_col as $vksb_item ) : ?>
<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"fontSize":"medium","className":"is-vk-trim-both"} -->
<h3 class="wp-block-heading has-medium-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php echo esc_html( $vksb_item[0] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"textColor":"text-secondary","fontSize":"x-small","className":"is-vk-trim-both"} -->
<p class="has-text-secondary-color has-text-color has-x-small-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"><?php echo esc_html( $vksb_item[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php echo vksb_vk_icon_only( 'fa-chevron-right', 14 ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
	<?php endforeach; ?>
</div>
<!-- /wp:column -->
<?php endforeach; ?>
</div>
<!-- /wp:columns -->

<?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
