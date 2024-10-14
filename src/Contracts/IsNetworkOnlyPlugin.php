<?php

namespace WpService\Contracts;

interface IsNetworkOnlyPlugin
{
/**
 * Checks for "Network: true" in the plugin header to see if this should
 * be activated only as a network wide plugin. The plugin would also work
 * when Multisite is not enabled.
 *
 * Checks for "Site Wide Only: true" for backward compatibility.
 *
 * @since 3.0.0
 *
 * @param string $plugin Path to the plugin file relative to the plugins directory.
 * @return bool True if plugin is network only, false otherwise.
 */
    public function isNetworkOnlyPlugin(string $plugin): bool;
}
