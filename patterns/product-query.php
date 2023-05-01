<?php
/**
 * Title: Product query
 * Slug: blockette/product-query
 * Categories: text
 * inserter: no
 *
 * @package blockette
 * @since 1.0.4
 */

?>

<?php if ( ! class_exists( '\Automattic\WooCommerce\Blocks\BlockTypes\ProductQuery' ) ) { ?>

	<!-- wp:woocommerce/legacy-template {"template":"archive-product"} /-->

<?php } else { ?>

	<!-- wp:query {"queryId":1,"query":{"perPage":9,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":true,"__woocommerceAttributes":[],"__woocommerceStockStatus":["instock","outofstock","onbackorder"]},"displayLayout":{"type":"flex","columns":3},"namespace":"woocommerce/product-query","layout":{"type":"default"}} -->
	<div class="wp-block-query">

		<!-- wp:columns -->
		<div class="wp-block-columns">

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group alignwide"><!-- wp:woocommerce/breadcrumbs /--></div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
				<div class="wp-block-group"><!-- wp:woocommerce/catalog-sorting /--></div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

		<!-- wp:post-template {"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->

			<!-- wp:woocommerce/product-image {"isDescendentOfQueryLoop":true} /-->

			<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"fontSize":"medium","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

			<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center"} /-->

			<!-- wp:woocommerce/product-button {"isDescendentOfQueryLoop":true,"textAlign":"center"} /-->

		<!-- /wp:post-template -->

		<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
			<!-- wp:query-pagination-previous /-->
			<!-- wp:query-pagination-numbers /-->
			<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
				<p></p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->

	</div>
	<!-- /wp:query -->

	<?php
}
