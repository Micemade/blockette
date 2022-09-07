<?php
/**
 * Title: Landing page fashion hero
 * Slug: blockette/landing-fashion-hero
 * Categories: featured, blockette
 * Block Types: core/cover

 * @package blockette
 * @since 1.0.0
 */

$cover_image_url = get_theme_file_uri( 'assets/images/fashion-cover.webp' );
?>

<!-- wp:cover {"url":"<?php echo esc_url( $cover_image_url ); ?>","id":841,"hasParallax":true,"dimRatio":540,"overlayColor":"foreground","minHeight":40,"minHeightUnit":"vw","contentPosition":"center center","align":"full"} -->
<div class="wp-block-cover alignfull has-parallax" style="background-image:url(<?php echo esc_url( $cover_image_url ); ?>);min-height:40vw" id="fashion-hero">

	<span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-540 has-background-dim"></span>

	<div class="wp-block-cover__inner-container">
		<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400","letterSpacing":"-0.03em","lineHeight":"1.2"},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"white","className":"blockette-animate blockette-move-down blockette-delay-1","fontSize":"big"} -->
		<h2 class="has-text-align-center blockette-animate blockette-move-down blockette-delay-1 has-white-color has-text-color has-big-font-size" style="font-style:normal;font-weight:400;line-height:1.2;letter-spacing:-0.03em;margin-bottom:10px">
			<?php esc_html_e( 'Fashion, Summer and Best Apparel', 'blockette' ); ?>
		</h2>
		<!-- /wp:heading -->

		<!-- wp:spacer {"height":"3vw"} -->
		<div style="height:3vw" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"blockette-animate blockette-move-right blockette-delay-3"} -->
			<div class="wp-block-button blockette-animate blockette-move-right blockette-delay-3"><a
					class="wp-block-button__link"><?php esc_html_e( 'Browse Women', 'blockette' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"blockette-animate blockette-move-left blockette-delay-5"} -->
			<div class="wp-block-button blockette-animate blockette-move-left blockette-delay-5"><a
					class="wp-block-button__link"><?php esc_html_e( 'Browse Men', 'blockette' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

		<!-- wp:paragraph {"align":"center","textColor":"white","className":"blockette-animate blockette-move-down blockette-delay-7","fontSize":"medium"} -->
		<p class="has-text-align-center blockette-animate blockette-move-down blockette-delay-7 has-white-color has-text-color has-medium-font-size">
			<?php esc_html_e( 'browse our catalog for the best products', 'blockette' ); ?>
		</p>
		<!-- /wp:paragraph -->
	</div>
</div>
<!-- /wp:cover -->
