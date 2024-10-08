<?php

namespace WpService\Contracts;

interface IsUninstallablePlugin
{
    /**
 * Determines whether the plugin can be uninstalled.
 *
 * @since 2.7.0
 *
 * @param string $plugin Path to the plugin file relative to the plugins directory.
 * @return bool Whether plugin can be uninstalled.
 */
    public function isUninstallablePlugin(string $plugin): bool;
}
