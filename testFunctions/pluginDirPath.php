<?php

/**
 * Get the filesystem directory path (with trailing slash) for the plugin __FILE__ passed in.
 *
 * @since 2.8.0
 *
 * @param string $file The filename of the plugin (__FILE__).
 * @return string the filesystem path of the directory that contains the plugin.
 */
function pluginDirPath( $file ) {
	return trailingslashit( dirname( $file ) );
}
