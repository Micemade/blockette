<?php
/**
 * Title: 404
 * Slug: blockette/404
 * Categories: text
 * inserter: no
 *
 * @package blockette
 * @since 1.0.0
 */

?>
<!-- wp:heading {"className":"is-style-blockette-text-shadow","textAlign":"center","fontSize":"x-large"} -->
<h2 class="has-text-align-center has-x-large-font-size is-style-blockette-text-shadow">
	<?php esc_html_e( 'Page not found', 'blockette' ); ?>
</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>
	<?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'blockette' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search"} /-->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}},"className":"is-style-blockette-box-shadow"} -->
<div class="wp-block-group is-style-blockette-box-shadow" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
	<!-- wp:heading {"textAlign":"center","level":3,"className":"is-style-blockette-text-shadow","fontSize":"large"} -->
	<h3 class="has-text-align-center is-style-blockette-text-shadow has-large-font-size">Latest posts</h3>
	<!-- /wp:heading -->

	<!-- wp:query {"queryId":14,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
	<div class="wp-block-query">
		<!-- wp:post-template -->
		<!-- wp:separator {"style":{"color":{"background":"#e0e0e0"}},"className":"alignwide is-style-wide"} -->
		<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background alignwide is-style-wide" style="background-color:#e0e0e0;color:#e0e0e0"/>
		<!-- /wp:separator -->

		<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%">
			<!-- wp:post-date {"format":null,"textColor":"secondary","fontSize":"extra-small"} /-->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"80%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80%">
			<!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":"1.1"},"color":{"link":"#ffffff"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"white","fontSize":"large"} /-->
			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->
		<!-- /wp:post-template -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
