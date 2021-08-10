<?php

$blocks = parse_blocks( '<!-- wp:columns {"verticalAlignment":null} -->
<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:image {"align":"right","id":1533,"width":230,"height":36,"sizeSlug":"full","linkDestination":"none"} -->
<div class="wp-block-image"><figure class="alignright size-full is-resized"><img src="http://saberwp.dev.cc/wp-content/uploads/2021/08/SABERWP1.png" alt="" class="wp-image-1533" width="230" height="36"/></figure></div>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->' );
foreach( $blocks as $block ) {

	echo render_block( $block );

}

wp_footer();

?>
