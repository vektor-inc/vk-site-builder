<?php
/**
 * Title: CTA: Box in the main color with a large English word
 * Slug: vk-site-builder/cta-box-primary
 * Description: A call to action in a box with a background photo covered in the main color, placed within the content width. A large English word, a heading, and a short text on the left, and a check list and two buttons on the right. The second button has a download icon.
 * Categories: vk-site-builder-cta
 * Keywords: cta, call to action, contact, box
 * Layout: split
 * Images: photo
 *
 * @package VK_Site_Builder
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:cover {"url":"<?php echo esc_url( vksb_pattern_image_url( 'about-office.jpg' ) ); ?>","dimRatio":80,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":1,"minHeightUnit":"px","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","right":"var:preset|spacing|60","bottom":"0","left":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--60);padding-bottom:0;padding-left:var(--wp--preset--spacing--60);min-height:1px"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( vksb_pattern_image_url( 'about-office.jpg' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__inner-container"><?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"0.04em","lineHeight":"1"}},"textColor":"bg-primary","fontSize":"xxx-huge","className":"is-vk-trim-both"} -->
<p class="has-bg-primary-color has-text-color has-xxx-huge-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700;letter-spacing:0.04em;line-height:1">Contact</p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '40' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"textColor":"bg-primary","fontSize":"x-large","className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-bg-primary-color has-text-color has-x-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php echo vksb_nowrap_text( __( '<span class="text-nowrap">まずは</span><span class="text-nowrap">ご相談ください</span>', 'vk-site-builder' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h2>
<!-- /wp:heading -->

<?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php echo vksb_nowrap_text( __( '<span class="text-nowrap">まだ決まっていないことも、</span><span class="text-nowrap">そのままお聞かせください。</span>', 'vk-site-builder' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:list {"className":"is-style-vk-check-mark","color":"bg-primary","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<ul style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700" class="wp-block-list is-style-vk-check-mark"><!-- wp:list-item {"className":"is-vk-trim-both"} -->
<li class="is-vk-trim-both"><?php echo vksb_nowrap_text( __( '<span class="text-nowrap">相談とお見積りは</span><span class="text-nowrap">無料</span>', 'vk-site-builder' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></li>
<!-- /wp:list-item --><!-- wp:list-item {"className":"is-vk-trim-both"} -->
<li class="is-vk-trim-both"><?php echo vksb_nowrap_text( __( '<span class="text-nowrap">オンラインでも</span><span class="text-nowrap">打ち合わせ</span>', 'vk-site-builder' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></li>
<!-- /wp:list-item --><!-- wp:list-item {"className":"is-vk-trim-both"} -->
<li class="is-vk-trim-both"><?php esc_html_e( '1営業日以内にご返信', 'vk-site-builder' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><?php echo vksb_vk_button( __( 'お問い合わせ', 'vk-site-builder' ), 'white', 'left', null, 'md' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<?php echo vksb_vk_button( __( '資料請求', 'vk-site-builder' ), 'outline-white', 'left', 'fa-download', 'md' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div></div>
<!-- /wp:cover -->

<?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
