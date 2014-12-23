<?php

/**
 * Plugin Name: Remote Markdown
 * Plugin URI: https://github.com/richjenks/wp-remote-markdown/
 * Description: Gets markdown files hosted remotely and parses their contents
 * Version: 1.0
 * Author: Rich Jenks <rich@richjenks.com>
 * Author URI: https://richjenks.com
 * License: GPL2
 */

namespace RichJenks\WPRemoteMarkdown;
if ( !class_exists('Parsedown') ) require_once __DIR__.'/parsedown/Parsedown.php';

add_shortcode( 'remote-markdown', function($atts) {
	if ( isset( $atts['url'] ) ) {
		$Parsedown = new \Parsedown();
		return $Parsedown->text( file_get_contents( $atts['url'] ) );
	}
} );
