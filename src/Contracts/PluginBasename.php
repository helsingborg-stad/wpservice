<?php

namespace WpService\Contracts;

interface PluginBasename
{
    /**
     * Gets the basename of a plugin.
     *
     * This method extracts the name of a plugin from its filename.
     *
     * @since 1.5.0
     *
     * @global array $wp_plugin_paths
     *
     * @param string $file The filename of plugin.
     * @return string The name of a plugin.
     */
    public function pluginBasename(string $file): string;
}
