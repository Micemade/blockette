<?php
/**
 * Title: Header with featured post image and title
 * Slug: blockette/header-featured-image-title
 * Categories: featured, blockette
 * Block Types: core/cover, core/group
 *
 * @package blockette
 * @since 1.0.0
 */

?>

<!-- wp:cover {"useFeaturedImage":true,"hasParallax":true,"dimRatio":40,"overlayColor":"black","minHeight":30,"minHeightUnit":"vw","contentPosition":"top center","align":"full","style":{"spacing":{"padding":{"right":"var(--wp--custom--h-spacing, 2.375rem)","left":"var(--wp--custom--h-spacing, 2.375rem)"}}}} -->
<div class="wp-block-cover alignfull has-parallax has-custom-content-position is-position-top-center"
	style="padding-right:var(--wp--custom--h-spacing, 2.375rem);padding-left:var(--wp--custom--h-spacing, 2.375rem);min-height:30vw"
	id="fashion-hero"><span aria-hidden="true"
		class="wp-block-cover__background has-black-background-color has-background-dim-40 has-background-dim"></span>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
			<div class="wp-block-group">
				<!-- wp:site-logo {"width":40} /-->

				<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"fontSize":"large"} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
			<div class="wp-block-group">
				<!-- wp:navigation {"ref":820,"textColor":"white","overlayBackgroundColor":"background","overlayTextColor":"foreground","layout":{"type":"flex","justifyContent":"right"},"fontSize":"normal"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:spacer {"height":"5vw"} -->
		<div style="height:5vw" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:post-title {"textAlign":"center","style":{"spacing":{"margin":{"top":"2vw","right":"0vw","bottom":"0vw","left":"0vw"}}},"textColor":"white","fontSize":"big"} /-->

		<!-- wp:post-date {"textAlign":"center","textColor":"background"} /-->
	</div>
</div>
<!-- /wp:cover -->