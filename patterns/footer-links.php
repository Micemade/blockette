<?php
/**
 * Title: Footer links
 * Slug: blockette/footer-links
 * Categories: text
 * Inserter: no
 *
 * @package blockette
 * @since 1.0.0
 */

?>

<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group">
	<!-- wp:paragraph {"fontSize":"normal"} -->
	<p class="has-normal-font-size">Copyright <?php echo esc_html( gmdate( 'Y' ) ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:site-title {"level":0,"fontSize":"normal"} /-->

	<!-- wp:paragraph {"fontSize":"normal"} -->
	<p class="has-normal-font-size"><?php echo wp_kses_post( Blockette\Block_Patterns::privacy() ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
