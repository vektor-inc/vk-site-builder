<?php
/**
 * Title: Hero: Centered on dark background
 * Slug: vk-site-builder/hero-centered-dark
 * Description: A full-width hero with a centered heading, lead text, and two buttons on a photo with a dark overlay.
 * Categories: vk-site-builder-hero, banner
 * Keywords: hero, header, main visual
 * Layout: stack
 * Images: photo
 *
 * @package VK_Site_Builder
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( vksb_pattern_image_url( 'about-office.jpg' ) ); ?>","dimRatio":80,"overlayColor":"bg-dark","isUserOverlayColor":true,"align":"full","style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-cover alignfull" style="padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( vksb_pattern_image_url( 'about-office.jpg' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-bg-dark-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":"var:preset|spacing|70","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"0.15em","textTransform":"uppercase"}},"textColor":"bg-primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-bg-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700;letter-spacing:0.15em;text-transform:uppercase"><?php esc_html_e( '中小企業のためのホームページ制作', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '40' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"textColor":"bg-primary","fontSize":"xxx-large","className":"is-vk-trim-both"} -->
<h1 class="wp-block-heading has-text-align-center has-bg-primary-color has-text-color has-xxx-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php echo vksb_nowrap_text( __( '<span class="text-nowrap">御社の強みを、</span><span class="text-nowrap">お客さまを呼ぶ</span><span class="text-nowrap">ホームページに</span>', 'vk-site-builder' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h1>
<!-- /wp:heading -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"medium","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-medium-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php esc_html_e( '御社ならではの魅力をうかがい、訪れた人にひと目で伝わるページに仕上げます。', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|60","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><?php echo vksb_vk_button( __( 'お問い合わせ', 'vk-site-builder' ), 'white' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<?php echo vksb_vk_button( __( '制作実績を見る', 'vk-site-builder' ), 'outline-white' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|70","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover -->
