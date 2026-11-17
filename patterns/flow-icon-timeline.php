<?php
/**
 * Title: Flow: Icon timeline with cards
 * Slug: vk-site-builder/flow-icon-timeline
 * Description: A section that lists the steps of a process with a step label and an icon on the left joined by a dashed line, and a card with a title and a description on the right. Uses the VK Blocks icon block.
 * Categories: vk-site-builder-flow
 * Keywords: flow, steps, process, timeline, icon
 *
 * @package VK_Site_Builder
 */

$vksb_steps = array(
	array(
		'icon_style' => 'fa-solid',
		'icon_name'  => 'fa-mobile-screen-button',
		'title'      => __( 'Contact us', 'vk-site-builder' ),
		'text'       => __( 'Start by contacting us from the form. It is fine if your request is still vague. We will guide you based on your situation.', 'vk-site-builder' ),
	),
	array(
		'icon_style' => 'fa-regular',
		'icon_name'  => 'fa-comments',
		'title'      => __( 'Hearing', 'vk-site-builder' ),
		'text'       => __( 'Our staff will call you back and ask about your current situation, issues, and wishes. Together we look for the best direction.', 'vk-site-builder' ),
	),
	array(
		'icon_style' => 'fa-regular',
		'icon_name'  => 'fa-file-lines',
		'title'      => __( 'Proposal and estimate', 'vk-site-builder' ),
		'text'       => __( 'Based on the hearing, we propose the best plan and send you an estimate.', 'vk-site-builder' ),
	),
	array(
		'icon_style' => 'fa-solid',
		'icon_name'  => 'fa-pen-nib',
		'title'      => __( 'Contract', 'vk-site-builder' ),
		'text'       => __( 'Once you are happy with the proposal, we sign a contract, including a non-disclosure agreement if needed.', 'vk-site-builder' ),
	),
	array(
		'icon_style' => 'fa-solid',
		'icon_name'  => 'fa-laptop-code',
		'title'      => __( 'Delivery of the service', 'vk-site-builder' ),
		'text'       => __( 'We carry out the work as agreed and keep you updated on the progress along the way.', 'vk-site-builder' ),
	),
);
$vksb_last_index = count( $vksb_steps ) - 1;
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-normal","width":"1px"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-normal);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><!-- wp:spacer {"height":"var:preset|spacing|70","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<h2 class="wp-block-heading has-text-align-center is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'Flow of service', 'vk-site-builder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"fontSize":"small","className":"is-vk-trim-both"} -->
<p class="has-text-align-center has-small-font-size is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"><?php esc_html_e( 'From your first contact to the start of the service', 'vk-site-builder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|60","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
<?php
foreach ( $vksb_steps as $vksb_index => $vksb_step ) :
	$vksb_is_last = ( $vksb_index === $vksb_last_index );
	?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"stretch"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"},"layout":{"selfStretch":"fixedNoShrink","flexSize":"auto"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontSize":"x-small","className":"is-vk-trim-both"} -->
<p class="has-primary-color has-text-color has-x-small-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700"><?php echo esc_html( sprintf( 'STEP %02d', $vksb_index + 1 ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:vk-blocks/icon {"faIcon":"\u003ci class=\u0022<?php echo esc_attr( $vksb_step['icon_style'] . ' ' . $vksb_step['icon_name'] ); ?>\u0022\u003e\u003c/i\u003e","iconSize":26,"iconMargin":16,"iconAlign":"center","iconColor":"primary"} -->
<div class="wp-block-vk-blocks-icon vk_icon"><div class="vk_icon_frame text-center"><div class="vk_icon_border has-background has-primary-background-color" style="width:calc(26px + 32px);height:calc(26px + 32px)"><i style="font-size:26px" class="<?php echo esc_attr( $vksb_step['icon_style'] ); ?> vk_icon_font  <?php echo esc_attr( $vksb_step['icon_name'] ); ?>"></i></div></div></div>
<!-- /wp:vk-blocks/icon -->
<?php if ( ! $vksb_is_last ) : ?>

<!-- wp:group {"style":{"border":{"left":{"color":"var:preset|color|text-secondary","style":"dashed","width":"1px"}},"layout":{"selfStretch":"fill"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-left-color:var(--wp--preset--color--text-secondary);border-left-style:dashed;border-left-width:1px"></div>
<!-- /wp:group -->
<?php endif; ?>
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"<?php echo $vksb_is_last ? '0' : 'var:preset|spacing|60'; ?>"}},"layout":{"selfStretch":"fill"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-bottom:<?php echo $vksb_is_last ? '0' : 'var(--wp--preset--spacing--60)'; ?>"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"bg-secondary","layout":{"type":"default"}} -->
<div class="wp-block-group has-bg-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"large","className":"is-vk-trim-both"} -->
<h3 class="wp-block-heading has-large-font-size is-vk-trim-both" style="margin-top:0;margin-bottom:0"><?php echo esc_html( $vksb_step['title'] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}},"className":"is-vk-trim-both"} -->
<p class="is-vk-trim-both" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><?php echo esc_html( $vksb_step['text'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|70","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
