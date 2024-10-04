<?php
/**
 * Title: archives
 * Slug: juliets-diary/archives
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/c1.jpg' ) ); ?>","hasParallax":true,"dimRatio":50,"overlayColor":"custom-color-1","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","contentPosition":"top center","isDark":false,"tagName":"main","style":{"border":{"radius":"20px","width":"10px"}},"borderColor":"custom-color-1","layout":{"type":"constrained","wideSize":""}} -->
<main class="wp-block-cover is-light has-parallax has-custom-content-position is-position-top-center has-border-color has-custom-color-1-border-color" style="border-width:10px;border-radius:20px;min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-custom-color-1-background-color has-background-dim"></span><div class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_theme_file_uri( 'assets/images/c1.jpg' ) ); ?>)"></div><div class="wp-block-cover__inner-container"><!-- wp:query {"queryId":53,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-date /-->

<!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p> </p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div></main>
<!-- /wp:cover -->