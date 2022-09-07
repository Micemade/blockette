<?php
/**
 * Title: Quote and image
 * Slug: blockette/quote-with-image
 * Categories: featured
 * Block Types: core/image, core/quote
 *
 * @package blockette
 * @since 1.0.0
 */

$image_url = get_theme_file_uri( 'assets/images/beauty.webp' );
?>

<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group">
	<!-- wp:quote -->
	<blockquote class="wp-block-quote"><p>Add quote</p><cite>Add citation</cite></blockquote>
	<!-- /wp:quote -->

	<!-- wp:image {"id":850,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $image_url ); ?>" alt="" class="wp-image-850"/></figure>
	<!-- /wp:image -->
</div>
<!-- /wp:group -->
