<?php

wp_head();

$blocks = parse_blocks( '<!-- wp:columns {"style":{"color":{"background":"#0073aa"}}} -->
<div class="wp-block-columns has-background" style="background-color:#0073aa"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:navigation {"orientation":"horizontal","textColor":"palette-color-8","itemsJustification":"right","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"normal"} -->
<!-- wp:navigation-link {"label":"Register","type":"page","id":685,"url":"http://saberwp.dev.cc/register","kind":"post-type","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Login","type":"custom","url":"/wp-login.php","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"color":{"background":"#f3f3f3"}}} -->
<div class="wp-block-columns has-background" style="background-color:#f3f3f3"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:image {"id":669,"width":224,"height":36,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="http://saberwp.dev.cc/wp-content/uploads/2021/07/SABERWP-2.png" alt="" class="wp-image-669" width="224" height="36"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:navigation {"orientation":"horizontal","customTextColor":"#b1b1b1","itemsJustification":"right","isResponsive":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"fontSize":"medium"} -->
<!-- wp:navigation-link {"label":"Pricing","type":"page","id":152,"url":"http://saberwp.dev.cc/pricing","kind":"post-type","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Support","type":"page","id":143,"url":"http://saberwp.dev.cc/support","kind":"post-type","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Docs","type":"docs","url":"http://saberwp.dev.cc/docs","kind":"post-type_archive","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"gradient":"teen-party"} -->
<div class="wp-block-column has-teen-party-gradient-background has-background"><!-- wp:paragraph {"align":"center","textColor":"palette-color-8","fontSize":"huge"} -->
<p class="has-text-align-center has-palette-color-8-color has-text-color has-huge-font-size">This site is running an experiment FSE theme named Proto. </p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"contentJustification":"right"} -->
<div class="wp-block-buttons is-content-justification-right"><!-- wp:button {"backgroundColor":"black","textColor":"white","width":50,"className":"is-style-outline","fontSize":"medium"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-50 has-custom-font-size is-style-outline has-medium-font-size"><a class="wp-block-button__link has-white-color has-black-background-color has-text-color has-background"><strong>Learn More about FSE (Full Site Editing)</strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
' );
foreach( $blocks as $block ) {

	echo render_block( $block );

}

?>
