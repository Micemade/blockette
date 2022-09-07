<?php
/**
 * Title: Landing beauty section
 * Slug: blockette/landing-beauty-section
 * Categories: featured, blockette
 * Block Types: core/group, core/cover

 * @package blockette
 * @since 1.0.0
 */

$media_url = get_theme_file_uri( 'assets/images/woman-curls.jpg' );
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"gradient":"diagonal-primary-secondary"} -->
<div class="wp-block-group alignwide has-diagonal-primary-secondary-gradient-background has-background" id="separator-rainbow" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
	<!-- wp:spacer {"height":"10px"} -->
	<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"5vw"} -->
<div style="height:5vw" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px"}},"className":"blockette-z-index-top"} -->
<div class="wp-block-group alignwide blockette-z-index-top">

	<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"3px","textTransform":"uppercase"}},"fontSize":"medium","className":"blockette-animate blockette-move-down blockette-delay-1"} -->
	<p class="has-medium-font-size blockette-animate blockette-move-down blockette-delay-1" style="text-transform:uppercase;letter-spacing:3px">
		–everything you need to<strong> stay beautiful–</strong>
	</p>
	<!-- /wp:paragraph -->

	<!-- wp:spacer {"height":"4vw"} -->
	<div style="height:4vw" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:columns -->
	<div class="wp-block-columns">

		<!-- wp:column {"verticalAlignment":"bottom","width":"35%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:35%">
			<!-- wp:paragraph {"align":"right","style":{"typography":{"lineHeight":"0.2"}},"textColor":"primary","fontSize":"enormous","className":"blockette-animate blockette-move-right blockette-delay-1"} -->
			<p class="has-text-align-right has-primary-color has-text-color has-enormous-font-size blockette-animate blockette-move-right blockette-delay-1"
				style="line-height:0.2"><strong>25K</strong></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"75%","gradient":"diagonal-primary-secondary","className":"blockette-animate blockette-move-left blockette-delay-3"} -->
		<div class="wp-block-column has-diagonal-primary-secondary-gradient-background has-background blockette-animate blockette-move-left blockette-delay-3"
			style="flex-basis:75%">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"center","flexWrap":"nowrap"}} -->
			<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
				<!-- wp:paragraph {"backgroundColor":"transparent","textColor":"white","fontSize":"large"} -->
				<p
					class="has-white-color has-transparent-background-color has-text-color has-background has-large-font-size">
					of monthly HAIRCARE PRODUCTS shipped </p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:media-text {"align":"full","mediaPosition":"right","mediaId":950,"mediaLink":"<?php echo esc_url( $media_url ); ?>","mediaType":"image","mediaWidth":40,"verticalAlignment":"bottom","imageFill":false,"backgroundColor":"secondary","className":"blockette-z-index-zero blockette-animate blockette-move-up blockette-delay-1"} -->
<div class="wp-block-media-text alignfull has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-bottom blockette-z-index-zero has-secondary-background-color has-background blockette-animate blockette-move-up blockette-delay-1"
	style="grid-template-columns:auto 40%">
	<figure class="wp-block-media-text__media">
		<img src="<?php echo esc_url( $media_url ); ?>" alt="Woman with curls" class="wp-image-950 size-full" />
	</figure>
	<div class="wp-block-media-text__content">
		<!-- wp:spacer {"height":"4vw"} -->
		<div style="height:4vw" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"fontSize":"medium"} -->
		<p class="has-medium-font-size" style="line-height:1.5">Beauty is within, but any help is much appreciated.</p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"},"blockGap":"0px"}},"backgroundColor":"black","textColor":"white","layout":{"inherit":false}} -->
		<div class="wp-block-group alignfull has-white-color has-black-background-color has-text-color has-background"
			style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px">
			<!-- wp:heading {"textColor":"white","fontSize":"x-large"} -->
			<h2 class="has-white-color has-text-color has-x-large-font-size" id="h-heading">Hair extensions</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"large"} -->
			<p class="has-large-font-size">Create your exotic look.</p>
			<!-- /wp:paragraph -->

			<!-- wp:spacer {"height":"4vw"} -->
			<div style="height:4vw" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"width":100,"className":"is-style-fill","fontSize":"small"} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-fill has-small-font-size">
					<a class="wp-block-button__link">Browse hair extensions</a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:spacer {"height":"4vw"} -->
			<div style="height:4vw" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:media-text -->
