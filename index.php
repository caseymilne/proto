<?php
/**
 * WordPress considers the theme broken without index.php file.
 * Not required for Full Site Editing.
 * Can be removed in future when not required.
 */

if ( current_user_can( 'activate_plugins' ) ) {
	esc_html_e( 'This is an experimental Full Site Editing theme and requires the Gutenberg plugin to be installed and active.', 'proto' );
}
