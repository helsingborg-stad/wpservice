<?php

namespace WpService\Contracts;

interface WpGetPluginError
{
/**
 * Gets the error that was recorded for a paused plugin.
 *
 * @since 5.2.0
 *
 * @global WP_Paused_Extensions_Storage $_paused_plugins
 *
 * @param string $plugin Path to the plugin file relative to the plugins directory.
 * @return array|false Array of error information as returned by `error_get_last()`,
 *                     or false if none was recorded.
 */
    public function wpGetPluginError(string $plugin): array|false;
}
