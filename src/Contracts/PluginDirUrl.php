<?php

namespace WpService\Contracts;

interface PluginDirUrl
{
/**
 * Get the URL directory path (with trailing slash) for the plugin __FILE__ passed in.
 *
 * @since 2.8.0
 *
 * @param string $file The filename of the plugin (__FILE__).
 * @return string the URL path of the directory that contains the plugin.
 */
    public function pluginDirUrl(string $file): string;
}
