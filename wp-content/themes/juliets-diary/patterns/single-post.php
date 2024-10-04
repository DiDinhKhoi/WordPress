<?php
/**
 * Title: single-post
 * Slug: juliets-diary/single-post
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/b1.jpg' ) ); ?>","hasParallax":true,"dimRatio":50,"overlayColor":"custom-color-1","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","contentPosition":"top center","isDark":false,"layout":{"type":"constrained","contentSize":"100vw"}} -->
<div class="wp-block-cover is-light has-parallax has-custom-content-position is-position-top-center" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-custom-color-1-background-color has-background-dim"></span><div class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_theme_file_uri( 'assets/images/b1.jpg' ) ); ?>)"></div><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:template-part {"slug":"left-area"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/c1.jpg' ) ); ?>","hasParallax":true,"dimRatio":50,"overlayColor":"custom-color-1","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","contentPosition":"top center","isDark":false,"tagName":"main","style":{"border":{"radius":"20px","width":"10px"}},"borderColor":"custom-color-1","layout":{"type":"default"}} -->
<main class="wp-block-cover is-light has-parallax has-custom-content-position is-position-top-center has-border-color has-custom-color-1-border-color" style="border-width:10px;border-radius:20px;min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-custom-color-1-background-color has-background-dim"></span><div class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_theme_file_uri( 'assets/images/c1.jpg' ) ); ?>)"></div><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:post-date /-->

<!-- wp:post-author-name {"isLink":true} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"textAlign":"center","level":1} /-->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:post-content /-->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:comments -->
<div class="wp-block-comments"><!-- wp:comments-title /-->

<!-- wp:comment-template -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"40px"} -->
<div class="wp-block-column" style="flex-basis:40px"><!-- wp:avatar {"size":40,"style":{"border":{"radius":"20px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:comment-author-name {"fontSize":"small"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:comment-date {"fontSize":"small"} /-->

<!-- wp:comment-edit-link {"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:comment-content /-->

<!-- wp:comment-reply-link {"fontSize":"small"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-numbers /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form /--></div>
<!-- /wp:comments --></div></main>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%","style":{"border":{"width":"0px","style":"none"}}} -->
<div class="wp-block-column" style="border-style:none;border-width:0px;flex-basis:25%"><!-- wp:template-part {"slug":"right-area"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /--></div></div>
<!-- /wp:cover -->