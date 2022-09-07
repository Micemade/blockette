<?php
/**
 * Title: Landing discount section
 * Slug: blockette/landing-discount-section
 * Categories: featured, blockette
 * Block Types: core/group, core/cover

 * @package blockette
 * @since 1.0.0
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}},"gradient":"vertical-primary-secondary"} -->
<div class="wp-block-group alignfull has-vertical-primary-secondary-gradient-background has-background"
	style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
	<!-- wp:spacer {"height":"1vw"} -->
	<div style="height:1vw" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}},"gradient":"vertical-background-secondary"} -->
<div class="wp-block-group alignfull has-vertical-background-secondary-gradient-background has-background"
	id="section-discount" style="margin-top:0px;margin-bottom:0px">
	<!-- wp:paragraph {"className":"blockette-animate blockette-move-right blockette-delay-1","fontSize":"large"} -->
	<p class="blockette-animate blockette-move-right blockette-delay-1 has-large-font-size">Discount for registration on
		our
		shop</p>
	<!-- /wp:paragraph -->

	<!-- wp:spacer {"height":"5vw"} -->
	<div style="height:5vw" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"100%"} -->
		<div class="wp-block-column" style="flex-basis:100%">
			<!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"1rem","right":"1rem","bottom":"1rem","left":"1rem"}}},"borderColor":"secondary","backgroundColor":"primary","layout":{"type":"flex","allowOrientation":false,"justifyContent":"right"}} -->
			<div class="wp-block-group has-border-color has-secondary-border-color has-primary-background-color has-background"
				style="border-width:1px;padding-top:1rem;padding-right:1rem;padding-bottom:1rem;padding-left:1rem">
				<!-- wp:paragraph {"textColor":"white","className":"blockette-animate blockette-move-left blockette-delay-5","fontSize":"normal"} -->
				<p
					class="blockette-animate blockette-move-left blockette-delay-5 has-white-color has-text-color has-normal-font-size">
					→ Claim your discount</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"100%"} -->
		<div class="wp-block-column" style="flex-basis:100%">
			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"0.5"}},"textColor":"background","className":"blockette-txt-shadow-big blockette-animate blockette-move-left blockette-delay-3","fontSize":"enormous"} -->
			<p class="blockette-txt-shadow-big blockette-animate blockette-move-left blockette-delay-3 has-background-color has-text-color has-enormous-font-size"
				style="line-height:0.5"><strong>10%</strong>
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->