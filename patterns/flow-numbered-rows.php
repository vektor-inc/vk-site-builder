<?php
/**
 * Title: Flow: Numbered rows
 * Slug: vk-site-builder/flow-numbered-rows
 * Description: A section that lists the steps of a process as rows divided by lines, each with a step badge, a title, and a description.
 * Categories: vk-site-builder-flow
 * Keywords: flow, steps, process, list
 * Layout: stack
 * Images: none
 *
 * @package VK_Site_Builder
 */

$vksb_steps = array(
	array(
		'title' => __( '<span class="text-nowrap">フォームから</span><span class="text-nowrap">応募</span>', 'vk-site-builder' ),
		'text'  => __( '応募フォームに入力してください。5分ほどで完了します。', 'vk-site-builder' ),
	),
	array(
		'title' => __( '書類選考', 'vk-site-builder' ),
		'text'  => __( '応募書類を拝見し、1週間以内にご連絡します。', 'vk-site-builder' ),
	),
	array(
		'title' => __( '面接', 'vk-site-builder' ),
		'text'  => __( '対面またはオンラインで面接します。仕事について、何でも気軽にご質問ください。', 'vk-site-builder' ),
	),
	array(
		'title' => __( '内定', 'vk-site-builder' ),
		'text'  => __( '結果をお伝えし、入社日をご相談します。', 'vk-site-builder' ),
	),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><!-- wp:spacer {"height":"var:preset|spacing|70","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-text-align-center is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php esc_html_e( '選考の流れ', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<?php echo vksb_spacer( '40' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php esc_html_e( '応募から内定まで、2週間ほどです', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|60","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border-normal);border-top-width:1px;margin-top:0;margin-bottom:0">
<?php foreach ( $vksb_steps as $vksb_index => $vksb_step ) : ?>
<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-bottom:0"><?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}},"layout":{"selfStretch":"fixedNoShrink","flexSize":"auto"}},"backgroundColor":"primary","textColor":"bg-primary","layout":{"type":"default"}} -->
<div class="wp-block-group has-bg-primary-color has-primary-background-color has-text-color has-background" style="padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '40' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"0.15em","textTransform":"uppercase"}},"fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700;letter-spacing:0.15em;text-transform:uppercase"><?php echo esc_html( sprintf( 'STEP %02d', $vksb_index + 1 ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '40' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"layout":{"selfStretch":"fill"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"x-large","className":"is-vk-trim-both"} -->
<h3 class="wp-block-heading has-x-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php echo vksb_nowrap_text( $vksb_step['title'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h3>
<!-- /wp:heading -->

<?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php echo esc_html( $vksb_step['text'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|70","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
