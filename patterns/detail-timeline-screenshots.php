<?php
/**
 * Title: Details: Timeline steps with screenshots
 * Slug: vk-site-builder/detail-timeline-screenshots
 * Description: A how-to section that explains how to use a product or a plugin as a vertical timeline. Each step has a step circle on the left joined by a line, and a title, a description, and a large screenshot on the right.
 * Categories: vk-site-builder-details
 * Keywords: details, how to use, steps, timeline, screenshot, manual
 * Layout: stack
 * Images: figure, photo
 *
 * @package VK_Site_Builder
 */

$vksb_steps = array(
	array(
		'title' => __( '<span class="text-nowrap">プラグインを</span><span class="text-nowrap">インストールして</span><span class="text-nowrap">有効化する</span>', 'vk-site-builder' ),
		'text'  => __( '管理画面の「プラグイン」→「新規追加」でプラグインを検索し、インストールしてから「有効化」をクリックします。', 'vk-site-builder' ),
	),
	array(
		'title' => __( '設定画面を開く', 'vk-site-builder' ),
		'text'  => __( '有効化すると、管理画面のメニューに新しい項目が追加されます。クリックすると設定画面が開きます。', 'vk-site-builder' ),
	),
	array(
		'title' => __( '設定を選ぶ', 'vk-site-builder' ),
		'text'  => __( '使いたい機能を有効にし、表示する場所と表示のしかたを選びます。', 'vk-site-builder' ),
	),
	array(
		'title' => __( '設定を保存する', 'vk-site-builder' ),
		'text'  => __( '画面下の「変更を保存」ボタンをクリックします。保存されると、メッセージが表示されます。', 'vk-site-builder' ),
	),
	array(
		'title' => __( '<span class="text-nowrap">サイトで</span><span class="text-nowrap">確認する</span>', 'vk-site-builder' ),
		'text'  => __( 'サイトを開いて、設定したとおりに表示されているか確認します。', 'vk-site-builder' ),
	),
);
$vksb_last_index = count( $vksb_steps ) - 1;
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><!-- wp:spacer {"height":"var:preset|spacing|70","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.4"}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-text-align-center is-vk-trim-both" style="margin-top:0;margin-bottom:0;line-height:1.4"><?php esc_html_e( '設定の手順', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<?php echo vksb_spacer( '40' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php esc_html_e( '管理画面で、次の手順で設定します', 'vk-site-builder' ); ?></p>
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
<!-- /wp:paragraph -->

<?php echo vksb_spacer( '50' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

<!-- wp:image {"sizeSlug":"large","borderColor":"border-normal","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"width":"1px"}}} -->
<figure class="wp-block-image size-large has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( vksb_pattern_image_url( 'dummy-IT-service.jpg' ) ); ?>" alt="" class="has-border-color has-border-normal-border-color" style="border-width:1px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|70","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
