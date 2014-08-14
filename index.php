<?php

/**
 * Plugin Name: Remote Markdown
 * Plugin URI: http://richjenks.com
 * Description: Gets markdown files hosted remotely and parses their contents
 * Version: 1.0
 * Author: Rich Jenks <rich@richjenks.com>
 * Author URI: http://richjenks.com
 * License: GPL2
 */

namespace RichJenks\WPRemoteMarkdown;

require_once __DIR__.'/parsedown/Parsedown.php';

add_shortcode( 'remote-markdown', function($atts) {
	if ( isset( $atts['url'] ) ) {
		$Parsedown = new \Parsedown();
		return $Parsedown->text( file_get_contents( $atts['url'] ) );
	}
} );
