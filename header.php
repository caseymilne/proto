<?php

wp_head();

$templateBlocks = file_get_contents( get_template_directory() . '/block-template-parts/header.html' );
$blocks = parse_blocks( $templateBlocks );
foreach( $blocks as $block ) {
	echo render_block( $block );
}

?>
