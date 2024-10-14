<?php

namespace WpService\Contracts;

interface GetPluginFiles
{
/**
 * Gets a list of a plugin's files.
 *
 * @since 2.8.0
 *
 * @param string $plugin Path to the plugin file relative to the plugins directory.
 * @return string[] Array of file names relative to the plugin root.
 */
    public function getPluginFiles(string $plugin): array;
}
