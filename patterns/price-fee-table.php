<?php
/**
 * Title: Price: Fee table with notes
 * Slug: vk-site-builder/price-fee-table
 * Description: A fee section for professional services, with a short introduction, a table of items, fees, and notes, and a list of notes about payment below it.
 * Categories: vk-site-builder-price
 * Keywords: price, fees, table, notes, consultation, professional
 * Layout: stack
 * Images: none
 *
 * @package VK_Site_Builder
 */

$vksb_fees = array(
	array( __( '初回相談', 'vk-site-builder' ), __( '無料', 'vk-site-builder' ), __( '60分まで', 'vk-site-builder' ) ),
	array( __( '相談料', 'vk-site-builder' ), __( '5,500円', 'vk-site-builder' ), __( '30分ごと', 'vk-site-builder' ) ),
	array( __( '書類確認', 'vk-site-builder' ), __( '11,000円〜', 'vk-site-builder' ), __( '枚数で変動', 'vk-site-builder' ) ),
	array( __( '書類作成', 'vk-site-builder' ), __( '33,000円〜', 'vk-site-builder' ), __( '事前に見積り', 'vk-site-builder' ) ),
	array( __( '顧問契約', 'vk-site-builder' ), __( '月33,000円', 'vk-site-builder' ), __( '何度でも相談可', 'vk-site-builder' ) ),
);
$vksb_notes = array(
	__( '※ 表示価格はすべて税込です。', 'vk-site-builder' ),
	__( '※ 交通費などの実費は別途いただきます。', 'vk-site-builder' ),
	__( '※ 作業を始める前に、必ずお見積りをお出しします。', 'vk-site-builder' ),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-text-align-center is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php esc_html_e( '費用について', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"><?php esc_html_e( 'ご依頼の前に、費用をはっきりお伝えします', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:0"><?php esc_html_e( '初回のご相談は無料です。ご相談の内容に合わせて、かかる費用をわかりやすくご説明しますので、ご依頼いただくかどうかは落ち着いてお決めください。', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:table {"hasFixedLayout":false,"className":"is-style-vk-table-border-top-bottom","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"0"}}},"fontSize":"small"} -->
<figure class="wp-block-table is-style-vk-table-border-top-bottom has-small-font-size" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:0"><table><thead><tr><th class="has-text-align-left" data-align="left"><?php esc_html_e( '項目', 'vk-site-builder' ); ?></th><th class="has-text-align-left" data-align="left"><?php esc_html_e( '費用', 'vk-site-builder' ); ?></th><th class="has-text-align-left" data-align="left"><?php esc_html_e( '備考', 'vk-site-builder' ); ?></th></tr></thead><tbody><?php foreach ( $vksb_fees as $vksb_fee ) : ?><tr><td><strong><?php echo esc_html( $vksb_fee[0] ); ?></strong></td><td><?php echo esc_html( $vksb_fee[1] ); ?></td><td><?php echo esc_html( $vksb_fee[2] ); ?></td></tr><?php endforeach; ?></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0">
<?php foreach ( $vksb_notes as $vksb_note ) : ?>
<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"text-secondary","fontSize":"x-small","className":"is-vk-trim-both"} -->
<p class="has-text-secondary-color has-text-color has-x-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php echo esc_html( $vksb_note ); ?></p>
<!-- /wp:paragraph -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->

<?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
