<?php

namespace WpService\Contracts;

interface UninstallPlugin
{
    /**
 * Uninstalls a single plugin.
 *
 * Calls the uninstall hook, if it is available.
 *
 * @since 2.7.0
 *
 * @param string $plugin Path to the plugin file relative to the plugins directory.
 * @return true|void True if a plugin's uninstall.php file has been found and included.
 *                   Void otherwise.
 */
    public function uninstallPlugin(string $plugin): mixed;
}
