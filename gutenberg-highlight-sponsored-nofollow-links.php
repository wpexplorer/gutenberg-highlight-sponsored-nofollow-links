<?php
/**
 * Plugin Name:       Gutenberg Highlight Sponsored & Nofollow Links
 * Plugin URI:        https://github.com/wpexplorer/gutenberg-highlight-sponsored-nofollow-links
 * Description:       Adds a little CSS to the Gutenberg editor in WordPress to highlight sponsored and nofollow links.
 * Version:           1.0
 * Requires at least: 6.6
 * Requires PHP:      8.0
 * Author:            WPExplorer
 * Author URI:        https://www.wpexplorer.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       gutenberg-highlight-sponsored-nofollow-links
 */

/*
Gutenberg Highlight Sponsored & Nofollow Links is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Gutenberg Highlight Sponsored & Nofollow Links is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Gutenberg Highlight Sponsored & Nofollow Links. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

/**
 * Prevent direct access to this file.
 */
defined( 'ABSPATH' ) || exit;

/**
 * Adds inline CSS to the block editor.
 */
add_action( 'enqueue_block_editor_assets', function() {
	wp_register_style( 'wpexplorer-editor-highlight-rel-sponsored-nofollow', false );
	wp_add_inline_style(
		'wpexplorer-editor-highlight-rel-sponsored-nofollow',
		'.editor-styles-wrapper a:is([rel~=sponsored],[rel~=nofollow]){background:#FFFF00;color: #000;}'
	);
	wp_enqueue_style( 'wpexplorer-editor-highlight-rel-sponsored-nofollow' );
} );
