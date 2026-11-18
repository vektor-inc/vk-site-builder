<?php
/**
 * Title: Testimonials: Reviews with star ratings
 * Slug: vk-site-builder/voice-review-stars
 * Description: A centered heading and three reviews in three columns, each with a five-star rating, a title, a comment, and the name of the reviewer.
 * Categories: vk-site-builder-voice
 * Keywords: testimonials, reviews, ratings, stars, app, product
 *
 * @package VK_Site_Builder
 */

// 星の数（0.5 刻み）.
$vksb_reviews = array(
	array(
		'stars' => 4,
		'title' => __( '家族みんなで使っています', 'vk-site-builder' ),
		'text'  => __( '子どもの予定や記録を家族で共有できるので、声をかけ合うきっかけが増えました。コメント機能も楽しく使っています。', 'vk-site-builder' ),
		'name'  => __( '30 代・女性', 'vk-site-builder' ),
	),
	array(
		'stars' => 4.5,
		'title' => __( '毎日の記録が続くようになりました', 'vk-site-builder' ),
		'text'  => __( '通知が届くので、記録を忘れなくなりました。グラフで振り返れるのも励みになっています。', 'vk-site-builder' ),
		'name'  => __( '40 代・男性', 'vk-site-builder' ),
	),
	array(
		'stars' => 5,
		'title' => __( '予定がすっきり整理できました', 'vk-site-builder' ),
		'text'  => __( 'ばらばらだった習い事の予定が、ひとつにまとまりました。家族全員が同じ情報を見られるのも便利です。', 'vk-site-builder' ),
		'name'  => __( '30 代・男性', 'vk-site-builder' ),
	),
);
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-text-align-center is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php esc_html_e( '利用者のレビュー', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"><?php esc_html_e( 'アプリストアに寄せられた声の一部をご紹介します', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '60' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
<?php foreach ( $vksb_reviews as $vksb_review ) : ?>
<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|primary","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|50"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--primary);border-top-width:1px;padding-top:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group">
	<?php
	for ( $vksb_i = 1; $vksb_i <= 5; $vksb_i++ ) {
		if ( $vksb_i <= $vksb_review['stars'] ) {
			$vksb_star = 'fa-star';
		} elseif ( $vksb_i - 0.5 <= $vksb_review['stars'] ) {
			$vksb_star = 'fa-star-half-stroke';
		} else {
			$vksb_star = '';
		}
		echo $vksb_star ? vksb_vk_icon_only( $vksb_star, 18 ) : vksb_vk_icon_only( 'fa-star', 18, 'border-normal' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		echo "\n\n";
	}
	?>
<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700"><?php echo esc_html( number_format( $vksb_review['stars'], 1 ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}},"typography":{"lineHeight":"1.5"}},"fontSize":"large","className":"is-vk-trim-both"} -->
<h3 class="wp-block-heading has-large-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0;line-height:1.5"><?php echo esc_html( $vksb_review['title'] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}},"fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-small-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><?php echo esc_html( $vksb_review['text'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}},"textColor":"text-secondary","fontSize":"x-small","className":"is-vk-trim-both"} -->
<p class="has-text-secondary-color has-text-color has-x-small-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><?php echo esc_html( $vksb_review['name'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->

<?php echo vksb_spacer( '70' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group -->
