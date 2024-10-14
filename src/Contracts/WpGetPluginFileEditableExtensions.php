<?php

namespace WpService\Contracts;

interface WpGetPluginFileEditableExtensions
{
/**
 * Gets the list of file extensions that are editable in plugins.
 *
 * @since 4.9.0
 *
 * @param string $plugin Path to the plugin file relative to the plugins directory.
 * @return string[] Array of editable file extensions.
 */
    public function wpGetPluginFileEditableExtensions(string $plugin): array;
}
