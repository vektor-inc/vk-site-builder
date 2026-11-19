<?php
/**
 * Title: Flow: Timeline with step circles
 * Slug: vk-site-builder/flow-timeline
 * Description: A section that lists the steps of a process as a vertical timeline, with a step circle on the left joined by a line, and a title and a description on the right.
 * Categories: vk-site-builder-flow
 * Keywords: flow, steps, process, timeline
 * Layout: stack
 * Images: none
 *
 * @package VK_Site_Builder
 */

$vksb_steps = array(
	array(
		'title' => __( 'お問い合わせ', 'vk-site-builder' ),
		'text'  => __( 'お問い合わせフォームまたはお電話でご連絡ください。', 'vk-site-builder' ),
	),
	array(
		'title' => __( 'ヒアリング', 'vk-site-builder' ),
		'text'  => __( '担当者からご連絡し、現在の状況やご要望をうかがいます。', 'vk-site-builder' ),
	),
	array(
		'title' => __( '<span class="text-nowrap">ご提案・</span><span class="text-nowrap">お見積り</span>', 'vk-site-builder' ),
		'text'  => __( 'ヒアリングの内容をもとに、最適なプランをご提案し、お見積りをお送りします。', 'vk-site-builder' ),
	),
	array(
		'title' => __( 'ご契約', 'vk-site-builder' ),
		'text'  => __( 'ご契約を結びます。必要に応じて、秘密保持契約も結びます。', 'vk-site-builder' ),
	),
	array(
		'title' => __( '納品', 'vk-site-builder' ),
		'text'  => __( '仕上がりをご確認いただき、必要に応じて調整してから納品します。', 'vk-site-builder' ),
	),
);
$vksb_last_index = count( $vksb_steps ) - 1;
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><!-- wp:spacer {"height":"var:preset|spacing|70","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-text-align-center is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php esc_html_e( 'ご依頼の流れ', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<?php echo vksb_spacer( '40' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'お問い合わせから納品まで', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|60","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
<?php foreach ( $vksb_steps as $vksb_index => $vksb_step ) : ?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"100px"},"dimensions":{"minHeight":"3rem"},"spacing":{"blockGap":"var:preset|spacing|30"},"layout":{"selfStretch":"fixedNoShrink","flexSize":"3rem"}},"backgroundColor":"primary","textColor":"bg-primary","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-bg-primary-color has-primary-background-color has-text-color has-background" style="border-radius:100px;min-height:3rem"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1"}},"fontSize":"tiny","className":"is-vk-trim-both"} -->
<p class="has-tiny-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1">STEP</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium","className":"is-vk-trim-both"} -->
<p class="has-medium-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700;line-height:1"><?php echo esc_html( (string) ( $vksb_index + 1 ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"x-large","className":"is-vk-trim-both"} -->
<h3 class="wp-block-heading has-x-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php echo vksb_nowrap_text( $vksb_step['title'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"stretch"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"layout":{"selfStretch":"fixedNoShrink","flexSize":"3rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group">
<?php if ( $vksb_index < $vksb_last_index ) : ?>
<!-- wp:group {"style":{"border":{"left":{"color":"var:preset|color|border-normal","width":"1px"}},"layout":{"selfStretch":"fill"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-left-color:var(--wp--preset--color--border-normal);border-left-width:1px"></div>
<!-- /wp:group -->
<?php endif; ?>
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"<?php echo $vksb_index < $vksb_last_index ? 'var:preset|spacing|60' : '0'; ?>"}},"layout":{"selfStretch":"fill"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:<?php echo $vksb_index < $vksb_last_index ? 'var(--wp--preset--spacing--60)' : '0'; ?>"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php echo esc_html( $vksb_step['text'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|70","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
