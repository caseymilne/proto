<?php

$templateBlocks = file_get_contents( get_template_directory() . '/block-template-parts/footer.html' );
$blocks = parse_blocks( $templateBlocks );
foreach( $blocks as $block ) {
	echo render_block( $block );
}

wp_footer();

?>
