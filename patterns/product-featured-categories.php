<?php
/**
 * Title: Featured product categories
 * Slug: blockette/product-featured-categories
 * Categories: featured, blockette
 * Block Types: core/columns, woocommerce/featured-category

 * @package blockette
 * @since 1.0.0
 */

$cat_image_01 = get_theme_file_uri( 'assets/images/beauty.webp' );
$cat_image_02 = get_theme_file_uri( 'assets/images/woman-headphones.jpg' );
$cat_image_03 = get_theme_file_uri( 'assets/images/woman-tshirt.jpg' );
?>

<!-- wp:group -->
<div class="wp-block-group">
	<!-- wp:spacer {"height":"3vw"} -->
	<div style="height:3vw" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"className":"blockette-animate blockette-move-down blockette-delay-1"} -->
	<h2 class="has-text-align-center blockette-animate blockette-move-down blockette-delay-1" style="font-style:normal;font-weight:400">
		<?php esc_html_e( 'Featured product categories', 'blockette' ); ?>
	</h2>
	<!-- /wp:heading -->

</div>
<!-- /wp:group -->

<?php
// If WooCommerce is not active.
if ( ! defined( 'WC_PLUGIN_FILE' ) ) {

	if ( is_admin() ) {
		?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}}},"backgroundColor":"white","className":"is-style-blockette-box-shadow"} -->
<div class="wp-block-group is-style-blockette-box-shadow has-white-background-color has-background"
	style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px">
	<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}},"textColor":"primary","className":"has-text-color","fontSize":"extra-small"} -->
	<p class="has-text-align-center has-text-color has-primary-color has-extra-small-font-size" style="line-height:1.5">
		<?php esc_html_e( 'WooCommerce plugin is not active. To use the "Featured category" block, please install and activate WooCommerce. Bellow is visual approximation of "Featured category" blocks using core blocks.', 'blockette' ); ?>
	</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<?php } else { ?>
<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<?php } ?>

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:cover {"url":"<?php echo esc_url( $cat_image_01 ); ?>","id":850,"isRepeated":true,"dimRatio":30,"minHeight":320,"minHeightUnit":"px","isDark":false} -->
		<div class="wp-block-cover is-light is-repeated" style="background-image:url(<?php echo esc_url( $cat_image_01 ); ?>);min-height:320px">
			<span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim"></span>

			<div class="wp-block-cover__inner-container">
				<!-- wp:heading {"textAlign":"center","textColor":"white","fontSize":"large"} -->
				<h2 class="has-text-align-center has-white-color has-text-color has-large-font-size">
					<?php esc_html_e( 'Beauty', 'blockette' ); ?>
				</h2>
				<!-- /wp:heading -->

				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button -->
					<div class="wp-block-button">
						<a class="wp-block-button__link">
							<?php esc_html_e( 'Shop now', 'blockette' ); ?>
						</a>
					</div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
		</div>
		<!-- /wp:cover -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:cover {"url":"<?php echo esc_url( $cat_image_02 ); ?>","id":841,"isRepeated":true,"dimRatio":30,"focalPoint":{"x":"0.48","y":"0.47"},"minHeight":420,"minHeightUnit":"px","isDark":false} -->
		<div class="wp-block-cover is-light is-repeated"
			style="background-image:url(<?php echo esc_url( $cat_image_02 ); ?>);min-height:420px">
			<span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim"></span>
			<div class="wp-block-cover__inner-container">
				<!-- wp:heading {"textAlign":"center","textColor":"white","fontSize":"large"} -->
				<h2 class="has-text-align-center has-white-color has-text-color has-large-font-size">
					<?php esc_html_e( 'Accessories', 'blockette' ); ?>
				</h2>
				<!-- /wp:heading -->

				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button -->
					<div class="wp-block-button">
						<a class="wp-block-button__link">
							<?php esc_html_e( 'Shop now', 'blockette' ); ?>
						</a>
					</div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
		</div>
		<!-- /wp:cover -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:cover {"url":"<?php echo esc_url( $cat_image_03 ); ?>","id":949,"dimRatio":30,"focalPoint":{"x":"0.48","y":"0.47"},"minHeight":370,"minHeightUnit":"px","isDark":false} -->
		<div class="wp-block-cover is-light" style="min-height:370px">
			<span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim"></span>
			<img class="wp-block-cover__image-background wp-image-949" alt=""
				src="<?php echo esc_url( $cat_image_03 ); ?>" style="object-position:48% 47%" data-object-fit="cover"
				data-object-position="48% 47%" />
			<div class="wp-block-cover__inner-container">
				<!-- wp:heading {"textAlign":"center","textColor":"white","fontSize":"large"} -->
				<h2 class="has-text-align-center has-white-color has-text-color has-large-font-size">
					<?php esc_html_e( 'Clothing', 'blockette' ); ?>
				</h2>
				<!-- /wp:heading -->

				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button -->
					<div class="wp-block-button">
						<a class="wp-block-button__link">
							<?php esc_html_e( 'Shop now', 'blockette' ); ?>
						</a>
					</div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
		</div>
		<!-- /wp:cover -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->

<?php // If WooCommerce is active, add "Featured category" blocks in columns. ?>
<?php } else { ?>

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column {"className":"blockette-animate blockette-move-down blockette-delay-1"} -->
	<div class="wp-block-column blockette-animate blockette-move-down blockette-delay-1">
		<!-- wp:woocommerce/featured-category {"dimRatio":30,"editMode":false,"mediaId":850,"mediaSrc":"<?php echo esc_url( $cat_image_01 ); ?>","minHeight":320,"categoryId":148} -->
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link"
					href="#"><?php esc_html_e( 'Shop now', 'blockette' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
		<!-- /wp:woocommerce/featured-category -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"className":"blockette-animate blockette-move-down blockette-delay-3"} -->
	<div class="wp-block-column blockette-animate blockette-move-down blockette-delay-3">
		<!-- wp:woocommerce/featured-category {"dimRatio":30,"editMode":false,"mediaId":841,"mediaSrc":"<?php echo esc_url( $cat_image_02 ); ?>","minHeight":420,"categoryId":113} -->
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button">
				<a class="wp-block-button__link" href="#">
					<?php esc_html_e( 'Shop now', 'blockette' ); ?>
				</a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
		<!-- /wp:woocommerce/featured-category -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"className":"blockette-animate blockette-move-down blockette-delay-5"} -->
	<div class="wp-block-column blockette-animate blockette-move-down blockette-delay-5">
		<!-- wp:woocommerce/featured-category {"dimRatio":30,"editMode":false,"imageFit":"cover","mediaId":949,"mediaSrc":"<?php echo esc_url( $cat_image_03 ); ?>","minHeight":370,"categoryId":148} -->
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button">
				<a class="wp-block-button__link" href="#">
					<?php esc_html_e( 'Shop now', 'blockette' ); ?>
				</a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
		<!-- /wp:woocommerce/featured-category -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->

	<?php
}
