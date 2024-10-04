<?php
/**
 * Title: page
 * Slug: juliets-diary/page
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
<main class="wp-block-cover is-light has-parallax has-custom-content-position is-position-top-center has-border-color has-custom-color-1-border-color" style="border-width:10px;border-radius:20px;min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-custom-color-1-background-color has-background-dim"></span><div class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_theme_file_uri( 'assets/images/c1.jpg' ) ); ?>)"></div><div class="wp-block-cover__inner-container"><!-- wp:post-title {"level":1} /-->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:post-content /--></div></main>
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