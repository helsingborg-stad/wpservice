<?php

namespace WpService\Contracts;

interface WpSkipPausedPlugins
{
    /**
     * Filters a given list of plugins, removing any paused plugins from it.
     *
     * @since 5.2.0
     *
     * @global WP_Paused_Extensions_Storage $_paused_plugins
     *
     * @param string[] $plugins Array of absolute plugin main file paths.
     * @return string[] Filtered array of plugins, without any paused plugins.
     */
    public function wpSkipPausedPlugins(array $plugins): array;
}
