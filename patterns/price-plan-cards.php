<?php
/**
 * Title: Price: Three plan cards
 * Slug: vk-site-builder/price-plan-cards
 * Description: A price section with three plan cards. Each card has a plan name, a price, a short description, a checklist of what is included, and a button. The recommended plan in the middle has a key color header and a filled button.
 * Categories: vk-site-builder-price
 * Keywords: price, plans, pricing table, cards, recommended
 *
 * @package VK_Site_Builder
 */

$vksb_plans = array(
	array(
		'name'     => __( 'ライト', 'vk-site-builder' ),
		'price'    => __( '9,800円', 'vk-site-builder' ),
		'text'     => __( 'まずは小さく、シンプルなサイトから始めたい方に。', 'vk-site-builder' ),
		'items'    => array(
			__( '5ページまで', 'vk-site-builder' ),
			__( 'スマートフォン対応', 'vk-site-builder' ),
			__( 'メールサポート', 'vk-site-builder' ),
		),
		'featured' => false,
	),
	array(
		'name'     => __( 'スタンダード', 'vk-site-builder' ),
		'price'    => __( '19,800円', 'vk-site-builder' ),
		'text'     => __( 'いちばん人気のプラン。小さな会社に必要なものがそろいます。', 'vk-site-builder' ),
		'items'    => array(
			__( '15ページまで', 'vk-site-builder' ),
			__( 'ブログ・お知らせ機能', 'vk-site-builder' ),
			__( 'メール・電話サポート', 'vk-site-builder' ),
		),
		'featured' => true,
	),
	array(
		'name'     => __( 'プレミアム', 'vk-site-builder' ),
		'price'    => __( '39,800円', 'vk-site-builder' ),
		'text'     => __( 'サイトを使って、事業を伸ばしていきたい方に。', 'vk-site-builder' ),
		'items'    => array(
			__( 'ページ数無制限', 'vk-site-builder' ),
			__( '毎月のアクセスレポート', 'vk-site-builder' ),
			__( '優先サポート', 'vk-site-builder' ),
		),
		'featured' => false,
	),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-text-align-center is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php esc_html_e( 'プランと料金', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"><?php esc_html_e( '事業に合ったプランをお選びください', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0">
<?php foreach ( $vksb_plans as $vksb_plan ) : ?>
	<?php
	$vksb_featured     = $vksb_plan['featured'];
	$vksb_border_color = $vksb_featured ? 'primary' : 'border-normal';
	$vksb_border_width = $vksb_featured ? '2px' : '1px';
	?>
<!-- wp:column {"style":{"border":{"width":"<?php echo esc_attr( $vksb_border_width ); ?>"}},"borderColor":"<?php echo esc_attr( $vksb_border_color ); ?>"} -->
<div class="wp-block-column has-border-color has-<?php echo esc_attr( $vksb_border_color ); ?>-border-color" style="border-width:<?php echo esc_attr( $vksb_border_width ); ?>">
	<?php if ( $vksb_featured ) : ?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"backgroundColor":"primary","textColor":"bg-primary","layout":{"type":"default"}} -->
<div class="wp-block-group has-bg-primary-color has-primary-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"0.15em","textTransform":"uppercase"}},"fontSize":"x-small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-x-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700;letter-spacing:0.15em;text-transform:uppercase"><?php esc_html_e( 'おすすめ', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"textColor":"bg-primary","fontSize":"x-large","className":"is-vk-trim-both"} -->
<h3 class="wp-block-heading has-text-align-center has-bg-primary-color has-text-color has-x-large-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0;line-height:1.4"><?php echo esc_html( $vksb_plan['name'] ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->
	<?php else : ?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"backgroundColor":"bg-secondary","layout":{"type":"default"}} -->
<div class="wp-block-group has-bg-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"0.15em","textTransform":"uppercase"}},"textColor":"primary","fontSize":"x-small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-primary-color has-text-color has-x-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700;letter-spacing:0.15em;text-transform:uppercase"><?php esc_html_e( 'プラン', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"fontSize":"x-large","className":"is-vk-trim-both"} -->
<h3 class="wp-block-heading has-text-align-center has-x-large-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0;line-height:1.4"><?php echo esc_html( $vksb_plan['name'] ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->
	<?php endif; ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"bottom"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1"}},"fontSize":"xxx-large","className":"is-vk-trim-both"} -->
<p class="has-xxx-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700;line-height:1"><?php echo esc_html( $vksb_plan['price'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1"}},"fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1"><?php esc_html_e( '/ 月', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}},"fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-small-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><?php echo esc_html( $vksb_plan['text'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"0"},"padding":{"top":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border-normal);border-top-width:1px;margin-top:var(--wp--preset--spacing--60);margin-bottom:0;padding-top:var(--wp--preset--spacing--60)">
	<?php foreach ( $vksb_plan['items'] as $vksb_item ) : ?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><?php echo vksb_vk_icon_only( 'fa-check', 16 ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fill"}},"fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php echo esc_html( $vksb_item ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
	<?php endforeach; ?>
</div>
<!-- /wp:group -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<?php echo vksb_vk_button( __( '申し込む', 'vk-site-builder' ), $vksb_featured ? 'primary' : 'outline', 'center' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group --></div>
<!-- /wp:column -->
<?php endforeach; ?>
</div>
<!-- /wp:columns -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}},"textColor":"text-secondary","fontSize":"x-small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-text-secondary-color has-text-color has-x-small-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><?php esc_html_e( '※ 表示価格はすべて税込です。どのプランも初月は無料です。', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
